@extends("admin.base.base")
@section('content')
	<!-- Content -->
        <section id="content" class="container">
            <!-- Multi Column -->
                <div class="block-area" id="multi-column">
                    <h3 class="block-title">添加用户的信息</h3>
                    <form class="row form-columned" role="form" method='post' action='/admin/user'>
                     <input type='hidden' name='_token' value="{{ csrf_token() }}">
                        <div class="col-md-4">
                            <input name='name' type="text" class="form-control input-sm m-b-10" placeholder="你好,请在此输入用户名">
                        </div>

                        <div class="clearfix"></div>
                        <br/>
                        <div class="col-md-4">
                            <input name="pass" class="form-control input-sm m-b-10" placeholder="你好,请在此输入密码">
                        </div><br/><br/><br/>
                        <div class="col-md-4 m-b-10">
                            <select class="select" name='auth'>
                                <option value='1'>会员用户</option>
                                <option value='0'>普通用户</option>
                            </select>
                        </div>
                        <div class="col-md-10">
                            <button type="submit" class="btn btn-sm">确认添加</button>
                            <button type="reset" class="btn btn-sm">取消添加</button>

                        </div>
                    </form>
                </div>
        </section>
@endsection