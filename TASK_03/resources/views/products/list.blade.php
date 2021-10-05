@extends('layouts.app')
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
                <td><a href="/product/edit/{{$product->id}}/{{$product->name}}">Update</a></td>
                <td><a href="/product/delete/{{$product->id}}/{{$product->name}}">Delete</a></td>
            </tr>
        @endforeach
    </table>
@endsection