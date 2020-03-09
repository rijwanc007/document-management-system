0 @include('Admin.include.head')
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

            @include('Admin.include.header')
            @include('Admin.include.sidebar')
           @include('Admin.include.theme_option')

  
<!-- Compose message Modal Start  -->
<div class="modal fade" id="modal-compose" data-backdrop="static" tabindex="-1">
    <div class="modal-dialog modal-lg-cus">
        <div class="modal-content modal-cus-bg">
            <div class="modal-header">
                <h5 class="modal-title pull-left text-uppercase">Compose Message</h5>
                <div class="ccbcc">
                    <span class="cc" onclick="cc(this)">Cc</span>
                    <span class="bcc" onclick="bcc(this)">Bcc</span>
                </div>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="To">
                    <i class="form-group__bar"></i>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control cc-text" placeholder="Cc">
                    <i class="form-group__bar"></i>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control bcc-text" placeholder="Bcc">
                    <i class="form-group__bar"></i>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Subject">
                    <i class="form-group__bar"></i>
                </div>
                <div class="wysiwyg-editor"></div>

                <div class="uploaded-demo">
                    <span>fileName ( 500 KB )</span>
                    <span class="remove-file"><i class="fa fa-times"></i></span>
                </div>
                <div class="uploaded-demo">
                    <span>fileName ( 500 KB )</span>
                    <span class="remove-file"><i class="fa fa-times"></i></span>
                </div>
                <div class="uploaded-demo">
                    <span>fileName ( 500 KB )</span>
                    <span class="remove-file"><i class="fa fa-times"></i></span>
                </div>

                <buttun class="btn btn-light upload-attachment">Upload Attachment</buttun>
              </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-link">Send Message</button>
                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Compose message Modal Start End  -->
<!-- Corporate Mail Modal Start  -->
<div class="modal fade" id="corp-mail" data-backdrop="static" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title pull-left text-uppercase">Create Employee Mail</h5>
            </div>
            <div class="modal-body">
                
               
                <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Select Employee</label>

                                        <select class="select2">
                                            <option>Subaru</option>
                                            <option>Mitsubishi</option>
                                            <option>Scion</option>
                                            <option>Daihatsu</option>
                                            <option>Hino</option>
                                            <option>Subaru</option>
                                            <option>Mitsubishi</option>
                                            <option>Scion</option>
                                            <option>Daihatsu</option>
                                            <option>Hino</option>
                                            <option>Subaru</option>
                                            <option>Mitsubishi</option>
                                            <option>Scion</option>
                                            <option>Daihatsu</option>
                                            <option>Hino</option>
                                            <option>Subaru</option>
                                            <option>Mitsubishi</option>
                                            <option>Scion</option>
                                            <option>Daihatsu</option>
                                            <option>Hino</option>
                                            <option>Subaru</option>
                                            <option>Mitsubishi</option>
                                            <option>Scion</option>
                                            <option>Daihatsu</option>
                                            <option>Hino</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Corporate Mail</label>
                                        <input type="text" class="form-control" placeholder="i.e. JohnDoe20@agis.com">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>New Password</label>
                                        <input type="text" class="form-control" placeholder="Enter Your New Password">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Re-type New Password</label>
                                        <input type="text" class="form-control" placeholder="Re-type Your New Password">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                            </div>


            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-link">Create Mail</button>
                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Corporate Mail Modal End  -->
            <section class="content">

                
                @yield('mycontent')
                @include('Admin.include.footer')
            </section>
        </main>

        <!-- Older IE warning message -->
            <!--[if IE]>
                <div class="ie-warning">
                    <h1>Warning!!</h1>
                    <p>You are using an outdated version of Internet Explorer, please upgrade to any of the following web browsers to access this website.</p>

                    <div class="ie-warning__downloads">
                        <a href="http://www.google.com/chrome">
                            <img src="img/browsers/chrome.png" alt="">
                        </a>

                        <a href="https://www.mozilla.org/en-US/firefox/new">
                            <img src="img/browsers/firefox.png" alt="">
                        </a>

                        <a href="http://www.opera.com">
                            <img src="img/browsers/opera.png" alt="">
                        </a>

                        <a href="https://support.apple.com/downloads/safari">
                            <img src="img/browsers/safari.png" alt="">
                        </a>

                        <a href="https://www.microsoft.com/en-us/windows/microsoft-edge">
                            <img src="img/browsers/edge.png" alt="">
                        </a>

                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="img/browsers/ie.png" alt="">
                        </a>
                    </div>
                    <p>Sorry for the inconvenience!</p>
                </div>
            <![endif]-->

        <!-- Javascript -->
        <!-- Vendors -->
        <script src="{{asset('aegis_files/myasset/vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/vendors/bower_components/popper.js/dist/umd/popper.min.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js')}}"></script>

        <script src="{{asset('aegis_files/myasset/vendors/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/vendors/bower_components/moment/min/moment.min.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/vendors/bower_components/salvattore/dist/salvattore.min.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/vendors/bower_components/flot/jquery.flot.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/vendors/bower_components/flot/jquery.flot.resize.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/vendors/bower_components/flot.curvedlines/curvedLines.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/vendors/bower_components/peity/jquery.peity.min.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/vendors/bower_components/fullcalendar/dist/fullcalendar.min.js')}}"></script>

        <script src="{{asset('aegis_files/myasset/vendors/bower_components/trumbowyg/dist/trumbowyg.min.js')}}"></script>
        <!-- Charts and maps-->
        <script src="{{asset('aegis_files/myasset/demo/js/flot-charts/chart-tooltips.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/demo/js/other-charts.js')}}"></script>

         <!-- Vendors: Data tables -->
        <script src="{{asset('aegis_files/myasset/vendors/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/vendors/bower_components/jszip/dist/jszip.min.js')}}"></script>

        <!-- App functions and actions -->
        <script src="{{asset('aegis_files/myasset/js/lobilist.min.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/js/mail.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/js/simplebar.js')}}"></script>
        <script src="{{asset('aegis_files/myasset/js/app.min.js')}}"></script>
        <script>
            // Lobilist Todo list
$(function(){
                      $('.lobilist-demo').lobiList({
                          sortable: false,
                          useCheckboxes: true,
                            enableTodoAdd: false,
                            enableTodoRemove: true,
                            enableTodoEdit: true,




                  lists: [
                      {
                          title: 'TODO',
                          defaultStyle: 'lobilist-info',
                          controls: ['edit', 'add'],
                 
                      }
                  ]
                      });
                  });
        </script>
        

        
        
    </body>
</html>