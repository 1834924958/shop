@extends("admin.base.base")
@section('content')
    <!-- Content -->
        <section id="content" class="container">
            <!-- Multi Column -->
                <div class="block-area" id="multi-column">
                     <h3 class="block-title"><a href="/tjz">添加子板块</a></h3>
                <h3 class="block-title"><a href="/childPlate">子板块的信息管理</a></h3>
                    <form class="row form-columned" role="form" method='post' action='/zizi'enctype="multipart/form-data">

                    <form class="row form-columned" role="form" method='post' action='/zizi'>

                     <input type='hidden' name='_token' value="{{ csrf_token() }}">        
                        <div class="col-md-4 m-b-10">

                            <select class="select" name='pid'>
                                @foreach($qwer as $plate)
                                <option value='{{ $plate->id }}'>
                                    
                                        {{ $plate->name }}
                                    

                                </option>
                             @endforeach
                            </select>
                           
                        </div><br/><br/><br/>
                        

                             <?php
                                $qwer = \DB::table('plate')->get();
                             ?>
                             
                        <div class="col-md-4 m-b-10">

                            <select class="select" name='pid'>
                                @foreach($qwer as $plate)
                                <option value='{{ $plate->id }}'>
                                    
                                        {{ $plate->name }}
                                    

                                </option>
                             @endforeach
                            </select>
                           
                        </div>
                        <div class="clearfix"></div>

                        <div class="col-md-4">
                            <input name='name' type="text" class="form-control input-sm m-b-10" placeholder="你好,请在此输入要添加的子版块名">
                        </div><br/><br/><br/>

                        <div class="clearfix"></div>

                        <div class="col-md-4">
                            <input name='pname' type="text" class="form-control input-sm m-b-10" placeholder="你好,请在此输入要添加的子版块简述">
                        </div>  <br/><br/><br/><br/>
                        <div class="clearfix"></div>
                            <div class="col-md-4" >
                                <div style="position: relative;">
                                    <input type="file" name="photo" class="form-control input-sm m-b-10"style=" width: 100px;height:45px;position: relative;z-index: 9;opacity: 0;">
                                         <label style="position: absolute; background:#7F2E31;display:inline-block;color:white;width: 100px;height: 45px;line-height: 45px;text-align: center;top: -10px;left: 0px;">选择文件</label>
                                 </div>

                        </div>
                        <br/><br/>
                      
                        <div class="col-md-10">
                            <button type="submit" class="btn btn-sm">确认添加</button>
                            <button type="reset" class="btn btn-sm">取消添加</button>

                        </div>
                    </form>
                </div>
        </section>
@endsection
