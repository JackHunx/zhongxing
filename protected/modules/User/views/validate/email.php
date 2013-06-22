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
    echo <<<ETO
    <div class="user_right_main">
		
				<!--邮箱认证 开始-->
				<div class="user_help">您的邮箱还没通过认证：<b>{$model->email}</b></div>
		<div class="user_right_border">
			<div class="c">
				<form action="" method="post" onsubmit="this.elements['submit'].disabled='disabled';return true;">
				重设邮箱：<input type="text" name="email" value="{$model->email}">  <input type="submit" name="submit" value="重新激活">
				</form>
			</div>
		</div>
				<!--邮箱认证 结束-->
		
		
		</div>
ETO;
    
}