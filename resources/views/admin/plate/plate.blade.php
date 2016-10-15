@extends("admin.base.base")
@section('content')
	<!-- Content -->
        <section id="content" class="container">
            <!-- Multi Column -->
                <div class="block-area" id="multi-column">
                <h3 class="block-title"><a href="/navigation">添加主板块</a></h3>
                <h3 class="block-title"><a href="/platee">主板块管理</a></h3>
                    <form class="row form-columned" role="form" method='post' action='/plate'>
                     <input type='hidden' name='_token' value="{{ csrf_token() }}">
                        <div class="col-md-4">
                            <input name='name' type="text" class="form-control input-sm m-b-10" placeholder="你好,请在此输入要添加主版块名">
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