<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Florist | @yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        *{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        main{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        h1{
            text-align: center;
        }
        .bg-default{
            background-color: rgb(255, 239, 217);
        }
        body{
            padding-bottom: 70px;
        }
        table{
            margin-top: 20px;
            margin-left: auto;
            margin-right: auto;
            width: 50vw;
        }
        td,th{
            padding: 10px 50px;
        }
        th{
            border-bottom: 1px solid black;
        }
        .middle{
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 5px 0;
        }
        p{
            margin: 0;
        }
        .flower-card {
            width: 18rem;
            margin: 20px 5px;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .flower-card-body img {
            width: 10rem;
        }
        .flower-card-body{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .flower-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            width: 100%;
            margin: 20px 0;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-default">
    <div class="container">
        <div class="navbar-header">
            <a href="{{url('/')}}" class="navbar-brand" style="margin-right:10px;">Online Florist</a>
            @if(auth()->check())
                <b class="navbar-brand mb-0 pl-3" style="border-left:1px solid black; color:black;"> Hello, {{auth()->user()->name}} !</b>
            @endif
        </div>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                @if(auth()->check())
                    <div class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Menu
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{url('/cart')}}">Cart</a>
                            @if(auth()->user()->role == 'admin')
                                <a class="dropdown-item" href="{{url('/flower/manage')}}">Manage Flower</a>
                                <a class="dropdown-item" href="{{url('/flower-type/manage')}}">Manage Flower Type</a>
                                <a class="dropdown-item" href="{{url('/courier/manage')}}">Manage Couriers</a>
                                <a class="dropdown-item" href="{{url('/user/manage')}}">Manage Users</a>
                                <a class="dropdown-item" href="{{url('/transaction-history')}}">Transaction History</a>
                            @endif
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{url('/profile')}}">Profile</a>
                            <a class="dropdown-item" href="{{url('/logout')}}">Logout</a>
                        </div>
                    </div>
                @else
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/login')}}">Login</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/register')}}">Register</a>
                    </li>
                @endif
            </ul>

        </div>
    </div>

</nav>
<div class="pt-3 pb-3">
    <h1>@yield('h1')</h1>
    <hr>
    @yield('content')
</div>
    <nav class="navbar navbar-light bg-default fixed-bottom">
        <div class="container">
            <div>
                © 2021 | LC035 - Jevon Levin
            </div>
            <div class="ml-auto">
                @php
                    date_default_timezone_set('Asia/Jakarta');
                    $date = date('F j, Y g:i a');
                @endphp
                {{$date}}
            </div>
        </div>
    </nav>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>
