@extends('layouts.cus')
@section('content')

    <table class="table table-borded">
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Description</th>
            <th></th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->quantity}}</td>
                <td>{{$product->description}}</td>
                <td><a href=>Add to cart</a></td>
            </tr>
        @endforeach
    </table>
@endsection