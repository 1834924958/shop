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
            if($request->has('pname')){
                $pname = $request->input('pname');
                $db->where('pname','like',"%{$pname}%");
                $where['pname'] = $pname;
            }
            $list=$db->paginate(4);
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
        $file = $request->file('photo');
        // dd($file);
        if($file == null){
            return view('admin.plate.plate');
        }
        //3 执行上传
        // 当前文件路径使用realpath("./")查看
        if($file->isValid()){
            $ext = $file->getClientOriginalExtension();//获得后缀 
            $filename = time().rand(1000,9999).".".$ext;//新文件名
            $file->move("./images/child/",$filename);

            $db=\DB::table('plate')->insert(['name'=>$request['name'],'pname'=>$request->pname,'photo'=>$filename]);
            if($db>0){
                return redirect("/platee");
            }else{
                echo '添加失败';
            }
        }
    }
    //修改
    public function edit($id){
        $plate = \DB::table('plate')->where('id','=',$id)->first();
        return view('admin.plate.edit',['plate'=>$plate]);
    }
    //执行修改
    public function update($id,Request $request){
        $file = $request->file('photo');
          // dd($file);
        // if($file == null){
        //       $plate = \DB::table('plate')->where('id','=',$id)->first();
        //         return view('admin.plate.edit',['plate'=>$plate]);
        // }
        //3 执行上传
        // 当前文件路径使用realpath("./")查看
        if(!empty($file)){
            if($file->isValid()){
                $ext = $file->getClientOriginalExtension();//获得后缀 
                $filename = time().rand(1000,9999).".".$ext;//新文件名
                $file->move("./images/child/",$filename);
                $xg= \DB::table('plate')->where('id','=',$id)->update(['name'=>$request->name,'pname'=>$request->pname,'photo'=>$filename]);
                  //如果修改成功跳转到主界面;
                    if($xg>0){
                        // return $this->index();
                        return redirect("/plate");
                    }else{
                        echo '修改失败';
                    }   
               }

                  
        }else{
                    $xg= \DB::table('plate')->where('id','=',$id)->update(['name'=>$request->name,'pname'=>$request->pname]);
                    //如果修改成功跳转到主界面;
                    if($xg>0){
                        // return $this->index();
                        return redirect("/plate");
                    }else{
                        echo '修改失败';
                    }
                }   
    }
}
