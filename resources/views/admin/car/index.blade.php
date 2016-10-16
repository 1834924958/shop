@extends('admin.base.base')

@section('content')
<!-- Content -->
   <section id="content" class="container">
        <!-- Deafult Table -->
            <div class="block-area" id="defaultStyle">
                <!-- 路由中的删除 -->
                <form action="" method="post" name="qwer" style="display:none;">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="delete">
                </form>
                <h3 class="block-title"><a href="/admin/car">购物车</a></h3>
              <!-- 进行搜索 -->
              <center>
                  <form class="form-inline" action="{{ URL('/car') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token()}}">
                        购物车中商品名:<input type="text" name="pid" size="6" class="form-control">
                        <input type="submit" value="确认搜索" class="btn btn-primary">
                    </form>
            </center>
                <br/>
                <table class="table tile" style="text-align:center;">
                    <thead >
                        <!-- 引入文件 -->
                        <tr>
                            <td>购物车商品ID</td>
                            <td>用户名ID</td>
                            <td>商品ID</td>
                            <td>操作</td>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($list as $plate)
                        <tr>
                            <td>{{ $plate->id }}</td>
                            <td>{{ $plate->cid }}</td>
                            <td>{{ $plate->pid }}</td>
                            <td>
                                <a class="btn btn-sm btn-alt m-r-5" href="javascript:dodf({{  $plate->id }}) ">删除</a>  
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