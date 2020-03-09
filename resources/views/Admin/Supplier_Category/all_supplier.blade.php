@extends('Admin.secondmaster')
@section('status','All | Supplier')
@section('supplier','navigation__sub--active navigation__sub--toggled')
@section('all_supplier','navigation__active')
@section('mycontent')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body table-search supplier">
                    <form class="search">
                        <div class="search__inner">
                            <input type="text" class="search__text keyup_search" id="search" placeholder="Search for suppliers...">
                            <i class="zmdi zmdi-search search__helper reset_search" data-sa-action="search-close"></i>
                            <div class="dropdown-new sm-width pull-right mr-1-half">
                                <div class="select">
                                    <span>Category</span>
                                    <i class="zmdi zmdi-chevron-left"></i>
                                </div>
                                <input type="hidden" name="sort">
                                <ul class="dropdown-menu-new call-sub-cat">
                                    <li class="cancel_category_wise_search">cancel search</li>
                                    @foreach($categories as $category)
                                    <li class="category_name" data-id="{{$category->id}}" data-category="{{$category->title}}">{{$category->title}}</li>
                                        @endforeach
                                </ul>
                                <input type="hidden" id="category_search"/>
                                <input type="hidden" id="search_category"/>
                            </div>
                        </div>
                    </form>
                    <div class="sort-alpha"> <span>Filter By Alphabets</span> </div>
                    <ul class="sort-list">
                        <li><a href="javascript:void(0)" class="common" data-alphabet="all">all</a></li>
                        <li><a href="javascript:void(0)" class="common" data-alphabet="a">A</a></li>
                        <li><a href="javascript:void(0)" class="common" data-alphabet="b">b</a></li>
                        <li><a href="javascript:void(0)" class="common" data-alphabet="c">c</a></li>
                        <li><a href="javascript:void(0)" class="common" data-alphabet="d">d</a></li>
                        <li><a href="javascript:void(0)" class="common" data-alphabet="e">e</a></li>
                        <li><a href="javascript:void(0)" class="common" data-alphabet="f">f</a></li>
                        <li><a href="javascript:void(0)" class="common" data-alphabet="g">g</a></li>
                        <li><a href="javascript:void(0)" class="common" data-alphabet="h">h</a></li>
                        <li><a href="javascript:void(0)" class="common" data-alphabet="i">i</a></li>
                        <li><a href="javascript:void(0)" class="common" data-alphabet="j">j</a></li>
                        <li><a href="javascript:void(0)" class="common" data-alphabet="k">k</a></li>
                        <li><a href="javascript:void(0)" class="common" data-alphabet="l">l</a></li>
                        <li><a href="javascript:void(0)" class="common" data-alphabet="m">m</a></li>
                        <li><a href="javascript:void(0)" class="common" data-alphabet="n">n</a></li>
                        <li><a href="javascript:void(0)" class="common" data-alphabet="o">o</a></li>
                        <li><a href="javascript:void(0)" class="common" data-alphabet="p">p</a></li>
                        <li><a href="javascript:void(0)" class="common" data-alphabet="q">q</a></li>
                        <li><a href="javascript:void(0)" class="common" data-alphabet="r">r</a></li>
                        <li><a href="javascript:void(0)" class="common" data-alphabet="s">s</a></li>
                        <li><a href="javascript:void(0)" class="common" data-alphabet="t">t</a></li>
                        <li><a href="javascript:void(0)" class="common" data-alphabet="u">u</a></li>
                        <li><a href="javascript:void(0)" class="common" data-alphabet="v">v</a></li>
                        <li><a href="javascript:void(0)" class="common" data-alphabet="w">w</a></li>
                        <li><a href="javascript:void(0)" class="common" data-alphabet="x">x</a></li>
                        <li><a href="javascript:void(0)" class="common" data-alphabet="y">y</a></li>
                        <li><a href="javascript:void(0)" class="common" data-alphabet="z">z</a></li>
                    </ul>
                </div>
            </div>
            <div class="card">
                <div class="card-body table-body">
                    <h4 class="card-title text-uppercase mb-3">All Suppliers</h4>
                    <div class="table-responsive suppliers-table">
                        <div id="pagination_data" class="pagination_data">
                            @include('Admin.Supplier_Category.supplier_pagination')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="manage-supplier" data-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-lg-cus">
            <div class="modal-content modal-cus-bg">
                <div class="modal-header">
                    <h5 class="modal-title pull-left text-uppercase">Manage Supplier</h5>
                </div>
                {!! Form::open(['method'=>'POST','id'=>'supplier_update','enctype'=>'multipart/form-data']) !!}
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Supplier Name</label>
                                <input type="text" class="form-control" id="edit_supplier_name" name="edit_supplier_name">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Upload Logo</label>
                                <div class="up-wrapper">
                                    <input type="text" readonly="readonly" class="logo-up-name" id="edit_supplier_logo" name="edit_supplier_logo" onclick="supplierLogo()">
                                    <input type="file" hidden="hidden" class="logo-up" id="update_supplier_logo" name="update_supplier_logo">
                                    <span class="browse-btn">Upload</span>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="supplier_id" name="supplier_id"/>
                        <input type="hidden" id="supplier_slug_value" name="supplier_slug_value"/>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="5" id="edit_supplier_description" name="edit_supplier_description"></textarea>
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" id="edit_supplier_phone" name="edit_supplier_phone">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" id="edit_supplier_email" name="edit_supplier_email">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Social Address</label>
                                <input type="text" class="form-control" id="edit_supplier_social_address" name="edit_supplier_social_address">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Web Address</label>
                                <input type="text" class="form-control" id="edit_supplier_web_address" name="edit_supplier_web_address">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" id="edit_supplier_address" name="edit_supplier_address">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Select Supplier Category</label>
                                <div class="dropdown-new sm-width pull-right mr-1-half">
                                    <div class="select">
                                        <span id="select_category">Select</span>
                                        <i class="zmdi zmdi-chevron-left"></i>
                                    </div>
                                    <input type="hidden" name="category_name" id="category_name">
                                    <input type="hidden" name="category_id" id="category_id"/>
                                    <ul class="dropdown-menu-new pro-category">
                                        @foreach($categories as $category)
                                        <li class="category_update" data-id="{{$category->id}}" data-category="{{$category->title}}">{{$category->title}}</li>
                                            @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>File Number</label>
                                <input type="text" class="form-control" id="edit_supplier_file_number" name="edit_supplier_file_number">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                        <div class="contact-info-mul col-12">
                            <div class="row ">
                                <div class="col-sm-12 mb-3">
                                    <h4 class="card-title" id="contact_information">
                                        Contact Information
                                    </h4>
                                </div>
                                    <div class="col-sm-6 contact_information_detail">
                                        <div class="form-group">
                                            <label>Person Name</label>
                                            <input type="text" class="form-control" id="edit_person_name" name="person_name[]" >
                                            <i class="form-group__bar"></i>
                                        </div>
                                    </div>
                                <input type="hidden" id="supplier_contact_id" name="supplier_contact_id[]"/>
                                    <div class="col-sm-6">
                                        <div class="form-group contact_information_detail">
                                            <label>Person Designation</label>
                                            <input type="text" class="form-control" id="edit_designation" name="designation[]">
                                            <i class="form-group__bar"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 contact_information_detail">
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" class="form-control" id="edit_phone" name="phone[]">
                                            <i class="form-group__bar"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 contact_information_detail">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control" id="edit_email" name="email[]">
                                            <i class="form-group__bar"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 contact_information_detail">
                                        <div class="form-group">
                                            <label>Social Address</label>
                                            <input type="text" class="form-control" id="edit_social_address" name="social_address[]">
                                            <i class="form-group__bar"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 contact_information_detail">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control" id="edit_address" name="address[]">
                                            <i class="form-group__bar"></i>
                                        </div>
                                    </div>
                            </div>
                            <div id="append"></div>
                        </div>
                    </div>
                    <div class="modal-footer p-0">
                        <button type="submit" class="btn btn-light supplier_update" data-dismiss="modal">Update</button>
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    </div>
                </div>
                {!! Form::close() !!}
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
    <script src="{{asset('myasset/js/printThis.js')}}"></script>
    <script>
        function supplierLogo(){
            document.getElementById('update_supplier_logo').value = document.getElementById('edit_supplier_logo').value;
        }
        $(document).on('click','.category_update',function(){
            document.getElementById('category_name').value = $(this).data('category');
            document.getElementById('category_id').value = $(this).data('id');
        });
        $(function(){
            $('body').on('click','.pagination a' ,function(event){
                event.preventDefault();
                var page_url = $(this).attr('href');
                $.ajax({
                    url:page_url,
                    success:function(data){
                        $('.pagination_data').html(data)
                    }
                })
            })
        });
        $(document).on('click','.common',function(){
            $('.keyup_search').val('');
            var alphabet = $(this).data('alphabet');
            $.ajax({
                url:'/supplier/alphabet/'+alphabet,
                success:function(data){
                    $('.pagination_data').html(data)
                }
            })
        });
        $(document).on('click','.category_name',function(){
            var category = $(this).data('category');
            document.getElementById('category_search').value = category;
            $.ajax({
                url:'/supplier/category/'+category,
                success:function(data){
                    $('.pagination_data').html(data)
                }
            });
        });
        $(document).on('keyup','.keyup_search',function(){
            var search = $(this).val();
            var category_search = document.getElementById('category_search').value;
            if(search !='' && category_search ==''){
                $.ajax({
                    url:'/supplier/search/'+search,
                    success:function(data){
                        $('.pagination_data').html(data)
                    }
                })
            }if(search !='' && category_search !=''){
                $.ajax({
                    url:'/supplier/categoryWiseSearch/'+category_search+'/'+search,
                    success:function(data){
                        $('.pagination_data').html(data);
                    }
                })
            }

        });
        $(document).on('click','.reset_search',function(){
            $.ajax({
                url:'/supplier/reset/category/search',
                success:function(data){
                    $('.pagination_data').html(data);
                }
            })
        });
        $(document).on('click','.cancel_category_wise_search',function(){
            document.getElementById('category_search').value='';
            document.getElementById('search').value = '';
            $.ajax({
                url:'/supplier/reset/category/search',
                success:function(data){
                    $('.pagination_data').html(data);
                }
            })
        });
        $(document).on('click','.supplier_information',function(){
          var id = $(this).data('id');
          var slug = $(this).data('slug');
          $.ajax({
              url:'/supplier/show/'+id+'/'+slug,
              method : 'GET',
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
        $(document).on('click','.print_supplier_information',function(){
             document.getElementById('img-1').src = $(this).data('supplier_image');
            var id = $(this).data('id');
            var slug = $(this).data('slug');
            $.ajax({
                url:'/supplier/show/'+id+'/'+slug,
                method : 'GET',
                success:function(data){
                    $('#preview_append').empty();
                    document.getElementById('supplier_name_highlighted').innerHTML = data[0].supplier_name;
                    document.getElementById('supplier_web_address').innerHTML = data[0].supplier_web_address;
                    document.getElementById('supplier_email').innerHTML = data[0].supplier_email;
                    document.getElementById('supplier_file_number').innerHTML = data[0].supplier_file_number;
                    document.getElementById('supplier_phone').innerHTML = data[0].supplier_phone;
                    document.getElementById('supplier_social_address').innerHTML = data[0].supplier_social_address;
                    document.getElementById('supplier_address').innerHTML = data[0].supplier_address;
                    jQuery.each(data[1],function(index,item){
                        $('#preview_append').append(
                            '<h4 class="card-body__title mb-4">Contact Information</h4>'+
                            '<ul class="icon-list contact-containers">'+
                            '<li><i class="zmdi zmdi-account"></i>'+item.person_name+'</li>'+
                            '<li><i class="zmdi zmdi-label-alt"></i>'+item.designation+'</li>'+
                            '<li><i class="zmdi zmdi-phone"></i>'+item.phone+'</li>'+
                            '<li><i class="zmdi zmdi-email"></i>'+item.email+'</li>'+
                            '<li><i class="zmdi zmdi-link"></i>'+item.social_address+'</li>'+
                            '<li><i class="zmdi zmdi-pin"></i>'+item.address+'</li>'+
                            '</ul><br>'
                        );
                    })
                }
            });
           setTimeout(function(){
            //   var printDoc = $('#supplier_information_print').html();
                 $('#supplier_information_print').printThis({
                		pageTitle: "Supplier Information",
                		printContainer: true,
                		importCSS: false,
                		debug:false,
                		loadCSS:'http://aegisint.net/management/aegis_files/myasset/css/custom.css'
                	});
                 },4000)
        });
        $(document).on('click','.supplier_manage',function(){
            var id = $(this).data('id');
            var slug = $(this).data('slug');
            document.getElementById('update_supplier_logo').value ='';
            $.ajax({
               url:'/supplier/manage',
               method:'POST',
               data:{_token:'{!! csrf_token() !!}',id,slug},
               dataType:'JSON',
               success:function(data){
                   if(data[0].supplier_logo == null){
                       document.getElementById('edit_supplier_logo').value = 'No Image Available'
                   }else{
                       document.getElementById('edit_supplier_logo').value = data[0].supplier_logo;
                   }
                   if(data[0].supplier_categroy == null){
                       document.getElementById('select_category').innerHTML = 'No Category Selected Yet';
                   }if(data[0].supplier_category != null){
                       document.getElementById('select_category').innerHTML = data[0].supplier_category;
                   }
                   document.getElementById('edit_supplier_name').value = data[0].supplier_name;
                   document.getElementById('edit_supplier_description').innerHTML = data[0].supplier_description;
                   document.getElementById('edit_supplier_phone').value = data[0].supplier_phone;
                   document.getElementById('edit_supplier_email').value = data[0].supplier_email;
                   document.getElementById('edit_supplier_social_address').value = data[0].supplier_social_address;
                   document.getElementById('edit_supplier_web_address').value = data[0].supplier_web_address;
                   document.getElementById('edit_supplier_address').value = data[0].supplier_address;
                   document.getElementById('edit_supplier_file_number').value = data[0].supplier_file_number;
                   document.getElementById('category_name').value = data[0].supplier_category;
                   document.getElementById('category_id').value = data[0].category_id;
                   document.getElementById('supplier_id').value = data[0].id;
                   document.getElementById('supplier_slug_value').value = data[0].supplier_slug;
                   if(data[2] == null){
                       $('#contact_information').hide();
                       $('.contact_information_detail').hide();
                   }
                       $('#contact_information').show();
                       $('.contact_information_detail').show();
                   document.getElementById('edit_person_name').value = data[2].person_name;
                   document.getElementById('edit_designation').value = data[2].designation;
                   document.getElementById('edit_phone').value = data[2].phone;
                   document.getElementById('edit_email').value = data[2].email;
                   document.getElementById('edit_social_address').value = data[2].social_address;
                   document.getElementById('edit_address').value = data[2].address;
                   document.getElementById('supplier_contact_id').value = data[2].id;
                   var i = 2;
                   var j = 1;
                   if(data[1] != ''){
                       $('#append').empty();
                       jQuery.each(data[1],function(index,item){
                           $('.contact-info-mul #append').append(
                               '<div class="row contact-'+i+'"><div class="col-sm-12 mb-3"><h4 class="card-title">Contact '+j+'</h4>' +
                               '<div class="con-add-remove-btn">' +
                               '<a class="btn btn-dark new-contact-remove supplier_contact_remove" data-contact_id="'+item.id+'" data-slug="'+item.supplier_slug+'" onClick="removeContactForm(this)" data-id="'+i+'">Remove Contact</a></div></div>' +
                               '<div class="col-sm-6"><div class="form-group"><label>Person Name</label>' +
                               '<input type="text" class="form-control" value="'+item.person_name+'" name="person_name[]">' +
                               '<i class="form-group__bar"></i></div></div>' +
                               '<input type="hidden" name="supplier_contact_id[]" value="'+item.id+'"/>'+
                               '<div class="col-sm-6"><div class="form-group"><label>Person Designation</label>' +
                               '<input type="text" class="form-control" value="'+item.designation+'" name="designation[]"><i class="form-group__bar"></i></div></div>' +
                               '<div class="col-sm-6"><div class="form-group"><label>Phone</label>' +
                               '<input type="text" class="form-control" value="'+item.phone+'" name="phone[]"><i class="form-group__bar"></i></div></div>' +
                               '<div class="col-sm-6"><div class="form-group"><label>Email</label>' +
                               '<input type="text" class="form-control" value="'+item.email+'" name="email[]"><i class="form-group__bar"></i></div></div>' +
                               '<div class="col-sm-6"><div class="form-group"><label>Social Address</label>' +
                               '<input type="text" class="form-control" value="'+item.social_address+'" name="social_address[]"><i class="form-group__bar"></i></div></div>' +
                               '<div class="col-sm-6"><div class="form-group"><label>Address</label>' +
                               '<input type="text" class="form-control" value="'+item.address+'" name="address[]">' +
                               '<i class="form-group__bar"></i></div></div></div>'
                           );
                           i++;
                           j++;
                       })
                   }else{
                       $('#append').empty();
                   }
               }
           })
        });
        $(document).on('click','.supplier_contact_remove',function(){
            var id = $(this).data('contact_id');
            var slug = $(this).data('slug');
           $.ajax({
               url:'/supplier/contact/remove/'+id+'/'+slug,
               success:function(data){
                   toastr.success('Contact Deleted Successfully!');
               }
           })
        });
        $(document).on('click','.supplier_update',function(){
            var supplier_update = document.getElementById('supplier_update');
            var supplier_update_form = new FormData(supplier_update);
            $.ajax({
                url:'/supplier/update/form',
                method:'POST',
                data:supplier_update_form,
                dataType:'JSON',
                contentType:false,
                cache:false,
                processData:false,
                success:function(data){
                    console.log(data);
                    toastr.success('Supplier Information Updated Successfully!');
                    $('#supplier_pagination').load(location.href+ ' #supplier_pagination');
                }
            });
        });
        $(document).on('click','.delete-message',function(){
            var id = $(this).data('id');
            var slug = $(this).data('slug');
            supplierPlusCategoryDelete(id,slug);
        });
        function supplierPlusCategoryDelete(id,slug) {
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
                            url: '/supplier/category/delete/'+id+'/'+slug,
                            method:'GET',
                            success: function (data) {
                                toastr.success('Supplier Deleted Successfully!');
                                $('#supplier_pagination').load(location.href+ ' #supplier_pagination');
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
    </script>
    <!--<script src="{{asset('aegis_files/myasset/js/simplebar.js')}}"></script>-->
    @endsection