<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- CSRF Token -->
        <link rel="stylesheet" href="{{ asset('dist/css/skins/skin-blue.min.css') }}">
        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        @if ( !Auth::user() )
        <link rel="stylesheet" href="{{ asset('css/login.css') }}">
        @else
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        @endif
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <a href="{{ route('home') }}" class="logo">
                    <span class="logo-mini"><b>A</b>LT</span>
                    <span class="logo-lg"><b>Admin</b>LTE</span>
                </a>
                <nav class="navbar navbar-static-top" role="navigation">
                    @if (Auth::User() )
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
                                    <span class="hidden-xs">Alexander Pierce</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="user-header">
                                        <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                                        <p>Alexander Pierce - Web Developer<small>Member since Nov. 2012</small></p>
                                    </li>
                                    <li class="user-body">
                                        <div class="row">
                                            <div class="col-xs-4 text-center"><a href="#">Followers</a></div>
                                            <div class="col-xs-4 text-center"><a href="#">Sales</a></div>
                                            <div class="col-xs-4 text-center"><a href="#">Friends</a></div>
                                        </div>
                                    </li>
                                    <li class="user-footer">
                                        <div class="pull-left"><a href="#" class="btn btn-default btn-flat">Profile</a></div>
                                        <div class="pull-right"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                @else
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">
                            @if ( !Route::is('register') )
                            <a href="{{ route('register') }}">Register</a>
                            @else
                            <a href="{{ route('login') }}">Login</a>
                            @endif
                        </li>
                    </ul>
                </div>
                @endif
            </nav>
        </header>
        @if (Auth::User() )
        <aside class="main-sidebar">
            <section class="sidebar">
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>Alexander Pierce</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!--  <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form> -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MANAGEMENT</li>
                    <li @if (Request::path() =='/' || Request::path() =='home') class="active" @endif><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                    <li @if (Request::is('employees') || Request::is('employees/info/*') ) class="active" @endif><a href="{{ url('employees') }}"><i class="fa fa-users"></i> <span>Employees</span></a></li>
                    <li @if (Request::is('projects') || Request::is('projects/*') ) class="active" @endif><a href="{{ route('projects') }}"><i class="fa fa-folder"></i> <span>Projects</span></a></li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-link"></i> <span>Multilevel</span>
                            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#">Link in level 2</a></li>
                            <li><a href="#">Link in level 2</a></li>
                        </ul>
                    </li>
                </ul>
            </section>
        </aside>
        @endif
        <div @if (Auth::User() ) class="content-wrapper" @endif>
            @yield('content')
        </div>
        @if (Auth::User() )
        <footer class="main-footer">
            <div class="pull-right hidden-xs">Anything you want</div>
            <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
        </footer>
        @endif
        <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
        <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
        <script>
        $(function () {
            $('#dataTable').DataTable(
            {
                "columnDefs": [
                    { "searchable": false, "targets": 5 }
                ]
                }
            )
        });
        (function theSameAddress() {
            let result = document.getElementById('sameAddress');
            result.addEventListener('click', function() {

                let present_no = document.getElementsByName('present_address_no')[0].value,
                    present_brgy = document.getElementsByName('present_address_barangay')[0].value,
                    present_st = document.getElementsByName('present_address_street')[0].value,
                    present_city = document.getElementsByName('present_address_city')[0].value,
                    present_country = document.getElementsByName('present_address_country')[0].value,
                    present_zipcode = document.getElementsByName('present_address_zipcode')[0].value,

                    permanent_no = document.getElementsByName('permanent_address_no')[0],
                    permanent_st = document.getElementsByName('permanent_address_street')[0],
                    permanent_brgy = document.getElementsByName('permanent_address_barangay')[0],
                    permanent_city = document.getElementsByName('permanent_address_city')[0],
                    permanent_country = document.getElementsByName('permanent_address_country')[0],
                    permanent_zipcode = document.getElementsByName('permanent_address_zipcode')[0];

                if (result.checked == true) {
                    permanent_no.value = present_no;
                    permanent_st.value = present_st;
                    permanent_brgy.value = present_brgy;
                    permanent_city.value = present_city;
                    permanent_country.value = present_country;
                    permanent_zipcode.value = present_zipcode;
                } else {
                    permanent_no.value = '';
                    permanent_st.value =  '';
                    permanent_brgy.value =  '';
                    permanent_city.value =  '';
                    permanent_country.value =  '';
                    permanent_zipcode.value =  '';
                }
            })
        })()
        </script>
    </body>
</html>