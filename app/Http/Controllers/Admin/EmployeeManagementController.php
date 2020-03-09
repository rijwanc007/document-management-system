<?php

namespace App\Http\Controllers\Admin;
use App\RecentActivity;
use App\Role;
use App\User;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class EmployeeManagementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
         $roles = Role::where('status','=','admin')
                ->orWhere('status','=','no_roll')
                ->orderBy('id','DESC')->get();
        $employees = User::where('status','=',null)->where('id','!=',Auth::user()->id)->orderBy('id','DESC')->paginate(24);
        if ($request->ajax()) {
            return view('Admin.Employee_Management.employee_pagination',compact('employees','roles'))->render();
        }
        return view('Admin.Employee_Management.all_employee',compact('employees','roles'));
    }
    public function create()
    {
        $roles = Role::where('status','=','admin')
               ->orderBy('id','DESC')->get();
        return view('Admin.Employee_Management.add_employee',compact('roles'));
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'email' => 'unique:users|email'
        ]);
        $pic = $request->file('employee_pic');
        $pic_name =time().'.'.$pic->getClientOriginalExtension();
        $pic->move(public_path('/aegis_files/employee_image/'),$pic_name);
        $employee =User::create([
        'employee_pic'=>$pic_name,
        'first_name'=>$request->first_name,
        'last_name'=>$request->last_name,
        'full_name'=>$request->first_name.' '.$request->last_name,
        'status' => null,
        'company'=>$request->company,
        'job_title'=>$request->job_title,
        'email'=>$request->email,
        'website'=>$request->website,
        'mobile_phone'=>$request->mobile_phone,
        'home_phone'=>$request->home_phone,
        'link_profile'=>$request->link_profile,
        'facebook'=>$request->facebook,
        'sky_id'=>$request->sky_id,
        'password'=>bcrypt($request->password),
        'confirm_password'=>$request->confirm_password,
        'address_location'=>$request->address_location,
        'address_area_division'=>$request->address_area_division,
        'address_two'=>$request->address_two,
        'notes'=>$request->notes,
    ]);
        $employee->roles()->sync($request->role_id);
        Session::flash('success','Employee Added Successfully');
        return redirect('employee');
    }
    public function show($id)
    {
        $full_name = (explode('_',$id));
        $show_id = end($full_name);
        $employee = User::find($show_id);
        $role_selected = DB::table('role_user')->where('user_id','=',$show_id)->first();
        if(empty($role_selected)){
            $role_name = 'No Role Selected Yet';
        }elseif(!empty($role_selected)){
            $role_name_find = DB::table('roles')->where('id','=',$role_selected->role_id)->first();
            $role_name = $role_name_find->role_name;
        }
        if($employee->status == null){
             $roles = Role::where('status','=','admin')
                    ->orWhere('status','=','no_roll')
                    ->orderBy('id','DESC')->get();
             return view('Admin.Employee_Management.employee_profile',compact('employee','roles','role_name'));
        }
        elseif ($employee->status =='super_admin'){
             $super_admin = User::where('status','=','super_admin')->first();
             return view('Admin.Super_Admin.super_admin_index',compact('super_admin'));
        }
    }
    public function alphabet($alphabet){
         $roles = Role::where('status','=','admin')
                ->orWhere('status','=','no_roll')
                ->orderBy('id','DESC')->get();
         if($alphabet =='all'){
            $employees = User::where('status','=',null)->where('id','!=',Auth::user()->id)->orderBy('id','DESC')
                ->paginate(24);
            return view('Admin.Employee_Management.employee_pagination',compact('employees','roles'))->render();
         }else{
            $employees = User::where('first_name','like',$alphabet.'%')
                        ->where('id','!=',Auth::user()->id)
                        ->where('status','=',null)
                        ->paginate(24);
            return view('Admin.Employee_Management.employee_pagination',compact('employees','roles'))->render();
         }
    }
    public function search($search){
        $roles = Role::where('status','=','admin')
            ->orWhere('status','=','no_roll')
            ->orderBy('id','DESC')->get();
        $employees = User::where('first_name','like',$search.'%')
            ->where('status','=',null)
            ->where('id','!=',Auth::user()->id)
            ->orWhere('last_name','like',$search.'%')
            ->where('status','=',null)
            ->where('id','!=',Auth::user()->id)
            ->orWhere('email','like',$search.'%')
            ->where('status','=',null)
            ->where('id','!=',Auth::user()->id)
            ->orWhere('full_name','like','%'.$search.'%')
            ->where('status','=',null)
            ->where('id','!=',Auth::user()->id)
            ->paginate(24);
        return view('Admin.Employee_Management.employee_pagination',compact('employees','roles'))->render();
    }
    public function edit($edit)
    {
            $data_edit = User::find($edit);
            $role_selected = DB::table('role_user')->where('user_id','=',$edit)->first();
        if(empty($role_selected)){
            $role_name = 'No Role Selected Yet';
        }elseif(!empty($role_selected)){
            $role_name_find = DB::table('roles')->where('id','=',$role_selected->role_id)->first();
            $role_name = $role_name_find->role_name;
        }
        return response()->json([$data_edit,$role_name]);
    }
    public function ImageUpdate(Request $request){
            $id = $request->id;
            $image = $request->file('employee_pic');
            $new_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/aegis_files/employee_image/'), $new_name);
            $recent_activity_update = RecentActivity::where('user_id','=',$id);
            if(!empty($recent_activity_update)){
                $recent_activity_update->update([
                    'user_pic' => $new_name
                ]);
            }
            $delete_pic = User::find($id);
            $update = User::find($id);
            $update->update([
                'employee_pic' => $new_name
            ]);
//          unlink('aegis_files/employee_image/'.$delete_pic->employee_pic);
            return response()->json();
    }
    public function update(Request $request)
    {
        $data_edit = $request->edit_id;
        $update = User::find($data_edit);
        $update->update([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'full_name'=>$request->first_name.' '.$request->last_name,
            'company'=>$request->company,
            'job_title'=>$request->job_title,
            'email'=>$request->email,
            'website'=>$request->website,
            'mobile_phone'=>$request->mobile_phone,
            'home_phone'=>$request->home_phone,
            'link_profile'=>$request->link_profile,
            'facebook'=>$request->facebook,
            'sky_id'=>$request->sky_id,
            'password'=>bcrypt($request->password),
            'confirm_password'=>$request->confirm_password,
            'address_location'=>$request->address_location,
            'address_area_division'=>$request->address_area_division,
            'address_two'=>$request->address_two,
            'notes'=>$request->notes,
        ]);
        $recent_activity_update = RecentActivity::where('user_id','=',$data_edit);
        if(!empty($recent_activity_update)){
            $recent_activity_update->update([
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
            ]);
        }
        if(!empty($request->role_id)){
            $update->roles()->sync($request->role_id);
        }
        return response()->json($request->role_id);
    }
    public function delete($delete_employee){
            $delete_employee_permanetly = User::find($delete_employee);
            $delete_employee_permanetly->delete();
//          unlink('aegis_files/employee_image/'.$delete_employee_permanetly->employee_pic);
            return response()->json();
    }
}
