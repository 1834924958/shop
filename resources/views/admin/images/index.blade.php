@extends('admin.base.base')

@section('content')
<!-- Content -->
   <section id="content" class="container">
        <!-- Deafult Table -->
            <div class="block-area" id="defaultStyle">
                <h3 class="block-title"><a href="/admin/images">轮播信息管理</a></h3>
                <br/>
                <table class="table tile" style="text-align:center;">
                    <thead >
                        <!-- 引入文件 -->
                        <tr>
                            <th>图片序列号</th>
                            <th>图片名</th>
                            <th>图片</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list as $images)
                        <tr>
                            <td>{{ $images->id }}</td>
                            <td>{{ $images->name }}</td>
                            <td>{{ $images->photo }}</td>
                            <td>
                                <a class="btn btn-sm btn-alt m-r-5" href="javascript:doDel({{  $images->id }}) ">删除</a>
                                <a class="btn btn-sm btn-alt m-r-5" href="/admin/images/{{ $images->id }}/edit">修改</a>
                                <a class="btn btn-sm btn-alt m-r-5" href="/lb">添加</a>

                            </td>
                        </tr>
                 @endforeach       
                    </tbody>
                </table>
            </div>
    </section>
@endsection