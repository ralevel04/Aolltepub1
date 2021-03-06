<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Aplikasi Agenda Online</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset ('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset ('bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset ('bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset ('dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins-->
  <link rel="stylesheet" href="{{ asset ('dist/css/skins/_all-skins.min.css') }} ">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset ('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
<!-- jvectormap -->
  <link rel="stylesheet" href="{{ asset ('bower_components/jvectormap/jquery-jvectormap.css') }}">
  
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  

  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset ('dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href=" {{ asset ('dist/css/skins/_all-skins.min.css') }}">

  <link href="{{ captcha_layout_stylesheet_url() }}" type="text/css" rel="stylesheet">

  <!-- Morris charts -->
  <link rel="stylesheet" href="{{ asset ('bower_components/morris.js/morris.css') }}">


  <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

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


    <style>
        .dropbtn {
            background-color: #357ca5;
            color: white;
            padding: 16px;
            font-size: 14px;
            border: none;
            cursor: pointer;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 100px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 7px 7px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
                            background-color: #357ca5;
                            text-decoration-color: #ffffff;
                            text-decoration-style: bold;

                          }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #1E90FF;
            

        }

        .lsn:hover {
            background-color: #000;
            text-decoration-color: #1E90FF;
           
        }
        </style>
      


</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header" >
    <!-- Logo -->
  
    <a href="{{ URL::to('hometown') }}" class="logo ex2">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>oL</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="{{ asset ('dist/img/agol1.png') }}" style="width: 50px;" class="user-image" alt="User Image"> Agend<b>OL</b></span>
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
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">2</span>
            </a>


            <ul class="dropdown-menu">
              <li class="header">You have 2 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="{{ asset ('dist/img/user3-128x128.jpg') }}" class="img-circle" alt="User Image">
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
                        <img src="../../dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
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

          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li> <a href="{{ URL::to ('/profilku')}}"><i class="fa fa-user-o" aria-hidden="true" data-toogle="modal" data-target="myModal"></i> Profil</a></li>
            <li> <a href="#"><i class="fa fa-bell-o" aria-hidden="true"></i> Informasi</a></li>
            <li role="separator" class="divider"></li>
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


        </ul>
      </div>


    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->


  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->

      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
   @if (Auth::user()->role=='admin')
        <li class="header">MAIN NAVIGATION</li> 
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
        <li><a href="{{ route('jpers.index') }}"><i class="fa fa-user-o" aria-hidden="true"></i> <span>Jadwal Personil</span></a></li>
        <li><a href="{{ route('ukerja.index') }}"><i class="fa fa-institution" aria-hidden="true"></i> <span>Unit Kerja</span></a></li>
        
        <li><a href="{{ route('profil.index') }}"><i class="fa fa-cogs" aria-hidden="true"></i> Pengaturan User</a></li>
    
    @else

        <li class="header">MAIN NAVIGATION</li> 
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
        <li><a href="{{ route('jpers.index') }}"><i class="fa fa-user-o" aria-hidden="true"></i> <span>Jadwal Personil</span></a></li>
    @endif
        
      <li class="header"></li> 
      </br>
        <li><center><img src=" {{ asset ('dist/img/lsnkecil.png') }}" alt="User Image" style="width: 100px; height: 70px"></center></li>
        <li><a href="" ><span><h4 class="lsn"><center>LEMBAGA SANDI NEGARA </center></h4></span></a></li>
        <li>
          <div>
            <a href=""><center>Jl. Harsono RM No. 70, Ragunan, </br> Pasar Minggu, Jakarta Selatan </br>12550 </br> Telp. 021 7805814, Fax. 021 78844104</center></a>
          </div>
        </li>
        

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
    <strong>Theme supported by <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ asset('/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ asset('/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('/dist/js/demo.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<!-- bootstrap datepicker -->
<script src="{{ asset('/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap  -->
<script src="{{ asset('/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>

<!-- ChartJS -->
<script src="{{ asset('/bower_components/Chart.js/Chart.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('/dist/js/pages/dashboard2.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('/dist/js/demo.js') }}"></script>

<!-- Morris.js charts -->
<script src="{{ asset('/bower_components/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('/bower_components/morris.js/morris.min.js') }}"></script>

<script src="{{ asset ('/js/app.js') }}"></script>


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
  $(function() {
      $( "#tgl_surat" ).datepicker({
        dateFormat: 'dd-mm-yy'
      });
    });

   $(function() {
      $( "#tgl_keluar" ).datepicker({
        dateFormat: 'dd-mm-yy'
      });
    });

   $(function() {
      $( "#tgl_masuk" ).datepicker({
        dateFormat: 'dd-mm-yy'
      });
    });

    $(function() {
      $( "#tgl_buat" ).datepicker({
        dateFormat: 'dd-mm-yy'
      });
    });

     $(function() {
      $( "#tgl_jadwal" ).datepicker({
        dateFormat: 'dd-mm-yy'
      });
    });
  
</script>

</body>
</html>
