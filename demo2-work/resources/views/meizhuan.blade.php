<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>美妆馆</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="css/meizhuan.css">
   <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
</head>
<body>
   
<!-- 头部开始    -->

<header class="header fixed-top">

   <div class="container">

      <div class="row align-items-center">

         <a href="/index" class="logo mr-auto"> <i class="fa fa-home" aria-hidden="true"></i> 美妆馆 </a>

         <nav class="nav">
            <a href="/index">主页</a>
            <a href="#about">唇釉系列</a>
            <a href="#menu">新品</a>
            <a href="#gallery">底妆</a>
            <a href="#reviews">SK-II系列</a>
            <a href="#blogs">挚爱美礼</a>
         </nav>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="login-btn" class="fas fa-user"></div>
         </div>

      </div>

   </div>

</header>

<!-- 登录开始 -->

<div class="login-form">

   <form action="">
      <div id="close-login-form" class="fas fa-times"></div>
      <a href="#" class="logo mr-auto"> <i class="fa fa-home" aria-hidden="true"></i> 美妆馆 </a>
      <h3>开启美好的一天</h3>
      <input type="email" name="" placeholder="亲 请输入你的账号" id="" class="box">
      <input type="password" name="" placeholder="亲 请输入你的密码" id="" class="box">
      <div class="flex">
         <input type="checkbox" name="" id="remember-me">
         <label for="remember-me">记住密码</label>
         <a href="#">忘记密码</a>
      </div>
      <input type="submit" value="登录" class="link-btn">
      <p class="account">没有账号 <a href="#">创建账号!</a></p>
   </form>

</div>

<!-- 登录结束 -->

<!--头部结束    -->

<!-- 主页开始  -->

<section class="home" id="home">

   <div class="container">

      <div class="row align-items-center text-center text-md-left min-vh-100">
         <div class="col-md-6">
            <span>美丽不设限</span>
            <h3>618盛典至美启幕</h3>
            <a href="#" class="link-btn">现货开抢</a>
         </div>
      </div>

   </div>

</section>

<!-- 主页结束 -->

<!-- 关于开始  -->

<section class="about" id="about">

   <div class="container">

      <div class="row align-items-center">
         <div class="col-md-6">
            <img src="{{$data[0]->img}}" alt="">
         </div>
         <div class="col-md-6">
            <span>{{$data[0]->name}}</span>
            <h3 class="title">{{$data[0]->price}}</h3>
            <p> {{$data[0]->content}}</p>
            <a href="#" class="link-btn">立即购买</a>
            <div class="icons-container">
               <div class="icons">
                  <i class="fas fa-coffee"></i>
                  <h3>三天无理由退货</h3>
               </div>
               <div class="icons">
                  <i class="fas fa-shipping-fast"></i>
                  <h3>顺丰速运</h3>
               </div>
               <div class="icons">
                  <i class="fas fa-headset"></i>
                  <h3>客服24小时在线</h3>
               </div>
            </div>
         </div>
      </div>

   </div>

</section>

<!-- 关于结束 -->

<!--新品上市开始  -->

<section class="menu" id="menu">

   <h1 class="heading"> 新品上市 </h1>

   <div class="container box-container">

      <div class="box">
         <img src="{{$data[1]->img}}" alt="">
         <h3>{{$data[1]->name}}</h3>
         <p>{{$data[1]->content}}</p>
         <a href="#" class="link-btn">了解详情</a>
      </div>

      <div class="box">
         <img src="{{$data[2]->img}}" alt="">
         <h3>{{$data[2]->name}}</h3>
         <p>{{$data[2]->content}}
            </p>
         <a href="#" class="link-btn">了解详情</a>
      </div>

      <div class="box">
         <img src="{{$data[3]->img}}" alt="">
         <h3>{{$data[3]->name}}</h3>
         <p>{{$data[3]->content}}</p>
         <a href="#" class="link-btn">了解详情</a>
      </div>

      <div class="box">
         <img src="{{$data[4]->img}}" alt="">
         <h3>{{$data[4]->name}}     </h3>
         <p>{{$data[4]->content}}</p>
         <a href="#" class="link-btn">了解详情</a>
      </div>

      <div class="box">
         <img src="{{$data[5]->img}}" alt="">
         <h3>{{$data[5]->name}}</h3>
         <p> {{$data[5]->content}}</p>
         <a href="#" class="link-btn">了解详情</a>
      </div>

      <div class="box">
         <img src="{{$data[6]->img}}" alt="">
         <h3>{{$data[6]->name}}</h3>
         <p>{{$data[6]->content}}</p>
         <a href="#" class="link-btn">了解详情</a>
      </div>

   </div>

</section>

<!-- 新品上市结束 -->

<!-- 底妆开始  -->

<section class="gallery" id="gallery">

   <h1 class="heading"> 底妆 </h1>

   <div class="box-container container">

      <div class="box">
         <img src="img/35.webp" alt="">
         <div class="content">
            <h3> 2 合 1 高光轮廓调色板</h3>
            <p>使用哑光高光色调填充面部凹痕，自然提亮鼻梁和眼下区域，从而形成容光焕发和清晰的面部结构</p>
            <a href="#" class="link-btn">了解更多</a>
         </div>
      </div>

      <div class="box">
         <img src="img/1_36b78870-e1e8-4702-b478-26ed17d7474b_640x.webp" alt="">
         <div class="content">
            <h3> 2 合 1 高光轮廓调色板</h3>
            <p>使用轮廓色调来塑造颧骨和下颌线，或填充发际线以获得柔软、自然的轮廓</p>
            <a href="#" class="link-btn">了解更多</a>
         </div>
      </div>

      <div class="box">
         <img src="img/3_a0ef69b0-d3bc-412b-9fff-a6eb5a488204_640x.webp" alt="">
         <div class="content">
            <h3> 2 合 1 高光轮廓调色板</h3>
            <p>鼻影颜色恰到好处地与鼻梁的阴影混合，因此您可以获得完美的鼻子轮廓，而没有任何刺眼的线条或奇怪的阴影</p>
            <a href="#" class="link-btn">了解更多</a>
         </div>
      </div>

      <div class="box">
         <img src="img/1_eb396af6-8800-4c89-b82e-bbe61e1a5d64_640x.webp" alt="">
         <div class="content">
            <h3> 2 合 1 高光轮廓调色板</h3>
            <p>使用黄油状珍珠荧光笔提亮鼻梁、颧骨和下巴，并突出眼睛、鼻尖和丘比特蝴蝶结，为整体妆容增添光彩</p>
            <a href="#" class="link-btn">了解更多</a>
         </div>
      </div>

      <div class="box">
         <img src="img/4_54d07c36-d08d-44a4-960f-018a5207a8da_640x.webp" alt="">
         <div class="content">
            <h3> 2 合 1 高光轮廓调色板</h3>
            <p>鼻影颜色恰到好处地与鼻梁的阴影混合，因此您可以获得完美的鼻子轮廓，而没有任何刺眼的线条或奇怪的阴影</p>
            <a href="#" class="link-btn">了解更多</a>
         </div>
      </div>

      <div class="box">
         <img src="img/5_a126f3df-6217-4bf2-908b-47233ceff24b_640x.webp" alt="">
         <div class="content">
            <h3> 2 合 1 高光轮廓调色板</h3>
            <p>使用黄油状珍珠荧光笔提亮鼻梁、颧骨和下巴，并突出眼睛、鼻尖和丘比特蝴蝶结，为整体妆容增添光彩</p>
            <a href="#" class="link-btn">了解更多</a>
         </div>
      </div>

   </div>

</section>

<!-- 底妆结束 -->

<!-- 神仙水开始  -->

<section class="reviews" id="reviews">

   <h1 class="heading">SK-II 「神仙水」系列</h1>

   <div class="box-container container">

      <div class="box">
         <img src="img/FTE-HERO-D.webp" alt="">
         <h3>SK-II 「神仙水」护肤精华露</h3>
         <p>同步焕启肌底源动力 肌肤问题的根源，其实是来自于肌肤4大源动力失调
            同步焕启肌肤4大源动力 肌肤由内而外晶莹剔透 焕起晶莹剔透   每一瓶都蕴含超90%       </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
      </div>

      <div class="box">
         <img src="img/GUE_PT_PLP-New.webp" alt="">
         <h3>新一代小灯泡</h3>
         <p> 晶透光蕴II 白到III 自发光I 26年晶透光蕴科学VII
            颠覆性破译「四色肌霾」
            任一方面都会阻挡肌肤呈现光蕴  
            屏障功能脆弱 干燥 缺乏弹性 隐藏斑点 黑色素
         </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
      </div>

      <div class="box">
         <img src="img/Kimono-Thumbnail.webp" alt="">
         <h3>神仙水情人节限定版套装</h3>
         <p>SK-II春日娃娃神仙水配上全新情人节限定版礼盒，为您的挚爱送上晶莹剔透美肌
            把晶莹剔透美肌送给您的
            超过90% 的PITERA™
成份焕发晶莹剔透美肌

          
        
            
            </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
      </div>

   </div>

</section>

<!-- 神仙水结束 -->



<!-- 挚爱美礼开始  -->

<section class="blogs" id="blogs">

   <h1 class="heading">挚爱美礼 </h1>

   <div class="box-container container">

      <div class="box">
         <div class="image">
            <img src="img/Aerin_gnav_dropdown_210120_2.jpg" alt="">
         </div>
         <div class="content">
            <h3>绿野仙踪系列
              </h3>
            <p>天竺葵与橙花清甜香融<br> 唤起初恋的羞涩与悸动</p>
            <a href="#" class="link-btn">立即购买</a>
         </div>
         <div class="icons">
            <span> <i class="fas fa-calendar"></i>明媚「香」遇 </span>
            <span>  <i class="fa fa-credit-card-alt" aria-hidden="true"></i> ￥6880 </span>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="img/EL_21_AERIN_gnav_fragrance_finder_284x284.jpg" alt="">
         </div>
         <div class="content">
            <h3>明星沙龙香氛
              </h3>
            <p> 闻香识境<br> 探索AERIN的世界</p>
            <a href="#" class="link-btn">立即购买</a>
         </div>
         <div class="icons">
            <span> <i class="fas fa-calendar"></i>明媚「香」遇 </span>
            <span>  <i class="fa fa-credit-card-alt" aria-hidden="true"></i> ￥2980</span>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="img/EL_AERIN_21_GNAV_pc-220511-MedHoneysuckle-284x284(1)(2).jpg" alt="">
         </div>
         <div class="content">
            <h3>阿蒂伦雪松节日礼盒
             
               </h3>
            <p>  芳香飘至<br>典藏系列</p>
            <a href="#" class="link-btn">立即购买</a>
         </div>
         <div class="icons">
            <span> <i class="fas fa-calendar"></i>明媚「香」遇</span>
            <span> <i class="fa fa-credit-card-alt" aria-hidden="true"></i> ￥3840 </span>
         </div>
      </div>

   </div>

</section>

<!-- 挚爱美礼结束-->


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






<script src="js/meizhuan.js"></script>

</body>
</html>