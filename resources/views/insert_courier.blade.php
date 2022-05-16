@extends('master')
@section('title', 'Insert Courier Page')
@section('h1', 'Insert Courier')
@section('content')
    <form action="" method="post" class="w-25 m-auto">
        {{csrf_field()}}
        <div class="form-group">
            Courier Name
            <input type="text" name="name" class="form-control" placeholder="Name">
        </div>
        <div class="form-group">
            Shipping Cost
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">Rp</div>
                </div>
                <input name="shipping_cost" type="number" class="form-control" value="0" min="0">
            </div>
        </div>
        <div class="d-flex flex-column justify-content-center">
            <button type="submit" class="btn btn-outline-primary mb-3">Insert</button>
            @foreach($errors->all() as $e)
                <i class="text-danger text-center">{{$e}}</i>
            @endforeach
        </div>
    </form>
@endsection
