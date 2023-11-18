<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="subbox">
    <div class="title">
        <h3>商品更新</h3>
    </div>
    <table>
                	  <thead>
                		<tr>
                		  <th>商品</th>
                		  <th>商品名称</th>
                		  <th>商品价格</th>
                          <th style="width:100px">编辑</th>
                		</tr>
                	  </thead>
                	  <tbody>
                      @foreach($data9 as $val)
                <tr>
                <td><img src="{{$val->photo}}" width="100"></td>
                <td style="color:black;padding-left:15px;">{{$val->name}}</td>
                <td style="color:black">￥{{$val->price}}</td>
                <td style="text-align: center;">
                    <a href="/shopupdateview?id={{$val->id}}">更新</a>
                    <a href="/deleteshop?id={{$val->id}}" style="margin-left:5px">删除</a>
                 </td>

                </tr>
                @endforeach
                	  </tbody>
            </table>
            {{$data9->links()}}
</div>

</body>
</html>