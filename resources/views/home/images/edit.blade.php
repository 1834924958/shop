@extends("home.head")
@section("content")
<div style="top: 0px; display: block;" class="m-pop f-scroll-y overlay-container-ani f-tlbr j-overlay-container m-pop-avatar f-ani-bouncein">            
            <div style="left: 381.5px; top: 240px;" class="j-w-dialog-body">                
                <div class="j-w-dialog-head">                    
                     <div class="w-close j-close-pop"></div>                
                </div>                
                <div class="popwin-bd j-w-dialog-content">                                        
                    <div class="w-title">设置头像</div> 
                      <form role="form"  action='/homeee/{{ $user->id }}' method="post" enctype="multipart/form-data"> 
                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                         <input type='hidden' name='_method' value='put'>
                        <input type='hidden' name='id' value="{$tux.id}"> 
                    <div class="m-avatarUploadWarp j-avatarUploadWarp">                         
                        <div class="w-button w-button-avatarUpload">                                
                           <input class="fileInput j-fileInput" name="photo" accept="image/*" type="file">                              
                          <div class="uploadText">点击上传图片</div>
                          
                        </div>   

                        <div class="w-uploadTips">支持JPEG/BMP/PNG</div>
                    </div> 
                       <div class="j-imageBoxWarp"></div>
                       <button type="submit" class="w-button w-button-primary w-button-l pos-l j-ok bottom50">确认修改</button>
                        <button type="reset" class="w-button w-button-l pos-r j-cancel bottom50">取消修改</button>               
                    <div class="tips j-tips"></div>
                  </form>
               </div>
        </div>  
</div>
@endsection