@extends('admin.base.base')

@section('content')
<!-- Content -->
   <section id="content" class="container">
        <!-- Deafult Table -->
            <div class="block-area" id="defaultStyle">
                 <!-- 路由中的删除 -->
                <form action="" method="post" name="mf" style="display:none;">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="delete">
                </form>
                <h3 class="block-title"> <a href="/admin/images">轮播信息管理</a></h3>
                <h3 class="block-title"> <a href="/lb">添加</a> </h3>
                <!-- 进行搜索 -->
                <center>
                  <form class="form-inline" action="{{ URL('/admin/images') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token()}}">
                        图片的别名:<input type="text" name="name" size="6" class="form-control">
                        <input type="submit" value="确认搜索" class="btn btn-primary">
                    </form>
                 </center>
                <br/>
                <table class="table tile" style="text-align:center;">
                    <thead >
                        <!-- 引入文件 -->
                        <tr>
                            <th>图片序列号</th>
                            <th>图片别名</th>
                            <th>图片</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list as $images)
                        <tr>
                            <td>{{ $images->id }}</td>
                            <td>{{ $images->name }}</td>
                            <td><img src=".././images/tutu/{{ $images->photo }}" class="profile-pic animated" ></td>
                            <td>
                                <a class="btn btn-sm btn-alt m-r-5" href="javascript:SC({{  $images->id }}) ">删除</a>
                                <a class="btn btn-sm btn-alt m-r-5" href="/admin/images/{{ $images->id }}/edit">修改</a>   
                            </td>
                        </tr>
                 @endforeach       
                    </tbody>
                </table>
                <!-- 洗洗分页的操作 -->
                <center >
                    {!!  $list->appends($where)->render() !!}
                </center>
            </div>
    </section>
@endsection