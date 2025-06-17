@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection
@section('title','index.blade.php')

@section('content')
<div class="flea__alert">
    @csrf
    <div class="flea__alert--success">
        <div class="top-buttons">
          <a href="/">おすすめ</a>
        </div>
        <div class="top-buttons">
          <a href="/?page=mylist">マイリスト</a>
        </div>
    </div>
    <div class="">
      <div class="">
        @foreach($products as $product)
        <img src="{{ asset($product->product_img) }}" alt="商品画像"style="width:200px;">
        <a href="">{{$product->product_name}}</a>
        @endforeach
      </div>
    </div>
</div>
@endsection