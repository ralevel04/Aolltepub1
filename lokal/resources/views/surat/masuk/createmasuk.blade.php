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
        <li class="active">Tambah Data</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <div class="col-xs-12">
          <div class="box">

            <div class="panel panel-primary">
                <div class="panel-heading">Tambah Data Surat Masuk</div>
              
              <div class="panel-body">
                <input type="hidden" name="idp" value="">

              <form action="{{route('cin.store')}}" method="post" accept-charset="utf-8" enctype="multipart/form-data" >
                            {{csrf_field()}}

                    <div class="col-lg-3" style="margin-top: 19px">
                    </div>

                    <div class="col-lg-8" style="margin-top: 19px; border: 1px">

                      <div class="form-group" {{ ($errors->has('no_agenda')) ? $errors->first('title'): '' }}>
                        <label for="no_agenda" style="margin-top: 10px" class="col-sm-2 control-label">No Agenda</label>
                        <div class="col-sm-10">
                          <input type="text" style="margin-top: 10px; width: 500px" class="form-control" id="no_agenda" name="no_agenda" placeholder="Inputkan No Agenda">
                                {!! $errors->first('no_agenda', '<p class="help-block">:message</p>') !!}
                        </div>
                      </div>
                      <div class="form-group"  {{ ($errors->has('tgl_masuk')) ? $errors->first('title'): '' }}>
                        <label for="tgl_masuk" style="margin-top: 10px" class="col-sm-2 control-label">Tgl Terima</label>
                        <div class="col-sm-10">
                          <input type="text" style="margin-top: 10px; width: 500px" class="form-control" name="tgl_masuk" id="tgl_masuk" placeholder="Inputkan Tgl Terima">
                                {!! $errors->first('tgl_masuk', '<p class="help-block">:message</p>') !!}
                        </div>
                      </div>

                      <div class="form-group" {{ ($errors->has('asal_surat')) ? $errors->first('title'): '' }}>
                        <label for="inputEmail3" style="margin-top: 10px" class="col-sm-2 control-label">Asal Surat</label>
                        <div class="col-sm-10">
                          <input type="text" style="margin-top: 10px; width: 500px" class="form-control" name = "asal_surat" id="asal_surat" placeholder="Inputkan Asal Surat">
                                {!! $errors->first('asal_surat', '<p class="help-block">:message</p>') !!}
                        </div>
                      </div>

                      <div class="form-group" {{ ($errors->has('no_surat')) ? $errors->first('title'): '' }}>
                        <label for="inputEmail3" style="margin-top: 10px" class="col-sm-2 control-label">No Surat</label>
                        <div class="col-sm-10">
                          <input type="text" style="margin-top: 10px; width: 500px" class="form-control" name="no_surat" id="no_surat" placeholder="Inputkan No Surat">
                                {!! $errors->first('no_surat', '<p class="help-block">:message</p>') !!}
                        </div>
                      </div>
                      <div class="form-group"  {{ ($errors->has('tgl_surat')) ? $errors->first('title'): '' }}>
                        <label for="inputPassword3" style="margin-top: 10px" class="col-sm-2 control-label">Tgl Surat</label>
                        <div class="col-sm-10">
                          <input type="text" style="margin-top: 10px; width: 500px" class="form-control" name="tgl_surat" id="tgl_surat" placeholder="Inputkan Tgl Surat">
                                {!! $errors->first('tgl_surat', '<p class="help-block">:message</p>') !!}
                        </div>
                      </div>

                      <div class="form-group" {{ ($errors->has('perihal')) ? $errors->first('title'): '' }}>
                        <label for="inputEmail3" style="margin-top: 10px" class="col-sm-2 control-label">Perihal</label>
                        <div class="col-sm-10">
                          <textarea type="text" style="margin-top: 10px; width: 500px; height: 120px" class="form-control" name="perihal" id="perihal" placeholder="Inputkan Perihal"> </textarea>
                                {!! $errors->first('perihal', '<p class="help-block">:message</p>') !!}
                        </div>
                      </div>

                      <div class="form-group" {{ ($errors->has('penerima')) ? $errors->first('title'): '' }}>
                        <label for="inputEmail3" style="margin-top: 10px" class="col-sm-2 control-label">Penerima</label>
                        <div class="col-sm-10">
                          <input type="text" style="margin-top: 10px; width: 500px" class="form-control" name="penerima" id="penerima" placeholder="Inputkan Penerima" value="{{Auth::user()->name}}">
                                {!! $errors->first('penerima', '<p class="help-block">:message</p>') !!}
                        </div>
                      </div>
                      <div class="form-group"  {{ ($errors->has('posisi')) ? $errors->first('title'): '' }}>
                        <label for="inputPassword3" style="margin-top: 10px" class="col-sm-2 control-label">Posisi</label>
                        <div class="col-sm-10">
                          <input type="text" style="margin-top: 10px; width: 500px" class="form-control" name="posisi" id="posisi" placeholder="Inputkan Posisi">
                                {!! $errors->first('posisi', '<p class="help-block">:message</p>') !!}
                        </div>
                      </div>

                      <div class="form-group"  {{ ($errors->has('berkas')) ? $errors->first('title'): '' }}>
                        <label for="inputPassword3" style="margin-top: 10px" class="col-sm-2 control-label">Berkas</label>
                        <div class="col-sm-10">
                          <input type="file" style="margin-top: 10px; width: 500px" class="form-control" name="berkas" id="berkas">
                                {!! $errors->first('berkas', '<p class="help-block">:message</p>') !!}
                        </div>
                      </div>


                      <div class="form-group" {{ ($errors->has('keterangan')) ? $errors->first('title'): '' }}>
                        <label for="inputEmail3" style="margin-top: 10px" class="col-sm-2 control-label">Keterangan</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="keterangan" id="Keterangan" style="margin-top: 10px; margin-bottom: 10px;  width: 500PX" >
                                <option>---- Pilih ----</option>
                                <option>Surat Undangan</option>
                                <option>Surat Eksternal</option>
                                <option>Surat Pemberitahuan</option>
                                <option>Surat Permohonan</option>
                                <option>Surat Perintah</option>
                                <option>Surat Jawaban</option>
                                <option>Keputusan Kepala</option>
                                <option>Nota Dinas</option>
                                <option>Surat Eksternal</option>


                            </select>
                                {!! $errors->first('keterangan', '<p class="help-block">:message</p>') !!}     
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