<?php
//no验证
if($model->real_status==null)
{
$baseUrl =Yii::app()->baseUrl;
echo <<<ETO
<div class="user_right_main">
		
				<!--实名认证 开始-->
				
		<form action="" name="form1" method="post" onsubmit="return check_form()" enctype="multipart/form-data">
		<div class="user_help">注意：请认真填写以下的内容，一旦通过实名认证以下信息将不能修改。认证费用国家统一5元!（应广大用户要求，现认证由网站垫付。）</div>
		<div class="user_right_border">
			<div class="l">用户名：</div>
			<div class="c">
				{$model->username} 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">真实姓名：</div>
			<div class="c">
				<input type="text" name="user[realname]" value="{$model->realname}"><font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">性 别 ：</div>
			<div class="c">
				<input type="radio" name="user[sex]" value="1">男 <input type="radio" name="user[sex]" value="2">女 <font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">民 族：</div>
			<div class="c">
				<script src="{$baseUrl}/index.php?r=getDropValue/nation"></script> <font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">出生日期：</div>
			<div class="c">
				<input type="text" name="user[birthday]" value="" onclick="WdatePicker()">  <font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">证件类别：</div>
			<div class="c">
				<script src="{$baseUrl}/index.php?r=getDropValue/card"></script> <font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">证件号码：</div>
			<div class="c">
				<input type="text" name="user[card_id]" value="">  <font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">籍贯：</div>
			<div class="c">
			<script  src="{$baseUrl}/index.php?r=getDropValue/area"></script> <font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">身份证正面上传：</div>
			<div class="c">
			
                
ETO;
 
$this->widget('ext.EFineUploader.EFineUploader',
 array(
       'id'=>'card1Uploader',
       'config'=>array(
                       'autoUpload'=>true,
                       'debug'=>true,
                       'request'=>array(
                        
                          'endpoint'=>'/zhongxing/index.php?r=upload/card',// OR $this->createUrl('files/upload'),
                          'params'=>array('YII_CSRF_TOKEN'=>Yii::app()->request->csrfToken,'code'=>'card_pic1')),
                       'retry'=>array('enableAuto'=>true,'preventRetryResponseProperty'=>true),
                       'chunking'=>array('enable'=>true,'partSize'=>100),//bytes
                       'callbacks'=>array(
                                       'onComplete'=>"js:function(id, name, response){ 
                                        if(response.success==true)
                                        {
                                          $('#card1').val(response.saveUrl);
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
 

 echo <<<ETO
 	<input id="card1" name="user[card_pic1]" type="hidden" value="" >
                  <font color="#FF0000">*</font> 
			</div>
		</div>
		
		
	<div class="user_right_border">
			<div class="l">身份证背面上传：</div>
			<div class="c">
ETO;
 
$this->widget('ext.EFineUploader.EFineUploader',
 array(
       'id'=>'card2Uploader',
       'config'=>array(
                       'autoUpload'=>true,
                       'request'=>array(
                          'endpoint'=>'/zhongxing/index.php?r=upload/card',// OR $this->createUrl('files/upload'),
                          'params'=>array('YII_CSRF_TOKEN'=>Yii::app()->request->csrfToken,'code'=>'card_pic2'),
                                       ),
                       'retry'=>array('enableAuto'=>true,'preventRetryResponseProperty'=>true),
                       'chunking'=>array('enable'=>true,'partSize'=>100),//bytes
                       'callbacks'=>array(
                                       'onComplete'=>"js:function(id, name, response){ 
                                        if(response.success==true)
                                        {
                                           $('#card2').val(response.saveUrl);
                                          $('.qq-upload-status-text').html(function(){return '文件上传成功<a target=_black href='+response.url+'>查看</a>';});  
                                        }else{
                                            $('.qq-upload-status-text').html('上传失败');
                                        }}",
                                        'onError'=>"js:function(id, name, errorReason){}",
                                         ),
                       'validation'=>array(
                                 'allowedExtensions'=>array('jpg','jpeg','doc'),
                                 'sizeLimit'=>500 * 1024,//maximum file size in bytes
                                 'minSizeLimit'=>1*1024,// minimum file size in bytes
                                          ),
                      )
      ));
 

 echo <<<ETO
				<input type="hidden" id="card2" name="user[card_pic2]" >   <font color="#FF0000">*</font> 
			</div>
		</div>
		
		
		<div class="user_right_border">
			<div class="e"></div>
			<div class="c">
				<input type="submit" name="name" value="确认提交" size="30"> 			</div>
		</div>
		</form>		<div class="user_right_foot">
		* 温馨提示：我们将严格对用户的所有资料进行保密
		</div>
		<script>
			function check_form(){
				 var frm = document.forms['form1'];
				 var realname = frm.elements['user[realname]'].value;
				 var birthday = frm.elements['user[birthday]'].value;
				 var card_id = frm.elements['user[card_id]'].value;
				 var area = frm.elements['area'].value;
				 var errorMsg = '';
				  if (realname.length == 0 ) {
					errorMsg += '* 真实姓名不能为空' + '\\n';
				  }
				  if (birthday.length == 0 ) {
					birthday += '* 生日不能为空' + '\\n';
				  }
				  if (card_id.length == 0 ) {
					errorMsg += '* 证件号码不能为空' + '\\n';
				  }
				  if (area.length == 0 ) {
					errorMsg += '* 请填写籍贯' + '\\n';
				  }
				   
				  if (errorMsg.length > 0){
					alert(errorMsg); return false;
				  } else{  
					return true;
				}
			
			}
		</script>
		<!--修改登录密码 结束-->
		
		</div>
ETO;
}else{
    
    $sex = ($model->sex == 1)?'男':'女';
    $pic1=Yii::app()->baseUrl.$model->card_pic1;
    $pic2=Yii::app()->baseUrl.$model->card_pic2;
    echo '<div class="user_right_main">';
    if($model->real_status==0)
    {
        echo '<div class="user_help">注意：您的实名认证正在审核中，如要修改请跟客服联系。</div>';
    }elseif($model->real_status==1)
        {echo '<div class="user_help">注意：您已经通过了实名认证。</div>';}
    echo <<<ETO
    
    
		
				<!--修改登录密码 开始-->
		 
		
		<div class="user_right_border">
			<div class="l">用户名：</div>
			<div class="c">
				$model->username
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">真实姓名：</div>
			<div class="c">
				$model->realname 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">性 别 ：</div>
			<div class="c">
				$sex 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">民 族：</div>
			<div class="c">
            {$info['nation']}
							</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">出生日期：</div>
			<div class="c">
            $model->birthday
							</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">证件类别：</div>
			<div class="c">
				{$info['card_type']}		</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">证件号码：</div>
			<div class="c">
            $model->card_id
							</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">籍贯：</div>
			<div class="c">
            {$info['province']}-{$info['city']}-{$info['area']}
							</div>
		</div>
		<div class="user_right_border">
			<div class="l">身份证图片：</div>
			<div class="c">
				<a href="$pic1" target="_blank">正面</a> | <a href="$pic2" target="_blank">反面</a>
			</div>
		</div>
				<div class="user_right_foot">
		* 温馨提示：我们将严格对用户的所有资料进行保密
		</div>
	
		<!--修改登录密码 结束-->
		
		</div>
    
ETO;

}

//
 