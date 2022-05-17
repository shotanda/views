@extends('layouts.app')

@section('content')
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"><!-- Bootstrap本体 -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
    </head>
<body>
<div id="light-pagination" class="pagination">
                                <table class="table table-striped">
                                <thead>
                                <tr>
                                <th id="0"><a href="/home?sort=id">id<span id="sort0" sort=""></span></th>
                                <th id="1"><a href="/home?sort=product_name">商品名<span id="sort1" sort=""></span></th>
                                <th id="2"><a href="/home?sort=price" id="stock">価格<span id="sort2" sort=""></span></th>
                                <th id="3"><a href="/home?sort=stock">在庫数<span id="sort3" sort=""></span></th>
                                <th id="4"><a href="/home?sort=company_name">メーカー<span id="sort4" sort=""></span></th>
                                <th></th>
                                <th></th>
                                </tr>
                                </thead>
                                @foreach ($products as $product)
                                <tbody>
                                <tr>
                                <td>{{optional($product)->id}}</td>
                                <td><a href="/product/{{$product->id}}">{{optional($product) -> product_name}}</a></td>
                                <td>{{optional($product)->price}}</td>
                                <td>{{optional($product)->stock}}</td>
                                <td>{{optional($product) -> company_name}}</td>
                                <td><button type="submit" class="btn btn-primary"  onclick="location.href
                                ='/product/edit/{{$product->id}}'">編集</td>
                                <td><form action="/product/delete/{{$product->id}}" method="POST" id="delete"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <button id="button" class="btn btn-primary">削除</button>
</rorm></td>
                                </tr>
                                </tr>
                                </tbody>
                                @endforeach
                                </table>
                              </div> 
</body>
</html>  


@endsection
