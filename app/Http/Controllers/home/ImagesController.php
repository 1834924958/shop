<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ImagesController extends Controller
{
    //执行前台上传头像的操作
    public function edit($id){
    	$user = \DB::table('user')->where('id','=',$id)->first();
        return view('home.images.edit',['user'=>$user]);
    }
    public function update($id,Request $request){
      		// dd($request);
	        // 进行头像的修改;
    	$user = \DB::table('user')->where('id','=',$id)->first();
	        $file = $request->file('photo');
         		// dd($file);
	        if($file == null){
	        	return view('home.images.edit',['user'=>$user]);
	        }else{
	        if($file->isValid()){
	         $ext = $file->getClientOriginalExtension();//获得后缀 
           		 $filename = time().rand(1000,9999).".".$ext;//新文件名
            	$file->move("./images/user/",$filename);
           	$xiu = \DB::table('user')->where('id','=',$id)->update(['photo'=>$filename]);
	           	if($xiu>0){
	           			return view("home.xinxi");
	           		}else{
	           			echo '修改失败';
	           		}	
	 		}
	 	}

	 }
}

