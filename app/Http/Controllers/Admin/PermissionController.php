<?php

namespace App\Http\Controllers\Admin;

use App\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PermissionController extends Controller
{
    public function index()
    {

    }
    public function create()
    {
      return view('Admin.Permission_Management.permission_create');
    }
    public function store(Request $request)
    {
       Permission::create([
          'permission_name'=>$request->permission_name,
          'permission_for'=>$request->permission_for
       ]);
       return redirect()->back();
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
