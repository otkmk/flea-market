@extends('layouts.app')

@section('content')
<div>
    <div>
        <img src="{{ $product->product_img }}" alt="商品画像" style="width:300px;">
    </div>
    <div>
        <h1>{{ $product->product_name }}</h1>
    </div>
    <div>
        <p>ブランド名</p>
    </div>
    <div>
        <p>￥{{ number_format($product->price) }}（税込）</p>
    </div>
    <div>
        <div>
            <p>いいね</p>
            <p>コメント</p>
        </div>
    </div>
    <div>
        <a href="#" class="" >購入</a>
    </div>
    <div>
        <div>
            <h2>商品説明</h2>
            <p>{{ $product->description }}</p>
            <p>{{ $product->condition }}</p>
        </div>
    </div>
</div>


