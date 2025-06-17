@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection
@section('title','item.blade.php')

@section('content')
<div>
    <div>
    <img src="{{ asset($product->product_img) }}" alt="商品画像"style="width:200px;">
    </div>
    <div>
        <h2>{{$product->product_name}}</h2>
        <p></p>
    </div>

</div>