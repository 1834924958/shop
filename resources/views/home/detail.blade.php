@extends("home.head")
@section("content")

<script type="text/javascript" async="" src="{{ URL::asset('js/detail.blade.php') }}"></script>
        <div class="g-detail">
            <div class="g-bd">
                <br/><br/><br/>
            </div>
            <div class="g-bd">
                <div class="m-detail">
                    @foreach($shopping as $shop)
                    <form    method="post" action="/home/buy">
                    <input type='hidden' name='_token' value="{{ csrf_token() }}">
                    <!-- <input type="text" name='{{ $shop->id }}'> -->
                    <div class="detail-top">
                        <div class="slide">
                            <div class="view">
                                <img  id="mid" class="j-thumb" src=".././images/child/{{ $shop->photo }}" alt="" style="position:absolute;">
                            </div>
                            <div id='did' style="width:300px;height:428px;overflow:hidden;position:absolute;display:none;">
                                    <img class="j-thumb" src=".././images/child/{{ $shop->photo }}" alt="">
                            </div>
                        </div>
                        <script type="text/javascript">
     
                //先获取图片节点;
                    var mid=document.getElementById('mid');
                    var did=document.getElementById('did');
                    // *    mouseover 放上(移入)
                        // *    mouseout  离开（移出）
                    mid.onmouseover = function(){
                        did.style.display = 'block';
                        //获取小图片到顶部的距离;
                        var top = this.offsetTop+50;
                    // mid.offsetLeft获取小图距离左边的距离+图片的宽度+自定义的间距
                    var left = this.offsetLeft+this.offsetWidth+10;
                    //让缩略图所处的div位置定位到小图旁边;
                    did.style.top = top+'px';
                    did.style.left = left+'px';
                    //添加鼠标移动事件
                    this.onmousemove = function(ent){
                        //获取鼠标在小图上的位置;
                        var x = ent.clientX-this.offsetLeft;
                        var y = ent.clientY-this.offsetTop;
                        //鼠标所在位置对应大图上的坐标点;
                        did.scrollLeft = x*5;
                        did.scrollTop = y*5;
                    }
                    }
                    mid.onmouseout = function(){
                        did.style.display='none';
                    }
            </script>
                        <div class="info">
                            <div class="intro">
                                <div class="name">{{ $shop->name }}</div>
                                <div class="tagList">
                                    <a class="item" >{{ $shop->merchant }}</a>
                                </div>
                                <div class="desc">{{ $shop->briefing }}</div>
                            </div>
                            <div class="price u-formctr">
                                <div class="field pBox j-preSell f-hide f-cb">
                                    <span class="label label-1">预售价</span>
                                    <span class="rp"><span class="rmb">¥</span><span class="num j-preSell-price">0.00</span></span>
                                    <span class="op ">原价 ¥<s><span class="j-retail-price">{{ $shop->price }}</span></s></span>
                                </div>
                                <div class="field pBox j-sell f-cb">
                                    <span class="label label-1">售价</span>
                                    <span class="rp"><span class="rmb">¥</span><span class="num j-retail-price">{{ $shop->price }}</span></span>
                                </div>
                                <div class="field sale">
                                    <span class="label label-2">促销</span>
                                    <a class="firstLink j-huodong" data-id="1032021" href="http://you.163.com/act/pub/HFmffERzak.html?_stat_area=huodong_0&amp;_stat_referer=item" target="_blank">
                                        <div class="activityType">限时</div>{{ $shop->sales }}
                                    </a>
                                    <div style="clear:both"></div>
                                </div>
                                <div class="field server">
                                    <span class="label">服务</span>
                                    <span class="sItem">
                                        <i class="w-icon-normal icon-normal-point "></i>{{ $shop->service }}
                                    </span>
                                    <div style="clear:both"></div>
                                </div>
                            </div>
                            <div class="j-param"><div class="param u-formctr">                  
                                <!-- <span class="name name-2">颜色</span>                   -->
                                <div class="field field-1">                    
                                    <ul class="m-tabs">
<!--                                         <?php
                                                   $keywords = preg_split("/,/", "{$shop->pic}");
                                                   foreach ($keywords as $key => $value) {
                                                  
                                        ?>                               
                                        <li class="tab tab-pic" data-id="1018010">                          
                                         
                                            <a href="javascript:;"><img src=".././images/child/{{ $value }}" alt=""></a>
                                                                   
                                            <i class="w-icon-normal icon-normal-spec-arrow sel"></i>                          
                                            <div class="dis"></div>                          
                                            <div class="title">{{ $shop->color }}</div>                      
                                        </li>     
                                        <?php }  ?>     -->                                                                                  
<!--                                         <li class="tab tab-pic" data-id="1018011" data-url="http://yanxuan.nosdn.127.net/3382c6c11eab913b81fce49f99a4be66.png">                          
                                            <img src="2%E8%89%B2%E5%8F%AF%E9%80%89%20%E6%BE%B3%E6%B4%B2%E7%BE%8A%E7%BE%94%E6%AF%9BAB%E9%9D%A2%E7%9B%96%E6%AF%AF%20-%20%E5%86%AC%E6%9A%96%E5%A4%8F%E5%87%89%EF%BC%8C%E5%90%B8%E6%B9%BF%E6%8E%92%E6%B1%97%E3%80%82%20-%20%E7%BD%91%E6%98%93%E4%B8%A5%E9%80%89_files/3382c6c11eab913b81fce49f99a4be66.png" alt="">                          
                                            <i class="w-icon-normal icon-normal-spec-arrow sel"></i>                          
                                            <div class="dis"></div>                          
                                            <div class="title">生姜黄</div>                      
                                        </li>     -->                                                            
                                    </ul>                   
                                </div>                
                            </div></div>
                            <div class="tips j-tips f-hide"></div>
                            <div class="number u-formctr">
                                <span class="name name-1">数量</span>
                                <div class="field">
                                    <div class="j-numcount f-ib">
                                        <div class="u-selnum">       



                                           


<!--                                         <span class="j-reduce less z-dis"><i class="hx"></i></span>                        
                                        <input class="j-input dis" disabled="disabled" value="1" type="text">                       
                                        <span class="j-add more z-dis"><i class="hx"></i><i class="sx"></i></span>    -->
                                        
                                        <tr>    
                                            <input type="button" class="minus jian" value="-">
                                            <input type="text" size="1" class="input-text qty text" title="Qty" value="1" min="0" step="1" id="jisuan" name="count[{{ $shop->id }}]">
                                            <input type="button" class="plus jia" value="+" id="jia">
                                        </tr>   
                                                
                                    </div></div>
                                    <span class="j-stock stock f-hide">库存紧张</span>
                                </div>
                            </div>


                                <script>  
                                    $(".jian").click(function(){
                                        var jian = $(this).next();
                                        var a = jian.val();
                                        var b = parseInt(a) - 1;
                                        if (b<1) {
                                            jian.val(1);
                                        }else{
                                            jian.val(b);
                                        }
                                    });


                                    // 加
                                    $(".jia").click(function(){
                                        var jia = $(this).prev();
                                        var a = jia.val();
                                       var b =  parseInt(a) + 1;                                              
                                            jia.val(b);                              
                                    });
                                     
                                    
                                    
                                    </script>     
                            @if(empty(session("homeuser")))
                            <div class="btns">
                                <a class="btn w-button w-button-ghost w-button-xl j-btn-directBuy" href="#"><span>立即购买</span></a>
                                <a class="btn w-button w-button-primary w-button-xl j-btn-addcart" href="#"><span><i class="w-icon icon-cart-detail"></i>加入购物车</span></a>
                            </div>
                            @else

                            <div class="btns">
                                <!-- <a class="btn w-button w-button-ghost w-button-xl j-btn-directBuy" href="{{ $shop->color }}"><span>立即购买</span></a> -->
                                <button class="btn w-button w-button-ghost w-button-xl j-btn-directBuy" type='submit'>立即购买</button>
                               
                                
                                <a class="btn w-button w-button-primary w-button-xl j-btn-addcart" href="/home/car/?id={{ $shop->id }}"><span><i class="w-icon icon-cart-detail"></i>加入购物车</span></a>
                            </div>
                            @endif
                        </div>
                    </div>
                </form>
                    @endforeach
                    <!-- 推荐商品 -->
        
                    <!-- 推荐商品end -->
                    <div class="bd" style="margin-top: -20px;">
                        <div class="left">
                            <div class="detail-nav j-nav-tab">
                                <ul class="nav">
                                    <li class="item j-nav-item" data-con="j-nav-comment">
                                        <a href="javascript:void(0);">评论<span class="num"></span></a>
                                    </li>
                                    <li class="bg"></li>
                                </ul>
                            </div>
                            <div class="detail-html j-nav-con j-nav-html">



                            </div>
        <form>

           <input type="hidden" name="bid" value="{{ $shop->id }}" id="bid">
            <textarea name="text1" id="text1" cols="30" rows="10" tabindex="6" style="border:1px solid #c0aeba;width:750px;height:200px;font-size:20px;"   placeholder="你好,请在此输入你的评价"></textarea>
            <button type="button" id="submi" style="display:block;position:absolute;margin-top:10px;margin-left:560px;font-size:20px;width:90px;" class="btn w-button w-button-ghost w-button-xl j-btn-directBuy" >评论</button>
            <button type="reset" style="display:block;position:absolute;margin-top:10px;margin-left:660px;font-size:20px;width:90px;" class="btn w-button w-button-ghost w-button-xl j-btn-directBuy">取消</button>
             
        </form>
        <script>
            
                $('#submi').click(function(){
                    var text1 = $('#text1').val();
                    var bid = $('#bid').val();
                    $.ajax({
                        type: 'POST',
                        url: '/home/pinglun',

                        data:'_token={{ csrf_token() }}&text1='+text1+'&bid='+bid,
                        success:function(msg) {
                            // alert(msg);
                            if(msg == 1){
                                location.reload(true);
                                // alert(msg);
                            }else{
                                alert('此商品未购买');
                            }

                        },
                        error:function(){
                            alert('错误');
                        }
                    });
                });
            

 
                // $('#submi').click(function() {
                //     $.ajax({
                //         url: '/home/pinglun',
                //         type: 'post',
                      
                //         data: $("#text #bid").serialize(),
                //         success: function(msg) {
                //             alert(msg);

                //         },
                //         error:function(){
                //             alert('错误');
                //         }
                //     });
                // });

         </script>

        <br/><br/><br/><br/>
        @foreach($ping as $lun)
        <hr/><br/><br/>
        
        <div class="item f-clearfix">
           <?php

                $pii = \DB::table('user')->where("id",$lun->uid)->get();
           ?>
            @foreach($pii as $asd)
            <div class="m-commentUser">
                <div class="avatarWarp">
                    
                    <img src=".././images/user/{{ $asd->photo }}">
                </div>
                <div class="username-withIcon">
                    
                    
                    
                    <div class="username f-center"> {{ $asd->name }}  </div>
                    
                </div>
            </div>
           @endforeach
            <div class="m-comment f-clearfix">
                <div class="content">  {{ $lun->meirong }} </div>
                <div class="meta">
                    {{ $lun->time }}
                    <div class="right">
                        <div class="createTime">
       



                        </div>
                    </div>
                </div>
                <div id="1476635246363" class="lightbox"></div>
            </div>
        </div>
        
        <br/><br/>
        <hr/><br/><br/>
        @endforeach

        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

                        </div>

                        <div class="right">

                        </div>
                    </div>
                </div>
            </div>
       @endsection