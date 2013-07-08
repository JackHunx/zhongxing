			<div class="user_help"><font color="#FF0000">*</font> 必须是本人的相关资料<br />
					<font color="#FF0000">*</font> 真实 有效<br />
			</div>
			
		<?php
$this->widget('ext.FilesUpload.FilesUpload', array('id' => 'filesUpload',
        'config' => array(
        //'autoUpload'=>true,
        'request' => array('endpoint' => Yii::app()->baseUrl.'/index.php?r=upload/moreAttestation',
                // OR $this->createUrl('files/upload'),
                //'params'=>array('YII_CSRF_TOKEN'=>Yii::app()->request->csrfToken),
            ),
        //'retry'=>array('enableAuto'=>true,'preventRetryResponseProperty'=>true),
        // 'chunking'=>array('enable'=>true,'partSize'=>100),//bytes
        // 'callbacks'=>array(
        //'onComplete'=>"js:function(id, name, response){ $('.qq-upload-status-text').html(function(){return '文件上传成<a target=_black href='+response.url+'>查看</a>';});}",
        //'onError'=>"js:function(id, name, errorReason){  }",
        //),
        'validation' => array('allowedExtensions' => "*.gif;*.jpeg;*.png;*.jpg",
                // 'sizeLimit'=>2 * 1024 * 1024,//maximum file size in bytes
                //'minSizeLimit'=>5*1024,// minimum file size in bytes
            ),
        )));

?>
			
			