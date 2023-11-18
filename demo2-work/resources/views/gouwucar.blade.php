<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>我的购物车</title>
    <meta name="description" content="" />
    <meta name="Keywords" content="" />
    <link rel="stylesheet" href="css/shopping.css">
    <!-- 引入facicon.ico网页图标 -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <!-- 引入css 初始化的css 文件 -->
    <link rel="stylesheet" href="css/base.css">
    <!-- 引入公共样式的css 文件 -->
    <link rel="stylesheet" href="css/common.css">
    <!-- 引入car css -->
    <link rel="stylesheet" href="css/car.css">
    <!-- 先引入jquery  -->
    <link rel="stylesheet" href="css/bootstrap.css">
   <script src="js/jquery-1.12.4.js"></script>
   <script src="js/cookes.js"></script>
</head>

<body>
    <!-- 顶部快捷导航start -->
    <div class="shortcut col-md-12 col-sm-12">
        <div class="w">
            <div class="fl">
                <ul>
                    <li>伊人名妆欢迎您!</li>
                    <li>
                        <a href="#">请登录</a>
                        <a href="#" class="style-red">免费注册</a>
                    </li>
                </ul>
            </div>
            <div class="fr">
                <ul>
                    <li><a href="#">我的订单</a></li>
                    <li class="spacer"></li>
                    <li>
                        <a href="#">我的收藏</a>
                    </li>
                    <li class="spacer"></li>
                    <li><a href="#">我的会员</a></li>
                    <li class="spacer"></li>
                    <li><a href="#">企业采购</a></li>
                    <li class="spacer"></li>
                    <li><a href="#">关注铺子</a></li>
                    <li class="spacer"></li>
                    <li><a href="#">客户服务</a></li>
                    <li class="spacer"></li>
                    <li><a href="#">网站导航</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- 顶部快捷导航end  -->


    <div class="car-header">
        <div class="w">
            <div class="car-logo">
                <a href="/index"><img src="img/logo0.png" alt=""> </a><b>购物车</b>
            </div>
        </div>
    </div>

    </div>
    <div class="c-container">
        <div class="w">
            <div class="cart-filter-bar">
                <em>全部商品</em>
            </div>
            <!-- 购物车主要核心区域 -->
            <div class="container">
            <!-- <h3><a href="/index">返回商品列表页面</a></h3> -->
            <table id="table" border="1" cellspacing="0" cellpadding="0" class="hide" width="100%">
                <thead>
                    <tr>
                        <th>
                            <input type="checkbox" id="allCheck" class="ck" />全选
                        </th>
                        <th>
                            商品图片
                        </th>
                        <th>
                            描述
                        </th>
                        <th>
                            数量
                        </th>
                        <th>
                            单价
                        </th>
                        <th>
                            小计
                        </th>
                        <th>
                            操作
                        </th>
                    </tr>
                </thead>
                <tbody id="tbody">
                 
                </tbody>
            </table>
            <div class="box" id="box">购物车里没有任何商品</div>
            <h4 id="h2" class="zongjia">合计（不含运费）：￥<span id="totalPrice">0</span> <button class="jiesuan">结算</button></h4>
           
        </div>
        <script src="js/serve.js" type="text/javascript" charset="utf-8"></script>
        <!--操作购物车页面的cart.js-->
        <script src="js/cartt.js"></script>
        </div>

    </div>
<script>
   $(".jiesuan").click(function(){
    alert("下单成功");
});
</script>
   <!-- 底部开始  -->
<div class="container-fluid">
    <div class="footer-bottom">
       <div class="row">
           <div class="col-md-3 col-sm-6 col-xs-6 footer-b">
               <img class="icon-box" src="img/discount-new.webp" alt="">
               <p style="color: white; font-size: 12px;">独家优惠</p>
               <p style="color: #808080; font-size: 12px;">独家在线产品和特权</p>
           </div>
           <div class="col-md-3 col-sm-6 col-xs-6 footer-b">
               <img class="icon-box" src="img/lock-new.webp" alt="">
               <p style="color: white; font-size: 12px;">正品保证</p>
               <p style="color: #808080; font-size: 12px;">官方直供原装</p>
           </div>
           <div class="col-md-3 col-sm-6 col-xs-6 footer-b">
               <img class="icon-box" src="img/mail-new.webp" alt="">
               <p style="color: white; font-size: 12px;">免费顺丰速递</p>
               <p style="color: #808080; font-size: 12px;">港澳台偏远地区除外亦可提供普通快递服务</p>
           </div>
           <div class="col-md-3 col-sm-6 col-xs-6 footer-b">
               <img class="icon-box" src="img/gift-new.webp" alt="">
               <p style="color: white; font-size: 12px;">高定礼盒</p>
               <p style="color: #808080; font-size: 12px;">尊享YSL高定礼盒包装甄享官网专属定制服务</p>
           </div>
       </div>
       <div class="row">
           <div class="col-md-2 hidden-sm hidden-xs footer-c">
               <ul>
                   <li><a href="#">彩妆</a></li>
                   <li><a href="#">面部</a></li>
                   <li><a href="#">唇部</a></li>
                   <li><a href="#">眼部</a></li>
               </ul>
           </div>
           <div class="col-md-2 hidden-sm hidden-xs footer-c">
               <ul>
                   <li><a href="#">香水</a></li>
                   <li><a href="#">男士香水</a></li>
                   <li><a href="#">女士香水</a></li>
                   <li><a href="#">高定香水</a></li>
               </ul>
           </div>
           <div class="col-md-2 hidden-sm hidden-xs footer-c">
               <ul>
                   <li><a href="#">护肤</a></li>
                   <li><a href="#">按产品分类</a></li>
                   <li><a href="#">按功能分类</a></li>
                   <li><a href="#">按系列分类</a></li>
               </ul>
           </div>
           <div class="col-md-2 hidden-sm hidden-xs footer-c">
               <ul>
                   <li><a href="#">关注我们</a></li>
                   <li><a href="#"><i class="fa fa-book" aria-hidden="true"></i>小红书</a></li>
                   <li><a href="#"><i class="fa fa-weibo" aria-hidden="true"></i>微博</a></li>
                   <li><a href="#"><i class="fa fa-weixin" aria-hidden="true"></i>微信</a></li>
                   <li><a href="#"> <i class="fa fa-youtube" aria-hidden="true"></i>抖音</a></li>
                   
               </ul>
           </div>
           <div class="col-md-2 hidden-sm hidden-xs footer-c">
               <ul>
                   <li><a href="#">联系我们</a></li>
                   <li><a href="#">在线客服</a></li>
                   <li><a href="#">电话：400-802-6360</a></li>
                  
               </ul>
           </div>
           <div class="col-md-2 hidden-sm hidden-xs footer-c">
               <ul>
                   <li><a href="#">新品推荐</a></li>
                   <li><a href="#">大眼睛睫毛膏</a></li>
                   <li><a href="#">鎏金箔缎唇膏</a></li>
                   <li><a href="#">挚宠双芯唇膏</a></li>
               </ul>
           </div>
           
       </div>
       <div class="footer-boder"></div>
       <div class="row footer-k">
           <div class="col-md-7 col-md-offset-1  footer-d">
               <div >国家药监局提示您：宣称用于祛斑美白、防晒、染发、烫发等的化妆品为特殊用途化妆品，产品标签上应标注“国妆特字”或者“国妆特进字”的标准文号。</div>
               <div style="margin-top: 20px;">
                   © 欧莱雅（中国）有限公司  中国工商    沪ICP备08100043号-28  沪公网安备 31010602001529号
               </div>
           </div>
           <div class="col-md-4 footer-d">
   <div>Cookies政策 使用条款 隐私政策 网站地图</div>
   <div>学号：202103130394 21软件5班 谢胜伟</div>
           </div>
       </div>
 
 
   </div>
 </div>
 
 <!-- 底部结束 -->

</body>

</html>