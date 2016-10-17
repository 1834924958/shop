<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MimaController extends Controller
{
   
    //进行修改密码;
     // 进行修改的操作;
    public function edit($id)
    {
        $user = \DB::table('user')->where('id','=',$id)->first();
        // dd($user);
        return view('home.password.mima',['user'=>$user]);
    }
      public function update($id,Request $request)
    {
        // dd($a);
        // "d41d8cd98f00b204e9800998ecf8427e"没有输入密码;
        // dd(strlen($request->pass));
        // 如果密码没有输入,那么它还会跳转到本页面
        $m = md5($request->pass);
        // dd(strlen($m));
        // dd(strlen($request->pass));
        $mm = md5($request->password);

        if($m == "d41d8cd98f00b204e9800998ecf8427e" || strlen($request->pass) < 6)
        {
            return view('home.password.mima');
        }else{
                //进行判断两次的密码输入是否正确,正确的话,进行修改,否则还是跳转到本页面;
                if($m == $mm)
                {
                        $xg = \DB::table('user')->where('id','=',$id)->update(['pass'=>$m]);
                        //如果修改成功跳转到登录界面;
                            return redirect("/denglu");
                }else{
                    return view('home.password.mima');
                }
        }
        // if($request->pass == "" || strlen($request->pass) < 6)
        // {
        //     return view('home.password.mima');
        // }else{
        //         //进行判断两次的密码输入是否正确,正确的话,进行修改,否则还是跳转到本页面;
        //         if($request->pass == $request->password)
        //         {
        //                 $xg = \DB::table('user')->where('id','=',$id)->update(['pass'=>$request->pass]);
        //                 //如果修改成功跳转到登录界面;
        //                     return redirect("/denglu");
        //         }else{
        //             return view('home.password.mima');
        //         }
        // }

    } 

}

