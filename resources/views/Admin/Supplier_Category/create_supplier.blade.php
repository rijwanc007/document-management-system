@extends('Admin.thirdmaster')
@section('status','Create | Supplier')
@section('supplier','navigation__sub--active navigation__sub--toggled')
@section('create_supplier','navigation__active')
@section('mycontent')
    {!! Form::open(['route'=>'supplier.store','method'=>'post','enctype'=>'multipart/form-data']) !!}
    <div class="row">
        <div class="col-lg-12">
            <h4 class="text-center text-uppercase mb-3">Add New Supplier</h4>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        Supplier Information
                    </h4>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Supplier Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="supplier_name" required>
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Upload Logo</label>
                                <div class="up-wrapper">
                                    <input type="text" readonly="readonly" class="logo-up-name" id="supplier_logo_name" oninput="supplierLogo()">
                                    <input type="file" hidden="hidden" class="logo-up" id="supplier_logo" name="supplier_logo">
                                    <span class="browse-btn">Upload</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="5" placeholder="Short Description" name="supplier_description"></textarea>
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" placeholder="Phone" name="supplier_phone">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Email" name="supplier_email">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Social Address</label>
                                <input type="text" class="form-control" placeholder="Social Address" name="supplier_social_address">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Web Address</label>
                                <input type="text" class="form-control" placeholder="https://www.webpage.com" name="supplier_web_address">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" placeholder="Address" name="supplier_address">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Select Supplier Category</label>
                                <div class="dropdown-new sm-width pull-right mr-1-half">
                                    <div class="select">
                                        <span>Select</span>
                                        <i class="zmdi zmdi-chevron-left"></i>
                                    </div>
                                    <input type="hidden" id="supplier_category" name="supplier_category"/>
                                    <input type="hidden" id="supplier_id" name="supplier_id"/>
                                    <input type="hidden" id="category_id" name="category_id"/>
                                    @if(!empty($categories))
                                        <ul class="dropdown-menu-new pro-category">
                                            @foreach($categories as $category)
                                                <li class="category_name" data-id="{{$category->id}}" data-category="{{$category->title}}">{{$category->title}}</li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>File Number</label>
                                <input type="text" class="form-control" placeholder="File Number" name="supplier_file_number">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                        <div class="contact-info-mul col-12">
                            <div class="row contact-1">
                                <div class="col-sm-12 mb-3">
                                    <h4 class="card-title">
                                        Contact Information
                                    </h4>
                                    <div class="con-add-remove-btn"><a href="javascript:void(0)" class="btn btn-dark new-contact-add">Add New Contact</a></div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Person Name</label>
                                        <input type="text" class="form-control" placeholder="Person Name" name="person_name[]">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Person Designation</label>
                                        <input type="text" class="form-control" placeholder="Designation" name="designation[]">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" class="form-control" placeholder="Phone" name="phone[]">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" placeholder="Email" name="email[]">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Social Address</label>
                                        <input type="text" class="form-control" placeholder="Social Address" name="social_address[]">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" placeholder="Address" name="address[]">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-dark btn-submit">Add New Supplier</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
    <script>
        function supplierLogo(){
            document.getElementById('supplier_logo').value = document.getElementById('supplier_logo_name').value;
        }
        $(document).on('click','.category_name',function(){
            var id = $(this).data('id');
            var category = $(this).data('category');
            var category_id = $(this).data('id');
            document.getElementById('supplier_category').value = category;
            document.getElementById('category_id').value = category_id;
            document.getElementById('supplier_id').value = id;
        })
    </script>
    @endsection