<form action="" name="form1" method="post" >

<div class="user_help">请填写您教育背景</div>
		<form action="" method="post">
		<div class="user_right_border">
			<div class="l">最高学历：</div>
			<div class="c">
                	<script src="<?php echo Yii::app()->baseUrl;?>/index.php?r=getDropValue/drop&name=info[education_record]&type=3&value=<?php echo $info->education_record;?>"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">最高学历学校：</div>
			<div class="c">
				<input type="text" size="25" name="info[education_school]" value="<?php echo $info->education_school;?>" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">专业：</div>
			<div class="c">
				<input type="text" size="25" name="info[education_study]" value="<?php echo $info->education_study;?>" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">时间：</div>
			<div class="c">
				<input type="text" size="25" name="info[education_time1]" value="<?php echo $info->education_time1;?>" onclick="WdatePicker()" /> 到 <input type="text" size="25" name="info[education_time2]" value="<?php echo $info->education_time2;?>" onclick="WdatePicker()" /> 
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