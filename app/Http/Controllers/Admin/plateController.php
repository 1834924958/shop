<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class plateController extends Controller
{
    public function navigation(){
        return view('admin.plate.plate');
    }
    public function store(Request $request){
        $db=\DB::table('plate')->insert(['name'=>$request['name']]);
        if($db>0){
            return view('admin.plate.plate');
        }
    }
}
