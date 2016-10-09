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
		return view("home.index");
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
           
            return view("home.index");
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
}
