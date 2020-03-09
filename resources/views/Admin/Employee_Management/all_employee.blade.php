@extends('Admin.thirdmaster')
@section('status','All | Employees')
@section('employee','navigation__sub--active navigation__sub--toggled')
@section('employee_index','navigation__active')
@section('mycontent')
    <div class="modal fade" id="profile-edit" data-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-lg-cus">
            <div class="modal-content modal-cus-bg">
                {!! Form::open(['method'=>'POST','id'=>'editData']) !!}
                <div class="modal-header">
                    <h5 class="modal-title pull-left text-uppercase">Edit Profile</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" id="first_name" name="first_name" class="form-control" placeholder="i.e. John">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" id="last_name" name="last_name" class="form-control" placeholder="i.e. Smith">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Company</label>
                                <input type="text" id="company" name="company" class="form-control" placeholder="i.e. Google Inc.">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Job Title</label>
                                <input type="text" id="job_title" name="job_title" class="form-control" placeholder="i.e. Web Developer">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="text" id="email_address" name="email" class="form-control" placeholder="i.e. smith@gmail.com">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Website</label>
                                <input type="text" id="website" name="website" class="form-control" placeholder="i.e. http://smith.com">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Mobile Phone</label>
                                <input type="text" id="mobile_phone" name="mobile_phone" class="form-control" placeholder="i.e. +14155552671">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Home Phone</label>
                                <input type="text" id="home_phone" name="home_phone" class="form-control" placeholder="i.e. +415 555 2671">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Linkedin</label>
                                <input type="text" id="link_profile" name="link_profile" class="form-control" placeholder="i.e. http://linkedin.com/John">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Facebook</label>
                                <input type="text" id="facebook" name="facebook" class="form-control" placeholder="i.e. http://facbook.com/John">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Skype</label>
                                <input type="text" id="sky_id" name="sky_id" class="form-control" placeholder="i.e. John_doe">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Assign Role</label>
                                <div class="dropdown-new sm-width pull-right mr-1-half">
                                    <div class="select">
                                        <span id="role_name"></span>
                                        <i class="zmdi zmdi-chevron-left"></i>
                                    </div>
                                    <input type="hidden" name="role_id" id="role_id"/>
                                    <input type="hidden" name="role_name" id="role_name"/>
                                    <ul class="dropdown-menu-new call-sort">
                                        @foreach($roles as $role)
                                            <li class="role_name" data-id="{{$role->id}}" data-name="{{$role->role_name}}">{{$role->role_name}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" class="form-control" id="password" name="password" required placeholder="Type Your Password">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" id='confirm_password' name="confirm_password" required placeholder="Type Your Password Again">
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
                                <label>Address Two</label>
                                <textarea class="form-control textarea-autosize" id="address_two" name="address_two" placeholder="i.e. 711-2880 Nulla St. Mankato, Mississippi, 96522."></textarea>
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Notes</label>
                                <textarea class="form-control textarea-autosize" id="notes" name="notes"></textarea>
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="text" id="edit_id" value="" name="edit_id" hidden="hidden"/>
                <div class="modal-footer">
                    <input type="button" class="btn btn-light update_model_data" id='modal_submit' data-dismiss="modal" value="update">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <div class="content__inner" id="whole_refresh">
        <header class="content__title">
            <h1 class="text-center">Employees</h1>
        </header>
        <div class="card">
            <div class="card-body contact-search">
                <form class="search">
                    <div class="search__inner">
                        <input type="text" id="employee_search" class="search__text keyup_search" placeholder="Search for employees...">
                        <i class="zmdi zmdi-search search__helper" data-sa-action="search-close"></i>
                    </div>
                </form>
                <div class="sort-alpha">Filter By</div>
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
           <div class="pagination_data">
               @include('Admin.Employee_Management.employee_pagination')
           </div>
    </div>
<script>
        $(document).on('click','.role_name',function(){
            var id = $(this).data('id');
            var name = $(this).data('name');
            var role_id = document.getElementById('role_id');
            var role_name = document.getElementById('role_name');
            role_id.value = id;
            role_name.value = name;
        });
        $(document).on('keyup','.keyup_search',function(){
            var search = $(this).val();
            $.ajax({
                url:'/employee/search/'+search,
                success:function(data){
                    $('.pagination_data').html(data)
                }
            })
        });
       $(document).on('click','.common',function(){
           document.getElementById('employee_search').value ='';
          var alphabet = $(this).data('alphabet');
          $.ajax({
              url:'/employee/alphabet_search/' + alphabet,
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
               url:'/employee/edit/'+edit,
               success:function(data){
                document.getElementById('first_name').value = data[0].first_name;
                document.getElementById('last_name').value = data[0].last_name;
                document.getElementById('company').value = data[0].company;
                document.getElementById('job_title').value = data[0].job_title;
                document.getElementById('email_address').value = data[0].email;
                document.getElementById('website').value = data[0].website;
                document.getElementById('mobile_phone').value = data[0].mobile_phone;
                document.getElementById('home_phone').value = data[0].home_phone;
                document.getElementById('link_profile').value = data[0].link_profile;
                document.getElementById('facebook').value = data[0].facebook;
                document.getElementById('sky_id').value = data[0].sky_id;
                document.getElementById('password').value = data[0].confirm_password;
                document.getElementById('confirm_password').value = data[0].confirm_password;
                document.getElementById('address_location').value = data[0].address_location;
                document.getElementById('address_area_division').value = data[0].address_area_division;
                document.getElementById('address_two').value = data[0].address_two;
                document.getElementById('notes').value = data[0].notes;
                document.getElementById('edit_id').value=data[0].id;
                if(data[1]=='No Roll'){
                    document.getElementById('role_name').innerHTML='No Roll Selected Yet';
                }else{
                    document.getElementById('role_name').innerHTML=data[1];
                }
               }
           })
       });
       $(document).on('click','.update_model_data',function(){
           var first_name = document.getElementById('first_name').value;
           var last_name = document.getElementById('last_name').value;
           var first_name_length = first_name.length;
           var last_name_length = last_name.length;
           var editData = document.getElementById('editData');
           var editFormData = new FormData(editData);
           var password = document.getElementById('password');
           var confirm_password = document.getElementById('confirm_password');
           if(password.value != confirm_password.value){
               toastr.warning('Confirm Password Not Match To The Password!');
           }
           else if(password.value == confirm_password.value)
           {
               document.getElementById('modal_submit').type = 'submit';
               $.ajax({
                   url:'/employee/update',
                   method:'POST',
                   data:editFormData,
                   dataType:'JSON',
                   contentType:false,
                   cache:false,
                   processData:false,
                   success:function(data){
                       $('#pagination').load(location.href+ ' #pagination');
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
                            url: '/employee/delete/' + delete_contact,
                            type: 'GET',
                            dataType: 'JSON',
                            success: function (data) {
                                toastr.success('Employee Deleted Successfully!');
                                $('#pagination').load(location.href+ ' #pagination');
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