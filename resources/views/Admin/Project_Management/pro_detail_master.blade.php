@include('Admin.include.secondhead')
@php
    use App\Project;
    use App\Theme;
$theme_option = Theme::find(1);
$change_theme = $theme_option->themeid;
@endphp
    <body data-sa-theme="{{$change_theme}}" onload="todoShow()">
        <main class="main">
            <div class="page-loader">
                <div class="page-loader__spinner">
                    <svg viewBox="25 25 50 50">
                        <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                    </svg>
                </div>
            </div>
            @include('Admin.include.header')
            @include('Admin.include.sidebar')
            @include('Admin.include.theme_option')
            <section class="content" id="refreshcontent">
                <div class="content__inner">
                    <header class="content__title p-0 word_break">
                            <h3 class="project-header-title">{{$slug->pro_name}}</h3>
                    </header>
                    <div class="card">
                        <div class="card-body">
                            <table id="data-table-new" class="table search_table table-responsive pro-detail">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
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
                                            <tr>
                                                <td><span class="tdate" data-id={{$slug->id}}>{{$slug->closing_date}}</span></td>
                                                <td><span title="{{$slug->pro_entity}}" class="short-table-text" data-toggle="tooltip" data-placement="top">{{$slug->pro_entity}}</span></td>
                                                <td>{{$slug->pro_epc}}</td>
                                                <td>
                                                    @if($slug->category_title != null)
                                                    @php
                                                        $project_suppliers = Project::find($slug->id)->suppliers;
                                                        $project_suppliers_array = $project_suppliers->toArray();
                                                        $first_supplier = array_shift($project_suppliers_array);
                                                        $project_count = count($project_suppliers_array);
                                                    @endphp
                                                    <span class ="position-relative in-pro">
                                                    <a href="javascript:void(0)" class="suppliers multi supplier_preview" data-supplier_id="{{$first_supplier['id']}}" data-supplier_name={{$first_supplier['supplier_name']}} data-supplier_description={{$first_supplier['supplier_description']}} data-supplier_web_address={{$first_supplier['supplier_web_address']}} data-supplier_email={{$first_supplier['supplier_email']}} data-supplier_file_number={{$first_supplier['supplier_file_number']}} data-supplier_phone={{$first_supplier['supplier_phone']}} data-supplier_social_address={{$first_supplier['supplier_social_address']}} data-supplier_address={{$first_supplier['supplier_address']}} data-supplier_logo={{asset('aegis_files/supplier_logo/'.$first_supplier['supplier_logo'])}} data-toggle="modal" data-target="#supplier-preview">{{$first_supplier['supplier_name']}}<span class="multi-count">@if($project_count==!0)( +{{$project_count}} )@endif</span></a>
                                                    @if($project_count==!0)
                                                        <ul class="supplier-list">
                                                            @foreach($project_suppliers_array as $project_supplier)
                                                                <li><a href="javascript:void(0)" class="supplier_preview" data-supplier_id="{{$project_supplier['id']}}" data-supplier_name={{$project_supplier['supplier_name']}} data-supplier_description={{$project_supplier['supplier_description']}} data-supplier_web_address={{$project_supplier['supplier_web_address']}} data-supplier_email={{$project_supplier['supplier_email']}} data-supplier_file_number={{$project_supplier['supplier_file_number']}} data-supplier_phone={{$project_supplier['supplier_phone']}} data-supplier_social_address={{$project_supplier['supplier_social_address']}} data-supplier_address={{$project_supplier['supplier_address']}} data-supplier_logo={{asset('aegis_files/supplier_logo/'.$project_supplier['supplier_logo'])}}  data-toggle="modal" data-target="#supplier-preview">{{$project_supplier['supplier_name']}}</a></li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                    @endif
                                                    </span>
                                                </td>
                                                <td><span title="{{$slug->pro_funding}}" class="short-table-text" data-toggle="tooltip" data-placement="top">{{$slug->pro_funding}}</span></td>
                                                @if(Gate::check('download_project') || Gate::check('manage_project') || Gate::check('delete_project'))
                                                <td>
                                                     <span class="taction">
                                                         @can('download_project',Auth::user())
                                                     <a href="{{url('create-zip/'.$slug->id)}}" data-proid ="{{$slug->id}}" data-toggle="tooltip" data-placement="top" title="Download All File" class="mr-2 downloadable"><span class="badge badge-success"><span class="zmdi zmdi-download"></span></span></a>
                                                         @endcan
                                                         @can('manage_project',Auth::user())
                                                     <span data-toggle="tooltip" data-placement="top" title="Manage"><a href="javascript:void(0)" class="edit_project" data-id="{{$slug->id}}" data-project_name="{{$slug->pro_name}}" data-procuring_entity="{{$slug->pro_entity}}" data-project_epc="{{$slug->pro_epc}}" data-project_funding="{{$slug->pro_funding}}" data-closing_date="{{$slug->closing_date}}" data-status="{{$slug->pro_status}}" data-project_description="{{$slug->pro_description}}" data-project_category_id="{{$slug->category_id}}" data-project_category="{{$slug->category_title}}"><span class="badge badge-warning mr-2" data-toggle="modal" data-target="#managepro-file"><span class="zmdi zmdi-settings"></span></span></a></span>
                                                         @endcan
                                                         @can('delete_project',Auth::user())
                                                     <a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Delete" class="delete-message" data-id="{{$slug->id}}"><span class="badge badge-danger"><span class="zmdi zmdi-delete"></span></span></a>
                                                         @endcan
                                                     </span>
                                                </td>
                                                @endif
                                                <td>
                                                    @if($slug->pro_status == 'starting')
                                                        <span class="badge badge-warning status">{{$slug->pro_status}}</span>
                                                    @elseif($slug->pro_status == 'running' )
                                                        <span class="badge badge-info status">{{$slug->pro_status}}</span>
                                                    @elseif($slug->pro_status == 'canceled')
                                                        <span class="badge badge-danger status">{{$slug->pro_status}}</span>
                                                    @else
                                                        <span class="badge badge-success status">{{$slug->pro_status}}</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                        </div>
                    </div>
                    <div class="card" >
                        <div class="card-body">
                            <h4 class="card-title text-uppercase mb-3">Project Description</h4>
                            <p>{{$slug->pro_description}}</p>
                        </div>
                    </div>
                    <input type="hidden" name="project_id" id="project_id" value="{{$slug->id}}"/>
                    <div class="card" >
                        <div class="card-body" >
                            <div class="row">
                                <div class="col-lg-7">
                                     <h3 class="text-uppercase mb-4">Project Information</h3>
                                     <div class="owl-carousel">
                                            <?php
                                            $jsonString = $slug->file;
                                            $decoded = json_decode($jsonString, true);
                                           if(is_array($decoded)){
                                            foreach ($decoded as $key=>$value){ 
                                                $exp = explode('.',$value);
                                                if($exp[2] =='jpg' || $exp[2] =='JPG' || $exp[2] =='png' || $exp[2] =='jpeg'|| $exp[2] =='JPEG' || $exp[2] =='GIF'|| $exp[2] =='gif'){
                                                 ?>
                                                <div class="item">
                                                <div class="owl-text-item">
                                                    <a href="{{url('aegis_files/projectfile/'.$value)}}">
                                                    <img src="{{url('aegis_files/projectfile/'.$value)}}" alt="" class="g-image">
                                                    </a>
                                                </div>
                                            </div>
                                          <?php  } } } ?> 
                                          
                                        </div>
                                      <ul class="file-list">
                                            <?php
                                            $jsonString = $slug->file;
                                            $decoded = json_decode($jsonString, true);
                                            if(is_array($decoded)){
                                            foreach ($decoded as $key=>$value){ 
                                                $exp = explode('.',$value);
                                               ?>
                                                <li>
                                                <div class="file-name" ><span data-toggle="tooltip" data-placement="top" title="{{$value}}">{{$value}}</span></div>
                                                    <div class="file-actions">
                                                    <a><span class="badge badge-success text-uppercase">{{$exp[2]}}</span></a>
                                                        @can('preview_project',Auth::user())
                                                        <?php  if($exp[2] =='jpg' || $exp[2] =='JPG' || $exp[2] =='png' || $exp[2] =='jpeg'|| $exp[2] =='JPEG'|| $exp[2] =='GIF'|| $exp[2] =='gif'){?>
                                                        <a class="lightimgshow" href="{{url('aegis_files/projectfile/'.$value)}}" target="_blank"><span class="badge badge-success text-uppercase">preview</span></a>
                                                        <?php } else{?>
                                                        <a href="https://docs.google.com/viewer?url={{asset('aegis_files/projectfile/'.$value)}}&embedded=true" target="_blank"><span class="badge badge-success text-uppercase">preview</span></a>
                                                        <?php } ?>
                                                        @endcan
                                                        @can('single_download',Auth::user())
                                                        <a href="{{url('project/createsingle-zip/'.$value)}}"><span class="badge badge-success"><i class="zmdi zmdi-download"></i></span></a>
                                                        @endcan
                                                        @can('single_delete',Auth::user())
                                                        <a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" data-id="{{$slug->id}}" data-slug="{{$slug->slug}}" data-img="{{$value}}" title="Delete" class="mydelete-message"><span class="badge badge-danger"><i class="zmdi zmdi-delete"></i></span></a>
                                                        @endcan
                                                    </div>
                                                </li>
                                              <?php  } }  ?> 
                                              </ul>   
                                            </div>
                                            <div class="col-lg-5">
                                            <div class="lobilist-demo note-height">
                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer">
                    <p>© Developed By <a href="http://ftit.co.uk/" class="text-white">Future Track IT</a>. All rights reserved.</p>

                    <ul class="nav footer__nav">
                        <a class="nav-link" href="">Homepage</a>

                        <a class="nav-link" href="">Company</a>

                        <a class="nav-link" href="">Support</a>

                        <a class="nav-link" href="">News</a>

                        <a class="nav-link" href="">Contacts</a>
                    </ul>
                </footer>
            </section>
        </main>
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
        <div class="modal fade" id="managepro-file" data-backdrop="static">
            <div class="modal-dialog modal-lg-cus">
                <div class="modal-content modal-cus-bg">
                    <div class="modal-header">
                        <h5 class="modal-title pull-left text-uppercase">Manage Project/File</h5>
                    </div>
                    {!!Form::open(['url' => '/Single/Update_Project/','class'=>'dropzone','id'=>'my-awesome-dropzone','method' => 'post','enctype'=>'multipart/form-data'])!!}
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Project Name</label>
                                    <input type="text" class="form-control" name="pro_name" id="project_name" oninput="countProfileName()">
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
        <script>
            $(function(){
                $('.lobilist-demo').lobiList({
                    sortable: false,
                    useCheckboxes: true,
                    enableTodoAdd: false,
                    enableTodoRemove: true,
                    enableTodoEdit: true,
                    lists: [
                        {
                            title: 'TODO',
                            defaultStyle: 'lobilist-info',
                            controls: ['edit', 'add','removes'],
                        }
                    ],
                });
            });
            function todoShow(){
                $('#card_update').load(location.href+ ' #card_update');
                 $('.file-list').load(location.href+ ' .file-list');
                var project_id = document.getElementById('project_id').value;
                $.ajax({
                    url:'/project/todo_show/'+project_id,
                    success:function(data){
                        jQuery.each(data,function(index,item){
                            $('.lobilist-body ul').append(
                                '<li data-id="" class="lobilist-item"><div class="lobilist-item-title">'+item.title+'</div>' +
                                '<div class="lobilist-item-description">'+item.description+'</div>' +
                                '<div class="lobilist-item-duedate">'+item.date+'</div>' +
                                '<div class="lobilist-custom-check"><input class="styled-checkbox" type="checkbox"><label></label></div>' +
                                '<div class="todo-actions"><div class="edit-todo todo-action edit_todo" data-edit='+item.slug+'>' +
                                '<i class="zmdi zmdi-edit"></i></div>' +
                                '<div class="delete-todo todo-action todo_delete" data-delete='+item.slug+'>' +
                                '<i class="zmdi zmdi-close"></i></div></div>' +
                                '<div class="drag-handler"></div></li>'
                            )
                        })
                    }
                });
            }
            $(document).on('click','.add_todo',function(){
                var title = $('.title').val();
                var description = $('.description').val();
                var date = $('.date').val();
                var project_id = document.getElementById('project_id').value;
                var id = $('.id').val();
                if(id == ''){
                    $.ajax({
                        url:'/project/todo',
                        method:'POST',
                        data:{_token:'{!! csrf_token() !!}',title,description,date,project_id},
                        dataType:'JSON',
                        success:function(data){
                            $('.lobilist-body ul').empty();
                            todoShow();
                        }
                    })
                }
                else if(id !=''){
                    $.ajax({
                        url:'/project/todo/update',
                        method:'POST',
                        data:{_token:'{!! csrf_token() !!}',title,description,date,project_id,id},
                        dataType:'JSON',
                        success:function(data){
                            $('.lobilist-body ul').empty();
                            todoShow();
                        }
                    })
                }
            });
            $(document).on('click','.edit_todo',function(){
                $('.lobilist-add-todo-form').removeClass('hide');
                $('.title').val($(this).parent().parent().find('.lobilist-item-title').text());
                $('.description').val($(this).parent().parent().find('.lobilist-item-description').text());
                $('.date').val($(this).parent().parent().find('.lobilist-item-duedate').text());
                $('.lobilist-add-todo-form').find('input[name="id"]').val($(this).data('edit'));
            });
            $(document).on('click','.btn-raised',function(){
                $('.lobilist-add-todo-form').addClass('hide');
            });
            $(document).on('click','.todo_delete',function(){
                var todo_delete = $(this).data('delete');
                $.ajax({
                    url:'/project/todo/delete',
                    method:'POST',
                    data:{_token:'{!! csrf_token() !!}',todo_delete},
                    success:function(data){
                        $('.lobilist-body ul').empty();
                        todoShow();
                    }
                })
            });
            $(document).on('click','.supplier_preview',function(){
                document.getElementById('img-1').src=$(this).data('supplier_logo');
                document.getElementById('supplier_name_highlighted').innerHTML = $(this).data('supplier_name');
                        document.getElementById('supplier_name_highlighted_two').innerHTML = $(this).data('supplier_name');
                        document.getElementById('supplier_description').innerHTML = $(this).data('supplier_description');
                        document.getElementById('supplier_web_address').innerHTML = $(this).data('supplier_web_address');
                        document.getElementById('supplier_email').innerHTML = $(this).data('supplier_email');
                        document.getElementById('supplier_file_number').innerHTML = $(this).data('supplier_file_number');
                        document.getElementById('supplier_phone').innerHTML = $(this).data('supplier_phone');
                        document.getElementById('supplier_social_address').innerHTML = $(this).data('supplier_social_address');
                        document.getElementById('supplier_address').innerHTML = $(this).data('supplier_address');
                var supplier_id = $(this).data('supplier_id');
                $.ajax({
                    url:'/project/supplier/preview/'+supplier_id,
                    success:function(data){
                        $('#preview_append').empty();
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
            $(document).on('click','.mydelete-message',function(){
                var id = $(this).data('id');
                var img = $(this).data('img');
                var slug = $(this).data('slug');
                singleProjectDelete(id,img);
            });
            function singleProjectDelete(id,img) {
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
                                url: '/single/project/delete/'+id+'/'+img,
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
                                url: '/project/single/delete/'+id,
                                method:'GET',
                                success: function (data) {
                                    
                                    window.location.href='/project'
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
                    url:' /project/selected/supplier/'+project_id+'/'+project_category_id,
                    success:function(data){
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
            $(document).on('click','.remove_file',function(){
                $(this).parent().parent().remove();
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
                             setTimeout(function(){window.location.href="{{route('project.show',$slug->pro_name.'_'.$slug->id)}}"},6000);    
                          }else{
                              e.stopPropagation();
                              myDropzone.processQueue();
                             setTimeout(function(){window.location.href="{{route('project.show',$slug->pro_name.'_'.$slug->id)}}"},5000);  
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
        <script src="{{asset('aegis_files/myasset/vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/vendors/bower_components/popper.js/dist/umd/popper.min.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/vendors/bower_components/trumbowyg/dist/trumbowyg.min.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/vendors/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/vendors/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/vendors/bower_components/jszip/dist/jszip.min.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/vendors/bower_components/sweetalert2/dist/sweetalert2.min.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/vendors/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/js/app.min.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/js/mail.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/js/lobilist.min.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/js/simplebar.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/js/owl.carousel.min.js')}}"></script>
        <script>
            $('.owl-carousel').owlCarousel({
                                loop: true,
                                margin: 0,
                                nav: true,
                                dots: false,
                                navText: [
                                  "<i class='fa fa-chevron-left'></i>",
                                  "<i class='fa fa-chevron-right'></i>"
                                ],
                                autoplay: false,
                                autoplayHoverPause: true,
                                autoplayTimeout:2000,
                                responsive: {
                                  0: {
                                    items: 1
                                  },
                                  600: {
                                    items: 1
                                  },
                                  1000: {
                                    items: 1
                                  }
                                }
                              })
                          </script>
        <script src="{{asset('aegis_files/myasset/js/simpleLightbox.min.js')}}"></script>
        <script>
            $('.owl-text-item a').simpleLightbox();
            $('.file-list .file-name .lightimgshow').simpleLightbox();
        </script>
        <script>
            $('#data-table-new').DataTable({
                "paging":   false,
                "ordering": false,
                "info":     false,
                "searching": false
            });
        </script>
    </body>
</html>