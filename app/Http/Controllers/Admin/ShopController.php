<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
	//查找
	public function index(Request $request){
		$db=\DB::table('shop');
		$where=[];
			if($request->has('name')){
				$name=$request->input('name');
				$db->where('name','like',"%{$name}%");
				$where['name'] = $name;
			}
			$list=$db->paginate(4);
			return view("admin.shop.index")->with(["list"=>$list,"where"=>$where]);
	}
	//删除
	public function destroy($id = null){
		$db=\DB::table('shop')->where('id','=',$id)->delete();
		if($db>0){
			return redirect("/shop");
		}
	}
	//修改
    public function edit($id){
	    $plate = \DB::table('shop')->where('id','=',$id)->first();
	    return view('admin.shop.edit',['plate'=>$plate]);
    }
    //执行修改
    public function update($id,Request $request){
        $file = $request->file('photo');
          //dd($file);
        //3 执行上传
        // 当前文件路径使用realpath("./")查看
        if(!empty($file)){
            if($file->isValid()){
                $ext = $file->getClientOriginalExtension();//获得后缀 
                $filename = time().rand(1000,9999).".".$ext;//新文件名
                $file->move("./images/child/",$filename);
                $xg= \DB::table('shop')->where('id','=',$id)->update(['name'=>$request->name,'price'=>$request->price,'briefing'=>$request->briefing,'merchant'=>$request->merchant,'sales'=>$request->sales,'service'=>$request->service,'photo'=>$filename]);
                  //如果修改成功跳转到主界面;
                    if($xg>0){
                        // return $this->index();
                        return redirect("/shop");
                    }else{
                        echo '修改失败';
                    }   
               }

                  
        }else{
            $xg= \DB::table('shop')->where('id','=',$id)->update(['name'=>$request->name,'price'=>$request->price,'briefing'=>$request->briefing,'merchant'=>$request->merchant,'sales'=>$request->sales,'service'=>$request->service]);
            //如果修改成功跳转到主界面;
            if($xg>0){
                // return $this->index();
                return redirect("/shop");
            }else{
                echo '修改失败';
            }
        }   
    }

	//添加
    public function tianjia(){
        $qwe = \DB::table('plate')->get();
        $qwer = \DB::table('chileplate')->get();

        return view('admin.shop.plate',['qwe'=>$qwe,'qwer'=>$qwer]);
    }
    public function store(Request $request){

    	// dd($request);
    	//2 获得上传文件的对象 返回一个UploadedFile对象 
    		$file = $request->file('photo');
    		// dd($file);
		//3 执行上传
    	// 当前文件路径使用realpath("./")查看
        // dd($file);
        if($file == null){

            return redirect('/tjshops');
        }

    	if($file->isValid()){
    		$ext = $file->getClientOriginalExtension();//获得后缀 
    		$filename = time().rand(1000,9999).".".$ext;//新文件名
    		$file->move("./images/child/",$filename);
            $db= \DB::table('shop')->insert(['name'=>$request->name,'price'=>$request->price,'sid'=>$request->sid,'uid'=>$request->uid,'briefing'=>$request->briefing,'merchant'=>$request->merchant,'sales'=>$request->sales,'service'=>$request->service,'photo'=>$filename]);

		        if($db>0){
		            return redirect("/shop");
		        }else{
		        	echo '添加失败';
		        } 
    	}
    }
}
