


@extends('layouts.adm')

@section('content')

    <section class="content-header">
      <h1>
        Dashboard
        <small>Aplikasi Agenda Online D221</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <i class="fa fa-comments-o"></i>
              <h3 class="box-title">Rekapitulasi Data Agenda</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-6">
                  <p class="text-center">
                    <strong>Surat Masuk vs Surat Keluar</strong>
                  </p>

                  <div class="chart">
                    <!-- Sales Chart Canvas -->
                    <canvas id="salesChart" style="height: 180px;"></canvas>
                  </div>
                  <!-- /.chart-responsive -->
                </div>
                <!-- /.col -->
              
                <div class="col-md-3">
                  <!-- Info Boxes Style 2 -->
                  <div class="info-box bg-blue">
                    <span class="info-box-icon"><i class="fa fa-envelope-o"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Jml Surat Masuk</span>
                      <span class="info-box-number"><p style="font-size: 30px">{{ $jml_msk }}</p></span>

                    
                    
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                  <div class="info-box bg-red">
                    <span class="info-box-icon"><i class="fa fa-envelope-o"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Jml Surat Keluar</span>
                      <span class="info-box-number"><p style="font-size: 30px">{{ $jml_klr}}</p></span>

                     
                      
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                  </div>

                <div class="col-md-3">

                  <div class="info-box bg-yellow">
                    <span class="info-box-icon"><i class="ion ion-ios-people-outline"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Jml User</span>
                      <span class="info-box-number"><p style="font-size: 30px">{{ $userss }}</p></span>

                      
                     
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                  <div class="info-box bg-green">
                    <span class="info-box-icon"><i class="ion-ios-chatbubble-outline"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Direct Messages</span>
                      <span class="info-box-number"><p style="font-size: 30px">163,921</p></span>

                      
                     
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->

              </div>





                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>

          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12"">
            <div class="panel">
            <div class="panel-heading bg-blue"><i class="fa fa-envelope-o"></i> Surat Masuk Terbaru</div>
            <div class="panel-body">
                <div class=" col-md-12">
                    <table class="table table-hover table-striped ">
                        <thead>
                            <tr>
                                <th ><center>No</center></th>
                                <th ><center>No Agenda</center></th>
                                <th ><center>Tgl Buat</center></th>
                                <th ><center>Asal Surat</center></th>
                                <th ><center>Perihal</center></th>
                                <th ><center>Petugas</center></th>
                            </tr>
                        </thead>
                        <?php $no=1; ?>
                        @foreach($smasuk as $smsk)
                            <tr>
                                <td width="5%"><center>{{ $no++ }}</center></td>
                                <td width="10%"><center>{{ $smsk->no_agenda }}</center></td>
                                <td width="10%"><center>{{ $smsk->tgl_buat }}</center></td>
                                <td width="15%"><center>{{ $smsk->asal_surat }}</center></td>
                                <td width="35%">{{ $smsk->perihal }}</td>
                                <td ><center>{{ $smsk->penerima }}</center></td>

                            </tr>
                        @endforeach
                    </table>

                </div>
            </div>
            <div class="box-footer clearfix">
              <a href="{{route ('cin.index')}}"><center> >>> Lihat Semua Surat Masuk <<< </center></a>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel">
            <div class="panel-heading bg-red"> <i class="fa fa-envelope-o"></i> Surat Keluar Terbaru</div>
            <div class="panel-body">
                <div class=" col-md-12">
                    <table class="table table-hover table-striped ">
                        <thead>
                            <tr>
                                <th ><center>No</center></th>
                                <th ><center>No Agenda</center></th>
                                <th ><center>Tgl Keluar</center></th>
                                <th ><center>Tujuan Surat</center></th>
                                <th ><center>Perihal</center></th>
                                <th ><center>Petugas</center></th>

                            </tr>
                        </thead>
                        <?php $no=1; ?>
                        @foreach($skluar as $sklr)
                            <tr>
                                <td width="5%"><center>{{ $no++ }}</center></td>
                                <td width="10%"><center>{{ $sklr->no_agenda }}</center></td>
                                <td width="10%"><center>{{ $sklr->tgl_keluar }}</center></td>
                                <td width="15%"><center>{{ $sklr->tujuan_surat }}</center></td>
                                <td width="35%">{{ $sklr->perihal }}</td>
                                <td ><center>{{ $sklr->pembuat }}</center></td>

                            </tr>
                        @endforeach
                    </table>

                </div>
            </div>
            <div class="box-footer clearfix">
              <center><a href="{{route ('cout.index')}}"> >>> Lihat Semua Surat Keluar <<< </a></center>
            </div>
        </div>
        </div>
        <div class="col-md-6">
          
        </div>
      </div>

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-12">
          <!-- MAP & BOX PANE -->

          <div class="row">
            <div class="col-md-8">
              <!-- DIRECT CHAT -->
              <div class="box box-warning direct-chat direct-chat-warning">
                <div class="box-header with-border"> <i class="fa fa-comments-o"></i>
                  <h3 class="box-title">Chatting antar User</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <!-- Conversations are loaded here -->
                  <div class="direct-chat-messages">
                    <!-- Message. Default to the left -->
                    <div class="direct-chat-msg">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-left">Alexander Pierce</span>
                        <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                      </div>
                      <!-- /.direct-chat-info -->
                      <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                        Is this template really for free? That's unbelievable!
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->

                    <!-- Message to the right -->
                    <div class="direct-chat-msg right">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-right">Sarah Bullock</span>
                        <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                      </div>
                      <!-- /.direct-chat-info -->
                      <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                        You better believe it!
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->

                    <!-- Message. Default to the left -->
                    <div class="direct-chat-msg">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-left">Alexander Pierce</span>
                        <span class="direct-chat-timestamp pull-right">23 Jan 5:37 pm</span>
                      </div>
                      <!-- /.direct-chat-info -->
                      <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                        Working with AdminLTE on a great new app! Wanna join?
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->

                    <!-- Message to the right -->
                    <div class="direct-chat-msg right">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-right">Sarah Bullock</span>
                        <span class="direct-chat-timestamp pull-left">23 Jan 6:10 pm</span>
                      </div>
                      <!-- /.direct-chat-info -->
                      <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                        I would love to.
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->

                  </div>
                  <!--/.direct-chat-messages-->

                  <!-- Contacts are loaded here -->
                  <div class="direct-chat-contacts">
                    <ul class="contacts-list">
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src="dist/img/user1-128x128.jpg" alt="User Image">

                          <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Count Dracula
                                  <small class="contacts-list-date pull-right">2/28/2015</small>
                                </span>
                            <span class="contacts-list-msg">How have you been? I was...</span>
                          </div>
                          <!-- /.contacts-list-info -->
                        </a>
                      </li>
                      <!-- End Contact Item -->
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src="dist/img/user7-128x128.jpg" alt="User Image">

                          <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Sarah Doe
                                  <small class="contacts-list-date pull-right">2/23/2015</small>
                                </span>
                            <span class="contacts-list-msg">I will be waiting for...</span>
                          </div>
                          <!-- /.contacts-list-info -->
                        </a>
                      </li>
                      <!-- End Contact Item -->
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src="dist/img/user3-128x128.jpg" alt="User Image">

                          <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Nadia Jolie
                                  <small class="contacts-list-date pull-right">2/20/2015</small>
                                </span>
                            <span class="contacts-list-msg">I'll call you back at...</span>
                          </div>
                          <!-- /.contacts-list-info -->
                        </a>
                      </li>
                      <!-- End Contact Item -->
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src="dist/img/user5-128x128.jpg" alt="User Image">

                          <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Nora S. Vans
                                  <small class="contacts-list-date pull-right">2/10/2015</small>
                                </span>
                            <span class="contacts-list-msg">Where is your new...</span>
                          </div>
                          <!-- /.contacts-list-info -->
                        </a>
                      </li>
                      <!-- End Contact Item -->
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src="dist/img/user6-128x128.jpg" alt="User Image">

                          <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  John K.
                                  <small class="contacts-list-date pull-right">1/27/2015</small>
                                </span>
                            <span class="contacts-list-msg">Can I take a look at...</span>
                          </div>
                          <!-- /.contacts-list-info -->
                        </a>
                      </li>
                      <!-- End Contact Item -->
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src="dist/img/user8-128x128.jpg" alt="User Image">

                          <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Kenneth M.
                                  <small class="contacts-list-date pull-right">1/4/2015</small>
                                </span>
                            <span class="contacts-list-msg">Never mind I found...</span>
                          </div>
                          <!-- /.contacts-list-info -->
                        </a>
                      </li>
                      <!-- End Contact Item -->
                    </ul>
                    <!-- /.contatcts-list -->
                  </div>
                  <!-- /.direct-chat-pane -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <form action="#" method="post">
                    <div class="input-group">
                      <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                      <span class="input-group-btn">
                            <button type="button" class="btn btn-warning btn-flat">Send</button>
                          </span>
                    </div>
                  </form>
                </div>
                <!-- /.box-footer-->
              </div>
              <!--/.direct-chat -->
            </div>
            <!-- /.col -->

            <div class="col-md-4">
              <!-- USERS LIST -->
              <div class="box box-danger">
                <div class="box-header with-border"> <i class="fa fa-comments-o"></i>
                  <h3 class="box-title">User Baru</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                    <li>
                      <img src="dist/img/user1-128x128.jpg" alt="User Image">
                      <a class="users-list-name" href="#">Alexander Pierce</a>
                      <span class="users-list-date">Today</span>
                    </li>
                    <li>
                      <img src="dist/img/user8-128x128.jpg" alt="User Image">
                      <a class="users-list-name" href="#">Norman</a>
                      <span class="users-list-date">Yesterday</span>
                    </li>
                    <li>
                      <img src="dist/img/user7-128x128.jpg" alt="User Image">
                      <a class="users-list-name" href="#">Jane</a>
                      <span class="users-list-date">12 Jan</span>
                    </li>
                    <li>
                      <img src="dist/img/user6-128x128.jpg" alt="User Image">
                      <a class="users-list-name" href="#">John</a>
                      <span class="users-list-date">12 Jan</span>
                    </li>
                    <li>
                      <img src="dist/img/user2-160x160.jpg" alt="User Image">
                      <a class="users-list-name" href="#">Alexander</a>
                      <span class="users-list-date">13 Jan</span>
                    </li>
                    <li>
                      <img src="dist/img/user5-128x128.jpg" alt="User Image">
                      <a class="users-list-name" href="#">Sarah</a>
                      <span class="users-list-date">14 Jan</span>
                    </li>
                    <li>
                      <img src="dist/img/user4-128x128.jpg" alt="User Image">
                      <a class="users-list-name" href="#">Nora</a>
                      <span class="users-list-date">15 Jan</span>
                    </li>
                    <li>
                      <img src="dist/img/user3-128x128.jpg" alt="User Image">
                      <a class="users-list-name" href="#">Nadia</a>
                      <span class="users-list-date">15 Jan</span>
                    </li>
                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="javascript:void(0)" class="uppercase">View All Users</a>
                </div>
                <!-- /.box-footer -->
              </div>
              <!--/.box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

        </div>
        <!-- /.col -->


    </section>
    <!-- /.content -->
  
    @endsection
