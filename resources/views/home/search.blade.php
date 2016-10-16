@extends("home.head");
@section("content")
<script type="text/javascript" async="" src="{{ URL::asset('js/search-6f6239a342.js') }}"></script>
        <div class="g-bd f-bcf5">
            <div class="g-row f-margin-bottom-20 f-bcf">
                <div class="w-loading j-loading" style="display: none;">
                    <img src="%E7%BD%91%E6%98%93%E4%B8%A5%E9%80%89%20-%20%E4%BB%A5%E4%B8%A5%E8%B0%A8%E7%9A%84%E6%80%81%E5%BA%A6%EF%BC%8C%E4%B8%BA%E4%B8%AD%E5%9B%BD%E6%B6%88%E8%B4%B9%E8%80%85%E7%94%84%E9%80%89%E5%A4%A9%E4%B8%8B%E4%BC%98%E5%93%81_files/dcde6cb32679fde9bccd0dee35a4b56e.gif" alt="">
                </div>
                <div class="m-searchResult" id="j-searchResult"><div class="nav"><span class="name">全部商品<i class="w-icon icon-pager_disabled gap"></i></span><!--选中的分类--><span class="kWord">"空调被"</span></div><div class="content"><div class="category"><span class="name">分类：</span><!-- 分类列表 --><a class="categoryItem j-categoryItem" data-id="1005000" data-name="居家" href="#page=1&amp;sortType=0&amp;descSorted=true&amp;categoryId=1005000&amp;matchType=1">居家</a><a class="categoryItem j-categoryItem" data-id="1011000" data-name="婴童" href="#page=1&amp;sortType=0&amp;descSorted=true&amp;categoryId=1011000&amp;matchType=1">婴童</a><a class="sortRule sortRule-price active j-sort" href="#page=1&amp;sortType=1&amp;descSorted=false&amp;categoryId=0&amp;matchType=1" data-sorttype="1">价格<div class="icon"><i id="up" class="w-icon-normal icon-normal-up-search"></i><i id="down" class="w-icon-normal icon-normal-down-gold"></i></div></a><a class="sortRule sortRule-default  j-sort" href="#page=1&amp;sortType=0&amp;descSorted=true&amp;categoryId=0&amp;matchType=1" data-sorttype="0">综合</a></div></div>
                <div class="resultList"><!-- 搜索结果显示start -->

                @foreach( $list as $sousuo )
                <ul class="searchList" id="j-searchList">          <li class="item">        <div class="m-product product-s j-product">          <div class="hd">            <a href="http://you.163.com/item/detail?id=1046047&amp;_stat_area=1&amp;_stat_referer=search&amp;_stat_query=%E7%A9%BA%E8%B0%83%E8%A2%AB&amp;_stat_count=3" title="婴童蚕丝被" target="_blank">              <img class="img j-lazyload" data-lazy="http://yanxuan.nosdn.127.net/5476f9237b9fcdb62b3c8038e5815111.png?imageView&amp;quality=95&amp;thumbnail=245x245" data-original="http://yanxuan.nosdn.127.net/5476f9237b9fcdb62b3c8038e5815111.png?imageView&amp;quality=95&amp;thumbnail=245x245" alt="婴童蚕丝被" src="%E7%BD%91%E6%98%93%E4%B8%A5%E9%80%89%20-%20%E4%BB%A5%E4%B8%A5%E8%B0%A8%E7%9A%84%E6%80%81%E5%BA%A6%EF%BC%8C%E4%B8%BA%E4%B8%AD%E5%9B%BD%E6%B6%88%E8%B4%B9%E8%80%85%E7%94%84%E9%80%89%E5%A4%A9%E4%B8%8B%E4%BC%98%E5%93%81_files/5476f9237b9fcdb62b3c8038e5815111.png" style="display: inline;">                          </a>          </div>          <div class="bd">            <h4 class="name">              <a class="name" href="http://you.163.com/item/detail?id=1046047&amp;_stat_area=1&amp;_stat_referer=search&amp;_stat_query=%E7%A9%BA%E8%B0%83%E8%A2%AB&amp;_stat_count=3" title="婴童蚕丝被" target="_blank">              {{ $sousuo->name }}              </a>            </h4>            <p class="price">              <span>¥499.00</span>                                        </p>                          <hr>              <p class="desc">无荧光的柔软睡眠</p>                      </div>        </div>      </li>         
                @endforeach


                            </ul><!-- 搜素结果显示end --></div><div class="m-pager-con "><div id="j-pager" class="m-pager m-hrz " style="display: none;"></div></div></div>
            </div>
        </div>
@endsection
