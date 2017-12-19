<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Agenda Online</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ captcha_layout_stylesheet_url() }}" type="text/css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <style>
            html, body {
                background-image: url('{{ asset('/dist/img/photo4.jpg') }}');
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .bodine {
                background-color: rgba(0,0,0,0.8);
                border: 1.5px; 
                border-style: solid; 
                border-color: #4682B4;
                border-radius: 20px;
            }

            .inpute {
                border-radius: 10px;
                background-color: #fff;
                text-decoration-color: #ffffff;
            }

            .buttone {
                border-radius: 10px;
                background-color: #357ca5;
                text-decoration-color: #ffffff;
               
                
            }

            .buttone:hover {
                background-color: #ADFF2F;
                text-decoration-color: #000000;
            }

            .ppp {
                color: #ffffff;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;

            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .login-box {
                background-color: rgba(9,9,9,0.8);

            }
        </style>
       
</head>
<body>
    <div class="flex-center position-ref full-height">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset ('js/app.js') }}"></script>
</body>
</html>
