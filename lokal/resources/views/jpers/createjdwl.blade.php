@extends('layouts.adm')

@section('content')
    <section class="content-header">
      <h1>
       Jadwal Rapat
        <small>Subdit D221</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Surat Keluar</a></li>
        <li class="active">Tambah Data</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <div class="col-xs-12">
          <div class="box">

            <div class="panel panel-primary">
                <div class="panel-heading">Tambah Data Surat Keluar</div>
              
              <div class="panel-body">
                <input type="hidden" name="idp" value="">

              <form action="{{route('jdwl.store')}}" method="post" accept-charset="utf-8" enctype="multipart/form-data" >
                            {{csrf_field()}}

                    <div class="col-sm-8 col-sm-offset-2" style="margin-top: 19px; border: 1px">

                    <div class="form-group" {{ ($errors->has('name')) ? $errors->first('title'): '' }}>
                        <label for="name" style="margin-top: 10px" class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="name" id="name" style="margin-top: 10px; margin-bottom: 10px;  " >
                                <option>---- Pilih ----</option>

                                @foreach($user as $jdwl1)
                                	<option>{{ $jdwl1->name }}</option>
                                @endforeach


                            </select>
                                {!! $errors->first('name', '<p class="help-block">:message</p>') !!}     
                        </div>
                      </div>

                      <div class="form-group"  {{ ($errors->has('tgl')) ? $errors->first('title'): '' }}>
                        <label for="tgl" style="margin-top: 10px" class="col-sm-2 control-label">Tgl</label>
                        <div class="col-sm-10">
                          <input type="text" style="margin-top: 10px; " class="form-control" name="tgl" id="tgl_jadwal" placeholder="Inputkan Tgl tgl">
                                {!! $errors->first('tgl', '<p class="help-block">:message</p>') !!}
                        </div>
                      </div>

                      <div class="form-group"  {{ ($errors->has('jam')) ? $errors->first('title'): '' }}>
                        <label for="jam" style="margin-top: 10px" class="col-sm-2 control-label">Waktu</label>
                        <div class="col-sm-10">
                          <input type="text" style="margin-top: 10px; " class="form-control timepicker" name="jam" placeholder="Inputkan Tgl Terima"> 
                                {!! $errors->first('jam', '<p class="help-block">:message</p>') !!}
                        </div>
                      </div>

                      <div class="form-group" {{ ($errors->has('tempat')) ? $errors->first('title'): '' }}>
                        <label for="tempat" style="margin-top: 10px" class="col-sm-2 control-label">Tempat</label>
                        <div class="col-sm-10">
                          <input type="text" style="margin-top: 10px; " class="form-control" name="tempat" id="tempat" placeholder="Inputkan Tempat" >
                                {!! $errors->first('tempat', '<p class="help-block">:message</p>') !!}
                        </div>
                      </div>

                      <div class="form-group" {{ ($errors->has('agenda')) ? $errors->first('title'): '' }}>
                        <label for="agenda" style="margin-top: 10px" class="col-sm-2 control-label">Agenda</label>
                        <div class="col-sm-10">
                          <textarea type="text" style="margin-top: 10px;  height: 80px" class="form-control" name="agenda" id="agenda" placeholder="Inputkan Agenda">Inputkan Agenda</textarea>
                                {!! $errors->first('agenda', '<p class="help-block">:message</p>') !!}
                        </div>
                      </div>


                      <div class="form-group" >
                        <div  class="col-sm-offset-2 col-sm-10">
                          <input style="margin-top: 23px; margin-bottom: 30PX" type="submit" class="btn btn-primary " value="Save">
                 
                        </div>
                      </div>
                      </div>
                      <div class="col-lg-2" style="margin-top: 19px">
                      </div>
                    
                    </form>

            <!-- /.box-body -->
          </div>
          </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->


    </section>
    <!-- /.content -->

    @endsection