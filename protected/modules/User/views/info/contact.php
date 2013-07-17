<form action="" name="form1" method="post" >

<div class="user_help">请填写您联系方式</div>
		<form action="" method="post">
		<div class="user_right_border">
			<div class="l">居住地电话：</div>
			<div class="c">
				<input type="text" size="25" name="info[tel]" value="<?php echo $info->tel;?>" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">手机号码：</div>
			<div class="c">
				<input type="text" size="25" name="info[phone]" value="<?php echo $info->phone;?>" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">居住所在省市：</div>
			<div class="c">
				<script  src="<?php echo Yii::app()->baseUrl;?>/index.php?r=getDropValue/areaDone&area=<?php echo $info->area;?>"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">居住地邮编：</div>
			<div class="c">
				<input type="text" size="25" name="info[post]" value="<?php echo $info->post;?>" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">现居住地址：</div>
			<div class="c">
				<input type="text" size="25" name="info[address]" value="<?php echo $info->address;?>" /> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">第二联系人姓名：</div>
			<div class="c">
				<input type="text" size="25" name="info[linkman1]" value="<?php echo $info->linkman1;?>" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">第二联系人关系：</div>
			<div class="c">
                <script src="<?php echo Yii::app()->baseUrl;?>/index.php?r=getDropValue/drop&name=info[relation1]&type=18&value=<?php echo $info->relation1;?>"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">第二联系人电话：</div>
			<div class="c">
				<input type="text" size="25" name="info[tel1]" value="<?php echo $info->tel1;?>" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">第二联系人手机：</div>
			<div class="c">
				<input type="text" size="25" name="info[phone1]" value="<?php echo $info->phone1;?>" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">第三联系人姓名：</div>
			<div class="c">
				<input type="text" size="25" name="info[linkman2]" value="<?php echo $info->linkman2;?>" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">第三联系人关系：</div>
			<div class="c">
                <script src="<?php echo Yii::app()->baseUrl;?>/index.php?r=getDropValue/drop&name=info[relation2]&type=18&value=<?php echo $info->relation2;?>"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">第三联系人电话：</div>
			<div class="c">
				<input type="text" size="25" name="info[tel2]" value="<?php echo $info->tel2;?>" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">第三联系人手机：</div>
			<div class="c">
				<input type="text" size="25" name="info[phone2]" value="<?php echo $info->phone2;?>" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">第四联系人姓名：</div>
			<div class="c">
				<input type="text" size="25" name="info[linkman3]" value="<?php echo $info->linkman3;?>" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">第四联系人关系：</div>
			<div class="c">
				<script src="<?php echo Yii::app()->baseUrl;?>/index.php?r=getDropValue/drop&name=info[relation3]&type=18&value=<?php echo $info->relation3;?>"></script> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">第四联系人电话：</div>
			<div class="c">
				<input type="text" size="25" name="info[tel3]" value="<?php echo $info->tel3;?>" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">第四联系人手机：</div>
			<div class="c">
				<input type="text" size="25" name="info[phone3]" value="<?php echo $info->phone3;?>" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">MSN：</div>
			<div class="c">
				<input type="text" size="25" name="info[msn]" value="<?php echo $info->msn;?>" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">QQ：</div>
			<div class="c">
				<input type="text" size="25" name="info[qq]" value="<?php echo $info->qq;?>" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">旺旺：</div>
			<div class="c">
				<input type="text" size="25" name="info[wangwang]" value="<?php echo $info->wangwang;?>" />
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