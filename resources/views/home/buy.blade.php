

@extends("home.head")
@section("content")
<br/><br/><br/><br/><br/><br/><br/><br/>
<link rel="stylesheet" href="{{ URL::asset('css/css.css') }}">
<!-- <link rel="stylesheet" href="{{ URL::asset('css/confirm-5e73ae462a.css') }}">
<script type="text/javascript" async="" src="{{ URL::asset('js/jquery-1.7.2.min.js') }}"></script> -->
<script type="text/javascript" async="" src="{{ URL::asset('js/style.css') }}"></script>
<div class="g-bd f-margin-top-50">
    <div class="g-row">
        <div class="g-panel">
            <div class="w-panel">
                <div class="hd">
                    收货信息
                </div>
<div class="bd">
<div id="j-orderAddress" class="m-orderAddress">
    <div class="right">
        <a id="j-addOrderAddress" class="w-button" onclick="javascript:onclick_open();" class="open_btn" class="open_new">新建地址</a>
    </div>
    @foreach($moren as $mo)
    <div id="j-shipAddress" class="left m-address" data-ship-address-id="2918279">
        <span class="line">
            <label class="label">

                <span class="textLeft">收</span>
                <span>货</span>
                <span class="textRight">人&nbsp;:&nbsp;</span>
            </label>
    
     <span class="text">地址:{{ $mo->address }}&nbsp;收货人:{{ $mo->name }}&nbsp;联系方式:{{ $mo->tel }}</span>
     <input type="radio" name="0"  checked="checked">
 </span>
</div>
@endforeach
    @foreach($dizhi as $dz)

    <div id="j-shipAddress" class="left m-address" data-ship-address-id="2918279">
<!--         <p class="line line-1">
            <i class="w-icon-normal icon-normal-pos"></i>
            <span class="defaultTxt">默认地址</span>
        </p> -->

        <span class="line">

            <label class="label">

                <span class="textLeft">收</span>
                <span>货</span>
                <span class="textRight">人&nbsp;:&nbsp;</span>

            </label>

            <span class="text">地址:{{ $dz->address }}&nbsp;收货人:{{ $dz->uname }}&nbsp;联系方式:{{ $dz->tel }}</span>
            <input type="radio" name="0" >
        </span>

    </div>
    @endforeach

</div>
</div>
</div>
                    <form    method="post" action="/home/goumai">
                    <input type='hidden' name='_token' value="{{ csrf_token() }}">
        <div class="g-itemInfo">
            <div class="m-table">
                <div class="headBg"></div>
                <table class="m-orderTable">
                    <thead class="thead">
                        <tr class="tr">
                            <td class="th col1">商品信息</td>
                            <td class="th col2"></td>
                            <td class="th col3">单价</td>
                            <td class="th col4">数量</td>
                            <td class="th col5">小计</td>
                            <td class="th col6">实付</td>
                        </tr>
                    </thead>

                    @foreach($buy as $shopp)
                    <tbody class="tbody" id="j-items">
                        <tr class="tr">
                            <td class="td col1">
                                <img class="img" src=".././images/child/{{ $shopp->photo }}">
                            </td>
                            <td class="td col2">
                                <p class="line">{{ $shopp->name }}</p>
                                <p class="line line-1">
                                    <span>{{ $shopp->briefing }}</span>
                                    <input type="hidden" value="{{ $shopp->name }}" name='name'>
                                    <input type="hidden" value="{{ $shopp->id }}" name='bid'>
                                    <input type="hidden" value="{{ $shopp->price * $num  }}" name='total'>
                                    <input type="hidden" value="{{ $shopp->price }}" name='price'>
                                    <input type="hidden" value="{{ $num }}" name='num'>
                                    <input type="hidden" value="{{ $tel }}" name='tel'>
                                </p>
                            </td>

                            <td class="td col3">
                                <p>{{ $shopp->price }}</p>
                            </td>
                            <td class="td col4">{{ $num }}</td>
                            <td class="td col5">{{ $shopp->price * $num  }}</td>
                            <td class="td col6">{{ $shopp->price * $num  }}</td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
            <div class="m-itemInfoFt" id="j-itemInfoFt">

                <div class="right">
                    <p class="line1">
                        <label>商品合计<span>:</span></label>
                        <span class="amount">¥{{ $shopp->price * $num  }}</span></p>
                            <input type="text" style="font-size:18px;background-color:f5f5f5;" height="20px" value="" class="xuan" name="address" size="90px" width="90px">
                    <div class="line3">

                        <div class="right">
                            
                        <div class="m-tipTag tip">

                            </div>


                        </div>

                    <p class="line4">


                        <label class="label">实付<span>:</span></label>
                        <span class="price">¥{{ $shopp->price * $num  }}</span></p>

                    <div class="line5">
                        
                        <button id="j-orderConfirmSubmit" class="w-button w-button-primary w-button-xl submit" value="去付款" type="submit">去付款</button>
                        <div class="notice">
                            <a class="f-hide" href="http://you.163.com/help#notice" target="_blank">春节期间发货公告</a>
                        </div>
                    </div>
                    <div class="line6" id="j-userinfo-ft">
                    </div>
                </div>
            </div>
            <div class="m-agreement">
                

            </div>
        </div>
    </div>
</form>
</div>
                          <script>


                              $(function(){
                                    
                          
                               var shouhuoaddress = $('input:radio:checked').prev().html();
                               $('.xuan').val(shouhuoaddress);
                                $('input:radio').click(function(){
                                  var yes = $('input:radio:checked').prev().html();
                                  $('.xuan').val(yes);
                                });    


                              });
</script>



            <form class="m-form-addr j-form" novalidate="" method="post"
            action="/address">
             <input type='hidden' name='_token' value="{{ csrf_token() }}">
<DIV class="shade_content">
<!-- <DIV class="col-xs-12 shade_colse"><BUTTON 
onclick="javascript:onclick_close();">x</BUTTON>             </DIV> -->
<DIV class="nav shade_content_div">
<DIV class="col-xs-12 shade_title">新增收货地址                </DIV>
<DIV class="col-xs-12 shade_from">
<FORM action="" method="post">
<DIV class="col-xs-12"><SPAN 
<DIV class="col-xs-12"><SPAN class="span_style">详细地址</SPAN>                          <INPUT class="input_style" id="address" name="address" type="" placeholder="&nbsp;&nbsp;请输入您的详细地址" value="">
                         </DIV>
<DIV class="col-xs-12"><SPAN class="span_style">邮政编号</SPAN>                          <INPUT class="input_style" id="number_this" type="" placeholder="&nbsp;&nbsp;请输入您的邮政编号" value="" name="yb">



                         </DIV>
<DIV class="col-xs-12"><SPAN 
class="span_style">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名</SPAN>
                             <INPUT class="input_style" id="name_" name="uname" type="" placeholder="&nbsp;&nbsp;请输入您的姓名" value="">
                         </DIV>
<DIV class="col-xs-12"><SPAN class="span_style">手机号码</SPAN>                          <INPUT class="input_style" id="phone" type="" placeholder="&nbsp;&nbsp;请输入您的手机号码" value="" name="tel">
                         </DIV>




<DIV class="col-xs-12"><SPAN class="span_style" style="position:absolute;left:240px;">选择地区</SPAN><br/><br/>                          


    <div  i id="fid"></div>
<DIV class="col-xs-12">
                <button class="btn_remove" onclick="javascript:onclick_close();" type="reset" value="取消">取消<button>&nbsp;&nbsp;
                <button class="btn_remove" onclick="javascript:onclick_close();" type="submit" value="取消">提交<button>
                                    
                         </DIV></FORM></DIV></DIV></DIV></form>



                         <SCRIPT type="text/javascript">
            $(function() {
                var region = $("#region");
                var address = $("#address");
                var number_this = $("#number_this");
                var name = $("#name_");
                var phone = $("#phone");


                $("#sub_setID").click(function() {
                    var input_out = $(".input_style");
                    for (var i = 0; i <= input_out.length; i++) {
                        if ($(input_out[i]).val() == "") {
                            $(input_out[i]).css("border", "1px solid red");
                            
                            return false;
                        } else {
                            $(input_out[i]).css("border", "1px solid #cccccc");
                        }
                    }
                });




                var span_momey = $(".span_momey");
                var b = 0;
                for (var i = 0; i < span_momey.length; i++) {
                    b += parseFloat($(span_momey[i]).html());
                }
                var out_momey = $(".out_momey");
                out_momey.html(b);


                $(".shade_content").hide();
                $(".shade").hide();



                $('.nav_mini ul li').hover(function() {
                    $(this).find('.two_nav').show(100);
                }, function() {
                    $(this).find('.two_nav').hide(100);
                })
                $('.left_nav').hover(function() {
                    $(this).find('.nav_mini').show(100);
                }, function() {
                    $(this).find('.nav_mini').hide(100);
                })
                $('#jia').click(function() {
                    $('input[name=num]').val(parseInt($('input[name=num]').val()) + 1);
                })
                $('#jian').click(function() {
                    $('input[name=num]').val(parseInt($('input[name=num]').val()) - 1);
                })
                $('.Caddress .add_mi').click(function() {
                    $(this).css('background', 'url("images/mail_1.jpg") no-repeat').siblings('.add_mi').css('background', 'url("images/mail.jpg") no-repeat')
                })
            })
            var x = Array();

            function func(a, b) {
                x[b] = a.html();
                alert(x)
                a.css('border', '2px solid #f00').siblings('.min_mx').css('border', '2px solid #ccc');
            }

            function onclick_close() {
                var shade_content = $(".shade_content");
                var shade = $(".shade");
                if (confirm("确认关闭么！此操作不可恢复")) {
                    shade_content.hide();
                    shade.hide();
                }
            }

            function onclick_open() {
                $(".shade_content").show();
                $(".shade").show();
                var input_out = $(".input_style");
                for (var i = 0; i <= input_out.length; i++) {
                    if ($(input_out[i]).val() != "") {
                        $(input_out[i]).val("");
                    }
                }
            }

            function onclick_remove(r) {
                if (confirm("确认删除么！此操作不可恢复")) {
                    var out_momey = $(".out_momey");
                    var input_val = $(r).parent().prev().children().eq(1).val();
                    var span_html = $(r).parent().prev().prev().children().html();
                    var out_add = parseFloat(input_val).toFixed(2) * parseFloat(span_html).toFixed(2);
                    var reduce = parseFloat(out_momey.html()).toFixed(2)- parseFloat(out_add).toFixed(2);
                    console.log(parseFloat(reduce).toFixed(2));
                    out_momey.text(parseFloat(reduce).toFixed(2))
                    $(r).parent().parent().remove();
                }
            }

            function onclick_btnAdd(a) {
                var out_momey = $(".out_momey");
                var input_ = $(a).prev();
                var input_val = $(a).prev().val();
                var input_add = parseInt(input_val) + 1;
                input_.val(input_add);
                var btn_momey = parseFloat($(a).parent().prev().children().html());
                var out_momey_float = parseFloat(out_momey.html()) + btn_momey;
                out_momey.text(out_momey_float.toFixed(2));
            }

            function onclick_reduce(b) {
                var out_momey = $(".out_momey");
                var input_ = $(b).next();
                var input_val = $(b).next().val();
                if (input_val <= 1) {
                    alert("商品个数不能小于1！")
                } else {
                    var input_add = parseInt(input_val) - 1;
                    input_.val(input_add);
                    var btn_momey = parseFloat($(b).parent().prev().children().html());
                    var out_momey_float = parseFloat(out_momey.html()) - btn_momey;
                    out_momey.text(out_momey_float.toFixed(2));
                }
            }
        </SCRIPT>
                            <script type="text/javascript">


                    //js函数 实现select option节点的加载 
                          function loadDistrict(upid){

                            $.ajax({
                              url:"{{ URL('/addressx/') }}"+"/"+upid,
                              type:"get",
                              dataType:"json",
                              success:function (data){
                                // alert(data);
                                if(data.length==0){
                                  return;
                                }
                                var select = "<select name='address_xia' class='form-contorl'>";
                                select +="<option value='-2'>-请选择-</option>";
                                for(var i=0;i<data.length;i++){
                                  select +="<option value='"+data[i].id+"'>"+data[i].name+"</option>";
                                }
                                select +="</select>";
                                //select option 新产生的节点对象 添加到form表单中 
                                // $("#fid").append(select);
                                //高版本jquery不支持live 事件委派
                                // $("select").live("change",function (){   });                         
                                $(select).change(function (){
                                    //清空后面所有的select节点
                                    $(this).nextAll("select").remove();

                                    var id = $(this).find("option:selected").val()
                                    // alert(id);
                                    loadDistrict(id);

                                }).appendTo('#fid');  


                              }
                            });

                          }
                        loadDistrict(0);


                        </script>
@endsection
