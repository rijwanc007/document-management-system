@extends('Admin.thirdmaster')
@section('status','Create | Contact')
@section('contact','navigation__sub--active navigation__sub--toggled')
@section('contact_create','navigation__active')
@section('mycontent')
    <div class="content__inner content__inner--sm">
        <header class="content__title">
            <h1 class="text-center">Add new contact</h1>
        </header>
        <div class="card new-contact">
            {!! Form::open(['route'=>'contact.store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
            <div class="new-contact__header">
                <a href="" class="zmdi zmdi-camera new-contact__upload img_upload"></a>
                <input type="file" accept='image/*' id='contact_pic' name="contact_pic" class="pic-upload" hidden="hidden">
                <img src="{{asset('aegis_files/myasset/img/demo.png')}}" class="new-contact__img" alt="">
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="first_name" id="first_name" class="form-control" required placeholder="i.e. John">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="last_name" id="last_name" class="form-control" required placeholder="i.e. Smith">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Company</label>
                            <input type="text" name="company" id="company" class="form-control" required placeholder="i.e. Google Inc.">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Job Title</label>
                            <input type="text" name="job_title" id="job_title" class="form-control" required placeholder="i.e. Web Developer">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" name="email_address" id="email_address" class="form-control" required placeholder="i.e. smith@gmail.com">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Website</label>
                            <input type="text" name="website" id="website" class="form-control" required placeholder="i.e. http://smith.com">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Mobile Phone</label>
                            <input type="text" name="mobile" id="mobile" class="form-control" required placeholder="i.e. +14155552671">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Home Phone</label>
                            <input type="text" name="home_phone" id="home_phone" class="form-control" required placeholder="i.e. +415 555 2671">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Linkedin</label>
                            <input type="text" name="link_profile" id="link_profile" class="form-control" required placeholder="i.e. http://linkedin.com/John">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Facebook</label>
                            <input type="text" name="facebook" id="facebook" class="form-control" required placeholder="i.e. http://facbook.com/John">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Skype</label>
                            <input type="text" name="skype" id="skype" class="form-control" required placeholder="i.e. John_doe">
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
                            <textarea name="description" id="description" class="form-control textarea-autosize" required></textarea>
                            <i class="form-group__bar"></i>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="mt-5 text-center">
                    <input type="button" class="btn btn-light" id='submit' onclick="check()" value="Save new contact"/>
                    <a href="{{route('contact.create')}}" class="btn btn-light">Clear</a>
                </div>
            </div>
              {!! Form::close() !!}
        </div>
    </div>
    <script>
        function check(){
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
            var contact_pic = document.getElementById('contact_pic');
            var submit = document.getElementById('submit');
            if(contact_pic.value ==''){
                toastr.warning('Contact Picture Required!')
            }else if(first_name_length > 70 ){
               toastr.warning('First Name Not More Than 70 Character!') 
            }
            else if(last_name_length > 70 ){
               toastr.warning('last Name Not More Than 70 Character!') 
            }
            else if(contact_pic.value !='' && first_name_length<70 && last_name_length<70){
                submit.type = 'submit';
            }
        }
    </script>
@endsection