<?php

namespace App\Http\Controllers\FrontEnd;

use App\Project;
use App\Supplier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ContactManagement;
use App\RecentActivity;
use App\Todo;
use App\User;
use Auth;
use App\Role;
use App\Theme;


class DashBoardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $roles  = Role::where('status','=','admin')
                ->orWhere('status','=','no_roll')
                ->orderBy('id','DESC')->get();
        $employees = User::where('status','=',null)->where('id','!=',Auth::user()->id)->orderBy('id','DESC')->paginate(24);
        $contact_information = ContactManagement::orderBy('id','DESC')->paginate(24);
        $employee = User::all();
        $contact = ContactManagement::all();
        $supplier = Supplier::all();
        $project = Project::all();
        $employees_recent = User::where('status','=',null)->where('id','!=',Auth::user()->id)->orderBy('id','DESC')->take(8)->get();
        $recent_activities = RecentActivity::all();
        $employee_count = count($employee);
        $contact_count = count($contact);
        $supplier_count = count($supplier);
        $project_count = count($project);
        return view('Admin.Home.dashboard',compact('employee_count','contact_count','supplier_count','project_count','employees_recent','recent_activities', 'roles','employees','contact_information'));
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
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
    public function todoStore(Request $request){
        Todo::create([
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
            'slug' => rand(),
            'user_id' => Auth::user()->id
        ]);
        return response()->json();
    }
    public function todoUpdate(Request $request){
        $update = Todo::where('slug','=',$request->id);
        $update->update([
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
            'slug' => $request->id,
        ]);
        return response()->json();
    }
    public function todoDelete(Request $request){
        $delete_todo = Todo::where('slug','=',$request->todo_delete);
        $delete_todo->delete();
        return response()->json();
    }
    public function todoShow(){
        $todo_lists = Todo::where('user_id','=',Auth::user()->id)->get();
        return response()->json($todo_lists);
    }
    public function themeOption($theme_id){
        $theme = Theme::find(1);
        $theme->update([
            'themeid' => $theme_id,
            ]);
        return response()->json($theme_id);
    }
}
