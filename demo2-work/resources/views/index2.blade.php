
<!DOCTYPE html>
<html lang="en">
<head >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>谢胜伟Laravel期末作品</title>
    <!-- 头部轮播开始 -->
    <link rel="stylesheet" href="css/fenye.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/shoufen.css">
    <link rel="stylesheet" href="css/component.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link rel="stylesheet" href="css/zuce.css">
<script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/cookes.js"></script>
    <script type="text/javascript" src="js/shoucang.js"></script>
</head>
<body id="top" data-spy="scroll" data-target="#myScrollspy" data-offset="100">
    
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
                        <li><a href="#" class="active">首页</a></li>
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
                            <a href="/meizhuan" >美妆馆</a>
                           
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
                            <a href="/tabqie">新品推荐</a>
                           
                         </li>

                         <li>
                            <a href="#" >关于我们</a>
                            
                         </li>   
                        
                         @if(session()->has('user')){
                            <li> <a href="/loginview">{{session('user')}}欢迎你</a> </li>
                            <li> <a href="/shanchu" >退出登录</a>
                            </li>
                         }@else
                            <li> <a href="/loginview">登录</a> </li>
                            <li> <a href="javascript:;" class="md-trigger" data-modal="modal-13">注册</a></li>
                        @endif
                      
                        <!-- <a href="/gouwucar">我的购物车</a><i id="ccount">0</i> -->
                         <li><a href="/gouwucar"><i class="fa fa-shopping-cart" aria-hidden="true" style="margin-right: 8px;"></i>购物车<span class="badge" style="position: relative;top: -5px;"><i id="ccount">0</i></span></a></li>
                         <li><a href="/shoucangyemian">我的收藏</a></li>
                        
                    </ul>
                    <div class="md-modal md-effect-13 " id="modal-13">
                        <div class="md-content  g-both">
                            
                            <div class="modal-header">
                                <!-- <button class="close" data-dismiss="modal">&times</button> -->
                                <h3 class="modal-title md-bg"><i class="fa fa-shopping-bag" aria-hidden="true"></i>欢 迎 注 册</h3>
                            </div>
                          
                          <div>
                            <div class="row">
                               
                                <div class="form-group">
                                    <div class="step-main">
                                        
                                        <div class="step-slide">
                                            <form action="/register" id="form2" name="form2" method="post" class="form-horizontal" role="form">
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="control-label col-sm-3">用户名</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="inputEmail3" name="username" placeholder="请输入用户名">
                                                    </div>
                                                </div>
                                    
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="control-label col-sm-3">密码</label>
                                                    <div class="col-sm-8">
                                                        <input type="password" class="form-control" id="inputEmail3" name="password" placeholder="请输入密码">
                                                    </div>
                                                </div>
                                                <div class="input-group" style="margin-left:50px;">
                                                   <span class="input-group-addon">中国0086</span>
                                                    <input type="text" placeholder="请输入手机号" class="form-control" name="phone" style="width:323px;">
                                                </div>
                                                <div class="form-group" style="margin-top:15px;">
                                                    <label for="inputEmail4" class="control-label col-sm-3">验证码</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="inputEmail4" name="repassword" placeholder="请输入验证码" style="width:203px;float:left;">
                                                        <img src="{{captcha_src()}}" alt="" class="capimg" style="float:right;cursor: pointer;">{{$errors->first('indexzuce1')}}<br>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-default" style="margin-top:15px;">提交</button>
                                                {{csrf_field()}}
                                               </form>
                                               <script>
                                                $(function(){
                                                    $('.capimg').click(function(){
                                                        $(this).attr('src','{{captcha_src()}}'+'&_='+Math.random());
                                                    })
                                                })
                                            </script>
                                        </div>
                                       
                                        
                                    </div>
                                </div>
                               
                            </div>
                            <button class="md-close btn-sm btn-primary">取消</button>
                          </div>
                        </div>
                      </div>
                </div>
                <form class="navbar-form navbar-right" role="search">
                    <!-- <ul class="nav navbar-nav collapse navbar-collapse">
                        <li><a href="#">登录</a></li>
                        <li><a href="#">注册</a></li>
                    </ul> -->
                    <div class="form-group">
                        <input type="text" class="from-control inputsearch" placeholder="请输入搜索内容">
                        <i class="fa fa-search" aria-hidden="true"></i> 
                    </div>
                </form>
            </nav>
        </div>
        <script type="text/javascript" src="js/jquery.actual.min.js"></script>
        <script type="text/javascript" src="js/multistep.js"></script>   
        <script src="js/classie.js"></script>
        <script src="js/modalEffects.js"></script>
        <!-- 导航结束 -->
        <!-- 轮播图开始 --> 
            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
                <!-- 图片容器 -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="{{$data1[0]->img}}" alt="..."  class="itemimg">
                        
                        <div class="carousel-caption">
                            <h3>{{$data1[0]->name}}</h3>
                            <p>{{$data1[0]->text}}
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{$data1[1]->img}}" alt="..."  class="itemimg">
                        <div class="carousel-caption">
                            <h3>{{$data1[1]->name}}</h3>
                            <p>{{$data1[1]->text}}
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{$data1[2]->img}}" alt="..." class="itemimg">
                        <div class="carousel-caption">
                            <h3>{{$data1[2]->name}}</h3>
                            <p>{{$data1[2]->text}}
                            </p>
                        </div>
                    </div>
                </div>
                <!--圆圈指示符-->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <!-- 左右控制按钮 -->
                <a class="left carousel-control prevnext" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control prevnext" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        <!-- 轮播图结束 -->
<div class="container">
        <!-- 缩略图开始 -->
        <div class="row suolve">
            <div class="col-md-3 col-xs-6 mm">
                <div class="thumbnail tthover">
                    <!-- <img src="img/16818698826403183_1000X1000.webp" alt=""> -->
                   <a href="/xiangqing?id={{$data10[0]->id}}"><img src="{{$data[0]->img}}" alt=""> </a>
                    <div >
                        <div class="pd_title">{{$data[0]->name}}</div>
                        <div class="chk">
                             <div><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></div>
                      <div>查看详情</div>
                        </div>
                       
                        <div class="pd_price_wrap">
                            <div class="pd_now_price">￥{{$data[0]->price}}</div>
                            
                          <div style="color: #ccc;margin-top: 2px; font-size: 12px;padding-right: 15px;"><a href="/pinglun">5条评论</a> </div>
                        </div>
                        <div class="inviting-box">
                            <p><i class="fa fa-shopping-bag" aria-hidden="true"></i>立即购买 </p>
                            <a href="#">立刻注册成为会员</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xs-6 mm">
                <div class="thumbnail tthover">
                <a href="/xiangqing?id={{$data10[1]->id}}"><img src="{{$data[1]->img}}" alt=""></a>
                    <div >
                        <div class="pd_title">{{$data[1]->name}}</div>
                        <div class="chk">
                             <div><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></div>
                      <div>查看详情</div>
                        </div>
                       
                        <div class="pd_price_wrap">
                            <div class="pd_now_price">￥{{$data[1]->price}}</div>
                            
                          <div style="color: #ccc;margin-top: 2px; font-size: 12px;padding-right: 15px;"><a href="pinglun.html">3条评论</a></div>
                        </div>
                        <div class="inviting-box">
                            <p>加入会员 臻享专属服务 </p>
                            <a href="#">立刻注册成为会员</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xs-6 mm">
                <div class="thumbnail tthover">
                <a href="/xiangqing?id={{$data10[2]->id}}"><img src="{{$data[2]->img}}" alt=""></a>
                    <div >
                        <div class="pd_title">{{$data[2]->name}} </div>
                        <div class="chk">
                             <div><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></div>
                      <div>查看详情</div>
                        </div>
                       
                        <div class="pd_price_wrap">
                            <div class="pd_now_price">￥{{$data[2]->price}}</div>
                            
                          <div style="color: #ccc;margin-top: 2px; font-size: 12px;padding-right: 15px;"><a href="pinglun.html">1条评论</a></div>
                        </div>
                        <div class="inviting-box">
                            <p><i class="fa fa-shopping-bag" aria-hidden="true"></i>立即购买 </p>
                            <a href="#">立刻注册成为会员</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xs-6 mm">
                <div class="thumbnail tthover">
                <a href="/xiangqing?id={{$data10[3]->id}}"><img src="{{$data[3]->img}}" alt=""></a>
                    <div >
                        <div class="pd_title">{{$data[3]->name}}</div>
                        <div class="chk">
                             <div><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></div>
                      <div>查看详情</div>
                        </div>
                       
                        <div class="pd_price_wrap">
                            <div class="pd_now_price">￥{{$data[3]->price}}</div>
                            
                          <div style="color: #ccc;margin-top: 2px; font-size: 12px;padding-right: 15px;"><a href="pinglun.html">2条评论</a></div>
                        </div>
                        <div class="inviting-box">
                            <p>加入会员 臻享专属服务 </p>
                            <a href="#">立刻注册成为会员</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- 缩略图结束 -->
        <!-- 点击加入购物车开始 -->
        <div class="container">
            <div class="list row">
                <dl pid="1001" class="col-md-3 col-sm-6 gw">
                    <dt>
                        <img src="{{$data[4]->img}}" width="254" />
                    </dt>
                    <dd class="gw-w">{{$data[4]->name}}</dd>
                    <dd class="gw-text">{{$data[4]->miaoshu}}</dd>
                    <dd style="display:flex;" class="gwjiage">￥<span>{{$data[4]->price}}</span></dd>
                    <dd class="tianjia-a">
                        <button>加入购物车</button>
                    </dd>
                   
                   
                   
                </dl>
                <dl pid="1002" class="col-md-3 col-sm-6">
                    <dt>
                    <img src="{{$data[5]->img}}" width="254" />
                    </dt>
                    <dd class="gw-w">{{$data[5]->name}}</dd>
                    <dd class="gw-text">{{$data[5]->miaoshu}}</dd>
                    <dd style="display:flex;" class="gwjiage">￥<span>{{$data[5]->price}}</span></dd>
                    <dd class="tianjia-a">
                        <button>加入购物车</button>
                    </dd>
                    
                </dl>
                <dl pid="1003" class="col-md-3 col-sm-6">
                    <dt>
                    <img src="{{$data[6]->img}}" width="254" />
                    </dt>
                    <dd class="gw-w">{{$data[6]->name}}</dd>
                    <dd class="gw-text">{{$data[6]->miaoshu}}</dd>
                    <dd style="display:flex;" class="gwjiage">￥<span>{{$data[6]->price}}</span></dd>
                    <dd class="tianjia-a">
                        <button>加入购物车</button>
                    </dd>
                    
                </dl>
                <dl pid="1004" class="col-md-3 col-sm-6">
                    <dt>
                    <img src="{{$data[7]->img}}" width="254" />
                    </dt>
                    <dd class="gw-w">{{$data[7]->name}}</dd>
                    <dd class="gw-text">{{$data[7]->miaoshu}}</dd>
                    <dd style="display:flex;" class="gwjiage">￥<span>{{$data[7]->price}}</span></dd>
                    <dd class="tianjia-a">
                        <button>加入购物车</button>
                    </dd>
                    
                </dl>
            </div>
        </div>
        <!--
            描述：数据访问层，操作本地数据的模块
        -->
        <script type="text/javascript" src="js/serve.js"></script>
        <!--
            描述：本页面的js操作
        -->
        <script type="text/javascript" src="js/cartindex.js"></script>

        <!-- 点击加入购物车结束 -->


        <!-- 手风琴开始 -->
        <div class="row">
            <div class="demo" style="padding: 1em 0;">
                <div class="container">
                    <div class="row">
                        <div class=" col-md-6">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            {{$data2[0]->content}}
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                           <input type="checkbox"  id="man" value="1"> {{$data2[1]->content}}<br>
                                           <input type="checkbox"  id="feman" value="2"> {{$data2[2]->content}}
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                {{$data3[0]->content}}
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <input type="checkbox"  id="man" value="1">{{$data3[1]->content}}<br>
                                            <input type="checkbox"  id="man" value="1">{{$data3[2]->content}}<br>
                                            <input type="checkbox"  id="man" value="1">{{$data3[3]->content}}<br>
                                            <input type="checkbox"  id="man" value="1">{{$data3[4]->content}}<br>
                                            <input type="checkbox"  id="man" value="1">{{$data3[5]->content}}
                                           </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            {{$data4[0]->content}}
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                        {{$data4[1]->content}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" col-md-6">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="true" aria-controls="collapsefour">
                                            {{$data5[0]->content}}
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapsefour" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                          
                                         <button class="btn btn-default btn-lg">  {{$data5[1]->content}}</button>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                            {{$data6[0]->content}}
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <input type="checkbox"  id="man" value="1">{{$data6[1]->content}}<br>
                                            <input type="checkbox"  id="man" value="1">{{$data6[2]->content}}<br>
                                            <input type="checkbox"  id="man" value="1">{{$data6[3]->content}}
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                            {{$data7[0]->content}}
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapsesix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            <button class="btn btn-default btn-lg">  {{$data7[1]->content}}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
        <!-- 手风琴结束 -->
        
        <!-- 滚动监听开始 -->
        <div>
            <div class="container">
                <div class="row">
                    <nav class="" id="myScrollspy">
                        <ul class="nav nav-pills nav-stacked" style="z-index: 999;">
                            <li class="active"><a href="#section1">为你推荐</a></li>
                            <li><a href="#section2">产品精选</a></li>
                            <li><a href="#section3">疯狂抢购</a></li>
                            <li><a href="#section4">新品上市</a></li>
                            <li><a href="#section5">客服</a></li>
                            <li><a href="#top" class="back to top glyphicon glyphicon-chevron-up">返回顶部</a></li>
                        </ul>
                    </nav>

                    <!-- 滚动监听的显示与隐藏开始 -->
                    <script>
                        $(function(){
  //下面我们需要开发用户滚动时，当滚动向下一定距离，展示这个隐藏的顶端固定导航
  
  $(window).scroll(function(){
    //在window的滚动回调方法中，我们处理具体逻辑
      var scrollTop　=　document.documentElement.scrollTop || document.body.scrollTop; 
    /* 以上代码获取滚动后，离顶端距离，这里使用两个值是为了兼容不同浏览器及其不同doctype定义 */
    
     if(scrollTop > 600){
        /*当滚动超过100px*/
        $('.nav-pills').show();
     }else{
        $('.nav-pills').hide();
     }
    
  });
 
});
                    </script>
                    <!-- 滚动监听的显示与隐藏结束 -->

                    <!-- 分页开始 -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div id="section1">
                           <p class="floorhd_tit">为你推荐</p>
                           <ul class="nav nav-tabs">
                               <li class="active wei-title"><a href="#menu1" data-toggle="tab">精选·猜你喜欢</a></li>
                               <li class="wei-title"><a href="#menu2" data-toggle="tab">高能修护系列</a></li>
                               <li class="wei-title"><a href="#menu1" data-toggle="tab">妍活青春</a></li>
                               <li class="wei-title"><a href="#menu4" data-toggle="tab">藏金奢妍</a></li>
                               <li class="wei-title"><a href="#menu2" data-toggle="tab">超模绝密</a></li>
                               <li class="wei-title"><a href="#menu1" data-toggle="tab">隔离防晒</a></li>
                           </ul>
               
                           <div class="tab-content">
                               <div id="menu1" class="tab-pane active">
                                <div class="row">
                                    <div class="col-md-3 col-xs-6 mm">
                                        <div class="thumbnail tthover">
                                            <img src=" {{$data8[0]->img}}" alt="">
                                            <div >
                                                <div class="pd_title"> {{$data8[0]->content}}</div>
                                                <div class="pd_price_wrap">
                                                    <div class="pd_now_price">￥{{$data8[0]->price}}</div>
                                                    <div class="icon_wrap"></div>
                                                </div>
                        
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-6 mm">
                                        <div class="thumbnail tthover">
                                        <img src=" {{$data8[1]->img}}" alt="">
                                            <div >
                                                <div class="pd_title">{{$data8[1]->content}}</div>
                                                <div class="pd_price_wrap">
                                                    <div class="pd_now_price">￥{{$data8[1]->price}}</div>
                                                    <div class="icon_wrap"></div>
                                                </div>
                        
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-6 mm">
                                        <div class="thumbnail tthover">
                                        <img src=" {{$data8[2]->img}}" alt="">
                                            <div >
                                                <div class="pd_title">{{$data8[2]->content}}</div>
                                                <div class="pd_price_wrap">
                                                    <div class="pd_now_price">￥{{$data8[2]->price}}</div>
                                                    <div class="icon_wrap"></div>
                                                </div>
                        
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-6 mm">
                                        <div class="thumbnail tthover">
                                        <img src=" {{$data8[3]->img}}" alt="">
                                            <div >
                                                <div class="pd_title">{{$data8[3]->content}} </div>
                                                <div class="pd_price_wrap">
                                                    <div class="pd_now_price">￥{{$data8[3]->price}}</div>
                                                    <div class="icon_wrap"></div>
                                                </div>
                        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 col-xs-6 mm">
                                        <div class="thumbnail tthover">
                                        <img src=" {{$data8[4]->img}}" alt="">
                                            <div >
                                                <div class="pd_title">
                                                {{$data8[4]->content}}</div>
                                                <div class="pd_price_wrap">
                                                    <div class="pd_now_price">￥{{$data8[4]->price}}</div>
                                                    <div class="icon_wrap"></div>
                                                </div>
                        
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-6 mm">
                                        <div class="thumbnail tthover">
                                        <img src=" {{$data8[5]->img}}" alt="">
                                            <div >
                                                <div class="pd_title">
                                                {{$data8[5]->content}}</div>
                                                <div class="pd_price_wrap">
                                                    <div class="pd_now_price">￥{{$data8[5]->price}}</div>
                                                    <div class="icon_wrap"></div>
                                                </div>
                        
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-6 mm">
                                        <div class="thumbnail tthover">
                                        <img src=" {{$data8[6]->img}}" alt="">
                                            <div >
                                                <div class="pd_title">
                                                {{$data8[6]->content}}</div>
                                                <div class="pd_price_wrap">
                                                    <div class="pd_now_price">￥{{$data8[6]->price}}</div>
                                                    <div class="icon_wrap"></div>
                                                </div>
                        
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-6 mm">
                                        <div class="thumbnail tthover">
                                        <img src=" {{$data8[7]->img}}" alt="">
                                            <div >
                                                <div class="pd_title">
                                                {{$data8[7]->content}}</div>
                                                <div class="pd_price_wrap">
                                                    <div class="pd_now_price">￥{{$data8[7]->price}}</div>
                                                    <div class="icon_wrap"></div>
                                                </div>
                        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               </div>
                               <div id="menu2" class="tab-pane">
                                <div class="row">
                                    <div class="col-md-3 col-xs-6 mm">
                                        <div class="thumbnail tthover">
                                            <img src="img/ac2dfb6ab6dce6ae.jpg.webp" alt="">
                                            <div >
                                                <div class="pd_title">喜之郎喜之郎喜之郎果冻90g*30袋整箱年货大礼包儿童休闲零食品小吃散装 草莓味90g*6袋【约18个】</div>
                                                <div class="pd_price_wrap">
                                                    <div class="pd_now_price">￥14.8</div>
                                                    <div class="icon_wrap"></div>
                                                </div>
                        
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-6 mm">
                                        <div class="thumbnail tthover">
                                            <img src="img/ac2dfb6ab6dce6ae.jpg.webp" alt="">
                                            <div >
                                                <div class="pd_title">喜之郎喜之郎喜之郎果冻90g*30袋整箱年货大礼包儿童休闲零食品小吃散装 草莓味90g*6袋【约18个】</div>
                                                <div class="pd_price_wrap">
                                                    <div class="pd_now_price">￥14.8</div>
                                                    <div class="icon_wrap"></div>
                                                </div>
                        
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-6 mm">
                                        <div class="thumbnail tthover">
                                            <img src="img/ac2dfb6ab6dce6ae.jpg.webp" alt="">
                                            <div >
                                                <div class="pd_title">喜之郎喜之郎喜之郎果冻90g*30袋整箱年货大礼包儿童休闲零食品小吃散装 草莓味90g*6袋【约18个】</div>
                                                <div class="pd_price_wrap">
                                                    <div class="pd_now_price">￥14.8</div>
                                                    <div class="icon_wrap"></div>
                                                </div>
                        
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-6 mm">
                                        <div class="thumbnail tthover">
                                            <img src="img/ac2dfb6ab6dce6ae.jpg.webp" alt="">
                                            <div >
                                                <div class="pd_title">喜之郎喜之郎喜之郎果冻90g*30袋整箱年货大礼包儿童休闲零食品小吃散装 草莓味90g*6袋【约18个】</div>
                                                <div class="pd_price_wrap">
                                                    <div class="pd_now_price">￥14.8</div>
                                                    <div class="icon_wrap"></div>
                                                </div>
                        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               </div>
                               <div id="menu3" class="tab-pane">
                                <div class="row">
                                    <div class="col-md-3 col-xs-6 mm">
                                        <div class="thumbnail tthover">
                                            <img src="img/ac2dfb6ab6dce6ae.jpg.webp" alt="">
                                            <div >
                                                <div class="pd_title">喜之郎喜之郎喜之郎果冻90g*30袋整箱年货大礼包儿童休闲零食品小吃散装 草莓味90g*6袋【约18个】</div>
                                                <div class="pd_price_wrap">
                                                    <div class="pd_now_price">￥14.8</div>
                                                    <div class="icon_wrap"></div>
                                                </div>
                        
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-6 mm">
                                        <div class="thumbnail tthover">
                                            <img src="img/ac2dfb6ab6dce6ae.jpg.webp" alt="">
                                            <div >
                                                <div class="pd_title">喜之郎喜之郎喜之郎果冻90g*30袋整箱年货大礼包儿童休闲零食品小吃散装 草莓味90g*6袋【约18个】</div>
                                                <div class="pd_price_wrap">
                                                    <div class="pd_now_price">￥14.8</div>
                                                    <div class="icon_wrap"></div>
                                                </div>
                        
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-6 mm">
                                        <div class="thumbnail tthover">
                                            <img src="img/ac2dfb6ab6dce6ae.jpg.webp" alt="">
                                            <div >
                                                <div class="pd_title">喜之郎喜之郎喜之郎果冻90g*30袋整箱年货大礼包儿童休闲零食品小吃散装 草莓味90g*6袋【约18个】</div>
                                                <div class="pd_price_wrap">
                                                    <div class="pd_now_price">￥14.8</div>
                                                    <div class="icon_wrap"></div>
                                                </div>
                        
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-6 mm">
                                        <div class="thumbnail tthover">
                                            <img src="img/ac2dfb6ab6dce6ae.jpg.webp" alt="">
                                            <div >
                                                <div class="pd_title">喜之郎喜之郎喜之郎果冻90g*30袋整箱年货大礼包儿童休闲零食品小吃散装 草莓味90g*6袋【约18个】</div>
                                                <div class="pd_price_wrap">
                                                    <div class="pd_now_price">￥14.8</div>
                                                    <div class="icon_wrap"></div>
                                                </div>
                        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               </div>
                               <div id="menu4" class="tab-pane">
                                 <div class="row">
                                    <div class="col-md-3 col-xs-6 mm">
                                        <div class="thumbnail tthover">
                                            <img src="img/bdfe4c5bd12ad091.jpg.webp" alt="">
                                            <div >
                                                <div class="pd_title">ThinkPad X13 2022高端轻薄本程序员商用办公本联想笔记本电脑 gen1 gen2锐龙版 i5-10210U 16G内存 512G固态 【官方标配】高色域屏幕 Win10/11</div>
                                                <div class="pd_price_wrap">
                                                    <div class="pd_now_price">￥4999.00</div>
                                                    <div class="icon_wrap"></div>
                                                </div>
                        
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-6 mm">
                                        <div class="thumbnail tthover">
                                            <img src="img/633bfc3c587ee7d2.jpg.webp" alt="">
                                            <div >
                                                <div class="pd_title">赛睿 (SteelSeries) Apex Pro mini有线键盘 游戏机械键盘 可调触发键程 独立RGB背光  61键 PBT键帽</div>
                                                <div class="pd_price_wrap">
                                                    <div class="pd_now_price">￥1799.00</div>
                                                    <div class="icon_wrap"></div>
                                                </div>
                        
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-6 mm">
                                        <div class="thumbnail tthover">
                                            <img src="img/8d4db1f7033a545d.jpg.webp" alt="">
                                            <div >
                                                <div class="pd_title">添晴24骨全自动雨伞黑胶双人男女晴雨两用伞加固折叠抗风遮阳伞太阳伞 24骨全自动黑色</div>
                                                <div class="pd_price_wrap">
                                                    <div class="pd_now_price">￥17.60</div>
                                                    <div class="icon_wrap"></div>
                                                </div>
                        
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-6 mm">
                                        <div class="thumbnail tthover">
                                            <img src="img/9131261c09fa4c8a.jpg.webp" alt="">
                                            <div >
                                                <div class="pd_title">炊大皇 煎锅平底锅 麦饭石不粘锅多功能易洁少油烟煎锅26cm  电磁炉通用</div>
                                                <div class="pd_price_wrap">
                                                    <div class="pd_now_price">￥99.00</div>
                                                    <div class="icon_wrap"></div>
                                                </div>
                        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               </div>
                           </div>
                        </div> 
                        <div id="section2">
                           <p class="floorhd_tit">产品精选</p>
                        <div class="row">
                                <div class="col-md-5">
                                    <div class="zhuashu">
                                      <img src="img/680x880.jpg" alt="" width="100%">
                                      <div class="wi">了解详情</div>
                                    </div>
                                </div>
                                <div class="col-md-7 subbox">
                                              <table>
                                                	  <thead>
                                                		<tr>
                                                		  <th>商品</th>
                                                		  <th>商品名称</th>
                                                		  <th>商品价格</th>
                                                		</tr>
                                                	  </thead>
                                                	  <tbody>
                                                      @foreach($data9 as $val)
                                                <tr>
                                                <td><img src="{{$val->photo}}" width="100"></td>
                                                <td style="color:black;padding-left:15px;">{{$val->name}}</td>
                                                <td style="color:black">￥{{$val->price}}</td>
                                                </tr>
                                                @endforeach
                                                	  </tbody>
                                            </table>
                                            {{$data9->links()}}
                                </div>
                        </div>
                        
                        </div>
                        
                        <div id="section3">
                            <p class="floorhd_tit">疯狂抢购</p>
                           <div class="gouw3">
                              <div class="bg-1"> <!--第三屏-->
                                <div class="container-fluid" id="tour">
                                    
                                    <ul class="list-group"> <!--列表组-->
                                        <li class="list-group-item">持妆系列 <span class="label label-danger shouw">售完!</span></li>
                                        <li class="list-group-item">倾慕系列 <span class="label label-danger shouw">售完!</span></li>
                        
                                        <li class="list-group-item" data-toggle="collapse" href="#div1">调色板系列 <span class="badge">3</span>
                                        </li>
                                        <div class="row text-center collapse" id="div1"> <!--列表组下面的图片组，用十二栅格布局左中右三个图片-->
                                            <div class="col-md-4 col-xs-12">
                                                <div class="thumbnail">
                                                    <!--缩略图的应用，上图片，下文字-->
                                                    <img src="img/35.webp" alt="newyork"> <!--缩略图上面的图片-->
                                                    <p style="margin-top: 10px;"><strong>2合1高光轮廓调色板</strong></p>
                                                  
                                                    
                                                    <button class="btn" id="goupiao" data-toggle="modal" data-target="#myModal">立即抢购</button> <!--
                                           缩略图下面的按钮，并添加模式框的应用，点击弹出购票的模式kuang框-->
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-xs-12">
                                                <div class="thumbnail"> <img src="img/12-min_25dad297-a4dd-4328-a870-f1b1564ac0b4.webp" alt="SanFrancisco">
                                                    <p style="margin-top: 10px;"><strong>多合一调色板</strong></p>
                                                
                                                  <button class="btn" data-toggle="modal"
                                                        data-target="#myModal">立即抢购</button>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-xs-12">
                                                <div class="thumbnail"> <img src="img/800_800-1_6b41c049-bf29-4bf2-9f23-e42632262c1b.jpg" alt="Paris">
                                                    <p style="margin-top: 10px;"><strong>腮红二重奏</strong></p>
                                                    <p id="jiage" class="hidden">1322</p>
                                                    <button class="btn" data-toggle="modal"
                                                        data-target="#myModal">立即抢购</button>
                                                </div>
                                            </div>
                                        </div>
                                        <li class="list-group-item" data-toggle="collapse" href="#div2">黑钻松露系列<span class="badge">4</span>
                                        </li>
                        
                                        <div class="row text-center collapse" id="div2"> <!--列表组下面的图片组，用十二栅格布局左中右三个图片-->
                                            <div class="col-md-3 col-xs-12">
                                                <div class="thumbnail">
                                                    <!--缩略图的应用，上图片，下文字-->
                                                    <img src="img/800_800-1-min_5946c686-b8fc-4398-b5a6-17e3b33f797d.webp" alt="newyork"> <!--缩略图上面的图片-->
                                                    <p style="margin-top: 10px;"><strong>双重色唇釉</strong></p>
                                                    <!--缩略图下面的文字-->
                                                    <!--缩略图下面的文字-->
                                                    <button class="btn" data-toggle="modal" data-target="#myModal">立即抢购</button> <!--缩略图下面的按钮，并添加模式框的应用，点击弹出购票的模式kuang框-->
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-12">
                                                <div class="thumbnail"> <img src="img/3-min_44e05337-7e54-4374-bea6-fdc663e498e7.webp" alt="SanFrancisco">
                                                    <p style="margin-top: 10px;"><strong>超细液体眼线笔</strong></p>
                                                    <button class="btn" data-toggle="modal"
                                                        data-target="#myModal">立即抢购</button>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-12">
                                                <div class="thumbnail">
                                                    <!--缩略图的应用，上图片，下文字-->
                                                    <img src="img/39_38162d38-bbf9-4248-86d5-b4b60663e7be.webp" alt="newyork"> <!--缩略图上面的图片-->
                                                    <p style="margin-top: 10px;"><strong>2合1高光轮廓调色板</strong></p>
                                                    <!--缩略图下面的文字-->
                                                    <!--缩略图下面的文字-->
                                                    <button class="btn" data-toggle="modal" data-target="#myModal">立即抢购</button> <!--缩略图下面的按钮，并添加模式框的应用，点击弹出购票的模式kuang框-->
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-12">
                                                <div class="thumbnail"> <img src="img/11-min_adc1e59a-dc55-4c19-8820-529216f57fc4.webp" alt="SanFrancisco">
                                                    <p style="margin-top: 10px;"><strong>柔软哑光唇泥</strong></p>
                                                   <button class="btn" data-toggle="modal"
                                                        data-target="#myModal">立即抢购</button>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                              </div>
                                 <div class="modal fade" id="myModal" role="dialog"> <!--模式对话框-->
                                <div class="modal-dialog"> <!--模式对话框-->
                                    <div class="modal-content"> <!--模式对话框内容-->
                                        <div class="modal-header"> <!--模式对话框头部-->
                                            <button type="button" class="close" data-dismiss="modal">&times</button>
                                            <h4><span class="glyphicon glyphicon-lock"></span>填写购买信息</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form role="form">
                                                <div class="form-group"> <label for="psw"><span
                                                            class="glyphicon glyphicon-shopping-cart"></span>联系电话</label>
                                                    <input type="number" class="form-control" id="psw" placeholder="亲 请输入联系电话">
                                                </div>
                                                <div class="form-group"> <label for="username"><span
                                                            class="glyphicon glyphicon-user"></span>收货地址</label>
                                                    <input type="text" class="form-control" id="username" placeholder=" 亲 请输入收货地址 ">
                                                </div>
                                                <buttom type="submit" class="btnbtn-block">支付<span class="glyphicon glyphicon-ok"></span></buttom>
                        
                        
                                            </form>
                                        </div>
                                        <div class="modal-footer"> <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
                                                <span class="glyphicon glyphicon-remove"> 取消</span>
                                            </button>
                                            <p>需要<a href="#">帮助？</a></p>
                                        </div>
                                    </div>
                                </div>
                                 </div>
                                 <!-- 前端开门效果开始 -->
                                  <div class="kaim  "> </div>
                                  <!-- 前端开门效果结束 -->

                           </div>
                        </div>
                        
                        <div id="section4">
                            <p class="floorhd_tit newp">新品上市</p>
                            <!-- 卡片动画效果开始 -->
                       <!-- 代码部分begin -->
                       <div class="row">
                        <div id="playimages" class="play">
    <ul class="big_pic">
        <div class="prev"></div>
        <div class="next"></div>
        
        
        
        <a class="mark_left" href="javascript:;"></a>
        <a class="mark_right" href="javascript:;"></a>
        <div class="bg"></div>
        
        <li style="z-index:1;">  <img src="img/1905.jpg" width="100%" height="100%"/></li>
        <li><img src="img/Banner-pc.jpg" width="100%" height="100%"/></li>
        <li><img src="img/pc7.jpg" /></li>
        <li><img src="img/uv_pckv_230423_r.jpg" width="100%" height="100%" /></li>
        <li><img src="img/x700.jpg" width="100%" height="100%" /></li>
        <li><img src="img/Product_Banner_1920x.webp" width="100%" height="100%"/></li>
        
        <li><img src="img/Banner-pc.jpg" width="100%" height="100%"/></li>
        <li><img src="img/pc7.jpg" /></li>
        <li><img src="img/uv_pckv_230423_r.jpg" width="100%" height="100%" /></li>
        <li><img src="img/x700.jpg" width="100%" height="100%" /></li>
        <li><img src="img/Product_Banner_1920x.webp" width="100%" height="100%"/></li>
        
        </ul>
        <div id="small_pic" class="small_pic">
            <ul style="width:600px;">
                
                <li > <img src="img/1905.jpg" /> </li>
                <li><img src="img/Banner-pc.jpg" /></li>
                <li>  <img src="img/pc7.jpg" /></li>
                <li><img src="img/uv_pckv_230423_r.jpg" width="100%" height="100%" /></li>
                <li><img src="img/x700.jpg" width="100%" height="100%" /></li>
                <li><img src="img/Product_Banner_1920x.webp" width="100%" height="100%"/></li>
                <li><img src="img/Banner-pc.jpg" /></li>
                <li>  <img src="img/pc7.jpg" /></li>
                <li><img src="img/uv_pckv_230423_r.jpg" width="100%" height="100%" /></li>
                <li><img src="img/x700.jpg" width="100%" height="100%" /></li>
                <li><img src="img/Product_Banner_1920x.webp" width="100%" height="100%"/></li>
            </ul>       
        </div>
    </div>
                       </div>

    <script src="js/move.js"></script>
    <!-- 代码部分end -->
                             
                        
                           
                         

                            <!-- 卡片动画效果结束 -->
                        </div>
                    </div>
                    <!-- 分页结束 -->
                </div>
               
            </div>
        </div>
    </div>
    
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

</body>
</html>
