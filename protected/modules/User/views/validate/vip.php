<div class="wrap950 list_1">
	<div class="title"><img src="<?php echo Yii::app()->baseUrl;?>/images/ico_4.gif" /> 您的vip信息：</div>
	<div class="content">
				
			<form action="<?php echo Yii::app()->baseUrl;?>/index.php?r=User/vip/create" method="post">
			<ul class="ul_li_1">
				<li>您的状态是：普通会员</li>
				<li>用户名：<?php echo $model->username; ?></li>
				<li>姓 名 ：<?php echo $model->realname;?></li>
				<li>邮 箱 ：<?php echo $model->email;?></li>
				<li>选择客服 ：<select name="UserCache[kefu_userid]">
								<option value="7">这一秒行动 下一秒收益(众兴为民)</option>
								<option value="6">想，就立刻行动(众兴飞腾)</option>
								</select></li>
				<li>备 注 ：<textarea rows="5" cols="50" name="UserCache[vip_remark]"></textarea></li>
				<li>验证码：<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3"/>&nbsp;<img src="/plugins/index.php?q=imgcode" alt="点击刷新" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" /></li>
				<li><input type="submit" value="我要申请" /></li>
			</ul>
			</form>
			</div>
	<div class="foot"></div>
	<div>
	
	</div>
</div>
