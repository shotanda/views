@extends('layouts.app')

@section('content')
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
      <div class="card">
                <div class="card-header">商品編集フォーム
                </div>
         <div class="card-body">
            <form method="POST" action="{{route('update')}}">
                        @csrf
             <input type="hidden" name="id" value="{{$product->id}}">
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
                             <button type="submit" class="btn btn-primary">
                                    変更する
                             </button>
                             <a href="/home"><button type="button" class="btn btn-primary">戻る</button></a>
             </form> 
          </div>
      </div>
    </div>
  </div>
    
   </body>
  </html>
@endsection