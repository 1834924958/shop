@extends("admin.base.base")
@section("content")
    <!-- Content -->
        <section id="content" class="container">
            <!-- Multi Column -->
                <div class="block-area" id="multi-column">
                    <h3 class="block-title">修改主板块</h3>

                    <form class="row form-columned" role="form" method='post' action='/plate/{{ $plate->id }}' enctype="multipart/form-data">

                <h3 class="block-title"><a href="/platee">主板块管理</a></h3>
                    <form class="row form-columned" role="form" method='post' action='/plate/{{ $plate->id }}'>

                        <!-- 进行更新(修改),其中修改是以put的方式传递的 -->
                        <input type='hidden' name='_token' value="<?php echo csrf_token();?>">
                         <input type='hidden' name='_method' value='put'>


                        <input type='hidden' name='id' value="{$plate.id}">
                        <div class="col-md-4">

                            <input name='name' type="text" class="form-control input-sm m-b-10"  value="{{ $plate->name }}">
                        </div><br/><br/><br/><br/>

                            <input name='name' type="text" class="form-control input-sm m-b-10" placeholder="你好,请在此对主板块的修改" value="{{ $plate->name }}">
                        </div>


                        <div class="clearfix"></div>
                        <div class="col-md-4" >
                            <input  type="file" name="photo" class="form-control input-sm m-b-10">
                        </div><br/><br/><br/><br/>
                        <div class="col-md-4">
                            <input name='pname' type="text" class="form-control input-sm m-b-10"  value="{{ $plate->pname }}">
                        </div><br/><br/><br/><br/>

                        <div class="col-md-10">
                            <button type="submit" class="btn btn-sm">确认修改</button>
                            <button type="reset" class="btn btn-sm">取消修改</button>
                        </div>
                    </form>
                </div>
        </section>
@endsection
