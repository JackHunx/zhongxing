<?php 

echo Yii::app()->user->id;
$this->widget('ext.EFineUploader.EFineUploader',
 array(
       'id'=>'FineUploader',
       'config'=>array(
                       'autoUpload'=>true,
                       'request'=>array(
                          'endpoint'=>'/zhongxing/index.php?r=site/upload',// OR $this->createUrl('files/upload'),
                          'params'=>array('YII_CSRF_TOKEN'=>Yii::app()->request->csrfToken),
                                       ),
                       'retry'=>array('enableAuto'=>true,'preventRetryResponseProperty'=>true),
                       'chunking'=>array('enable'=>true,'partSize'=>100),//bytes
                       'callbacks'=>array(
                                       'onComplete'=>"js:function(id, name, response){ $('.qq-upload-status-text').html(function(){return '文件上传成<a href='+response.url+'>查看</a>';});}",
                                        'onError'=>"js:function(id, name, errorReason){  }",
                                         ),
                       'validation'=>array(
                                 'allowedExtensions'=>array('jpg','jpeg','doc'),
                                 'sizeLimit'=>2 * 1024 * 1024,//maximum file size in bytes
                                 'minSizeLimit'=>5*1024,// minimum file size in bytes
                                          ),
                      )
      ));
 

?>