@extends('master')
@section('title', 'Update Flower Page')
@section('h1', 'Update Flower')
@section('content')
    <form action="" method="post" class="w-25 m-auto" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            Flower Name
            <input type="text" name="name" class="form-control" placeholder="Name" value="{{$current_flower->name}}">
        </div>
        <div class="form-group">
            Flower Type
            <select name="type" class="form-control">
                @foreach($flower_type as $ft)
                    <option value="{{$ft->id}}"
                        @if($ft->id == $current_flower->flower_type_id)
                            selected="selected"
                        @endif
                    >{{$ft->type_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            Flower Price
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">Rp</div>
                </div>
                <input name="price" type="number" class="form-control" value="{{$current_flower->price}}" min="0">
            </div>
        </div>
        <div class="form-group">
            Flower Stock
            <input type="number" name="stock" class="form-control" value="{{$current_flower->stock}}" min="0">
        </div>
        <div class="form-group">
            Description
            <textarea placeholder="Description" name="description" id="" rows="3" class="form-control" style="resize: none">{{$current_flower->description}}</textarea>
        </div>
        <div class="form-group">
            Image
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
