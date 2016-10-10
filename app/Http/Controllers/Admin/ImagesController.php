<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Intervention\Image\ImageManagerStatic as Image;

class ImagesController extends Controller
{
    //浏览信息的页面;
    public function index()
   {
        // return 'hello chenxi';
        //进行获取images表中的所有的数据
        $list = \DB::table('images')->get();
        // var_dump($list);
        // dd($list);
        //显示给用户的视图;
        return view('admin.images.index',['list'=>$list]);

    }
    public function show(){
        return view('admin.images.add');	
    }
 	
    public function store(Request $request)
    {
    	//1 获得请求的信息 
    	 // dd($request);
    	 //弹出添加的页面;
        // return view('admin.images.add');
    	//2 获得上传文件的对象 返回一个UploadedFile对象 
    		$file = $request->all();


    	//3 执行上传
    	// 当前文件路径使用realpath("./")查看
    	if($file->isValid()){
    		$ext = $file->getClientOriginalExtension();//获得后缀 
    		$filename = time().rand(1000,9999).".".$ext;//新文件名
    		$file->move("./uploads/",$filename);
    	}
    }
}
