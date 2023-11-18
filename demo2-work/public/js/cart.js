// 购物车
				
var domSearchInput = document.querySelector(".shopwrap");
var domSearchResult = document.querySelector(".detail-car");

//添加监听事件

domSearchInput.oninput = function () {
	domSearchResult.style.color = "#333";
	var str = "";
	//获取输入的值
	var val = domSearchInput.value;
	console.log(val);

	//值的判断
	val = val.trim(); //去除两边空格

	val = val.split(" ");
	console.log(val);

	var resultVal = search.filter((item) => {
		for (var j = 0; j < val.length; j++) { //循环遍历输入框的多个词
			if (item.includes(val[j]) && Boolean(val[j])) {
				return true;
			}
		}
	})



	//赋值
	for (var i = 0; i < resultVal.length; i++) {
		str += "<li>" + resultVal[i] + "</li>";
	}
	domSearchResult.innerHTML = str;
}

//shop

var addCar = document.querySelectorAll(".detail-car");
var car = document.querySelector(".right").querySelector("a");
var pri = document.querySelectorAll(".price");
var numc = document.querySelector(".numc");
var cartlist = [];
// localStorage.clear()
var tmpCartList = window.localStorage.getItem("cartlist");

//添加数据

if (tmpCartList) {
	tmpCartList = JSON.parse(tmpCartList);
	cartlist = tmpCartList;
	numc.innerHTML = cartlist.length;
	changeValue();
}



//写入缓存
function changeValue() {
	numc.innerHTML = cartlist.length;
	let strCartList = JSON.stringify(cartlist);
	window.localStorage.setItem("cartlist", strCartList);
}


for (let i = 0; i < addCar.length; i++) {

	addCar[i].addEventListener("click", function () {
		this.innerHTML = "已添加";
		this.style.background = "rgb(172, 13, 13)";
		this.style.color = "#fff";
		let num = 1;
		//获取文本
		let title = this.parentNode.parentNode.querySelector(".detail-title").innerHTML;
		//获取价格
		let prices = Number(pri[i].innerHTML.substr(1));


		let infor = {
			"id": i,
			"title": title,
			"price": prices,
			"num": num,
			"check": 1,
		};
		let has = 0;

		//判断是否重复值
		for (let k = 0; k < cartlist.length; k++) {
			if (cartlist[k].id == i) {
				has = 1;
				num = cartlist[k].num++;
				break;
			}
		}
		if (has == 0) {
			cartlist.push(infor);
		}
		changeValue();
	});
}
// localStorage.clear();
var usevalue = window.localStorage.getItem("username");
if (usevalue == null || usevalue.length <= 0) {
	usevalue = "请登录";
}


$("#header-user").html(usevalue);
if ($("#header-user").html() == "请登录") {
	var timerUser = setInterval(function () {
		// alert("请登录博汇商城，满足你的需求");
	}, 36000);
} else {
	clearInterval(timerUser);
}