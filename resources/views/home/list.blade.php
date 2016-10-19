

@extends("home.head")
@section("content")

        <!-- 重构部分 开始 -->

        <script type="text/javascript" async="" src="{{ URL::asset('js/list-fbea58f1d3.js') }}"></script>
        <div class="g-bd f-bcf5">
            <div class="g-row f-bcf">

                @foreach($head as $heade)
                <div class="m-crumbs ">
                    <a href="/qian">首页</a>
                    <span class="w-icon w-icon-arrow"></span>
                    <span class="z-cur" >{{ $heade->name }}</span>
                </div>
                <!-- 轮播图 -->
                <div class="m-focus">
                    <div class="focus-bd">
                        <div class="w-cateBanner" style="background-image:url(' .././images/child/{{ $heade->photo }}');width:1090px;height:360px;">
                            <h2>{{ $heade->pname }}</h2>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="g-constraint">
                    <div class="content">
                        <div class="category">
                            <span class="name">分类：</span><a href="#sortType=0&amp;descSorted=true&amp;subCategoryId=1005001" class="categoryItem j-categoryItem active" id="all">全部</a>

                            @foreach( $shopq as $hea)
                            <a href="#{{ $hea->pname }}" data-id="1005007" data-index="0" class="categoryItem j-categoryItem">{{ $hea->name }}</a>
                            @endforeach
                            <!-- 筛选条件 -->
                            <div id="filterParams">
                                <a href="#sortType=2&amp;descSorted=true&amp;subCategoryId=1005001" class="sortRule sortRule-onTime j-sort">上架时间<i id="Todown" class="w-icon-normal icon-normal-down-unchecked"></i></a>
                                <a href="#sortType=1&amp;descSorted=false&amp;subCategoryId=1005001" class="sortRule sortRule-price j-sort" data-sorttype="1">价格<div class="icon">
                                        <i id="up" class="w-icon-normal icon-normal-up-search">
                                        </i>
                                        <i id="down" class="w-icon-normal icon-normal-down-search">
                                        </i>
                                    </div>
                                </a>
                                <a href="javascript:;" class="sortRule sortRule-default j-sort active" data-sorttype="0">默认</a>
                            </div>
                        </div>
                    </div>

                    
                    @foreach($shopq as $shopss)
                        <a name="{{ $shopss->pname }}">
                        </a>
                        <div id="j-filterResult">
                            <div class="m-items" id="1005007">
                                <header class="hd">
                                    
                                    <p class="title f-clearfix">

                                        <img class="icon w-icon-44 f-left" src=".././images/child/{{ $shopss->photo }}" style="width:40px;height:40px">
                                        <span class="name f-left">{{ $shopss->pname }}</span>

                                    </p>
                                </header>
                                <div class="bd">
                                    <ul class="list">
                                        <?php
                                        $shops = \DB::table('shop')->where('sid',$shopss->id)->get();
                                        ?>
                                        @foreach($shops as $shopse)
                                       
                                        <li class="item">
                                            <div class="m-product product-s j-product">
                                                <div class="hd">
                                                    <a href="/home/detail/?id={{ $shopse->id }}" title="{{ $shopse->name }}" target="_blank">
                                                        <img class="img j-lazyload"  alt="{{ $shopse->name }}" src=".././images/child/{{ $shopse->photo }}" style="display: inline;">
                                                        <p class="newTag">新品</p>
                                                    </a>
                                                </div>
                                                <div class="bd">
                                                    <h4 class="name">
                                                        <a class="name" href="/home/detail/?id={{ $shopse->id }}" title="{{ $shopse->name }}" target="_blank">
                                                            {{ $shopse->name }}
                                                        </a>
                                                    </h4>
                                                    <p class="price">
                                                        <span>{{ $shopse->price }}</span>
                                                    </p>
                                                    <hr>
                                                    <p class="desc">{{ $shopse->briefing }}</p>
                                                </div>
                                            </div>
                                        </li>
                                         @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    
                    @endforeach

                </div>
            </div>
        </div>
@endsection
