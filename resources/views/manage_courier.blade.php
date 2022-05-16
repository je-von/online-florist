@extends('master')
@section('title', 'Manage Couriers Page')
@section('h1', 'Manage Couriers')
@section('content')
    <div class="middle">
        <a class="btn btn-outline-primary" href="{{url('/courier/insert')}}">Insert Courier</a>
    </div>
    <div class="d-flex justify-content-center mt-3">
        <form class="form-inline" action="{{url('/courier/manage/search')}}" method="get">
            <input name="keyword" class="form-control mr-sm-2" type="search" placeholder="I want to find..." aria-label="Search" />
            <button class="btn btn-outline-dark">Search</button>
        </form>
    </div>

    <div class="flower-container">
        @foreach($courier as $c)
            <div class="card bg-light mb-3 flower-card border border-warning">
                <div class="card-body">
                    <div class="flower-card-body">
                        <div class="m-3">
                            <p class="card-subtitle text-center">ID: {{$c->id}}</p>
                            <h4 class="card-title text-center">{{$c->name}}</h4>
                            <p class="card-subtitle text-center">Cost: Rp.{{$c->shipping_cost}}</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-outline-success mr-3" href="{{url('/courier/update/' . $c->id)}}">Update</a>
                        <a class="btn btn-outline-danger" href="{{url('/courier/delete/' . $c->id)}}">Delete</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="middle">
        {{$courier->links()}}
    </div>
@endsection
