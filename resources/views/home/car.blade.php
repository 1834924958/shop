@extends("home.head");
@section("content")
<script type="text/javascript" async="" src="{{ URL::asset('js/cart-95d7869da9.js') }}"></script>
<br/><br/><br/><br/>
<div class="g-bd" id="j-bd">
</div>
<div class="g-bd">
    <div class="g-row">
        <div class="m-crumbs f-margin-bottom-30"><br/><br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="">购物车</span>
        </div>
    </div>
    <div class="g-row">
        <div id="j-cart-con">
            <div class="m-cart" data-reactid=".0">
                <div style="display: none;" data-reactid=".0.0">
                    <div class="cart-empty" data-reactid=".0.0.0">
                        <div class="warp warp-1" data-reactid=".0.0.0.0">
                            <img src="%E8%B4%AD%E7%89%A9%E8%BD%A6%20-%20%E7%BD%91%E6%98%93%E4%B8%A5%E9%80%89_files/dcde6cb32679fde9bccd0dee35a4b56e.gif" data-reactid=".0.0.0.0.0">
                        </div>
                    </div>
                </div>
                <form    method="post" action="/home/carbuy">
                <input type='hidden' name='_token' value="{{ csrf_token() }}">
                <div style="display: block;" data-reactid=".0.1">
                    <div class="tt" data-reactid=".0.1.0">
                        <div class="w w1 left" data-reactid=".0.1.0.0">
                            <div class="w-chkbox" >
<!--                                 <button onclick='doSelect(1)'>全选</button>
                                <button onclick='doSelect(2)'>全不选</button>&nbsp;&nbsp;&nbsp;&nbsp;
                                <button onclick='doSelect(3)'>反选</button>&nbsp;&nbsp;&nbsp;&nbsp; -->
                            </div>
                        </div>
                        <div class="w w2 " data-reactid=".0.1.0.1">&nbsp;&nbsp;</div>
                        <div class="w w2 " data-reactid=".0.1.0.1">名称</div>
                        
                        <div class="w w3" data-reactid=".0.1.0.2">单价</div>
                        <div class="w w4" data-reactid=".0.1.0.3"></div>
                        
                        <div class="w w6" data-reactid=".0.1.0.5">操作</div>
                    </div>

                    <div data-reactid=".0.1.1">
                        <?php
                        $t = \DB::select(" select shop.* from car,shop where shop.id=car.pid and " . session('homeuser')->id . "= car.cid");
                        ?>
                        @foreach($t as $carss)
                                    <?php
                                        $del = \DB::table('car')->where('pid',$carss->id)->first();

                                    ?>
                        <div class="cart-group" data-reactid=".0.1.1.$0">
                            <div class="promotion-wrap f-dn" data-reactid=".0.1.1.$0.0">
                                <div class="promotion" data-reactid=".0.1.1.$0.0.0">
                                    <span class="u-promotion-tag" data-reactid=".0.1.1.$0.0.0.0">无促销</span>
                                    <span class="desc" data-reactid=".0.1.1.$0.0.0.1"></span>
                                    <a href="http://you.163.com/cart/itemPool?promotionId=0" class="link" target="_blank" data-reactid=".0.1.1.$0.0.0.3">继续凑单&gt;&gt;</a>
                                </div>
                            </div>

                            <div class="cart-item f-cb cart-item-last" data-reactid=".0.1.1.$0.2:$c1035059">
                                <div class="item w7" >

                                    <div class="w-chkbox" >
                                        <input type="checkbox" name="checkbox[{{ $del->id }}]" value="{{ $del->id }}">
                                       <!--  <input type="checkbox" name='like[]' value='{{ $carss->id }}'> -->
                                        
                                    </div>

                                </div>
                                <div class="item w8" data-reactid=".0.1.1.$0.2:$c1035059.1">
                                    <div class="pic" data-reactid=".0.1.1.$0.2:$c1035059.1.0">
                                        <a href="/home/detail/?id={{ $carss->id }}" target="_blank" data-reactid=".0.1.1.$0.2:$c1035059.1.0.0">
                                            <img src=".././images/child/{{ $carss->photo }}" alt="" data-reactid=".0.1.1.$0.2:$c1035059.1.0.0.0"></a>
                                    </div>
                                    <div class="name f-word-break f-text-overflow" data-reactid=".0.1.1.$0.2:$c1035059.1.1">
                                        <a href="/home/detail/?id={{ $carss->id }}" target="_blank" data-reactid=".0.1.1.$0.2:$c1035059.1.1.0">{{ $carss->name }}</a>
                                        <div class="spec f-text-overflow" data-reactid=".0.1.1.$0.2:$c1035059.1.1.1">
<!--                                             <span data-reactid=".0.1.1.$0.2:$c1035059.1.1.1.$0">男款XL码 </span>
                                            <span data-reactid=".0.1.1.$0.2:$c1035059.1.1.1.$1">灰色 </span> -->
                                        </div><p data-reactid=".0.1.1.$0.2:$c1035059.1.1.2"></p>
                                    </div>
                                </div>
                                <div class="item item-1 w3" data-reactid=".0.1.1.$0.2:$c1035059.2">
                                    <p class="price oprice" data-reactid=".0.1.1.$0.2:$c1035059.2.0"></p>
                                    <p class="price aprice" data-reactid=".0.1.1.$0.2:$c1035059.2.1">
                                        <span data-reactid=".0.1.1.$0.2:$c1035059.2.1.0">¥</span>
                                        <span data-reactid=".0.1.1.$0.2:$c1035059.2.1.1">{{ $carss->price }}</span>
                                    </p>
                                </div>



                                <div class="item item-2 w4">
                                    <div class="u-selnum u-selnum-cart">                        
                                            <!-- <input type="button" class="minus jian" value="-"> -->
                                            <input type="hidden" size="1" class="input-text qty text" title="Qty" value="1" min="0" step="1" id="jisuan" name="name">
                                            <!-- <input type="button" class="plus jia" value="+" id="jia"> -->
                                    </div>
                                </div>





                                <!--                                 <div class="item item-3 w5" data-reactid=".0.1.1.$0.2:$c1035059.4">
                                                                    <p class="price sprice" data-reactid=".0.1.1.$0.2:$c1035059.4.0">
                                                                        <span data-reactid=".0.1.1.$0.2:$c1035059.4.0.0">¥</span>
                                                                        <span id="xiaoji"></span>
                                                                    </p>
                                                                </div> -->
                                <div class="item item-4 item-left w6 f-pr" data-reactid=".0.1.1.$0.2:$c1035059.5">
                                    <div class="activity" data-reactid=".0.1.1.$0.2:$c1035059.5.0"></div>
                                    <?php
                                        $del = \DB::table('car')->where('pid',$carss->id)->first();

                                    ?>
                                    <a class="del" href="/home/carr/delete/?id={{ $del->id }}">
                                        <i style="font-size:20px;">×</i>
                                    </a>
                                </div>
                                <div class="hr" data-reactid=".0.1.1.$0.2:$c1035059.6">
                                </div>
                                <div class="hr hr-1" data-reactid=".0.1.1.$0.2:$c1035059.7">
                                </div>
                            </div>
                        </div>
                      
                        @endforeach
                    </div>
                </div>
                <script>
                    $(".jian").click(function () {
                        var jian = $(this).next();
                        var a = jian.val();
                        var b = parseInt(a) - 1;
                        if (b < 1) {
                            jian.val(1);
                        } else {
                            jian.val(b);
                        }
                    });


                    // 加
                    $(".jia").click(function () {
                        var jia = $(this).prev();
                        var a = jia.val();
                        var b = parseInt(a) + 1;
                        jia.val(b);
                    });



                </script>               

                <div class="cart-total" data-reactid=".0.3">
                    <div class="w-chkbox" data-reactid=".0.3.0">

                        <button type="button" onclick='doSelect(1)'>全选</button>&nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="button" onclick='doSelect(2)'>全不选</button>&nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="button" onclick='doSelect(3)'>反选</button>
<!--                         <span class="mgl30" data-reactid=".0.3.0.2">
                        <span data-reactid=".0.3.0.2.0">已选择</span>
                        <span class="num" data-reactid=".0.3.0.2.1">   </span>
                        <span data-reactid=".0.3.0.2.2">件商品</span>
                    </span> -->
                    </div>
                    <script type="text/javascript">
                        //1.获取所有的多选框
                        var list = document.getElementsByTagName('input');
                        // console.log(list);
                        function doSelect(a)
                        {
                            //遍历所有的Input
                            for (var i = 0; i < list.length; i++) {
                                //判断是什么操作
                                switch (a) {
                                    case 1:
                                        //把默认选中属性赋为true;
                                        list[i].checked = true;
                                        break;
                                    case 2:
                                        //把默认选中属性赋为false;
                                        list[i].checked = false;
                                        break;
                                    case 3:
                                        //把默认选中属性赋为当前值得相反值;
                                        list[i].checked = !list[i].checked;
                                        break;
                                }
                            }
                        }

                    </script>
                    <div class="info f-fr" data-reactid=".0.3.1">



                        <div class="line line-1" data-reactid=".0.3.1.4">
                            <button type="submit" class="w-button w-button-xl w-button-primary" data-reactid=".0.3.1.4.0">下单</button>
                        </div>
                    </div>
                </div>
            </form>
                <form action="/order/confirm" method="post" target="_self" data-reactid=".0.4">
                    <input name="orderCart" data-reactid=".0.4.0" type="hidden">
                </form>
            </div>
        </div>
    </div>
</div>       

@endsection
