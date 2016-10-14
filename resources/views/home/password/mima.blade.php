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
<a href="/xinxi" class="w-menu-item active">个人信息</a>
<?php 
    $mima = \DB::table('user')->where('id',session('homeuser')->id)->get();
?>
@foreach($mima as $mm)
    <a href="/mima/{{ $mm->id }}/edit" class="w-menu-item active">修改密码</a>
@endforeach
<a href="http://you.163.com/order/myList" class="w-menu-item ">订单管理</a>
<!-- <a href="/address" class="w-menu-item ">地址管理</a> -->
<a href="/site" class="w-menu-item ">地址管理</a>
<a href="http://you.163.com/coupon" class="w-menu-item ">优惠券</a>
<a href="http://you.163.com/user/giftCard" class="w-menu-item ">礼品卡</a>
<a href="http://you.163.com/user/securityCenter" class="w-menu-item ">帐号安全</a>
</div>
</div>
<div class="g-main">


<!-- 进行密码的修改 -->
<div style="top: 0px; display: block;" class="m-pop f-scroll-y overlay-container-ani f-tlbr j-overlay-container m-pop-addr f-ani-bouncein"> 
    <div style="left: 223px; top: 360.5px;" class="j-w-dialog-body">                
        <div class="j-w-dialog-head">                    
        </div>                
        <div class="popwin-bd j-w-dialog-content" >               
            <form class="m-form-addr j-form" novalidate="" method="post"
            action="/mima/{{ $mm->id }}">      
                <input type='hidden' name='_token' value="{{ csrf_token() }}">
                <div class="w-tit-addr">修改密码</div>                         
                <input type='hidden' name='_method' value='put'>
                  <input name="id"  type="hidden" value="{ $mm.id }">
                    <div class="w-row-addr" style="margin-top:40px;margin-left:60px;">                                
                        <div class="w-col-2 ">                                    
                          <span class="w-label">密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码：</span>                                    
                            <div class="w-error-warp j-error-wrap">                                    
                                <input class="w-ipt"  value="" tabindex="1" type="password" name="pass" placeholder="请在此输入新密码">
                            </div>                                
                        </div> 
                        <br/><br/><br/><br/><br/>                                                             
                        <div class="w-col-2" style="width:275px;">                                    
                            <span class="w-label">确认密码：</span>                                    
                            <div class="w-error-warp j-error-wrap">                              
                                <input class="w-ipt j-mobileFilter"  required="required" tabindex="2" type="password"  name="password" placeholder="请再次确认密码">
                            </div>                                
                        </div>
                        <div style="clear:both"></div>                            
                    </div>                            
                                           
                    <div class="w-row-addr" style="margin-top:40px">                              
                        <div class="w-col-3">                                    
                            <button type="submit" class="w-button w-button-primary w-button-l j-submit" style="margin-left:45px">确定</button>                                   
                            <button type="reset" class="w-button w-button-l j-cancel" style="margin-left:5px">取消</button>                                    
                            <div class="w-errorMsg j-msg" style="display: none;left:45px;top:45px;">
                                <i class="icon w-icon-normal icon-normal-disable"></i>
                                <span class="text j-msg-con"></span>
                            </div>                                
                        </div>
                        <div style="clear:both"></div>                            
                    </div>
                </form>
            </div>   
        </div>        
</div>












































</div>
</div>
</div>



@endsection