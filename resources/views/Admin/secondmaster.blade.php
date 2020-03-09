@include('Admin.include.secondhead')
@php
use App\Theme;
$theme_option = Theme::find(1);
$change_theme = $theme_option->themeid;
@endphp
<body data-sa-theme="{{$change_theme}}">
        <main class="main">
            <div class="page-loader">
                <div class="page-loader__spinner">
                    <svg viewBox="25 25 50 50">
                        <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                    </svg>
                </div>
            </div>
            @include('Admin.include.header_second')
            @include('Admin.include.second_sidebar')
            @include('Admin.include.theme_option')
           <section class="content content--full">
               @if(Session::has('warning'))
                    <div class="alert alert-custom alert-dismissible fade show" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                         {{Session::get('warning')}}
                    </div>
                 @endif
                @yield('mycontent')
                @include('Admin.include.footer')
            </section>
        </main>
<!-- Manage File Modal Start  -->
<div class="modal fade" id="manage-file" data-backdrop="static">
    <div class="modal-dialog modal-lg-cus">
        <div class="modal-content modal-cus-bg">
            <div class="modal-header">
                <h5 class="modal-title pull-left text-uppercase">Manage Project/File</h5>
            </div>
            <div class="modal-body">
                <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Project Name</label>
                                        <input type="text" class="form-control" value="INTERIOR DESIGN">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Procuring Entity</label>
                                        <input type="text" class="form-control" value="JBL">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>EPC</label>
                                        <input type="text" class="form-control" value="4TK">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Funding</label>
                                        <input type="text" class="form-control" value="EBL">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <div class="dropdown-new sm-width pull-right mr-1-half">
                                            <div class="select">
                                               <span>Starting</span>
                                               <i class="zmdi zmdi-chevron-left"></i>
                                            </div>
                                            <input type="hidden" name="sort">
                                            <ul class="dropdown-menu-new call-sort">
                                               <li>Starting</li>
                                               <li>Running</li>
                                               <li>Cancle</li>
                                               <li>Completed</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Select Project Category</label>
                                        <div class="dropdown-new sm-width pull-right mr-1-half">
                                            <div class="select">
                                               <span>Select</span>
                                               <i class="zmdi zmdi-chevron-left"></i>
                                            </div>
                                            <input type="hidden" name="sort">
                                            <ul class="dropdown-menu-new pro-category">
                                               <li>Forex</li>
                                               <li>Cryptocurrency</li>
                                               <li>Blockchain</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 pro-sub-category">
                                    <div class="form-group">
                                        <label>Select Project Subcategory</label>
                                        <div class="dropdown-new sm-width pull-right mr-1-half">
                                            <div class="select">
                                               <span>Select</span>
                                               <i class="zmdi zmdi-chevron-left"></i>
                                            </div>
                                            <input type="hidden" name="sort">
                                            <ul class="dropdown-menu-new call-sort">
                                               <li>Bitcoin</li>
                                               <li>Charts</li>
                                               <li>Data Mining</li>
                                            </ul>
                                        </div>
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
                                            <input type="hidden" name="sort">
                                            <ul class="dropdown-menu-new call-sort sup-category">
                                               <li>Bank Of Americal</li>
                                               <li>Dutch Bank</li>
                                               <li>People Bank</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 sup-sub-category">
                                    <div class="form-group">
                                        <label>Select Supplier Subcategory</label>
                                        <div class="dropdown-new sm-width pull-right mr-1-half">
                                            <div class="select">
                                               <span>Select</span>
                                               <i class="zmdi zmdi-chevron-left"></i>
                                            </div>
                                            <input type="hidden" name="sort">
                                            <ul class="dropdown-menu-new call-sort">
                                               <li>Bank Of Americal</li>
                                               <li>Dutch Bank</li>
                                               <li>People Bank</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 sup-sub-category">
                                    <div class="form-group">
                                        <label>Select Supplier</label>

                                        <select class="select2" multiple="multiple" data-placeholder="Select Supplier">
                                            <option>Bank Of Americal</option>
                                            <option>Dutch Bank</option>
                                            <option>People Bank</option>
                                            <option>Daihatsu</option>
                                            <option>Hino</option>
                                            <option>Bank Of Americal</option>
                                            <option>Dutch Bank</option>
                                            <option>People Bank</option>
                                            <option>Daihatsu</option>
                                            <option>Hino</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">

                                    <h4 class="list-header">Uploaded Files</h4>
                                    <ul class="upload-file-list">
                                        <li>
                                            <div class="file-name">My File</div>
                                            <a href="javascript:void(0)"><span class="remove-file"><i class="fa fa-times"></i></span></a>
                                        </li>
                                        <li>
                                            <div class="file-name">File Named</div>
                                            <a href="javascript:void(0)"><span class="remove-file"><i class="fa fa-times"></i></span></a>
                                        </li>
                                        <li>
                                            <div class="file-name">Name of File</div>
                                            <a href="javascript:void(0)"><span class="remove-file"><i class="fa fa-times"></i></span></a>
                                        </li>
                                        <li>
                                            <div class="file-name">A File</div>
                                            <a href="javascript:void(0)"><span class="remove-file"><i class="fa fa-times"></i></span></a>
                                        </li>
                                    </ul>
                <button class="btn btn-light upload-attachment mb-3">Upload Attachment</button>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control" rows="5" value="This is a big project"></textarea>
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-link">Update</button>
                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>

        <script src="{{asset('aegis_files/myasset/vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/vendors/bower_components/popper.js/dist/umd/popper.min.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/vendors/bower_components/trumbowyg/dist/trumbowyg.min.js')}}"></script>
         <!-- Vendors: Data tables -->
        <script src="{{asset('aegis_files/myasset/vendors/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/vendors/bower_components/jszip/dist/jszip.min.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/vendors/bower_components/sweetalert2/dist/sweetalert2.min.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/vendors/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <!-- App functions and actions -->
        <script src="{{asset('aegis_files/myasset/js/app.min.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/js/mail.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/js/printThis.js')}}"></script>
        <script>
            toastr.options = {
                "debug": false,
                "positionClass": "toast-bottom-right",
                "onclick": null,
                "fadeIn": 300,
                "fadeOut": 1000,
                "timeOut": 5000,
                "extendedTimeOut": 1000
            };
        </script>
    </body>
</html>