@extends("admin.base.base")
@section("content")
    <!-- Content -->
        <section id="content" class="container">
            <!-- Multi Column -->
                <div class="block-area" id="multi-column">
                    <h3 class="block-title">修改用户信息</h3>
                <h3 class="block-title"><a href="/admin/user">用户信息管理</a></h3>
                    <form class="row form-columned" role="form" method='post' action='/admin/user/{{ $user->id }}' enctype="multipart/form-data">
                        <!-- 进行更新(修改),其中修改是以put的方式传递的 -->
                        <input type='hidden' name='_token' value="<?php echo csrf_token();?>">
                         <input type='hidden' name='_method' value='put'>
                        <input type='hidden' name='id' value="{$user.id}">
                        <div class="col-md-4">
                            <input name='name' type="text" class="form-control input-sm m-b-10" placeholder="用户" value="{{ $user->name }}">
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-4">
                            <input  name="pass" type="password" class="form-control input-sm m-b-10" placeholder="你好,请输入要修改密码" value="{{ $user->pass }}">
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-4">
                            <input  name="password" type="password" class="form-control input-sm m-b-10" placeholder="你好,请再次输入密码">
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-4">
                            <input  name="uname" type="text" class="form-control input-sm m-b-10" placeholder="你好,请输入要修改的用户名" value="{{ $user->uname }}">
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-4">
                            <input  name="email" type="email" class="form-control input-sm m-b-10" placeholder="你好,请输入要修改的邮箱地址" value="{{ $user->email }}">
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-4">
                            <input  name="tel" type="text" class="form-control input-sm m-b-10" placeholder="你好,请输入要修改的手机号" value="{{ $user->tel }}">
                        </div>
                        <div class="clearfix"></div>
                         <div class="col-md-4 m-b-10">
                            <select class="select" name='auth' value="{{ $user->auth }}">
                                <option value='1'>管理员</option>
                                <option value='0'>普通用户</option>
                            </select>
                        </div>
                        <div class="clearfix"></div>
                         <br/>
                            <div class="col-md-4" >
                                <div style="position: relative;">
                                    <input type="file" name="photo" class="form-control input-sm m-b-10"style=" width: 100px;height:45px;position: relative;z-index: 9;opacity: 0;">
                                         <label style="position: absolute; background:#7F2E31;display:inline-block;color:white;width: 100px;height: 45px;line-height: 45px;text-align: center;top: -10px;left: 0px;">选择文件</label>
                                 </div>
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