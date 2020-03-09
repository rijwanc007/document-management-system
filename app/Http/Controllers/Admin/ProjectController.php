<?php

namespace App\Http\Controllers\Admin;

use App\ProjectTodo;
use App\Supplier;
use App\SupplierCategory;
use App\SupplierContact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use ZanySoft\Zip\ZipManager;
use App\File;
use Response;
use Zip;
use App\Project;
use DB;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $categories = SupplierCategory::orderBy('id','=','DESC')->get();
        $projects = DB::table('projects')->orderBy('id','=','DESC')->get();
        return view('Admin.Project_Management.manage_project',compact('projects','categories'));
    }
    public function create()
    {
        $categories = SupplierCategory::orderBy('id','=','DESC')->get();
        return view('Admin.Project_Management.add_project',compact('categories'));
    }
    public function categoryDependSupplier($id,$my_pro_id){
        $category_depend_suppliers = Supplier::where('category_id','=',$id)->orderBy('id','=','DESC')->get();
        return response()->json($category_depend_suppliers);
    }
    public function downloadProjectFile($id){
         if($id){
            $files_by_id = Project::find($id);
              $files =  json_decode($files_by_id->file);
              if(!empty($files)){
            $public_dir= public_path().'/aegis_files/projectfile';
            $manager = new ZipManager();
            foreach($files as $file){
                $allfiles[] =$public_dir.'/'.$file;
             }
            $zipfielname =time().$files_by_id->pro_name.'.zip';
            $zip = Zip::create($zipfielname)->add($allfiles);
            $zip->close();
            header("Content-disposition: attachment; filename=" . basename($zipfielname) . "");
            header('Content-Length: ' . filesize($zipfielname));
            header("Content-Type: application/octet-stream;");
            readfile($zipfielname);
            unlink($zipfielname);  
              }
              else{
                  Session::flash('warning',"No File Available To Download");
                  return redirect()->back();
              }
          }
    }
        public function store(Request $request)
    {
             if($request->file('file'))
                {
                 foreach($request->file('file') as $image)
                    {
                        $inname=$image->getClientOriginalName();
                        $final_name = str_replace('.','2',$inname);
                        $extension = $image->getClientOriginalExtension();
                        $name = rand().'.'.$final_name.'.'.$extension;
                        $image->move(public_path().'/aegis_files/projectfile/', $name);
                        $data[] = $name;
                  }
                    $project = new Project();
                    $slug = str_replace(' ','-',$request->pro_name);
                    $project->pro_name = $request->pro_name;
                    $project->slug = $slug.'-'.rand();
                    $project->pro_entity = $request->pro_entity;
                    $project->pro_epc = $request->pro_epc;
                    $project->pro_funding = $request->pro_funding;
                    $project->pro_sup_cat = $request->pro_sup_cat;
                    $project->file = json_encode($data);
                    $project->pro_description = $request->pro_description;
                    $project->pro_status= $request->project_status;
                    $project->closing_date= $request->closing_date;
                    if(!empty($request->category_id)){
                      $project->category_id = $request->category_id;  
                    }else{
                        $project->category_id = 0;
                    }
                    $project->category_title = $request->category_title;
                    $project->save();
                    }
        $project->suppliers()->sync($request->suppliers);
    }
    public function UpdateProject(Request $request){
        if($request->file('file'))
        {
            foreach($request->file('file') as $image)
            {
                $inname=$image->getClientOriginalName();
                $final_name = str_replace('.','2',$inname);
                $extension = $image->getClientOriginalExtension();
                $name = rand().'.'.$final_name.'.'.$extension;
                $image->move(public_path().'/aegis_files/projectfile/', $name);
                $data[] = $name;
            }
            $project = Project::find($request->my_pro_id);
            $old_file = json_decode($project->file);
            $new_data = array_merge($old_file,$data);
            $slug = str_replace(' ','-',$request->pro_name);
            $project->pro_name = $request->pro_name;
            $project->slug = $slug.'-'.rand();
            $project->pro_entity = $request->pro_entity;
            $project->pro_epc = $request->pro_epc;
            $project->pro_funding = $request->pro_funding;
            $project->file = json_encode($new_data);
            $project->pro_description = $request->pro_description;
            $project->closing_date= $request->closing_date;
            $project->pro_status= $request->project_update_status;
            if(!empty($request->project_category_id)){
                $project->category_id = $request->project_category_id;
                $project->category_title = $request->project_category_title;
            }
            $project->save();
            $project->update();
            $project->suppliers()->sync($request->suppliers);
            return Redirect::to('project');
        }
        else{
            $project = Project::find($request->my_pro_id);
            $slug = str_replace(' ','-',$request->pro_name);
            $project->pro_name = $request->pro_name;
            $project->slug = $slug.'-'.rand();
            $project->pro_entity = $request->pro_entity;
            $project->pro_epc = $request->pro_epc;
            $project->pro_funding = $request->pro_funding;
            $project->pro_description = $request->pro_description;
            $project->pro_status= $request->project_update_status;
            $project->closing_date= $request->closing_date;
            if(!empty($request->project_category_id)){
                $project->category_id = $request->project_category_id;
                $project->category_title = $request->project_category_title;
            }
            $project->save();
            $project->update();
            $project->suppliers()->sync($request->suppliers);
            return Redirect::to('project');
        }
    }
    public function updateSingleProject(Request $request){
        if($request->file('file'))
        {
            foreach($request->file('file') as $image)
            {
                $inname=$image->getClientOriginalName();
                $final_name = str_replace('.','2',$inname);
                $extension = $image->getClientOriginalExtension();
                $name = rand().'.'.$final_name.'.'.$extension;
                $image->move(public_path().'/aegis_files/projectfile/', $name);
                $data[] = $name;
            }
            $project = Project::find($request->my_pro_id);
            $old_file = json_decode($project->file);
            $new_data = array_merge($old_file,$data);
            $slug = str_replace(' ','-',$request->pro_name);
            $slug_store = $slug.'-'.rand();
            $project->pro_name = $request->pro_name;
            $project->pro_entity = $request->pro_entity;
            $project->pro_epc = $request->pro_epc;
            $project->pro_funding = $request->pro_funding;
            $project->file = json_encode($new_data);
            $project->pro_description = $request->pro_description;
            $project->closing_date= $request->closing_date;
            $project->pro_status= $request->project_update_status;
            if(!empty($request->project_category_id)){
                $project->category_id = $request->project_category_id;
                $project->category_title = $request->project_category_title;
            }
            $project->save();
            $project->update();
            $project->suppliers()->sync($request->suppliers);
            // return redirect()->route('project.show',$request->pro_name.'_'.$request->my_pro_id);
        }
        else{
            $project = Project::find($request->my_pro_id);
            $slug = str_replace(' ','-',$request->pro_name);
            $slug_store = $slug.'-'.rand();
            $project->slug = $slug_store;
            $project->pro_name = $request->pro_name;
            $project->pro_entity = $request->pro_entity;
            $project->pro_epc = $request->pro_epc;
            $project->pro_funding = $request->pro_funding;
            $project->pro_description = $request->pro_description;
            $project->pro_status= $request->project_update_status;
            $project->closing_date= $request->closing_date;
            if(!empty($request->project_category_id)){
                $project->category_id = $request->project_category_id;
                $project->category_title = $request->project_category_title;
            }
            $project->save();
            $project->update();
            $project->suppliers()->sync($request->suppliers);
            return redirect()->route('project.show',$request->pro_name.'_'.$request->my_pro_id);
        }
    }
      public function projectSelectedSupplier($id,$project_category_id){
          $projectSelectedSupplier = Project::find($id)->suppliers;
          $project_file = Project::find($id);
          $project_category_supplier = Supplier::where('category_id','=',$project_category_id)->get();
          if(empty($project_category_supplier)){
              $project_category_supplier = null;
          }
          return response()->json([$projectSelectedSupplier,$project_file['file'],$project_category_supplier]);
      }
      public function projectSupplierRelation($project_supplier_relation,$category_name){
         $match = Project::where('category_title','=',$category_name)->first();
         if(!empty($match)){
             $projectSelectedSupplier = Project::find($project_supplier_relation)->suppliers;
             return response()->json();
         }
      }
      public function projectDelete($id){
          $del_data = Project::find($id);
          $unlinkimage =  $del_data->file;
        $decoded = json_decode($unlinkimage,true);
        if(!empty($decoded)){
            foreach($decoded as $value){
                unlink('aegis_files/projectfile/'.$value);
            }
        }
          $del_data->delete();
          return redirect('project');
      }
      public function singleProjectDelete($id){
          $del_data = Project::find($id);
          $unlinkimage =  $del_data->file;
          $decoded = json_decode($unlinkimage,true);
          if(!empty($decoded)){
              foreach($decoded as $value){
                  unlink('aegis_files/projectfile/'.$value);
              }
          }
          $del_data->delete();
          return redirect('project');
      }
      public function projectSupplierPreview($supplier_id){
        $supplier = Supplier::find($supplier_id);
        $supplier_contact = SupplierContact::where('supplier_slug','=',$supplier->supplier_slug)->get();
        return response()->json([$supplier,$supplier_contact]);
      }
      public function projectTodo(Request $request){
        ProjectTodo::create([
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
            'slug' => rand(),
            'project_id' => $request->project_id,
        ]);
          return response()->json();

      }
      public function ProjectTodoShow($project_id){
          $project_todo_show = ProjectTodo::where('project_id','=',$project_id)->get();
        return response()->json($project_todo_show);
      }
      public function projectTodoUpdate(Request $request){
          $update = ProjectTodo::where('slug','=',$request->id);
          $update->update([
              'title' => $request->title,
              'description' => $request->description,
              'date' => $request->date,
              'slug' => $request->id,
          ]);
          return response()->json();
      }
      public function projectTodoDelete(Request $request){
          $delete_todo = ProjectTodo::where('slug','=',$request->todo_delete);
          $delete_todo->delete();
          return response()->json();
      }
      public function show($id)
    {
        $full_name = (explode('_',$id));
        $show_id = end($full_name);
        $slug = Project::find($show_id);
        $categories = SupplierCategory::orderBy('id','=','DESC')->get();
        return view('Admin.Project_Management.pro_detail_master',compact('slug','categories'));
    }
    public function downloadprojectsinglefile($value){
      $file_path = public_path('aegis_files/projectfile/'.$value);
       return response()->download($file_path);
    }
    public function deletesinglefile($id,$img){
        $img_search = Project::find($id);
        $all_file =json_decode($img_search->file);
       $new = [];
       foreach ( $all_file as $image){
            if ($img != $image){
                $new[] = $image;
            }
       }
        $img_search->file =json_encode($new);
        unlink('aegis_files/projectfile/'.$img);
        $img_search->save();
       return redirect()->back();
    }
    public function deleteImage($del_item, $id){
       $img_search = Project::find($id);
        $all_file =json_decode($img_search->file);
       $new = [];
       foreach ( $all_file as $image){
            if ($del_item != $image){
                $new[] = $image;
            }
       }
        $img_search->file =json_encode($new);
        unlink('aegis_files/projectfile/'.$del_item);
        $img_search->save();
        return response()->json($img_search);
    }
    public function deleteProjects($name){
        unlink('aegis_files/projectfile/'.time().'.'.$name);
    }
    public function projectRemoveSelectedSupplier($supplier_id,$project_id){
        $projectRemoveSelectedSupplier =DB::table('project_supplier')->where('project_id','=',$project_id)->where('supplier_id','=',$supplier_id);
        $projectRemoveSelectedSupplier->delete();
        return redirect('project');
//        return response()->json([$supplier_id,$project_id]);
    }
}
