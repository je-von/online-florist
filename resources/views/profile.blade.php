@extends('master')
@section('title', 'Profile Page')
@section('h1', 'Profile')
@section('content')
    <form action="{{url('/profile/'.auth()->user()->id)}}" method="post" class="w-25 m-auto" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            Email
            <input type="email" name="email" class="form-control" placeholder="example@mail.com" value="{{auth()->user()->email}}">
        </div>
        <div class="form-group">
            Name
            <input type="text" name="name" class="form-control" placeholder="Name" value="{{auth()->user()->name}}">
        </div>
        <div class="form-group">
            Phone Number
            <input type="text" name="phone" class="form-control" placeholder="08123456789" value="{{auth()->user()->phone}}">
        </div>
        <div class="form-group">
            Gender
            <div class="input-group">

                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="radio" name="gender" value="male"
                        @if(auth()->user()->gender == 'male')
                            checked
                        @endif
                        >
                    </div>
                </div>
                <label class="form-control mr-3">Male</label>

                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="radio" name="gender" value="female"
                        @if(auth()->user()->gender == 'female')
                           checked
                        @endif
                        >
                    </div>
                </div>
                <label class="form-control">Female</label>
            </div>
        </div>

        <div class="form-group">
            Address
            <textarea name="address" id="" rows="3" placeholder="Address" class="form-control" style="resize: none">{{auth()->user()->address}}</textarea>
        </div>
        <div class="form-group">
            Profile Picture
            <div class="custom-file">
                <input type="file" name="image_file" class="custom-file-input" id="inputGroupFile" aria-describedby="inputGroupFileAddon">
                <label class="custom-file-label" for="inputGroupFile">Choose file</label>
            </div>
        </div>
        <div class="d-flex flex-column justify-content-center">
            <button type="submit" class="btn btn-outline-primary mb-3">Update</button>
            @foreach($errors->all() as $e)
                <i class="text-danger text-center">{{$e}}</i>
            @endforeach
        </div>
    </form>
@endsection
