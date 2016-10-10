<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PlatesController extends Controller
{
	//查找
	public function index(Request $request){
		$db=\DB::table('chilePlate');
		$where=[];
			if($request->has('name')){
				$name=$request->input('name');
				$db->where('name','like',"%{$name}%");
				$where['name'] = $name;
			}
			$list=$db->paginate(2);
			return view("admin.childPlate.index")->with(["list"=>$list,"where"=>$where]);
	}

}
