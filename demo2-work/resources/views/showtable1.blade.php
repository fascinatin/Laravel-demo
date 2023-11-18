<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/table2.css">
</head>
<body>





<div class="rg_layout">
<div class="rg_left">
	<p class="p_reg">管理员信息修改</p>
	<p class="p_en">ADMIN REGISTER</p>
</div>

<div class="rg_center">
	<div class="re_form">
		
    <form id="form1" name="form1" method="post" action="/updatetable1?id={{$data->id}}" >
			<table>
				<tr>
					<td class="td_left"><label for="username">用户名</label></td>
					<td class="td_right"><input type="text" id="name" name="name" value='{{$data->adminname}}'></td>
				</tr>
					
				<tr>
					<td class="td_left"><label for="password">密码</label></td>
					<td class="td_right"><input type="text" id="psw" name="psw" value='{{$data->password}}'></td>
				</tr>
				
				<tr>
					<td class="td_left"><label for="email">联系方式</label></td>
					<td class="td_right"><input type="text" id="phone" name="phone" value="{{$data->phone}}"></td>
					
				</tr>

				<tr>
					
					<td  colspan="2" align="center"><input type="submit" id="btn_sub"  value="更新"></td>
				
				</tr>
				
				
			</table>
			{{csrf_field()}}
		</form>
		
	</div>
	
</div>


<div class="rg_right">
	
</div>
</div>


   
</body>
</html>