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
                        <!-- 进行放大镜的修改 -->
                        <div class="slide">
                            <div class="view">
                                <img  id='mid' class="j-thumb" src=".././images/child/{{ $shop->photo }}" alt="" 
                                style="position:absolute;">
                            </div>
                            <div id='did' style="width:200px;height:428px;overflow:hidden;position:absolute;display:none;">
                                    <img class="j-thumb" src=".././images/child/{{ $shop->photo }}" alt="">
                            </div>
                        </div>
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
                                <span class="name name-2">颜色</span>                  
                                <div class="field field-1">                    
                                    <ul class="m-tabs">
                                        <?php
                                                   $keywords = preg_split("/,/", "{$shop->pic}");
                                                   foreach ($keywords as $key => $value) {
                                                  
                                        ?>                               
                                        <li class="tab tab-pic" data-id="1018010">                          
                                         
                                            <a href="javascript:;"><img src=".././images/child/{{ $value }}" alt=""></a>
                                                                   
                                            <i class="w-icon-normal icon-normal-spec-arrow sel"></i>                          
                                            <div class="dis"></div>                          
                                            <div class="title">{{ $shop->color }}</div>                      
                                        </li>     
                                        <?php }  ?>                                                                                      
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
                    <div class="recommend-container"><div class="bd"><div class="m-recommend"><header><h3>大家都在看</h3></header><div class="recommend-wrap"><div class="recommend-content"><ul class="m-recommendItemList slick-initialized slick-slider" id="j-recommendItemList">          <div aria-live="polite" class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 1920px; transform: translate3d(0px, 0px, 0px);" role="listbox"><li class="item slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 210px;" tabindex="0" role="option" aria-describedby="slick-slide00">        <div class="m-product  j-product">          <div class="hd">            <a href="http://you.163.com/item/detail?id=1010000&amp;_stat_area=recommend_1&amp;_stat_referer=item&amp;_stat_referer_itemid=1021004&amp;rcmdVer=1.1.1.3" title="澳洲纯羊毛盖毯  加厚款" target="_blank" tabindex="0">              <img class="img j-lazyload" data-original="http://yanxuan.nosdn.127.net/3bec70b85337c3eec182e54380ef7370.png?imageView&amp;quality=95&amp;thumbnail=210x210" alt="澳洲纯羊毛盖毯  加厚款" src="2%E8%89%B2%E5%8F%AF%E9%80%89%20%E6%BE%B3%E6%B4%B2%E7%BE%8A%E7%BE%94%E6%AF%9BAB%E9%9D%A2%E7%9B%96%E6%AF%AF%20-%20%E5%86%AC%E6%9A%96%E5%A4%8F%E5%87%89%EF%BC%8C%E5%90%B8%E6%B9%BF%E6%8E%92%E6%B1%97%E3%80%82%20-%20%E7%BD%91%E6%98%93%E4%B8%A5%E9%80%89_files/3bec70b85337c3eec182e54380ef7370.png" style="opacity: 1; display: block;">                          </a>          </div>          <div class="bd">            <h4 class="name">              <a class="name" href="http://you.163.com/item/detail?id=1010000&amp;_stat_area=recommend_1&amp;_stat_referer=item&amp;_stat_referer_itemid=1021004&amp;rcmdVer=1.1.1.3" title="澳洲纯羊毛盖毯  加厚款" target="_blank" tabindex="0">              澳洲纯羊毛盖毯  加厚款              </a>            </h4>            <p class="price">              <span>¥399.00</span>                                        </p>                      </div>        </div>      </li><li class="item slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 210px;" tabindex="0" role="option" aria-describedby="slick-slide01">        <div class="m-product  j-product">          <div class="hd">            <a href="http://you.163.com/item/detail?id=1010001&amp;_stat_area=recommend_2&amp;_stat_referer=item&amp;_stat_referer_itemid=1021004&amp;rcmdVer=1.1.1.3" title="澳洲纯羊毛盖毯  舒适款" target="_blank" tabindex="0">              <img class="img j-lazyload" data-original="http://yanxuan.nosdn.127.net/a8b0a5def7d64e411dd98bdfb1fc989b.png?imageView&amp;quality=95&amp;thumbnail=210x210" alt="澳洲纯羊毛盖毯  舒适款" src="2%E8%89%B2%E5%8F%AF%E9%80%89%20%E6%BE%B3%E6%B4%B2%E7%BE%8A%E7%BE%94%E6%AF%9BAB%E9%9D%A2%E7%9B%96%E6%AF%AF%20-%20%E5%86%AC%E6%9A%96%E5%A4%8F%E5%87%89%EF%BC%8C%E5%90%B8%E6%B9%BF%E6%8E%92%E6%B1%97%E3%80%82%20-%20%E7%BD%91%E6%98%93%E4%B8%A5%E9%80%89_files/a8b0a5def7d64e411dd98bdfb1fc989b.png" style="opacity: 1; display: block;">                          </a>          </div>          <div class="bd">            <h4 class="name">              <a class="name" href="http://you.163.com/item/detail?id=1010001&amp;_stat_area=recommend_2&amp;_stat_referer=item&amp;_stat_referer_itemid=1021004&amp;rcmdVer=1.1.1.3" title="澳洲纯羊毛盖毯  舒适款" target="_blank" tabindex="0">              澳洲纯羊毛盖毯  舒适款              </a>            </h4>            <p class="price">              <span>¥299.00</span>                                        </p>                      </div>        </div>      </li><li class="item slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 210px;" tabindex="0" role="option" aria-describedby="slick-slide02">        <div class="m-product  j-product">          <div class="hd">            <a href="http://you.163.com/item/detail?id=1044012&amp;_stat_area=recommend_3&amp;_stat_referer=item&amp;_stat_referer_itemid=1021004&amp;rcmdVer=1.1.1.3" title="澳洲羊羔毛华夫格盖毯" target="_blank" tabindex="0">              <img class="img j-lazyload" data-original="http://yanxuan.nosdn.127.net/a803c68ea88e3116023b45ac9ea99510.png?imageView&amp;quality=95&amp;thumbnail=210x210" alt="澳洲羊羔毛华夫格盖毯" src="2%E8%89%B2%E5%8F%AF%E9%80%89%20%E6%BE%B3%E6%B4%B2%E7%BE%8A%E7%BE%94%E6%AF%9BAB%E9%9D%A2%E7%9B%96%E6%AF%AF%20-%20%E5%86%AC%E6%9A%96%E5%A4%8F%E5%87%89%EF%BC%8C%E5%90%B8%E6%B9%BF%E6%8E%92%E6%B1%97%E3%80%82%20-%20%E7%BD%91%E6%98%93%E4%B8%A5%E9%80%89_files/a803c68ea88e3116023b45ac9ea99510.png" style="display: block; opacity: 1;">                          </a>          </div>          <div class="bd">            <h4 class="name">              <a class="name" href="http://you.163.com/item/detail?id=1044012&amp;_stat_area=recommend_3&amp;_stat_referer=item&amp;_stat_referer_itemid=1021004&amp;rcmdVer=1.1.1.3" title="澳洲羊羔毛华夫格盖毯" target="_blank" tabindex="0">              澳洲羊羔毛华夫格盖毯              </a>            </h4>            <p class="price">              <span>¥349.00</span>                                        </p>                      </div>        </div>      </li><li class="item slick-slide slick-active" data-slick-index="3" aria-hidden="false" style="width: 210px;" tabindex="0" role="option" aria-describedby="slick-slide03">        <div class="m-product  j-product">          <div class="hd">            <a href="http://you.163.com/item/detail?id=1067003&amp;_stat_area=recommend_4&amp;_stat_referer=item&amp;_stat_referer_itemid=1021004&amp;rcmdVer=1.1.1.3" title="AB面牛仔蓝美式羊毛盖毯" target="_blank" tabindex="0">              <img class="img j-lazyload" data-original="http://yanxuan.nosdn.127.net/1d9b83efe999968e6d839ca70c75b481.png?imageView&amp;quality=95&amp;thumbnail=210x210" alt="AB面牛仔蓝美式羊毛盖毯" src="2%E8%89%B2%E5%8F%AF%E9%80%89%20%E6%BE%B3%E6%B4%B2%E7%BE%8A%E7%BE%94%E6%AF%9BAB%E9%9D%A2%E7%9B%96%E6%AF%AF%20-%20%E5%86%AC%E6%9A%96%E5%A4%8F%E5%87%89%EF%BC%8C%E5%90%B8%E6%B9%BF%E6%8E%92%E6%B1%97%E3%80%82%20-%20%E7%BD%91%E6%98%93%E4%B8%A5%E9%80%89_files/1d9b83efe999968e6d839ca70c75b481.png" style="display: block; opacity: 1;">                          </a>          </div>          <div class="bd">            <h4 class="name">              <a class="name" href="http://you.163.com/item/detail?id=1067003&amp;_stat_area=recommend_4&amp;_stat_referer=item&amp;_stat_referer_itemid=1021004&amp;rcmdVer=1.1.1.3" title="AB面牛仔蓝美式羊毛盖毯" target="_blank" tabindex="0">              AB面牛仔蓝美式羊毛盖毯              </a>            </h4>            <p class="price">              <span>¥349.00</span>                                        </p>                      </div>        </div>      </li><li class="item slick-slide" data-slick-index="4" aria-hidden="true" style="width: 210px;" tabindex="-1" role="option" aria-describedby="slick-slide04">        <div class="m-product  j-product">          <div class="hd">            <a href="http://you.163.com/item/detail?id=1023012&amp;_stat_area=recommend_5&amp;_stat_referer=item&amp;_stat_referer_itemid=1021004&amp;rcmdVer=1.1.1.3" title="3色可选 色织华夫格毛巾被" target="_blank" tabindex="-1">              <img class="img j-lazyload" data-lazy="http://yanxuan.nosdn.127.net/ca4e6a85f5c8cdac86e5932879691bfe.png?imageView&amp;quality=95&amp;thumbnail=210x210" data-original="http://yanxuan.nosdn.127.net/ca4e6a85f5c8cdac86e5932879691bfe.png?imageView&amp;quality=95&amp;thumbnail=210x210" alt="3色可选 色织华夫格毛巾被" src="2%E8%89%B2%E5%8F%AF%E9%80%89%20%E6%BE%B3%E6%B4%B2%E7%BE%8A%E7%BE%94%E6%AF%9BAB%E9%9D%A2%E7%9B%96%E6%AF%AF%20-%20%E5%86%AC%E6%9A%96%E5%A4%8F%E5%87%89%EF%BC%8C%E5%90%B8%E6%B9%BF%E6%8E%92%E6%B1%97%E3%80%82%20-%20%E7%BD%91%E6%98%93%E4%B8%A5%E9%80%89_files/ca4e6a85f5c8cdac86e5932879691bfe.png" style="display: block;">                          </a>          </div>          <div class="bd">            <h4 class="name">              <a class="name" href="http://you.163.com/item/detail?id=1023012&amp;_stat_area=recommend_5&amp;_stat_referer=item&amp;_stat_referer_itemid=1021004&amp;rcmdVer=1.1.1.3" title="3色可选 色织华夫格毛巾被" target="_blank" tabindex="-1">              3色可选 色织华夫格毛巾被              </a>            </h4>            <p class="price">              <span>¥299.00</span>                                        </p>                      </div>        </div>      </li><li class="item slick-slide" data-slick-index="5" aria-hidden="true" style="width: 210px;" tabindex="-1" role="option" aria-describedby="slick-slide05">        <div class="m-product  j-product">          <div class="hd">            <a href="http://you.163.com/item/detail?id=1011004&amp;_stat_area=recommend_6&amp;_stat_referer=item&amp;_stat_referer_itemid=1021004&amp;rcmdVer=1.1.1.3" title="3色可选 色织精梳AB纱格纹毛巾被" target="_blank" tabindex="-1">              <img class="img j-lazyload" data-lazy="http://yanxuan.nosdn.127.net/ea0fb2f7d7de7d80cc581aaf8a1e9848.png?imageView&amp;quality=95&amp;thumbnail=210x210" data-original="http://yanxuan.nosdn.127.net/ea0fb2f7d7de7d80cc581aaf8a1e9848.png?imageView&amp;quality=95&amp;thumbnail=210x210" alt="3色可选 色织精梳AB纱格纹毛巾被" src="2%E8%89%B2%E5%8F%AF%E9%80%89%20%E6%BE%B3%E6%B4%B2%E7%BE%8A%E7%BE%94%E6%AF%9BAB%E9%9D%A2%E7%9B%96%E6%AF%AF%20-%20%E5%86%AC%E6%9A%96%E5%A4%8F%E5%87%89%EF%BC%8C%E5%90%B8%E6%B9%BF%E6%8E%92%E6%B1%97%E3%80%82%20-%20%E7%BD%91%E6%98%93%E4%B8%A5%E9%80%89_files/ea0fb2f7d7de7d80cc581aaf8a1e9848.png" style="display: block;">                          </a>          </div>          <div class="bd">            <h4 class="name">              <a class="name" href="http://you.163.com/item/detail?id=1011004&amp;_stat_area=recommend_6&amp;_stat_referer=item&amp;_stat_referer_itemid=1021004&amp;rcmdVer=1.1.1.3" title="3色可选 色织精梳AB纱格纹毛巾被" target="_blank" tabindex="-1">              3色可选 色织精梳AB纱格纹毛巾被              </a>            </h4>            <p class="price">              <span>¥199.00</span>                                        </p>                      </div>        </div>      </li><li class="item slick-slide" data-slick-index="6" aria-hidden="true" style="width: 210px;" tabindex="-1" role="option" aria-describedby="slick-slide06">        <div class="m-product  j-product">          <div class="hd">            <a href="http://you.163.com/item/detail?id=1062005&amp;_stat_area=recommend_7&amp;_stat_referer=item&amp;_stat_referer_itemid=1021004&amp;rcmdVer=1.1.1.3" title="2色可选 几何拼色绢丝拉绒围巾" target="_blank" tabindex="-1">              <img class="img j-lazyload" data-lazy="http://yanxuan.nosdn.127.net/54d3168cdf8942f71c945aacc1321a98.png?imageView&amp;quality=95&amp;thumbnail=210x210" data-original="http://yanxuan.nosdn.127.net/54d3168cdf8942f71c945aacc1321a98.png?imageView&amp;quality=95&amp;thumbnail=210x210" alt="2色可选 几何拼色绢丝拉绒围巾" src="2%E8%89%B2%E5%8F%AF%E9%80%89%20%E6%BE%B3%E6%B4%B2%E7%BE%8A%E7%BE%94%E6%AF%9BAB%E9%9D%A2%E7%9B%96%E6%AF%AF%20-%20%E5%86%AC%E6%9A%96%E5%A4%8F%E5%87%89%EF%BC%8C%E5%90%B8%E6%B9%BF%E6%8E%92%E6%B1%97%E3%80%82%20-%20%E7%BD%91%E6%98%93%E4%B8%A5%E9%80%89_files/54d3168cdf8942f71c945aacc1321a98.png" style="display: block;">                          </a>          </div>          <div class="bd">            <h4 class="name">              <a class="name" href="http://you.163.com/item/detail?id=1062005&amp;_stat_area=recommend_7&amp;_stat_referer=item&amp;_stat_referer_itemid=1021004&amp;rcmdVer=1.1.1.3" title="2色可选 几何拼色绢丝拉绒围巾" target="_blank" tabindex="-1">              2色可选 几何拼色绢丝拉绒围巾              </a>            </h4>            <p class="price">              <span>¥139.00</span>                                        </p>                      </div>        </div>      </li><li class="item slick-slide" data-slick-index="7" aria-hidden="true" style="width: 210px;" tabindex="-1" role="option" aria-describedby="slick-slide07">        <div class="m-product  j-product">          <div class="hd">            <a href="http://you.163.com/item/detail?id=1066034&amp;_stat_area=recommend_8&amp;_stat_referer=item&amp;_stat_referer_itemid=1021004&amp;rcmdVer=1.1.1.3" title="3色可选 丝薄AB面羊毛围巾" target="_blank" tabindex="-1">              <img class="img j-lazyload" data-lazy="http://yanxuan.nosdn.127.net/a16c84ec8cd41f0c5422dcd20b647431.png?imageView&amp;quality=95&amp;thumbnail=210x210" data-original="http://yanxuan.nosdn.127.net/a16c84ec8cd41f0c5422dcd20b647431.png?imageView&amp;quality=95&amp;thumbnail=210x210" alt="3色可选 丝薄AB面羊毛围巾" src="2%E8%89%B2%E5%8F%AF%E9%80%89%20%E6%BE%B3%E6%B4%B2%E7%BE%8A%E7%BE%94%E6%AF%9BAB%E9%9D%A2%E7%9B%96%E6%AF%AF%20-%20%E5%86%AC%E6%9A%96%E5%A4%8F%E5%87%89%EF%BC%8C%E5%90%B8%E6%B9%BF%E6%8E%92%E6%B1%97%E3%80%82%20-%20%E7%BD%91%E6%98%93%E4%B8%A5%E9%80%89_files/a16c84ec8cd41f0c5422dcd20b647431.png" style="display: block;">                          </a>          </div>          <div class="bd">            <h4 class="name">              <a class="name" href="http://you.163.com/item/detail?id=1066034&amp;_stat_area=recommend_8&amp;_stat_referer=item&amp;_stat_referer_itemid=1021004&amp;rcmdVer=1.1.1.3" title="3色可选 丝薄AB面羊毛围巾" target="_blank" tabindex="-1">              3色可选 丝薄AB面羊毛围巾              </a>            </h4>            <p class="price">              <span>¥99.00</span>                                        </p>                      </div>        </div>      </li></div></div>                                                                              </ul></div><div class="m-recommend-btn btn-left slick-arrow slick-disabled" aria-disabled="true" style="display: block;"></div><div class="m-recommend-btn btn-right slick-arrow" style="display: block;" aria-disabled="false"></div></div></div></div></div>
                    <!-- 推荐商品end -->
                    <div class="bd" style="margin-top: -20px;">
                        <div class="left">
                            <div class="detail-nav j-nav-tab">
                                <ul class="nav">
                                    <li class="item item-active j-nav-item" data-con="j-nav-html">
                                        <a href="javascript:void(0);">详情</a>
                                    </li>
                                    <li class="item j-nav-item" data-con="j-nav-comment">
                                        <a href="javascript:void(0);">评价<span class="num">（103）</span></a>
                                    </li>
                                    <li class="bg"></li>
                                </ul>
                            </div>
                            <div class="detail-html j-nav-con j-nav-html">
                                <ul id="j-attrList" class="m-attrList" style="visibility: visible;">
                                    <li class="item j-item">
                                        <span class="name">材质</span>
                                        <span class="value">100%羊毛</span>
                                    </li>
                                    <li class="item j-item">
                                        <span class="name">尺寸</span>
                                        <span class="value">150*200cm</span>
                                    </li>
                                    <li class="item j-item">
                                        <span class="name">产品等级</span>
                                        <span class="value">一等品</span>
                                    </li>
                                    <li class="item j-item">
                                        <span class="name">产地</span>
                                        <span class="value">中国</span>
                                    </li>
                                    <li class="item j-item" style="width: 100%; border-bottom: medium none;">
                                        <span class="name">温馨提示</span>
                                        <span class="value">1.羊毛毯采取传统机织工艺，纯天然织造的，直接接触皮肤会有轻微扎人。<br>2.初次使用时会有少量浮毛，建议干洗处理。<br>3.商品为纯羊毛织造而成，若有少量气味请通风2-3天去除。</span>
                                    </li>
                                </ul>
                                <div class="j-itemDetail"><p><img src="2%E8%89%B2%E5%8F%AF%E9%80%89%20%E6%BE%B3%E6%B4%B2%E7%BE%8A%E7%BE%94%E6%AF%9BAB%E9%9D%A2%E7%9B%96%E6%AF%AF%20-%20%E5%86%AC%E6%9A%96%E5%A4%8F%E5%87%89%EF%BC%8C%E5%90%B8%E6%B9%BF%E6%8E%92%E6%B1%97%E3%80%82%20-%20%E7%BD%91%E6%98%93%E4%B8%A5%E9%80%89_files/7a82ce63285fa75e7c45958db6e1ea72.jpg" _src="http://yanxuan.nosdn.127.net/7a82ce63285fa75e7c45958db6e1ea72.jpg" style=""></p><p><img src="2%E8%89%B2%E5%8F%AF%E9%80%89%20%E6%BE%B3%E6%B4%B2%E7%BE%8A%E7%BE%94%E6%AF%9BAB%E9%9D%A2%E7%9B%96%E6%AF%AF%20-%20%E5%86%AC%E6%9A%96%E5%A4%8F%E5%87%89%EF%BC%8C%E5%90%B8%E6%B9%BF%E6%8E%92%E6%B1%97%E3%80%82%20-%20%E7%BD%91%E6%98%93%E4%B8%A5%E9%80%89_files/c6251683549d0cefad6d75d48371ee5d.jpg" _src="http://yanxuan.nosdn.127.net/c6251683549d0cefad6d75d48371ee5d.jpg" style=""></p><p><img src="2%E8%89%B2%E5%8F%AF%E9%80%89%20%E6%BE%B3%E6%B4%B2%E7%BE%8A%E7%BE%94%E6%AF%9BAB%E9%9D%A2%E7%9B%96%E6%AF%AF%20-%20%E5%86%AC%E6%9A%96%E5%A4%8F%E5%87%89%EF%BC%8C%E5%90%B8%E6%B9%BF%E6%8E%92%E6%B1%97%E3%80%82%20-%20%E7%BD%91%E6%98%93%E4%B8%A5%E9%80%89_files/332da1ccf902e60d638ee7a10b376949.jpg" _src="http://yanxuan.nosdn.127.net/332da1ccf902e60d638ee7a10b376949.jpg" style=""></p><p><img src="2%E8%89%B2%E5%8F%AF%E9%80%89%20%E6%BE%B3%E6%B4%B2%E7%BE%8A%E7%BE%94%E6%AF%9BAB%E9%9D%A2%E7%9B%96%E6%AF%AF%20-%20%E5%86%AC%E6%9A%96%E5%A4%8F%E5%87%89%EF%BC%8C%E5%90%B8%E6%B9%BF%E6%8E%92%E6%B1%97%E3%80%82%20-%20%E7%BD%91%E6%98%93%E4%B8%A5%E9%80%89_files/46b7c34a5c80742a1c2e64c984aadf45.jpg" _src="http://yanxuan.nosdn.127.net/46b7c34a5c80742a1c2e64c984aadf45.jpg" style=""></p><p><img src="2%E8%89%B2%E5%8F%AF%E9%80%89%20%E6%BE%B3%E6%B4%B2%E7%BE%8A%E7%BE%94%E6%AF%9BAB%E9%9D%A2%E7%9B%96%E6%AF%AF%20-%20%E5%86%AC%E6%9A%96%E5%A4%8F%E5%87%89%EF%BC%8C%E5%90%B8%E6%B9%BF%E6%8E%92%E6%B1%97%E3%80%82%20-%20%E7%BD%91%E6%98%93%E4%B8%A5%E9%80%89_files/0309bc61af948669fe361b33271c79cc.jpg" _src="http://yanxuan.nosdn.127.net/0309bc61af948669fe361b33271c79cc.jpg" style=""></p><p><img src="2%E8%89%B2%E5%8F%AF%E9%80%89%20%E6%BE%B3%E6%B4%B2%E7%BE%8A%E7%BE%94%E6%AF%9BAB%E9%9D%A2%E7%9B%96%E6%AF%AF%20-%20%E5%86%AC%E6%9A%96%E5%A4%8F%E5%87%89%EF%BC%8C%E5%90%B8%E6%B9%BF%E6%8E%92%E6%B1%97%E3%80%82%20-%20%E7%BD%91%E6%98%93%E4%B8%A5%E9%80%89_files/f6d61c696d3194672cbfc760e2dfab04.jpg" _src="http://yanxuan.nosdn.127.net/f6d61c696d3194672cbfc760e2dfab04.jpg" style=""></p><p><img src="2%E8%89%B2%E5%8F%AF%E9%80%89%20%E6%BE%B3%E6%B4%B2%E7%BE%8A%E7%BE%94%E6%AF%9BAB%E9%9D%A2%E7%9B%96%E6%AF%AF%20-%20%E5%86%AC%E6%9A%96%E5%A4%8F%E5%87%89%EF%BC%8C%E5%90%B8%E6%B9%BF%E6%8E%92%E6%B1%97%E3%80%82%20-%20%E7%BD%91%E6%98%93%E4%B8%A5%E9%80%89_files/1ece10fc88b908d9166e3f0fb5654b34.jpg" _src="http://yanxuan.nosdn.127.net/1ece10fc88b908d9166e3f0fb5654b34.jpg"></p><p><img src="2%E8%89%B2%E5%8F%AF%E9%80%89%20%E6%BE%B3%E6%B4%B2%E7%BE%8A%E7%BE%94%E6%AF%9BAB%E9%9D%A2%E7%9B%96%E6%AF%AF%20-%20%E5%86%AC%E6%9A%96%E5%A4%8F%E5%87%89%EF%BC%8C%E5%90%B8%E6%B9%BF%E6%8E%92%E6%B1%97%E3%80%82%20-%20%E7%BD%91%E6%98%93%E4%B8%A5%E9%80%89_files/01da8df479e8eade44e5b97d98d2ecdc.jpg" _src="http://yanxuan.nosdn.127.net/01da8df479e8eade44e5b97d98d2ecdc.jpg"></p><p><img src="2%E8%89%B2%E5%8F%AF%E9%80%89%20%E6%BE%B3%E6%B4%B2%E7%BE%8A%E7%BE%94%E6%AF%9BAB%E9%9D%A2%E7%9B%96%E6%AF%AF%20-%20%E5%86%AC%E6%9A%96%E5%A4%8F%E5%87%89%EF%BC%8C%E5%90%B8%E6%B9%BF%E6%8E%92%E6%B1%97%E3%80%82%20-%20%E7%BD%91%E6%98%93%E4%B8%A5%E9%80%89_files/6e94e41f4b0fc8a91b48d111cf559963.jpg" _src="http://yanxuan.nosdn.127.net/6e94e41f4b0fc8a91b48d111cf559963.jpg" style=""></p><p><img src="2%E8%89%B2%E5%8F%AF%E9%80%89%20%E6%BE%B3%E6%B4%B2%E7%BE%8A%E7%BE%94%E6%AF%9BAB%E9%9D%A2%E7%9B%96%E6%AF%AF%20-%20%E5%86%AC%E6%9A%96%E5%A4%8F%E5%87%89%EF%BC%8C%E5%90%B8%E6%B9%BF%E6%8E%92%E6%B1%97%E3%80%82%20-%20%E7%BD%91%E6%98%93%E4%B8%A5%E9%80%89_files/39cc39f48b07dcd55280d6d41446a855.jpg" _src="http://yanxuan.nosdn.127.net/39cc39f48b07dcd55280d6d41446a855.jpg" style=""></p><p><img src="2%E8%89%B2%E5%8F%AF%E9%80%89%20%E6%BE%B3%E6%B4%B2%E7%BE%8A%E7%BE%94%E6%AF%9BAB%E9%9D%A2%E7%9B%96%E6%AF%AF%20-%20%E5%86%AC%E6%9A%96%E5%A4%8F%E5%87%89%EF%BC%8C%E5%90%B8%E6%B9%BF%E6%8E%92%E6%B1%97%E3%80%82%20-%20%E7%BD%91%E6%98%93%E4%B8%A5%E9%80%89_files/bbb6f955287c419cb2560b9a92507fbd.jpg" _src="http://yanxuan.nosdn.127.net/bbb6f955287c419cb2560b9a92507fbd.jpg" style=""></p><p><img src="2%E8%89%B2%E5%8F%AF%E9%80%89%20%E6%BE%B3%E6%B4%B2%E7%BE%8A%E7%BE%94%E6%AF%9BAB%E9%9D%A2%E7%9B%96%E6%AF%AF%20-%20%E5%86%AC%E6%9A%96%E5%A4%8F%E5%87%89%EF%BC%8C%E5%90%B8%E6%B9%BF%E6%8E%92%E6%B1%97%E3%80%82%20-%20%E7%BD%91%E6%98%93%E4%B8%A5%E9%80%89_files/b2e23c277654ce9cda3f0222c0cdfd9e.jpg" _src="http://yanxuan.nosdn.127.net/b2e23c277654ce9cda3f0222c0cdfd9e.jpg" style=""></p><p><img src="2%E8%89%B2%E5%8F%AF%E9%80%89%20%E6%BE%B3%E6%B4%B2%E7%BE%8A%E7%BE%94%E6%AF%9BAB%E9%9D%A2%E7%9B%96%E6%AF%AF%20-%20%E5%86%AC%E6%9A%96%E5%A4%8F%E5%87%89%EF%BC%8C%E5%90%B8%E6%B9%BF%E6%8E%92%E6%B1%97%E3%80%82%20-%20%E7%BD%91%E6%98%93%E4%B8%A5%E9%80%89_files/a5c537f3406d0b0cb7f432654d73456c.jpg" _src="http://yanxuan.nosdn.127.net/a5c537f3406d0b0cb7f432654d73456c.jpg" style=""></p><p><img src="2%E8%89%B2%E5%8F%AF%E9%80%89%20%E6%BE%B3%E6%B4%B2%E7%BE%8A%E7%BE%94%E6%AF%9BAB%E9%9D%A2%E7%9B%96%E6%AF%AF%20-%20%E5%86%AC%E6%9A%96%E5%A4%8F%E5%87%89%EF%BC%8C%E5%90%B8%E6%B9%BF%E6%8E%92%E6%B1%97%E3%80%82%20-%20%E7%BD%91%E6%98%93%E4%B8%A5%E9%80%89_files/7fa0b1d1392d2755d8c76e5166717271.jpg" _src="http://yanxuan.nosdn.127.net/7fa0b1d1392d2755d8c76e5166717271.jpg" style=""></p><p><img src="2%E8%89%B2%E5%8F%AF%E9%80%89%20%E6%BE%B3%E6%B4%B2%E7%BE%8A%E7%BE%94%E6%AF%9BAB%E9%9D%A2%E7%9B%96%E6%AF%AF%20-%20%E5%86%AC%E6%9A%96%E5%A4%8F%E5%87%89%EF%BC%8C%E5%90%B8%E6%B9%BF%E6%8E%92%E6%B1%97%E3%80%82%20-%20%E7%BD%91%E6%98%93%E4%B8%A5%E9%80%89_files/533ac276228fb4f4708407dbc9557074.jpg" _src="http://yanxuan.nosdn.127.net/533ac276228fb4f4708407dbc9557074.jpg" style=""></p><p><img src="2%E8%89%B2%E5%8F%AF%E9%80%89%20%E6%BE%B3%E6%B4%B2%E7%BE%8A%E7%BE%94%E6%AF%9BAB%E9%9D%A2%E7%9B%96%E6%AF%AF%20-%20%E5%86%AC%E6%9A%96%E5%A4%8F%E5%87%89%EF%BC%8C%E5%90%B8%E6%B9%BF%E6%8E%92%E6%B1%97%E3%80%82%20-%20%E7%BD%91%E6%98%93%E4%B8%A5%E9%80%89_files/6b8abe94b174667084cfaa909a1a6ae8.jpg" _src="http://yanxuan.nosdn.127.net/6b8abe94b174667084cfaa909a1a6ae8.jpg" style=""></p><p><img src="2%E8%89%B2%E5%8F%AF%E9%80%89%20%E6%BE%B3%E6%B4%B2%E7%BE%8A%E7%BE%94%E6%AF%9BAB%E9%9D%A2%E7%9B%96%E6%AF%AF%20-%20%E5%86%AC%E6%9A%96%E5%A4%8F%E5%87%89%EF%BC%8C%E5%90%B8%E6%B9%BF%E6%8E%92%E6%B1%97%E3%80%82%20-%20%E7%BD%91%E6%98%93%E4%B8%A5%E9%80%89_files/90651cf71db15227b9d691e55f0a75da.jpg" _src="http://yanxuan.nosdn.127.net/90651cf71db15227b9d691e55f0a75da.jpg" style=""></p><p><img src="2%E8%89%B2%E5%8F%AF%E9%80%89%20%E6%BE%B3%E6%B4%B2%E7%BE%8A%E7%BE%94%E6%AF%9BAB%E9%9D%A2%E7%9B%96%E6%AF%AF%20-%20%E5%86%AC%E6%9A%96%E5%A4%8F%E5%87%89%EF%BC%8C%E5%90%B8%E6%B9%BF%E6%8E%92%E6%B1%97%E3%80%82%20-%20%E7%BD%91%E6%98%93%E4%B8%A5%E9%80%89_files/24c44cd0e9cc09849bbcd48235b81dac.jpg" _src="http://yanxuan.nosdn.127.net/24c44cd0e9cc09849bbcd48235b81dac.jpg" style=""></p><p><br></p></div>
                                <div class="other j-report-con">
                                    <div class="tt">质检报告</div>
                                    <div class="con">
                                        <a href="javascript:void(0);" class="img-wrap j-report-zoomout">
                                            <img src="2%E8%89%B2%E5%8F%AF%E9%80%89%20%E6%BE%B3%E6%B4%B2%E7%BE%8A%E7%BE%94%E6%AF%9BAB%E9%9D%A2%E7%9B%96%E6%AF%AF%20-%20%E5%86%AC%E6%9A%96%E5%A4%8F%E5%87%89%EF%BC%8C%E5%90%B8%E6%B9%BF%E6%8E%92%E6%B1%97%E3%80%82%20-%20%E7%BD%91%E6%98%93%E4%B8%A5%E9%80%89_files/ff39d017624d0d2f14fcbb58b62969ef.jpg" alt="">
                                            <i class="w-icon-normal icon-normal-detail-zoomout"></i>
                                            <div class="cover"><span class="txt">查看完整报告<i class="w-icon-normal icon-normal-detail-aright"></i></span></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="other">
                                    <div class="tt">常见问题</div>
                                    <div class="con">
                                        <ul>
                                            <li class="issue">
                                                <div class="question">购买运费如何收取？</div>
                                                <div class="answer">单笔订单金额（不含运费）满88元免邮费；不满88元，每单收取10元运费。</div>
                                            </li>
                                            <li class="issue">
                                                <div class="question">使用什么快递发货？</div>
                                                <div class="answer">严选使用顺丰快递发货（个别商品使用其他快递），配送范围覆盖全国大部分地区（港澳台地区除外）。</div>
                                            </li>
                                            <li class="issue">
                                                <div class="question">如何申请退货？</div>
                                                <div class="answer">1.自收到商品之日起30日内，顾客可申请无忧退货，退款将原路返还，不同的银行处理时间不同，预计1-5个工作日到账；<br>2.退货流程：<br>确认收货-申请退货-客服审核通过-客户商品寄回-仓库签收入库-退款完成<br>3.因网易严选产生的退货，如质量问题，退货邮费由网易严选承担，退款完成后会以现金券的形式报销；因客户个人原因产生的退货，购买和寄回运费由客户个人承担。</div>
                                            </li>
                                            <li class="issue">
                                                <div class="question">如何开具发票？</div>
                                                <div class="answer">1.如需开具发票，可在购买商品1个月内（以支付时间计算）联系客服，为该商品索取发票；<br>2.食品类商品可开具食品、饮料发票，非食品类商品可开具家居用品、日用品发票。</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="detail-comment j-nav-con j-nav-comment f-hide" id="nav-comment"><ul class="m-commentList"><li><div class="m-commentNav j-commentNav"><div class="w-radio f-left active s-gold"><input class="radio" name="commentCategory" id="allComment" value="0" checked="checked" type="radio"><label for="allComment" class="ml3">全部（103）</label></div><div class="w-radio f-left ml40 s-gold  "><input class="radio" name="commentCategory" id="picComment" value="1" type="radio"><label for="picComment" class="ml3">有图（4）</label></div></div></li><li class="item f-clearfix"><div class="m-commentUser"><div class="avatarWarp"><img src="2%E8%89%B2%E5%8F%AF%E9%80%89%20%E6%BE%B3%E6%B4%B2%E7%BE%8A%E7%BE%94%E6%AF%9BAB%E9%9D%A2%E7%9B%96%E6%AF%AF%20-%20%E5%86%AC%E6%9A%96%E5%A4%8F%E5%87%89%EF%BC%8C%E5%90%B8%E6%B9%BF%E6%8E%92%E6%B1%97%E3%80%82%20-%20%E7%BD%91%E6%98%93%E4%B8%A5%E9%80%89_files/485ff1be6912be6ae696b6d360d1b101.png" alt="k****3"><div class="mask w-icon-normal icon-normal-mask"></div></div><div class="username-withIcon"><a class="w-icon-member member-comment-vip2" href="http://you.163.com/membership/index" title="智慧生活家"></a><div class="username f-center">k****3</div></div></div><div class="m-comment f-clearfix"><div class="content">东西很不错</div><div class="meta"><div class="skuInfo"><span class="mr20">颜色:牛仔蓝</span></div><div class="right"><div class="createTime">2016-10-11 19:51</div></div></div><div id="1476320711089" class="lightbox"></div></div></li><li class="item f-clearfix"><div class="m-commentUser"><div class="avatarWarp"><img src="2%E8%89%B2%E5%8F%AF%E9%80%89%20%E6%BE%B3%E6%B4%B2%E7%BE%8A%E7%BE%94%E6%AF%9BAB%E9%9D%A2%E7%9B%96%E6%AF%AF%20-%20%E5%86%AC%E6%9A%96%E5%A4%8F%E5%87%89%EF%BC%8C%E5%90%B8%E6%B9%BF%E6%8E%92%E6%B1%97%E3%80%82%20-%20%E7%BD%91%E6%98%93%E4%B8%A5%E9%80%89_files/0efe75539429bf33a45d2b01f01245be.jpg" alt="罗****姐"><div class="mask w-icon-normal icon-normal-mask"></div></div><div class="username-withIcon"><a class="w-icon-member member-comment-vip1" href="http://you.163.com/membership/index" title="小白生活家"></a><div class="username f-center">罗****姐</div></div></div><div class="m-comment f-clearfix"><div class="content">暖和。</div><div class="meta"><div class="skuInfo"><span class="mr20">颜色:生姜黄</span></div><div class="right"><div class="createTime">2016-10-11 07:10</div></div></div><div id="1476320711090" class="lightbox"></div></div></li><li class="item f-clearfix"><div class="m-commentUser"><div class="avatarWarp"><img src="2%E8%89%B2%E5%8F%AF%E9%80%89%20%E6%BE%B3%E6%B4%B2%E7%BE%8A%E7%BE%94%E6%AF%9BAB%E9%9D%A2%E7%9B%96%E6%AF%AF%20-%20%E5%86%AC%E6%9A%96%E5%A4%8F%E5%87%89%EF%BC%8C%E5%90%B8%E6%B9%BF%E6%8E%92%E6%B1%97%E3%80%82%20-%20%E7%BD%91%E6%98%93%E4%B8%A5%E9%80%89_files/475c1697504256ccb36bf59ca30c4d93.jpg" alt="a****1"><div class="mask w-icon-normal icon-normal-mask"></div></div><div class="username-withIcon"><a class="w-icon-member member-comment-vip2" href="http://you.163.com/membership/index" title="智慧生活家"></a><div class="username f-center">a****1</div></div></div><div class="m-comment f-clearfix"><div class="content">很好</div><div class="meta"><div class="skuInfo"><span class="mr20">颜色:牛仔蓝</span></div><div class="right"><div class="createTime">2016-10-10 19:52</div></div></div><div id="1476320711091" class="lightbox"></div></div></li><li class="item f-clearfix"><div class="m-commentUser"><div class="avatarWarp"><img src="2%E8%89%B2%E5%8F%AF%E9%80%89%20%E6%BE%B3%E6%B4%B2%E7%BE%8A%E7%BE%94%E6%AF%9BAB%E9%9D%A2%E7%9B%96%E6%AF%AF%20-%20%E5%86%AC%E6%9A%96%E5%A4%8F%E5%87%89%EF%BC%8C%E5%90%B8%E6%B9%BF%E6%8E%92%E6%B1%97%E3%80%82%20-%20%E7%BD%91%E6%98%93%E4%B8%A5%E9%80%89_files/d1176e3961b0db6e389a227dbf9786ce.jpg" alt="Y****"><div class="mask w-icon-normal icon-normal-mask"></div></div><div class="username-withIcon"><a class="w-icon-member member-comment-vip3" href="http://you.163.com/membership/index" title="品质生活家"></a><div class="username f-center">Y****</div></div></div><div class="m-comment f-clearfix"><div class="content">可以</div><div class="meta"><div class="skuInfo"><span class="mr20">颜色:牛仔蓝</span></div><div class="right"><div class="createTime">2016-10-10 19:47</div></div></div><div id="1476320711092" class="lightbox"></div></div></li><li class="item f-clearfix"><div class="m-commentUser"><div class="avatarWarp"><img src="2%E8%89%B2%E5%8F%AF%E9%80%89%20%E6%BE%B3%E6%B4%B2%E7%BE%8A%E7%BE%94%E6%AF%9BAB%E9%9D%A2%E7%9B%96%E6%AF%AF%20-%20%E5%86%AC%E6%9A%96%E5%A4%8F%E5%87%89%EF%BC%8C%E5%90%B8%E6%B9%BF%E6%8E%92%E6%B1%97%E3%80%82%20-%20%E7%BD%91%E6%98%93%E4%B8%A5%E9%80%89_files/485ff1be6912be6ae696b6d360d1b101.png" alt="w****9"><div class="mask w-icon-normal icon-normal-mask"></div></div><div class="username-withIcon"><a class="w-icon-member member-comment-vip2" href="http://you.163.com/membership/index" title="智慧生活家"></a><div class="username f-center">w****9</div></div></div><div class="m-comment f-clearfix"><div class="content">很有味道</div><div class="meta"><div class="skuInfo"><span class="mr20">颜色:生姜黄</span></div><div class="right"><div class="createTime">2016-10-10 11:12</div></div></div><div id="1476320711093" class="lightbox"></div></div></li><li class="item f-clearfix"><div class="m-commentUser"><div class="avatarWarp"><img src="2%E8%89%B2%E5%8F%AF%E9%80%89%20%E6%BE%B3%E6%B4%B2%E7%BE%8A%E7%BE%94%E6%AF%9BAB%E9%9D%A2%E7%9B%96%E6%AF%AF%20-%20%E5%86%AC%E6%9A%96%E5%A4%8F%E5%87%89%EF%BC%8C%E5%90%B8%E6%B9%BF%E6%8E%92%E6%B1%97%E3%80%82%20-%20%E7%BD%91%E6%98%93%E4%B8%A5%E9%80%89_files/5c9f26e3768c7b07443ea870c7e32811.jpg" alt="l****6"><div class="mask w-icon-normal icon-normal-mask"></div></div><div class="username-withIcon"><a class="w-icon-member member-comment-vip2" href="http://you.163.com/membership/index" title="智慧生活家"></a><div class="username f-center">l****6</div></div></div><div class="m-comment f-clearfix"><div class="content">秋冬晒太阳时用，暖。</div><div class="meta"><div class="skuInfo"><span class="mr20">颜色:生姜黄</span></div><div class="right"><div class="createTime">2016-10-09 11:03</div></div></div><div id="1476320711094" class="lightbox"></div></div></li><li class="item f-clearfix"><div class="m-commentUser"><div class="avatarWarp"><img src="2%E8%89%B2%E5%8F%AF%E9%80%89%20%E6%BE%B3%E6%B4%B2%E7%BE%8A%E7%BE%94%E6%AF%9BAB%E9%9D%A2%E7%9B%96%E6%AF%AF%20-%20%E5%86%AC%E6%9A%96%E5%A4%8F%E5%87%89%EF%BC%8C%E5%90%B8%E6%B9%BF%E6%8E%92%E6%B1%97%E3%80%82%20-%20%E7%BD%91%E6%98%93%E4%B8%A5%E9%80%89_files/4d62de842f132f02668094c5a2ece179.jpg" alt="c****9"><div class="mask w-icon-normal icon-normal-mask"></div></div><div class="username-withIcon"><a class="w-icon-member member-comment-vip2" href="http://you.163.com/membership/index" title="智慧生活家"></a><div class="username f-center">c****9</div></div></div><div class="m-comment f-clearfix"><div class="content">很大气！</div><div class="meta"><div class="skuInfo"><span class="mr20">颜色:牛仔蓝</span></div><div class="right"><div class="createTime">2016-10-09 10:23</div></div></div><div id="1476320711095" class="lightbox"></div></div></li><li class="item f-clearfix"><div class="m-commentUser"><div class="avatarWarp"><img src="2%E8%89%B2%E5%8F%AF%E9%80%89%20%E6%BE%B3%E6%B4%B2%E7%BE%8A%E7%BE%94%E6%AF%9BAB%E9%9D%A2%E7%9B%96%E6%AF%AF%20-%20%E5%86%AC%E6%9A%96%E5%A4%8F%E5%87%89%EF%BC%8C%E5%90%B8%E6%B9%BF%E6%8E%92%E6%B1%97%E3%80%82%20-%20%E7%BD%91%E6%98%93%E4%B8%A5%E9%80%89_files/d692d32fbdbd20fe8cc0ec00f526768d.jpg" alt="静****"><div class="mask w-icon-normal icon-normal-mask"></div></div><div class="username-withIcon"><a class="w-icon-member member-comment-vip2" href="http://you.163.com/membership/index" title="智慧生活家"></a><div class="username f-center">静****</div></div></div><div class="m-comment f-clearfix"><div class="content">这个真好，很大一张，厚厚软软的。颜色也好美</div><div class="meta"><div class="skuInfo"><span class="mr20">颜色:牛仔蓝</span></div><div class="right"><div class="createTime">2016-10-08 12:35</div></div></div><div id="1476320711096" class="lightbox"></div></div></li><li class="item f-clearfix"><div class="m-commentUser"><div class="avatarWarp"><img src="2%E8%89%B2%E5%8F%AF%E9%80%89%20%E6%BE%B3%E6%B4%B2%E7%BE%8A%E7%BE%94%E6%AF%9BAB%E9%9D%A2%E7%9B%96%E6%AF%AF%20-%20%E5%86%AC%E6%9A%96%E5%A4%8F%E5%87%89%EF%BC%8C%E5%90%B8%E6%B9%BF%E6%8E%92%E6%B1%97%E3%80%82%20-%20%E7%BD%91%E6%98%93%E4%B8%A5%E9%80%89_files/4ae8c547d3b9cbecc7d7cac35d176be8.jpg" alt="小****"><div class="mask w-icon-normal icon-normal-mask"></div></div><div class="username-withIcon"><a class="w-icon-member member-comment-vip2" href="http://you.163.com/membership/index" title="智慧生活家"></a><div class="username f-center">小****</div></div></div><div class="m-comment f-clearfix"><div class="content">直接盖会有点扎</div><div class="meta"><div class="skuInfo"><span class="mr20">颜色:牛仔蓝</span></div><div class="right"><div class="createTime">2016-10-08 11:10</div></div></div><div id="1476320711097" class="lightbox"></div></div></li><li class="item f-clearfix"><div class="m-commentUser"><div class="avatarWarp"><img src="2%E8%89%B2%E5%8F%AF%E9%80%89%20%E6%BE%B3%E6%B4%B2%E7%BE%8A%E7%BE%94%E6%AF%9BAB%E9%9D%A2%E7%9B%96%E6%AF%AF%20-%20%E5%86%AC%E6%9A%96%E5%A4%8F%E5%87%89%EF%BC%8C%E5%90%B8%E6%B9%BF%E6%8E%92%E6%B1%97%E3%80%82%20-%20%E7%BD%91%E6%98%93%E4%B8%A5%E9%80%89_files/485ff1be6912be6ae696b6d360d1b101.png" alt="m****6"><div class="mask w-icon-normal icon-normal-mask"></div></div><div class="username-withIcon"><a class="w-icon-member member-comment-vip1" href="http://you.163.com/membership/index" title="小白生活家"></a><div class="username f-center">m****6</div></div></div><div class="m-comment f-clearfix"><div class="content">好看还是蛮好看的，就是薄了点，不是特别保暖</div><div class="meta"><div class="skuInfo"><span class="mr20">颜色:牛仔蓝</span></div><div class="right"><div class="createTime">2016-10-08 11:00</div></div></div><div id="1476320711098" class="lightbox"></div></div></li></ul></div>
                            <div class="comment-list j-nav-con j-nav-comment f-hide">
                                <div id="pager" class="m-pager m-hrz "><div class="m-wrap">                 <a href="javascript:;" hidefocus="true" class="w-linkicon pagel f-disabled" data-page="0">                  <span class="w-icon icon-pagel icon-pagel_disabled"></span>                 <span class="txt">上一页</span>                    </a>                </div><div class="m-wrap">                  <a href="javascript:;" hidefocus="true" class="w-linkicon w-linkicon-selected" data-page="1">                   <span class="txt">1</span>                  </a>                </div><div class="m-wrap">                  <a href="javascript:;" hidefocus="true" class="w-linkicon" data-page="2">                       <span class="txt ">2</span>                 </a>                </div><div class="m-wrap">                  <a href="javascript:;" hidefocus="true" class="w-linkicon" data-page="3">                       <span class="txt ">3</span>                 </a>                </div><div class="m-wrap">                  <a href="javascript:;" hidefocus="true" class="w-linkicon" data-page="4">                       <span class="txt ">4</span>                 </a>                </div><div class="m-wrap">                  <a href="javascript:;" hidefocus="true" class="w-linkicon" data-page="6">                       <span class="txt ">...</span>                   </a>                </div><div class="m-wrap">                  <a href="javascript:;" hidefocus="true" class="w-linkicon" data-page="11">                      <span class="txt ">11</span>                    </a>                </div><div class="m-wrap">                  <a href="javascript:;" hidefocus="true" class="w-linkicon pager " data-page="2">                    <span class="txt">下一页</span>                    <span class="w-icon icon-pager  "></span>                   </a>                </div></div>
                            </div>
                        </div>
                        <div class="right">
                            <div class="m-topicsRecommended">
                                <header class="hd">
                                    专题推荐
                                </header>
                                <div class="bd">
                                    <ul class="j-subject"><a href="http://you.163.com/topic/20161009?_stat_area=right_1&amp;_stat_referer=item" class="item" target="_blank"></a><li class="item"><a href="http://you.163.com/topic/20161009?_stat_area=right_1&amp;_stat_referer=item" class="item" target="_blank"></a><a href="http://you.163.com/topic/20161009?_stat_area=right_1&amp;_stat_referer=item" class="m-topicRecommended" target="_blank"><img src="2%E8%89%B2%E5%8F%AF%E9%80%89%20%E6%BE%B3%E6%B4%B2%E7%BE%8A%E7%BE%94%E6%AF%9BAB%E9%9D%A2%E7%9B%96%E6%AF%AF%20-%20%E5%86%AC%E6%9A%96%E5%A4%8F%E5%87%89%EF%BC%8C%E5%90%B8%E6%B9%BF%E6%8E%92%E6%B1%97%E3%80%82%20-%20%E7%BD%91%E6%98%93%E4%B8%A5%E9%80%89_files/70190411d42960da8d6a5bb60cceebed.jpg" alt="" width="260" height="140"><div class="text">换季买包正当时</div></a></li><a href="http://you.163.com/topic/20160930?_stat_area=right_2&amp;_stat_referer=item" class="item" target="_blank"></a><li class="item"><a href="http://you.163.com/topic/20160930?_stat_area=right_2&amp;_stat_referer=item" class="item" target="_blank"></a><a href="http://you.163.com/topic/20160930?_stat_area=right_2&amp;_stat_referer=item" class="m-topicRecommended" target="_blank"><img src="2%E8%89%B2%E5%8F%AF%E9%80%89%20%E6%BE%B3%E6%B4%B2%E7%BE%8A%E7%BE%94%E6%AF%9BAB%E9%9D%A2%E7%9B%96%E6%AF%AF%20-%20%E5%86%AC%E6%9A%96%E5%A4%8F%E5%87%89%EF%BC%8C%E5%90%B8%E6%B9%BF%E6%8E%92%E6%B1%97%E3%80%82%20-%20%E7%BD%91%E6%98%93%E4%B8%A5%E9%80%89_files/8e57ba30c79d9e5030e9b44384a74b35.jpg" alt="" width="260" height="140"><div class="text">十月篇 | 本月必买的好物</div></a></li><a href="http://you.163.com/topic/20160928?_stat_area=right_3&amp;_stat_referer=item" class="item" target="_blank"></a><li class="item"><a href="http://you.163.com/topic/20160928?_stat_area=right_3&amp;_stat_referer=item" class="item" target="_blank"></a><a href="http://you.163.com/topic/20160928?_stat_area=right_3&amp;_stat_referer=item" class="m-topicRecommended" target="_blank"><img src="2%E8%89%B2%E5%8F%AF%E9%80%89%20%E6%BE%B3%E6%B4%B2%E7%BE%8A%E7%BE%94%E6%AF%9BAB%E9%9D%A2%E7%9B%96%E6%AF%AF%20-%20%E5%86%AC%E6%9A%96%E5%A4%8F%E5%87%89%EF%BC%8C%E5%90%B8%E6%B9%BF%E6%8E%92%E6%B1%97%E3%80%82%20-%20%E7%BD%91%E6%98%93%E4%B8%A5%E9%80%89_files/3843fcdf3d4ff4e72642e3f55fe32c35.jpg" alt="" width="260" height="140"><div class="text">职场人的一天——女士篇</div></a></li><a href="http://you.163.com/topic/20160926?_stat_area=right_4&amp;_stat_referer=item" class="item" target="_blank"></a><li class="item"><a href="http://you.163.com/topic/20160926?_stat_area=right_4&amp;_stat_referer=item" class="item" target="_blank"></a><a href="http://you.163.com/topic/20160926?_stat_area=right_4&amp;_stat_referer=item" class="m-topicRecommended" target="_blank"><img src="2%E8%89%B2%E5%8F%AF%E9%80%89%20%E6%BE%B3%E6%B4%B2%E7%BE%8A%E7%BE%94%E6%AF%9BAB%E9%9D%A2%E7%9B%96%E6%AF%AF%20-%20%E5%86%AC%E6%9A%96%E5%A4%8F%E5%87%89%EF%BC%8C%E5%90%B8%E6%B9%BF%E6%8E%92%E6%B1%97%E3%80%82%20-%20%E7%BD%91%E6%98%93%E4%B8%A5%E9%80%89_files/bce1598ab796aefc23233e3ed994dbfa.jpg" alt="" width="260" height="140"><div class="text">职场人的一天——男士篇</div></a></li><a href="http://you.163.com/topic/20160921?_stat_area=right_5&amp;_stat_referer=item" class="item" target="_blank"></a><li class="item"><a href="http://you.163.com/topic/20160921?_stat_area=right_5&amp;_stat_referer=item" class="item" target="_blank"></a><a href="http://you.163.com/topic/20160921?_stat_area=right_5&amp;_stat_referer=item" class="m-topicRecommended" target="_blank"><img src="2%E8%89%B2%E5%8F%AF%E9%80%89%20%E6%BE%B3%E6%B4%B2%E7%BE%8A%E7%BE%94%E6%AF%9BAB%E9%9D%A2%E7%9B%96%E6%AF%AF%20-%20%E5%86%AC%E6%9A%96%E5%A4%8F%E5%87%89%EF%BC%8C%E5%90%B8%E6%B9%BF%E6%8E%92%E6%B1%97%E3%80%82%20-%20%E7%BD%91%E6%98%93%E4%B8%A5%E9%80%89_files/73e5e5d31dc8e216f9469e5be4a46aa5.jpg" alt="" width="260" height="140"><div class="text">短途出游的减法方案</div></a></li></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form action="/order/confirm?sfrom=1021004" method="post" target="_self" id="j-directBuySubmitForm">
                <input name="orderCart" type="hidden">
            </form>
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
       @endsection