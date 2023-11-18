<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/table.css">
</head>
<body>

<div class="subbox">
    <div class="title">
        <h3>普通用户管理</h3>
    </div>
	<table>
	  <thead>
		<tr>
		  <th>用户名</th>
		  <th>密码</th>
		  <th>联系方式</th>
		  <th>编辑</th>
		</tr>
	  </thead>
	  <tbody>
      @foreach($data as $a)
    <tr>
    <td>{{$a->username}}</td>
    <td>{{$a->password}}</td>
    <td>{{$a->phone}}</td>
    <td style="text-align: center;">
     <a href="./showtable?id={{$a->userid}}">修改</a>
     <a href="./delete?id={{$a->userid}}" style="margin-left:5px">删除</a>
    </td>

    </tr>
    @endforeach
	  </tbody>
	</table>
</div>






<div class="subbox">
    <div class="title">
        <h3>管理员管理</h3>
    </div>
	<table>
	  <thead>
		<tr>
		  <th>用户名</th>
		  <th>密码</th>
		  <th>联系方式</th>
		  <th>编辑</th>
		</tr>
	  </thead>
	  <tbody>
      @foreach($data1 as $b)
    <tr>
    <td>{{$b->adminname}}</td>
    <td>{{$b->password}}</td>
    <td>{{$b->phone}}</td>
    <td> 
      <a href="./showtable1?id={{$b->id}}">修改</a>
      <a href="./delete1?id={{$b->id}}" style="margin-left:5px">删除</a>
     </td>

    </tr>
    @endforeach
	  </tbody>
	</table>
</div>



</body>
</html>