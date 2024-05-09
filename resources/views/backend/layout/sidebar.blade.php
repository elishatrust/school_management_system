<aside id="minileftbar" class="minileftbar">
    <ul class="menu_list">
        <li>
            <a href="javascript:" class="bars"></a>
            <a class="navbar-brand" href="{{ url('dashboard') }}"><img src="{{ asset('assets/images/logo.svg') }}" alt="Alpino"></a>
        </li>
        <li><a href="javascript:" class="btn_overlay hidden-sm-down"><i class="zmdi zmdi-search"></i></a></li>
        <li><a href="javascript:" class="menu-sm"><i class="zmdi zmdi-swap"></i></a></li>
        <li class="menuapp-btn"><a href="javascript:"><i class="zmdi zmdi-apps"></i></a></li>
        <li class="notifications badgebit">
            <a href="javascript:">
                <i class="zmdi zmdi-notifications"></i>
                <div class="notify">
                    <span class="heartbit"></span>
                    <span class="point"></span>
                </div>
            </a>
        </li>
        <li class="task badgebit">
            <a href="javascript:">
                <i class="zmdi zmdi-flag"></i>
                <div class="notify">
                    <span class="heartbit"></span>
                    <span class="point"></span>
                </div>
            </a>
        </li>
        <li><a href="events.html" title="Events"><i class="zmdi zmdi-calendar"></i></a></li>
        <li><a href="mail-inbox.html" title="Inbox"><i class="zmdi zmdi-email"></i></a></li>
        <li><a href="contact.html" title="Contact List"><i class="zmdi zmdi-account-box-phone"></i></a></li>
        <li><a href="chat.html"><i class="zmdi zmdi-comments"></i></a></li>
        <li><a href="javascript:" class="fullscreen" data-provide="fullscreen"><i class="zmdi zmdi-fullscreen"></i></a></li>
        <li class="power">
            <a href="javascript:" title="Settings" class="js-right-sidebar"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a>
            <a href="{{ url('logout') }}" title="Logout" class="mega-menu"><i class="zmdi zmdi-power"></i></a>
        </li>
    </ul>
</aside>

<aside class="right_menu">
    <div class="menu-app">
        <div class="slim_scroll">
            <div class="card">
                <div class="header">
                    <h2><strong>App</strong> Menu</h2>
                </div>
                <div class="body">
                    <ul class="list-unstyled menu">
                        <li><a href="events.html"><i class="zmdi zmdi-calendar-note"></i><span>Calendar</span></a></li>
                        <li><a href="file-dashboard.html"><i class="zmdi zmdi-file-text"></i><span>File Manager</span></a></li>
                        <li><a href="blog-dashboard.html"><i class="zmdi zmdi-blogger"></i><span>Blog</span></a></li>
                        <li><a href="javascript:"><i class="zmdi zmdi-arrows"></i><span>Notes</span></a></li>
                        <li><a href="javascript:"><i class="zmdi zmdi-view-column"></i><span>Taskboard</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="notif-menu">
        <div class="slim_scroll">
            <div class="card">
                <div class="header">
                    <h2><strong>Messages</strong></h2>
                </div>
                <div class="body">
                    <ul class="messages list-unstyled">
                        <li>
                            <a href="javascript:">
                                <div class="media">
                                    <img class="media-object rounded-circle" src="{{ asset('assets/avatar.jpg') }}" alt="">
                                    <div class="media-body">
                                        <span class="name">Alexander <small class="time">35min ago</small></span>
                                        <p class="message">New tasks needs to be done</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:">
                                <div class="media">
                                    <img class="media-object rounded-circle" src="{{ asset('assets/avatar.jpg') }}" alt="">
                                    <div class="media-body">
                                        <span class="name">Grayson <small class="time">1hr ago</small></span>
                                        <p class="message">New tasks needs to be done</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:">
                                <div class="media">
                                    <img class="media-object rounded-circle" src="{{ asset('assets/avatar.jpg') }}" alt="">
                                    <div class="media-body">
                                        <span class="name">Sophia <small class="time">31min ago</small></span>
                                        <p class="message">New tasks needs to be done</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card">
                <div class="header">
                    <h2><strong>Notifications</strong></h2>
                </div>
                <div class="body">
                    <ul class="notification list-unstyled">
                        <li>
                            <i class="zmdi zmdi-balance-wallet text-success"></i>
                            <strong>+$30 New sale</strong>
                            <p><a href="javascript:">Admin Template</a></p>
                            <small class="text-muted">7 min ago</small>
                        </li>
                        <li>
                            <i class="zmdi zmdi-edit text-info"></i>
                            <strong>You Edited file</strong>
                            <p><a href="javascript:">Docs.doc</a></p>
                            <small class="text-muted">15 min ago</small>
                        </li>
                        <li>
                            <i class="zmdi zmdi-delete text-danger"></i>
                            <strong>Project removed</strong>
                            <p><a href="javascript:">AdminX BS4</a></p>
                            <small class="text-muted">1 hours ago</small>
                        </li>
                        <li>
                            <i class="zmdi zmdi-account text-success"></i>
                            <strong>New user</strong>
                            <p><a href="javascript:">UI Designer</a></p>
                            <small class="text-muted">1 hours ago</small>
                        </li>
                        <li>
                            <i class="zmdi zmdi-flag text-warning"></i>
                            <strong>Alpino v1.0.0 is available</strong>
                            <p><a href="javascript:">Update now</a></p>
                            <small class="text-muted">5 hours ago</small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="task-menu">
        <div class="slim_scroll">
            <div class="card tasks">
                <div class="header">
                    <h2><strong>Project</strong> Status</h2>
                </div>
                <div class="body m-b-10">
                    <a href="javascript:">
                        <span class="text-muted">Project Name 1 <span class="float-right">29%</span></span>
                        <div class="progress">
                            <div class="progress-bar l-turquoise" role="progressbar" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100" style="width: 29%;"></div>
                        </div>
                        <ul class="list-unstyled team-info">
                            <li class="m-r-15"><small class="text-muted">Team</small></li>
                            <li><img src="{{ asset('assets/avatar.jpg') }}" alt="Avatar"></li>
                            <li><img src="{{ asset('assets/avatar.jpg') }}" alt="Avatar"></li>
                            <li><img src="{{ asset('assets/avatar.jpg') }}" alt="Avatar"></li>
                        </ul>
                    </a>
                </div>
                <div class="body m-b-10">
                    <a href="javascript:">
                        <span class="text-muted">Project Name 2 <span class="float-right">78%</span></span>
                        <div class="progress">
                            <div class="progress-bar l-slategray" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
                        </div>
                        <ul class="list-unstyled team-info">
                            <li class="m-r-15"><small class="text-muted">Team</small></li>
                            <li><img src="{{ asset('assets/avatar.jpg') }}" alt="Avatar"></li>
                            <li><img src="{{ asset('assets/avatar.jpg') }}" alt="Avatar"></li>
                        </ul>
                    </a>
                </div>
                <div class="body">
                    <a href="javascript:">
                        <span class="text-muted">Project Name 4 <span class="float-right">68%</span></span>
                        <div class="progress">
                            <div class="progress-bar l-coral" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                        </div>
                        <ul class="list-unstyled team-info">
                            <li class="m-r-15"><small class="text-muted">Team</small></li>
                            <li><img src="{{ asset('assets/avatar.jpg') }}" alt="Avatar"></li>
                            <li><img src="{{ asset('assets/avatar.jpg') }}" alt="Avatar"></li>
                        </ul>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#setting">Setting</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#activity">Activity</a></li>
        </ul>
        <div class="tab-content slim_scroll">
            <div class="tab-pane slideRight active" id="setting">
                <div class="card">
                    <div class="header">
                        <h2><strong>Colors</strong> Skins</h2>
                    </div>
                    <div class="body">
                        <ul class="choose-skin list-unstyled m-b-0">
                            <li data-theme="black" class="active">
                                <div class="black"></div>
                            </li>
                            <li data-theme="purple">
                                <div class="purple"></div>
                            </li>
                            <li data-theme="blue">
                                <div class="blue"></div>
                            </li>
                            <li data-theme="cyan">
                                <div class="cyan"></div>
                            </li>
                            <li data-theme="green">
                                <div class="green"></div>
                            </li>
                            <li data-theme="orange">
                                <div class="orange"></div>
                            </li>
                            <li data-theme="blush">
                                <div class="blush"></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2><strong>General</strong> Settings</h2>
                    </div>
                    <div class="body">
                        <ul class="setting-list list-unstyled m-b-0">
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox1" type="checkbox">
                                    <label for="checkbox1">Report Panel Usage</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox2" type="checkbox" checked="">
                                    <label for="checkbox2">Email Redirect</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox3" type="checkbox">
                                    <label for="checkbox3">Notifications</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox4" type="checkbox">
                                    <label for="checkbox4">Auto Updates</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox5" type="checkbox" checked="">
                                    <label for="checkbox5">Offline</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox m-b-0">
                                    <input id="checkbox6" type="checkbox">
                                    <label for="checkbox6">Location Permission</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2><strong>Left</strong> Menu</h2>
                    </div>
                    <div class="body theme-light-dark">
                        <button class="t-dark btn btn-primary btn-round btn-block">Dark</button>
                    </div>
                </div>
            </div>
            <div class="tab-pane slideLeft" id="activity">
                <div class="card activities">
                    <div class="header">
                        <h2><strong>Recent</strong> Activity Feed</h2>
                    </div>
                    <div class="body">
                        <div class="streamline b-accent">
                            <div class="sl-item">
                                <div class="sl-content">
                                    <div class="text-muted">Just now</div>
                                    <p>Finished task <a href="#" class="text-info">#features 4</a>.</p>
                                </div>
                            </div>
                            <div class="sl-item b-info">
                                <div class="sl-content">
                                    <div class="text-muted">10:30</div>
                                    <p><a href="#">@Jessi</a> retwit your post</p>
                                </div>
                            </div>
                            <div class="sl-item b-primary">
                                <div class="sl-content">
                                    <div class="text-muted">12:30</div>
                                    <p>Call to customer <a href="#" class="text-info">Jacob</a> and discuss the detail.</p>
                                </div>
                            </div>
                            <div class="sl-item b-warning">
                                <div class="sl-content">
                                    <div class="text-muted">1 days ago</div>
                                    <p><a href="#" class="text-info">Jessi</a> commented your post.</p>
                                </div>
                            </div>
                            <div class="sl-item b-primary">
                                <div class="sl-content">
                                    <div class="text-muted">2 days ago</div>
                                    <p>Call to customer <a href="#" class="text-info">Jacob</a> and discuss the detail.</p>
                                </div>
                            </div>
                            <div class="sl-item b-primary">
                                <div class="sl-content">
                                    <div class="text-muted">3 days ago</div>
                                    <p>Call to customer <a href="#" class="text-info">Jacob</a> and discuss the detail.</p>
                                </div>
                            </div>
                            <div class="sl-item b-warning">
                                <div class="sl-content">
                                    <div class="text-muted">4 Week ago</div>
                                    <p><a href="#" class="text-info">Jessi</a> commented your post.</p>
                                </div>
                            </div>
                            <div class="sl-item b-warning">
                                <div class="sl-content">
                                    <div class="text-muted">5 days ago</div>
                                    <p><a href="#" class="text-info">Jessi</a> commented your post.</p>
                                </div>
                            </div>
                            <div class="sl-item b-primary">
                                <div class="sl-content">
                                    <div class="text-muted">5 Week ago</div>
                                    <p>Call to customer <a href="#" class="text-info">Jacob</a> and discuss the detail.</p>
                                </div>
                            </div>
                            <div class="sl-item b-primary">
                                <div class="sl-content">
                                    <div class="text-muted">3 Week ago</div>
                                    <p>Call to customer <a href="#" class="text-info">Jacob</a> and discuss the detail.</p>
                                </div>
                            </div>
                            <div class="sl-item b-warning">
                                <div class="sl-content">
                                    <div class="text-muted">1 Month ago</div>
                                    <p><a href="#" class="text-info">Jessi</a> commented your post.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="leftsidebar" class="sidebar">
        <div class="menu">
            <ul class="list">
                <li>
                    <div class="user-info m-b-20">
                        <div class="image">
                            <a href="{{ url('user/profile')}}"><img src="{{ asset('assets/avatar.jpg') }}" alt="User"></a>
                        </div>
                        <div class="detail">
                            <h6>{{ Str::ucfirst(Auth::user()->lname).', '.Str::ucfirst(Auth::user()->fname) }}</h6>
                            <p class="m-b-0">{{ Auth::user()->email }}</p>
                            <a href="javascript:" title="" class=" waves-effect waves-block">
                                @if (Auth::user()->role==1) System Admin
                                @elseif(Auth::user()->role==2)Teacher
                                @elseif(Auth::user()->role==3)Student
                                @elseif(Auth::user()->role==4)Parent
                                @endif
                            </a>
                        </div>
                    </div>
                </li>
                <li class=" @if (Request::segment(1) == 'dashboard' ) active @endif  open">
                    <a href="{{ url('/dashboard') }}">
                        <i class="zmdi zmdi-home"></i><span>Dashboard</span>
                    </a>
                </li>
                <li class=" @if (Request::segment(2) == 'admin' ) active @endif  open">
                    <a href="{{ url('admin/admin/list') }}">
                        <i class="zmdi zmdi-apps"></i><span>Admin</span>
                    </a>
                </li>
                <li class=" @if (Request::segment(2) == 'student' ) active @endif  open">
                    <a href="{{ url('admin/student/list') }}">
                        <i class="zmdi zmdi-accounts-alt"></i><span>Student</span>
                    </a>
                </li>
                <li class=" @if (Request::segment(2) == 'class' ) active @endif  open">
                    <a href="{{ url('admin/class/list') }}">
                        <i class="zmdi zmdi-layers"></i><span>Class</span>
                    </a>
                </li>
                <li class=" @if (Request::segment(2) == 'subject' ) active @endif  open">
                    <a href="{{ url('admin/subject/list') }}">
                        <i class="zmdi zmdi-library"></i><span>Subject</span>
                    </a>
                </li>
                <li class=" @if (Request::segment(2) == 'class_subject' ) active @endif  open">
                    <a href="{{ url('admin/class_subject/list') }}">
                        <i class="zmdi zmdi-swap-alt"></i><span>Assign Subject</span>
                    </a>
                </li>
                <li class=" @if (Request::segment(2) == 'teacher' ) active @endif  open">
                    <a href="{{ url('admin/teacher/list') }}">
                        <i class="zmdi zmdi-accounts-alt"></i><span>Teacher</span>
                    </a>
                </li>
                <li class=" @if (Request::segment(2) == 'parent' ) active @endif  open">
                    <a href="{{ url('admin/parent/list') }}">
                        <i class="zmdi zmdi-accounts-alt"></i><span>Parent</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</aside>
