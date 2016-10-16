<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\home;
class IndexController extends Controller 
{
	public function index()
	{
		// $qwer = \DB::table('plate')->select('name')->get();
			// return view("home.index",["qwer"=>$qwer]);

		
			// 网站的开关的判断,以及跳转页面
			$on = \DB::table('config')->first();
			if($on->kai=='0'){
				$qwer = \DB::table('plate')->get();
				$xinpin = \DB::table("shop")->orderby('id','desc')->limit('4')->get();             
			return view("home.index",['qwer'=>$qwer,'xinpin'=>$xinpin]);
			}else{
				return view('errors.baohu');
		}
	}
	public function xinxi()
	{
		return view("home.xinxi");
	}

	public function denglu()
	{

		return view('home.register');
	}
    //2 执行登录 
    public function doLogin(Request $request)
    {
        //验证数据库中的用户信息 使用model类 
        $user = new home();
        $db = $user->checkUser($request);

        //2 写入到session 
        if($db){


            session(['homeuser'=>$db]);
           
            return redirect("/qian");
        }else{
            // return back()->with('msg',"用户名密码错误");
        }
        //3 页面实现跳转
    }


    // 3 执行退出 
    public function logout()
    {
        //清空session
        session()->forget("homeuser");
        //实现页面跳转
        return redirect("qian");
    }


	public function create()
	{
		return view('home.create');
	}

	public function stor(Request $request)
	{
		$name=$request->input('user');
		// print_r($name);
		// return $name;
		$db=\DB::table("user")->where('name',$name)->first();
		
		// ;dd($aa);
		if($db){
			return 'no';
		}else{
			return 'yes';
		}
	}


	public function store(Request $request)
	// {dd($request);
	{
		session_start();
	    if($_SESSION['code'] !== $request['code']){
			return view('home.create');
    	}
		$name=$request['name'];
		$db=\DB::table("user")->where('name',$name)->first();
		if($db || preg_match('/^\w{4,16}$/',$name)==null){
			return view('home.create');
		}else{

			if($request['pass']==$request['cpass'] && !empty($request['pass']) && !empty($request['name'])){
				$var = \DB::table("user")->insert(['name'=>$request['name'],'pass'=>$request['pass']]);
				if($var>0){
					return view('home.register');
				}else{
					return view('home.create');
				}
			}else{
				return view('home.create');
			}
		}
	}



	// 进行修改的操作;
    public function edit($id){
        $user = \DB::table('user')->where('id','=',$id)->first();
        return view('home.xinxi',['user'=>$user]);
    }

      public function update($id,Request $request){
        $a = $request->all();

        $email=$a['email'];
        $tel=$a['tel'];
        if(preg_match('/^[0-9a-zA-Z]+@(([0-9a-zA-Z]+)[.])+[a-z]{2,4}$/',$email)==null || preg_match('/^(0|86|17951)?(13[0-9]|15[012356789]|1[78][0-9]|14[57])[0-9]{8}$/',$tel)==null){
        	return view('home.xinxi');
        }else{
	        $xg = \DB::table('user')->where('id','=',$id)->update(['uname'=>$a['uname'],'email'=>$a['email'],'tel'=>$a['tel']]);
	        //如果修改成功跳转到主界面;
	        if($xg>0){
	            // return $this->index();
	            return view('home.xinxi');
	        }else{
	            echo '修改失败';
	        }   
	    }
    }
        //一大类商品
    public function fenye(Request $request)
	{
		$a = $request->all();
		$id=$a['id'];
		$shop = \DB::table('chileplate')->where('pid',$id)->first();
		$aa = $shop->pid;
		$bb = $shop->id;
		$shopq = \DB::table('chileplate')->where('pid',$id)->get();
		$head = \DB::table('plate')->where('id',$id)->get();
		
		


		 
		return view("home.list",['shopq'=>$shopq,'head'=>$head]);
	}

	//单个商品
    public function shopping(Request $request)
	{

		
		$id=$request->id;
		$shopping = \DB::table('shop')->where('id',$id)->get();
		return view("home.detail",['shopping'=>$shopping]);
	}

	//搜索查询
	public function sousuo(Request $request)
	{
		$a = $request->all();
		$id=$a['name'];
		$db=\DB::table('shop');
		$where=[];
			if($request->has('name')){
				$name=$request->input('name');
				$db->where('name','like',"%{$name}%");
				$where['name'] = $name;
			}
			$list=$db;
			return view("home.search")->with(["list"=>$list,"where"=>$where]);
	}
	public function souso()
	{
		return view("home.search");
	}
	//购物车
	public function car(Request $request)
	{

		$a = $request->all();
		$uid=session('homeuser')->id;
		$id=$a['id'];
		$carr=\DB::table("car")->insert(['pid'=>$id,'cid'=>$uid]);


		return redirect('/home/carr');
	}
	public function carr()
	{
		
		return view('home.car');
	}
	public function decar(Request $request)
	{
		$a=$request->id;

		
		$del = \DB::table('car')->where('pid',$a)->delete();
		return redirect('/home/carr');
	}
	//立即购买
	public function buy(Request $request)
	{
		foreach($request->only('count')['count'] as $k => $v){
				$shopid = $k;
				$num = $v;
		}
		$buy = \DB::table('shop')->where('id',$shopid)->get();

		return view("home.buy",['buy'=>$buy,'num'=>$num]);

	}
	//购物车下单
	public function carbuy(Request $request)
	{

		
		foreach($request->only('checkbox')['checkbox'] as $kk => $vv){

			$shopi = $kk;
			
		}
				foreach($request->only('count')['count'] as $k => $v){

			$shop = $v;
			
		}
		dd($shop);
		
	}

}
