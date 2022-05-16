@extends('master')
@section('title', 'Home Page')
@section('h1', 'Catalog')
@section('content')
    <div class="d-flex justify-content-center mt-3">
        <form class="form-inline" action="{{url('/search')}}" method="get">
            <input name="keyword" class="form-control mr-sm-2" type="search" placeholder="I want to buy..." aria-label="Search" />
            <button class="btn btn-outline-dark">Search</button>
        </form>
    </div>
    <div class="flower-container">
        @foreach($flower as $f)
            <div class="card bg-light mb-3 flower-card border border-warning">
                <div class="card-body">
                    <div class="flower-card-body">
                        <img class="card-img-top" src="{{\Illuminate\Support\Facades\Storage::url($f->image_path)}}" alt="" />
                        <div class="m-3">
                            <h4 class="card-title text-center">{{$f->name}}</h4>
                            <p class="card-text text-justify text-secondary">{{$f->description}}</p>
                            <p class="card-subtitle text-center text-primary mt-3"><b>Rp.{{$f->price}}</b></p>

                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-outline-info" href="{{url('/flower/detail/' . $f->id)}}">Details</a>
{{--                        @if(auth()->check())--}}
                            <a class="btn btn-outline-success ml-3" href="{{url('/cart/add/' . $f->id . '?quantity=1')}}">Order</a>
{{--                        @endif--}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="middle">
        {{$flower->links()}}
    </div>


@endsection
