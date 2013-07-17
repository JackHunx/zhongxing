<form action="" name="form1" method="post" >

<!--单位资料 开始-->
		
		<div class="user_help">请填写你个人的最近的单位资料</div>
		 <form action="" method="post">
		<div class="user_right_border">
			<div class="l">单位名称：</div>
			<div class="c">
				<input type="text" size="25" name="info[company_name]" value="<?php echo $info->company_name ;?>" /> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">单位性质：</div>
			<div class="c">
			
                <script src="<?php echo Yii::app()->baseUrl;?>/index.php?r=getDropValue/drop&name=info[company_type]&type=10&value=<?php echo $info->company_type;?>"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">单位行业：</div>
			<div class="c">
                <script src="<?php echo Yii::app()->baseUrl;?>/index.php?r=getDropValue/drop&name=info[company_industry]&type=11&value=<?php echo $info->company_industry;?>"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">工作级别：</div>
			<div class="c">
			
                <script src="<?php echo Yii::app()->baseUrl;?>/index.php?r=getDropValue/drop&name=info[company_jibie]&type=12&value=<?php echo $info->company_jibie;?>"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">职 位：</div>
			<div class="c">
                <script src="<?php echo Yii::app()->baseUrl;?>/index.php?r=getDropValue/drop&name=info[company_office]&type=13&value=<?php echo $info->company_office;?>"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">服务时间：</div>
			<div class="c">
				<input type="text" size="25" name="info[company_worktime1]" value="<?php echo $info->company_worktime1; ?>" onclick="WdatePicker()" />  到 <input type="text" size="25" name="info[company_worktime2]" value="<?php echo $info->company_worktime2; ?>" onclick="WdatePicker()" /> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">工作年限：</div>
			<div class="c">
                <script src="<?php echo Yii::app()->baseUrl;?>/index.php?r=getDropValue/drop&name=info[company_workyear]&type=14&value=<?php echo $info->company_workyear;?>"></script>
                
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">工作电话：</div>
			<div class="c">
				<input type="text" size="25" name="info[company_tel]" value="<?php echo $info->company_tel;?>" /> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">公司地址：</div>
			<div class="c">
				<input type="text" size="25" name="info[company_address]" value="<?php echo $info->company_address;?>" /> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">公司网站：</div>
			<div class="c">
				<input type="text" size="25" name="info[company_weburl]" value="<?php echo $info->company_weburl;?>" /> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">备注说明：</div>
			<div class="c">
				<textarea  cols="50" rows="6"name="info[company_reamrk]"  ><?php echo $info->company_reamrk;?>
                </textarea>
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
		
		<!--单位资料 结束-->


</form>