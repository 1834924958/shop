@extends('admin.base.base')

@section('content')
<!-- Content -->
   <section id="content" class="container">
        <!-- Deafult Table -->
            <div class="block-area" id="defaultStyle">
                <!-- 路由中的删除 -->
                <form action="" method="post" name="myfor" style="display:none;">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="delete">
                </form>




                <h3 class="block-title"><a href="/platee">主板块管理</a></h3>

                <h3 class="block-title"><a href="/navigation">添加主板块</a></h3>
              <!-- 进行搜索 -->
              <center>
                  <form class="form-inline" action="{{ URL('/plate') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token()}}">
                        主版块名:<input type="text" name="name" size="6" class="form-control">
                        主版块的简介:<input type="text" name="pname" size="6" class="form-control">
                        <input type="submit" value="确认搜索" class="btn btn-primary">
                    </form>
            </center>
                <br/>
                <table class="table tile" style="text-align:center;">
                    <thead >
                        <!-- 引入文件 -->

                        <tr>
                            <th>板块ID</th>
                            <th>主板块名</th>

                            <th>主板块图片</th>
                            <th>主版块简介</th>


                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($list as $plate)
                        <tr>
                            <td>{{ $plate->id }}</td>
                            <td>{{ $plate->name }}</td>
                            <td><img src=".././images/child/{{ $plate->photo }}" style="width:80px;height:80px;"></td>
                            <td>{{ $plate->pname }}</td>
                            <td>
                                <a class="btn btn-sm btn-alt m-r-5" href="javascript:doDe({{  $plate->id }}) ">删除</a>
                                <a class="btn btn-sm btn-alt m-r-5" href="/plate/{{ $plate->id }}/edit">修改</a>
                            </td>
                        </tr>
                 @endforeach       
                    </tbody>
    

                </table>
                <center >
                    {!!  $list->appends($where)->render() !!}
                </center>
            </div>
    </section>
@endsection
