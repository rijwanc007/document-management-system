<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SuperAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $super_admin = User::where('status','=','super_admin')->first();
        return view('Admin.Super_Admin.super_admin_index',compact('super_admin'));
    }
}
