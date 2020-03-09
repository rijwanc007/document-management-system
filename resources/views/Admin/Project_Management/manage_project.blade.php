@extends('Admin.secondmaster')
@section('status','All | Project')
@section('project','navigation__sub--active navigation__sub--toggled')
@section('all_project','navigation__active')
@section('mycontent')
    @php
     use App\Project;
     use App\Supplier;
    @endphp
<div class="row">
        <div class="col-12" id="ajaxload">
           <div class="card">
                <div class="card-body table-search supplier">
                    <form class="search">
                        <div class="search__inner">
                            <input type="text" class="search__text protextsearch" placeholder="Search for projects, files...">
                            <i class="zmdi zmdi-search search__helper" data-sa-action="search-close"></i>
                       </div>
                    </form> 
                    <div class="sort-alpha"> <span>Filter By Alphabets</span></div>
                    <ul class="sort-list">
                            <li><a href="javascript:void(0)" class="alldatacls" data-id="all">all</a></li>
                            <li><a href="javascript:void(0)" class="supcommon" data-id="a">A</a></li>
                            <li><a href="javascript:void(0)" class="supcommon" data-id="b">b</a></li>
                            <li><a href="javascript:void(0)" class="supcommon" data-id="c">c</a></li>
                            <li><a href="javascript:void(0)" class="supcommon" data-id="d">d</a></li>
                            <li><a href="javascript:void(0)" class="supcommon" data-id="e">e</a></li>
                            <li><a href="javascript:void(0)" class="supcommon" data-id="f">f</a></li>
                            <li><a href="javascript:void(0)" class="supcommon" data-id="g">g</a></li>
                            <li><a href="javascript:void(0)" class="supcommon" data-id="h">h</a></li>
                            <li><a href="javascript:void(0)" class="supcommon" data-id="i">i</a></li>
                            <li><a href="javascript:void(0)" class="supcommon" data-id="j">j</a></li>
                            <li><a href="javascript:void(0)" class="supcommon" data-id="k">k</a></li>
                            <li><a href="javascript:void(0)" class="supcommon" data-id="l">l</a></li>
                            <li><a href="javascript:void(0)" class="supcommon" data-id="m">m</a></li>
                            <li><a href="javascript:void(0)" class="supcommon" data-id="n">n</a></li>
                            <li><a href="javascript:void(0)" class="supcommon" data-id="o">o</a></li>
                            <li><a href="javascript:void(0)" class="supcommon" data-id="p">p</a></li>
                            <li><a href="javascript:void(0)" class="supcommon" data-id="q">q</a></li>
                            <li><a href="javascript:void(0)" class="supcommon" data-id="r">r</a></li>
                            <li><a href="javascript:void(0)" class="supcommon" data-id="s">s</a></li>
                            <li><a href="javascript:void(0)" class="supcommon" data-id="t">t</a></li>
                            <li><a href="javascript:void(0)" class="supcommon" data-id="u">u</a></li>
                            <li><a href="javascript:void(0)" class="supcommon" data-id="v">v</a></li>
                            <li><a href="javascript:void(0)" class="supcommon" data-id="w">w</a></li>
                            <li><a href="javascript:void(0)" class="supcommon" data-id="x">x</a></li>
                            <li><a href="javascript:void(0)" class="supcommon" data-id="y">y</a></li>
                            <li><a href="javascript:void(0)" class="supcommon" data-id="z">z</a></li>
                    </ul>
                </div>
            </div>
            <div class="card">
                <div class="card-body table-body">
                    <h4 class="card-title text-uppercase mb-3">All Projects</h4>
                    <div class="table-responsive all-pro-table">
                        <table id="data-protable" class="table search_table">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Closing Date</th>
                                    <th>Project / File Name</th>
                                    <th>Procuring Entity</th>
                                    <th>EPC</th>
                                    <th>Supplier</th>
                                    <th>Funding</th>
                                    @if(Gate::check('download_project') || Gate::check('manage_project') || Gate::check('delete_project'))
                                    <th>Manage Project</th>
                                    @endif
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($projects as $project)
                                 <tr>
                                     <td>{{$loop->index + 1}}</td>
                                     <td><span class="tdate">{{$project->closing_date}}</span></td>
                                     <td><a href="{{route('project.show',$project->pro_name.'_'.$project->id)}}" target="_blank" class="projects">{{$project->pro_name}}</a></td>
                                     <!--<td><a href="{{url('projects/'.$project->slug)}}" target="_blank" class="projects">{{$project->pro_name}}</a></td>-->
                                     <td><span title="{{$project->pro_entity}}" class="short-table-text" data-toggle="tooltip" data-placement="top">{{$project->pro_entity}}</span></td>
                                     <td><span class="epc">{{$project->pro_epc}}</span></td>
                                     <td >
                                         @if($project->category_title != null)
                                         @php
                                           $project_suppliers = Project::find($project->id)->suppliers;
                                           $project_suppliers_array = $project_suppliers->toArray();
                                           $first_supplier = array_shift($project_suppliers_array);
                                           $project_count = count($project_suppliers_array);
                                         @endphp
                                         <div class="position-relative">
                                         <a href="javascript:void(0)" class="suppliers multi supplier_preview" data-supplier_id="{{$first_supplier['id']}}" data-toggle="modal" data-target="#supplier-preview">{{$first_supplier['supplier_name']}}<span class="multi-count">@if($project_count==!0)( +{{$project_count}} )@endif</span></a>
                                         @if($project_count==!0)
                                         <ul class="supplier-list">
                                             @foreach($project_suppliers_array as $project_supplier)
                                             <li><a href="javascript:void(0)" class="supplier_preview" data-supplier_id="{{$project_supplier['id']}}"  data-toggle="modal" data-target="#supplier-preview">{{$project_supplier['supplier_name']}}</a></li>
                                             @endforeach
                                         </ul>
                                         @endif
                                         </div>
                                         @endif
                                     </td>
                                     <td><span title="{{$project->pro_funding}}" class="short-table-text" data-toggle="tooltip" data-placement="top">{{$project->pro_funding}}</span></td>
                                     @if(Gate::check('download_project') || Gate::check('manage_project') || Gate::check('delete_project'))
                                     <td>
                                        <span class="taction">
                                            @can('download_project',Auth::user())
                                        <a href="{{url('create-zip/'.$project->id)}}" data-proid ="{{$project->id}}" data-toggle="tooltip" data-placement="top" title="Download All File" class="mr-2 downloadable"><span class="badge badge-success"><span class="zmdi zmdi-download"></span></span></a>
                                            @endcan
                                            @can('manage_project',Auth::user())
                                        <span data-toggle="tooltip" data-placement="top" title="Manage"><a href="javascript:void(0)" class="edit_project" data-id="{{$project->id}}" data-project_name="{{$project->pro_name}}" data-procuring_entity="{{$project->pro_entity}}" data-project_epc="{{$project->pro_epc}}" data-project_funding="{{$project->pro_funding}}" data-closing_date="{{$project->closing_date}}" data-status="{{$project->pro_status}}" data-project_description="{{$project->pro_description}}" data-project_category="{{$project->category_title}}" data-project_category_id="{{$project->category_id}}"><span class="badge badge-warning mr-2" data-toggle="modal" data-target="#managepro-file"><span class="zmdi zmdi-settings"></span></span></a></span>
                                            @endcan
                                            @can('delete_project',Auth::user())
                                        <a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Delete" class="delete-message" data-id="{{$project->id}}"><span class="badge badge-danger"><span class="zmdi zmdi-delete"></span></span></a>
                                            @endcan
                                        </span>
                                    </td>
                                     @endif
                                    <td>
                                        @if($project->pro_status == 'starting')
                                        <span class="badge badge-warning status">{{$project->pro_status}}</span>
                                        @elseif($project->pro_status == 'running' )
                                        <span class="badge badge-info status">{{$project->pro_status}}</span>
                                        @elseif($project->pro_status == 'canceled')
                                        <span class="badge badge-danger status">{{$project->pro_status}}</span>
                                        @else
                                        <span class="badge badge-success status">{{$project->pro_status}}</span>
                                        @endif
                                   </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="managepro-file" data-backdrop="static">
            <div class="modal-dialog modal-lg-cus">
                <div class="modal-content modal-cus-bg">
                    <div class="modal-header">
                        <h5 class="modal-title pull-left text-uppercase">Manage Project/File</h5>
                    </div>
                    {!!Form::open(['url' => '/Update_Project/','class'=>'dropzone','id'=>'my-awesome-dropzone','method' => 'post','enctype'=>'multipart/form-data'])!!}
                    <div class="modal-body">
                                  <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Project Name</label>
                                                <input type="text" class="form-control" name="pro_name" oninput="countProfileName()" id="project_name">
                                                <input type="hidden" class="form-control" name="pro_id" id="project_id">
                                                <input type="hidden" name="my_pro_id" id="my_pro_id"/>
                                                <i class="form-group__bar"></i>
                                            </div>
                                        </div>
                                      <input type="hidden" id="project_supplier_relation"/>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Procuring Entity</label>
                                                <input type="text" class="form-control"  name="pro_entity" id="procuring_entity">
                                                <i class="form-group__bar"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>EPC</label>
                                                <input type="text" class="form-control" name="pro_epc" id="project_epc">
                                                <i class="form-group__bar"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Funding</label>
                                                <input type="text" class="form-control" name="pro_funding" id="project_funding">
                                                <i class="form-group__bar"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Select Supplier Category</label>
                                                <div class="dropdown-new sm-width pull-right mr-1-half prosupcat">
                                                    <div class="select">
                                                       <span class="prosupmodtxt" id="project_category">Select</span>
                                                       <i class="zmdi zmdi-chevron-left"></i>
                                                    </div>
                                                    <input type="hidden" name="pro_sup_cat" id="project_supcat">
                                                    <input type="hidden" name="project_category_id" id="project_category_id"/>
                                                    <input type="hidden" name="project_category_title" id="project_category_title"/>
                                                    <ul class="dropdown-menu-new call-sort sup-category">
                                                        @foreach($categories as $category)
                                                            <li class="category_name" data-id="{{$category->id}}" data-category_name="{{$category->title}}">{{$category->title}}</li>
                                                            @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="form-group">
                                                <label id="select_supplier"></label>
                                                <select class="select2 getsupbycat" name="suppliers[]" id="project_supplier" multiple="multiple">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Closing Date</label>
                                                    <input type="date" class="form-control" id="closing_date" placeholder="exp:12-1-2019" name="closing_date">
                                                    <i class="form-group__bar"></i>
                                                </div>
                                           </div>
                                        <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <div class="dropdown-new sm-width pull-right mr-1-half projectstatus">
                                                        <div class="select">
                                                           <span class="statusres" id="project_status_value">Select</span>
                                                           <i class="zmdi zmdi-chevron-left"></i>
                                                        </div>
                                                        <input type="hidden"  name="project_update_status" id="project_update_status">
                                                        <ul class="dropdown-menu-new call-sort">
                                                            <li class="project_update_status" data-id="starting">Starting</li>
                                                            <li class="project_update_status" data-id="running">Running</li>
                                                            <li class="project_update_status" data-id="Canceled">Canceled</li>
                                                            <li class="project_update_status" data-id="completed">Completed</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="col-sm-12">
                                                <div class="col-sm-12 upload-container">
                                                        <div class="dropzone-previews">
                                                        <div class="fallback">
                                                             <input type="file" name="file[]" multiple>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 p-0">
                                                    <div class="form-group">
                                                        <label>Description</label>
                                                        <textarea class="form-control" rows="5" name="pro_description" id="project_description"></textarea>
                                                        <i class="form-group__bar"></i>
                                                    </div>
                                                </div>
                                            <h4 class="list-header">Uploaded Files</h4>
                                            <ul class="upload-file-list">
                                                <div class="filewillgo">
                                                </div>
                                            </ul>
                                            <div class="previewmng-holder"></div>
                                        </div>
                                  </div>
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
        </div>
    <div class="modal fade" id="supplier-preview" data-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-lg-cus">
            <div class="modal-content modal-cus-bg">
                <div class="modal-body ">
                    <div class="supplier-mod" id="supplier_information_print">
                        <div class="card supplier-prev">
                            <div class="supplier-logo">
                                <img src="" alt="" id="img-1">
                            </div>
                            <h2 class="suppliers-name" id="supplier_name_highlighted"></h2>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-body__title mb-4">About <span id="supplier_name_highlighted_two"></span></h4>
                                <p id="supplier_description"></p>
                                <h4 class="card-body__title mb-3">Supplier Information</h4>
                                <ul class="icon-list mb-3">
                                    <li><i class="zmdi zmdi-view-web"></i><span id="supplier_web_address"></span></li>
                                    <li><i class="zmdi zmdi-email"></i><span id="supplier_email"></span></li>
                                    <li><i class="zmdi zmdi-folder"></i><span id="supplier_file_number"></span></li>
                                    <li><i class="zmdi zmdi-phone"></i><span id="supplier_phone"></span></li>
                                    <li><i class="zmdi zmdi-link"></i><span id="supplier_social_address"></span></li>
                                    <li><i class="zmdi zmdi-pin"></i><span id="supplier_address"></span></li>
                                </ul>
                                <h4 class="card-body__title mb-4">Contact Information</h4>
                                <div id="preview_append_first">
                                </div>
                                <div id="preview_append">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer p-0">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <script>
                       $(document).on('click','.edit_project',function(){
                       document.getElementById('project_supplier_relation').value = $(this).data('id');
                       document.getElementById('my_pro_id').value = $(this).data('id');
                       document.getElementById('project_name').value = $(this).data('project_name');
                       document.getElementById('procuring_entity').value = $(this).data('procuring_entity');
                       document.getElementById('project_epc').value = $(this).data('project_epc');
                       document.getElementById('project_funding').value = $(this).data('project_funding');
                       document.getElementById('closing_date').value = $(this).data('closing_date');
                       document.getElementById('project_update_status').value = $(this).data('status');
                       if($(this).data('project_category')==''){
                           document.getElementById('project_category').innerHTML = 'No Category Selected Yet';
                       }else{
                           document.getElementById('project_category').innerHTML = $(this).data('project_category');
                       }
                       if($(this).data('status') ==''){
                           document.getElementById('project_status_value').innerHTML = 'No Status Selected Yet';
                       }else{
                           document.getElementById('project_status_value').innerHTML = $(this).data('status');
                       }
                       document.getElementById('project_description').value = $(this).data('project_description');
                          $( "#project_supplier").empty();
                          $('.select2-selection__rendered').empty();
                          $('.upload-file-list .filewillgo').empty();
                       var project_category_id = $(this).data('project_category_id');
                       var project_id = $(this).data('id');
                       $.ajax({
                           
                           url:'/project/selected/supplier/'+project_id+'/'+project_category_id,
                           success:function(data){
                               console.log(data);
                                   if(data[0] == ''){
                                       jQuery.each(data[2], function( index, item ) {
                                           $( "#project_supplier").append('<option value="'+item.id+'">'+item.supplier_name+'</option>');
                                       })
                                   }
                                   if(data[2] != null){
                                       jQuery.each(data[2], function( index, item ) {
                                           jQuery.each(data[0], function (selectedIndex,selectedItem) {
                                               if(selectedItem.id == item.id) {
                                                   $( "#project_supplier").append('<option value="'+item.id+'" selected>'+item.supplier_name+'</option>');
                                               }
                                           });
                                       });
                                   }
                                   var jsonFile  = $.parseJSON(data[1]);
                                   $.each(jsonFile, function (index, item) {
                                   $('.upload-file-list .filewillgo').append('<li><div class="file-name">'+item+'</div><a href="javascript:void(0)"><span data-item ="'+item+'" class="remove-file remove_file"><i class="fa fa-times"></i></span></a></li>');
                               });
                           }
                       });
                   });
                      $(document).on('click','.category_name',function(){
                          document.getElementById('project_category_id').value = $(this).data('id');
                          document.getElementById('project_category_title').value = $(this).data('category_name');
                          var id = $(this).data('id');
                          var title = $(this).data('title');
                          var my_pro_id = document.getElementById('my_pro_id').value;
                          $.ajax({
                              url:'/category/depend/supplier/'+id+'/'+my_pro_id,
                              success:function(data){
                                  $('#project_supplier').empty();
                                  jQuery.each(data, function( index, item ) {
                                  $( "#project_supplier").append('<option value="'+item.id+'">'+item.supplier_name+'</option>');
                                  });
                              }
                          })
                      });
          function countProfileName(){
                     var project_name = document.getElementById('project_name').value;
                     if(project_name.length>250){
                        toastr.options = {
                            "debug": false,
                            "positionClass": "toast-bottom-right",
                            "onclick": null,
                            "fadeIn": 300,
                            "fadeOut": 1000,
                            "timeOut": 5000,
                            "extendedTimeOut": 1000
                        };
                        toastr.warning('Please Excute Project Name Less Than 250 Character!'); 
                     }
                 }
                     // $(document).on('click','.project_supplier_relation',function(){
                     //    var project_supplier_relation = document.getElementById('project_supplier_relation').value;
                     //    var category_name = $(this).data('category_name');
                     //    $.ajax({
                     //        url:'/project/supplier/relation/selected/'+project_supplier_relation+'/'+category_name,
                     //        success:function(data){
                     //            $('.select2-selection__rendered').empty();
                     //            jQuery.each(data, function (index,item) {
                     //                $('.select2-selection__rendered').append(
                     //                '<li class="select2-selection__choice" title="'+item.supplier_name+'"><span class="select2-selection__choice__remove remove_selected_supplier" role="presentation">×</span>'+item.supplier_name+'</li>')});
                     //        }
                     //    });
                     // });
                     $(document).on('click','.supplier_preview',function(){
                        var supplier_id = $(this).data('supplier_id');
                        $.ajax({
                            url:'/project/supplier/preview/'+supplier_id,
                            success:function(data){
                                $('#preview_append').empty();
                                document.getElementById('img-1').src='aegis_files/supplier_logo/'+data[0].supplier_logo;
                                document.getElementById('supplier_name_highlighted').innerHTML = data[0].supplier_name;
                                document.getElementById('supplier_name_highlighted_two').innerHTML = data[0].supplier_name;
                                document.getElementById('supplier_description').innerHTML = data[0].supplier_description;
                                document.getElementById('supplier_web_address').innerHTML = data[0].supplier_web_address;
                                document.getElementById('supplier_email').innerHTML = data[0].supplier_email;
                                document.getElementById('supplier_file_number').innerHTML = data[0].supplier_file_number;
                                document.getElementById('supplier_phone').innerHTML = data[0].supplier_phone;
                                document.getElementById('supplier_social_address').innerHTML = data[0].supplier_social_address;
                                document.getElementById('supplier_address').innerHTML = data[0].supplier_address;
                                jQuery.each(data[1],function(index,item){
                                    $('#preview_append').append(
                                        '<ul class="icon-list contact-containers">'+
                                        '<li><i class="zmdi zmdi-account"></i>'+item.person_name+'</li>'+
                                        '<li><i class="zmdi zmdi-label-alt"></i>'+item.designation+'</li>'+
                                        '<li><i class="zmdi zmdi-phone"></i>'+item.phone+'</li>'+
                                        '<li><i class="zmdi zmdi-email"></i>'+item.email+'</li>'+
                                        '<li><i class="zmdi zmdi-link"></i>'+item.social_address+'</li>'+
                                        '<li><i class="zmdi zmdi-pin"></i>'+item.address+'</li>'+
                                        '</ul>'
                                    );
                                })
                            }
                        })
                     });
                      $(document).on('click','.delete-message',function(){
                          var id = $(this).data('id');
                          projectDelete(id);
                      });
                      function projectDelete(id) {
                          swal({
                              title: 'Are you sure?',
                              text: 'You will not be able to recover this imaginary file!',
                              type: 'warning',
                              showCancelButton: true,
                              buttonsStyling: false,
                              confirmButtonClass: 'btn btn-danger',
                              confirmButtonText: 'Yes, delete it!',
                              cancelButtonClass: 'btn btn-light',
                              background: 'rgba(0, 0, 0, 0.96)',
                              preConfirm: function () {
                                  return new Promise(function (resolve) {
                                      $.ajax({
                                          url: '/project/delete/'+id,
                                          method:'GET',
                                          success: function (data) {
                                              location.reload();
                                          },
                                      })
                                          .done(function (response) {
                                              swal({
                                                  title: 'Are you sure?',
                                                  text: 'You will not be able to recover this imaginary file!',
                                                  type: 'success',
                                                  buttonsStyling: false,
                                                  confirmButtonClass: 'btn btn-light',
                                                  background: 'rgba(0, 0, 0, 0.96)'
                                              });
                                          })
                                          .fail(function () {
                                              swal({
                                                  title: 'Oops',
                                                  text: 'Something Went Wrong Please Try Again Later',
                                                  type: 'error'
                                              });
                                          });
                                  });
                              },
                              allowOutsideClick: false
                          });
                      }
                      $(document).on('click','.remove_file',function(){
                          var del_item = $(this).data('item');
                          var id = document.getElementById('my_pro_id').value;
                          $(this).parent().parent().remove();
                          $.ajax({
                              url:'/delete_img/'+del_item+'/'+id,
                          })
                      });
                      $(document).on('click','.project_update_status',function(){
                         document.getElementById('project_update_status').value = $(this).data('id');
                      });
            Dropzone.options.myAwesomeDropzone = {
                      autoProcessQueue:false,
                      addRemoveLinks:true,
                      uploadMultiple: true,
                      previewsContainer:'.previewmng-holder',
                      createImageThumbnails:false,
                      parallelUploads: 100,
                      maxFiles: 100,
                      init: function() {
                      var myDropzone = this;
                      this.element.querySelector("button[type=submit]").addEventListener("click", function(e) {
                           var arr = myDropzone.files;
                          if(arr.length>0){
                              e.preventDefault();
                              e.stopPropagation();
                              myDropzone.processQueue();
                             setTimeout(function(){window.location.href='/project'},6000);
                          }else{
                              e.stopPropagation();
                              myDropzone.processQueue();
                             setTimeout(function(){window.location.href='/project'},5000);
                          }
                      });
                      this.on("sendingmultiple", function(data) {
                      });
                      this.on("successmultiple", function(files, response) {
                      });
                      this.on("errormultiple", function(files, response) {
                      });
                  }
              }
 </script>
 <script>
            $(document).on('click','.prosupcatclk',function(){
                    var suppc = $(this).data('suply');
                    $('.prosupcat').find('#project_supcat').val(suppc);
                    $( ".getsupbycat").empty();
                    $.get('/getsupbycat/'+suppc,function(data){
                        console.log(data);
                        jQuery.each(data, function( i, item ) {
                          $( ".getsupbycat").append('<option value="'+item.id+'">'+item.sup_name+'</option>');
                     });
                   });
                });
</script>
        <script src="{{asset('aegis_files/myasset/vendors/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
      <script>
         $.noConflict();
         jQuery(document).ready(function ($) {
            $( function() {
               $( "#mydatepicker" ).datepicker();
            } );
        var table = $('#data-protable').DataTable({
            "bPaginate": true,
			autoWidth: !1,
			responsive: !0,
			lengthMenu: [
				[10,30, 50, 70, 90, -1],
				["10 Rows","30 Rows", "50 Rows", "70 Rows", "90 Rows", "Everything"]
			],
			language: {
				searchPlaceholder: "Search for records..."
			},
			dom: "Blfrtip",
			buttons: [{
				extend: "excelHtml5",
				title: "Export Data"
			}, {
				extend: "csvHtml5",
				title: "Export Data"
			}, {
				extend: "print",
				title: "Material Admin"
			}],
			initComplete: function (a, b) {
				$(this).closest(".dataTables_wrapper").prepend('<div class="dataTables_buttons hidden-sm-down actions"><span class="actions__item zmdi zmdi-print" data-table-action="print" /><span class="actions__item zmdi zmdi-fullscreen" data-table-action="fullscreen" /><div class="dropdown actions__item"><i data-toggle="dropdown" class="zmdi zmdi-download" /><ul class="dropdown-menu dropdown-menu-right"><a href="" class="dropdown-item" data-table-action="excel">Excel (.xlsx)</a><a href="" class="dropdown-item" data-table-action="csv">CSV (.csv)</a></ul></div></div>')
			 }
            });
        $('.protextsearch').on( 'keyup', function () {
                            table.search( this.value ).draw();
                        });
        $('.cmnsuppliers').on('click',function(){
                        var supid  = $(this).data('id');
                        var myImage = $(this).data('image');
                        $.get('/getsupinfo/'+supid,function(data){
                            $(".supplier-mod").find("#img-1").attr("src",myImage);
                            $('.supplier-mod').find('.suppliers-name').text(data[0].sup_name);
                            $('.supplier-mod').find('.absupname').text(data[0].sup_name);
                            $('.supplier-mod').find('.sup_des').text(data[0].sup_description);
                            $('.supplier-mod').find('.phn').text(data[0].sup_phone);
                            $('.supplier-mod').find('.eml').text(data[0].sup_email);
                            $('.supplier-mod').find('.fb').text(data[0].sup_fbpage);
                            $('.supplier-mod').find('.web').text(data[0].sup_web);
                            $('.supplier-mod').find('.add1').text(data[0].sup_add1);
                            //console.log(data[1]);
                            $('.moreprosupappend').empty();
                            $.each(data[1], function (index, moreprevcont) {
                                var jsondecode  = $.parseJSON(moreprevcont.morecontact_info);
                            $('.moreprosupappend').append(`<ul class="icon-list contact-containers"><li><i class="zmdi zmdi-account"></i>`+jsondecode.name+`</li><li><i class="zmdi zmdi-label-alt"></i>`+jsondecode.designation+`</li><li><i class="zmdi zmdi-phone"></i>`+jsondecode.phone+`</li><li><i class="zmdi zmdi-email"></i>`+jsondecode.email+`</li><li><i class="zmdi zmdi-link"></i>`+jsondecode.socialaddress+`</li><li><i class="zmdi zmdi-pin"></i>`+jsondecode.address+`</li></ul>`);
                            });
                        });
                    });
        $('.supcommon').on( 'click', function () {
                   $('.search .protextsearch').val('');
                    var alpha_filter = $(this).text().toLowerCase();
                     $('.sort-list').find('.supcommon').addClass('deactive');
                     $('.sort-list').find('.supcommon').removeClass('activealpha');
                    $(this).addClass('activealpha');
                        table.search( '' ).column(2).search( '^' + alpha_filter, true, false).draw();
                    });
                    $(document).on('click','.alldatacls',function(){
                          $('.search .protextsearch').val('');
                          $('#mindat, #maxdat').val('');
                          $('.sort-list').find('.supcommon').removeClass('activealpha');
                        table
                         .search( '' )
                         .columns().search( '' )
                         .draw();
                         $('.search').find('.filcat').text('Category');
                         $('.sub-cat').css('display','none');
                    })
              });
 </script>
@endsection