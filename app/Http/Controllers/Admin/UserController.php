<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    ////浏览信息的页面;
    // public function index(){
    //     // return 'hello chenxi';
    //     //进行获取user表中的所有的数据
    //     $list = \DB::table('user')->get();
    //     // var_dump($list);
    //     // dd($list);
    //     //显示给用户的视图;
    //     return view('admin.user.index',['list'=>$list]);
    // }
    //进行搜索和分页;

    public function index(Request $request){
        //1.进行查询获取一个连接对象,
        $db = \DB::table('user');
        //2.进行搜索的条件;
     $where = []; 
       // 用户名的搜索
        if($request->has('name')){
            $name = $request->input('name');
            $db->where('name', 'like', "%{$name}%");//实现过滤 控制器
            $where['name'] = $name;//然后为视图准备参数
        }
        // 用户别名的搜索
        if($request->has('uname')){
            $uname = $request->input('uname');
            $db->where('uname','like',"%{$uname}%");
            $where['uname'] = $uname;
        }
        // email邮箱的搜索
        if($request->has('email')){
            $email = $request->input('email');
            $db->where('email','like',"%{$email}%");
            $where['email']=$email;
        }
        // 电话的搜索
           if($request->has('tel')){
            $tel = $request->input('tel');
            $db->where('tel','like',"%{$tel}%");
            $where['tel'] = $tel;
           }
        $list = $db->paginate(3);
        //模板;
        return view("admin.user.index")->with(["list"=>$list,"where"=>$where]);
    }

    //执行删除的操作;
    public function destroy($id=null){
        //进行获得删除的影响行数;
        $m = \DB::table('user')->where('id','=',$id)->delete();
        if($m>0){
            //成功会跳转到index()中,也就是执行删除后跳到
            //用户浏览信息的页面;
            return redirect("/xianshi");
        }
    }
    //状态
    public function status(Request $request){
        //进行获得删除的影响行数;
        $id = $request->id;
        $status = \DB::table('user')->where('id',$id)->first();
        $status = $status->status;
        if($status == "0"){
            $m = \DB::table('user')->where('id',$id)->update(['status'=>'1']);
        }else{
            $m = \DB::table('user')->where('id',$id)->update(['status'=>'0']);
        }
        if($m>0){
            //成功会跳转到index()中,也就是执行删除后跳到
            //用户浏览信息的页面;
            return redirect("/admin/user");
        }
    }
    //执行添加;

  public function create(){
        //弹出添加的页面;
        return view('admin.user.add');
    }
   //进行添加数据;
   public function store(Request $request){
        //接收到add.blade.php中的form表中中的值;
    // dd($request->name);
     // dd($b);
        $this->validate($request,[
                'name' => 'required|max:16',
                'email' => 'required|email',
                'pass' => 'required|max:20|min:6',
                'tel' =>   'required|min:11',
            ]);
        //2 获得上传文件的对象 返回一个UploadedFile对象 
            $file = $request->file('photo');
            // dd($request->pass);
            $mima = md5($request->pass);
            // dd($mima);
            // dd($file);
            if($file == null){
                    return view('admin.user.add');
            }
                 if($file->isValid())
                    {
                        $ext = $file->getClientOriginalExtension();//获得后缀 
                        $filename = time().rand(1000,9999).".".$ext;//新文件名
                        $file->move("./images/user/",$filename);
                            if($request->pass == $request->password)
                            {
                                $t = \DB::table('user')->insertGetId([ 'name'=>$request->name,'pass'=>$mima,'uname'=>$request->uname,'email'=>$request->email,'tel'=>$request->tel,'auth'=>$request->auth,'photo'=>$filename]);
                                        return redirect("/admin/user");
                            }else{

                                return redirect('/tianjia');
                                // return view('admin.user.add');
                            }
                    }
    }
    // 进行修改的操作;
    public function edit($id){
        $user = \DB::table('user')->where('id','=',$id)->first();
        return view('admin.user.edit',['user'=>$user]);
    }

      public function update($id,Request $request){
        // $a = $request->all();
        // dd($request->id);
               $this->validate($request,[
                'name' => 'required|max:16',
                'email' => 'required|email',
                'pass' => 'required|max:20|min:6',
                'tel' =>'required|min:11',
            ]);
            $mima = md5($request->pass);
          //2 获得上传文件的对象 返回一个UploadedFile对象 
            $file = $request->file('photo');
            // dd($file);
            if($file == null){
                $user = \DB::table('user')->where('id','=',$id)->first();
                return view('admin.user.edit',['user'=>$user]);
            }
                if($file->isValid())
                {   

                    $ext = $file->getClientOriginalExtension();//获得后缀 
                    $filename = time().rand(1000,9999).".".$ext;//新文件名
                    $file->move("./images/user/",$filename);
                    if($request->pass == $request->password)
                    {
                        $xg = \DB::table('user')->where('id','=',$id)->update(['name'=>$request->name,'pass'=>$mima,'uname'=>$request->uname,'email'=>$request->email,'tel'=>$request->tel,'auth'=>$request->auth,'photo'=>$filename]);
                        //如果修改成功跳转到主界面;
                            return redirect("/admin/user");
                    }else{
                        
                        return view('admin.user.info');
                        // return redirect("/tianjia");
                    } 
                }
    }
}
