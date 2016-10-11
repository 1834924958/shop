@extends("admin.base.base")
@section('content')
	<!-- Content -->
        <section id="content" class="container">
            <!-- Multi Column -->
                <div class="block-area" id="multi-column">
                    <h3 class="block-title">添加子板块</h3>
                    <form class="row form-columned" role="form" method='post' action='/zizi'>
                     <input type='hidden' name='_token' value="{{ csrf_token() }}">
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
                        <div class="col-md-4">
                            <input name='name' type="text" class="form-control input-sm m-b-10" placeholder="你好,请在此输入用户名">
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-md-10">
                            <button type="submit" class="btn btn-sm">确认添加</button>
                            <button type="reset" class="btn btn-sm">取消添加</button>

                        </div>
                    </form>
                </div>
        </section>
@endsection