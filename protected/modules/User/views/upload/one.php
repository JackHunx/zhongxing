<form action="" name="form1" method="post"  enctype="multipart/form-data">
			<div class="user_help"><font color="#FF0000">*</font> 必须是本人的相关资料<br />
			<font color="#FF0000">*</font> 真实 有效<br /></div>
			<div class="user_right_border">
				<div class="l">资料上传：</div>
				<div class="c">
                <?php
$this->widget('ext.EFineUploader.EFineUploader', array('id' => 'oneUploader',
        'config' => array(
        'autoUpload' => true,
        'debug' => true,
        'request' => array('endpoint' => Yii::app()->baseUrl.'/index.php?r=upload/attestation',
                // OR $this->createUrl('files/upload'),
                'params' => array('YII_CSRF_TOKEN' => Yii::app()->request->csrfToken, 'code' =>
                    'attestation')),
        'retry' => array('enableAuto' => true, 'preventRetryResponseProperty' => true),
        'chunking' => array('enable' => true, 'partSize' => 100), //bytes
        'callbacks' => array(
            'onComplete' => "js:function(id, name, response){ 
                                        if(response.success==true)
                                        {
                                          $('#onefile').val(response.saveUrl);
                                          $('.qq-upload-status-text').html(function(){return '文件上传成功<a target=_black href='+response.url+'>查看</a>';});  
                                        }else{
                                            $('.qq-upload-status-text').html('上传失败');
                                        }}",
            'onError' => "js:function(id, name, errorReason){  }",
            ),
        'validation' => array(
            'allowedExtensions' => array(
                'jpg',
                'jpeg',
                'doc'),
            'sizeLimit' => 500 * 1024, //maximum file size in bytes
            'minSizeLimit' => 1 * 1024, // minimum file size in bytes
            ),
        )));

?>
					<input id="onefile" type="hidden" name="attestation[litpic]" /> 上传最大的图片为500kb，上传的格式为jpg,jpeg
				</div>
			</div>
			<div class="user_right_border">
				<div class="l">上传类型：</div>
				<div class="c">
					<select name="attestation[type_id]">
				    <script src="<?php echo Yii::app()->baseUrl; ?>/index.php?r=getDropValue/attestation"></script>
					</select>
				</div>
			</div>
			<div class="user_right_border">
				<div class="l">备注说明：</div>
				<div class="c">
					<textarea cols="50" rows="5" name="attestation[content]"></textarea>
				</div>
			</div>
			
			
			<div class="user_right_border">
				<div class="e"></div>
				<div class="c">
					<input type="submit"  value="确认提交" size="30" /> 
				</div>
			</div>
			</form>
			<div class="user_right_foot">
			* 温馨提示：我们将严格对用户的所有资料进行保密
			</div>