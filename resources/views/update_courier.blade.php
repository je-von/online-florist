@extends('master')
@section('title', 'Update Courier Page')
@section('h1', 'Update Courier')
@section('content')
    <form action="" method="post" class="w-25 m-auto">
        {{csrf_field()}}
        <div class="form-group">
            Courier ID
            <input type="text" disabled class="form-control" value="{{$current_courier->id}}">
        </div>
        <div class="form-group">
            Courier Name
            <input type="text" name="name" class="form-control" placeholder="Name" value="{{$current_courier->name}}">
        </div>
        <div class="form-group">
            Shipping Cost
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">Rp</div>
                </div>
                <input name="shipping_cost" type="number" class="form-control" value="{{$current_courier->shipping_cost}}" min="0">
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
