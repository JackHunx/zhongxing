<?php
if ($model->phone_status == 1) {
    echo <<< ETO
    
    <div class="user_right_main">
		
				<!--认证 开始-->
				<div class="user_help">您的手机已经通过认证，认证的手机号码为：<b>{$model->phone}</b></div>
				<div class="user_right_border">
			<div class="c">
		          如需修改认证，请与客服人员联系。

			</div>
		</div>
		<!--邮箱认证 结束-->
		
		
		</div>
ETO;

} else {
    if($model->phone==null)
        $msg = "您的手机还没通过认证";
    else
        $msg="您的手机认证正在审核中,请耐心等待。手机号：<font color='#ff0000'>".$model->phone."</font>";
    echo <<< ETO
    
    <div class="user_right_main">
		
				<!--认证 开始-->
				<div class="user_help">
		$msg</div>
				<div class="user_right_border">
			<div class="c">
				<form action="" method="post">手机号码：<input type="text" name="phone" value=""> <input type="submit" value="确认提交"><br><br></form>

			</div>
		</div>
		<!--邮箱认证 结束-->
		
		
		</div>

ETO;
}
