
<?php   
		
		$qwer = \DB::table('plate')->select('name')->get();
		
		
?>
<!-- 网站的开关的控制 -->
<?php  
	$kai = \DB::table('config')->get();
	// // 网页修护的时候进行网页的跳转

?>
<html class="js rgba opacity cssanimations borderradius boxshadow csstransitions csstransforms textshadow"><head>
@foreach($kai as $wlkg)
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- 网页的标题 -->
<title>{{  $wlkg->title}}</title>
<!-- 网页的关键字 -->
<meta name="{{ $wlkg->keywords }}" content="网易严选,严选,网易优选,网易甄选,网易优品,网易精选,甄选家,严选态度">
<meta name="description" content="网易严选秉承网易一贯的严谨态度，深入世界各地，严格把关所有商品的产地、工艺、原材料，甄选居家、厨房、饮食等各类商品，力求给你最优质的商品。">
@endforeach
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="Cache-Control" content="no-transform">
<meta http-equiv="Cache-Control" content="no-siteapp">
<link rel="shortcut icon" href="{{ URL::asset('http://you.163.com/favicon.ico?r=gold') }}" type="image/x-icon">
<meta property="qc:admins" content="365774662561636375">
<link rel="stylesheet" href="{{ URL::asset('css/style-dfe1ec3c01.css') }}" type="text/css">
<script type="text/javascript" src="{{ URL::asset('js/jquery-1.8.3.js') }}"></script>
<script type="text/javascript" async="" src="{{ URL::asset('js/conversion.js') }}"></script><script type="text/javascript">
(function(){
var userAgent = window.navigator.userAgent;
if(/windows|win32/i.test(userAgent)) {
if(/Windows NT 5/.test(userAgent)) {
document.writeln('<style type="text/css">' + 'body,button,input,select,textarea,code{font-family: tahoma,sans-serif;}' + '<' + '/style>');
}
} else if(/macintosh/i.test(userAgent)) {
document.writeln('<style type="text/css">' + 'body,button,input,select,textarea,code{font-family: "Heiti SC","Lucida Grande","Hiragino Sans GB","Hiragino Sans GB W3",verdana;}' + '<' + '/style>');
}
})();
</script>
<link rel="stylesheet" href="{{ URL::asset('css/index-b98a622620.css') }}">
<!--[if lt IE 9]>
<script src=".././js/http://mimg.127.net/hxm/yanxuan-web/p/20150730/js/ie-23e126e677.js"></script>
<![endif]-->
<!--[if lt IE 8]>
<meta http-equiv="refresh" content="1;url=/error/lowVersionBrowser" />
<script>top.window.location.href='/error/lowVersionBrowser';</script>
<![endif]-->
<style type="text/css">#YSF-BTN-HOLDER{position: fixed;max-width:70px;max-height:70px;right: 30px; bottom: 0px; cursor: pointer; overflow: visible; filter: alpha(opacity=100);opacity:1;z-index: 9990} #YSF-BTN-HOLDER:hover{filter: alpha(opacity=95);opacity:.95} #YSF-BTN-HOLDER img{ display: block;overflow: hidden; } #YSF-BTN-CIRCLE{display: none;position: absolute;right: -5px;top: -5px;width: auto;min-width: 12px;height: 20px;padding: 0 4px;background-color: #f00;font-size: 12px;line-height: 20px;color: #fff;text-align: center;white-space: nowrap;font-family: sans-serif;border-radius: 10px;z-index:1;} #YSF-BTN-HOLDER.layer-1 #YSF-BTN-CIRCLE{top: -30px;} #YSF-BTN-HOLDER.layer-2 #YSF-BTN-CIRCLE{top: -30px;} #YSF-BTN-HOLDER.layer-3 #YSF-BTN-CIRCLE{top: -30px;} #YSF-BTN-HOLDER.layer-4 #YSF-BTN-CIRCLE{top: -30px;} #YSF-BTN-HOLDER.layer-5 #YSF-BTN-CIRCLE{top: -30px;} #YSF-BTN-HOLDER.layer-6 #YSF-BTN-CIRCLE{top: -5px;} #YSF-BTN-BUBBLE{display: none;position: absolute;left: -274px;bottom:0px;width: 278px;height: 80px;box-sizing: border-box;padding: 14px 22px;filter: alpha(opacity=100);opacity:1;background: url(https://qiyukf.com/sdk//res/img/sdk/bg_floatMsg2x.png) no-repeat;background:url(https://qiyukf.com/sdk//res/img/sdk/bg_floatMsg.png)9; background-size: 278px 80px; z-index: 1;} #YSF-BTN-HOLDER.layer-1 #YSF-BTN-BUBBLE{bottom:9px;} #YSF-BTN-HOLDER.layer-2 #YSF-BTN-BUBBLE{bottom:9px;} #YSF-BTN-HOLDER.layer-3 #YSF-BTN-BUBBLE{bottom:9px;} #YSF-BTN-HOLDER.layer-4 #YSF-BTN-BUBBLE{bottom:9px;} #YSF-BTN-HOLDER.layer-5 #YSF-BTN-BUBBLE{bottom:9px;} #YSF-BTN-HOLDER.layer-6 #YSF-BTN-BUBBLE{bottom:-6px;} #YSF-BTN-BUBBLE:hover{filter: alpha(opacity=95);opacity:.95} #YSF-BTN-CONTENT{height:45px;padding: 0;white-space: normal;word-break: break-all;text-align: left;font-size: 14px;line-height: 1.6;color: #222;overflow: hidden;z-index: 0;} #YSF-BTN-ARROW{ display: none; } #YSF-BTN-CLOSE{position: absolute; width:15px; height:15px;right: 4px;top: -3px; filter: alpha(opacity=90); opacity:.9; cursor: pointer; background: url(https://qiyukf.com/sdk//res/img/sdk/btn-close.png) no-repeat;z-index: 1} #YSF-BTN-CLOSE:hover{filter: alpha(opacity=100); opacity: 1;} #YSF-PANEL-CORPINFO.ysf-chat-layeropen{ width: 511px; height: 470px; box-shadow: 0 0 20px 0 rgba(0, 0, 0, .15);} #YSF-PANEL-CORPINFO{ position: fixed; bottom: 0px; right: 20px; width: 0; height: 0; z-index: 99999; } #YSF-PANEL-INFO.ysf-chat-layeropen{ width: 311px; height: 470px; filter: alpha(opacity=100);opacity:1; box-shadow: 0 0 20px 0 rgba(0, 0, 0, .15);} #YSF-PANEL-INFO{ position: fixed; bottom: 0px; right: 20px; width: 0px; height: 0px; filter: alpha(opacity=0);opacity:0;z-index: 99999;} #YSF-PANEL-INFO .u-btn{background-color: #F96868} #YSF-CUSTOM-ENTRY{background-color: #F96868;} #YSF-CUSTOM-ENTRY-0{position: relative;bottom: 24px;width:auto;background-color: #F96868;box-shadow: 0px 6px 10px 0px rgba(0,0,0,0.25);} #YSF-CUSTOM-ENTRY-1{position: relative;bottom: 24px;width:auto;background-color: #F96868;border-radius: 14px; box-shadow: 0px 6px 10px 0px rgba(0,0,0,0.25);} #YSF-CUSTOM-ENTRY-2{position: relative;bottom: 24px;width:auto;background-color: #F96868;border-radius: 0;box-shadow: 0px 6px 10px 0px rgba(0,0,0,0.25);} #YSF-CUSTOM-ENTRY-3{position: relative;bottom: 24px;width:auto;background-color: #F96868;border-radius: 50%;box-shadow: 0px 6px 10px 0px rgba(0,0,0,0.25);} #YSF-CUSTOM-ENTRY-4{position: relative;bottom: 24px;width:auto;background-color: #F96868;border-radius: 50%;box-shadow: 0px 6px 10px 0px rgba(0,0,0,0.25);} #YSF-CUSTOM-ENTRY-5{position: relative;bottom: 24px;width:auto;background-color: #F96868;border-radius: 5px;box-shadow: 0px 6px 10px 0px rgba(0,0,0,0.25);} #YSF-CUSTOM-ENTRY-6{position: relative;bottom: 0px;width:auto;background-color: #F96868;border-radius:5px;border-bottom-left-radius: 0;border-bottom-right-radius: 0;} #YSF-CUSTOM-ENTRY-0 img{max-width: 300px;height:auto;} #YSF-CUSTOM-ENTRY-1 img{width:28px;height:auto;} #YSF-CUSTOM-ENTRY-2 img{width:58px;height:auto;} #YSF-CUSTOM-ENTRY-3 img{width:60px;height:auto;} #YSF-CUSTOM-ENTRY-4 img{width:60px;height:auto;} #YSF-CUSTOM-ENTRY-5 img{width:60px;height:auto;} #YSF-CUSTOM-ENTRY-6 img{width:115px;height:auto;} #YSF-IFRAME-LAYER{ border:0; outline:none; } .ysf-online-invite-mask{z-index:10000;position:fixed;_position:absolute;top:0;left:0;right:0;bottom:0;width:100%;height:100%;background:#fff;-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";filter:alpha(opacity=0);opacity:0;} .ysf-online-invite-wrap{z-index:10001;position:fixed;_position:absolute;top:50%;left:50%;width:250px;} .ysf-online-invite{position:relative;top:-50%;left:-50%;cursor:pointer;} .ysf-online-invite img{display:block;width:250px;} .ysf-online-invite .text{position:absolute;top:-11px;left:0;right:0;overflow:hidden;margin: 36px 20px 0 67px;line-height:140%;color:#526069;font-size:14px;font-family:"Microsoft YaHei","微软雅黑",tahoma,arial,simsun,"宋体";text-align:left;white-space:normal;word-wrap:break-word;} .ysf-online-invite .close{position:absolute;top:-6px;right:-6px;width:32px;height:32px;background:url(https://qiyukf.com/sdk/res/img/invite-close.png) no-repeat;cursor:pointer;}
.denglu{display:block;top:8px;position:absolute;right:280px;}
.zhuce{display:block;top:8px;position:absolute;right:230px;}
.gundong{margin:0 auto;}
.yonghu{display:block;top:8px;position:absolute;right:280px;}
.tuichu{display:block;top:8px;position:absolute;right:230px;}
</style>
<!-- <script type="text/javascript" src='.././js/


	'></script> -->
<script type="text/javascript" src="{{ URL::asset('js/jquery-2.1.4.min.js') }}"></script>


<script type="text/javascript">
// 对前台的轮播效果进行一些判断;
	$(function(){
		setInterval(function(){
			//获取最后一张图片，让他的宽变为0px，把他插入到div的内部的前面，用动画效果把宽度1s后恢复到270px
			$('#did img:last').css('width','0px').prependTo('#did').animate({width:"1080px"},2000);
		},5000);
	})
</script>



</head>
<body>
<!-- 头部 -->
<header class="g-hd" id="gTopbar">
<div id="j-siteNav" class="m-siteNav">
<div class="g-row">
<p class="declare">好的生活，没那么贵</p>


<div class="right">
<!-- <a class="login j-topLogin" href="/home/">登录aa</a> -->
@if( empty(session("homeuser")) )
<a class="denglu" href="/denglu"><span style='font-size:12px;color:#ffffff;'>登录</span></a>

<a class="zhuce" href="/home/create"><span style='font-size:12px;color:#ffffff;'>注册</span></a>
@else
<a class="yonghu" href="/xinxi"><span style='font-size:12px;color:#ffffff;'>
@if( empty(session("homeuser")->uname))

	{{ session("homeuser")->name}}
@else
	{{ session("homeuser")->uname}}
@endif
</span></a>
<a class="tuichu" href="{{ URL('lala/logout') }}"><span style='font-size:12px;color:#ffffff;'>退出</span></a>
@endif
<div class="split"></div>
<a class="attitude" href="http://you.163.com/attitude">严选态度</a>
<div class="split"></div>
<a class="attitude" href="http://you.163.com/enterprise">企业采购</a>
<div class="split"></div>
<div class="m-dropdown m-hdAppDownload">
<a class="trigger j-downloadlink" target="_blank" href="http://you.163.com/downloadapp?_stat_from=web_out_pz_baidu_1">
<i class="icon w-icon-normal icon-normal-phone-app"></i>
<span class="txt">下载APP</span>
</a>
<div class="bd">
<div class="wrap">
<div class="QRcode j-qrcode"><canvas width="146" height="146" style="width: 117px; height: 117px;"></canvas></div>
<span class="txt">扫码下载 首单立减8元</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="js-funcTabWrap" style="height: 204px;">
<div id="js-funcTab" class="m-funcTab m-funcTab-fixed">
<div class="g-row">


<a class="tab-logo" href="http://you.163.com/" title="网易严选"></a>
<div class="tab-inner">
<div class="m-search">
<?php
	$tup = \DB::table('config')->get();
?>
	<!-- 网络的LOCO -->
<!-- @foreach($tup as $tupian)
	<img src=".././images/config/{{ $tupian->photo }}" style="width:100px;height:100px;">
@endforeach -->
<a class="w-button-cart" href="http://you.163.com/cart">
<i class="w-icon-normal icon-normal-blackcart"></i>
<i class="w-icon-normal icon-normal-badge j-cart-num">0</i>
</a>
<div class="m-searchInput" id="j-search">
<div class=" w-button-search j-searchButton" data-searchurl=""><i class="w-icon-normal icon-normal-search"></i></div>
<input id="topSearchInput" placeholder="Keds同款帆布鞋" class="w-searchInput j-searchInput" maxlength="100" data-defaultword="Keds同款帆布鞋" autocomplete="off" type="text">
<div id="j-placeholderwarp"></div>
<div class="m-ppnl f-hide j-searchSuggest">
<div class="ppnl-ct js-ppnl-ct">
<div class="js-ppnl-content">
	
</div>
</div>
</div>
</div>
</div>

<ul class="tab-nav">
<li class="nav-item active first">
<a class="topLevel" title="首页" href="/qian">首页</a>
</li>


@foreach ($qwer as $plate)
<li class="j-nav-item nav-item ">
<a class="topLevel" href="http://you.163.com/item/list?categoryId=1005000&amp;_stat_area=nav_2&amp;_stat_referer=index" title="居家">
{{ $plate->name }}
</a>
<div class="j-nav-dropdown nav-dropdown">
<div class="j-nav-cateCard nav-cateCard" style="width: 1519px; left: -759.5px;">
<ul class="card-list">
<li class="item">
<a class="nav-subCate" href="http://you.163.com/item/list?categoryId=1005000&amp;subCategoryId=1008002" title="靠枕">
<img class="w-icon-50" src=".././img/aca3373f42fde0386c19629fab4b2f1d.png" alt="靠枕">
<p class="text">靠枕</p>
</a>
</li>
<li class="item">
<a class="nav-subCate" href="http://you.163.com/item/list?categoryId=1005000&amp;subCategoryId=1008001" title="毛巾">
<img class="w-icon-50" src=".././img/5a12e5dfa966413230834812170dfe70.png" alt="毛巾">
<p class="text">毛巾</p>
</a>
</li>
<li class="item">
<a class="nav-subCate" href="http://you.163.com/item/list?categoryId=1005000&amp;subCategoryId=1010003" title="地毯">
<img class="w-icon-50" src=".././img/3b35bfb3985297abbee023523148605d.png" alt="地毯">
<p class="text">地毯</p>
</a>
</li>
<li class="item">
<a class="nav-subCate" href="http://you.163.com/item/list?categoryId=1005000&amp;subCategoryId=1015000" title="家具">
<img class="w-icon-50" src=".././img/fa645312ce3d6e9ff90401cef200018b.png" alt="家具">
<p class="text">家具</p>
</a>
</li>
<li class="item">
<a class="nav-subCate" href="http://you.163.com/item/list?categoryId=1005000&amp;subCategoryId=1017000" title="宠物">
<img class="w-icon-50" src=".././img/61d315c50c2e42b9245832959af5455d.png" alt="宠物">
<p class="text">宠物</p>
</a>
</li>
<li class="item">
<a class="nav-subCate" href="http://you.163.com/item/list?categoryId=1005000&amp;subCategoryId=1008017" title="收纳">
<img class="w-icon-50" src=".././img/e53590c81684accc4b4e98804eeab5ab.png" alt="收纳">
<p class="text">收纳</p>
</a>
</li>
<li class="item">
<a class="nav-subCate" href="http://you.163.com/item/list?categoryId=1005000&amp;subCategoryId=1008016" title="灯具">
<img class="w-icon-50" src=".././img/29f52dc40e1d2eb7f9e0ae0adec4299d.png" alt="灯具">
<p class="text">灯具</p>
</a>
</li>
<li class="item">
<a class="nav-subCate" href="http://you.163.com/item/list?categoryId=1005000&amp;subCategoryId=1018000" title="夏日甜心">
<img class="w-icon-50" src=".././img/c4ec079203bc7b010fd2eabff53fe45c.png" alt="夏日甜心">
<p class="text">夏日甜心</p>
</a>
</li>
</ul>
</div>
</div>
</li>

@endforeach




<li class="split fixed-hide"></li>
<li class="nav-item fixed-hide ">
<a class="topLevel" href="http://you.163.com/topic/list?_stat_area=nav_10&amp;_stat_referer=index">专题</a>
</li>
<li class="nav-item fixed-hide last">
<a class="topLevel" href="http://you.163.com/expert/index?_stat_area=nav_11&amp;_stat_referer=index">甄选家</a>
</li>
</ul>
<a class="w-cart" href="http://you.163.com/cart">
<i class="w-icon-normal icon-normal-blackcart"></i>
<i class="w-icon-normal icon-normal-badge j-cart-num">0</i>
</a>
<div class="m-mini-cart j-mini-cart">
<div class="wrap">
<i class="tw-1"></i>
<i class="tw-2"></i>
<img src=".././img/" alt="">
<a class="btn w-button w-button-primary" href="http://you.163.com/cart">结算</a>
</div>
</div>
<div class="notLogin">
<a class="" href="/denglu" title="网易严选登录">登录</a>&nbsp;&nbsp;
<a class="" data-href="http://reg.163.com/reg/reg.jsp?product=yanxuan_web" href="/home/create">注册</a>
</div>
</div>
</div>
</div>
</div>
</header>








@yield("content")







<div class="m-ft2">
<div class="g-row">
<ul class="m-siteEnsure">
<li class="item">
<div class="inner"><i class="icon w-icon-normal icon-normal-ft1"></i><p class="text">30天无忧退货</p></div>
</li>
<li class="item">
<div class="inner"><i class="icon w-icon-normal icon-normal-ft2"></i><p class="text">满88元免邮费</p></div>
</li>
<li class="item">
<div class="inner"><i class="icon w-icon-normal icon-normal-ft3"></i><p class="text">网易品质保证</p></div>
</li>
</ul>
<hr>
<div class="m-siteInfo">
<nav class="nav">
<a class="text" href="http://you.163.com/attitude">关于我们</a>
<b class="split">|</b>
<a class="text" href="http://you.163.com/help">帮助中心</a>
<b class="split">|</b>
<a class="text" href="http://you.163.com/help#policys">售后服务</a>
<b class="split">|</b>
<a class="text" href="http://you.163.com/help#deliver">配送与验收</a>
<b class="split">|</b>
<a class="text" href="http://you.163.com/help#business">商务合作</a>
<b class="split">|</b>
<a class="text" href="http://you.163.com/enterprise">企业采购</a>
<b class="split">|</b>
<a class="text" href="http://1.163.com/?from=yanxuan" target="_blank">1元夺宝</a>
</nav>
<br/>
<?php 
	$yq = \DB::table('blogroll')->get();
?>
<!-- 友情链接的 -->
<nav class="nav">
<a class="text" href="">友情链接:</a>
<b class="split">|</b>
@foreach($yq as $lj)
	<a class="text" href="http://{{ $lj->address}}">{{ $lj->name }}
	<b class="split">|</b>

@endforeach
</nav>
<?php 
	$qwe = \DB::table('config')->get();
?>
<!-- 网页的版权部分 -->
@foreach($qwe as $wen)
<p class="copyright">
	{{ $wen->copyright }} © 1997-<script type="text/javascript" src=".././js/year.js"></script>2016 ICP证：浙B2-20160106 &nbsp;浙ICP备15041168号
</p>
@endforeach
</div>
</div>
</div>
</footer>
<div id="js-fixedtool" class="m-fixedtool m-fixedtool-newuser" style="right: 134.5px; display: block;">
<!-- <div class="birthdayGift" id="j-birthdayGift">
</div> -->
<a class="activityEntry j-fixedToolActivity" data-id="1008000" target="_blank" href="http://you.163.com/act/pub/qb7yL2zuPm.html?_stat_area=fixedTool&amp;_stat_referer=index">
<img class="activityPic" src=".././img/705892f190727952b1ef0aebbf385d9c.jpg">
</a>
<a class="newuser j-newuser" target="_blank" href="http://you.163.com/gift/newUserGift?_stat_referer=fixedtool" style="">
<i></i>
<p class="text">新人有礼</p>
</a>
<a class="download j-downloadlink" target="_blank" href="http://you.163.com/downloadapp?_stat_from=web_out_pz_baidu_1">
<i></i>
<p class="text">下载APP</p>
<div class="qrCode">
<div class="img j-qrcode"><canvas width="93" height="93" style="width: 75px; height: 75px;"></canvas></div>
<span class="text">首单立减8元</span>
</div>
</a>
<div id="js-fixedtoolCustomerService" class="customerService">
<i></i>
<p class="text">在线客服</p>
</div>
<div id="js-fixedtoolGoTop" class="goTop">
<i></i>
<p class="text">回顶部</p>
</div>
</div>
<script src=".././js/vender-c1479496a3.js"></script>
<script src=".././js/common-bedff13007.js"></script>
<script type="text/javascript" src=".././js/json3.js"></script>
<script type="text/javascript" src=".././js/message.js"></script>
<script src=".././js/es5-shim-f46c967f3a.js"></script>
<script src=".././js/96ee78c0d9633761581e89d5019c5595.js" defer="defer" async=""></script>
<script type="text/javascript">
window["$global"] = {
giftSwitch : "false",
nickname : "",
username : "",
userid : "0"
};
</script>
<script src=".././js/index-675819d408.js"></script>
<div class="m-notify hide">	                 
<div class="text j-text"></div>	                  </div>
<script type="text/javascript">
var youdao_conv_id = 285846;
</script>
<script type="text/javascript" src=".././js/conv.js" async=""></script>


<div style="top: 0px; left: 0px; visibility: hidden; position: absolute; width: 1px; height: 1px;"><iframe style="height:0px; width:0px;" src=".././img/delegate"></iframe></div><div class="layer-3" id="YSF-BTN-HOLDER" style="display: none;"><div id="YSF-CUSTOM-ENTRY-3"><img src=".././img/3.png"></div><span id="YSF-BTN-CIRCLE"></span><div id="YSF-BTN-BUBBLE"><div id="YSF-BTN-CONTENT"></div><span id="YSF-BTN-ARROW"></span><span id="YSF-BTN-CLOSE"></span></div></div></body>

</html>
