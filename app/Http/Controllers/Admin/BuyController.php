<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BuyController extends Controller
{
    //查找
    public function index(Request $request){
        $db=\DB::table('buy');
        $where=[];
            if($request->has('name')){
                $name=$request->input('name');
                $db->where('name','like',"%{$name}%");
                $where['name'] = $name;
            }
            $list=$db->paginate(6);
            return view("admin.buy.index")->with(["list"=>$list,"where"=>$where]);
    }
    //删除
    public function destroy($id = null){
        $db=\DB::table('buy')->where('id','=',$id)->delete();
        if($db>0){
            return redirect("/admin/buy");
        }
    }

    //修改
    public function edit($id){
        $plate = \DB::table('buy')->where('id','=',$id)->first();
        return view('admin.buy.edit',['plate'=>$plate]);
    }
    //执行修改
    public function update($id,Request $request){
        $xg= \DB::table('buy')->where('id','=',$id)->update(['name'=>$request->name,'address'=>$request->address,'tel'=>$request->tel]);


        if($xg>0){
            return redirect("/admin/buy");
        }else{
            echo '修改失败';
        }
    }

}
