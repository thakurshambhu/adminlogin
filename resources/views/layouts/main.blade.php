<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <title>Admin | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="{{asset('admin_lte/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
     
        <link href="{{asset('admin_lte/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.4/css/jquery.dataTables.min.css">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Ionicons -->
        <link href="{{asset('admin_lte/css/ionicons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="{{asset('admin_lte/css/morris/morris.css')}}" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="{{asset('admin_lte/css/jvectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        
        <link href="{{asset('admin_lte/css/fullcalendar/fullcalendar.css')}}" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="{{asset('admin_lte/css/daterangepicker/daterangepicker-bs3.css')}}" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="{{asset('admin_lte/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="{{asset('admin_lte/css/AdminLTE.css')}}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
          <style>
          .help-inline{
            color: red;

              font-size:17px;
          }
          </style>
    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="{{url('/')}}" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Admin
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="<?php echo asset('admin_lte/img/avatar3.png')?>" class="img-circle" alt="User Image"/>
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li><!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="{{asset('admin_lte/img/avatar2.png')}}" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="{{asset('admin_lte/img/avatar.png')}}" class="img-circle" alt="user image"/>
                                                </div>
                                            
                                                <h4>
                                                    Developers
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="{{asset('admin_lte/img/avatar2.png')}}" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="{{asset('admin_lte/img/avatar.png')}}" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-warning"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-people info"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning danger"></i> Very long description here that may not fit into the page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users warning"></i> 5 new members joined
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-cart success"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-person danger"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-tasks"></i>
                                <span class="label label-danger">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 9 tasks</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Design some buttons
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Create a nice theme
                                                    <small class="pull-right">40%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">40% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Some task I need to do
                                                    <small class="pull-right">60%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Make beautiful transitions
                                                    <small class="pull-right">80%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">80% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                    
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>
                                                {{ Auth::guard('admin')->user()->email}}
  <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="{{asset('admin-profile-images/'.Auth::guard('admin')->user()->profile_pic)}}" class="img-circle" alt="User Image" />
                                    <p>
                                   {{ Auth::guard('admin')->user()->name  }} - Web Developer
                                        <small>Member since {{Auth::guard('admin')->user()->created_at}}</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="{{url('/admin/profile/'.Auth::guard('admin')->user()->id)}}" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                    <a title="" href="{{url('admin/logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Sign Out</a>
                                      <form id="logout-form" action="{{url('/admin/logout')}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
      @include('layouts.navbar')
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
              
              

            
                   @yield('content')
               

                </aside><!-- /.right-side -->
        </div>
        
            </div>
           
        </div>
 
                

        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

        <script type="text/javascript">
    $(document).ready(function () {
        $('#example1').dataTable();
    });
</script>
        <!-- Bootstrap -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script>
  @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
        
        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
  @endif
</script>
        <script src="{{asset('js/Adminformvalidation.js')}}"></script>
        <script src="{{asset('admin_lte/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <!-- Morris.js charts -->
        
        <script src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
        <!-- <script src="{{asset('admin_lte/js/plugins/datatables/jquery.dataTables.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin_lte/js/plugins/datatables/dataTables.bootstrap.js')}}" type="text/javascript"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.1/raphael-min.js"></script>
        <script src="{{asset('admin_lte/js/plugins/morris/morris.min.js')}}" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="{{asset('admin_lte/js/plugins/sparkline/jquery.sparkline.min.js')}}" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="{{asset('admin_lte/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin_lte/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="{{asset('admin_lte/js/plugins/fullcalendar/fullcalendar.min.js')}}" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="{{asset('admin_lte/js/plugins/jqueryKnob/jquery.knob.js')}}" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="{{asset('admin_lte/js/plugins/daterangepicker/daterangepicker.js')}}" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="{{asset('admin_lte/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="{{asset('admin_lte/js/plugins/iCheck/icheck.min.js')}}" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="{{asset('admin_lte/js/AdminLTE/app.js')}}" type="text/javascript"></script>
        
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="{{asset('admin_lte/js/AdminLTE/dashboard.js')}}" type="text/javascript"></script>        

       



</body>
</html>