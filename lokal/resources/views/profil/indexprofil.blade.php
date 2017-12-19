@extends('layouts.adm')

@section('content')
    <section class="content-header">
      <h1>
       Daftar User
        <small>Subdit D221</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Daftar User</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
            <div class="panel panel-primary">
                <div class="panel-heading">Daftar User</div>
              
              <div class="panel-body">
              
                <div class="col-md-12">
                  <div>
                <a href="{{ URL::to('/register') }}" class="btn btn-success btn-sm"><i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Data</a>
              </div>
              </br>


                    <table class="table table-hover table-striped table-bordered" width="100%" cellspacing="0">
                     <thead>
                          <tr>
                              <th ><center>No</center></th>
                              <th ><center>Nama</center></th>
                              <th ><center>NIP</center></th>
                              <th ><center>Pangkat</center></th>
                              <th ><center>Jabatan</center></th>
                              <th ><center>Email</center></th>
                              <th ><center>Pilihan</center></th>
                              
                          </tr>
                      </thead>

                      <tfoot>
                        <tr>
                              <th ><center>No</center></th>
                              <th ><center>Nama</center></th>
                              <th ><center>NIP</center></th>
                              <th ><center>Pangkat</center></th>
                              <th ><center>Jabatan</center></th>
                              <th ><center>Email</center></th>
                              <th ><center>Pilihan</center></th>

                          </tr>
                      </tfoot>

                      <?php $no=1; ?>
                      @foreach($profil as $sklr)
                          <tr >
                              <td >{{ $no++ }}</td>
                              <td >{{ $sklr->name }}</td>
                              <td >{{ $sklr->nip }}</td>
                              <td >{{ $sklr->pangkat }}</td>
                              <td >{{ $sklr->jabatan }}</td>
                              <td >{{ $sklr->email }}</td>

                              <td >
                                  <center>
                                      <a href="{{ route ('profil.show', $sklr->id)  }}" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-eye-open"></i></a>
                                      <a href="" class="btn btn-xs btn-warning"><i class="fa fa-pencil-square-o"></i></a>
                                      <a href="" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                                        
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