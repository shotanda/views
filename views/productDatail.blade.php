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
　　<div class="form-group row">
        @if (session('err_msg'))
            <p class="text-danger">
                {{ session('err_msg') }}
            </p>
        @endif
                 <table class="table table-striped">
                  <tr>
                   <th>id</th>
                   <th>商品名</th>
                   <th>価格</th>
                   <th>在庫数</th>
                   <th>メーカー</th>
                   <th></th>
                   <th></th>
                  </tr>
                  <tr>
                   <td>{{optional($product)->id}}</td>
                   <td>{{optional($product) -> product_name}}</td>
                   <td>{{optional($product) ->price}}</td>
                   <td>{{optional($product) ->stock}}</td>
                   <td>{{optional($product) -> company_name}}</td>
                   <td><button type="submit" class="btn btn-primary"  onclick="location.href
                   ='/product/edit/{{optional($product)->id}}'">編集</td>
                   <td> <form action="/product/delete/{{optional($product)->id}}" method="POST">
                        {{ csrf_field() }}
                        <input type="submit" value="削除" class="btn btn-danger btn-sm btn-dell">
                        </form></td>
                  </tr>

                  </table>
         <a href="/home"><button type="button" class="btn btn-primary">戻る</button></a>
    </div>
</div>
@section('script')
  <script>
  $(function(){
  $(".btn-dell").click(function(){
  if(confirm("本当に削除しますか？")){
  //そのままsubmit（削除）
  }else{
  //cancel
  return false;
  }
  });
  });
  </script>
@endsection

    </body>
   </html>  
@endsection
