<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AgendOL</title>
  <!-- Tell the browser to be responsive to screen width -->
 <!-- Bootstrap 3.3.7 -->
 <!--  <link rel="stylesheet" href="{{ asset ('/bower_components/bootstrap/dist/css/bootstrap.min.css') }}"> -->
 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset ('/bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset ('/bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset ('/dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins-->
  <link rel="stylesheet" href="{{ asset ('/dist/css/skins/_all-skins.min.css') }} ">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset ('/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">

  

  <!-- daterange picker -->
  <link rel="stylesheet" href="{{ asset ('/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">

<!-- jvectormap -->
  <link rel="stylesheet" href="{{ asset ('/bower_components/jvectormap/jquery-jvectormap.css') }}">
  
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  

  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset ('/dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href=" {{ asset ('dist/css/skins/_all-skins.min.css') }}">

  <link href="{{ captcha_layout_stylesheet_url() }}" type="text/css" rel="stylesheet">

  <!-- Morris charts -->
  <link rel="stylesheet" href="{{ asset ('/bower_components/morris.js/morris.css') }}">


  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

            <style>

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 2px;
            }


            .title {
                font-size: 84px;
            }



            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }


        </style>
        <style>
            a.ex1:hover, a.ex1:active {color: red;}
            a.ex2:hover, a.ex2:active {font-size: 150%;}
            a.ex3:hover, a.ex3:active {background: red;}
            a.ex4:hover, a.ex4:active {font-family: monospace;}
            a.ex5:visited, a.ex5:link {text-decoration: none;}
            a.ex5:hover, a.ex5:active {text-decoration: underline;}
        </style>


</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
  
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>oL</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="{{ asset ('/dist/img/agol1.png') }}" style="width: 50px;" class="user-image" alt="User Image"> Agenda<b>OL</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
  
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li> <a href="{{ URL::to ('/profilku') }}"><i class="fa fa-user-o" aria-hidden="true"></i> Profil</a></li>
            <!-- <li> <a href="#"><i class="fa fa-cogs" aria-hidden="true"></i> Setting</a></li>
            <li> <a href="#"><i class="fa fa-bell-o" aria-hidden="true"></i> Informasi</a></li>
            <li role="separator" class="divider"></li> -->
            <li> 
                 <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="fa fa-sign-out" aria-hidden="true"></i>
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
              </li>
          </ul>
        </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>


    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->


  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="public/dist/img/{{ Auth::user()->foto}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"></li> 
        <li><a href="{{ route('dash.index') }}"><i class="fa fa-dashboard" aria-hidden="true"></i> <span>Dashboard</span></a></li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-pencil-square-o"></i> <span>Catat Surat</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

         
          <ul class="treeview-menu">
            <li><a href="{{ route('cin.index') }}"><i class="fa fa-share" aria-hidden="true"></i> Surat Masuk</a></li>
            <li><a href="{{ route('cout.index') }}"><i class="fa fa-reply" aria-hidden="true"></i> Surat Keluar</a></li>
          </ul>
        </li>

        <li><a href="{{ route('jdwl.index') }}"><i class="fa fa-calendar" aria-hidden="true"></i> <span>Jadwal Rapat</span></a></li>
        <!-- <li><a href="{{ route('jpers.index') }}"><i class="fa fa-user-o" aria-hidden="true"></i> <span>Jadwal Personil</span></a></li> -->
        <li><a href="{{ route('ukerja.index') }}"><i class="fa fa-user-o" aria-hidden="true"></i> <span>Unit Kerja</span></a></li>
        
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cogs"></i> <span>Pengaturan User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
       

         
          <ul class="treeview-menu">
            <li><a href="{{ route('profil.index') }}"><i class="fa fa-user" aria-hidden="true"></i> List User</a></li>
            <li><a href="{{ URL::to('/register') }}"><i class="fa fa-plus" aria-hidden="true"></i> Tambah User</a></li>
            <li><a href=""><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus User</a></li>
          </ul>
        </li>

       
        <li class="header"></li> 

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      @yield('content')

  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Theme supported by <a href="">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- bootstrap time picker -->
<script src=" {{ asset('/plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>

<!-- jQuery 3 -->
<!-- <script src=" {{ asset('/bower_components/jquery/dist/jquery.min.js') }}"></script> -->
<!-- <script src="public/bower_components/jquery/dist/jquery.min.js"></script> -->
<script
        src="https://code.jquery.com/jquery-3.2.1.js"
        integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
        crossorigin="anonymous"></script>

<!-- Bootstrap 3.3.7 -->
<!-- <script src="public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script> -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-confirmation/1.0.5/bootstrap-confirmation.min.js"></script>

<!-- Slimscroll -->
<script src=" {{ asset('/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src=" {{ asset('/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src=" {{ asset('/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src=" {{ asset('/dist/js/demo.js') }}"></script>
<!-- DataTables -->
<script src=" {{ asset('/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src=" {{ asset('/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<!-- bootstrap datepicker -->
<script src=" {{ asset('/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>

<!-- date-range-picker -->
<script src=" {{ asset('/bower_components/moment/min/moment.min.js') }}"></script>
<script src=" {{ asset('/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- Sparkline -->
<script src=" {{ asset('/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap  -->
<script src=" {{ asset('/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src=" {{ asset('/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- SlimScroll -->
<script src=" {{ asset('/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>

<!-- ChartJS -->
<script src=" {{ asset('/bower_components/Chart.js/Chart.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src=" {{ asset('/dist/js/pages/dashboard2.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src=" {{ asset('/dist/js/demo.js') }}"></script>

<!-- Morris.js charts -->
<script src=" {{ asset('/bower_components/raphael/raphael.min.js') }}"></script>
<script src=" {{ asset('/bower_components/morris.js/morris.min.js') }}"></script>

<!-- <script src="{{ asset ('/js/app.js') }}"></script> -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

<script>
  //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    });
    
  $(function() {
      $( "#tgl_surat" ).datepicker({
        format: 'dd-mm-yy'
      });
    });

   $(function() {
      $( "#tgl_masuk" ).datepicker({
        format: 'dd-mm-yy'
      });
    });

    $(function() {
      $( "#tgl_keluar" ).datepicker({
        format: 'dd-mm-yy'
      });
    });
    
    $(function() {
      $( "#tgl_jadwal" ).datepicker({
        format: 'dd-mm-yy'
      });
    });
     $('#tgl_jadwal1').daterangepicker({ 
        timePicker: true, 
        timePickerIncrement: 30, 
        format: 'MM/DD/YYYY h:mm A' 
      });

     $(function() {
      $( "#tgl_jpersonil" ).datepicker({
        dateFormat: 'dd-mm-yy'
      });
    });


  
</script>

<script type="text/javascript">
    $(document).ready(function () {        
        $('[data-toggle=confirmation]').confirmation({
            rootSelector: '[data-toggle=confirmation]',
            onConfirm: function (event, element) {
                element.closest('form').submit();
            }
        });   
    });
</script>

</body>
</html>
