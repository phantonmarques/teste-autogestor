<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AutoGestor</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }
            .buttons {
                font-size: 100%;
                padding: .5em 1em;
                color: rgba(0,0,0,.8);
                border: transparent;
                background-color: #e6e6e6;
                text-decoration: none;
                border-radius: 2px;
            }
            .button-success,
            .button-secondary {
                color: white;
                border-radius: 4px;
                text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
            }

            .button-success {
                background: rgb(28, 184, 65);
            }

            .button-secondary {
                background: rgb(66, 184, 221);
            }

            .links > a {
                color: #636b6f;
                padding: 4px 25px;
                font-size: 25px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                display: inline-block;
                margin-top: 5%;
            }
            .title-description{
                text-decoration: underline;
                font-size: 25px;
                font-weight: bold;
            }
            .description{
                margin-bottom: 20%;
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
                    Bem vindo ao Teste AutoGestor
                </div>

                <span class="title-description">
                    Utilize usuário criado nos seeders ou registre um novo:<br>
                </span>
                <span class="description">
                    Usuário: admin@admin.com<br>
                    Senha: admin
                </span>

                @if (Route::has('login'))
                    <div class="links">
                        @auth
                            <a class="buttons button-secondary" href="{{ route('home') }}">Home</a>
                        @else
                            <a class="buttons button-success" href="{{ route('login') }}">Logar</a>

                            @if (Route::has('register'))
                                <a class="buttons button-secondary" href="{{ route('register') }}">Registrar</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </body>
</html>
