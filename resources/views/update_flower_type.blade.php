@extends('master')
@section('title', 'Update Flower Type Page')
@section('h1', 'Update Flower Type')
@section('content')
    <form action="" method="post" class="w-25 m-auto">
        {{csrf_field()}}
        <div class="form-group">
            Flower Type ID
            <input type="text" disabled class="form-control" value="{{$current_flower_type->id}}">
        </div>
        <div class="form-group">
            Flower Type Name
            <input type="text" name="type_name" class="form-control" placeholder="Name" value="{{$current_flower_type->type_name}}">
        </div>
        <div class="d-flex flex-column justify-content-center">
            <button type="submit" class="btn btn-outline-primary mb-3">Update</button>
            @foreach($errors->all() as $e)
                <i class="text-danger text-center">{{$e}}</i>
            @endforeach
        </div>
    </form>
@endsection
