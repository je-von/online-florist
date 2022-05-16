@extends('master')
@section('title', 'Manage Flower Types Page')
@section('h1', 'Manage Flower Types')
@section('content')
    <div class="middle">
        <a class="btn btn-outline-primary" href="{{url('/flower-type/insert')}}">Insert Flower Type</a>
    </div>
    <div class="d-flex justify-content-center mt-3">
        <form class="form-inline" action="{{url('/flower-type/manage/search')}}" method="get">
            <input name="keyword" class="form-control mr-sm-2" type="search" placeholder="I want to find..." aria-label="Search" />
            <button class="btn btn-outline-dark">Search</button>
        </form>
    </div>

    <div class="flower-container">
        @foreach($flower_type as $f)
            <div class="card bg-light mb-3 flower-card border border-warning">
                <div class="card-body">
                    <div class="flower-card-body">
                        <div class="m-3">
                            <h4 class="card-title text-center">{{$f->type_name}}</h4>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-outline-success mr-3" href="{{url('/flower-type/update/' . $f->id)}}">Update</a>
                        <a class="btn btn-outline-danger" href="{{url('/flower-type/delete/' . $f->id)}}">Delete</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="middle">
        {{$flower_type->links()}}
    </div>
@endsection
