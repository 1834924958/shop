@extends("home.head");
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
<div class="w-avatar" id="j-sideAvatarWarp">
<img src="%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%20-%20%E7%BD%91%E6%98%93%E4%B8%A5%E9%80%89_files/f11a468715f90778f32307b3aa9b149b.jpg" alt="头像" id="j-sideAvatar" width="100px" height="100px">
<div class="modifyAvatar w-icon-normal icon-normal-camera"></div>
<div class="mask"></div>
</div>
<div class="w-nickname" title="丁" id="j-sideNickname">丁</div>
<a class="w-button switch" href="http://you.163.com/u/logout?callback=/u/loginurs">
切换帐号
</a>
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

<div class="item"><label class="label f-left userId"><span>用</span><span class="ml3">户</span><span class="ml3">ID</span></label><div class="content f-left">     {{ session('homeuser')->id  }} </div></div><div class="item"><label class="label f-left">帐 号</label><div class="content f-left">{{ session('homeuser')->name  }}</div></div><div class="item"><label class="label f-left">昵 称</label><div class="content f-left"><input class="w-ipt w-ipt-l" name="uname" value="{{ session('homeuser')->uname  }}" maxlength="20" type="text"></div><div id="j-error" class="w-errorMsg f-left errorMsg"><i class="icon w-icon-normal icon-normal-disable"></i><span id="j-errorText" class="text"></span></div></div>
<div class="item"><label class="label f-left">邮箱</label><div class="content f-left"><input class="w-ipt w-ipt-l" name="email" value="{{ session('homeuser')->email  }}" id="userqwer" maxlength="20" type="text"></div><span id='unameinfo' style="font-size:15px"></span><div id="j-error" class="w-errorMsg f-left errorMsg"><i class="icon w-icon-normal icon-normal-disable"></i><span id="j-errorText" class="text"></span></div></div>
<div class="item"><label class="label f-left">手机号</label><div class="content f-left"><input class="w-ipt w-ipt-l" name="tel" value="{{ session('homeuser')->tel  }}" id="tel" maxlength="20" type="text"></div><span id='unameinf' style="font-size:15px"></span><div id="j-error" class="w-errorMsg f-left errorMsg"><i class="icon w-icon-normal icon-normal-disable"></i><span id="j-errorText" class="text"></span></div></div>
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