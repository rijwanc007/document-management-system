<?php

namespace App\Http\Controllers;

use App\ContactManagement;
use App\RecentActivity;
use App\Todo;
use App\User;
use Auth;
use App\Role;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $employee = User::all();
        $contact = ContactManagement::all();
        $employees_recent = User::where('status','=',null)->where('id','!=',Auth::user()->id)->orderBy('id','DESC')->take(8)->get();
        $recent_activities = RecentActivity::all();
        $employee_count = count($employee);
        $contact_count = count($contact);
        return view('Admin.Home.dashboard',compact('employee_count','contact_count','employees_recent','recent_activities'));
    }
    public function store(Request $request){
        Todo::create([
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
            'slug' => rand(),
            'user_id' => Auth::user()->id
        ]);
        return response()->json();
    }
    public function update(Request $request){
        $update = Todo::where('slug','=',$request->id);
        $update->update([
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
            'slug' => $request->id,
        ]);
        return response()->json();
    }
    public function delete(Request $request){
        $delete_todo = Todo::where('slug','=',$request->todo_delete);
        $delete_todo->delete();
        return response()->json();
    }
    public function todo_show(){
        $todo_lists = Todo::where('user_id','=',Auth::user()->id)->get();
        return response()->json($todo_lists);
    }
}
