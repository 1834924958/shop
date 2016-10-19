@extends("admin.base.base")
@section('content')
	<!-- Content -->
        <section id="content" class="container">
            <!-- Multi Column -->
                <div class="block-area" id="multi-column">
                <h3 class="block-title"><a href="/tjshops">添加商品信息</a></h3>
                <h3 class="block-title"><a href="/shop">商品信息信息管理</a></h3>
                    <form class="row form-columned" role="form" method='post' action='/shops' enctype="multipart/form-data">
                     <input type='hidden' name='_token' value="{{ csrf_token() }}">
                        
                        <div class="col-md-4 m-b-10">

                            <select class="select" name='uid'>
                                @foreach($qwe as $plat)
                                <option value='{{ $plat->id }}'>
                                    
                                        {{ $plat->name }}
                                    

                                </option>
                             @endforeach
                            </select>
                           
                        </div><br/><br/><br/>




                           
                        <div class="col-md-4 m-b-10">

                            <select class="select" name='sid'>
                                @foreach($qwer as $plate)
                                <option value='{{ $plate->id }}'>
                                    
                                        {{ $plate->name }}
                                    

                                </option>
                             @endforeach
                            </select>
                           
                        </div><br/><br/><br/>
                        <div class="col-md-4">
                            <input name='name' type="text" class="form-control input-sm m-b-10" placeholder="你好,请在此输入商品名">
                        </div><br/><br/><br/>
                        <div class="col-md-4">
                            <input name='price' type="text" class="form-control input-sm m-b-10" placeholder="你好,请在此输入商品价格">
                        </div><br/><br/><br/>
                        <div class="col-md-4">
                            <input name='briefing' type="text" class="form-control input-sm m-b-10" placeholder="你好,请在此输入商品描述">
                        </div><br/><br/><br/>
                           <div class="col-md-4">
                            <input name='merchant' type="text" class="form-control input-sm m-b-10" placeholder="你好,请在此输入商品的制造商">
                        </div><br/><br/><br/>
                           <div class="col-md-4">
                            <input name='sales' type="text" class="form-control input-sm m-b-10" placeholder="你好,请在此输入商品的促销价格">
                        </div><br/><br/><br/>
                           <div class="col-md-4">
                            <input name='service' type="text" class="form-control input-sm m-b-10" placeholder="你好,请在此输入商品的服务地址(电话)">
                        </div><br/><br/><br/>
                                    <div class="col-md-4" >
                                <div style="position: relative;">
                                    <input type="file" name="photo" class="form-control input-sm m-b-10"style=" width: 100px;height:45px;position: relative;z-index: 9;opacity: 0;">
                                         <label style="position: absolute; background:#7F2E31;display:inline-block;color:white;width: 100px;height: 45px;line-height: 45px;text-align: center;top: -10px;left: 0px;">选择文件</label>

                                 </div>

                        </div>

                        <div class="clearfix"></div>

                        <div class="col-md-10">
                            <button type="submit" class="btn btn-sm">确认添加</button>
                            <button type="reset" class="btn btn-sm">取消添加</button>

                        </div>
                    </form>
                </div>
        </section>
@endsection