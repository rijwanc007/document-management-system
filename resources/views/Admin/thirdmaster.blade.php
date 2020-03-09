@include('Admin.include.head')
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
            <section class="content">
                @if(Session::has('success'))
                    <div class="alert alert-custom alert-dismissible fade show" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                         {{Session::get('success')}}
                    </div>
                 @endif
                @yield('mycontent')
                @include('Admin.include.footer')
            </section>
        </main>
  @include('Admin.include.script_bottom_master')
        
    </body>
</html>

