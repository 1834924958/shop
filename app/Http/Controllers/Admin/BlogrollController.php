<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogrollController extends Controller
{
    // public function index(){
    //     // return 'hello chenxi';
    //     //进行获取user表中的所有的数据
    //     $list = \DB::table('blogroll')->get();
    //     // var_dump($list);
    //     // dd($list);
    //     //显示给用户的视图;
    //     return view('admin.blogroll.index',['list'=>$list]);
    // }
    // 进行搜索和分页;

    public function index(Request $request){
        //1.进行查询获取一个连接对象,
        $db = \DB::table('blogroll');
        //2.进行搜索的条件;
     $where = [];   
        if($request->has('name')){
            $name = $request->input('name');
            $db->where('name', 'like', "%{$name}%");//实现过滤 控制器
            $where['name'] = $name;//然后为视图准备参数

        }

        $list = $db->paginate(3);
        //模板;
        return view("admin.blogroll.index")->with(["list"=>$list,"where"=>$where]);
    }

    //执行删除的操作;
    public function destroy($sanc=null){
        //进行获得删除的影响行数;
        $m = \DB::table('blogroll')->where('id','=',$sanc)->delete();
        if($m>0){
            //成功会跳转到index()中,也就是执行删除后跳到
            //用户浏览信息的页面;
            return redirect("/admin/blogroll");
        }
    }

    // 执行添加
    public function create(){
        //弹出添加的页面;
        return view('admin.blogroll.add');
    }
  
     //进行添加数据;
   public function store(Request $request){
        //接收到add.blade.php中的form表中中的值;
     $b = $request->all();
     // dd($b['address']);
     if($b['name'] == ""  || $b['address'] == ""){
        return view('admin.blogroll.add');
     }else{

        $t = \DB::table('blogroll')->insertGetId([ 'name'=>$b['name'],'address'=>$b['address']]);
        if ($t > 0){
            return redirect("/admin/blogroll");
        }else{
            echo '添加友情链接信息失败';
        }

    }


    }
     // 进行修改的操作;
    public function edit($id){
        $blogroll = \DB::table('blogroll')->where('id','=',$id)->first();
        // dd($youq);
        return view('admin.blogroll.edit',['blogroll'=>$blogroll]);
    }
    // /执行修改;
      public function update($id,Request $request){
        $a = $request->all();
        // dd($a);
        $xg = \DB::table('blogroll')->where('id','=',$id)->update(['name'=>$a['name'],'address'=>$a['address']]);
        //如果修改成功跳转到主界面;
        if($xg>0){
            // return $this->index();
            return redirect("/admin/blogroll");
        }else{
            return view("admin.user.info");
        }   
    }

}
