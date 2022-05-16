@extends('master')
@section('title', 'Flower Details Page')
@section('h1', 'Flower Details')
@section('content')
    <div class="d-flex w-50 m-auto">
        <div>
            <img src="{{\Illuminate\Support\Facades\Storage::url($flower->image_path)}}" style="width:20rem" alt="">
        </div>
        <div class="d-flex flex-column justify-content-center ml-5">
            <h2>{{$flower->name}}</h2>
            <p class="text-secondary text-justify">{{$flower->description}}</p>
            <b class="text-primary">Rp.{{$flower->price}}</b>
            <p>Stock: <b>{{$flower->stock}}</b></p>
            <form method="get" action="{{url('/cart/add/' . $flower->id)}}" class="d-flex">
                <input type="number" name="quantity" class="form-control w-25" value="0" min="0">
                <button type="submit" class="btn btn-outline-success ml-3">Add to Cart</button>
            </form>
            @foreach($errors->all() as $e)
                <i class="text-danger">{{$e}}</i>
            @endforeach
        </div>
    </div>
@endsection
