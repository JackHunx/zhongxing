<form action="" name="form1" method="post" >

<div class="user_help">请填写您财务状况</div>
		<form action="" method="post">
		<div class="user_right_border">
			<div class="e">每月无抵押贷款还款额：</div>
			<div class="c">
				<input type="text" size="15" name="info[finance_repayment]" value="<?php echo $info->finance_repayment;?>" /> 元
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="e">自有房产：</div>
			<div class="c">
                 <script src="<?php echo Yii::app()->baseUrl;?>/index.php?r=getDropValue/drop&name=info[finance_property]&type=17&value=<?php echo $info->finance_property;?>"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="e">每月房屋按揭金额：</div>
			<div class="c">
				<input type="text" size="15" name="info[finance_amount]" value="<?php echo $info->finance_amount;?>" /> 元
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="e">自有汽车：</div>
			<div class="c">
                <script src="<?php echo Yii::app()->baseUrl;?>/index.php?r=getDropValue/drop&name=info[finance_car]&type=16&value=<?php echo $info->finance_car;?>"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="e">每月汽车按揭金额：</div>
			<div class="c">
				<input type="text" size="15" name="info[finance_caramount]" value="<?php echo $info->finance_caramount;?>" /> 元
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="e">每月信用卡还款金额：</div>
			<div class="c">
				<input type="text" size="15" name="info[finance_creditcard]" value="<?php echo $info->finance_creditcard;?>" /> 元
			</div>
		</div>
		 <div class="user_right_border">
			<div class="e"></div>
			<div class="c">
				<input type="submit" name="name"  value="确认提交" size="30" /> 
			</div>
		</div>


</form>