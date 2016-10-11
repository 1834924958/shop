<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PlateController extends Controller
{
	//查找
	public function index(Request $request){
		$db=\DB::table('plate');
		$where=[];
			if($request->has('name')){
				$name=$request->input('name');
				$db->where('name','like',"%{$name}%");
				$where['name'] = $name;
			}
			$list=$db->paginate(2);
			return view("admin.plate.index")->with(["list"=>$list,"where"=>$where]);
	}
	//删除
	public function destroy($id = null){
		$db=\DB::table('plate')->where('id','=',$id)->delete();
		if($db>0){
			return redirect("/platee");
		}
	}

	//添加
    public function navigation(){
        return view('admin.plate.plate');
    }
    public function store(Request $request){
        $db=\DB::table('plate')->insert(['name'=>$request['name']]);
        if($db>0){
            return redirect("/platee");
        }else{
        	echo '添加失败';
        }
    }
    //修改
    public function edit($id){
	    $plate = \DB::table('plate')->where('id','=',$id)->first();
	    return view('admin.plate.edit',['plate'=>$plate]);
    }

      public function update($id,Request $request){
        $a = $request->all();


        $xg = \DB::table('plate')->where('id','=',$id)->update(['name'=>$a['name']]);
        //如果修改成功跳转到主界面;
        if($xg>0){
            // return $this->index();
            return redirect("/plate");
        }else{
            echo '修改失败';
        }   
    }
}
