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
        // dd($request->pass);
        //进行判断两次的密码输入是否正确,正确的话,进行修改,否则还是跳转到本页面;
        if($request->pass == $request->password)
        {
                $xg = \DB::table('user')->where('id','=',$id)->update(['pass'=>$request->pass]);
                //如果修改成功跳转到登录界面;
                    return redirect("/denglu");
        }else{
            return view('home.password.mima');
        }
    } 
}

