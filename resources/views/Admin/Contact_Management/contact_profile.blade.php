@extends('Admin.thirdmaster')
@section('status')
    {{$information->first_name}} | {{$information->last_name}}
    @endsection
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
                                <input type="text" class="form-control" id="first_name" required name="first_name" value="">
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
    <div class="content__inner content__inner--sm" id="card_profile">
        <div class="card profile">
            <div class="profile__img">
                <img src="{{url('aegis_files/contact_image/'.$information->contact_pic)}}" alt="">
                @can('contact_edit',Auth::user())
                <a href="" class="zmdi zmdi-camera profile__img__edit img_upload"></a>
                @endcan
                {!! Form::open(['method'=>'post','id'=>'formData','enctype'=>'multipart/form-data']) !!}
                <input type="file" accept='image/*' class="pic-upload contact_pic" id="contact_pic" name="contact_pic" hidden="hidden">
                <input type="text" name="id" value="{{$information->id}}" hidden="hidden"/>
                {!! Form::close() !!}
            </div>
            <div class="profile__info">
                <h3>{{$information->first_name}} {{$information->last_name}}</h3>
                <p>{{$information->job_title}}</p>
                <!--, {{$information->address_area_division}}-->
                <ul class="icon-list">
                    <li><i class="zmdi zmdi-phone"></i>{{$information->mobile}}</li>
                    <li><i class="zmdi zmdi-email"></i>{{$information->email_address}}</li>
                    <li><i class="zmdi zmdi-skype"></i>{{$information->skype}}</li>
                </ul>
            </div>
                @can('contact_edit',Auth::user())
            <a class="profile-edit text-uppercase data_edit" data-edit="{{$information->id}}" data-toggle="modal" data-target="#profile-edit">
                    <span class="badge badge-light">
                    <span class="zmdi zmdi-edit"></span>
                    </span>
            </a>
                    @endcan
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-body__title mb-4">About {{$information->first_name}} {{$information->last_name}}</h4>
                <p>{{$information->description}}</p>
                <br>
                <h4 class="card-body__title mb-4">Contact Information</h4>
                <ul class="icon-list">
                    <li><i class="zmdi zmdi-phone"></i>{{$information->home_phone}}</li>
                    <li><i class="zmdi zmdi-email"></i>{{$information->email_address}}</li>
                    <li><i class="zmdi zmdi-link"></i><a href="{{$information->website}}" target="_blank">{{$information->website}}</a></li>
                    <li><i class="zmdi zmdi-facebook"></i><a href="{{$information->facebook}}" target="_blank">{{$information->facebook}}</a></li>
                    <li><i class="zmdi zmdi-linkedin"></i><a href="{{$information->link_profile}}" target="_blank">{{$information->link_profile}}</a></li>
                    <li><i class="zmdi zmdi-pin"></i>{{$information->address_location}}, {{$information->address_area_division}}</li>
                    <li><i class="zmdi zmdi-pin"></i>{{$information->address_two}}</li>
                </ul>
            </div>
        </div>
    </div>
<script>
        $(document).on('click','.data_edit',function(){
            var edit = $(this).data('edit');
            $.get('/contact/edit/' + edit,function(data){
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
            })
        });
        $(document).on('change','.contact_pic',function(){

            var myForm = document.getElementById('formData');
            var formData = new FormData(myForm);
            $.ajax({
                url: "/contact/update",
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
                        $('#card_profile').load(location.href+ ' #card_profile');
                        toastr.success('Information Update Successfully!');
                    }
                })  
                }
            });
</script>
@endsection