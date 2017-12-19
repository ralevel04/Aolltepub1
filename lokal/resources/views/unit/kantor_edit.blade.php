@extends('layouts.adm')

@section('content')
    <section class="content-header">
      <h1>
       Profil Saya
        <small>{{ Auth::user()->name }}</small>
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
                  <div class="col-md-4">
                  <img src="../../dist/img/{{ $kantor->logo_kantor }}" alt="User Image" style="width: 210px; height: 170px; border-style: solid;border-color: #345123; border-radius: 15px; border: 5px; ">
                  
                </div>
              
                <div class="col-md-8">
                <form class="form-horizontal" role="form" method="POST" action="{{ route ('kntr.update', $kantor->id)}}">
                            {{csrf_field()}} {{ method_field('PATCH') }}

                  <table class="table">
                    <tr>
                      <th>Nama</th>
                      <td>:</td>
                      <td>{{ $kantor->nama_kantor }}</td>
                    </tr>
                    <tr>
                      <th>Alamat</th>
                      <td>:</td>
                      <td>{{ $kantor->alamat_kantor }}</td>
                    </tr>
                    <tr>
                      <th>Telp</th>
                      <td>:</td>
                      <td>{{ $kantor->telp_kantor }}</td>
                    </tr>
                    <tr>
                      <th>Fax</th>
                      <td>:</td>
                      <td>{{ $kantor->fax_kantor }}</td>
                    </tr>
                    <tr>
                      <th>Email</th>
                      <td>:</td>
                      <td>{{ $kantor->email_kantor }}</td>
                    </tr>         
             
                  </table>    
                </div>
        
                </div>
                  
                </div>
                
              </div>

              <div class="box-footer clearfix">
                <button type="submit" class="btn btn-primary">
	             	Save 
	             </button> 
              </div>
        
</form>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->



    </section>
    <!-- /.content -->

    @endsection