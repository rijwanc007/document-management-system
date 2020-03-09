<?php

namespace App\Http\Controllers\Admin;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class SecurityManagementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $test = User::all()->first();
        $role_selected = User::find($test->id)->roles;
        $employees = User::where('status','=',null)->get();
        $roles = Role::where('status','=','admin')
              ->orWhere('status','=','no_roll')
              ->get();
      return view('Admin/Security_management/security_index',compact('employees','roles','role_selected'));
  
    }
    public function update(Request $request)
    {
        $employee = User::find($request->employee_id);
        if($request->role_id !='No Role Selected Yet')
        {
            $employee->roles()->sync($request->role_id);
            Session::flash('success','Role Updated Successfully');
        }
        elseif($request->role_id =='No Role Selected Yet'){
            Session::flash('warning','Opps No Role Selected');
        }
        return redirect()->back();
    }
    public function employeeRole($employee_id){
        $role_selected = DB::table('role_user')->where('user_id','=',$employee_id)->first();
        if(empty($role_selected)){
            $role_name = 'No Role Selected Yet';
        }elseif(!empty($role_selected)){
            $role_name_find = DB::table('roles')->where('id','=',$role_selected->role_id)->first();
            $role_name = $role_name_find->role_name;
        }
        return response()->json($role_name);
    }
}
