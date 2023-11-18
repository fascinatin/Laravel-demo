<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>评论</title>
<link rel="stylesheet" href="css/bootstrap.css">
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-1.12.4.js"></script>
<style type="text/css">
	* {
		margin: 0px;
		padding: 0px;
	}

	body {
		/* background: url("img/5bd044fb4b04f.jpg") no-repeat fixed; */
		background-color: #ccc;
		background-size: 100%;
	}

	#qq {
		width: 100%;
		
		height: 170px;
		
		background: #fff;
		
		margin: 50px auto 30px;
		border-radius: 5px;
		
	}

	#qq p {
		font-size: 12px;
		color: #666;
		font-family: "微软雅黑";
		line-height: 45px;
		text-indent: 20px;
	}

	#qq .message {
		width: 560px;
		height: 70px;
		margin: 0 auto;
		overflow: hidden;
		outline: none;
		border: 1px solid #ddd;
		padding: 8px;
		box-sizing: border-box;
		font-size: 14px;
		-webkit-background-clip: text;
		color: black;
		/* background-image: linear-gradient(to right, #778899 0%, #333 100%); */
		/*粗细 风格 颜色*/
	}

	#qq .But {
		width: 560px;
		height: 35px;
		margin: 15px auto 0px;
		position: relative;
		/*相对，参考对象*/
	}

	#qq .But img.bq {
		float: left;
		/*左浮动*/
	}

	#qq .But span.submit {
		width: 80px;
		height: 30px;
		background: #ff8140;
		display: block;
		float: right;
		/*右浮动*/
		line-height: 30px;
		border-radius: 5px;
		cursor: pointer;
		/*手指*/
		color: #fff;
		font-size: 12px;
		text-align: center;
		font-family: "微软雅黑";
	}

	/*face begin*/
	#qq .But .face {
		width: 440px;
		background: #fff;
		border: 1px solid #ddd;
		box-shadow: 0 0 12px #666;
		position: absolute;
		/*绝对定位*/
		top: 21px;
        z-index: 99;
		left: 15px;
		display: none;
		/*隐藏*/
	}

	#qq .But .face ul {
		width: 100%;
		height: 100%;
		display: flex;
		flex-wrap: wrap;
		padding: 8px;
		box-sizing: border-box;
	}

	#qq .But .face ul li {
		width: 30px;
		height: 30px;
		list-style-type: none;
		cursor: pointer;
		display: flex;
		justify-content: center;
		align-items: center;
	}

	/*msgCon begin*/
	.msgCon {
		width: 100%;
		margin: 0px auto;
		margin-bottom:60px;
    }

	.msgCon .msgBox {
		background: #fff;
		padding: 10px;
		box-sizing: border-box;
		margin-top: 16px;
		border-radius: 4px;
	}

	.msgCon .msgBox .headUrl {
		width: 100%;
		height: 60px;
		border-bottom: 1px dotted #ddd;
		display: flex;
		align-items: center;
	}

	.msgCon .msgBox .headUrl img {
		width: 46px;
		height: 46px;
		border-radius: 50%
	}

	.msgCon .msgBox .headUrl div {
		flex: 1;
		display: flex;
		flex-flow: column;
		font-size: 16px;
		margin-left: 16px;
		-webkit-background-clip: text;
		color: black;
		/* background-image: linear-gradient(to top, #b224ef 0%, #7579ff 100%); */
	}

	.msgCon .msgBox .headUrl div .time {
		font-size: 14px;
		margin-top: 6px;
		-webkit-background-clip: text;
		color: #ccc;
		/* background-image: linear-gradient(to right, #74ebd5 0%, #9face6 100%); */
	}

	.msgCon .msgBox .headUrl a {
		font-size: 14px;
		padding: 10px;
		color: salmon;
		cursor: pointer;
	}

	.msgCon .msgBox .msgTxt {
		font-size: 14px;
		color: #666;
		min-height: 40px;
		line-height: 24px;
		padding: 10px;
		box-sizing: border-box;
		word-wrap: break-word;
		-webkit-background-clip: text;
		color: black;
		/* background-image: linear-gradient(to right, #778899 0%, #333 100%); */
	}
    .da{
        min-width: 643px;
        margin: auto;
    }
	/* #time{
		position: relative;
		top: 10px;
		left: 10px;
	} */
	.quxiao a{
		display: inline-block;
		width: 80px;
		height: 30px;
		background: #ff8140;
		line-height: 30px;
		border-radius: 5px;
		cursor: pointer;
		/*手指*/
		color: #fff;
		font-size: 12px;
		text-align: center;
		font-family: "微软雅黑";
		float: right;
		margin-left: 20px;
		
	}
	.quxiao a:hover{
text-decoration: none;
	}
</style>

</head>
<body>
<div class="container da">
<form action="/pinglun" method="post" id="form1" name="form1">
    <div class="row">
        <div id="qq" class="col-md-12 col-sm-12 col-xs-12">
	<p>快点来说点什么吧</p>
    <!-- contentEditable可编辑段落 -->
	<div class="message" contentEditable='true' ></div>
	<div class="But">
		<img src="img/pinlun-img/bba_thumb.gif" class='bq' />
		<span class='quxiao'><a href="/index">取消</a> </span>
		<span class='submit'>发表</span>
		<!--face begin-->
		<div class="face">
			<ul>
				<li><img src="img/pinlun-img/smilea_thumb.gif" title="呵呵]"></li>
				<li><img src="img/pinlun-img/tootha_thumb.gif" title="嘻嘻]"></li>
				<li><img src="img/pinlun-img/laugh.gif" title="[哈哈]"></li>
				<li><img src="img/pinlun-img/tza_thumb.gif" title="[可爱]"></li>
				<li><img src="img/pinlun-img/kl_thumb.gif" title="[可怜]"></li>
				<li><img src="img/pinlun-img/kbsa_thumb.gif" title="[挖鼻屎]"></li>
				<li><img src="img/pinlun-img/cj_thumb.gif" title="[吃惊]"></li>
				<li><img src="img/pinlun-img/shamea_thumb.gif" title="[害羞]"></li>
				<li><img src="img/pinlun-img/zy_thumb.gif" title="[挤眼]"></li>
				<li><img src="img/pinlun-img/bz_thumb.gif" title="[闭嘴]"></li>
				<li><img src="img/pinlun-img/bs2_thumb.gif" title="[鄙视]"></li>
				<li><img src="img/pinlun-img/lovea_thumb.gif" title="[爱你]"></li>
				<li><img src="img/pinlun-img/sada_thumb.gif" title="[泪]"></li>
				<li><img src="img/pinlun-img/heia_thumb.gif" title="[偷笑]"></li>
				<li><img src="img/pinlun-img/qq_thumb.gif" title="[亲亲]"></li>
				<li><img src="img/pinlun-img/sb_thumb.gif" title="[生病]"></li>
				<li><img src="img/pinlun-img/mb_thumb.gif" title="[太开心]"></li>
				<li><img src="img/pinlun-img/ldln_thumb.gif" title="[懒得理你]"></li>
				<li><img src="img/pinlun-img/yhh_thumb.gif" title="[右哼哼]"></li>
				<li><img src="img/pinlun-img/zhh_thumb.gif" title="[左哼哼]"></li>
				<li><img src="img/pinlun-img/x_thumb.gif" title="[嘘]"></li>
				<li><img src="img/pinlun-img/cry.gif" title="[衰]"></li>
				<li><img src="img/pinlun-img/wq_thumb.gif" title="[委屈]"></li>
				<li><img src="img/pinlun-img/t_thumb.gif" title="[吐]"></li>
				<li><img src="img/pinlun-img/k_thumb.gif" title="[打哈气]"></li>
				<li><img src="img/pinlun-img/bba_thumb.gif" title="[抱抱]"></li>
				<li><img src="img/pinlun-img/angrya_thumb.gif" title="[怒]"></li>
				<li><img src="img/pinlun-img/yw_thumb.gif" title="[疑问]"></li>
				<li><img src="img/pinlun-img/cza_thumb.gif" title="[馋嘴]"></li>
				<li><img src="img/pinlun-img/88_thumb.gif" title="[拜拜]"></li>
				<li><img src="img/pinlun-img/sk_thumb.gif" title="[思考]"></li>
				<li><img src="img/pinlun-img/sweata_thumb.gif" title="[汗]"></li>
				<li><img src="img/pinlun-img/sleepya_thumb.gif" title="[困]"></li>
				<li><img src="img/pinlun-img/sleepa_thumb.gif" title="[睡觉]"></li>
				<li><img src="img/pinlun-img/money_thumb.gif" title="[钱]"></li>
				<li><img src="img/pinlun-img/sw_thumb.gif" title="[失望]"></li>
				<li><img src="img/pinlun-img/cool_thumb.gif" title="[酷]"></li>
				<li><img src="img/pinlun-img/hsa_thumb.gif" title="[花心]"></li>
				<li><img src="img/pinlun-img/hatea_thumb.gif" title="[哼]"></li>
				<li><img src="img/pinlun-img/gza_thumb.gif" title="[鼓掌]"></li>
				<li><img src="img/pinlun-img/dizzya_thumb.gif" title="[晕]"></li>
				<li><img src="img/pinlun-img/bs_thumb.gif" title="[悲伤]"></li>
				<li><img src="img/pinlun-img/crazya_thumb.gif" title="[抓狂]"></li>
				<li><img src="img/pinlun-img/h_thumb.gif" title="[黑线]"></li>
				<li><img src="img/pinlun-img/yx_thumb.gif" title="[阴险]"></li>
				<li><img src="img/pinlun-img/nm_thumb.gif" title="[怒骂]"></li>
				<li><img src="img/pinlun-img/hearta_thumb.gif" title="[心]"></li>
				<li><img src="img/pinlun-img/unheart.gif" title="[伤心]"></li>
				<li><img src="img/pinlun-img/pig.gif" title="[猪头]"></li>
				<li><img src="img/pinlun-img/ok_thumb.gif" title="[ok]"></li>
				<li><img src="img/pinlun-img/ye_thumb.gif" title="[耶]"></li>
				<li><img src="img/pinlun-img/good_thumb.gif" title="[good]"></li>
				<li><img src="img/pinlun-img/no_thumb.gif" title="[不要]"></li>
				<li><img src="img/pinlun-img/z2_thumb.gif" title="[赞]"></li>
				<li><img src="img/pinlun-img/come_thumb.gif" title="[来]"></li>
				<li><img src="img/pinlun-img/sad_thumb.gif" title="[弱]"></li>
				<li><img src="img/pinlun-img/lazu_thumb.gif" title="[蜡烛]"></li>
				<li><img src="img/pinlun-img/clock_thumb.gif" title="[钟]"></li>
				<li><img src="img/pinlun-img/cake.gif" title="[蛋糕]"></li>
				<li><img src="img/pinlun-img/m_thumb.gif" title="[话筒]"></li>
				<li><img src="img/pinlun-img/weijin_thumb.gif" title="[围脖]"></li>
				<li><img src="img/pinlun-img/lxhzhuanfa_thumb.gif" title="[转发]"></li>
				<li><img src="img/pinlun-img/lxhluguo_thumb.gif" title="[路过这儿]"></li>
				<li><img src="img/pinlun-img/bofubianlian_thumb.gif" title="[bofu变脸]"></li>
				<li><img src="img/pinlun-img/gbzkun_thumb.gif" title="[gbz困]"></li>
				<li><img src="img/pinlun-img/boboshengmenqi_thumb.gif" title="[生闷气]"></li>
				<li><img src="img/pinlun-img/chn_buyaoya_thumb.gif" title="[不要啊]"></li>
				<li><img src="img/pinlun-img/daxiongleibenxiong_thumb.gif" title="[dx泪奔]"></li>
				<li><img src="img/pinlun-img/cat_yunqizhong_thumb.gif" title="[运气中]"></li>
				<li><img src="img/pinlun-img/youqian_thumb.gif" title="[有钱]"></li>
			</ul>
		</div>
		<!--face end-->
	</div>
</div>
<!--qq end-->
<!--msgCon begin-->
<div class="msgCon col-md-12 col-sm-12 col-xs-12"></div>
<div id='time'></div>
    </div>
</div>

</form>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
	//从缓存中获取数据并渲染
	let msgBoxList = JSON.parse(window.localStorage.getItem('msgBoxList')) || [];
	innerHTMl(msgBoxList)
	
	//点击小图片，显示表情
	$(".bq").click(function (e) {
		$(".face").slideDown(); //慢慢向下展开
		e.stopPropagation(); //阻止冒泡事件
	});

	//在桌面任意地方点击，关闭表情框
	$(document).click(function () {
		$(".face").slideUp(); //慢慢向上收
	});

	//点击小图标时，添加功能
	$(".face ul li").click(function () {
		let simg = $(this).find("img").clone();
		$(".message").append(simg); //将表情添加到输入框
	});

	//点击发表按扭，发表内容
	$("span.submit").click(function () {
		let txt = $(".message").html(); //获取输入框内容
		if (!txt) {
			$('.message').focus(); //自动获取焦点
			return;
		}
		let obj = {
			msg: txt
		}
		msgBoxList.unshift(obj) //添加到数组里
		window.localStorage.setItem('msgBoxList', JSON.stringify(msgBoxList)) //将数据保存到缓存
		innerHTMl([obj]) //渲染当前输入框内容
		$('.message').html('') // 清空输入框

	});

	//删除当前数据
	$("body").on('click', '.del', function () {
		let index = $(this).parent().parent().index();
		msgBoxList.splice(index, 1)
		window.localStorage.setItem('msgBoxList', JSON.stringify(msgBoxList)) //将数据保存到缓存
		$(this).parent().parent().remove()
	})

	//渲染html
	function innerHTMl(List) {
		
	
		List = List || []
		List.forEach(item => {

			let str =
				`<div class='msgBox'>
					<div class="headUrl">
						<img src='img/pinlun-img/tx.jpg' width='50' height='50'>
						<div>
							<span class="title">{{$data[0]->username}}</span>
							<span class="time" id="date"></span>
						</div>
						<a class="del">删除</a>
					</div>
					<div class='msgTxt' >
						${item.msg}
					</div>
				</div>`
			$(".msgCon").prepend(str);
		})
	}
	
// var time = new Date()
// var timea=time.toLocaleString()
// console.log(time.toLocaleString())


// 	var a=time.toLocaleString();//以下为两种在页面上显示变量值的方式
// 	// document.write(a);//1、页面上显示a的值“123”
// 	document.getElementById('time').innerHTML = a;//2、在div节点上显示

function updateDate() {
        const now = new Date();
        const dateDiv = document.getElementById('date');
        dateDiv.innerText = now.toLocaleDateString();
      }

      setInterval(updateDate, 1000); // 每秒钟更新一次时间
 
</script>

</body>
</html>