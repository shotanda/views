@extends('layouts.app')

@section('content')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"><!-- Bootstrap本体 -->

</head>
<body>
<div class="container">
    <div class="row justify-content-center">
     <div class="col-md-6">
            <div class="card">
                <div class="card-header">商品登録フォーム
                </div>
         <div class="card-body">
         <form method="POST" action="{{route('store')}}">
         
                        @csrf
            <div class="form-group row">
             <label for="name" class="col-md-4 col-form-label text-md-right" name="product_name">商品名</label>
　　　　　　　　　<input name="product_name">
               </div>
　　　　　　　　　　　　　
            <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right" name="company_name">会社名</label>
            　　<input name="company_name">
             </div>      
              <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right" name="price">価格</label>
                          <input name="price">
                </div>

              <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right" name="stock">在庫数</label>
                          <input name="stock">
                </div>

          
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                             <button type="submit" class="btn btn-primary">
                                    登録
                             </button>
                             <a href="/home"><button type="button" class="btn btn-primary">戻る</button></a>
                            </div>
                        </div>
                     </form> 
                </div>
             </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></><!-- Scripts（Jquery） -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


 </body>
</html>          
@endsection