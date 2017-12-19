@extends('layouts.adm')

@section('content')
    <section class="content-header">
      <h1>
       Tambah User
        <small>Subdit D221</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tambah User</a></li>
      </ol>
    </section>

    <section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Tambah User</div>
                <div class="panel-body">
                    </br>
                    </br>
                    </br>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('gelar') ? ' has-error' : '' }}">
                            <label for="gelar" class="col-md-4 control-label">Gelar</label>

                            <div class="col-md-6">
                                <input id="gelar" type="text" class="form-control" name="gelar" value="{{ old('gelar') }}">

                                @if ($errors->has('gelar'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gelar') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('pangkat') ? ' has-error' : '' }}">
                            <label for="pangkat" class="col-md-4 control-label">Pangkat</label>

                            <div class="col-md-6">
                                <input id="pangkat" type="text" class="form-control" name="pangkat" value="{{ old('pangkat') }}" required>

                                @if ($errors->has('pangkat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pangkat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('jabatan') ? ' has-error' : '' }}">
                            <label for="jabatan" class="col-md-4 control-label">Jabatan</label>

                            <div class="col-md-6">
                                <input id="nip" type="text" class="form-control" name="jabatan" value="{{ old('nip') }}" required>

                                @if ($errors->has('jabatan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jabatan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nip') ? ' has-error' : '' }}">
                            <label for="nip" class="col-md-4 control-label">NIP</label>

                            <div class="col-md-6">
                                <input id="nip" type="text" class="form-control" name="nip" value="{{ old('nip') }}" required>

                                @if ($errors->has('nip'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nip') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('id_atasan') ? ' has-error' : '' }}">
                            <label for="id_atasan" class="col-md-4 control-label">Unit Kerja</label>

                            <div class="col-md-6">
                                    <select class="form-control" name="keterangan" id="Keterangan" >
                                        <option>---- Pilih ----</option>
                                        
                                        @foreach($ukerja as $uk)
                                            <option>{{ $uk-> kode }}</option>
                                        @endforeach

                                    </select>
                                {!! $errors->first('id_atasan', '<p class="help-block">:message</p>') !!}     
                                </div>
                        </div>

                        <div class="form-group">
                            <label for="foto" class="col-md-4 control-label">Foto Profil</label>

                            <div class="col-md-6">
                                <input id="foto" type="file" class="form-control" name="foto">
                            </div>
                        </div>

                        <!-- show captcha image html -->
                        <div class="form-group{{ $errors->has('CaptchaCode') ? ' has-error' : '' }}">
                            <label for="CaptchaCode" class="col-md-4 control-label">Captcha</label>

                            <div class="col-md-6">
                                    {!! captcha_image_html('RegisterCaptcha') !!}
                                <input type="text" id="CaptchaCode" name="CaptchaCode" class="form-control" required>

                                {!! $errors->first('CaptchaCode', '<p class="help-block">:message</p>') !!}     
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
    </div>
</section>
@endsection
