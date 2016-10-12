@extends('home.head')
@section('content')
<div class="j-address-con">
    <div class="w-address-top">
        <div class="title">已保存收货地址(地址最多10条，还能保存9条)</div>
        <!-- <a href="javascript:;" class="w-link add j-add">+新建地址</a> -->
    </div>
    <table class="m-addressList" border="1" width="1000" height="300">
           <colgroup><col class="w1"><col class="w2"><col class="w3"><col class="w4"></colgroup>
        <tbody>
            <tr>
                <th>收货人</th>
                <th>地址</th>
                <th>联系方式</th>
                <th>操作</th>
            </tr>
            <tr>
                @foreach($list as $site)
            <td>{{  $site->id }}</td>
            <td>地址</td>
            <td>{{ $site->tel }}</td>
            <td>
                <a href="javascript:;" class="w-link j-update" data-id="2863551">编辑</a>
                <a href="javascript:;" class="w-link w-link-1 j-delete" data-id="2863551">删除</a>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection






