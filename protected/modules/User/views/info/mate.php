<form action="" name="form1" method="post" >

<div class="user_help">请填写您联系方式</div>
		<form action="" method="post">
		
		<div class="user_right_border">
			<div class="l">配偶姓名：</div>
			<div class="c">
				<input type="text" size="25" name="info[mate_name]" value="<?php echo $info->mate_name;?>" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">每月薪金：</div>
			<div class="c">
				<input type="text" size="25" name="info[mate_salary]" value="<?php echo $info->mate_salary;?>" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">移动电话：</div>
			<div class="c">
				<input type="text" size="25" name="info[mate_phone]" value="<?php echo $info->mate_phone;?>" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">单位电话：</div>
			<div class="c">
				<input type="text" size="25" name="info[mate_tel]" value="<?php echo $info->mate_tel;?>" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">工作单位：</div>
			<div class="c">
                <script src="<?php echo Yii::app()->baseUrl;?>/index.php?r=getDropValue/drop&name=info[mate_type]&type=11&value=<?php echo $info->mate_type;?>"></script>
			</div>
		</div>
		
		
		<div class="user_right_border">
			<div class="l">职位：</div>
			<div class="c">
                <script src="<?php echo Yii::app()->baseUrl;?>/index.php?r=getDropValue/drop&name=info[mate_office]&type=13&value=<?php echo $info->mate_office;?>"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">单位地址：</div>
			<div class="c">
				<input type="text" size="25" name="info[mate_address]" value="<?php echo $info->mate_address;?>" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">月收入：</div>
			<div class="c">
				<input type="text" size="25" name="info[mate_income]" value="<?php echo $info->mate_income;?>" />
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