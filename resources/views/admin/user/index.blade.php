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
              <!-- 进行搜索 -->
              <center>
                  <form class="form-inline" action="{{ URL('/admin/user') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token()}}">
                        姓名:<input type="text" name="name" size="6" class="form-control">
                        <input type="submit" value="确认搜索" class="btn btn-primary">
                    </form>
            </center>
                <br/>
                <table class="table tile" style="text-align:center;">
                    <thead >
                        <!-- 引入文件 -->

                        <tr>
                            <th>序列号</th>
                            <th>用户名</th>
                            <th>权限</th>
                            <th>状态</th>
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
                                <button id="user" class="btn btn-sm btn-alt m-r-5">
                                    @if($user->status ==0)
                                        开启
                                    @else
                                        关闭
                                    @endif
                                </button>
                            </td>
                            <td>
                                <a class="btn btn-sm btn-alt m-r-5" href="javascript:doDel({{  $user->id }}) ">删除</a>
                                <a class="btn btn-sm btn-alt m-r-5" href="/admin/user/{{ $user->id }}/edit">修改</a>
                            </td>
                        </tr>
                 @endforeach       
                    </tbody>
    <script>
    
     $('#user').onclick(function(){
                    $.ajax({
                        type:'POST',
                        url:'/status',
                        data:"_token={{ csrf_token() }}&user="+user,
                    })
            })
    </script>
                </table>
                <center >
                    {!!  $list->appends($where)->render() !!}
                </center>
            </div>
    </section>
@endsection