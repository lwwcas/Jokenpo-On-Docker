<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

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

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 54px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .pointer {
                cursor: pointer;
            }

            .hidden {
                display: none;
            }

            .blue {
                background-color: #3498db;
            }

            .orange {
                background-color: #e67e22;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content container">
                <div class="title m-b-md">
                    Jokenpô on Docker by Lucas Duarte
                </div>
                <h3>Laravel Project</h3>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>

                <hr>

                <div class="row">
                    <div class="col-12 s1"><img src="" alt="" class="imagemMao"></div>
                </div>

                <div class="row">
                    <div class="col-3 offset-3">
                        <div class="row">
                            <div class="col-12">
                                <h4 style="float: left;">Make your choice</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 pointer person stone">
                                <img src="img/stone.png" style="height: 85px" alt="stone hand">
                            </div>
                            <div class="col-3 pointer person paper">
                                <img src="img/paper.png" style="height: 85px" alt="paper hand">
                            </div>
                            <div class="col-3 pointer person cut">
                                <img src="img/cut.png" style="height: 85px" alt="cut hand">
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="row">
                            <div class="col-12">
                                <h4 style="float: left;">Supercomputer choide</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 pc stone">
                                <img src="img/stone.png" style="height: 85px" alt="stone hand">
                            </div>
                            <div class="col-3 pc paper">
                                <img src="img/paper.png" style="height: 85px" alt="paper hand">
                            </div>
                            <div class="col-3 pc cut">
                                <img src="img/cut.png" style="height: 85px" alt="cut hand">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-11 hidden you-lose">
                        <img src="img/lose.png" style="height: 200px" alt="cut hand">
                    </div>
                </div>
            </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <script type="text/javascript">
            $('.person.stone').click(function () {
                clickEffect(this);
                start('stone');
            });

            $('.person.paper').click(function () {
                clickEffect(this);
                start('paper');
            });

            $('.person.cut').click(function () {
                clickEffect(this);
                start('cut');
            });

            function start(choice) {
                    switch (choice) {
                        case 'stone':
                            setPcChoice('paper');
                            break;
                        case 'paper':
                            setPcChoice('cut');
                            break;
                        case 'cut':
                            setPcChoice('stone');
                            break;
                    }
                }

            function clickEffect(here) {
                $( '.person' ).removeClass( 'blue' );
                $( here ).toggleClass( 'blue' );
            }

            function setPcChoice(choice) {
                const pc = '.pc.' + choice;
                $( '.pc' ).removeClass( 'orange' );
                $( pc ).addClass('orange');

                $(".you-lose").show();
                setTimeout(function(){
                    $(".you-lose").hidden();
                }, 900);
            }
        </script>
    </body>
</html>
