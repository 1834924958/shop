<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PlatesController extends Controller
{
	//进行查找和分页
	public function index(Request $request){
		$db=\DB::table('chilePlate');
		$where=[];
			if($request->has('name')){
				$name=$request->input('name');
				$db->where('name','like',"%{$name}%");
				$where['name'] = $name;
			}
            

			$list = $db->paginate(4);
            
			return view("admin.childPlate.index")->with(["list"=>$list,"where"=>$where]);

	}
	//添加
    public function navigation(){

        $qwer = \DB::table('plate')->get();
        return view('admin.childPlate.plate',['qwer'=>$qwer]);
    }
    public function store(Request $request){

    	// dd($request);
    	//2 获得上传文件的对象 返回一个UploadedFile对象 
    		$file = $request->file('photo');
    		// dd($file);
            if($file == null){
                 $qwer = \DB::table('plate')->get();
                return view('admin.childPlate.plate',['qwer'=>$qwer]);
            }
		//3 执行上传
    	// 当前文件路径使用realpath("./")查看
    	if($file->isValid()){
    		$ext = $file->getClientOriginalExtension();//获得后缀 
    		$filename = time().rand(1000,9999).".".$ext;//新文件名
    		$file->move("./images/child/",$filename);
            $db= \DB::table('chilePlate')->insert(['name'=>$request->name,'pid'=>$request->pid,'pname'=>$request->pname,'photo'=>$filename]);

		        if($db>0){
		            return redirect("/childPlate");
		        }else{
		        	echo '添加失败';
		        } 
    	}

        // $db=\DB::table('chilePlate')->insert(['name'=>$request['name'],'pid'=>$request['pid']]);
        // if($db>0){
        //     return redirect("/childPlate");
        // }else{
        // 	echo '添加失败';
        // }
    }
	//删除
	public function destroy($id = null){
		$db=\DB::table('chilePlate')->where('id','=',$id)->delete();
		if($db>0){
			return redirect("/childPlate");
		}
	}
	    //执行修改的操作;
     public function edit($id){
        $plate = \DB::table('chilePlate')->where('id','=',$id)->first();
        return view('admin.childPlate.edit',['plate'=>$plate]);
    }
    public function update($id,Request $request){

        // $a = $request->all();
        // dd($request);
        $file = $request->file('photo');
          // dd($file);
        //3 执行上传
        // 当前文件路径使用realpath("./")查看
        if(!empty($file)){
            if($file->isValid()){
                $ext = $file->getClientOriginalExtension();//获得后缀 
                $filename = time().rand(1000,9999).".".$ext;//新文件名
                $file->move("./images/child/",$filename);
                $xg= \DB::table('chilePlate')->where('id','=',$id)->update(['name'=>$request->name,'pname'=>$request->pname,'photo'=>$filename]);
                  //如果修改成功跳转到主界面;
    		        if($xg>0){
    		            // return $this->index();
    		            return redirect("/childPlate");
    		        }else{
    		            echo '修改失败';
    		        }   
               }

                  
        }else{
                    $xg= \DB::table('chilePlate')->where('id','=',$id)->update(['name'=>$request->name,'pname'=>$request->pname]);
                    //如果修改成功跳转到主界面;
                    if($xg>0){
                        // return $this->index();
                        return redirect("/childPlate");
                    }else{
                        echo '修改失败';
                    }
                }   


        return view('admin.childPlate.plate');
    }


}
