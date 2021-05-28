@extends('product-layout')
@section('includes/menu')
@endsection
@section('main')

<h1>{{$product->product_name}}</h1>
<p>{{$product->product_desc}}</p>
<p>{{$product->price}}</p>
<h3><a href="/">Go to home page</a></h3>
@endsection

    