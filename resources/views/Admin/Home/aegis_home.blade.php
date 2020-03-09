@extends('Admin.master')
@section('home','navigation__active')
@section('mycontent')
    <div class="row quick-stats sm-none">
        <div class="col-3 pr-5px">
            <div class="quick-stats__item">
                <div class="quick-stats__info">
                    <h2>987,459</h2>
                    <small>Total Files / Projects</small>
                </div>
                <div class="quick-stats__chart peity-bar">6,4,8,6,5,6,7,8,3,5,9</div>
            </div>
        </div>
        <div class="col-3 pl-0">
            <div class="quick-stats__item">
                <div class="quick-stats__info">
                    <h2>214</h2>
                    <small>Total Suppliers / Providers</small>
                </div>
                <div class="quick-stats__chart peity-bar">5,6,3,9,7,5,4,6,5,6,4</div>
            </div>
        </div>
        <div class="col-3 pl-0 pr-5px">
            <div class="quick-stats__item">
                <div class="quick-stats__info">
                    <h2>58,778</h2>
                    <small>Total Contacts</small>
                </div>
                <div class="quick-stats__chart peity-bar">9,4,6,5,6,4,5,7,9,3,6</div>
            </div>
        </div>
        <div class="col-3 pl-0">
            <div class="quick-stats__item">
                <div class="quick-stats__info">
                    <h2>214</h2>
                    <small>Total Employee</small>
                </div>
                <div class="quick-stats__chart peity-bar">5,6,3,9,7,5,4,6,5,6,4</div>
            </div>
        </div>
    </div>
    <div data-columns>

        <div class="card widget-calendar">
            <div class="actions">
                <a href="calendar.html" class="actions__item zmdi zmdi-plus"></a>
            </div>

            <div class="widget-calendar__header">
                <div class="widget-calendar__year"></div>
                <div class="widget-calendar__day"></div>
            </div>

            <div class="widget-calendar__body"></div>
        </div>
        <div class="card">
            <div class="card-body todo-pad">
                <div class="lobilist-demo"></div>
            </div>
        </div>
        <div class="card">
            <div class="row m-0">
                <div class="col-12 profile-header">
                    <h5>New Registered User</h5>
                    <span class="badge badge-success">24 new users</span>
                </div>
                <div class="registerd-users">
                    <div class="col-6 col-sm-4 col-md-6 col-lg-3 contact-cards">
                        <div class="profile-container">
                            <a href="javascript:void(0)">
                                <div class="profile-img">
                                    <img src="img/demo.png" alt="">
                                </div>
                                <h6>John Doe</h6>
                                <span>john_doe_201856@mail.com</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-6 col-lg-3 contact-cards">
                        <div class="profile-container">
                            <a href="javascript:void(0)">
                                <div class="profile-img">
                                    <img src="img/avatar.jpg" alt="">
                                </div>
                                <h6>John Doe</h6>
                                <span>john_doe_201856@mail.com</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-6 col-lg-3 contact-cards">
                        <div class="profile-container">
                            <a href="javascript:void(0)">
                                <div class="profile-img">
                                    <img src="img/demo.png" alt="">
                                </div>
                                <h6>John Doe</h6>
                                <span>john_doe_201856@mail.com</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-6 col-lg-3 contact-cards">
                        <div class="profile-container">
                            <a href="javascript:void(0)">
                                <div class="profile-img">
                                    <img src="img/avatar.jpg" alt="">
                                </div>
                                <h6>John Doe</h6>
                                <span>john_doe_201856@mail.com</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-6 col-lg-3 contact-cards">
                        <div class="profile-container">
                            <a href="javascript:void(0)">
                                <div class="profile-img">
                                    <img src="img/demo.png" alt="">
                                </div>
                                <h6>John Doe</h6>
                                <span>john_doe_201856@mail.com</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-6 col-lg-3 contact-cards">
                        <div class="profile-container">
                            <a href="javascript:void(0)">
                                <div class="profile-img">
                                    <img src="img/avatar.jpg" alt="">
                                </div>
                                <h6>John Doe</h6>
                                <span>john_doe_201856@mail.com</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-6 col-lg-3 contact-cards">
                        <div class="profile-container">
                            <a href="javascript:void(0)">
                                <div class="profile-img">
                                    <img src="img/demo.png" alt="">
                                </div>
                                <h6>John Doe</h6>
                                <span>john_doe_201856@mail.com</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-6 col-lg-3 contact-cards">
                        <div class="profile-container">
                            <a href="javascript:void(0)">
                                <div class="profile-img">
                                    <img src="img/avatar.jpg" alt="">
                                </div>
                                <h6>John Doe</h6>
                                <span>john_doe_201856@mail.com</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 p-0">
                    <a href="javascript:void(0)" class="all-btn">View All</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body p-0">
                <div class="messages__body">
                    <div class="messages__header text-uppercase">
                        <div class="toolbar toolbar--inner mb-0 p-10 position-relative">
                            <div class="toolbar__label">Recent Activities</div>

                            <span class="badge badge-success new-message">4 new activity</span>

                            <div class="toolbar__search">
                                <input type="text" placeholder="Search...">
                                <i class="toolbar__search__close zmdi zmdi-long-arrow-left" data-sa-action="toolbar-search-close"></i>
                            </div>
                        </div>
                    </div>

                    <div class="messages__content">
                        <div class="scrollbar-inner">
                            <div class="activity_item">
                                <ul>
                                    <li>
                                        <img src="demo/img/profile-pics/1.jpg" class="avatar-img" alt="">
                                    </li>
                                    <li>
                                        <div class="user-name">John Doe</div>
                                        <div class="user-ip">192.168.188.123</div>
                                    </li>
                                    <li>
                                        <div class="activity-time">28/12/18 8:45 PM</div>
                                        <div class="user-activity" data-toggle="tooltip" data-placement="top" title="Removed John Megnus Felia Doe From Contact">Removed John Megnus Felia Doe From Contact </div>
                                    </li>
                                </ul>

                            </div>
                            <div class="activity_item">
                                <ul>
                                    <li>
                                        <img src="demo/img/profile-pics/1.jpg" class="avatar-img" alt="">
                                    </li>
                                    <li>
                                        <div class="user-name">John Doe</div>
                                        <div class="user-ip">192.168.188.123</div>
                                    </li>
                                    <li>
                                        <div class="activity-time">28/12/18 8:45 PM</div>
                                        <div class="user-activity" data-toggle="tooltip" data-placement="top" title="Removed John Megnus Felia Doe From Contact">Removed John Megnus Felia Doe From Contact </div>
                                    </li>
                                </ul>

                            </div>

                            <div class="activity_item">
                                <ul>
                                    <li>
                                        <img src="demo/img/profile-pics/1.jpg" class="avatar-img" alt="">
                                    </li>
                                    <li>
                                        <div class="user-name">John Doe</div>
                                        <div class="user-ip">192.168.188.123</div>
                                    </li>
                                    <li>
                                        <div class="activity-time">28/12/18 8:45 PM</div>
                                        <div class="user-activity" data-toggle="tooltip" data-placement="top" title="Removed John Megnus Felia Doe From Contact">Removed John Megnus Felia Doe From Contact </div>
                                    </li>
                                </ul>

                            </div>
                            <div class="activity_item">
                                <ul>
                                    <li>
                                        <img src="demo/img/profile-pics/1.jpg" class="avatar-img" alt="">
                                    </li>
                                    <li>
                                        <div class="user-name">John Doe</div>
                                        <div class="user-ip">192.168.188.123</div>
                                    </li>
                                    <li>
                                        <div class="activity-time">28/12/18 8:45 PM</div>
                                        <div class="user-activity" data-toggle="tooltip" data-placement="top" title="Removed John Megnus Felia Doe From Contact">Removed John Megnus Felia Doe From Contact </div>
                                    </li>
                                </ul>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection