
@extends('layouts.adm')

@section('content')
    <section class="content-header">
      <h1>
       Jadwal Kegiatan Personil
        <small>Subdit D221</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Jadwal Personil</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <div class="col-xs-12">
          <div class="box">

          	
              
            <div class="panel panel-primary">
                <div class="panel-heading">Jadwal Personil Subdit D221</div>
              
              <div class="panel-body">
                <input type="hidden" name="idp" value="">

				<a href="{{ route('jpers.create') }}" class="btn btn-success btn-sm"><i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Data</a>
				</br>

	              	<div class="box-body" style="margin-top: 10px">
				  		<table id="example1" class="table table-hover table-striped table-bordered" width="100%" cellspacing="0">

				  			<thead>
				    			<tr>
			              			<th><center>No</center></th>
			              			<th><center>Nama</center></th>
			              			<th><center>Waktu</center></th>
			              			<th><center>Tempat</center></th>
			              			<th><center>Agenda</center></th>
			              			<th><center>Aksi</center></th>
	              				</tr>
				    		</thead>

				    		<tfoot>
				    			<tr>
			              			<th><center>No</center></th>
			              			<th><center>Nama</center></th>
			              			<th><center>Waktu</center></th>
			              			<th><center>Tempat</center></th>
			              			<th><center>Agenda</center></th>
			              			<th><center>Aksi</center></th>
	              				</tr>
				    		</tfoot>


	              			<?php $no=1; ?>
	              			@foreach($jdwl as $jdwl1)
		              		<tr>
		              			<td><center>{{ $no++ }}</center></td>
		              			<td>{{ $jdwl1->name }}</td>
		              			<td><center>{{ $jdwl1->tgl }} </br> {{ $jdwl1->jam }}</center></td>
		              			<td><center>{{ $jdwl1->tempat }}</center></td>
		              			<td>{{ $jdwl1->agenda }}</td>
		              			
		              			<td>
		              				<center>
		              				<a href="{{ route('jpers.edit', $jdwl1->id) }}" class="btn btn-xs btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
		              				<a href="{{ route('jpers.destroy', $jdwl1->id) }}" class="btn btn-xs btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
									</center>
		              			</td>
		              		</tr>
		              		@endforeach

				  		</table>
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

