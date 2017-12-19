@extends('layouts.adm')

@section('content')
    <section class="content-header">
      <h1>
       Surat Keluar
        <small>Subdit D221</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Surat Keluar</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <div class="col-xs-12">
          <div class="box">

            <div class="navbar navbar-inverse">

              <div class="navbar-collapse collapse navbar-inverse-collapse" style="margin-right: 10px;">
                <ul class="nav navbar-nav">
                  <li><a href="{{ route('cout.create') }}"><i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Data</a></li>
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-download" aria-hidden="true"></i> Export Data <span class="caret"></span></a>
                      <ul class="dropdown-menu" style=" text-warning">
                        <li><a href="{{ URL::to('getPDFout') }}"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Export to PDF</a></li>
                         <li><a href="{{ URL::to('exportexcelout') }}"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Export to Excel</a></li>
                      </ul>
                  </li>

               <!--    <li><a href="{{ URL::to('getImportin') }}"><i class="fa fa-upload" aria-hidden="true"></i> Import Data</a></li>
                  <li><a href="{{ URL::to('deleteAllin') }}"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete All Data</a></li>
-->
                </ul> 
              </div>
              </div><!-- /.nav-collapse -->
       

          <!--  <div class="box-header">
              <h3 class="box-title">Data Surat Masuk With Full Features</h3>
            </div>
             /.box-header -->
            <div class="box-body">
              
          <table id="example1" class="table table-hover table-striped table-bordered" width="100%" cellspacing="0">
               <thead>
                    <tr>
                        <th ><center>No</center></th>
                        <th ><center>No Agenda</center></th>
                        <th ><center>Tgl Masuk</center></th>
                        <th ><center>Dari</center></th>
                        <th ><center>No Surat</center></th>
                        <th ><center>Perihal</center></th>
                        <th ><center>Aksi</center></th>
                    </tr>
                </thead>

                <tfoot>
                  <tr>
                        <th ><center>No</center></th>
                        <th ><center>No Agenda</center></th>
                        <th ><center>Tgl Masuk</center></th>
                        <th ><center>Tujuan</center></th>
                        <th ><center>No Surat</center></th>
                        <th ><center>Perihal</center></th>
                        <th ><center>Aksi</center></th>
                    </tr>
                </tfoot>

                <?php $no=1; ?>
                @foreach($sklr as $sklr)
                    <tr >
                        <td ><center>{{ $no++ }}</center></td>
                        <td ><center>{{ $sklr->no_agenda }}</center></td>
                        <td ><center>{{ $sklr->tgl_keluar }}</center></td>
                        <td ><center>{{ $sklr->tujuan_surat }}</center></td>
                        <td ><center>{{ $sklr->no_surat }}</br>({{ $sklr->tgl_surat }})</center></td>
                        <td > {{ $sklr->perihal }} </td>
                        <td >
                                <center>
                                          <form method="delete" action="{{ route('cout.destroy', $sklr->id)}}" style="display: inline;">
                                                <button class="btn btn-xs btn-danger" data-toggle="confirmation">
                                                    <span class="glyphicon glyphicon-trash"></span>
                                                </button>
                                          </form>
                                 
                                              <!-- {!! Form::open(['method' => 'DELETE','route' => ['cout.destroy', $sklr->id],'style'=>'display:inline']) !!}
                                              {!! Form::button('del', ['class' => 'btn btn-danger btn-xs','data-toggle'=>'confirmation']) !!}
                                              {!! Form::close() !!}
 -->
                                 <a class="btn btn-xs btn-success" href="{{ route('cout.show', $sklr->id) }}" >
                                  <span class="glyphicon glyphicon-eye-open" aria-hidden="true"> </a>
                                  <a class="btn btn-xs btn-warning" href="{{ route('cout.edit', $sklr->id) }}" >
                                  <span class="glyphicon glyphicon-pencil" aria-hidden="true"> </a>
                                </center>
                               
                        </td>
                    </tr>

                @endforeach
            </table>

            </div>

            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->


    </section>
    <!-- /.content -->

    @endsection