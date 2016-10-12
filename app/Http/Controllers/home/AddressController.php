<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AddressController extends Controller
{
	// 浏览地址信息的界面

      public function index(){
        //进行获取user表中的所有的数据
        $list = \DB::table('user')->get();
        // dd($list);
        //显示给用户的视图;
        return view('home.user.asite',['list'=>$list]);

    }



    // public function find($upid=0){
    // 	$list = \DB::table("district")->where("upid",$upid)->get();
    // 	// dd($list);
    // 	return json_encode($list);
    // }
}
