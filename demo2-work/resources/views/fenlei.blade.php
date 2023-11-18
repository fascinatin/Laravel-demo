<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>详情页</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
   
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/xiangqing.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        
       <!-- 导航开始 -->
        <div class="row">
        <nav class="navbar navbar-fixed-top navbar-inverse" style="padding-right:20px;">
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand"><img src="img/logo0.png" alt=""></a>
            </div>
            <div class="collapse navbar-collapse navbar-left">
                
                <ul class="nav navbar-nav collapse navbar-collapse daohan-zi">
                    <li><a href="/index" class="active">首页</a></li>
                     <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">618星品</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">田野</a></li>
                            <li><a href="#">草原</a></li>
                            <li><a href="#">森林</a></li>
                            <li><a href="#">海洋</a></li>
                            <li><a href="#">大海</a></li>
                            <li><a href="#">394谢胜伟</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="meizhuan.html" >美妆馆</a>
                       
                     </li>
                     <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">香水</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">田野</a></li>
                            <li><a href="#">草原</a></li>
                            <li><a href="#">森林</a></li>
                            <li><a href="#">海洋</a></li>
                            <li><a href="#">大海</a></li>
                            <li><a href="#">394谢胜伟</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">全球购</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">田野</a></li>
                            <li><a href="#">草原</a></li>
                            <li><a href="#">森林</a></li>
                            <li><a href="#">海洋</a></li>
                            <li><a href="#">大海</a></li>
                            <li><a href="#">394谢胜伟</a></li>
                        </ul>
                     </li>

                     <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">限定礼盒</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">田野</a></li>
                            <li><a href="#">草原</a></li>
                            <li><a href="#">森林</a></li>
                            <li><a href="#">海洋</a></li>
                            <li><a href="#">大海</a></li>
                            <li><a href="#">394谢胜伟</a></li>
                        </ul>
                     </li>

                     <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">会员中心</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">田野</a></li>
                            <li><a href="#">草原</a></li>
                            <li><a href="#">森林</a></li>
                            <li><a href="#">海洋</a></li>
                            <li><a href="#">大海</a></li>
                            <li><a href="#">394谢胜伟</a></li>
                        </ul>
                     </li>

                     <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">护肤</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">田野</a></li>
                            <li><a href="#">草原</a></li>
                            <li><a href="#">森林</a></li>
                            <li><a href="#">海洋</a></li>
                            <li><a href="#">大海</a></li>
                            <li><a href="#">394谢胜伟</a></li>
                        </ul>
                     </li>

                     <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">新品推荐</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">田野</a></li>
                            <li><a href="#">草原</a></li>
                            <li><a href="#">森林</a></li>
                            <li><a href="#">海洋</a></li>
                            <li><a href="#">大海</a></li>
                            <li><a href="#">394谢胜伟</a></li>
                        </ul>
                     </li>

                     <li>
                        <a href="manage.html" >关于我们</a>
                        
                     </li>  
                     <li><a href="login.html">登录</a></li>
                     <li> <a href="javascript:;" class="md-trigger" data-modal="modal-13">注册</a></li>
                     <li><a href="shopping.html"><i class="fa fa-shopping-cart" aria-hidden="true" style="margin-right: 8px;"></i>购物车<span class="badge" style="position: relative;top: -5px;">8</span></a></li>
                </ul>
               
            </div>
            <form class="navbar-form navbar-right" role="search">
              
                <div class="form-group">
                    <input type="text" class="from-control inputsearch" placeholder="请输入搜索内容">
                    <i class="fa fa-search" aria-hidden="true"></i> 
                </div>
            </form>
        </nav>
        </div>  
       <!-- 导航结束 -->
       <!-- 详情内容开始 -->
             <div class="container">
                <div class="row">
                    <div class="ner">
                        <div class="col-md-2">
                                    <div class="zuoce">
                           @foreach($majors as $k)  
                               <a href="/tabqie?major={{$k->content}}" style="display:block;">{{$k->content}}</a>            
                               @endforeach     
                                    </div>
                        </div>
                        <div class="col-md-10">
                                <div class="youce">
                                 @foreach($madata as $c)
                                 

            <div class="col-md-3 col-xs-6">
                <div class="thumbnail tthover">
                            <img src="{{$c->img}}" alt="">
                    <div>
                        <div class="pd_title"> {{$c->name}}</div>
                        <div class="chk">
                             <div><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></div>
                             <div>查看详情</div>
                        </div>
                        <div class="pd_price_wrap">
                            <div class="pd_now_price">￥{{$c->price}}</div>
                            
                          <div style="color: #ccc;margin-top: 2px; font-size: 12px;padding-right: 15px;"><a href="/pinglun">1条评论</a></div>
                        </div>
                    </div>
                </div>
            </div>
                                  
                                  
                                   @endforeach 
                                        </div>
                                </div>
                        </div>
                    </div>
                </div>
             </div>
        <!-- 详情内容结束 -->

    </div>




    
    <script type="text/javascript" src="js/jquery.actual.min.js"></script>
    <script type="text/javascript" src="js/multistep.js"></script>   
    <script src="js/classie.js"></script>
    <script src="js/modalEffects.js"></script>
   

     
   <!-- 底部开始 -->
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
       <div class="row">
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