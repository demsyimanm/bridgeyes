<style type="text/css">
  .skin-blue .main-header .navbar{
    background-color: #1A2226;
  }

  .skin-blue .main-header .logo{
    background-color: #1A2226;
  }

  .skin-blue .main-header .logo:hover{
    background-color: #0d1113;
  }

  .skin-blue .main-header .navbar .sidebar-toggle:hover{
    background-color: #0d1113;
  }

  .skin-blue .main-header li.user-header{
    background-color: #0d1113;
  }


</style>
<header class="main-header">
        <!-- Logo -->
        <a href="{{URL::to('admin/login')}}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>YES</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>BRIDGE</b> Yes</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span><i class="fa fa-angle-down"></i></span><img src="{{ URL::to('assets/AdminLTE/dist/img/user4-128x128.jpg')}}" class="user-image" alt="User Image">
                  <span class="hidden-xs"></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="{{ URL::to('assets/AdminLTE/dist/img/user4-128x128.jpg')}}" class="img-circle" alt="User Image">
                    <p>

                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="{{ URL::to('admin/logout')}}" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
           
            <li class="treeview">
              <a href="{{ URL::to('admin/login')}}">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>

             <li class="treeview">
              <a href="{{ URL::to('admin/users')}}">
                <i class="fa fa-user"></i> <span>Users</span>
              </a>
            </li>
             
            <li class="treeview">
              <a href="{{ URL::to('admin/news')}}">
                <i class="fa fa-newspaper-o"></i> <span>News</span>
              </a>
            </li>

            <li class="treeview">
              <a href="{{ URL::to('admin/article')}}">
                <i class="fa fa-book"></i> <span>Article</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL::to('admin/artikel/1')}}"><i class="fa fa-circle-o"></i> Bidding</a></li>
                <li><a href="{{ URL::to('admin/artikel/2')}}"><i class="fa fa-circle-o"></i> Convention</a></li>
                <li><a href="{{ URL::to('admin/artikel/3')}}"><i class="fa fa-circle-o"></i> Event</a></li>
                <li><a href="{{ URL::to('admin/artikel/4')}}"><i class="fa fa-circle-o"></i> Play</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="{{ URL::to('admin/event')}}">
                <i class="fa fa-trophy"></i> <span>Tournament</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL::to('admin/event')}}"><i class="fa fa-circle-o"></i> Schedule</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Result</a></li>
              </ul>
            </li>

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>