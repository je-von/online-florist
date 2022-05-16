@extends('master')
@section('title', 'Cart Page')
@section('h1', 'Cart')
@section('content')
<div class="w-75 mx-auto">
    <table class="table text-center">
        <thead>
        <tr>
            <th scope="col">Picture</th>
            <th scope="col">Name</th>
            <th scope="col">Quantity</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @if($cart !== null)
            @foreach($cart->cartDetail as $cd)
                <tr>
                    <td><img src="{{\Illuminate\Support\Facades\Storage::url($cd->flower->image_path)}}" style="width:10rem" alt=""></td>
                    <td><p>{{$cd->flower->name}}</p></td>
                    <td><p>{{$cd->quantity}}</p></td>
                    <td><p>Rp.{{$cd->flower->price}}</p></td>
                    <td><a class="btn btn-outline-danger" href="{{url('/cart/remove/' . $cd->flower_id)}}">Remove</a></td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    @if($cart !== null)
    <form action="/checkout" method="post">
        {{csrf_field()}}
        <table class="table table-borderless w-50">
            <tbody>
            <tr>
                <th scope="row" class="text-right">Courier</th>
                <td>
                    <select name="courier" class="form-control w-75">
                        @foreach($courier as $c)
                            <option value="{{$c->id}}">{{$c->name}} - Rp.{{$c->shipping_cost}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th scope="row" class="text-right">Total Price</th>
                <td>Rp.{{$cart->cartDetail->sum(function($d) {
                            return $d->quantity * $d->flower->price;
                        })}}
                </td>
            </tr>
            <tr>
                <td colspan="2" class="text-center">
                    <button type="submit" class="btn btn-outline-primary">Checkout</button>
                </td>
            </tr>
        </table>
    </form>
    @endif
</div>
@endsection
