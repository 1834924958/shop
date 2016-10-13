<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PeizController extends Controller
{
    ///浏览信息的页面;
    public function index(){
    	$list = \DB::table('config')->get();
    		// dd($list);
    	return view('admin.config.index',['list'=>$list]);
    }

    public function edit($id)
    {
    	$config = \DB::table('config')->where('id','=',$id)->first();
    	// dd($config);
    	return view('admin.config.pz',['config'=>$config]);
    }

	public function update($id,Request $request){
	  // dd($request);
        $file = $request->file('photo');
             // dd($file);
        //3 执行上传
        // 当前文件路径使用realpath("./")查看
        if($file->isValid()){
            $ext = $file->getClientOriginalExtension();//获得后缀 
            $filename = time().rand(1000,9999).".".$ext;//新文件名
            $file->move("./images/config/",$filename);
            // dd($file);
             // \DB::table('images')->insertGetId(['name'=>$request->name,'photo'=>$filename]);
             $xiu = \DB::table('config')->where('id','=',$id)->update(['title'=>$request->title,'keywords'=>$request->keywords,'content'=>$request->content,'kai'=>$request->kai,'copyright'=>$request->copyright,'photo'=>$filename]);
             // dd($xiu);
              if($xiu>0){
                    // return $this->index();
                    return redirect("/admin/config");
                }else{
                    return view("admin.config.pz");
                }   
        }
    }
}
