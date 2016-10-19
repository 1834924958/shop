@extends("home.head");
@section("content")<br/><br/><br/><br/><br/><br/><br/>
<script type="text/javascript" async="" src="{{ URL::asset('js/search-6f6239a342.js') }}"></script>
        <div class="g-bd f-bcf5">
            <div class="g-row f-margin-bottom-20 f-bcf">
                <div class="w-loading j-loading" style="display: none;">
                    
                </div>
                <div class="m-searchResult" id="j-searchResult">
                    <div class="nav">
                        <span class="name">全部商品<i class="w-icon icon-pager_disabled gap"></i>
                        </span><!--选中的分类-->
                        
                    </div>

                <div class="resultList"><!-- 搜索结果显示start -->

                @foreach( $list as $sousuo )
                <ul class="searchList" id="j-searchList">          
                    <li class="item">        
                        <div class="m-product product-s j-product">          
                            <div class="hd">            
                                <a href="/home/detail/?id={{ $sousuo->id }}" title="{{ $sousuo->name }}" target="_blank">              
                                    <img class="img j-lazyload"  alt="{{ $sousuo->name }} " src=".././images/child/{{ $sousuo->photo }}" style="display: inline;">                          
                                </a>          
                            </div>          
                            <div class="bd">            
                                <h4 class="name">              
                                    <a class="name" href="/home/detail/?id={{ $sousuo->id }}" title="{{ $sousuo->name }}" target="_blank"> {{ $sousuo->name }}              
                                    </a>            
                                </h4>            
                                <p class="price">              
                                    <span>¥{{ $sousuo->price }}</span>                                        
                                </p>                          
                                <hr>              
                                <p class="desc">{{ $sousuo->briefing }}</p>                      
                            </div>        
                        </div>      
                    </li>         
                @endforeach


                            </ul><!-- 搜素结果显示end --></div><div class="m-pager-con "><div id="j-pager" class="m-pager m-hrz " style="display: none;"></div></div></div>
            </div>
        </div>
@endsection
