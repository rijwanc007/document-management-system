<?php

namespace App\Http\Controllers\Admin;

use App\Permission;
use App\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $roles = Role::where('status','=','admin')->orderBy('id','DESC')->get();
        return view('Admin.Role_Management.role_index',compact('roles'));
    }
    public function create()
    {
        $permissions = Permission::all();
        return view('Admin.Role_Management.role_create',compact('permissions'));
    }
    public function store(Request $request)
    {
        $role = Role::create([
          'role_name' =>$request->role_name,
           'status' =>'admin'
        ]);
        $role->permissions()->sync($request->permission);
        Session::flash('success','Admin Role Was Created Successfully');
        return redirect('role');
    }
    public function edit($id)
    {
        $role = Role::find($id)->permissions;
        $role_data = Role::find($id);
        $permissions = Permission::all();
        return view('Admin.Role_Management.role_edit',compact('role','role_data','permissions'));
    }
    public function update(Request $request, $id)
    {
        $permission_update = Role::find($id);
        $permission_update->update([
           'role_name' =>$request->role_name
        ]);
        $permission_update->permissions()->sync($request->permission);
        Session::flash('success','Admin Role Was Updated Successfully');
        return redirect('role');
    }
    public function destroy($id)
    {
        $role_user = DB::table('role_user')->where('role_id','=',$id);
        $role_user->delete();
        $permission_role = DB::table('permission_role')->where('role_id','=',$id);
        $permission_role->delete();
        $delete_role = Role::find($id);
        $delete_role->delete();
        Session::flash('success','Admin Role Was Delete Successfully');
        return redirect('role');
    }
}
