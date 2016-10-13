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
        return view('home.asite.asite',['list'=>$list]);
    }
    //地址的管理
    public function find($upid=0){
    	$list = \DB::table("district")->where("upid",$upid)->get();
    	// dd($list);
    	return json_encode($list);
    }
      //进行添加的页面
    public function create(){
        //弹出要添加的页面;
        return view('home.asite.address');
    }
    //添加数据
    public function store(Request $request)
    {

        $b = $request->all();
        
        $t = \DB::table('user')->insertGetId([ 'uname'=>$b['uname'],'tel'=>$b['tel'],'address'=>$b['address']]);
        if ($t > 0){
            // 成功的话会跳转到前台地址信息的首页;
            return redirect("/site");
        }else{
            echo '添加信息失败';
        }
        
    }
    // 进行修改跳转的页面;
      public function edit($id)
    {
        $address = \DB::table('user')->where('id','=',$id)->first();
        return view('home.asite.edit',['address'=>$address]);
    }
    // 执行修改的操作
     public function update($id,Request $request){
        $a = $request->all();
        $xg = \DB::table('user')->where('id','=',$id)->update(['uname'=>$a['uname'],'tel'=>$a['tel'],'address'=>$a['address']]);
        //如果修改成功跳转到主界面;
        if($xg>0){
            return redirect("/site");
        }else{
            echo '修改失败';
        }   
    }
}
