<?php
namespace App\Http\Controllers\database;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use App\Student;

use Exception;

class testController extends Controller
{
    
    public function index(){
          // 详情图片获取开始
          $data = DB::table('xiangqing')->get();
          // dump($data[0]->img);
          // 详情图片获取结束
  
          // 轮播图图片开始
          $data1 = DB::table('lunbo')->get();
          // 轮播图图片结束
  
          // 折叠菜单开始
          $data2 = DB::table('info')->where ('typeid','=','1')->get();
        
          $data3 = DB::table('info')->where ('typeid','=','2')->get();
         
          $data4 = DB::table('info')->where ('typeid','=','3')->get();
  
          $data5 = DB::table('info')->where ('typeid','=','4')->get();
  
          $data6 = DB::table('info')->where ('typeid','=','5')->get();
  
          $data7 = DB::table('info')->where ('typeid','=','6')->get();
          // 折叠菜单结束
  
          // 为你推荐开始
          $data8 = DB::table('info')->where ('typeid','=','7')->get();
          // 为你推荐结束

          // 分页开始
          $data9= DB::table('product')->paginate(5);
          // 分页结束

        // 详情开始
         $data10=DB::table('xiangqing')->get();
        // 详情结束



          
          return view('index2')->with(compact('data','data1','data2','data3',
          'data4','data5','data6','data7','data8','data9','data10'));
 
         
          
    }


 






    // 登录开始
        public function loginview(){
            return view('login');
        }


        // 登录验证开始
        public function logincheck(Request $p){
             // 详情图片获取开始
        $data = DB::table('xiangqing')->get();
        // dump($data[0]->img);
        // 详情图片获取结束

        // 轮播图图片开始
        $data1 = DB::table('lunbo')->get();
        // 轮播图图片结束

        // 折叠菜单开始
        $data2 = DB::table('info')->where ('typeid','=','1')->get();
      
        $data3 = DB::table('info')->where ('typeid','=','2')->get();
       
        $data4 = DB::table('info')->where ('typeid','=','3')->get();

        $data5 = DB::table('info')->where ('typeid','=','4')->get();

        $data6 = DB::table('info')->where ('typeid','=','5')->get();

        $data7 = DB::table('info')->where ('typeid','=','6')->get();
        // 折叠菜单结束

        // 为你推荐开始
        $data8 = DB::table('info')->where ('typeid','=','7')->get();
        // 为你推荐结束
                
        // 分页开始
        $data9= DB::table('product')->paginate(5);
        // 分页结束

        // 详情开始
         $data10=DB::table('xiangqing')->get();
        // 详情结束
 


        // 用户验证开始
       
      
            $username=$_POST['username'];
            $password=$_POST['password'];
             $ya = DB::table('user')->where('username','=',$username)->get();
            
             $num=count($ya);
         
        if($num>=1)
            {
                if( $password==$ya[0]->password){
            session(['user'=>$username]);
                return view('index2')->with(compact('data','data1','data2','data3',
                'data4','data5','data6','data7','data8','data9','data10'));
       
                }
                else{
                    return view('login');
                }

               
            }else
            {
                
                return view('login');
            };
              // 用户验证结束

        }
        // 登录验证结束

    // 登录结束


    // 注册开始
    public function register(Request $p){
        $k=$_POST['username'];
        $b=$_POST['password']; 
        $phone=$_POST['phone']; 
        $repassword=$_POST['repassword']; 
       
    $count =   DB::table('user')->where('username','=',$k)->get();
    $num=count($count);
    // dump($num);
  if($num>=1){
   
    echo '<script>window.alert(" 用户名已存在");window.location.href="/index"</script>';
  }else{
             $data = [
                    'username' => $k,
                    'password' => $b,
                    'phone' => $phone,
                ];
                DB::table('user')->insert($data);
                session(['user'=>$k]);
                echo '<script>window.alert(" 注册成功");window.location.href="/index "</script>';
  };
  $p->validate([
    'repassword'=>'required|captcha',
    'username'=>'required|max:25'
  ],
    [
        'repassword.captcha'=>'验证有误',
        'username.required'=>'必填'
    ]
    );
      
    }

    // 注册结束



// 删除session值开始
   
public function shanchu(){
    $data = DB::table('xiangqing')->get();
    // dump($data[0]->img);
    // 详情图片获取结束

    // 轮播图图片开始
    $data1 = DB::table('lunbo')->get();
    // 轮播图图片结束

    // 折叠菜单开始
    $data2 = DB::table('info')->where ('typeid','=','1')->get();
  
    $data3 = DB::table('info')->where ('typeid','=','2')->get();
   
    $data4 = DB::table('info')->where ('typeid','=','3')->get();

    $data5 = DB::table('info')->where ('typeid','=','4')->get();

    $data6 = DB::table('info')->where ('typeid','=','5')->get();

    $data7 = DB::table('info')->where ('typeid','=','6')->get();
    // 折叠菜单结束

    // 为你推荐开始
    $data8 = DB::table('info')->where ('typeid','=','7')->get();
    // 为你推荐结束
   
    $data9= DB::table('product')->paginate(5);

      // 详情开始
      $data10=DB::table('xiangqing')->get();
      // 详情结束

    session()->forget('user');
     return view('index2')->with(compact('data','data1','data2','data3','data4','data5',
    'data6','data7','data8','data9','data10'));
}


// 删除session值结束

// 评论开始
public function pinglun(){
    $data=DB::table('user')->get();
    $data1=DB::table('pinglun')->get();
    // $neirong=$_POST['neirong'];
    return view('pinglun')->with(compact('data','data1'));
}

// 评论结束

// 详情开始
public function xiangqing(){
//     if(isset( $_GET['id']))
//     {
//         $a=$_GET['id'];
//     }
//    else{
//    $a=2;
//    }
    $a=$_GET['id'];
    $data = DB::table('xiangqing')->where('id','=',$a)->first();
   // tab切换开始
//    if(isset( $_GET['major']))
//    {
//         $major= $_GET['major'];
//    }
//   else{
//    $major= '唇膏';
//   }
//    $madata=DB::table('info')->where('content','=',$major)->get();
//    $majors=DB::select('select distinct content from info where typeid = 8');

   // tab切换结束

    return view('xiangqing')->with(compact('data'));
}
// 详情结束





public function tabqie(){
     // tab切换开始
   if(isset( $_GET['major']))
   {
        $major= $_GET['major'];
   }
  else{
   $major= '唇膏';
  }
   $madata=DB::table('info')->where('content','=',$major)->get();
   $majors=DB::select('select distinct content from info where typeid = 8');
   // tab切换结束
                  return view('fenlei')->with(compact('majors','madata'));
}



// 购物车开始
public function gouwucar(){
    return view('gouwucar');
}

// 购物车结束


// 美妆馆开始
public function meizhuan(){
    $data = DB::table('info')->where('typeid','=','15')->get();
    return view('meizhuan')->with(compact('data'));
}
// 美妆馆结束


// 管理员开始
public function admin(){
    return view('adminlogin');
}
public function admincheck(){
    $adminname=$_POST['adminname'];
    $password=$_POST['password'];
     $ya = DB::table('admin')->where('adminname','=',$adminname)->get();
    
     $num=count($ya);
 
if($num>=1)
    {
        if( $password==$ya[0]->password){
    session(['user'=>$adminname]);
    
    return view('backstage')->with(compact('ya'));

        }
        else{
            return view('adminlogin');
        }

       
    }else
    {
        
        return view('adminlogin');
    };
 
}

// 管理员结束




// 后台管理开始
public function houtai(){
    return view('backstage');
}

public function tree(){
    return view('tree');
}

public function htmain(){
    return view('htmain');
}

// 商品更新开始


public function shopupdate(){
     // 分页开始
     $data9= DB::table('product')->paginate(5);
     // 分页结束
    return view('shopupdate')->with(compact('data9'));
}

public function shopupdateview(){
    $a=$_GET['id'];
    $data = DB::table('product')->where('id','=',$a)->first();
    return view('shopupdateview')->with(compact('data'));
}

public function shopupdateview2(){
   
    $id= $_GET['id'];
    $photo= $_POST['photo'];
    $name= $_POST['name'];
    $price= $_POST['price'];
    $data = [
                    'photo' =>$photo,
                    'name' =>$name,
                    'price' =>$price,
                ];
     try{
         
              $jj=DB::table('product')->where('id','=',$id) ->update($data);
                   if($jj==true){
                    echo "<script>window.alert('商品更新啦');window.location.href='/shopupdate' </script>";
                    echo "插入成功";
                   }
                   else{
                    echo "<script>window.alert('商品更新失败哦');window.location.href='/shopupdate' </script>";
                    echo "插入失败";
                   }
        }
        catch(Exception $ex){
            echo "<script>window.alert('更新失败哦');window.location.href='/shopupdate' </script>";
            
        }
}

// 商品更新结束


// 商品删除开始

public function deleteshop(){
    $a=$_GET['id'];
    $res = DB::table('product')->where('id','=',$a)->delete();
    if($res==true){
        echo "<script>window.alert('商品下架成功');window.location.href='/shopupdate' </script>";
        echo "插入成功";
       }
       else{
        echo "<script>window.alert('商品下架失败');window.location.href='/shopupdate' </script>";
        echo "插入失败";
       }
}
// 商品删除结束



// 商品插入开始
public function insertshop(){

    return view('insertshop');
   
}


public function insertshop1(Request $kk){
    $photo= $_POST['photo'];
    $name= $_POST['name'];
    $price= $_POST['price'];
    $data = [
                    'photo' =>$photo,
                    'name' =>$name,
                    'price' =>$price,
                ];
        try{
        $a = DB::table('product')->insert($data);
       if($a==true){
        echo "<script>window.alert('成功上架一件商品啦');window.location.href='/shopupdate' </script>";
        echo "上架成功";
       }
       else{
        echo "<script>window.alert('上架失败');window.location.href='/shopupdate' </script>";
        echo "上架失败";
       }
    }
    catch(Exception $ex){
        echo "<script>window.alert('上架失败');window.location.href='/shopupdate' </script>";
        
    }

    if($kk->has("photo"))
    {
        $file=$kk->file('photo');
        if($file->isValid())
        {
            $name=md5(microtime(true)).'.'.$file->extension();
            $file->move('static/upload/',$name);
            $path='/static/upload/'.$name;
            return "<a href='$path'>查看文件</a>";
        }
        else
        {
            return $file->getErrorMessage();
        }
    }
}


// 商品插入结束

// 后台管理结束




// 账号更新开始
public function update(){
    $data = DB::table('user')->get();
    $data1 = DB::table('admin')->get();
    return view('update')->with(compact('data','data1'));
}
public function showtable(){
    $a=$_GET['id'];
      $data = DB::table('user')->where('userid','=',$a)->first();
      return view('showtable')->with(compact('data'));
 }

public function updatetable(){
   
    $id= $_GET['id'];
    $name= $_POST['name'];
    $psw= $_POST['psw'];
    $phone= $_POST['phone'];
    $data = [
                    'username' =>$name,
                    'password' =>$psw,
                    'phone' =>$phone,
                ];
               

                try{
                    $b=DB::table('user')->where('userid','=',$id) ->update($data);
                   if($b==true){
                    echo "<script>window.alert('一名成员更新啦');window.location.href='/update' </script>";
                    echo "更新成功";
                   }
                   else{
                    echo "<script>window.alert('更新失败哦');window.location.href='/update' </script>";
                    echo "更新失败";
                   }
                }
                catch(Exception $exl){
                    echo "<script>window.alert('更新失败哦');window.location.href='/update' </script>";
                    
                }
}



public function showtable1(){
    $a=$_GET['id'];
      $data = DB::table('admin')->where('id','=',$a)->first();
      return view('showtable1')->with(compact('data'));
 }
 
public function updatetable1(){
   
    $id= $_GET['id'];
    $name= $_POST['name'];
    $psw= $_POST['psw'];
    $phone= $_POST['phone'];
    $data = [
                    'adminname' =>$name,
                    'password' =>$psw,
                    'phone' =>$phone,
                ];
              
                try{
                    $b= DB::table('admin')->where('id','=',$id) ->update($data);
                   if($b==true){
                    echo "<script>window.alert('一名成员更新啦');window.location.href='/update' </script>";
                    echo "更新成功";
                   }
                   else{
                    echo "<script>window.alert('更新失败哦');window.location.href='/update' </script>";
                    echo "更新失败";
                   }
                }
                catch(Exception $exl){
                    echo "<script>window.alert('更新失败哦');window.location.href='/update' </script>";
                    
                }
    
}

// 账号更新结束


// 账号插入开始
public function insert(){
   
    return view('insert');
   
}


public function insertable(){
    $name=$_POST['name'];
    $psw=$_POST['psw'];
    $phone=$_POST['phone'];
         
        $data =[
            'username' => $name,
            'password' =>  $psw,
            'phone' => $phone,
        ];
        try{
        $a = DB::table('user')->insert($data);
       if($a==true){
        echo "<script>window.alert('成功添加一名新成员啦');window.location.href='/insert' </script>";
        echo "插入成功";
       }
       else{
        echo "<script>window.alert('插入失败');window.location.href='/insert' </script>";
        echo "插入失败";
       }
    }
    catch(Exception $ex){
        echo "<script>window.alert('插入失败');window.location.href='/insert' </script>";
        
    }
}





public function admininsert(){
   
    return view('admininsert');
   
}

public function adinsertable(){
    $name=$_POST['name'];
    $psw=$_POST['psw'];
    $phone=$_POST['phone'];
         
        $data1 =[
            'adminname' => $name,
            'password' =>  $psw,
            'phone' => $phone,
        ];
        try{
        $b = DB::table('admin')->insert($data1);
       if($b==true){
        echo "<script>window.alert('成功添加一名成员啦');window.location.href='/admininsert' </script>";
        echo "插入成功";
       }
       else{
        echo "<script>window.alert('插入失败');window.location.href='/admininsert' </script>";
        echo "插入失败";
       }
    }
    catch(Exception $exl){
        echo "<script>window.alert('插入失败');window.location.href='/admininsert' </script>";
        
    }
}

// 账号插入结束





// 账号注销开始
public function delete(){
    $a=$_GET['id'];
    $res = DB::table('user')->where('userid','=',$a)->delete();
    if($res==true){
        echo "<script>window.alert('注销成功');window.location.href='/update' </script>";
        echo "插入成功";
       }
       else{
        echo "<script>window.alert('注销失败');window.location.href='/update' </script>";
        echo "插入失败";
       }
}


public function delete1(){
    $a=$_GET['id'];
    $res = DB::table('admin')->where('id','=',$a)->delete();
    if($res==true){
        echo "<script>window.alert('注销成功');window.location.href='/update' </script>";
        echo "插入成功";
       }
       else{
        echo "<script>window.alert('注销失败');window.location.href='/update' </script>";
        echo "插入失败";
       }
}
// 账号注销结束





// 我的收藏开始

public function shoucang(){
  $a=$_GET['id'];
$data = DB::table('xiangqing')->where('id','=',$a)->first();
// dump($data->name);
 $data1 =[
            'name' => $data->name,
            'img' =>  $data->img,
            'miaoshu' => $data->miaoshu,
        ];
        try{
        $b = DB::table('cart')->insert($data1);
        $data55 = DB::table('xiangqing')->paginate(8);
       if($b==true){
        echo "<script>window.alert('收藏成功');window.location.href='/index' </script>";
        return view('shoucang')->with(compact('data','data1','data55'));
       }
       else{
        echo "<script>window.alert('插入失败');window.location.href='/index' </script>";
        echo "插入失败";
       }
    }
    catch(Exception $exl){
        echo "<script>window.alert('插入失败');window.location.href='/index' </script>";
        
    }


    // return view('shoucang')->with(compact('data'));
}

// 我的收藏结束



public function shoucangyemian(){
    $data = DB::table('cart')->get();
    
    return view('shoucangyemian')->with(compact('data'));
}



// 取消收藏开始

public function cancelshoucang(){
    $a=$_GET['id'];
    $res = DB::table('cart')->where('id','=',$a)->delete();
    if($res==true){
        echo "<script>window.alert('已取消收藏');window.location.href='/shoucangyemian' </script>";
        echo "插入成功";
       }
       else{
        echo "<script>window.alert('注销失败');window.location.href='/shoucangyemian' </script>";
        echo "插入失败";
       }
}

// 取消收藏结束





















}
?>