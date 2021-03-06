<header class="main-header">
<!-- Logo -->
<a href="{{ route('admin.dashboard') }}" class="logo">
  <!-- mini logo for sidebar mini 50x50 pixels -->
  <span class="logo-mini"><b>L</b>ib</span>
  <!-- logo for regular state and mobile devices -->
  <span class="logo-lg"><b>Lib</b>rary</span>
</a>

<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top">  
  <!-- Sidebar toggle button-->
  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
    <span class="sr-only">Toggle navi gation</span>
  </a>
  <!-- Navbar Right Menu -->
  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <!-- Messages: style can be found in dropdown.less-->
     
      <!-- Notifications: style can be found in dropdown.less -->
      <li class="dropdown notifications-menu">
      
      <!-- Tasks: style can be found in dropdown.less -->
     
      <!-- User Account: style can be found in dropdown.less -->
      <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <span class="hidden-xs">{{ auth()->user()->name }}</span>
        </a>
        <ul class="dropdown-menu">        
          <!-- Menu Footer-->
          <li class="user-footer">
          
            <div class="">
              <a href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();" 
                 class="btn btn-block btn-default btn-flat">Sign out</a>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          </li>
        </ul>
      </li>
      <!-- Control Sidebar Toggle Button -->
    </ul>
  </div>
 
</nav>
</header>