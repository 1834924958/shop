@extends('admin.base.base')

@section('content')
<!-- Content -->
   <section id="content" class="container">
        <!-- Deafult Table -->
            <div class="block-area" id="defaultStyle">
                <!-- 路由中的删除 -->
                <form action="" method="post" name="ding" style="display:none;">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="delete">
                </form>




                <h3 class="block-title"><a href="/admin/buy">商品订单管理</a></h3>

                
              <!-- 进行搜索 -->
              <center>
                  <form class="form-inline" action="{{ URL('/plate') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token()}}">
                        收货人的姓名:<input type="text" name="name" size="6" class="form-control">
                        <input type="submit" value="确认搜索" class="btn btn-primary">
                    </form>
            </center>
                <br/>
                <table class="table tile" style="text-align:center;">
                    <thead >
                        <!-- 引入文件 -->

                        <tr>
                            <th>板块ID</th>
                            <th>商品ID</th>
                            <th>用户ID</th>
                            <th>商品单价</th>
                            <th>商品数量</th>
                            <th>商品总价</th>
                            <th>联系人</th>
                            <th>收货地址</th>
                            <th>联系电话</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($list as $plate)
                        <tr>
                            <td>{{ $plate->id }}</td>
                            <td>{{ $plate->bid }}</td>
                            <td>{{ $plate->hid }}</td>
                            <td>{{ $plate->price }}</td>
                            <td>{{ $plate->num }}</td>
                            <td>{{ $plate->total }}</td>
                            <td>{{ $plate->name }}</td>
                            <td>{{ $plate->address }}</td>
                            <td>{{ $plate->tel }}</td>
                            <td>
                                <a class="btn btn-sm btn-alt m-r-5" href="javascript:dan({{  $plate->id }}) ">删除</a>
                                <a class="btn btn-sm btn-alt m-r-5" href="/admin/dingdan/{{ $plate->id }}/edit">修改</a>
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
