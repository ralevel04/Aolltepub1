
@extends('layouts.adm')

@section('content')
    <section class="content-header">
      <h1>
       Daftar Unit Kerja
        <small>Subdit D221</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Unit Kerja</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <div class="col-xs-12">
          <div class="box">

              
            <div class="panel panel-primary">
                <div class="panel-heading">Daftar Unit Kerja</div>
              
              <div class="panel-body">
                <input type="hidden" name="idp" value="">

				<div class="col-xs-10 col-xs-offset-1">
					<a href="{{ route('ukerja.create') }}" class="btn btn-success btn-sm"><i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Data</a>
				</div>
				</br>

	              	<div class="col-xs-10 col-xs-offset-1" style="margin-top: 10px">
				  		<table id="example1" class="table table-hover table-striped table-bordered" width="100%" cellspacing="0">

				  			<thead>
				    			<tr>
			              			<th><center>No</center></th>
			              			<th><center>Kode</center></th>
			              			<th><center>Deskripsi</center></th>
			              			<th><center>Pilihan</center></th>
			              			
	              				</tr>
				    		</thead>

				    		<tfoot>
				    			<tr>
			              			<th><center>No</center></th>
			              			<th><center>Kode</center></th>
			              			<th><center>Deskripsi</center></th>
			              			<th><center>Pilihan</center></th>
			              			
	              				</tr>
				    		</tfoot>


	              			<?php $no=1; ?>
	              			@foreach($uk as $jdwl1)
		              		<tr>
		              			<td><center>{{ $no++ }}</center></td>
		              			<td><center>{{ $jdwl1->kode }}</center></td>
		              			<td>{{ $jdwl1->deskripsi }}</td>
		              			
		              			<td>
		              				<center>
		              				<a href="{{ route('ukerja.edit', $jdwl1->id) }}" class="btn btn-xs btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
		              				<a href="{{ route('ukerja.edit', $jdwl1->id) }}" class="btn btn-xs btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
									</center>
		              			</td>
		              		</tr>x
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

