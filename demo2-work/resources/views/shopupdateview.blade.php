<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="css/table2.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/materialFormStyles.css">
</head>
<body>



<div class="htmleaf-container">
	<div class="container" id="formOutterWrapper">
		<div class="container" id="formInnerWrapper">
				<form id="materialForm" class="form" method="post" action="/shopupdateview2?id={{$data->id}}" role="form" autocomplete="off">
					<div class="form-group">
						<div class="col-xs-6">
							<label class="labels" for="firstName">商品</label><br>
                            <img src="{{$data->photo}}" alt="" name="photo" width="120">
							<input type="text" class="formInput" id="firstName" name="photo" value='{{$data->photo}}'>
                            
						</div><br>
						<div class="col-xs-6">
							<label class="labels" for="lastName">价　格</label>
							<input type="text" class="formInput" id="lastName" name="price" value='{{$data->price}}'>
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-12">
							<label class="labels" for="description">商品名称</label>
							<input type="text" class="formInput" id="description" name="name" value='{{$data->name}}'>
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-12">
							<button type="submit" class="btn btn-primary green flatButton" id="submit">更新</button>
						</div>
					</div>
                    {{csrf_field()}}
				</form>
		</div>
	</div>
</div>

<script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="js/materialForm.js"></script>
   
</body>
</html>