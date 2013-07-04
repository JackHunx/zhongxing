<?php
//no验证
if($model->avatar_status==0)
{
$baseUrl =Yii::app()->baseUrl;
echo <<<ETO
<div class="user_right_main">
		
				<!--修改登录密码 开始-->
				
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
				<input type="text" name="realname" value="{$model->realname}"><font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">性 别 ：</div>
			<div class="c">
				<input type="radio" name="sex" value="1">男 <input type="radio" name="sex" value="2">女 <font color="#FF0000">*</font> 
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
				<input type="text" name="birthday" value="" onclick="WdatePicker()">  <font color="#FF0000">*</font> 
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
				<input type="text" name="card_id" value="">  <font color="#FF0000">*</font> 
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
                       'request'=>array(
                          'endpoint'=>'/zhongxing/index.php?r=upload/card',// OR $this->createUrl('files/upload'),
                          'params'=>array('YII_CSRF_TOKEN'=>Yii::app()->request->csrfToken,'code'=>'card_pic1'),
                                       ),
                       'retry'=>array('enableAuto'=>true,'preventRetryResponseProperty'=>true),
                       'chunking'=>array('enable'=>true,'partSize'=>100),//bytes
                       'callbacks'=>array(
                                       'onComplete'=>"js:function(id, name, response){ $('#card1').val(response.saveUrl); $('.qq-upload-status-text').html(function(){
                                          
                                        return '文件上传成功<a target=_black href='+response.url+'>查看</a>';
                                     
                                       });}",
                                        'onError'=>"js:function(id, name, errorReason){  }",
                                         ),
                       'validation'=>array(
                                 'allowedExtensions'=>array('jpg','jpeg','doc'),
                                 'sizeLimit'=>2 * 1024 * 1024,//maximum file size in bytes
                                 'minSizeLimit'=>5*1024,// minimum file size in bytes
                                          ),
                      )
      ));
 

 echo <<<ETO
 	<input id="card1" name="card_pic1" type="hidden" value="" >
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
                                       'onComplete'=>"js:function(id, name, response){   $('#card2').val(response.saveUrl); $('.qq-upload-status-text').html(function(){return '文件上传成功<a target=_black href='+response.url+'>查看</a>';
                                     
                                       });}",
                                        'onError'=>"js:function(id, name, errorReason){  }",
                                         ),
                       'validation'=>array(
                                 'allowedExtensions'=>array('jpg','jpeg','doc'),
                                 'sizeLimit'=>2 * 1024 * 1024,//maximum file size in bytes
                                 'minSizeLimit'=>5*1024,// minimum file size in bytes
                                          ),
                      )
      ));
 

 echo <<<ETO
				<input type="hidden" id="card2" name="card_pic2" >   <font color="#FF0000">*</font> 
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
				 var realname = frm.elements['realname'].value;
				 var birthday = frm.elements['birthday'].value;
				 var card_id = frm.elements['card_id'].value;
				 var area = frm.elements['area'].value;
				 var errorMsg = '';
				  if (realname.length == 0 ) {
					errorMsg += '* 真实姓名不能为空' + '\n';
				  }
				  if (birthday.length == 0 ) {
					birthday += '* 生日不能为空' + '\n';
				  }
				  if (card_id.length == 0 ) {
					errorMsg += '* 证件号码不能为空' + '\n';
				  }
				  if (area.length == 0 ) {
					errorMsg += '* 请填写籍贯' + '\n';
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
    echo <<<ETO
    
    <div class="user_right_main">
		
				<!--修改登录密码 开始-->
		 
		<div class="user_help">注意：您已经通过了实名认证，如要修改请跟客服联系。</div>
		<div class="user_right_border">
			<div class="l">用户名：</div>
			<div class="c">
				admin 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">真实姓名：</div>
			<div class="c">
				系统管理员 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">性 别 ：</div>
			<div class="c">
				女 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">民 族：</div>
			<div class="c">
							</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">出生日期：</div>
			<div class="c">
							</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">证件类别：</div>
			<div class="c">
				身份证			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">证件号码：</div>
			<div class="c">
							</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">籍贯：</div>
			<div class="c">
							</div>
		</div>
		<div class="user_right_border">
			<div class="l">身份证图片：</div>
			<div class="c">
				<a href="/plugins/index.php?q=imgurl&amp;url=QGltZ3VybEA=" target="_blank">正面</a> | <a href="/plugins/index.php?q=imgurl&amp;url=QGltZ3VybEA=" target="_blank">反面</a>
			</div>
		</div>
				<div class="user_right_foot">
		* 温馨提示：我们将严格对用户的所有资料进行保密
		</div>
		<script>
			function check_form(){
				 var frm = document.forms['form1'];
				 var realname = frm.elements['realname'].value;
				 var birthday = frm.elements['birthday'].value;
				 var card_id = frm.elements['card_id'].value;
				 var area = frm.elements['area'].value;
				 var errorMsg = '';
				  if (realname.length == 0 ) {
					errorMsg += '* 真实姓名不能为空' + '\n';
				  }
				  if (birthday.length == 0 ) {
					birthday += '* 生日不能为空' + '\n';
				  }
				  if (card_id.length == 0 ) {
					errorMsg += '* 证件号码不能为空' + '\n';
				  }
				  if (area.length == 0 ) {
					errorMsg += '* 请填写籍贯' + '\n';
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
}

//
 