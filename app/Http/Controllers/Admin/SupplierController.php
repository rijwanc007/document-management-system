<?php

namespace App\Http\Controllers\Admin;

use App\Project;
use App\Supplier;
use App\SupplierCategory;
use App\SupplierContact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SupplierController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request){
        $suppliers = Supplier::orderBy('id','=','DESC')->paginate(10);
        $categories = SupplierCategory::orderBy('id','=','DESC')->get();
        if($request->ajax()){
            return view('Admin.Supplier_Category.supplier_pagination',compact('suppliers','categories'))->render();
        }
        return view('Admin.Supplier_Category.all_supplier',compact('suppliers','categories'));
    }
    public function create()
    {
        $categories = SupplierCategory::orderBy('id','=','DESC')->get();
       return view('Admin.Supplier_Category.create_supplier',compact('categories'));
    }
    public function store(Request $request)
    {
        $supplier_log = $request->file('supplier_logo');
        if(!empty($supplier_log)){
            $logo_name =time().'.'.$supplier_log->getClientOriginalExtension();
            $supplier_log->move(public_path().'/aegis_files/supplier_logo/',$logo_name);
        }else{
            $logo_name = null;
        }
        $slug = rand();
        Supplier::create([
          'supplier_name' => $request->supplier_name,
          'supplier_logo' => $logo_name,
          'supplier_description' => $request->supplier_description,
          'supplier_phone' => $request->supplier_phone,
          'supplier_email' => $request->supplier_email,
          'supplier_social_address' => $request->supplier_social_address,
          'supplier_web_address' => $request->supplier_web_address,
          'supplier_address' => $request->supplier_address,
          'supplier_category' => $request->supplier_category,
          'category_id' => $request->category_id,
          'supplier_file_number' => $request->supplier_file_number,
          'supplier_slug' => $slug,
      ]);
        if(!empty($request->person_name)){
            for($i=0 ; $i < count($request->person_name) ; $i++){
                SupplierContact::create([
                    'person_name' => $request->person_name[$i],
                    'designation' => $request->designation[$i],
                    'phone' => $request->phone[$i],
                    'email' => $request->email[$i],
                    'social_address' => $request->social_address[$i],
                    'address' => $request->address[$i],
                    'supplier_slug' => $slug,
                ]);
            }
        }
        return redirect('supplier');
    }
    public function show($id,$slug)
    {
        $supplier_information = Supplier::find($id);
        $supplier_contacts = SupplierContact::where('supplier_slug','=',$slug)->get();
        return response()->json([$supplier_information,$supplier_contacts]);
    }
    public function edit(Request $request)
    {
        $supplier_edit = Supplier::find($request->id);
        $supplier_contacts_edit = SupplierContact::where('supplier_slug','=',$request->slug)->get()->toArray();
        if(empty($supplier_contacts_edit)){
            $supplier_contacts_edit = null;
        }
        if(!empty($supplier_contacts_edit)){
            $supplier_contacts_edit_first = array_shift($supplier_contacts_edit);
        }else{
            $supplier_contacts_edit_first = null;
        }
        return response()->json([$supplier_edit,$supplier_contacts_edit,$supplier_contacts_edit_first]);
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id,$slug)
    {
        $supplier_delete = Supplier::find($id);
        $supplier_logo = $supplier_delete->supplier_logo;
        if(!empty($supplier_logo)){
            unlink('aegis_files/supplier_logo/'.$supplier_logo);
        }
        $supplier_contact = SupplierContact::where('supplier_slug','=',$slug);
        $supplier_contact->delete();
        $supplier_delete->delete();
        return response()->json();
    }
    public function alphabet($alphabet){
        if($alphabet =='all'){
            $suppliers = Supplier::orderBy('id','=','DESC')->paginate(10);
            return view('Admin.Supplier_Category.supplier_pagination',compact('suppliers'))->render();
        }else{
            $suppliers = Supplier::where('supplier_name','like',$alphabet.'%')->orderBy('id','=','DESC')->paginate(10);
            return view('Admin.Supplier_Category.supplier_pagination',compact('suppliers'))->render();
        }
    }
    public function category($category){
        $suppliers = Supplier::where('supplier_category','=',$category)->paginate(10);
        return view('Admin.Supplier_Category.supplier_pagination',compact('suppliers'))->render();
    }
    public function search($search){
        $suppliers = Supplier::where('supplier_name','like','%'.$search.'%')->orderBy('id','=','DESC')
                               ->orWhere('supplier_category','like','%'.$search.'%')->orderBy('id','=','DESC')
                               ->orWhere('supplier_file_number','like','%'.$search.'%')->orderBy('id','=','DESC')
                               ->paginate(10);
        return view('Admin.Supplier_Category.supplier_pagination',compact('suppliers'))->render();
    }
    public function categoryWiseSearch($category_search,$search_category){
        $suppliers = Supplier::where('supplier_name','like','%'.$search_category.'%')
                                ->where('supplier_category','=',$category_search)
                                ->orderBy('id','=','DESC')
                                ->paginate(10);
        return view('Admin.Supplier_Category.supplier_pagination',compact('suppliers'))->render();
    }
    public function supplierContactRemove($id,$slug){
        $supplier_contact_remove = SupplierContact::where('id','=',$id)->where('supplier_slug','=',$slug);
        $supplier_contact_remove->delete();
        return response()->json();
    }
    public function supplierUpdate(Request $request){
        $update_supplier_logo = $request->file('update_supplier_logo');
        $supplier_update_project = Supplier::find($request->supplier_id);
        $supplier_update = Supplier::find($request->supplier_id);
        $exit_log = $supplier_update->supplier_logo;
        if(!empty($update_supplier_logo)){
            $logo_name =time().'.'.$update_supplier_logo->getClientOriginalExtension();
            $update_supplier_logo->move(public_path().'/aegis_files/supplier_logo/',$logo_name);
            $supplier_update->update([
                'supplier_name' => $request->edit_supplier_name,
                'supplier_logo' => $logo_name,
                'supplier_description' => $request->edit_supplier_description,
                'supplier_phone' => $request->edit_supplier_phone,
                'supplier_email' => $request->edit_supplier_email,
                'supplier_social_address' => $request->edit_supplier_social_address,
                'supplier_web_address' => $request->edit_supplier_web_address,
                'supplier_address' => $request->edit_supplier_address,
                'supplier_category' => $request->category_name,
                'category_id' => $request->category_id,
                'supplier_file_number' => $request->edit_supplier_file_number,
            ]);
            if(!empty($exit_log)){
                unlink('aegis_files/supplier_logo/'.$exit_log);
            }
            $length = count($request->person_name);
            for($i=0;$i<$length;$i++){
                $supplier_contact_update = SupplierContact::where('supplier_slug','=',$request->supplier_slug_value)->where('id','=',$request->supplier_contact_id[$i]);
                $supplier_contact_update->update([
                    'person_name' => $request->person_name[$i],
                    'designation' => $request->designation[$i],
                    'phone' => $request->phone[$i],
                    'email' => $request->email[$i],
                    'social_address' => $request->social_address[$i],
                    'address' => $request->address[$i],
                ]);
            }
        }else{
            $supplier_update->update([
                'supplier_name' => $request->edit_supplier_name,
                'supplier_description' => $request->edit_supplier_description,
                'supplier_phone' => $request->edit_supplier_phone,
                'supplier_email' => $request->edit_supplier_email,
                'supplier_social_address' => $request->edit_supplier_social_address,
                'supplier_web_address' => $request->edit_supplier_web_address,
                'supplier_address' => $request->edit_supplier_address,
                'supplier_category' => $request->category_name,
                'category_id' => $request->category_id,
                'supplier_file_number' => $request->edit_supplier_file_number,
            ]);
            $length = count($request->person_name);
            for($i=0;$i<$length;$i++){
                $supplier_contact_update = SupplierContact::where('supplier_slug','=',$request->supplier_slug_value)->where('id','=',$request->supplier_contact_id[$i]);
                $supplier_contact_update->update([
                    'person_name' => $request->person_name[$i],
                    'designation' => $request->designation[$i],
                    'phone' => $request->phone[$i],
                    'email' => $request->email[$i],
                    'social_address' => $request->social_address[$i],
                    'address' => $request->address[$i],
                ]);
            }
        }
        return response()->json();
    }
}
