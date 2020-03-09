<header class="header">
    <div class="navigation-trigger hidden-xl-up" data-sa-action="aside-open" data-sa-target=".sidebar">
        <i class="zmdi zmdi-menu"></i>
    </div>
    <div class="logo hidden-sm-down">
        <h1><a href="{{url('/')}}"><span>Aegis</span> International</a></h1>
    </div>
    <ul class="top-nav">
        <li class="dropdown hidden-xs-down">
            <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="" class="dropdown-item" data-sa-action="fullscreen">Fullscreen</a>
                <a href="{{route('security_management.index')}}" class="dropdown-item">Security</a>
            </div>
        </li>
        <li class="hidden-xs-down">
            <a href="" class="top-nav__themes" data-sa-action="aside-open" data-sa-target=".themes"><i class="zmdi zmdi-palette"></i></a>
        </li>
    </ul>
    <div class="clock hidden-md-down">
        <div class="time">
            <span class="time__hours"></span>
            <span class="time__min"></span>
            <span class="time__sec"></span>
        </div>
    </div>
</header>
