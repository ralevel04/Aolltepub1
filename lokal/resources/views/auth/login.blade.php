@extends('layouts.app_login')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class=" bodine" >
                </br>
                
                    <div>
                        <center><img src="{{ URL::to ('/dist/img/agol1.png') }}" alt="User Image" style="width: 100px; height: 70px">
                        </center>
                    </div>
                    <div>
                        <center>
                            <p class="ppp">Silahkan melakukan Login berikut untuk menggunakan aplikasi Agenda Online   </p>
                        </center>
                    </div>   
                </br>


                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class=" control-label"></label>

                            <div class="col-xs-10 col-xs-offset-1">
                                <input id="email" type="email" class="form-control inpute" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class=" control-label"></label>

                            <div class="col-xs-10 col-xs-offset-1">
                                <input id="password" type="password" class="form-control inpute" name="password" required placeholder="Password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('CaptchaCode') ? ' has-error' : '' }}">
                            <label for="CaptchaCode" class=" control-label"></label>
                            <div class="col-xs-10 col-xs-offset-1">
                                <center>
                                <label>Retype the characters from the picture</label>
                                {!! captcha_image_html('LoginCaptcha') !!}
                                </br>
                                <input type="text" id="CaptchaCode" name="CaptchaCode" placeholder="Captcha" class="form-control inpute">
                            </center>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-xs-10 col-xs-offset-1">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> <p class="ppp">Remember Me</p>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-10 col-xs-offset-1">
                                <center>
                                <button type="submit" class="btn btn-primary buttone">
                                    Login
                                </button>
                                </br>
                                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a>
                            </center>
                            </div>
                        </div>
                    </form>

                </div>
        </div>
    </div>
</div>
@endsection
