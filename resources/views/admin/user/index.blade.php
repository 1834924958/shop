@extends('admin.base.base')

@section('content')
<!-- Content -->
   <section id="content" class="container">
        <!-- Deafult Table -->
            <div class="block-area" id="defaultStyle">
                <!-- 路由中的删除 -->
                <form action="" method="post" name="myform" style="display:none;">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="delete">
                </form>

                <form action="" method="post" name="statu" style="display:none;">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="delete">
                </form>


                <h3 class="block-title"><a href="/admin/user">用户信息管理</a></h3>
                <h3 class="block-title"><a href="/tianjia">添加用户信息</a></h3>
              <!-- 进行搜索 -->
              <center>
                  <form class="form-inline" action="{{ URL('/admin/user') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token()}}">
                        姓名:<input type="text" name="name" size="6" class="form-control">
                        用户别名:<input type="text" name="uname" size="6" class="form-control">
                        邮箱地址:<input type="text" name="email" size="6" class="form-control">
                        手机号:<input type="text" name="tel" size="6" class="form-control">
                        <input type="submit" value="确认搜索" class="btn btn-primary">
                    </form>
            </center>
                <br/>
                <table class="table tile" style="text-align:center;">
                    <thead >
                        <tr>
                            <th>序列号</th>
                            <th>用户名</th>
                            <th>权限</th>
                            <th>状态</th>
                            <th>用户头像</th>
                            <th>用户别名</th>
                            <th>邮箱</th>
                            <th>电话</th>
                            <th>地址</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>
                                @if($user->auth ==0)
                                    普通用户
                                @else
                                    会员用户
                                @endif
                            </td>
                            <td>
                       <!--<button id="user" class="btn btn-sm btn-alt m-r-5">
                                    @if($user->status ==0)
                                        开启
                                    @else
                                        关闭
                                    @endif
                        </button> -->
                            @if($user->status == "0")
                              <a class="btn btn-sm btn-alt m-r-5" href="/status/{{ $user->id }}">开启</a>
                            @else
                                <a class="btn btn-sm btn-alt m-r-5" href="/status/{{ $user->id }}">关闭</a>
                            @endif
                            </td>
                            <td>

                               <img src=".././images/user/{{ $user->photo }}" style="width:100px;height:100px; background-image:url('.././images/user/2.jpg')" class="profile-pic animated">
                            </td>
                            <td>{{ $user->uname }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->tel }}</td>
                            <td>{{ $user->address }}</td>

                            <td>    

                                 <a class="btn btn-sm btn-alt m-r-5" href="/admin/car/{{ $user->id }}">购物车</a>
                                <a class="btn btn-sm btn-alt m-r-5" href="javascript:doDel({{  $user->id }}) ">删除</a>
                                <a class="btn btn-sm btn-alt m-r-5" href="/admin/user/{{ $user->id }}/edit">修改</a>
                            </td>
                        </tr>
                 @endforeach       
                    </tbody>

                </table>
                <!-- 进行分页 -->
                <div class="media text-center">
                    {!!  $list->appends($where)->render() !!}
                </div>

            </div>
    </section>
@endsection