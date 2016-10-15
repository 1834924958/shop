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
<a href="/site" class="w-menu-item active">地址管理</a>
<a href="http://you.163.com/coupon" class="w-menu-item ">优惠券</a>
<a href="http://you.163.com/user/giftCard" class="w-menu-item ">礼品卡</a>
<a href="http://you.163.com/user/securityCenter" class="w-menu-item ">帐号安全</a>
</div>
</div>



<div class="g-main">
<div class="j-address-con">
    <div class="w-address-top"><div class="title">已保存收货地址(地址最多10条，还能保存9条)</div>
       <!-- 路由中的删除 -->
                <form action="" method="post" name="sc" style="display:none;">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="delete">
                </form>
    <a href="/diz" class="w-link add j-add" style="float:right;">+新建地址</a>
    <br/>
</div>
<br/>
<table class="m-addressList" border='1' style="width:880px; text-align:center;"><colgroup><col class="w1"><col class="w2"><col class="w3"><col class="w4"></colgroup>
            <tr style="height:50px;background-color:#F5F5F5;">
                <th>收货人</th>
                <th>地址</th>
                <th>联系方式</th>
                <th>操作</th>
            </tr>
            <!-- 先进行遍历数据库中的地址 -->
    <tbody> 
        @foreach($list as $address)
            <tr style="height:60px;">
            <td>{{ $address->uname }}</td>
            <td>
                {{ $address->province }}
                {{ $address->city }}
                {{ $address->area }}
                {{ $address->row }}
                {{ $address->address }}
            </td>
            <td>{{ $address->tel }}</td>
            <td>
                <a href="/address/{{ $address->id }}/edit" class="w-link j-update" data-id="2863551">编辑</a>
                <a href="javascript:dodel({{ $address->id }})" class="w-link w-link-1 j-delete" data-id="2863551">删除</a>
            </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
    <script type="text/javascript">
            function dodel(san){
                if(confirm("你确定要删除吗")){
                    var form = document.sc ;
                    form.action = '/address/'+san;
                    form.submit();
                }
            }
    </script>
    <script type="text/javascript">
        //进行获取上面所有的节点;
        var list =document.getElementsByTagName('tr');
            //进行遍历所有的td;
            for(var i=0;i<list.length;i++){
             if(i==0){
                list[i].style.backgroundColor = '#F5F5F5';
            }else{
                // 进行添加鼠标的移入事
                var color = 'white';
                list[i].onmouseover = function(){
            //将原来的颜色保存到变量中;
                color  = this.style.backgroundColor;
                this.style.backgroundColor = '#F5F5F5';
                }
                //进行添加鼠标的移出事件;
                list[i].onmouseout = function(){
                    this.style.backgroundColor = color;
                }
             
             }
        }
    </script>
</div>
</div>
</div>


@endsection