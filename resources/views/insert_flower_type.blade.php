@extends('master')
@section('title', 'Insert Flower Type Page')
@section('h1', 'Insert Flower Type')
@section('content')
    <form action="" method="post" class="w-25 m-auto" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            Flower Type Name
            <input type="text" name="type_name" class="form-control" placeholder="Name">
        </div>
        <div class="d-flex flex-column justify-content-center">
            <button type="submit" class="btn btn-outline-primary mb-3">Insert</button>
            @foreach($errors->all() as $e)
                <i class="text-danger text-center">{{$e}}</i>
            @endforeach
        </div>
    </form>
@endsection
