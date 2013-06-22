<?php
if ($model->phone_status == 1) {
    echo <<< ETO
    
    <div class="user_right_main">
		
				<!--邮箱认证 开始-->
				<div class="user_help">您的手机已经通过认证，认证的手机号码为：<b>{$model->phone}</b></div>
				<div class="user_right_border">
			<div class="c">
				<form action="" method="post">手机号码：<input type="text" name="phone" value="{$model->phone}"> <input type="submit" value="确认提交"><br><br></form>

			</div>
		</div>
		<!--邮箱认证 结束-->
		
		
		</div>
ETO;

} else {
    echo <<< ETO
    <div class="user_right_main">
		
				<!--邮箱认证 开始-->
				<div class="user_help">
		您的手机还没通过认证。</div>
				<div class="user_right_border">
			<div class="c">
				<form action="" method="post">手机号码：<input type="text" name="phone" value=""> <input type="submit" value="确认提交"><br><br></form>

			</div>
		</div>
		<!--邮箱认证 结束-->
		
		
		</div>

ETO;
}
