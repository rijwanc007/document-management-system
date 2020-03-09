@extends('Admin.thirdmaster')
@section('status','All | Contacts')
@section('contact','navigation__sub--active navigation__sub--toggled')
@section('contact_index','navigation__active')
@section('mycontent')
    <div class="modal fade" id="profile-edit" data-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-lg-cus">
            <div class="modal-content modal-cus-bg">
                {!! Form::open(['method'=>'POST','id'=>'editData']) !!}
                <div class="modal-header">
                    <h5 class="modal-title pull-left text-uppercase">Edit Contact</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" value="">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" value="">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Company</label>
                                <input type="text" class="form-control" id="company" name="company" value="">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Job Title</label>
                                <input type="text" class="form-control" id="job_title" name="job_title" value="">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="text" class="form-control" id="email_address" name="email_address" value="">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Website</label>
                                <input type="text" class="form-control" id="website" name="website" value="">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Mobile Phone</label>
                                <input type="text" class="form-control" id="mobile" name="mobile" value="">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Home Phone</label>
                                <input type="text" class="form-control" id="home_phone" name="home_phone" value="">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Linkedin</label>
                                <input type="text" class="form-control" id="link_profile" name="link_profile" value="">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Facebook</label>
                                <input type="text" class="form-control" id="facebook" name="facebook" value="">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Skype</label>
                                <input type="text" class="form-control" id="skype" name="skype"  value="">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label>Address One</label>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control textarea-autosize" id="address_location" name="address_location" required placeholder="location"></textarea>
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control textarea-autosize" id="address_area_division" name="address_area_division" required placeholder="Area,Division"></textarea>
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Address 2</label>
                                <textarea class="form-control textarea-autosize" id="address_two" name="address_two"></textarea>
                                <i class="form-group__bar"></i>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Notes</label>
                                <textarea class="form-control textarea-autosize" id="description" name="description"></textarea>
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="text" id="edit_id" value="" name="edit_id" hidden="hidden"/>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-light edit_modal_data" data-dismiss="modal">Update</button>
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
        <div class="content__inner" id="whole_refresh">
            <header class="content__title">
                <h1 class="text-center">Contacts</h1>
            </header>
            <div class="card">
                <div class="card-body contact-search">
                    <form class="search">
                        <div class="search__inner">
                            <input type="text" id="contact_search" name="contact_search" class="search__text keyup_search" placeholder="Search for contacts...">
                            <i class="zmdi zmdi-search search__helper" data-sa-action="search-close"></i>
                        </div>
                    </form>
                    <div class="sort-alpha">Filter By Alphabet</div>
                    <ul class="sort-list">
                        <li><a href="javascript:void(0)" data-alphabet="all" class="common">all</a></li>
                        <li><a href="javascript:void(0)" data-alphabet="a" class="common">a</a></li>
                        <li><a href="javascript:void(0)" data-alphabet="b" class="common">b</a></li>
                        <li><a href="javascript:void(0)" data-alphabet="c" class="common">c</a></li>
                        <li><a href="javascript:void(0)" data-alphabet="d" class="common">d</a></li>
                        <li><a href="javascript:void(0)" data-alphabet="e" class="common">e</a></li>
                        <li><a href="javascript:void(0)" data-alphabet="f" class="common">f</a></li>
                        <li><a href="javascript:void(0)" data-alphabet="g" class="common">g</a></li>
                        <li><a href="javascript:void(0)" data-alphabet="h" class="common">h</a></li>
                        <li><a href="javascript:void(0)" data-alphabet="i" class="common">i</a></li>
                        <li><a href="javascript:void(0)" data-alphabet="j" class="common">j</a></li>
                        <li><a href="javascript:void(0)" data-alphabet="k" class="common">k</a></li>
                        <li><a href="javascript:void(0)" data-alphabet="l" class="common">l</a></li>
                        <li><a href="javascript:void(0)" data-alphabet="m" class="common">m</a></li>
                        <li><a href="javascript:void(0)" data-alphabet="n" class="common">n</a></li>
                        <li><a href="javascript:void(0)" data-alphabet="o" class="common">o</a></li>
                        <li><a href="javascript:void(0)" data-alphabet="p" class="common">p</a></li>
                        <li><a href="javascript:void(0)" data-alphabet="q" class="common">q</a></li>
                        <li><a href="javascript:void(0)" data-alphabet="r" class="common">r</a></li>
                        <li><a href="javascript:void(0)" data-alphabet="s" class="common">s</a></li>
                        <li><a href="javascript:void(0)" data-alphabet="t" class="common">t</a></li>
                        <li><a href="javascript:void(0)" data-alphabet="u" class="common">u</a></li>
                        <li><a href="javascript:void(0)" data-alphabet="v" class="common">v</a></li>
                        <li><a href="javascript:void(0)" data-alphabet="w" class="common">w</a></li>
                        <li><a href="javascript:void(0)" data-alphabet="x" class="common">x</a></li>
                        <li><a href="javascript:void(0)" data-alphabet="y" class="common">y</a></li>
                        <li><a href="javascript:void(0)" data-alphabet="z" class="common">z</a></li>
                    </ul>
                </div>
            </div>
            <div id='pagination_data' class="pagination_data">
                @include('Admin.Contact_Management.contact_pagination')
            </div>
        </div>
<script>
            $(document).on('keyup','.keyup_search',function(){
                var search = $(this).val();
                $.ajax({
                    url:'/search/'+search,
                    success:function(data){
                        $('.pagination_data').html(data)
                    }
                })
            });
            $(document).on('click','.common',function(){
                document.getElementById('contact_search').value = '';
                var alphabet = $(this).data('alphabet');
                $.ajax({
                    url:'/alphabet/' + alphabet,
                    success:function(data){
                        $('.pagination_data').html(data)
                    }
                })
            });
            $(document).on('click','.pagination a',function(event){
                event.preventDefault();
                var page_url = $(this).attr('href');
                $.ajax({
                    url:page_url,
                    success:function(data){
                        $('.pagination_data').html(data)
                    }
                })
            });
            $(document).on('click','.data_edit',function(){
                var edit = $(this).data('edit');
                $.ajax({
                    url:'/contact/edit/'+edit,
                    success:function(data){
                        document.getElementById('first_name').value=data.first_name;
                        document.getElementById('last_name').value=data.last_name;
                        document.getElementById('company').value=data.company;
                        document.getElementById('job_title').value=data.job_title;
                        document.getElementById('email_address').value=data.email_address;
                        document.getElementById('website').value=data.website;
                        document.getElementById('mobile').value=data.mobile;
                        document.getElementById('home_phone').value=data.home_phone;
                        document.getElementById('link_profile').value=data.link_profile;
                        document.getElementById('facebook').value=data.facebook;
                        document.getElementById('skype').value=data.skype;
                        document.getElementById('address_location').value=data.address_location;
                        document.getElementById('address_area_division').value=data.address_area_division;
                        document.getElementById('address_two').innerHTML=data.address_two;
                        document.getElementById('description').innerHTML=data.description;
                        document.getElementById('edit_id').value=data.id;
                    }
                })
            });
            $(document).on('click','.edit_modal_data',function(){
                toastr.options = {
                            "debug": false,
                            "positionClass": "toast-bottom-right",
                            "onclick": null,
                            "fadeIn": 300,
                            "fadeOut": 1000,
                            "timeOut": 5000,
                            "extendedTimeOut": 1000
                        };
                var first_name = document.getElementById('first_name').value;
                var last_name = document.getElementById('last_name').value;
                var first_name_length = first_name.length;
                var last_name_length = last_name.length;
                 if(first_name_length > 70 ){
                     toastr.warning('First Name Not More Than 70 Character!') 
                    }
                    else if(last_name_length > 70 ){
                       toastr.warning('last Name Not More Than 70 Character!') 
                    }
                var editData = document.getElementById('editData');
                var editFormData = new FormData(editData);
                if(first_name_length<70 && last_name_length<70){
                  $.ajax({
                    url:"/contact/editFormData",
                    method:"POST",
                    data:editFormData,
                    dataType:'JSON',
                    contentType:false,
                    cache:false,
                    processData:false,
                    success:function(data){
                        $('#contact_row').load(location.href+ ' #contact_row');
                        toastr.success('Information Update Successfully!');
                    }
                })  
                }
            });
                $(document).on('click','.delete-message',function(){
                    var delete_contact = $(this).data('id');
                    contactDelete(delete_contact);
                });
                function contactDelete(delete_contact) {
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
                                    url: '/contact/delete/' + delete_contact,
                                    type: 'GET',
                                    dataType: 'JSON',
                                    success: function (data) {
                                        toastr.success('Contact Deleted Successfully!');
                                        $('#contact_row').load(location.href+ ' #contact_row');
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

