<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

//使用自定义的model类;
use App\Models\User;

class LoginController extends Controller
{
    //1 登录表单
    public function index()
    {
        return view("admin.login");
    }
    //2 执行登录 
    public function doLogin(Request $request)
    {

        //验证数据库中的用户信息 使用model类 
        $user = new User();
        $db = $user->checkUser($request);

        //2 写入到session 
        if($db){


            session(['adminuser'=>$db]);

            return redirect("admin/index");
        }else{
            return back()->with('msg',"用户名密码错误");
        }
        //3 页面实现跳转
    }


    //3 执行退出 
    public function logout()
    {
        //清空session
        session()->forget("adminuser");
        //实现页面跳转
        return redirect("/admin/login");
    }
}
