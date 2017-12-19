
@extends('layouts.adm')

@section('content')
    <section class="content-header">
      <h1>
       Tambah Unit Kerja
        <small>Subdit D221</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Unit Kerja</a></li>
        <li><a href="#">Tambah Unit Kerja</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <div class="col-xs-12">
          <div class="box">

              
            <div class="panel panel-primary">
                <div class="panel-heading">Tambah Unit Kerja</div>
              
              <div class="panel-body">
                <input type="hidden" name="idp" value="">

				</br>
	              	<div class="col-xs-10 col-xs-offset-1" style="margin-top: 10px">
				  		<form class="form-horizontal" role="form" method="POST" action="{{ route ('ukerja.store')}}">
                        {{ csrf_field() }}

	                        <div class="form-group{{ $errors->has('kode') ? ' has-error' : '' }}">
	                            <label for="kode" class="col-md-4 control-label">Kode</label>

	                            <div class="col-md-6">
	                                <input id="kode" type="text" class="form-control" name="kode" value="{{ old('kode') }}" required autofocus>

	                                @if ($errors->has('kode'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('kode') }}</strong>
	                                    </span>
	                                @endif
	                            </div>
	                        </div>

	                        <div class="form-group{{ $errors->has('deskripsi') ? ' has-error' : '' }}">
	                            <label for="deskripsi" class="col-md-4 control-label">Deskripsi</label>

	                            <div class="col-md-6">
	                                <input id="deskripsi" type="text" class="form-control" name="deskripsi" value="{{ old('deskripsi') }}" required autofocus>

	                                @if ($errors->has('deskripsi'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('deskripsi') }}</strong>
	                                    </span>
	                                @endif
	                            </div>
	                        </div>

	                        <div class="form-group">
	                            <div class="col-md-6 col-md-offset-4">
	                                <button type="submit" class="btn btn-primary">
	                                    Register
	                                </button>
	                            </div>
                        	</div>


                    	</form>
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

