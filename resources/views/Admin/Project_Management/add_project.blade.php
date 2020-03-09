@extends('Admin.thirdmaster')
@section('status','Create | Project')
@section('project','navigation__sub--active navigation__sub--toggled')
@section('new_project','navigation__active')
@section('mycontent')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">
                 Add New Project
                </h4>
          {!!Form::open(['url' => '/store_project','class'=>'dropzone','id'=>'my-awesome-dropzone','method' => 'post','enctype'=>'multipart/form-data'])!!}
                <div class="row">
                   <div class="col-sm-12">
                    <div class="form-group">
                        <label>Project Name</label>
                        <input type="text" class="form-control" oninput="countProfileName()" placeholder="Project Name" id="project_name" name="pro_name" required>
                        <i class="form-group__bar"></i>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Procuring Entity</label>
                        <input type="text" class="form-control" id="project_entity" placeholder="Procuring Entity" name="pro_entity" required>
                        <i class="form-group__bar"></i>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>EPC</label>
                        <input type="text" class="form-control"  id="project_epc" placeholder="EPC" name="pro_epc" required>
                        <i class="form-group__bar"></i>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Funding</label>
                        <input type="text" class="form-control" id="project_funding" placeholder="Funding" name="pro_funding" required>
                        <i class="form-group__bar"></i>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Select Supplier Category</label>
                        <div class="dropdown-new sm-width pull-right mr-1-half prosupcat">
                            <div class="select">
                               <span>Select</span>
                               <i class="zmdi zmdi-chevron-left"></i>
                            </div>
                            <ul class="dropdown-menu-new call-sort sup-category">
                                @foreach($categories as $category)
                                <li class="category_name" data-id="{{$category->id}}" data-title="{{$category->title}}">{{$category->title}}</li>
                                    @endforeach
                            </ul>
                            <input type="hidden" name="category_id" id="category_id"/>
                            <input type="hidden" name="category_title" id="category_title"/>
                        </div>
                    </div>
                    <span class="err_prosupcatmsg" style="color:red"> </span>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Select Supplier</label>
                        <select class="select2 getsupbycat" name="suppliers[]" id="project_supplier" multiple="multiple" data-placeholder="Select Supplier" required>
                         </select>
                    </div>
                    <span class="err_prosupmsg" style="color:red"> </span>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Closing Date</label>
                        <input type="date" class="form-control" id="datepicker" placeholder="exp:12-1-2019" name="closing_date">
                        <i class="form-group__bar"></i>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Select Project Status</label>
                        <div class="dropdown-new sm-width pull-right mr-1-half projectstatus">
                            <div class="select">
                               <span>Select</span>
                               <i class="zmdi zmdi-chevron-left"></i>
                            </div>
                            <ul class="dropdown-menu-new">
                                <li class="project_status" data-status="staring">Starting</li>
                                <li class="project_status" data-status="running">Running</li>
                                <li class="project_status" data-status="canceled">Canceled</li>
                                <li class="project_status" data-status="completed">Completed</li>
                            </ul>
                            <input type="hidden" name="project_status" id="project_status"/>
                        </div>
                     </div>
                     <span class="err_prostatmsg" style="color:red"> </span>
                </div>
                  <div class="col-sm-12 upload-container"> 
                        <div class="dropzone-previews">
                        <div class="fallback">
                             <input type="file" name="file[]" multiple>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" id="project_description" rows="5" name="pro_description" placeholder="Description" required></textarea>
                        <i class="form-group__bar"></i>
                    </div>
                </div>
<script>
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
      Dropzone.options.myAwesomeDropzone = { 
            autoProcessQueue:false,
            addRemoveLinks:true,
            uploadMultiple: true,
            previewsContainer:'.preview-holder',
            createImageThumbnails:false,
            parallelUploads: 100,
            maxFiles: 100,
            removedfile: function(file) {
            var name = file.name;
            alert(name);
                if (name) {
                    $.ajax({
           
            type: 'GET',
                    url: "remove/"+name, 
                    dataType: 'json'
                });
                }
                var _ref;
                return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
            },
            init: function() {
            var myDropzone = this;
             this.element.querySelector("button[type=submit]").addEventListener("click", function(e) {
                e.preventDefault();
               e.stopPropagation();
              myDropzone.processQueue();
            });
            this.on("sendingmultiple", function(data) {
              setTimeout(function(){window.location.href='/project'},5000);
            });
            this.on("successmultiple", function(files, response) {
            });
            this.on("errormultiple", function(files, response) {
            });
        }
    };
</script>
<div class="preview-holder"></div>
    </div> 
    {!!Form::close()!!}
  </div>
     <script>
         $(document).on('click','.category_name',function(){
             var id = $(this).data('id');
             var title = $(this).data('title');
             $.ajax({
                 url:'/category/depend/supplier/'+id+'/'+title,
                 success:function(data){
                     $('#project_supplier').empty();
                     jQuery.each(data, function( index, item ) {
                         $( "#project_supplier").append('<option value="'+item.id+'">'+item.supplier_name+'</option>');
                     });
                 }
             })
         });
         $(document).on('click','.project_status',function(){
             document.getElementById('project_status').value = $(this).data('status');
         });
         $(document).on('click','.category_name',function(){
            document.getElementById('category_id').value = $(this).data('id');
            document.getElementById('category_title').value = $(this).data('title');
         })
    </script>
        </div>
    </div>
</div>
@endsection
