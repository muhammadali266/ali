<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>




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
            font-size: 84px;
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
    </style>
</head>
<body>
<div class="">
    {{--            @if (Route::has('login'))--}}
    {{--                <div class="top-right links">--}}
    {{--                    @auth--}}
    {{--                        <a href="{{ url('/home') }}">Home</a>--}}
    {{--                    @else--}}
    {{--                        <a href="{{ route('login') }}">Login</a>--}}

    {{--                        @if (Route::has('register'))--}}
    {{--                            <a href="{{ route('register') }}">Register</a>--}}
    {{--                        @endif--}}
    {{--                    @endauth--}}
    {{--                </div>--}}
    {{--            @endif--}}

    <div class="content">
        <div class="title m-b-md">
            Laravel
        </div>

        <form class="form-horizontal" action='/api/users/{{$user->id}}' method="POST">
            @csrf
            {{ method_field('PUT') }}
            <fieldset>
                <div id="legend">
                    <legend class="">USERS</legend>
                </div>
                <div class="control-group">

                    <label class="control-label"  for="username">Username</label>
                    <div class="controls">
                        <input type="text" id="username" name="name" value="{{$user->name}}" class="input-xlarge">
                    </div>
                </div>

                <div class="control-group">

                    <label class="control-label" for="email">E-mail</label>
                    <div class="controls">
                        <input type="text" id="email" name="email" value="{{$user->email}}" class="input-xlarge">

                    </div>
                </div>

                <div class="control-group">

                    <label class="control-label" for="password">Password</label>
                    <div class="controls">
                        <input type="password" id="password" name="password" value="{{$user->password}}" class="input-xlarge">

                    </div>
                </div>



                <div class="control-group">

                    <div class="controls">
                        <button class="btn btn-success">Edit User</button>
                    </div>
                </div>
            </fieldset>
        </form>



    </div>
</div>

</body>
</html>
