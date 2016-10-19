@extends("home.head")

@section("content")







<!-- 前台图片的轮播效果 -->

<div class="gundong" style='width:1080px;height:400px;border:1px  ;overflow:hidden;'>

  

        <div id='did' style='width:99999px;'>
            @foreach($image as $img)
                 <img src=".././images/tutu/{{ $img->photo }}" height='400px' width='1080px'>
            @endforeach
        </div>

</div>





<!-- <div class="slick-dots-wrap" style="display: block;" role="toolbar"><ul class="slick-dots"><li class="" aria-hidden="true" role="presentation" aria-selected="true" aria-controls="navigation00" id="slick-slide00"><span class="before"></span><a class="wrap" target="_blank" href="http://you.163.com/act/pub/qb7yL2zuPm.html?_stat_area=banner_1&amp;_stat_referer=index"><img src="./img/5a12151f7c6d51f5945b12311d32809c.jpg"></a></li><li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation01" id="slick-slide01" class=""><span class="before"></span><a class="wrap" target="_blank" href="http://you.163.com/item/manufacturer?tagId=1001008&amp;_stat_area=banner_2&amp;_stat_referer=index"><img src="./img/95521fd2fac9d01914725abdeaaf8912.jpg"></a></li><li aria-hidden="false" role="presentation" aria-selected="false" aria-controls="navigation02" id="slick-slide02" class="slick-active"><span class="before"></span><a class="wrap" target="_blank" href="http://you.163.com/topic/20160826?_stat_area=banner_3&amp;_stat_referer=index"><img src="./img/fe10e40d50b76d44f53d43a0c0a80cd4.jpg"></a></li><li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation03" id="slick-slide03" class=""><span class="before"></span><a class="wrap" target="_blank" href="http://you.163.com/item/list?categoryId=1010000&amp;subCategoryId=1010002&amp;_stat_area=banner_4&amp;_stat_referer=index"><img src="./img/a40a10db57cefe748ec98ed7eb3d950e.jpg"></a></li><li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation04" id="slick-slide04" class=""><span class="before"></span><a class="wrap" target="_blank" href="http://you.163.com/act/pub/vXlTE045GX.html?_stat_area=banner_5&amp;_stat_referer=index"><img src="./img/9243d45f18af993f497c6259a87295a8.jpg"></a></li></ul></div></div>
</div> -->

<div class="focus-ft">
    <div class="g-row">
        <ul class="m-ensure">
            <li class="item"> <div class="w-ensureItem">
                    <i class="w-icon-normal icon-normal-ensureItem1 icon"></i>
                    <span class="txt">品牌制造直连</span>
                </div>
            </li>
            <li class="item"> <div class="w-ensureItem">
                    <i class="w-icon-normal icon-normal-ensureItem2 icon"></i>
                    <span class="txt">工艺国际认证</span>
                </div>
            </li>
            <li class="item"> <div class="w-ensureItem">
                    <i class="w-icon-normal icon-normal-ensureItem3 icon"></i>
                    <span class="txt">材料天然安全</span>
                </div>
            </li>
            <li class="item last"> <div class="w-ensureItem">
                    <i class="w-icon-normal icon-normal-ensureItem4 icon"></i>
                    <span class="txt">产业源头把控</span>
                </div>
            </li>
        </ul>
    </div>
</div>
</div>
<div class="m-manufacturer">
    <div class="g-row">
        <div class="m-cate">
            <header class="hd">
                <div class="left">
                    <h3 class="name">人气推荐</h3>
                    <small class="frontName">超高评论</small>
                </div>

            </header>
            
            <div class="bd">
                <div class="manufacturerList">
                    @foreach($renqi  as  $rq)
                    <a class="manufacturer first" href="/home/detail/?id={{ $rq->id }}" target="_blank" style="display:block;margin-left:6px;">
                        <div class="mask"></div>
                        <div class="name">{{ $rq->name }}</div>
                        <div class="price">{{ $rq->price }}</div>
                        <img class="img" src=".././images/child/{{ $rq->photo }}" alt="">
                    </a>

                    @endforeach

                </div>

            </div>
            
        </div>

    </div>


</div>
<div class="m-newItem">
    <div class="g-row">
        <div class="m-cate">
            <header class="hd">
                <div class="left">
                    <h3 class="name">新品首发</h3>
                    <small class="frontName">坚持初心，为你寻觅世间好物</small>
                </div>
                <div class="right">

                </div>
            </header>
            <div class="bd" >
                <ul class="itemList">
                    <div id="js-newItemSlick" class="js-newItemslick m-newItemSlick">

                        @foreach($xinpin as $xinpins)
                        <li class="item" style="display:block;margin-right:10px;">
                            <div class="m-product ">
                                <div class="hd" >
                                    <a href="/home/detail/?id={{ $xinpins->id }}" title="{{ $xinpins->name }}" target="_blank">
                                        <img class="img j-lazyload "  alt="{{ $xinpins->name }}" src=".././images/child/{{ $xinpins->photo }}" style="display: inline;margin-right:20px;height:300px;">
                                    </a>
                                </div>
                                <div class="bd">
                                    <h4 class="name">
                                        <a class="name" href="/home/detail/?id={{ $xinpins->id }}" title="{{ $xinpins->name }}" target="_blank">
                                            {{ $xinpins->name }}
                                        </a>
                                    </h4>
                                    <p class="price">
                                        <span>¥{{ $xinpins->price }}</span>
                                        <span class="sign"><a href="/home/detail/?id={{ $xinpins->id }}">{{ $xinpins->briefing }}</a></span>
                                    </p>
                                </div>
                            </div>
                        </li>
                        @endforeach


                    </div>
                </ul>
            </div>
        </div>
    </div>
</div>


@foreach ($qwer as $plate)
<div class="m-cates">
    <div class="g-row">
        <div class="m-cate">
            <header class="hd">
                <div class="left">
                    <h3 class="name">{{ $plate->name }}</h3>
                    <small class="frontName">{{ $plate->pname }}</small>
                </div>
                <div class="right">
                    <nav class="subCateList">
                        <?php
    

                            $qwe = \DB::table('chilePlate')->where('pid',$plate->id)->get();
                            
                        ?>
                        @foreach($qwe as $plat)
                        <a class="item" href="/home/list/?id={{ $plate->id }}#{{ $plat->pname }}" target="_blank">
                            <img src=".././images/child/{{ $plat->photo }}" alt="{{ $plat->name }}">
                            {{ $plat->name }}
                        </a>
                        <b class="spilt">/</b>
                        @endforeach
                    </nav>
                </div>
            </header>
            <div class="bd">
                <ul class="itemList">
                    <?php
                            $shop = \DB::table("shop")->where('uid',$plate->id)->orderby('id','desc')->limit('8')->get();

                    ?>
                    @foreach($shop as $shops)
                    <li class="item">
                        <div class="m-product ">
                            <div class="hd">
                                <a href="/home/detail/?id={{ $shops->id }}" title="{{ $shops->name }}" target="_blank">
                                    <img class="img j-lazyload"  alt="{{ $shops->name }}" src=".././images/child/{{ $shops->photo }}">
                                </a>
                            </div>
                            <div class="bd">
                                <h4 class="name">
                                    <a class="name" href="/home/detail/?id={{ $shops->id }}" title="{{ $shops->name }}" target="_blank">
                                        {{ $shops->name }}
                                    </a>
                                </h4>
                                <p class="price">
                                    <span>¥{{ $shops->price }}</span>
                                </p>
                                <hr>
                                <p class="desc" title="{{ $shops->briefing }}">{{ $shops->briefing }}</p>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <footer class="ft">
                <a class="w-ftMore " href="/home/list/?id={{ $plate->id }}" target="_blank">
                    <span class="text">查看更多</span>
                    <i class="w-icon-normal icon-normal-ftMore icon"></i>
                </a>
            </footer>
        </div>
    </div>
</div>
@endforeach
<div class="m-newComment">
    <div class="g-row">
        <div class="m-cate">
            <header class="hd">
                <div class="left">
                    <h3 class="name">大家都在看</h3>
                    <small class="frontName"></small>
                </div>
                <div class="right">
                    <div class="j-comment-arrow newItemArrow">
 
                    </div>
                </div>
            </header>
            <div class="bd">
                <ul class="itemList">
<div class="m-manufacturer">
    <div class="g-row">

                <div class="manufacturerList">
                    @foreach($renqi  as  $rq)
                    <a class="manufacturer first"  href="/home/detail/?id={{ $rq->id }}" target="_blank" style="display:block;margin-left:6px;height:350px;">
                        <div class="mask"></div>
                        <div class="name" style="margin-top:130px;">{{ $rq->name }}</div>
                        <div class="price">{{ $rq->price }}</div>
                        <img class="img" src=".././images/child/{{ $rq->photo }}" alt="" >

                    </a>

                    @endforeach

                </div>
            </div>
            
        </div>
    </div>
</div>
                </ul>
            </div>
        </div>
    </div>
</div>


    @endsection
