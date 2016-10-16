<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CarController extends Controller
{
	//查找
	public function index(Request $request){
		$db=\DB::table('car');
		$where=[];
			if($request->has('pid')){
				$pid=$request->input('pid');
				$db->where('pid','like',"%{$pid}%");
				$where['pid'] = $pid;
			}
			$list=$db->paginate(6);
			return view("admin.car.index")->with(["list"=>$list,"where"=>$where]);
	}
	//删除
	public function destroy($id = null){
		$db=\DB::table('car')->where('id','=',$id)->delete();

		if($db>0){
			return redirect("/admin/car");
		}
	}
}
