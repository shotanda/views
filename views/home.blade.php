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

<div class="container">
    <div class="row justify-content-center">
    　<div class="col-md-7">
            <div class="card-body">
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="form-group row">
                    <button type="submit" class="btn btn-primary" onclick="location.href='{{route('create')}}'">
                                    新規登録
                    </button>
                    </div>
                    
                    

                    <div class="form-group">
<input type="text" id="product_name" name="product_name" class="form-control">  
<button type="button" id="keyword" class="btn btn-info">
検索
</button>    
</div>

<div class="form-group now">
  価格
 <input type="text" name="minPrice" value="" id="minPrice">以上
 <input type="text" name="maxPrice" value="" id="maxPrice">
 <button type="button" id="searchprice" class="btn btn-info">
検索
</button> 
</div>

<div class="form-group now">
  在庫数
 <input type="text" name="minStock" value="" id="minStock">以上
 <input type="text" name="maxStock" value="" id="maxStock">
 <button type="button" id="searchstock" class="btn btn-info">
検索
</button> 


<div class="p-3 mb-3 bg-primary text-white rounded">検索結果</div>

<table class="table">
      <tbody>
      <tr>
          <th>商品名</th>
          <td id="id">商品id</td>
        </tr>
        <tr>
          <th>商品名</th>
          <td id="names">検索結果の商品名</td>
        </tr>
        <tr>
          <th>会社名</th>
          <td id="company_name">検索結果の会社名</td>
        </tr>
        <tr>
          <th>在庫</th>
          <td id="stock">検索結果の在庫</td>
        </tr>
        <tr>
          <th>値段</th>
          <td id="price">検索結果の値段</td>
        </tr>
      </tbody>
    </table>

    
  </div>




  <div id="modal-content">
    @parent
</div>

<div class="form-group row">
                                <table class="table table-striped">
                                <tr>
                                <th><a href="/home?sort=id">id</th>
                                <th><a href="/home?sort=product_name">商品名</th>
                                <th><a href="/home?sort=price">価格</th>
                                <th><a href="/home?sort=stock">在庫数</th>
                                <th><a href="/home?sort=company_name">メーカー</th>
                                <th></th>
                                <th></th>
                                </tr>
                                @foreach ($products as $product)
                                <tr>
                                <td>{{$product->id}}</td>
                                <td><a href="/product/{{$product->id}}">{{$product -> product_name}}</a></td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->stock}}</td>
                                <td>{{$product -> company_name}}</td>
                                <td><button type="submit" class="btn btn-primary"  onclick="location.href
                                ='/product/edit/{{$product->id}}'">編集</td>
                                <td> <form action="/product/delete/{{$product->id}}" method="POST" id="result" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <button type="button" id="delete" class="btn btn-primary"> 
                                            削除
                                        </button>
                                    <div id="ok"></div>
                                    </form></td>
                                </tr>
                                </tr>
                                @endforeach
                                {{ $products->links() }}
                                </table>
                            </div>
                            </div>  
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{('js/home.js') }}"></script>

</body>
   </html>  


@endsection
