@extends('Admin.thirdmaster')
@section('status','Add | Employee')
@section('employee','navigation__sub--active navigation__sub--toggled')
@section('employee_create','navigation__active')
@section('mycontent')
    <div class="content__inner content__inner--sm">
        <header class="content__title">
            <h1 class="text-center">Add new employee</h1>
        </header>
       @if ($errors->any())
        <div class="alert alert-danger">
         <ul>
         @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
         @endforeach
         </ul>
         </div>
        @endif
        {!! Form::open(['route'=>'employee.store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
        <div class="card new-contact">
            <div class="new-contact__header">
                <a href="" class="zmdi zmdi-camera new-contact__upload img_upload"></a>
                <input type="file" accept='image/*' id="employee_pic" name="employee_pic" class="pic-upload" hidden="hidden">
                <img src="{{asset('aegis_files/myasset/img/demo.png')}}" class="new-contact__img" alt="">
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" class="form-control" name="first_name" id="mem_first_name" required placeholder="i.e. John">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control" name="last_name" id="mem_last_name" placeholder="i.e. Smith">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Company</label>
                            <input type="text" class="form-control" name="company" placeholder="i.e. Google Inc.">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Job Title</label>
                            <input type="text" class="form-control" name="job_title" placeholder="i.e. Web Developer">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" class="form-control" name="email" placeholder="i.e. smith@gmail.com">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Website</label>
                            <input type="text" class="form-control" name="website" placeholder="i.e. http://smith.com">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Mobile Phone</label>
                            <input type="text" class="form-control" name="mobile_phone" placeholder="i.e. +14155552671">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Home Phone</label>
                            <input type="text" class="form-control" name="home_phone" placeholder="i.e. +415 555 2671">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Linkedin</label>
                            <input type="text" class="form-control" name="link_profile" placeholder="i.e. http://linkedin.com/John">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Facebook</label>
                            <input type="text" class="form-control" name="facebook" placeholder="i.e. http://facbook.com/John">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Skype</label>
                            <input type="text" class="form-control" name="sky_id" placeholder="i.e. John_doe">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Assign Role</label>
                            <div class="dropdown-new sm-width pull-right mr-1-half">
                                <div class="select">
                                    <span>Select</span>
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
                            <input type="password" class="form-control" id="password" name="password" required placeholder="Type Your Password">
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
                            <textarea class="form-control textarea-autosize" name="address_location" required placeholder="location"></textarea>
                            <i class="form-group__bar"></i>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea class="form-control textarea-autosize" name="address_area_division" required placeholder="Area,Division"></textarea>
                            <i class="form-group__bar"></i>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Address Two</label>
                            <textarea class="form-control textarea-autosize" name="address_two" required placeholder="i.e. 711-2880 Nulla St. Mankato, Mississippi, 96522."></textarea>
                            <i class="form-group__bar"></i>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Notes</label>
                            <textarea class="form-control textarea-autosize" name="notes" required></textarea>
                            <i class="form-group__bar"></i>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="mt-5 text-center">
                    <input type="button" class="btn btn-light" id="employee_submit" onclick="myFunction()" value="Save New Employee"/>
                    <a href="{{route('employee.create')}}" class="btn btn-light">Clear</a>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
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
        function myFunction(){
            toastr.options = {
                "debug": false,
                "positionClass": "toast-bottom-right",
                "onclick": null,
                "fadeIn": 300,
                "fadeOut": 1000,
                "timeOut": 5000,
                "extendedTimeOut": 1000
            };
            var employee_pic = document.getElementById('employee_pic').value;
            var password = document.getElementById('password').value;
            var confirm_password = document.getElementById('confirm_password').value;
            var employee_submit = document.getElementById('employee_submit');
            var employee_firstname = document.getElementById('mem_first_name').value;
            var employee_lastname = document.getElementById('mem_last_name').value;
            if(password != confirm_password){
                toastr.warning('Confirm Password Not Match To The Password!')
            }else if(employee_pic ==''){
                toastr.warning('Employee Image Required')
            }else if(employee_firstname.length>70){
                toastr.warning('First Name Not More Than 70 Character!');
            }else if(employee_lastname.length>70){
                toastr.warning('Last Name Not More Than 70 Character!');
            }else if(password == confirm_password && employee_pic !=''){
                employee_submit.type = 'submit';
            }
        }
           toastr.warning(
                '@if ($errors->any())',
                '<div class="alert alert-danger">',
                '<ul>',
                '@foreach ($errors->all() as $error)',
                '<li>{{ $error }}</li>',
                '@endforeach',
                '</ul>',
                '</div>',
                '@endif'
           )
    </script>
    @endsection