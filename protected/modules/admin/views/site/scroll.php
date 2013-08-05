<div class="notification attention png_bg">
				<a href="#" class="close"><img src="/zhongxing/images/admin//icons/cross_grey_small.png" title="Close this notification" alt="close"></a>
				<div>
					注意:如果图片地址为外部链接地址,图片地址必须写全.如http://xxx.com/xxx.jpg
				</div>
			</div>
<div class="content-box column-left"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>滚动图片修改</h3>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
				
					
					<div class="tab-content default-tab" id="tab1">
                    
                   	     
					
						<form action="" method="post">
							
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								
                                <p>
									<label>滚动图片1</label>
                                         标题:<input class="text-input medium-input" type="text" id="medium-input" name="scroll[0][title]"  value="<?php echo $scroll['0']['title'];?>" />
                                         </br> 跳转:<input class="text-input medium-input" type="text" id="medium-input" name="scroll[0][url]"  value="<?php echo $scroll['0']['url'];?>" />
                                       </br> 图片地址:<input class="text-input medium-input" type="text" id="scroll1" name="scroll[0][src]"  value="<?php echo $scroll['0']['src'];?>" />
                                        <?php 
                                       $this->widget('ext.EFineUploader.EFineUploader',
 array(
       'id'=>'scroll1Uploader',
       'config'=>array(
                       'autoUpload'=>true,
                       'debug'=>true,
                       'request'=>array(
                        
                          'endpoint'=>'/zhongxing/index.php?r=upload/scroll',// OR $this->createUrl('files/upload'),
                          'params'=>array('YII_CSRF_TOKEN'=>Yii::app()->request->csrfToken,'code'=>'scroll')),
                       'retry'=>array('enableAuto'=>true,'preventRetryResponseProperty'=>true),
                       'chunking'=>array('enable'=>true,'partSize'=>100),//bytes
                       'callbacks'=>array(
                                       'onComplete'=>"js:function(id, name, response){ 
                                        if(response.success==true)
                                        {
                                          $('#scroll1').val(response.url);
                                          $('.qq-upload-status-text').html(function(){return '文件上传成功<a target=_black href='+response.url+'>查看</a>';});  
                                        }else{
                                            $('.qq-upload-status-text').html('上传失败');
                                        }}",
                                        'onError'=>"js:function(id, name, errorReason){  }",
                                         ),
                       'validation'=>array(
                                 'allowedExtensions'=>array('jpg','jpeg','doc'),
                                 'sizeLimit'=>500 * 1024,//maximum file size in bytes
                                 'minSizeLimit'=>1*1024,// minimum file size in bytes
                                          ),
                      )
      ));
                                       ?>
									
								</p>
                                <p>
									<label>滚动图片2</label>
                                         标题:<input class="text-input medium-input" type="text" id="medium-input" name="scroll[1][title]"  value="<?php echo $scroll['1']['title'];?>" />
                                         </br> 跳转:<input class="text-input medium-input" type="text" id="medium-input" name="scroll[1][url]"  value="<?php echo $scroll['1']['url'];?>" />
                                       </br> 图片地址:<input class="text-input medium-input" type="text" id="scroll2" name="scroll[1][src]"  value="<?php echo $scroll['1']['src'];?>" />
                                       <?php 
                                       $this->widget('ext.EFineUploader.EFineUploader',
 array(
       'id'=>'scroll2Uploader',
       'config'=>array(
                       'autoUpload'=>true,
                       'debug'=>true,
                       'request'=>array(
                        
                          'endpoint'=>'/zhongxing/index.php?r=upload/scroll',// OR $this->createUrl('files/upload'),
                          'params'=>array('YII_CSRF_TOKEN'=>Yii::app()->request->csrfToken,'code'=>'scroll')),
                       'retry'=>array('enableAuto'=>true,'preventRetryResponseProperty'=>true),
                       'chunking'=>array('enable'=>true,'partSize'=>100),//bytes
                       'callbacks'=>array(
                                       'onComplete'=>"js:function(id, name, response){ 
                                        if(response.success==true)
                                        {
                                          $('#scroll2').val(response.url);
                                          $('.qq-upload-status-text').html(function(){return '文件上传成功<a target=_black href='+response.url+'>查看</a>';});  
                                        }else{
                                            $('.qq-upload-status-text').html('上传失败');
                                        }}",
                                        'onError'=>"js:function(id, name, errorReason){  }",
                                         ),
                       'validation'=>array(
                                 'allowedExtensions'=>array('jpg','jpeg','doc'),
                                 'sizeLimit'=>500 * 1024,//maximum file size in bytes
                                 'minSizeLimit'=>1*1024,// minimum file size in bytes
                                          ),
                      )
      ));
                                       ?>
									
								</p>
                                <p>
									<label>滚动图片3</label>
                                         标题:<input class="text-input medium-input" type="text" id="medium-input" name="scroll[2][title]"  value="<?php echo $scroll['2']['title'];?>" />
                                         </br> 跳转:<input class="text-input medium-input" type="text" id="medium-input" name="scroll[2][url]"  value="<?php echo $scroll['2']['url'];?>" />
                                       </br> 图片地址:<input class="text-input medium-input" type="text" id="scroll3" name="scroll[2][src]"  value="<?php echo $scroll['2']['src'];?>" />
                                       <?php 
                                       $this->widget('ext.EFineUploader.EFineUploader',
 array(
       'id'=>'scroll3Uploader',
       'config'=>array(
                       'autoUpload'=>true,
                       'debug'=>true,
                       'request'=>array(
                        
                          'endpoint'=>'/zhongxing/index.php?r=upload/scroll',// OR $this->createUrl('files/upload'),
                          'params'=>array('YII_CSRF_TOKEN'=>Yii::app()->request->csrfToken,'code'=>'scroll')),
                       'retry'=>array('enableAuto'=>true,'preventRetryResponseProperty'=>true),
                       'chunking'=>array('enable'=>true,'partSize'=>100),//bytes
                       'callbacks'=>array(
                                       'onComplete'=>"js:function(id, name, response){ 
                                        if(response.success==true)
                                        {
                                          $('#scroll3').val(response.url);
                                          $('.qq-upload-status-text').html(function(){return '文件上传成功<a target=_black href='+response.url+'>查看</a>';});  
                                        }else{
                                            $('.qq-upload-status-text').html('上传失败');
                                        }}",
                                        'onError'=>"js:function(id, name, errorReason){  }",
                                         ),
                       'validation'=>array(
                                 'allowedExtensions'=>array('jpg','jpeg','doc'),
                                 'sizeLimit'=>500 * 1024,//maximum file size in bytes
                                 'minSizeLimit'=>1*1024,// minimum file size in bytes
                                          ),
                      )
      ));
                                       ?>
									
									
								</p>
                                 <p>
									<label>滚动图片4</label>
                                         标题:<input class="text-input medium-input" type="text" id="medium-input" name="scroll[3][title]"  value="<?php echo $scroll['3']['title'];?>" />
                                         </br> 跳转:<input class="text-input medium-input" type="text" id="medium-input" name="scroll[3][url]"  value="<?php echo $scroll['3']['url'];?>" />
                                       </br> 图片地址:<input class="text-input medium-input" type="text" id="scroll4" name="scroll[3][src]"  value="<?php echo $scroll['3']['src'];?>" />
									<?php 
                                       $this->widget('ext.EFineUploader.EFineUploader',
 array(
       'id'=>'scroll4Uploader',
       'config'=>array(
                       'autoUpload'=>true,
                       'debug'=>true,
                       'request'=>array(
                        
                          'endpoint'=>'/zhongxing/index.php?r=upload/scroll',// OR $this->createUrl('files/upload'),
                          'params'=>array('YII_CSRF_TOKEN'=>Yii::app()->request->csrfToken,'code'=>'scroll')),
                       'retry'=>array('enableAuto'=>true,'preventRetryResponseProperty'=>true),
                       'chunking'=>array('enable'=>true,'partSize'=>100),//bytes
                       'callbacks'=>array(
                                       'onComplete'=>"js:function(id, name, response){ 
                                        if(response.success==true)
                                        {
                                          $('#scroll4').val(response.url);
                                          $('.qq-upload-status-text').html(function(){return '文件上传成功<a target=_black href='+response.url+'>查看</a>';});  
                                        }else{
                                            $('.qq-upload-status-text').html('上传失败');
                                        }}",
                                        'onError'=>"js:function(id, name, errorReason){  }",
                                         ),
                       'validation'=>array(
                                 'allowedExtensions'=>array('jpg','jpeg','doc'),
                                 'sizeLimit'=>500 * 1024,//maximum file size in bytes
                                 'minSizeLimit'=>1*1024,// minimum file size in bytes
                                          ),
                      )
      ));
                                       ?>
									
								</p>
                                 <p>
									<label>滚动图片5</label>
                                         标题:<input class="text-input medium-input" type="text" id="medium-input" name="scroll[4][title]"  value="<?php echo $scroll['4']['title'];?>" />
                                         </br> 跳转:<input class="text-input medium-input" type="text" id="medium-input" name="scroll[4][url]"  value="<?php echo $scroll['4']['url'];?>" />
                                       </br> 图片地址:<input class="text-input medium-input" type="text" id="scroll5" name="scroll[4][src]"  value="<?php echo $scroll['4']['src'];?>" />
									<?php 
                                       $this->widget('ext.EFineUploader.EFineUploader',
 array(
       'id'=>'scroll5Uploader',
       'config'=>array(
                       'autoUpload'=>true,
                       'debug'=>true,
                       'request'=>array(
                        
                          'endpoint'=>'/zhongxing/index.php?r=upload/scroll',// OR $this->createUrl('files/upload'),
                          'params'=>array('YII_CSRF_TOKEN'=>Yii::app()->request->csrfToken,'code'=>'scroll')),
                       'retry'=>array('enableAuto'=>true,'preventRetryResponseProperty'=>true),
                       'chunking'=>array('enable'=>true,'partSize'=>100),//bytes
                       'callbacks'=>array(
                                       'onComplete'=>"js:function(id, name, response){ 
                                        if(response.success==true)
                                        {
                                          $('#scroll5').val(response.url);
                                          $('.qq-upload-status-text').html(function(){return '文件上传成功<a target=_black href='+response.url+'>查看</a>';});  
                                        }else{
                                            $('.qq-upload-status-text').html('上传失败');
                                        }}",
                                        'onError'=>"js:function(id, name, errorReason){  }",
                                         ),
                       'validation'=>array(
                                 'allowedExtensions'=>array('jpg','jpeg','doc'),
                                 'sizeLimit'=>500 * 1024,//maximum file size in bytes
                                 'minSizeLimit'=>1*1024,// minimum file size in bytes
                                          ),
                      )
      ));
                                       ?>
									
								</p>
                                 <p>
								
								<p>
									<input class="button" type="submit" value="修改" />
								</p>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div> <!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div>