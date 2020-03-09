@extends('Admin.thirdmaster')
@section('status')
    {{$employee->first_name}} | {{$employee->last_name}}
@endsection
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
    <div class="content__inner content__inner--sm" id="card_profile" >
        <div class="card profile">
            <div class="profile__img" id="card_profile_img">
                <img src="{{url('/aegis_files/employee_image/'.$employee->employee_pic)}}" alt="" id="pro-img">
                {!! Form::open(['method'=>'post','id'=>'formData','enctype'=>'multipart/form-data']) !!}
                @can('employee_edit',Auth::user())
                <a href="" class="zmdi zmdi-camera profile__img__edit img_upload" ></a>
                @endcan
                <input type="file" accept='image/*' class="pic-upload employee_pic" id="employee_pic" name="employee_pic" hidden="hidden">
                <input type="text" name="id" value="{{$employee->id}}" hidden="hidden"/>
                {!! Form::close() !!}
            </div>
            <div class="profile__info empployee-about">
                <h3>{{$employee->first_name}} {{$employee->last_name}}</h3>
                <p>{{$employee->job_title}}</p>
                <!--, {{$employee->address_area_division}}-->
                <ul class="icon-list">
                    <li><i class="zmdi zmdi-phone"></i>{{$employee->mobile_phone}}</li>
                    <li><i class="zmdi zmdi-email"></i>{{$employee->email}}</li>
                    <li><i class="zmdi zmdi-account-circle"></i>{{$role_name}}</li>
                    <li><i class="zmdi zmdi-skype"></i>{{$employee->sky_id}}</li>
                </ul>
            </div>
            @can('employee_edit',Auth::user())
            <a class="profile-edit text-uppercase data_edit" data-edit="{{$employee->id}}" data-toggle="modal" data-target="#profile-edit">
            <span class="badge badge-light"><span class="zmdi zmdi-edit"></span>
            </span>
            </a>
            @endcan
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-body__title mb-4">About {{$employee->first_name}} {{$employee->last_name}}</h4>
                <p>{{$employee->notes}}</p>
                <br>
                <h4 class="card-body__title mb-4">Contact Information</h4>
                <ul class="icon-list">
                    <li><i class="zmdi zmdi-phone"></i>{{$employee->home_phone}}</li>
                    <li><i class="zmdi zmdi-email"></i>{{$employee->email}}</li>
                    <li><i class="zmdi zmdi-link"></i><a href="{{$employee->website}}" target="_blank">{{$employee->website}}</a></li>
                    <li><i class="zmdi zmdi-facebook"></i><a href="{{$employee->facebook}}" target="_blank">{{$employee->facebook}}</a></li>
                    <li><i class="zmdi zmdi-linkedin"></i><a href="{{$employee->link_profile}}" target="_blank">{{$employee->link_profile}}</a></li>
                    <li><i class="zmdi zmdi-pin"></i>{{$employee->address_location}}, {{$employee->address_area_division}}</li>
                    <li><i class="zmdi zmdi-pin"></i>{{$employee->address_two}}</li>
                </ul>
            </div>
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
        $(document).on('change','.employee_pic',function(){
            var myForm = document.getElementById('formData');
            var formData = new FormData(myForm);
            $.ajax({
                url: '/employee/update_pic',
                method: "POST",
                data: formData,
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    $('#card_profile').load(location.href+ ' #card_profile');
                    toastr.options = {
                        "debug": false,
                        "positionClass": "toast-bottom-right",
                        "onclick": null,
                        "fadeIn": 300,
                        "fadeOut": 1000,
                        "timeOut": 5000,
                        "extendedTimeOut": 1000
                    };
                    toastr.success('Image Update Successfully!');
                }
            })
        });
        $(document).on('click','.data_edit',function(){
            var edit = $(this).data('edit');
            $.ajax({
                url:'/employee/edit/'+edit,
                success:function(data){
                    console.log(data);
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
                      $('#card_profile').load(location.href+ ' #card_profile');
                       toastr.success('Information Update Successfully!');
                   }
               })
           }
       });
    </script>
    @endsection