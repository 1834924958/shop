@extends("admin.base.base")

@section("content")
    <!-- Content -->
        <section id="content" class="container">
            <!-- Multi Column -->
                <div class="block-area" id="multi-column">
                    <h3 class="block-title"> <a href="/admin/config">网站配置信息</a></h3>
                    <form class="row form-columned" role="form"  action="/admin/config/{{ $config->id }}" method="post" enctype="multipart/form-data">
                    <!-- 进行更新(修改),其中修改是以put的方式传递的 -->
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type='hidden' name='_method' value='put'>
                            <input type='hidden' name='id' value="{$config.id}">
                        <div class="col-md-4">
                            <input name="title" type="text" class="form-control input-sm m-b-10" placeholder="你好,请输入网站的标题" value="{{ $config->title }}">
                        </div>
                        <div class="clearfix"></div>
                         <div class="col-md-4">
                            <input name="keywords" type="text" class="form-control input-sm m-b-10" placeholder="你好,请输入网站的关键字" value="{{ $config->keywords }}">
                        </div>
                          <div class="clearfix"></div>
                         <div class="col-md-4">
                            <input name="content" type="text" class="form-control input-sm m-b-10" placeholder="你好,请输入对网站的描述" value="{{ $config->content }}">
                        </div>
                          <div class="clearfix"></div>
                         <div class="col-md-4">
                            <input name="copyright" type="text" class="form-control input-sm m-b-10" placeholder="你好,请输入网站的版权" value="{{ $config->copyright }}">
                        </div>
                       
                             <div class="clearfix"></div>
                         <div class="col-md-4">
                            <input name="kai" type="radio" class="form-control input-sm m-b-10" value="0">关
                            <input name="kai" type="radio" class="form-control input-sm m-b-10" value="1">开
                        </div>
                        <br/><br/>
                        <div class="clearfix"></div>
                         <div class="col-md-4">
                            <div style="position: relative;">
                                    <input type="file" name="photo" class="form-control input-sm m-b-10"style=" width: 100px;height:45px;position: relative;z-index: 9;opacity: 0;">
                                         <label style="position: absolute; background:#7F2E31;display:inline-block;color:white;width: 100px;height: 45px;line-height: 45px;text-align: center;top: 0px;left: 0px;">选择文件</label>
                                </div>
                        </div>
                        <div class="col-md-10">
                            <button type="submit" class="btn btn-sm">确认修改</button>
                            <button type="reset" class="btn btn-sm">取消修改</button>
                        </div>
                    </form>
                </div>
        </section>
@endsection