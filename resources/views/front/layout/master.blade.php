<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>{{ $data->page_title }}</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <!-- Bootstrap 3.3.7 -->
      <link rel="stylesheet" href="{{ URL::asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="{{ URL::asset('admin/bower_components/font-awesome/css/font-awesome.min.css') }}">
      <!-- Ionicons -->
      <link rel="stylesheet" href="{{ URL::asset('admin/bower_components/Ionicons/css/ionicons.min.css') }}">
      <!-- Theme style -->
      <link rel="stylesheet" href="{{ URL::asset('admin/dist/css/AdminLTE.min.css') }}">
      <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
      <link rel="stylesheet" href="{{ URL::asset('admin/dist/css/skins/_all-skins.min.css') }}">
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.#4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Google Font -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

      <meta name="description" content="{{ $data->meta_description }}">
      <meta name="keywords" content="{{ $data->meta_keywords }}">

   </head>
   <body class="hold-transition skin-blue sidebar-mini">
      <div class="wrapper">
      
         
         
         <!-- Left side column. contains the logo and sidebar -->
         <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
              
            <!-- /.sidebar -->
 
            @yield('topics')

         </aside>

         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">

            @yield('subjects')

            
            <!-- Main content -->
            <section class="content">
               @yield('content')
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
         <footer class="main-footer">
            <div class="pull-right hidden-xs">
               <b>Version</b> 1.0
            </div>
            <strong>Copyright &copy; {{ date('Y') }} All rights reserved.
         </footer>
         <!-- Control Sidebar -->
         
         <!-- /.control-sidebar -->
         <!-- Add the sidebar's background. This div must be placed
            immediately after the control sidebar -->
         <div class="control-sidebar-bg"></div>
      </div>
      <!-- ./wrapper -->
      <!-- jQuery 3 -->
      <script src="{{ URL::asset('admin/bower_components/jquery/dist/jquery.min.js') }}"></script>
      <!-- Bootstrap 3.3.7 -->
      <script src="{{ URL::asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
      <!-- FastClick -->
      <script src="{{ URL::asset('admin/bower_components/fastclick/lib/fastclick.js') }}"></script>
      <!-- AdminLTE App -->
      <script src="{{ URL::asset('admin/dist/js/adminlte.min.js') }}"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="{{ URL::asset('admin/dist/js/demo.js') }}"></script>

      @yield('pagejs')

   </body>
</html>

