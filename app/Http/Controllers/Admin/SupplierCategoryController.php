<?php

namespace App\Http\Controllers\Admin;

use App\Project;
use App\Supplier;
use App\SupplierCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SupplierCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request){
        $categories = SupplierCategory::orderBy('id','=','DESC')->paginate(20);
        if($request->ajax()){
            return view('Admin.Supplier_Category.category_pagination',compact('categories'))->render();
        }
        return view('Admin.Supplier_Category.all_category',compact('categories'));
    }
    public function store(Request $request)
    {
       SupplierCategory::create([
          'title' => $request->title,
           'slug' => $request->slug,
           'description' => $request->description,
       ]);
    }
    public function update(Request $request)
    {
        $update = SupplierCategory::find($request->id);
        $update->update([
           'title' => $request->title,
           'slug' => $request->slug,
           'description' => $request->description,
        ]);
        $project_category_update = Project::where('category_id','=',$request->id);
        $project_category_update->update([
           'category_title' => $request->title,
        ]);
        $supplier_category_update = Supplier::where('category_id','=',$request->id);
        $supplier_category_update->update([
           'supplier_category' => $request->title,
        ]);
        return response()->json();
    }
    public function destroy($id)
    {
        $delete = SupplierCategory::find($id);
        $delete->delete();
        $project_category_update = Project::where('category_id','=',$id);
        $project_category_update->update([
            'category_title' => null,
        ]);
        $supplier_category_update = Supplier::where('category_id','=',$id);
        $supplier_category_update->update([
            'supplier_category' => null,
            'category_id' => null,
        ]);
       return response()->json();
    }
    public function search($search)
    {
        $categories = SupplierCategory::where('title','like','%'.$search.'%')
            ->orWhere('description','like','%'.$search.'%')
            ->paginate(24);
        return view('Admin.Supplier_Category.category_pagination',compact('categories'))->render();
    }
}
