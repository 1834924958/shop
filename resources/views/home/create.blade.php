<!DOCTYPE html>
<html><head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="shortcut icon" href="https://zc.reg.163.com/favicon.ico">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="application-name" content="reg.163.com">
    <meta name="keywords" content="网易用户中心">
    <meta name="description" content="网易用户中心">
    <title>网易用户中心</title>
    <link rel="canonical" href="http://reg.163.com/">
    <link rel="stylesheet" type="text/css" href=".././css/index.css">
    <script type="text/javascript" src="{{ URL::asset('js/jquery-2.1.4.min.js') }}"></script>
<!-- @NOPARSE -->
    <script type="text/javascript">
      var userAgent = navigator.userAgent.toLowerCase();
      var msie = /msie/.test( userAgent ) && !/opera/.test( userAgent );
      // var version = (userAgent.match(/.+(?:rv|it|ra|ie)[\/: ]([\d.]+)/) || [0,'0'])[1];
      // var _test = {6:'2.0',7:'3.0',8:'4.0',9:'5.0',10:'6.0',11:'7.0'};
      var release = _test[document.documentMode]||_test[parseInt(version)];
      if (msie && parseInt(release,10)<4){
        location.href = "http://urscdn.nosdn.127.net/reg/ieUpdate01.html";
      }
    </script>
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA1449656709382'],['_setLocalGifPath', '/UA1449656709382/__utm.gif'],['_setLocalServerMode']);
        _gaq.push(['_addOrganic','baidu','word']);_gaq.push(['_addOrganic','soso','w']);_gaq.push(['_addOrganic','youdao','q']);
        _gaq.push(['_addOrganic','sogou','query']);_gaq.push(['_addOrganic','so.360.cn','q']);
        _gaq.push(['_trackPageview']);_gaq.push(['trackPageLoadTime']);
        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = '../resources/lib/js/gaq.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>
    <!-- /@NOPARSE -->
<style type="text/css">.auto-1474905513150-parent{position:relative;} .auto-1474905513150{position:absolute;border:1px solid #aaa;background:#fff;text-align:left;visibility:hidden;} .auto-1474905513150 .zitm{height:20px;line-height:20px;cursor:default;} .auto-1474905513150 .js-selected{background:#1257F9;}
#qwer{display:block;margin-top:-1px;}
</style><link id="scaptcha.vanilla" rel="stylesheet" type="text/css" href=".././css/scaptcha.css" media="all"></head>
<body>
<input id="hid_pkid" value="" type="hidden">
<input id="hid_pkht" value="" type="hidden">
<input id="hid_pd" value="" type="hidden">


  <div class="g-hd">
  	<div class="g-in">
        <a href="http://reg.163.com/" target="_blank"><div class="m-logo spritebg"></div></a>
      <div class="m-tr-block">已有帐号？去<a id="btn_Login" href="/denglu">登录</a></div>
    </div>
  </div>
  <div id="reg_block" class="g-bd">

  <div class="top_tlt">注册帐号</div>

<!--Regular if0-->
<div class="m-opr clearfix">
    <form method='post' action='/shujv'>
      <input type='hidden' name='_token' value='{{ csrf_token() }}'>
        <div class="u-input firstelem">
            <label for="inpt-account" class="u-label">帐号：</label>
            <input name="name" id="user" placeholder="网易邮箱/手机号/其他邮箱" class="i-inpt" type="text"><div class="auto-1474905513150 m-sug" id="auto-id-1474905513152" style="visibility: hidden;"></div>
            <br/><br/><span id='unameinfo' style="font-size:15px"></span>
            <!-- <input type='text' name='name' color='green'> -->
  <script>
    
     $('#user').blur(function(){
                var info = document.getElementById('unameinfo');
                var user = $('#user').val();
                if(user.match(/^\w{4,16}$/) == null){
                info.innerHTML = '账号信息必须为4~16位有效字符';
                info.style.color = 'red';
                }else{
                    $.ajax({
                        type:'POST',
                        url:'/stor',
                        data:"_token={{ csrf_token() }}&user="+user,
                        success:function(msg){
                            if(msg == 'yes'){
                                info.innerHTML = '用户名可用';
                                info.style.color = 'green';
                            }else{
                                info.innerHTML = '用户名已存在';
                                info.style.color = 'red';
                                die();
                            }
                        },error:function(){
                            alert('ajax错误');
                        }
                    })
                }
            })
  </script>
            <span id='unameinfo'></span><br><br>
            <input name="username" style="display: none;" type="text">
            <div class="u-tip f-dn"><div class="spritebg u-clear" id="auto-id-1474905513168"></div></div>
            <!--Regular if1-->
            <!--Regular if2--><!--Regular if3--><!--Regular if4-->
        </div>
        <div class="u-input">
            <label for="inpt-pw" class="u-label">密码：</label>
            <input name="password" style="display: none;" type="password">
            <input name="pass" id="inpt-pw" placeholder="6-16位密码，区分大小写" class="i-inpt " type="password">
            <div class="u-tip f-dn"><div class="spritebg u-clear" id="auto-id-1474905513169"></div></div>
            <!--Regular if5--><!--Regular if6-->
        </div>
        <div class="u-input">
            <label for="inpt-pw2" class="u-label">确认密码：</label>
            <input name="cpass" id="inpt-pw2" placeholder="再次输入密码" class="i-inpt " type="password">
            <div class="u-tip f-dn"><div class="spritebg u-clear" id="auto-id-1474905513170"></div></div>
            <!--Regular if7--><!--Regular if8-->
        </div>
        <div class="u-input">
            <label for="inpt-pw2" class="u-label">验证码：</label>
            <input name="code" id="inpt-pw2" placeholder="请输入验证码" class="i-inpt " type="text" style="width:166px">
            
            <span style="display:block;margin-top:10px;"><img src="{{ asset('code.php') }}" /></span>
            <div class="u-tip f-dn"><div class="spritebg u-clear" id="auto-id-1474905513170"></div></div>
            <!--Regular if7--><!--Regular if8-->
        </div>
     

        <div class="u-input" style="height: 58px;">
            <label class="u-label">&nbsp;</label>
            <div class="b-btn btn-reg btn-red btndisabled"><input type='submit' value='注册用户' class="b-btn btn-reg btn-red btndisabled" id='qwer' > </div>
            <!--Regular if24-->
        </div>

        <div class="u-tips">
            <label class="u-label">&nbsp;</label>
            <span class="tip">用户注册即代表同意<a target="_blank" href="http://reg.163.com/agreement.shtml">《服务条款》</a>和<a target="_blank" href="http://reg.163.com/agreement_game.shtml">《网络游戏用户隐私保护和个人信息利用政策》</a></span>
        </div>

    </form>
    <!--Regular if25-->
</div>

</div>
  <div class="g-ft">
    <div class="g-in">
      <div class="m-cp">
        <p><a href="http://corp.163.com/eng/about/overview.html" target="_blank">About NetEase</a>-<a href="http://gb.corp.163.com/gb/about/overview.html" target="_blank">公司简介</a>-<a href="http://gb.corp.163.com/gb/contactus.html" target="_blank">联系方式</a>-<a href="http://reg.163.com/help/help_oauth2.html?v=20141215" target="_blank">OAuth2.0认证</a>-<a href="http://corp.163.com/gb/job/job.html" target="_blank">招聘信息</a>-<a href="http://help.163.com/" target="_blank">客户服务</a>-<a href="http://gb.corp.163.com/gb/legal.html" target="_blank">相关法律</a>-<a href="http://emarketing.biz.163.com/" target="_blank">网络营销</a></p>
        <p>网易公司版权所有 ©1997-2016</p>
      </div>
    </div>
  </div>

<!-- @NOPARSE -->


<!-- /@NOPARSE -->
<!-- DEFINE -->
<script src=".././js/define.js"></script><a style="display: none;" href="https://zc.reg.163.com/resources/lib/js/gaq.js"></a>
<script src=".././js/pp_reg.js"></script>

</body>
  

  <script type="text/javascript">
    // function doCheck(name)
    // {
    //   if(name.match(/^\w{4,16}$/) == null){
    //     alert('账号信息必须为4~16位有效字符');
    //     return;
    //   }

     
    //   var xmlHttp;
    //   if(window.XMLHttpRequest){

    //     xmlHttp = new XMLHttpRequest();
    //   }else{
    //     xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
    //   }
    //   // 第二步：设置回调函数
    //   xmlHttp.onreadystatechange = function()
    //   {
    //     // var info = document.getElementById('unameinfo');
    //     if(xmlHttp.readyState==4 && xmlHttp.status == 200)
    //       {
    //         var str = xmlHttp.responseText;
    //         if(str == 'yes'){
    //           alert('用户已存在');
              
    //         }else{
    //           alert('用户名可用');
             
    //         }
    //       }
    //   }
    //    xmlHttp.open("get","/home/stor/{name}",true);
    //   xmlHttp.send();
    // }
  </script>

</html>