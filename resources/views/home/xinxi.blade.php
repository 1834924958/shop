@extends("home.head")
@section("content")
<link rel="stylesheet" href="{{ URL::asset('css/userinfo-69727f9f1d.css') }}" type="text/css">
<script type="text/javascript" async="" src="{{ URL::asset('js/userinfo-e1930fb32c.js') }}"></script>
<div class="g-bd">
<div class="g-row">
<div class="m-crumbs ">
<a href="http://you.163.com/">首页</a>
<span class="w-icon w-icon-arrow"></span>
<span class="z-cur">个人信息</span>
</div>
</div>
<div class="g-row">
<div class="g-sub">
<div class="m-userinfo">
<!-- id="j-sideAvatarWarp" -->
<?php 
    $tu = \DB::table('user')->where('id',session('homeuser')->id)->get();
?>
<div class="w-avatar">
    @foreach($tu as $tp)
            <img src=".././images/user/{{ $tp->photo }}"  id="j-sideAvatar"  style="background-image:url('.././images/user/2.jpg'); width:100px; height:100px;" >
     @endforeach

<div class="modifyAvatar w-icon-normal icon-normal-camera"></div>
<div class="mask"></div>
</div>
<div class="w-nickname"  id="j-sideNickname">{{ session('homeuser')->name  }}</div>
<!-- 进行头像的修改 -->
    <!-- <div style="position: relative;"> -->
    <?php
        $user=\DB::table('user')->where('id',session('homeuser')->id )->get();
    ?>
    @foreach($user as $tux)
        <a class="w-button switch" href="/home/{{ $tux->id }}/edit">修改头像</a>
       <!--  <input type="submit" style=" width: 100px;height:45px;position: relative;z-index: 9;opacity: 0;">
        <label style="position: absolute; background:#B4A078;display:inline-block;color:#333333;width: 100px;height: 45px;line-height: 45px;text-align: center;top: 10px;left: 40px;">修改头像</label>
       
    </div> -->
    @endforeach
</div>
<script>
var membershipOn = false;
membershipOn = true;
</script>
<div class="m-menu">
<a href="http://you.163.com/user/info" class="w-menu-item active">个人信息</a>
<a href="http://you.163.com/order/myList" class="w-menu-item ">订单管理</a>
<a href="http://you.163.com/address/list" class="w-menu-item ">地址管理</a>
<a href="http://you.163.com/coupon" class="w-menu-item ">优惠券</a>
<a href="http://you.163.com/user/giftCard" class="w-menu-item ">礼品卡</a>
<a href="http://you.163.com/user/securityCenter" class="w-menu-item ">帐号安全</a>
</div>
</div>
<div class="g-main">
<div id="j-userinfoForm"><form class="m-userInfoForm" method='post' action='/shujv/{{ session("homeuser")->id }}'>
	<input type='hidden' name='_token' value="<?php echo csrf_token();?>">
    <input type='hidden' name='_method' value='put'>
	<input type='hidden' name='id' value="{$user.id}">

<div class="item"><label class="label f-left userId"><span>用</span><span class="ml3">户</span><span class="ml3">ID</span></label><div class="content f-left">     {{ session('homeuser')->id  }} </div></div><div class="item"><label class="label f-left">帐 号</label><div class="content f-left">{{ session('homeuser')->name  }}</div></div>
<?php
    $xinxi=\DB::table('user')->where('id',session('homeuser')->id )->get();
?>
@foreach($xinxi as $xinxis)
<div class="item"><label class="label f-left">昵 称</label><div class="content f-left"><input class="w-ipt w-ipt-l" name="uname" value="{{ $xinxis->uname  }}" maxlength="20" type="text"></div><div id="j-error" class="w-errorMsg f-left errorMsg"><i class="icon w-icon-normal icon-normal-disable"></i><span id="j-errorText" class="text"></span></div></div>
<div class="item"><label class="label f-left">邮箱</label><div class="content f-left"><input class="w-ipt w-ipt-l" name="email" value="{{ $xinxis->email }}" id="userqwer" maxlength="20" type="text"></div><span id='unameinfo' style="font-size:15px"></span><div id="j-error" class="w-errorMsg f-left errorMsg"><i class="icon w-icon-normal icon-normal-disable"></i><span id="j-errorText" class="text"></span></div></div>
<div class="item"><label class="label f-left">手机号</label><div class="content f-left"><input class="w-ipt w-ipt-l" name="tel" value="{{ $xinxis->tel  }}" id="tel" maxlength="20" type="text"></div><span id='unameinf' style="font-size:15px"></span><div id="j-error" class="w-errorMsg f-left errorMsg"><i class="icon w-icon-normal icon-normal-disable"></i><span id="j-errorText" class="text"></span></div></div>
@endforeach
<div class="content f-left"><div class="w-button w-button-primary w-button-l j-submit"><button type="submit" style="font-size:18px;background:#baa078;margin-top:6px;">确认修改</button></div><div class="warn j-warn"></div></div></div></form></div>
</div>
</div>
</div>
<script type="text/javascript">
var inf = document.getElementById('unameinfo');
	     $('#userqwer').focus(function(){
	     	inf.innerHTML='';
	     }).blur(function(){
                
                var user = $('#userqwer').val();
                if(user.match(/^[0-9a-zA-Z]+@(([0-9a-zA-Z]+)[.])+[a-z]{2,4}$/) == null){
                inf.innerHTML = '邮箱格式不准确';
                info.style.color = 'red';
                }else{
                	inf.innerHTML = '邮箱格式准确';
                	inf.style.color = 'green';
                }
            })
     var info = document.getElementById('unameinf');
     $('#tel').focus(function(){
     	info.innerHTML='';
     }).blur(function(){
            
            var user = $('#tel').val();
            if(user.match(/^(0|86|17951)?(13[0-9]|15[012356789]|1[78][0-9]|14[57])[0-9]{8}$/) == null){
            info.innerHTML = '手机号码格式不准确';
            info.style.color = 'red';
            }else{
            	info.innerHTML = '手机号码格式准确';
            	info.style.color = 'green';
            }
        })
</script>


@endsection