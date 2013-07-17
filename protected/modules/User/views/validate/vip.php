
<div class="wrap950 list_1">
	<div class="title"><img src="<?php echo Yii::app()->baseUrl;?>/images/ico_4.gif" /> 您的vip信息：</div>
	<div class="content">
				
			<form action="" method="post">
			<ul class="ul_li_1">
				<li>您的状态是：<?php echo $status;?></li>
				<li>用户名：<?php echo $model->username; ?></li>
				<li>姓 名 ：<?php echo $model->realname;?></li>
				<li>邮 箱 ：<?php echo $model->email;?></li>
                <?php
                if($vip==null)
                {                    
                    echo <<<ETO
				<li>选择客服 ：<select name="Vip[kefu_userid]">
								$service
								</select></li>
				<li>备 注 ：<textarea rows="5" cols="50" name="Vip[vip_remark]"></textarea></li>
                
   

                
				<li>验证码：<input name="Vip[verifyCode]" type="text" size="11" maxlength=""  tabindex="3"/>&nbsp;	
ETO;

                
                 $this->widget('CCaptcha',array('showRefreshButton'=>false,'clickableImage'=>true,'imageOptions'=>array('alt'=>'点击换图','title'=>'点击换图','style'=>'cursor:pointer'))); 
                 echo <<<ETO
                 
                 </li>
				<li><input type="submit" value="我要申请" /></li>

ETO;
}elseif($vip->vip_status==0)
{
    echo <<<ETO
    <li>客服：{$vip->kefu_username}</li>
				<li>备注 ：{$vip->vip_remark}</li>
               
ETO;
}elseif($vip->vip_status==1)
{
    echo <<<ETO
    <li>客服： {$vip->kefu_username}</li>
				<li>备注 ：{$vip->vip_remark}</li>
ETO;
}
?>
			</ul>
			</form>
			</div>
	<div class="foot"></div>
	<div>
 

    
	</div>
</div>




