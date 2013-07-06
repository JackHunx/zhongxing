<form action="" name="form1" method="post" >
		<!--个人资料 开始-->
			<div class="user_right_border">
				<div class="l">帐户：</div>
				<div class="c">
				<?php echo $user->email ?>
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">帐号保护：</div>
				<div class="c">
					交易密码设置 | 申请密码保护 
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">昵 称：</div>
				<div class="c">
					<?php echo $user->username ;?>
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">性 别：</div>
				<div class="c">
					<?php echo ($user->sex==1)?'男':'女';?>
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">手机号码：</div>
				<div class="c">
					<?php echo $user->phone;?>
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">籍贯：</div>
				<div class="c">
					<?php echo $area;?>
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">婚姻状况：</div>
				<div class="c">
					<script src="<?php echo Yii::app()->baseUrl;?>/index.php?r=getDropValue/drop&type=1"></script>
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">子 女：</div>
				<div class="c">
					<script src="/plugins/index.php?q=linkage&name=child&nid=user_child&value={$_U.userinfo_result.child}"></script>
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">学 历：</div>
				<div class="c">
					<script src="/plugins/index.php?q=linkage&name=education&nid=user_education&value={$_U.userinfo_result.education}"></script>
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">月收入：</div>
				<div class="c">
					<script src="/plugins/index.php?q=linkage&name=income&nid=user_income&value={$_U.userinfo_result.income}"></script>
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">社 保：</div>
				<div class="c">
					<script src="/plugins/index.php?q=linkage&name=shebao&nid=user_shebao&value={$_U.userinfo_result.shebao}"></script>
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">社保电脑号：</div>
				<div class="c">
					<input type="text" size="30" name="shebaoid" value="{$_U.userinfo_result.shebaoid}" /> 
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">住房条件：</div>
				<div class="c">
					<script src="/plugins/index.php?q=linkage&name=housing&nid=user_housing&value={$_U.userinfo_result.housing}"></script>
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">是否购车：</div>
				<div class="c">
					<script src="/plugins/index.php?q=linkage&name=car&nid=user_car&value={$_U.userinfo_result.car}"></script>
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">逾期记录：</div>
				<div class="c">
					<script src="/plugins/index.php?q=linkage&name=late&nid=user_late&value={$_U.userinfo_result.late}"></script>
				</div>
			</div>
			
			<div class="user_right_border">
			<div class="l"></div>
			<div class="c">
				<input type="submit" name="name"  value="确认提交" size="30" /> 
			</div>
		</div>
		<!--个人资料 结束-->
        </form>