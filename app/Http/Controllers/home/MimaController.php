<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MimaController extends Controller
{
    //
    public function index(){
    	return view('home.password.mima');
    }
}
