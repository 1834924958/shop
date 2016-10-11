@extends("admin.base.base")

@section("content")
    <!-- Content -->
        <section id="content" class="container">
            <!-- Multi Column -->
                <div class="block-area" id="multi-column">
                    <h3 class="block-title">修改图片信息</h3>
                    <form class="row form-columned" role="form"  action='/admin/images/{{ $images->id }}' method="post" enctype="multipart/form-data">
                        <!-- 进行更新(修改),其中修改是以put的方式传递的 -->
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                         <input type='hidden' name='_method' value='put'>

                        <input type='hidden' name='id' value="{$images.id}">
                        <div class="col-md-4">
                            <input name="name" type="text" class="form-control input-sm m-b-10" placeholder="图片别名" value="{{ $images->name }}">
                        </div>

                        <div class="clearfix"></div>
                         <div class="col-md-4">
                            <input name='photo' type="file" class="form-control input-sm m-b-10">
                        </div>
                        <div class="col-md-10">
                            <button type="submit" class="btn btn-sm">确认修改</button>
                            <button type="reset" class="btn btn-sm">取消修改</button>
                        </div>
                    </form>
                </div>
        </section>
@endsection