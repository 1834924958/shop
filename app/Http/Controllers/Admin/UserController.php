<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    ////浏览信息的页面;
    // public function index(){
    //     // return 'hello chenxi';
    //     //进行获取user表中的所有的数据
    //     $list = \DB::table('user')->get();
    //     // var_dump($list);
    //     // dd($list);
    //     //显示给用户的视图;
    //     return view('admin.user.index',['list'=>$list]);
    // }
    //进行搜索和分页;

    public function index(Request $request){
        //1.进行查询获取一个连接对象,
        $db = \DB::table('user');
        //2.进行搜索的条件;
     $where = [];   
        if($request->has('name')){
            $name = $request->input('name');
            $db->where('name', 'like', "%{$name}%");//实现过滤 控制器
            $where['name'] = $name;//然后为视图准备参数

        }
        //进行判断是不是存在
        // if($request->has('sex')){
        //     $sex = $request->input('sex');
        //     $db->where('sex','=',"{$sex}");
        //     $where['sex'] = $sex;
        // }
        //3. 进行分页,
        //获取数据;
        $list = $db->paginate(4);
        //模板;
        return view("admin.user.index")->with(["list"=>$list,"where"=>$where]);
    }

    //执行删除的操作;
    public function destroy($id=null){
        //进行获得删除的影响行数;
        $m = \DB::table('user')->where('id','=',$id)->delete();
        if($m>0){
            //成功会跳转到index()中,也就是执行删除后跳到
            //用户浏览信息的页面;
            return redirect("/admin/user");
        }
    }
    //状态
    public function status(Request $request){
        //进行获得删除的影响行数;
        if($request->button('user')==0){
            $m = \DB::table('user')->where('id','=',$id)->update(['status'=>1]);
        }else{
            $m = \DB::table('user')->where('id','=',$id)->update(['name'=>0]);
        }
        if($m>0){
            //成功会跳转到index()中,也就是执行删除后跳到
            //用户浏览信息的页面;
            return redirect("/admin/user");
        }
    }
    //执行添加;

  public function create(){
        //弹出添加的页面;
        return view('admin.user.add');
    }
   //进行添加数据;
   public function store(Request $request){
        //接收到add.blade.php中的form表中中的值;
     $b = $request->all();
     // dd($b);
        $t = \DB::table('user')->insertGetId([ 'name'=>$b['name'],'pass'=>$b['pass'],'auth'=>$b['auth']]);
        if ($t > 0){
            return redirect("/admin/user");
        }else{
            echo '添加信息失败';
        }
        
    }


    // 进行修改的操作;
    public function edit($id){
        $user = \DB::table('user')->where('id','=',$id)->first();
        return view('admin.user.edit',['user'=>$user]);
    }

      public function update($id,Request $request){
        $a = $request->all();


        $xg = \DB::table('user')->where('id','=',$id)->update(['name'=>$a['name'],'pass'=>$a['pass']]);
        //如果修改成功跳转到主界面;
        if($xg>0){
            // return $this->index();
            return redirect("/admin/user");
        }else{
            echo '修改失败';
        }   
    }
}
