@extends('layouts.adm')

@section('content')
    <section class="content-header">
      <h1>
       Profil Saya
        <small>{{ $profil->name }}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Profil Saya</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">

            <div class="box-body">
              <div class="box box-success">
            <div class="box-header with-border">
                <div>Profil saya</div>
                
              

              <div class="box-body no-padding">
                <div class="row">
                </br>
                <div class="col-md-8 col-md-offset-2">
                  <div class="col-md-3">
                  <img src="../../dist/img/{{ $profil->foto }}" alt="User Image" style="width: 170px; height: 210px; border-style: solid;border-color: #345123; border-radius: 15px; border: 5px; ">
                  
                </div>
              
                <div class="col-md-9">

                  <table class="table">
                    <tr>
                      <th>Nama</th>
                      <td>:</td>
                      <td>{{ $profil->name }}</td>
                    </tr>
                    <tr>
                      <th>NIP</th>
                      <td>:</td>
                      <td>{{ $profil->nip }}</td>
                    </tr>
                    <tr>
                      <th>Pangkat</th>
                      <td>:</td>
                      <td>{{ $profil->pangkat }}</td>
                    </tr>
                    <tr>
                      <th>Jabatan</th>
                      <td>:</td>
                      <td>{{ $profil->jabatan }}</td>
                    </tr>
                    <tr>
                      <th>Email</th>
                      <td>:</td>
                      <td>{{ $profil->email }}</td>
                    </tr>
                    <tr>
                      <th>Unit Kerja</th>
                      <td>:</td>
                      <td>{{ $profil->deskripsi }} ( {{ $profil->kode}})</td>
                    </tr>
                    <tr>
                      <th>Sebagai</th>
                      <td>:</td>
                      <td>{{ $profil->role }} aplikasi</td>
                    </tr>                 
             
                  </table>    
                </div>
        
                </div>
                  
                </div>
                
              </div>

              <div class="box-footer clearfix">
                <a href=""><i class="fa fa-print btn btn-sm btn-default"></i></a>
              </div>
        

          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->



    </section>
    <!-- /.content -->

    @endsection