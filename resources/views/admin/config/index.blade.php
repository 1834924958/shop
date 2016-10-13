@extends('admin.base.base')

@section('content')
<!-- Content -->
   <section id="content" class="container">
        <!-- Deafult Table -->
            <div class="block-area" id="defaultStyle">
                <h3 class="block-title"> <a href="/admin/config">网站配置信息</a></h3>
                <br/>
                <table class="table tile" >
                    <thead>
                        <tr>
                            <th>网页标题</th>
                            <th>网站关键字</th>
                            <th>网站描述</th>
                            <th>网站LOCO</th>
                            <th>网站开关</th>
                            <th>网站版权</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list as $config)
                            <td>{{ $config->title }}</td>
                            <td>{{ $config->keywords }}</td>
                            <td>{{ $config->content }}</td>
                            <td><img src=".././images/config/{{ $config->photo }}" style="width:100px; height:100px;" class="profile-pic animated"></td>
                            <td>{{ ($config->kai==0) ?"关闭维修":"开启维修" }}</td>
                            <td>{{ $config->copyright }}</td>
                            <td>
                                 <a class="btn btn-sm btn-alt m-r-5" href="/admin/config/{{ $config->id }}/edit">修改</a> 
                            </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </section>
@endsection