


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

                  <div class="chart" id="bar-chart" style="height: 203px"></div>
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
                    <span class="info-box-icon"><i class="fa fa-calendar"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Agenda Rapat</span>
                      <span class="info-box-number"><p style="font-size: 30px">{{ $rapat }}</p></span>                     
                    </div>
                    <!-- /.info-box-content -->
                  </div>

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
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel">
            <div class="panel-heading bg-blue"><i class="fa fa-envelope-o"></i> Surat Masuk Terbaru</div>
            <div class="panel-body">
                <div class=" col-md-12">
                    <table class="table table-hover table-striped ">
                        <thead>
                            <tr>
                                <th ><center>No</center></th>
                                <th ><center>No Agenda</center></th>
                                <th ><center>Tgl Masuk</center></th>
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
                                <td width="10%"><center>{{ $smsk->tgl_masuk }}</center></td>
                                <td width="15%"><center>{{ $smsk->asal_surat }}</center></td>
                                <td width="35%">{{ $smsk->perihal }}</td>
                                <td ><center>{{ $smsk->penerima }}</center></td>

                            </tr>
                        @endforeach
                    </table>

                </div>
            </div>
            <div class="box-footer clearfix">
              <a href="{{route ('cin.index')}}"><center> Lihat Data Surat Masuk </center></a>
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
              <center><a href="{{route ('cout.index')}}"> Lihat Data Surat Keluar </a></center>
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
            

            <div class="col-md-12">
              <!-- USERS LIST -->
              <div class="box box-danger">
                <div class="box-header with-border"> <i class="fa fa-comments-o"></i>
                  <h3 class="box-title">User Baru</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">

                        @foreach($profil as $profile)
                          <li>
                            <img src="/public/dist/img/{{ $profile->foto }}" alt="User Image" class="img-circle" style="height: 50px; width: 50px">
                            <a class="users-list-name" href="#"> {{ $profile->name }}</a>
                            <span class="users-list-date">{{ $profile->created_at}}</span>
                          </li>
                        @endforeach

                                       
                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="{{ route('profil.index') }}" class="uppercase">Lihat Data User</a>
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
