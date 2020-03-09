<aside class="sidebar sidebar--hidden">
    <div class="scrollbar-inner">
        @if(Auth::user())
            <div class="user">
                <div class="user__info" data-toggle="dropdown">
                    <img class="user__img" src="{{url('/aegis_files/employee_image/'.Auth::user()->employee_pic)}}" alt="">
                    <div>
                        <div class="user__name">{{Auth::user()->first_name}} {{Auth::user()->last_name}}</div>
                        <div class="user__email">{{Auth::user()->email}}</div>
                    </div>
                </div>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route('employee.show',Auth::user()->first_name.'_'.Auth::user()->last_name.'_'.Auth::user()->id)}}" target="_blank">View Profile</a>
                    {!! Form::open(['route'=>'logout','method'=>'POST','id'=>'logout-form']) !!}
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    {!! Form::close() !!}
                </div>
            </div>
        @else
            <?php return redirect('/') ?>
        @endif
        <ul class="navigation">
            <li class="@yield('home')"><a href="{{url('/')}}"><i class="zmdi zmdi-home"></i> Home</a></li>
            @if(Gate::check('all_project') || Gate::check('add_project'))
                <li class="navigation__sub @yield('project')">
                    <a href=""><i class="zmdi zmdi-widgets"></i> Project Management</a>
                    <ul>
                        @can('all_project',Auth::user())
                            <li class="@yield('all_project')"><a href="{{route('project.index')}}">All Projects</a></li>
                        @endcan
                        @can('add_project',Auth::user())
                            <li class="@yield('new_project')"><a href="{{route('project.create')}}">Add New Project</a></li>
                        @endcan
                    </ul>
                </li>
            @endif
            @if(Gate::check('all_supplier') || Gate::check('create_supplier') || Gate::check('add_category'))
                <li class="navigation__sub @yield('supplier')">
                    <a href=""><i class="zmdi zmdi-widgets"></i> Supplier Management</a>
                    <ul>
                        @can('all_supplier',Auth::user())
                            <li class="@yield('all_supplier')"><a href="{{route('supplier.index')}}">All Supplier</a></li>
                        @endcan
                        @can('create_supplier',Auth::user())
                            <li class="@yield('create_supplier')"><a href="{{route('supplier.create')}}">Add New Supplier</a></li>
                        @endcan
                        @can('add_category',Auth::user())
                            <li class="navigation__sub @yield('supplier_category')"><a href="javascript:void(0)">Supplier Catagory</a>
                                <ul>
                                    <li class="@yield('sub_new_category')"><a href="{{route('supplier_category.index')}}">Add New Category</a></li>
                                </ul>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endif
            @if(Gate::check('all_contact') || Gate::check('add_contact'))
                <li class="navigation__sub @yield('contact')">
                    <a href=""><i class="zmdi zmdi-widgets"></i> Contact Management</a>
                    <ul>
                        @can('all_contact',Auth::user())
                            <li class="@yield('contact_index')"><a href="{{route('contact.index')}}">All Contact</a></li>
                        @endcan
                        @can('add_contact',Auth::user())
                            <li class="@yield('contact_create')"><a href="{{route('contact.create')}}">Add Contact</a></li>
                        @endcan
                    </ul>
                </li>
            @endif
            @if(Gate::check('all_employee') || Gate::check('add_employee'))
                <li class="navigation__sub @yield('employee')">
                    <a href=""><i class="zmdi zmdi-widgets"></i> Employee Management</a>
                    <ul>
                        @can('all_employee',Auth::user())
                            <li class="@yield('employee_index')"><a href="{{route('employee.index')}}">All Employee</a></li>
                        @endcan
                        @can('add_employee',Auth::user())
                            <li class="@yield('employee_create')"><a href="{{route('employee.create')}}">Add Employee</a></li>
                        @endcan
                    </ul>
                </li>
            @endif
            @if(Gate::check('manage_roll') || Gate::check('add_roll'))
                <li class="navigation__sub @yield('role')">
                    <a href=""><i class="zmdi zmdi-settings"></i> Settings</a>
                    <ul>
                        <li class="navigation__sub @yield('role_management')"><a href="javascript:void(0)">Role Management</a>
                            <ul>
                                @can('manage_roll',Auth::user())
                                    <li class="@yield('role_index')"><a href="{{route('role.index')}}">Manage Role</a></li>
                                @endcan
                                @can('add_roll',Auth::user())
                                    <li class="@yield('role_create')"><a href="{{route('role.create')}}">Add Role</a></li>
                                @endcan
                            </ul>
                        </li>
                    </ul>
                </li>
            @endif
            @can('super_admin_index',Auth::user())
                <li class="@yield('super_admin')"><a href="{{route('super_user.index')}}"><i class="zmdi zmdi-shield-security"></i>Super Admin</a></li>
            @endcan
            @can('security_management_index',Auth::user())
                <li class="@yield('security_management')"><a href="{{route('security_management.index')}}"><i class="zmdi zmdi-shield-security"></i> Security</a></li>
            @endcan
        </ul>
    </div>
    <div class="nav_support">
            <a href="http://ftit.co.uk/" target="_blank">
                <span class="top-word">Support</span> <span class="bottom-word">Future Track <span>I</span>T</span>
            </a>
        </div>
</aside>
