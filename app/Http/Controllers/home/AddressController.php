<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AddressController extends Controller
{
	// 浏览地址信息的界面

      public function index()
    {

        $list = \DB::table('address')->where('uid',session('homeuser')->id)->get();
        // dd($list);
        //显示给用户的视图;
        return view('home.asite.asite',['list'=>$list]);
    }
      //执行删除的操作;
    public function destroy($id=null)
    {
        //进行获得删除的影响行数;
        $m = \DB::table('address')->where('id','=',$id)->delete();
        if($m>0){
            //成功会跳转到index()中,也就是执行删除后跳到
            //用户浏览信息的页面;
            return redirect("/site");
        }
    }

    //地址的管理
    public function find($upid=0)
    {
    	$list = \DB::table("district")->where("upid",$upid)->get();
    	// dd($list);
    	return json_encode($list);
    }
      //进行添加的页面
    public function create()
    {
        //弹出要添加的页面;
        return view('home.asite.address');
    }
    //添加数据
    public function store(Request $request)
    {    
        // dd($request->all());
        // dd(strlen($request->uname));
        if(strlen($request->tel) < 11 || strlen($request->uname) < 4)
        {

            return view('home.asite.address');
        }
        $xia = $request->address_xia;
        // dd($xia);
        //如果地址没有选好,那么它还会跳转到本页面
        if($xia == "-2"){
            return view('home.asite.address');
        }
        //街道
         $row = \DB::table('district')->where('id',$xia)->first();
         $areas = $row->upid;
         //区
         $area = \DB::table('district')->where('id',$areas)->first();
         $citys = $area->upid;
         //市
         $city = \DB::table('district')->where('id',$citys)->first();
         // 省
         $provinces = $city->upid;

         // dd($provinces);
         if($provinces ==0){

                $t = \DB::table('address')->insertGetId([ 'uname'=>$request->uname,'tel'=>$request->tel,'city'=>$city->name,'area'=>$area->name,'row'=>$row->name,'address'=>$request->address,'uid'=>session('homeuser')->id]);
            \DB::table('user')->where('id',session('homeuser')->id)->update(['address'=>$city->name.$area->name.$row->name.$request->address]);
            if ($t > 0)
            {
                // 成功的话会跳转到前台地址信息的首页;
                return redirect("/site");
            }else{
                echo '添加信息失败';
            }
         }else{
             $province = \DB::table('district')->where('id',$provinces)->first();
         

         // dd($province->name);

            $t = \DB::table('address')->insertGetId([ 'uname'=>$request->uname,'tel'=>$request->tel,'province'=>$province->name,'city'=>$city->name,'area'=>$area->name,'row'=>$row->name,'address'=>$request->address,'uid'=>session('homeuser')->id]);
            \DB::table('user')->where('id',session('homeuser')->id)->update(['address'=>$province->name.$city->name.$area->name.$row->name.$request->address]);
            if ($t > 0)
            {
                // 成功的话会跳转到前台地址信息的首页;
                return redirect("/site");
            }else{
                echo '添加信息失败';
            }
         }   
    }
    // 进行修改跳转的页面;
      public function edit($id)
    {
        $address = \DB::table('address')->where('id','=',$id)->first();
        return view('home.asite.edit',['address'=>$address]);
    }
    // 执行修改的操作
     public function update($id,Request $request)
    {
        // dd($request->all());
        $xl = $request->xia;
        // dd($xl);
        if($xl == "-2" || strlen($request->tel) < 11 || strlen($request->uname) < 4){
           $address = \DB::table('address')->where('id','=',$id)->first();
            return view('home.asite.edit',['address'=>$address]);  
        }
        //街道
         $row = \DB::table('district')->where('id',$xl)->first();
         $areas = $row->upid;
         //区,县
         $area = \DB::table('district')->where('id',$areas)->first();
         $citys = $area->upid;
         //市区;
         $city = \DB::table('district')->where('id',$citys)->first();
         $provinces = $city->upid;
         if($provinces == 0)
         {
               $xg = \DB::table('address')->where('id','=',$id)->update(['uname'=>$request->uname,'tel'=>$request->tel,'province'=>'','city'=>$city->name,'area'=>$area->name,'row'=>$row->name,'address'=>$request->address,'uid'=>session('homeuser')->id]);
                \DB::table('user')->where('id',session('homeuser')->id)->update(['address'=>$city->name.$area->name.$row->name.$request->address]);

         //如果修改成功跳转到主界面;
                if($xg>0){
                    return redirect("/site");
                }else{
                    echo '修改失败';
                } 
         }else{
            //省;
            $province = \DB::table('district')->where('id',$provinces)->first();
            $xg = \DB::table('address')->where('id','=',$id)->update(['uname'=>$request->uname,'tel'=>$request->tel,'province'=>$province->name,'city'=>$city->name,'area'=>$area->name,'row'=>$row->name,'address'=>$request->address,'uid'=>session('homeuser')->id]);
            \DB::table('user')->where('id',session('homeuser')->id)->update(['address'=>$province->name.$city->name.$area->name.$row->name.$request->address]);
         //如果修改成功跳转到主界面;
                if($xg>0){
                    return redirect("/site");
                }else{
                    echo '修改失败';
                } 

         }
        
    }
}
