@extends('admin.base.base')

@section('content')
<!-- Content -->
   <section id="content" class="container">
        <!-- Deafult Table -->
            <div class="block-area" id="defaultStyle">
                <!-- 路由中的删除 -->


                <h3 class="block-title"><a href="/navigation">添加主板块</a></h3>
              <!-- 进行搜索 -->
              <center>
                  <form class="form-inline" action="{{ URL('/zizi') }}">
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
                            <th>板块ID</th>
                            <th>祝板块名</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($list as $plate)
                        <tr>
                            <td>{{ $plate->id }}</td>
                            <td>{{ $plate->name }}</td>

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