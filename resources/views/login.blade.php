@extends('master')
@section('title', 'Login Page')
@section('h1', 'Login')
@section('content')
    <form action="" method="post" class="w-25 m-auto">
        {{csrf_field()}}
        <div class="form-group">
            Email address
            <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="example@mail.com"
            @if(\Illuminate\Support\Facades\Cookie::get('email') !== null)
                value="{{\Illuminate\Support\Facades\Cookie::get('email')}}"
            @endif
            >
        </div>
        <div class="form-group">
            Password
            <input type="password" name="password" class="form-control" placeholder="Password"
            @if(\Illuminate\Support\Facades\Cookie::get('password') !== null)
                value="{{\Illuminate\Support\Facades\Cookie::get('password')}}"
            @endif
            >
        </div>
        <div class="form-group form-check">
            <input type="checkbox" name="remember_me" class="form-check-input">
            Remember me
        </div>
        <div class="d-flex flex-column justify-content-center">
            <button type="submit" class="btn btn-outline-primary">Login</button>
            @if ($errors->has('login'))
                <i class="text-danger text-center mt-3">{{$errors->get('login')[0]}}</i>
            @endif
        </div>
    </form>
@endsection
