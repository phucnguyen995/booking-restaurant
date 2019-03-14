<?php
if (Auth::check()){
  if(Auth::user()->user_level == 0)
  {
    return redirect('index');
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>@yield('title')</title>
    <base href="{{asset('')}}">
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <!-- 
    Visual Admin Template
    http://www.templatemo.com/preview/templatemo_455_visual_admin
    -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/templatemo-style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/uniform.css') }}" />
    

    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>  
  @section('menu')
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
          <h1>Visual Admin</h1>
        </header>    
        <!-- Search box -->
        <form action="{{url('food-admin/admin-search')}}" class="templatemo-search-form" method="get">
          <div class="input-group">
              <input type="text" class="form-control" placeholder="Search" name="keySearch" id="srch-term">
              <button type="submit" class="fa fa-search"></button>           
          </div>
        </form>
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
          </div>
        <nav class="templatemo-left-nav">          
          <ul>
             <li><a href="{{ asset('food-admin/index-admin') }}" class="active"><i class="fa fa-home fa-fw"></i>Dashboard</a></li>
            <li><a href="{{ asset('food-admin/manage-foods') }}"><img style="background: white;" src="images/icons/686885_icons_outlined_04_512_VVM_icon.ico" alt=""><i class="fa fa-cookie"></i>Manage Foods</a></li>
            <li><a href="{{ asset('food-admin/manage-categories') }}"><i class="fa fa-align-justify fa-fw"></i>Manage Category</a></li>
            <li><a href="{{ asset('food-admin/manage-booking') }}"><i class="fa fa-phone-square fa-fw"></i>Manage Booking</a></li>
            <li><a href="{{ asset('food-admin/manage-users') }}"><i class="fa fa-users fa-fw"></i>Manage Users</a></li>
            <li><a href="{{ asset('food-admin/manage-bills') }}"><i class="fa fa-dollar fa-fw"></i>Manage Bills</a></li>
            <li><a href="{{ asset('food-admin/manage-comment') }}"><i class="fa fa-comment fa-fw"></i>Manage Comments</a></li>


          </ul>  
        </nav>
      </div>
      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                <li><a href="" class="active">Admin panel</a></li>
                <li><a href="">Dashboard</a></li>
            
                @if (Auth::guest())
                  <li><a href="{{ url('/auth/login')}}"><i class="fa fa-sign-in"></i>Login</a></li>
                  <li><a href="{{ url('/auth/register')}}">Register</a></li>
                @else
                  <li ><a href="#">{{ Auth::user()->name }} </a></li>
                  <li><a href="{{ url('/auth/logout')}}"><i class="fa fa-sign-out"></i>Logout </a></li>
                @endif
              </ul>  
            </nav> 
          </div>
        </div>
        <style type="text/css">
          .olala {
            margin-left: 60px; 
            margin-top: 30px;
          }
        </style>
        <div class="olala">
          <b><h1>@yield('title')</h1></b>
    
        </div>
        @show
        @yield('content')         
          <footer class="text-right">
            <p>Copyright &copy; 2084 Company Name 
            | Designed by <a href="http://www.templatemo.com" target="_parent">templatemo</a></p>
          </footer>         
        </div>
      </div>
    </div>
    
    <!-- JS -->
    <script type="text/javascript" src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>      <!-- jQuery -->
    <script type="text/javascript" src="{{ asset('js/templatemo-script.js') }}"></script>      <!-- Templatemo Script -->
  </body>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{ asset('js/jquery-2.1.4.min.js')}}"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('js/bootstrap.min.js')}}"></script>
</html>

