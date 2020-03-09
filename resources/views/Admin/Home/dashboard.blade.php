@section('status','Aegis International')
@section('home','navigation__active')
<!DOCTYPE html>
<html lang="en" >
@include('Admin.include.head')
@php
use App\Theme;
$theme_option = Theme::find(1);
$change_theme = $theme_option->themeid;
@endphp
<body data-sa-theme="{{$change_theme}}" onload="todoShow()" >
<main class="main">
    <div class="page-loader">
        <div class="page-loader__spinner">
            <svg viewBox="25 25 50 50">
                <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
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
<div id="main_search_bar">
    @include('Admin.include.sidebar')
    @include('Admin.include.theme_option')
    <section class="content">
        <div class="row quick-stats sm-none">
            <div class="col-3 pr-5px">
                <div class="quick-stats__item">
                    <div class="quick-stats__info">
                        <h2>{{$project_count}}</h2>
                        <small>Total Files / Projects</small>
                    </div>
                    <div class="quick-stats__chart peity-bar">6,4,8,6,5,6,7,8,3,5,9</div>
                </div>
            </div>
            <div class="col-3 pl-0">
                <div class="quick-stats__item">
                    <div class="quick-stats__info">
                        <h2>{{$supplier_count}}</h2>
                        <small>Total Suppliers / Providers</small>
                    </div>
                    <div class="quick-stats__chart peity-bar">5,6,3,9,7,5,4,6,5,6,4</div>
                </div>
            </div>
            <div class="col-3 pl-0 pr-5px">
                <div class="quick-stats__item">
                    <div class="quick-stats__info">
                        <h2>{{$contact_count}}</h2>
                        <small>Total Contacts</small>
                    </div>
                    <div class="quick-stats__chart peity-bar">9,4,6,5,6,4,5,7,9,3,6</div>
                </div>
            </div>
            <div class="col-3 pl-0">
                <div class="quick-stats__item">
                    <div class="quick-stats__info">
                        <h2>{{$employee_count}}</h2>
                        <small>Total Employee</small>
                    </div>
                    <div class="quick-stats__chart peity-bar">5,6,3,9,7,5,4,6,5,6,4</div>
                </div>
            </div>
        </div>
        <div data-columns>
            <div class="card widget-calendar">
                <div class="widget-calendar__header">
                    <div class="widget-calendar__year"></div>
                    <div class="widget-calendar__day"></div>
                </div>
                <div class="widget-calendar__body"></div>
            </div>
            <div class="card">
                <div class="card-body todo-pad" >
                    <div class="lobilist-demo"></div>
                </div>
            </div>
            <div class="card">
                <div class="row m-0">
                    <div class="col-12 profile-header">
                        <h5>Employees</h5>
                    </div>
                    <div class="registerd-users">
                        @foreach($employees_recent as $employee)
                        <div class="col-6 col-sm-4 col-md-6 col-lg-3 contact-cards">
                            <div class="profile-container">
                                <a href="{{route('employee.show',$employee->first_name.'_'.$employee->last_name.'_'.$employee->id)}}" target="_blank">
                                    <div class="profile-img">
                                        <img src="{{url('aegis_files/employee_image/'.$employee->employee_pic)}}" alt="">
                                    </div>
                                    {{$employee->employee_pic}}
                                    <h6>{{$employee->first_name}} {{$employee->last_name}}</h6>
                                    <span>{{$employee->email}}</span>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-12 p-0">
                        <a href="{{route('employee.index')}}" target="_blank" class="all-btn">View All</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body p-0">
                    <div class="messages__body">
                        <div class="messages__header text-uppercase">
                            <div class="toolbar toolbar--inner mb-0 p-10 position-relative">
                                <div class="toolbar__label">Activities</div>
                                <div class="toolbar__search">
                                    <input type="text" placeholder="Search...">
                                    <i class="toolbar__search__close zmdi zmdi-long-arrow-left" data-sa-action="toolbar-search-close"></i>
                                </div>
                            </div>
                        </div>
                        <div class="messages__content">
                            <div class="scrollbar-inner">
                                @foreach($recent_activities as $activity)
                                <div class="activity_item">
                                    <ul>
                                        <li>
                                            <img src="{{url('aegis_files/employee_image/'.$activity->user_pic)}}" class="avatar-img" alt="">
                                        </li>
                                        <li>
                                            <div class="user-name">{{$activity->first_name}} {{$activity->last_name}}</div>
                                            <div class="user-ip">{{$activity->ip_address}}</div>
                                        </li>
                                        <li>
                                            <div class="activity-time">{{date('M.j,Y',strtotime($activity->created_at))}} {{date('h:ia',strtotime($activity->created_at))}}</div>
                                            <div class="user-activity" data-toggle="tooltip" data-placement="top" title="{{$activity->first_name}} Removed {{$activity->deleted_first_name}} {{$activity->deleted_last_name}} From {{$activity->deleted_status}}">{{$activity->first_name}} Removed {{$activity->deleted_first_name}} {{$activity->deleted_last_name}} From {{$activity->deleted_status}}</div>
                                        </li>
                                    </ul>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('Admin.include.footer')
    </section>
</div>
</main>
</body>
</html>
@include('Admin.include.script_bottom_master')
<script>
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
                    controls: ['edit', 'add','removes'],
                }
            ],
        });
    });
    function todoShow(){
        $.ajax({
            url:'/todo_show',
            success:function(data){
                jQuery.each(data,function(index,item){
                    $('.lobilist-body ul').append(
                        '<li data-id="" class="lobilist-item"><div class="lobilist-item-title">'+item.title+'</div>' +
                        '<div class="lobilist-item-description">'+item.description+'</div>' +
                        '<div class="lobilist-item-duedate">'+item.date+'</div>' +
                        '<div class="lobilist-custom-check"><input class="styled-checkbox" type="checkbox"><label></label></div>' +
                        '<div class="todo-actions"><div class="edit-todo todo-action edit_todo" data-edit='+item.slug+'>' +
                        '<i class="zmdi zmdi-edit"></i></div>' +
                        '<div class="delete-todo todo-action todo_delete" data-delete='+item.slug+'>' +
                        '<i class="zmdi zmdi-close"></i></div></div>' +
                        '<div class="drag-handler"></div></li>'
                    )
                })
            }
        });
    }
    $(document).on('click','.add_todo',function(){
        console.log('this is a test');
        var title = $('.title').val();
        var description = $('.description').val();
        var date = $('.date').val();
        var id = $('.id').val();
        if(id == ''){
            $.ajax({
                url:'/todo',
                method:'POST',
                data:{_token:'{!! csrf_token() !!}',title,description,date},
                dataType:'JSON',
                success:function(data){
                    console.log(data);
                   $('.lobilist-body ul').empty();
                   todoShow();
                }
            })
        }
        else if(id !=''){
            $.ajax({
                url:'/todo/update',
                method:'POST',
                data:{_token:'{!! csrf_token() !!}',title,description,date,id},
                dataType:'JSON',
                success:function(data){
                    $('.lobilist-body ul').empty();
                    todoShow();
                }
            })
        }
    });
    $(document).on('click','.edit_todo',function(){
        $('.lobilist-add-todo-form').removeClass('hide');
        $('.title').val($(this).parent().parent().find('.lobilist-item-title').text());
        $('.description').val($(this).parent().parent().find('.lobilist-item-description').text());
        $('.date').val($(this).parent().parent().find('.lobilist-item-duedate').text());
        $('.lobilist-add-todo-form').find('input[name="id"]').val($(this).data('edit'));
    });
    $(document).on('click','.btn-raised',function(){
       $('.lobilist-add-todo-form').addClass('hide');
    });
    $(document).on('click','.todo_delete',function(){
       var todo_delete = $(this).data('delete');
       $.ajax({
           url:'/todo/delete',
           method:'POST',
           data:{_token:'{!! csrf_token() !!}',todo_delete},
           success:function(data){
               $('.lobilist-body ul').empty();
               todoShow();
           }
       })
    });
</script>