<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Intervention\Image\ImageManagerStatic as Image;

class ImagesController extends Controller
{
    //浏览信息的页面;
   //  public function index()
   // {
   //      // return 'hello chenxi';
   //      //进行获取images表中的所有的数据
   //      $list = \DB::table('images')->get();
   //      // var_dump($list);
   //      // dd($list);
   //      //显示给用户的视图;
   //      return view('admin.images.index',['list'=>$list]);

   //  }
//进行执行搜索和分页
 public function index(Request $request){
        //1.进行查询获取一个连接对象,
        $db = \DB::table('images');
        //2.进行搜索的条件;
     $where = [];   
        if($request->has('name')){
            $name = $request->input('name');
            $db->where('name', 'like', "%{$name}%");//实现过滤 控制器
            $where['name'] = $name;//然后为视图准备参数

        }
        $list = $db->paginate(3);
        //显示给用户的视图,
        return view("admin.images.index")->with(["list"=>$list,"where"=>$where]);
    }
    //执行删除的操作;
    public function destroy($id=null){
        //进行获得删除的影响行数;
        $m = \DB::table('images')->where('id','=',$id)->delete();
        if($m>0){
            //成功会跳转到index()中,也就是执行删除后跳到
            //图片轮播浏览信息的页面;
            return redirect("/admin/images");
        }
    }
    //执行添加
    public function create(){
        return view('admin.images.add');	
    }
 	//添加
    public function store(Request $request)
    {
     
    	//1 获得请求的信息 
    	// dd($request);
    	//2 获得上传文件的对象 返回一个UploadedFile对象 
    		$file = $request->file('photo');
             // dd($file);

        if($file == null){
          return view('admin.images.add');
        }
    	//3 执行上传
    	// 当前文件路径使用realpath("./")查看
    	if($file->isValid()){
    		$ext = $file->getClientOriginalExtension();//获得后缀 
    		$filename = time().rand(1000,9999).".".$ext;//新文件名
    		$file->move("./images/tutu/",$filename);
             \DB::table('images')->insertGetId(['name'=>$request->name,'photo'=>$filename]);
            return redirect("/admin/images");  
    	}
    }
    //执行修改的操作;
     public function edit($id){
        $images = \DB::table('images')->where('id','=',$id)->first();
        return view('admin.images.edit',['images'=>$images]);
    }
      public function update($id,Request $request){
        // dd($request);
        $file = $request->file('photo');
             // dd($file);
        if($file == null){
          //   $images = \DB::table('images')->where('id','=',$id)->first();
          // return view('admin.images.edit',['images'=>$images]);
              $xiu = \DB::table('images')->where('id','=',$id)->update(['name'=>$request->name]);
              if($xiu>0){
                    // return $this->index();
                    return redirect("/admin/images");
                }else{
                    echo '图片轮播修改失败';
                }   
        }else{
        //3 执行上传
        // 当前文件路径使用realpath("./")查看
            if($file->isValid()){
            $ext = $file->getClientOriginalExtension();//获得后缀 
            $filename = time().rand(1000,9999).".".$ext;//新文件名
            $file->move("./images/tutu/",$filename);
             // \DB::table('images')->insertGetId(['name'=>$request->name,'photo'=>$filename]);
             $xiu = \DB::table('images')->where('id','=',$id)->update(['name'=>$request->name,'photo'=>$filename]);
              if($xiu>0){
                    // return $this->index();
                    return redirect("/admin/images");
                }else{
                    echo '图片轮播修改失败';
                }   
        }


      }
        
    }
}
