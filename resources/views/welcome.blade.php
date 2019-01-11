<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <link rel="shortcut icon" href="{{ asset("images/favicon.ico") }}">

        <title>Plusoft.co</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles #6ed123 -->
        <style>
            html, body {
                background-color: #57b200;
                color: #FFFFFF;
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
                color: #FFFFFF;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    <img class="img-responsive" src=" {{ asset('images/logo_h_blanco.png') }} " width="650px">
                </div>

                <div class="links">
                    <a href="http://tareasvue.plusoft.co">Tareas Vue.js</a>
                    <a href="http://balquimia.plusoft.co/">Balquimia - ERP</a>
                    <a href="http://cripack.plusoft.co/">Cripack - ERP</a>
                    <a href="http://webs.plusoft.co/">Mis recursos</a>

                </div>
            </div>
        </div>
    </body>
</html>
