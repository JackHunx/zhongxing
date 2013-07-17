<!--银行账号 开始-->
		<div class="user_help"><?php echo $webname;?>止信用卡套现、虚假交易等行为,一经发现将予以处罚,包括但不限于：限制收款、冻结账户、永久停止服务,并有可能影响相关信用记录。
</div>
		<div class="user_right_border">
			<div class="l">真实姓名：</div>
			<div class="c">
				<?php echo $user['realname'];?>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">账号：</div>
			<div class="c">
				<?php echo $user['email'];?>
			</div>
		</div>
        <?php 
        if($bank_status == 1)
            echo <<<ETO
		
		<div class="user_right_border">
			<div class="l">开户银行：</div>
			<div class="c">
				$bankname;
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">开户行名称：</div>
			<div class="c">
				$bank->branch;
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">银行账号：</div>
			<div class="c">
				$bank->account;
			</div>
		</div>
ETO;
?>
		<form action="" method="post">
		<div class="user_right_border">
			<div class="l">开户银行：</div>
			<div class="c">
                <script src="<?php echo Yii::app()->baseUrl;?>/index.php?r=getDropValue/drop&name=bank[bank]&type=25&value=<?php //echo $info->mate_type;?>"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">开户行支行名称：</div>
			<div class="c">
				<input type="text" name="bank[branch]" value="" /><br />

			</div>
            
		</div>
		<span>**分行**支行**分理处或营业部(如：临沂分行费县支行建设路分理处),如果您无法确定,建议您致电您的开户银行客服进行询问。 </span>
		<div class="user_right_border">
			<div class="l">银行账号：</div>
			<div class="c">
				<input type="text" name="bank[account]" value="" /><br />

			</div>
		</div>
		<span>特别提醒：上述银行卡号的开户人姓名必须为“<?php echo $webname; ;?>”, 个人银行账号必须填写正确,否则你的提现资金将存在风险。 如果要修改的话必须要补全, 可以任何时候修改以您的姓名开户的银行卡号。</span>
		<div class="user_right_border">
			<div class="l"></div>
			<div class="c">
				<input type="submit" name="name"  value="确认提交" size="30" /> 
			</div>
		</div>
		</form>
		<div class="user_right_foot">
		* 温馨提示：禁止信用卡套现
		</div>
		<!--银行账号 结束-->
		