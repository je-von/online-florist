@extends('master')
@section('title', 'Register Page')
@section('h1', 'Register')
@section('content')
    <form action="" method="post" class="w-25 m-auto" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            Email
            <input type="email" name="email" class="form-control" placeholder="example@mail.com">
        </div>
        <div class="form-group">
            Name
            <input type="text" name="name" class="form-control" placeholder="Name">
        </div>
        <div class="form-group">
            Password
            <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
        <div class="form-group">
            Confirm Password
            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
        </div>
        <div class="form-group">
            Phone Number
            <input type="text" name="phone" class="form-control" placeholder="08123456789">
        </div>
        <div class="form-group">
            Gender
            <div class="input-group">

                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="radio" name="gender" value="male">
                    </div>
                </div>
                <label class="form-control mr-3">Male</label>

                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="radio" name="gender" value="female">
                    </div>
                </div>
                <label class="form-control">Female</label>
            </div>
        </div>

        <div class="form-group">
            Address
            <textarea name="address" id="" rows="3" placeholder="Address" class="form-control" style="resize: none"></textarea>
        </div>
        <div class="form-group">
            Profile Picture
            <div class="custom-file">
                <input type="file" name="image_file" class="custom-file-input" id="inputGroupFile" aria-describedby="inputGroupFileAddon">
                <label class="custom-file-label" for="inputGroupFile">Choose file</label>
            </div>
        </div>
        <div class="d-flex flex-column justify-content-center">
            <button type="submit" class="btn btn-outline-primary mb-3">Register</button>
            @foreach($errors->all() as $e)
                <i class="text-danger text-center">{{$e}}</i>
            @endforeach
        </div>
    </form>
@endsection
