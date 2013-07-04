<?php 

$this->widget('ext.EFineUploader.EFineUploader',
 array(
       'id'=>'FineUploader',
       'config'=>array(
                       'autoUpload'=>true,
                       'request'=>array(
                          'endpoint'=>'/zhongxing/index.php?r=site/upload',// OR $this->createUrl('files/upload'),
                          'params'=>array('YII_CSRF_TOKEN'=>Yii::app()->request->csrfToken,'code'=>'card_pic1'),
                                       ),
                       'retry'=>array('enableAuto'=>true,'preventRetryResponseProperty'=>true),
                       'chunking'=>array('enable'=>true,'partSize'=>100),//bytes
                       'callbacks'=>array(
                                       'onComplete'=>"js:function(id, name, response){
                                        if(respone.success==true)
                                        {
                                          $('.qq-upload-status-text').html(function(){return '文件上传成功<a target=_black href='+response.url+'>查看</a>';});  
                                        }else{
                                            $('.qq-upload-status-text').html(response.error);
                                        }
                                        
                                        
                                        }",
                                        'onError'=>"js:function(id, name, errorReason){}",
                                         ),
                       'validation'=>array(
                                 'allowedExtensions'=>array('jpg','jpeg','doc'),
                                 'sizeLimit'=>2 * 1024 * 1024,//maximum file size in bytes
                                 'minSizeLimit'=>5*1024,// minimum file size in bytes
                                          ),
                      )
      ));
 

?>