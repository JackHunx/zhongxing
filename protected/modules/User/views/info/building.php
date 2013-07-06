<form action="" name="form1" method="post" >
<div class="user_help">请填写你个人的房产资料相关信息</div>
		
		<div class="user_right_border">
				<div class="l">房产地址：</div>
				<div class="c">
					<input type="text" size="30" name="info[house_address]" value="<?php echo $info->house_address ;?>" /> 
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">建筑面积：</div>
				<div class="c">
					<input type="text" size="25" name="info[house_area]" value="<?php echo $info->house_area;?>"/> 
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">建筑年份：</div>
				<div class="c">
					<input type="text" size="25" name="info[house_year]" value="<?php echo $info->house_year;?>" onclick="WdatePicker()" /> 
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">供款状况：</div>
				<div class="c">
					<input type="text" size="25" name="info[house_status]" value="<?php echo $info->house_status;?>" /> 元
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">所有权人1：</div>
				<div class="c">
					<input type="text" size="25" name="info[house_holder1]" value="<?php echo $info->house_holder1;?>" /> 产权份额：<input type="text" size="25" name="info[house_right1]" value="<?php echo $info->house_right1;?>" /> 
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">所有权人2：</div>
				<div class="c">
					<input type="text" size="25" name="info[house_holder2]" value="<?php echo $info->house_holder2;?>" /> 产权份额：<input type="text" size="25" name="info[house_right2]" value="<?php echo $info->house_right2;?>" /> 
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="e">若房产尚在按揭中, 请填写</div>
				<div class="c">
					贷款年限：<input type="text" size="10" name="info[house_loanyear]" value="<?php echo $info->house_loanyear  ;?>" />每月供款：<input type="text" size="10" name="info[house_loanprice]" value="<?php echo $info->house_loanprice;?>" /> 元
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">尚欠贷款余额：</div>
				<div class="c">
					<input type="text" size="25" name="info[house_balance]" value="<?php echo $info->house_balance;?>" /> 元
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">按揭银行：</div>
				<div class="c">
					<input type="text" size="25" name="info[house_bank]" value="<?php echo $info->house_bank;?>" /> 
				</div>
			</div>
		
		
		<div class="user_right_border">
			<div class="l"></div>
			<div class="c">
				<input type="submit" name="name"  value="确认提交" size="30" /> 
			</div>
		</div>
		
		<div class="user_right_foot">
		* 温馨提示：我们将对所有的信息进行保密
		</div>
		



</form>