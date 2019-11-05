<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
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
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
{{--                            @guest--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                                </li>--}}
{{--                                @if (Route::has('register'))--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                                    </li>--}}
{{--                                @endif--}}
{{--                            @else--}}

                            <?php
                            $user =  App\User::find(Auth::id());
                            ?>
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   {{ $user->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
{{--                            @endguest--}}
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

{{--                <form class="form-horizontal" action='/api/users' method="POST">--}}
{{--                    <fieldset>--}}
{{--                        <div id="legend">--}}
{{--                            <legend class="">USERS</legend>--}}
{{--                        </div>--}}
{{--                        <div class="control-group">--}}

{{--                            <label class="control-label"  for="username">Username</label>--}}
{{--                            <div class="controls">--}}
{{--                                <input type="text" id="username" name="name" placeholder="" class="input-xlarge">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="control-group">--}}

{{--                            <label class="control-label" for="email">E-mail</label>--}}
{{--                            <div class="controls">--}}
{{--                                <input type="text" id="email" name="email" placeholder="" class="input-xlarge">--}}

{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="control-group">--}}

{{--                            <label class="control-label" for="password">Password</label>--}}
{{--                            <div class="controls">--}}
{{--                                <input type="password" id="password" name="password" placeholder="" class="input-xlarge">--}}

{{--                            </div>--}}
{{--                        </div>--}}



{{--                        <div class="control-group">--}}

{{--                            <div class="controls">--}}
{{--                                <button class="btn btn-success">Add User</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </fieldset>--}}
{{--                </form>--}}


                <div class="row col-md-6 col-md-offset-2 custyle">
                    <table class="table table-striped custab">
                        <thead>

                        <tr>
                            <th>ID</th>
                            <th>UserName</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td></td>
                            <td class="text-center"><a class='btn btn-info btn-xs' href="/api/users/{{$user->id}}"><span class="glyphicon glyphicon-edit"></span> Show</a><a class='btn btn-info btn-xs' href="/api/users/{{$user->id}}/edit"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                <form action="/api/users/{{$user->id}}" method="POST">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</button>
                                </form></td>
                        </tr>
                            @endforeach

                    </table>
                </div>
            </div>

