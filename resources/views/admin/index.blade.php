@extends('admin.base.base')
    @section('content')
    <!-- 后台登录成功的时候会显示这个界面 -->
    	<section id="content" class="conteiner">
	    	<div class="jumbotron tile-light">
	            <div class="container">
	            	<!-- 显示管理员的信息 -->
	                <h1>Hello, {{  session('adminuser')->name }}管理员!</h1>
	                <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
	                <!-- 执行退出的操作de -->
	                <p><a class="btn btn-alt btn-lg" href="{{ asset('admin/logout') }}">QUIT</a></p>               
	            </div>
	        </div>
	     </section>
    @endsection