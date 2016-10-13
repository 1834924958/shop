@extends("admin.base.base")
@section("content")
    <!-- Content -->
        <section id="content" class="container">
            <!-- Multi Column -->
                <div class="block-area" id="multi-column">
                    <h3 class="block-title">修改友情链接的信息</h3>
                        <h3 class="block-title"> <a href="/admin/blogroll">友情链接信息管理</a></h3>
                    <form class="row form-columned" role="form" method="post" action="/admin/blogroll/{{ $blogroll->id }}">
                        <!-- 进行更新(修改),其中修改是以put的方式传递的 -->
                        <input type='hidden' name='_token' value="<?php echo csrf_token();?>">
                         <input type='hidden' name='_method' value='put'>

                        <input type='hidden' name='id' value="{$blogroll.id}">
                        <div class="col-md-4">
                            <input name='name' type="text" class="form-control input-sm m-b-10" placeholder="你好,请在这里输入友情链接的信息" value="{{ $blogroll->name }}">
                        </div> 
                        <div class="clearfix"></div>
                        <div class="col-md-4">
                            <input name="address" type="text" class="form-control input-sm m-b-10" placeholder="你好,请在这里输入友情链接的地址" value="{{ $blogroll->address }}">
                        </div>
                        <div class="col-md-10">
                            <button type="submit" class="btn btn-sm">确认修改</button>
                            <button type="reset" class="btn btn-sm">取消修改</button>
                        </div>
                    </form>
                </div>
        </section>
@endsection