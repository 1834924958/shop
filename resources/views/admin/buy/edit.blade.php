@extends("admin.base.base")
@section("content")
    <!-- Content -->
        <section id="content" class="container">
            <!-- Multi Column -->
                <div class="block-area" id="multi-column">
                    <h3 class="block-title">修改订单信息</h3>
                    <h3 class="block-title"><a href="/admin/buy">商品订单管理</a></h3>
                    <form class="row form-columned" role="form" method='post' action='/admin/dingdan/{{ $plate->id }}' enctype="multipart/form-data">
                        <!-- 进行更新(修改),其中修改是以put的方式传递的 -->
                        <input type='hidden' name='_token' value="<?php echo csrf_token();?>">
                         <input type='hidden' name='_method' value='put'>


                        <input type='hidden' name='id' value="{$plate.id}">
                        <div class="col-md-4">
                            <input name='name' type="text" placeholder="你好,请在此输入收货人姓名" class="form-control input-sm m-b-10"  value="{{ $plate->name }}">
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-4">
                            <input name='address' type="text"  placeholder="你好,请在此输入收货人地址" class="form-control input-sm m-b-10"  value="{{ $plate->address }}">
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-4">
                            <input name='tel' type="text" placeholder="你好,请在此输入收货人联系方式" class="form-control input-sm m-b-10"  value="{{ $plate->tel }}">
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-10">
                            <button type="submit" class="btn btn-sm">确认修改</button>
                            <button type="reset" class="btn btn-sm">取消修改</button>
                        </div>
                    </form>
                </div>
        </section>
@endsection