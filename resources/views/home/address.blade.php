@extends("home.head")
@section("content")
<div style="top: 0px; display: block;" class="m-pop f-scroll-y overlay-container-ani f-tlbr j-overlay-container m-pop-addr f-ani-bouncein"> 
	<div style="left: 223px; top: 360.5px;" class="j-w-dialog-body">                
		<div class="j-w-dialog-head">                    
			<div class="w-close j-close-pop"></div>                
		</div>                
		<div class="popwin-bd j-w-dialog-content">                
			<form class="m-form-addr j-form" novalidate="">
				<div class="w-tit-addr">新建地址</div>                           
				 	<input name="id" value="0" type="hidden">                            
				 	<div class="w-row-addr" style="margin-top:40px">                                
				 		<div class="w-col-2 ">                                    
				 			<span class="w-label">收货人：</span>                                    
				 			<div class="w-error-warp j-error-wrap">                                    
				 				<input class="w-ipt" name="name" value="" tabindex="1" type="text">
				 			</div>                                
				 		</div>                                
				 		<div class="w-col-2" style="width:275px;">                                    
				 			<span class="w-label">手机号码：</span>                                    
				 			<div class="w-error-warp j-error-wrap">                                    
				 				<input class="w-ipt j-mobileFilter" name="mobile" value="" required="required" tabindex="2" type="text">
				 			</div>                                
				 		</div>
				 		<div style="clear:both"></div>                            
				 	</div>                            
				 	<div class="w-row-addr">                                
				 		<div class="w-col-4">                                    
				 			<span class="w-label">所在地区：</span>                                    
				 			<div class="w-error-warp j-error-wrap" id="fid" style="margin-right:11px;margin-right:7px;">                                    
				 				<div style="clear:both"></div>                                    
				 			</div>                       
				 			<input name="provinceName" class="j-provincename" value="" type="hidden">                                    
				 			<input name="cityName" class="j-cityname" value="" type="hidden">                                    
				 			<input name="districtName" class="j-districtname" value="" type="hidden">                                    
				 			<div style="clear:both"></div>                                
				 		</div>
				 		<div style="clear:both"></div>                            
				 	</div>                            
				 	<div class="w-row-addr">                                
				 		<div class="w-col-4">                                    
				 			<span class="w-label" style="vertical-align: top;margin-top:6px;">详细地址：</span>                                    
				 			<div class="w-textarea w-error-warp j-error-wrap">                                    
				 				<textarea name="address" id="" cols="30" rows="10" tabindex="6"></textarea>                                    
				 			</div>                                
				 		</div>
				 		<div style="clear:both"></div>                            
				 	</div> 


				 	<script type="text/javascript">
				 	//js函数 实现select option节点的加载 
					      function loadDistrict(upid){

					        $.ajax({
					          url:"{{ URL('/addressx/') }}"+"/"+upid,
					          type:"get",
					          dataType:"json",
					          success:function (data){
					            // alert(data);
					            if(data.length==0){
					              return;
					            }

					            var select = "<select class='form-contorl'>";
					            select +="<option value='-2'>-请选择-</option>";
					            for(var i=0;i<data.length;i++){
					              select +="<option value='"+data[i].id+"'>"+data[i].name+"</option>";
					            }
					            select +="</select>";
					            //select option 新产生的节点对象 添加到form表单中 
					            // $("#fid").append(select);
					            //高版本jquery不支持live 事件委派
					            // $("select").live("change",function (){   });				            
					            $(select).change(function (){
					                //清空后面所有的select节点
					                $(this).nextAll("select").remove();

					                var id = $(this).find("option:selected").val()
					                // alert(id);
					                loadDistrict(id);

					            }).appendTo('#fid');  


					          }
					        });

					      }
	      				loadDistrict(0);


						</script>
				 	<div class="w-row-addr" style="margin-top:40px">                                
				 		<div class="w-col-1">                                    
				 			<div class="w-chkbox">                                    
				 				<input checked="checked" name="dft" class="j-checkbox" type="checkbox">
				 				<span>设为默认</span>                                    
				 			</div>                                
				 		</div>                                
				 		<div class="w-col-3">                                    
				 			<button type="button" class="w-button w-button-primary w-button-l j-submit" style="margin-left:45px">确定</button>                                   
				 			<button type="button" class="w-button w-button-l j-cancel" style="margin-left:5px">取消</button>                                    
				 			<div class="w-errorMsg j-msg" style="display: none;left:45px;top:45px;">
				 				<i class="icon w-icon-normal icon-normal-disable"></i>
				 				<span class="text j-msg-con"></span>
				 			</div>                                
				 		</div>
				 		<div style="clear:both"></div>                            
				 	</div>                            
				</form>
			</div>   
		</div>        
</div>
@endsection