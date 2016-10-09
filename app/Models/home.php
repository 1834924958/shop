<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Http\Request;

class  home extends Model
{
     //1 指定和users model类 关联的表名
    protected $table = "user";


    //2 执行数据库的验证 

    public function checkUser(Request $request)
    {
    	//1 验证用户名密码是否正确 
    		//1 接收表单的值 
    		$name = $request->input('name');
            $pass = $request->input('pass');

            //2 用户名是否存在
            $db = \DB::table('user')->where("name",$name)->first();
            // dd($db);
            if($db){
                if($db->pass == $pass){
                    return $db;//返回当前对象
                }
            }

            return null;//用户名 密码不存在都返回空用户名 密码不存在都返回空

    }
}
