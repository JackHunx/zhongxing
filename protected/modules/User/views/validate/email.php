<?php
if($model->email_status ==1)
{
    echo <<<ETO


<div class="user_right_main">
		
				<!--邮箱认证 开始-->
				<div class="user_help">您的邮箱已经通过认证：<b>{$model->email}</b> </div>
		
				<!--邮箱认证 结束-->
		
		
		</div>
ETO;
}else{
    Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/sendemail.js');
    echo <<<ETO
    <div class="user_right_main">
		
				<!--邮箱认证 开始-->
				<div class="user_help">您的邮箱还没通过认证：<b id="newemail">{$model->email}</b> <a style="display:none" id="checkemail" target="_black">去邮箱查收邮件</a></div>
		<div class="user_right_border">
			<div class="c">
				<form id="emailform" name="email" method="post">
				重设邮箱：<input id="email" type="text" name="email" value="{$model->email}"> 
                <input type="hidden" id="realname" name="realname" value="{$model->realname}">
                 <input id="submitemail" type="submit" name="submit" value="重新激活">
				</form>
			</div>
		</div>
				<!--邮箱认证 结束-->
		
		
		</div>
ETO;
    
}