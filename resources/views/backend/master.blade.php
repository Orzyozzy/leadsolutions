<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>AdminLTE 2 | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="{{url('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />    
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <link href="{{url('public/backend/css/AdminLTE.min.css')}}" rel="stylesheet" p`type="text/css" />
    <link href="{{url('public/backend/css/_all-skins.min.css')}}" rel="stylesheet" type="text/css" />  
    <script src="{{url('public/backend/js/jquery-1.11.0.min.js')}}"></script>
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="{{url('admin')}}" class="logo"><b>Admin</b>LTE</a>
        
        <!-- Header Navbar: style can be found in header.less -->
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Alexander Pierce</p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
         
          
       
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Posts</span>
             </a>
              <ul class="treeview-menu">
              <li><a href="{{url('all-posts')}}"><i class="fa fa-circle-o"></i> All Posts</a></li>
              <li><a href="{{url('new-post')}}"><i class="fa fa-circle-o"></i> Add New</a></li>
             </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Services</span>
             </a>
              <ul class="treeview-menu">
              <li><a href="{{url('all-services')}}"><i class="fa fa-circle-o"></i> All Services</a></li>
              <li><a href="{{url('new-service')}}"><i class="fa fa-circle-o"></i> Add New</a></li>
             </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Products</span>
             </a>
              <ul class="treeview-menu">
              <li><a href="{{url('all-buttons')}}"><i class="fa fa-circle-o"></i> All Buttons</a></li>
              <li><a href="{{url('all-product')}}"><i class="fa fa-circle-o"></i> All Products</a></li>
              <li><a href="{{url('new-product')}}"><i class="fa fa-circle-o"></i> Add New</a></li>
              <li><a href="{{url('button-link')}}"><i class="fa fa-circle-o"></i> Button Links</a></li>
              <li><a href="{{url('prodcats')}}"><i class="fa fa-circle-o"></i> Categories</a></li>

            </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Team</span>
             </a>
              <ul class="treeview-menu">
              <li><a href="{{url('all-members')}}"><i class="fa fa-circle-o"></i> All Members</a></li>
              <li><a href="{{url('new-members')}}"><i class="fa fa-circle-o"></i> Add New</a></li>          
            </ul>
            </li>

            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Modals</span>
             </a>
              <ul class="treeview-menu">
                <li><a href="{{url('all-services')}}"><i class="fa fa-circle-o text-info"></i> Modal Categories</a></li>   
            </ul>
            </li>



            <li><a href="{{url('admin/categories')}}"><i class="fa fa-circle-o text-info"></i> Categories</a></li>

            <li><a href="{{url('admin/setup')}}"><i class="fa fa-circle-o text-info"></i> Website Settings</a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
            @yield('content')
        <!-- /.content-wrapper -->
      </div>
        <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.0
      </div>
      <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->
    

    
    <script src="{{url('public/frontend/js/bootstrap.min.js')}}" type="text/javascript"></script>   
    <script src="{{url('public/backend/js/app.min.js')}}" type="text/javascript"></script>
  </body>
</html>