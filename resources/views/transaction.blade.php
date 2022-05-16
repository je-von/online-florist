@extends('master')
@section('title', 'Transaction History Page')
@section('h1', 'Transaction History')
@section('content')
    <div class="w-75 mx-auto">
        @foreach($transaction as $t)
            <p>Transaction ID: {{$t->id}}</p>
            <p>Transaction Date: {{$t->transaction_date}}</p>
            <p>Member Name: {{$t->user->name}}</p>
            <p>Courier: {{$t->courier->name}}</p>
            <table class="table text-center mb-5">
                <thead>
                <tr>
                    <th scope="col">Picture</th>
                    <th scope="col">Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($t->transactionDetail as $td)
                        <tr>
                            <td><img src="{{\Illuminate\Support\Facades\Storage::url($td->flower->image_path)}}" style="width:10rem" alt=""></td>
                            <td><p>{{$td->flower->name}}</p></td>
                            <td><p>{{$td->quantity}}</p></td>
                            <td><p>Rp.{{$td->flower->price}}</p></td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="3" class="text-right"><b>Total Price</b></td>
                        <td><b>Rp.{{$t->transactionDetail->sum(function($d) {
                                        return $d->quantity * $d->flower->price;
                                    })}}
                        </b></td>
                    </tr>
                </tbody>
            </table>
            <hr>
        @endforeach
    </div>
@endsection
