@extends('Admin.thirdmaster')
@section('status','Supplier | Category')
@section('supplier','navigation__sub--active navigation__sub--toggled')
@section('supplier_category','navigation__sub--active navigation__sub--toggled')
@section('sub_new_category','navigation__active')
@section('mycontent')
    <div class="row">
        <div class="col-lg-4 col-md-12 lg-pr-0">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        <i class="zmdi zmdi-account-add"></i> Add Supplier Category
                    </h4>
                    <div class="row  reset">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" placeholder="Title" id="title_store" name="title">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Slug</label>
                                <input type="text" class="form-control" placeholder="Slug" id="slug_store" name="slug">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="5" placeholder="Description" id="description_store" name="description"></textarea>
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" id="category_store" class="btn btn-dark btn-submit" data-id = "1">Add New Category</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="card" >
                <div class="card-body">
                    <h4 class="card-title">Category Manage</h4>
                    <form class="search custom-inner-search">
                        <div class="search__inner">
                            <input type="text" id="contact_search" name="contact_search" class="search__text keyup_search" placeholder="Search for category...">
                            <i class="zmdi zmdi-search search__helper reset_search" data-sa-action="search-close"></i>
                        </div>
                    </form>
                    <div id="pagination_data" class="pagination_data">
                        @include('Admin.Supplier_Category.category_pagination')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-default" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title pull-left">Update Category</h5>
                </div>
                <div class="modal-body">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" placeholder="Title" id="title" name="title">
                            <input type="hidden" class="form-control" placeholder="Title" id="id" name="id">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Slug</label>
                            <input type="text" class="form-control" placeholder="Slug" id="slug" name="slug">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" rows="5" placeholder="Description" id="description" name="description"></textarea>
                            <i class="form-group__bar"></i>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-link update_category" data-dismiss="modal">Update Category</button>
                    <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script>
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
        $(document).on('keyup','.keyup_search',function(){
            var search = $(this).val();
            $.ajax({
                url:'/supplier_category/search/'+search,
                success:function(data){
                    $('.pagination_data').html(data);
                }
            })
        });
        $(document).on('click','#category_store',function(){
            var title = document.getElementById('title_store').value;
            var slug = document.getElementById('slug_store').value;
            var description = document.getElementById('description_store').value;
            if(title !='' && slug !='' && description !=''){
                $.ajax({
                    url:'/suppler_category/store',
                    method:'post',
                    data:{_token:'{!! csrf_token() !!}',title,slug,description},
                    success:function(data){
                        document.getElementById('title_store').value ='';
                        document.getElementById('slug_store').value='';
                        document.getElementById('description_store').value='';
                        $('#category_pagination').load(location.href+ ' #category_pagination');
                    }
                })
            }
           else{
                toastr.warning('Fill Up Tile,Slug And Description Field Properly');
            }
        });
        $(document).on('click','.edit_category',function(){
            document.getElementById('title').value = $(this).data('title');
            document.getElementById('id').value = $(this).data('id');
            document.getElementById('slug').value = $(this).data('slug');
            document.getElementById('description').innerHTML = $(this).data('description');
            document.getElementById('description').value = $(this).data('description');
        });
        $(document).on('click','.update_category',function(){
            var title = document.getElementById('title').value;
            var id = document.getElementById('id').value;
            var slug = document.getElementById('slug').value;
            var description = document.getElementById('description').value;
            if(title !='' && slug !='' && description !=''){
                $.ajax({
                    url:'/suppler_category/update',
                    method:'POST',
                    data:{_token:'{!! csrf_token() !!}',title,id,slug,description},
                    success:function(data){
                        $('#category_pagination').load(location.href+ ' #category_pagination');
                        toastr.success('Category Updated Successfully');
                    }
                })
            }
            else{
                toastr.warning('Fill Up Tile,Slug And Description Field Properly');
            }
        });
        $(document).on('click','.reset_search',function(){
           $.ajax({
               url:'/supplier/category/reset_search',
               success:function(data){
                   $('.pagination_data').html(data);
               }
           })
        });
        $(document).on('click','.delete-message',function(){
            var category_delete = $(this).data('id');
            categoryDelete(category_delete);
        });
        function categoryDelete(category_delete) {
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
                            url: '/category/delete/' + category_delete,
                            type: 'GET',
                            dataType: 'JSON',
                            success: function (data) {
                                toastr.success('Category Deleted Successfully!');
                                $('#category_pagination').load(location.href+ ' #category_pagination');
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
    @endsection