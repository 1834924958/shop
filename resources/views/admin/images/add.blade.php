@extends("admin.base.base")

@section('content')
	<!-- Content -->
        <section id="content" class="container">
            <!-- Multi Column -->
                <div class="block-area" id="multi-column">
                    <h3 class="block-title">轮播上传的图片</h3>
                    <form class="row form-columned" role="form" method='post' action='/admin/images' enctype="multipart/from-data">
                     <input type='hidden' name='_token' value="{{ csrf_token() }}">
                        <div class="col-md-4">
                            <input name='name' type="text" class="form-control input-sm m-b-10" placeholder="你好,请在此输入图片名">
                        </div>

                        <div class="clearfix"></div>
                        <br/>
                        <div class="col-md-4" >
                            <input  type="file" name="photo" class="form-control input-sm m-b-10">
                        </div>
                        <div class="col-md-10">
                            <button type="submit" class="btn btn-sm">确认上传</button>
                        </div>
                    </form>
                </div>
        </section>
@endsection