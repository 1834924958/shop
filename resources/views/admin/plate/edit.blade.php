@extends("admin.base.base")
@section("content")
    <!-- Content -->
        <section id="content" class="container">
            <!-- Multi Column -->
                <div class="block-area" id="multi-column">
                    <h3 class="block-title">修改主板块</h3>
                 <h3 class="block-title"><a href="/platee">主板块管理</a></h3>

                    <form class="row form-columned" role="form" method='post' action='/plate/{{ $plate->id }}' enctype="multipart/form-data">
                        <!-- 进行更新(修改),其中修改是以put的方式传递的 -->
                        <input type='hidden' name='_token' value="<?php echo csrf_token();?>">
                         <input type='hidden' name='_method' value='put'>
                        <input type='hidden' name='id' value="{$plate.id}">
                        <div class="col-md-4">
                            <input name='name' type="text" class="form-control input-sm m-b-10"  value="{{ $plate->name }}" placeholder="你好,请在此输入要修改主板块名称">
                        </div><br/><br/><br/><br/>
                        <div class="clearfix"></div>
                        <div class="col-md-4" >
                                <div style="position: relative;">
                                    <input type="file" name="photo" class="form-control input-sm m-b-10"style=" width: 100px;height:45px;position: relative;z-index: 9;opacity: 0;">
                                         <label style="position: absolute; background:#7F2E31;display:inline-block;color:white;width: 100px;height: 45px;line-height: 45px;text-align: center;top: -10px;left: 0px;">选择文件</label>
                                 </div>
                        </div>
                        <br/><br/><br/><br/>
                        <div class="col-md-4">
                            <input name='pname' type="text" class="form-control input-sm m-b-10"  value="{{ $plate->pname }}" placeholder="你好,请在此输入的对主模板的描述">
                        </div><br/><br/><br/><br/>
                        <div class="col-md-10">
                            <button type="submit" class="btn btn-sm">确认修改</button>
                            <button type="reset" class="btn btn-sm">取消修改</button>
                        </div>
                    </form>
                </div>
        </section>
@endsection
