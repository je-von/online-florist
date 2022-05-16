@extends('master')
@section('title', 'Manage Users Page')
@section('h1', 'Manage Users')
@section('content')
    <div class="w-75 mx-auto">
        <table class="table text-center">
            <thead>
            <tr>
                <th scope="col">Picture</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Gender</th>
                <th scope="col">Address</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $u)
                <tr>
                    <td><img src="{{\Illuminate\Support\Facades\Storage::url($u->profile_pic_path)}}" style="width:10rem" alt=""></td>
                    <td><p>{{$u->name}}</p></td>
                    <td><p>{{$u->email}}</p></td>
                    <td><p>{{$u->phone}}</p></td>
                    <td><p>{{$u->gender}}</p></td>
                    <td><p>{{$u->address}}</p></td>
                    <td class="d-flex flex-column">
                        <a class="btn btn-outline-success mb-3" href="{{url('/user/update/' . $u->id)}}">Update</a>
                        <a class="btn btn-outline-danger" href="{{url('/user/delete/' . $u->id)}}">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
