<?php

namespace App\Http\Controllers\Admin;

use App\ContactManagement;
use App\RecentActivity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Auth;

class ContactManagementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $contact_information = ContactManagement::orderBy('id','DESC')->paginate(24);
        if ($request->ajax()) {
            return view('Admin.Contact_Management.contact_pagination',compact('contact_information'))->render();
        }
        return view('Admin.Contact_Management.all_contact',compact('contact_information'));
    }
    public function create()
    {
        return view('Admin.Contact_Management.add_contact');
    }
    public function store(Request $request)
    {
        $contact_pic=$request->file('contact_pic');
        $contact_pic_name=time().'.'.$contact_pic->getClientOriginalExtension();
        $contact_pic->move(public_path().'/aegis_files/contact_image/',$contact_pic_name);
        ContactManagement::create([
           'contact_pic'=>$contact_pic_name,
           'first_name'=>$request->first_name,
           'last_name'=>$request->last_name,
           'full_name'=>$request->first_name.' '.$request->last_name,
           'company'=>$request->company,
           'job_title'=>$request->job_title,
           'email_address'=>$request->email_address,
           'website'=>$request->website,
           'mobile'=>$request->mobile,
           'home_phone'=>$request->home_phone,
           'link_profile'=>$request->link_profile,
           'facebook'=>$request->facebook,
           'skype'=>$request->skype,
           'address_location'=>$request->address_location,
           'address_area_division'=>$request->address_area_division,
           'address_two'=>$request->address_two,
           'description'=>$request->description,
       ]);
        Session::flash('success','Contact Added Successfully');
       return redirect('contact');
    }
    public function show($id)
    {
        $full_name = (explode('_',$id));
        $show_id = end($full_name);
        $information = ContactManagement::find($show_id);
       return view('Admin.Contact_Management.contact_profile',compact('information'));
    }
    public function edit($edit)
    {
      $edit_data = ContactManagement::find($edit);
      return response()->json($edit_data);
    }
    public function update(Request $request)
    {
        $edit_id = $request->edit_id;
        $update = ContactManagement::find($edit_id);
        $update->update([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'full_name'=>$request->first_name.' '.$request->last_name,
            'company'=>$request->company,
            'job_title'=>$request->job_title,
            'email_address'=>$request->email_address,
            'website'=>$request->website,
            'mobile'=>$request->mobile,
            'home_phone'=>$request->home_phone,
            'link_profile'=>$request->link_profile,
            'facebook'=>$request->facebook,
            'skype'=>$request->skype,
            'address_location'=>$request->address_location,
            'address_area_division'=>$request->address_area_division,
            'address_two'=>$request->address_two,
            'description'=>$request->description,
        ]);
        return response()->json();
    }
    public function ImageUpdate(Request $request){
        $id = $request->id;
        $image = $request->file('contact_pic');
        $new_name = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('/aegis_files/contact_image/'), $new_name);
        $delete_pic = ContactManagement::find($id);
        $update = ContactManagement::find($id);
        $update->update([
            'contact_pic' => $new_name
        ]);
//        unlink('aegis_files/contact_image/'.$delete_pic->contact_pic);
        return response()->json();
    }
    public function delete($id){
        $recent_activity = ContactManagement::find($id);
        RecentActivity::create([
            'user_id'=>Auth::user()->id,
            'user_pic'=>Auth::user()->employee_pic,
            'first_name'=>Auth::user()->first_name,
            'last_name'=>Auth::user()->last_name,
            'deleted_first_name'=>$recent_activity->first_name,
            'deleted_last_name' =>$recent_activity->last_name,
            'deleted_status' =>'Contact',
            'ip_address' => \Request::ip(),
        ]);
        $delete_contact = ContactManagement::find($id);
        $delete_contact->delete();
//        unlink('aegis_files/contact_image/'.$delete_contact->contact_pic);
        return response()->json();
    }
    public function search($search)
    {
        $contact_information = ContactManagement::where('first_name','like',$search.'%')
                             ->orWhere('last_name','like',$search.'%')
                             ->orWhere('email_address','like',$search.'%')
                             ->orWhere('full_name','like','%'.$search.'%')
                             ->paginate(24);
        return view('Admin.Contact_Management.contact_pagination',compact('contact_information'))->render();
    }
    public function alphabet($alphabet){
        if($alphabet =='all'){
            $contact_information = ContactManagement::orderBy('id','DESC')->paginate(24);
            return view('Admin.Contact_Management.contact_pagination',compact('contact_information'))->render();
        }else{
            $contact_information = ContactManagement::where('first_name','like',$alphabet.'%')->paginate(24);
            return view('Admin.Contact_Management.contact_pagination',compact('contact_information'))->render();
        }
    }
}
