@extends("home.head")
@section("content")
<link rel="stylesheet" href="{{ URL::asset('css/login-79c00dcfbb.css') }}" type="text/css">
<div class="g-bd" style="margin-top:145px">
<div class="m-bdbg">
<div class="g-row">
<div class="m-login-Page" style="display: block;background:#ededed">
	<div style="font-size:40px;">用户登录</div><br/><br/>
<form action="{{ URL('/home/login') }}" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div style="font-size:20px;">账户:</div><br/><input type="text" name="name" style="width:260px;height:30px;"><br/><br/>
<div style="font-size:20px;">密码:</div><br/><input type="password" name="pass" style="width:260px;height:30px;"><br/><br/>
<input type="submit" value="确认登录" style="font-size:30px;background:#baa078">
	<div>
				@if(session("msg"))
					<span style="color:red">{{ session("msg") }}</span>
				@endif
			</div>
</form>
</div>
</div>
</div>
</div>
@endsection

