@extends('admin.base.base')

@section('content')
<!-- Content -->
   <section id="content" class="container">
        <!-- Deafult Table -->
            <div class="block-area" id="defaultStyle">
                 <!-- 路由中的删除 -->
                <form action="" method="post" name="lj" style="display:none;">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="delete">
                </form>
                <h3 class="block-title"> <a href="/admin/blogroll">友情链接信息管理</a></h3>
                <h3 class="block-title"> <a href="/youq">友情链接的添加</a> </h3>
                    <!-- 进行搜索 -->
                <center>
                  <form class="form-inline" action="{{ URL('/admin/blogroll') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token()}}">
                        友情链接名:<input type="text" name="name" size="6" class="form-control">
                        <input type="submit" value="确认搜索" class="btn btn-primary">
                    </form>
            </center>
                <br/>
                <table class="table tile" style="text-align:center;">
                    <thead >
                        <!-- 引入文件 -->
                        <tr>
                            <th>友情链接序列号</th>
                            <th>友情链接名</th>
                            <th>地址</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list as $blogroll)
                        <tr>
                            <td>{{ $blogroll->id }}</td>
                            <td>{{ $blogroll->name }}</td>
                            <td>{{ $blogroll->address }}</td>
                            <td>
                                <a class="btn btn-sm btn-alt m-r-5" href="javascript:Del({{  $blogroll->id }}) ">删除</a>
                                <a class="btn btn-sm btn-alt m-r-5" href="/admin/blogroll/{{ $blogroll->id }}/edit">修改</a>  
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