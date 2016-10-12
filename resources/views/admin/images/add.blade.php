@extends("admin.base.base")

@section('content')
	<!-- Content -->
        <section id="content" class="container">
            <!-- Multi Column -->
                <div class="block-area" id="multi-column">
                    <h3 class="block-title">轮播上传的图片</h3>

                    <form class="row form-columned" role="form" action='/admin/images'  method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="col-md-4">
                            <input name='name' type="text" class="form-control input-sm m-b-10" placeholder="你好,请在此输入图片名">
                        </div>

                        <div class="clearfix"></div>
                        <br/>
                        <div class="col-md-4" >
                                <div style="position: relative;">
                                    <input type="file" name="photo" class="form-control input-sm m-b-10"style=" width: 100px;height:45px;position: relative;z-index: 9;opacity: 0;">
                                         <label style="position: absolute; background:#7F2E31;display:inline-block;color:white;width: 100px;height: 45px;line-height: 45px;text-align: center;top: -10px;left: 0px;">选择文件</label>

                                    <!-- <input  type="file" name="photo" class="form-control input-sm m-b-10"> -->
                                 </div>

                        </div>
                        <div class="col-md-10">
                            <button type="submit" class="btn btn-sm">确认上传</button>
                        </div>
                    </form>
                </div>
        </section>
@endsection