@extends('layouts.adm')

@section('content')
    <section class="content-header">
      <h1>
       Surat Masuk
        <small>Subdit D221</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Surat Masuk</a></li>
        <li class="active">Show Data</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <div class="col-md-12">
          <div class="box">

              
            <div class="panel panel-primary">
                <div class="panel-heading">Detail Surat Masuk</div>
              
              <div class="panel-body">
                <input type="hidden" name="idp" value="">
              

                <div class="col-md-6 col-md-offset-3">

                  <table class="table">
                    <tr>
                      <th>No Agenda</th>
                      <td>:</td>
                      <td>{{ $smasuk->no_agenda }}</td>
                    </tr>
                    <tr>
                      <th>Tgl Terima</th>
                      <td>:</td>
                      <td>{{ $smasuk->tgl_masuk }} (MM/DD/YY)</td>
                    </tr>
                    <tr>
                      <th>Asal Surat</th>
                      <td>:</td>
                      <td>{{ $smasuk->asal_surat }}</td>
                    </tr>
                    <tr>
                      <th>No Surat</th>
                      <td>:</td>
                      <td>{{ $smasuk->no_surat }}</td>
                    </tr>
                    <tr>
                      <th>Tgl Surat</th>
                      <td>:</td>
                      <td>{{ $smasuk->tgl_surat }} (MM/DD/YY)</td>
                    </tr>
                    <tr>
                      <th>Perihal</th>
                      <td>:</td>
                      <td>{{ $smasuk->perihal }}</td>
                    </tr>
                    <tr>
                      <th>Penerima</th>
                      <td>:</td>
                      <td>{{ $smasuk->penerima }}</td>
                    </tr>
                    <tr>
                      <th>Posisi</th>
                      <td>:</td>
                      <td>{{ $smasuk->posisi }}</td>
                    </tr>
                    <tr>
                      <th>Keterangan</th>
                      <td>:</td>
                      <td>{{ $smasuk->keterangan }}</td>
                    </tr>
                    <tr>
                      <th>File</th>
                      <td>:</td>
                      <td>Download File Clik >>> <a href="{{ asset('/berkasin/'.$smasuk->berkas)}}"> {{ $smasuk->berkas  }}</td>
                    </tr>
                    
                  </table>


                   <a href=" {{ route ('cin.index') }}" class="btn btn-primary"> OK</a> 
                  
                </div>
                   


                


              </div>

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