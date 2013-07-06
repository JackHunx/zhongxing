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
				<input type="text" size="25" name="phone" value="{$_U.userinfo_result.phone}" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">居住所在省市：</div>
			<div class="c">
				<script  src="<?php echo Yii::app()->baseUrl;?>/index.php?r=getDropValue/areaDone&area=4<?php echo $info->area;?>"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">居住地邮编：</div>
			<div class="c">
				<input type="text" size="25" name="post" value="{$_U.userinfo_result.post}" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">现居住地址：</div>
			<div class="c">
				<input type="text" size="25" name="address" value="{$_U.userinfo_result.address}" /> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">第二联系人姓名：</div>
			<div class="c">
				<input type="text" size="25" name="linkman1" value="{$_U.userinfo_result.linkman1}" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">第二联系人关系：</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&name=relation1&nid=user_relation&value={$_U.userinfo_result.relation1}"></script> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">第二联系人电话：</div>
			<div class="c">
				<input type="text" size="25" name="tel1" value="{$_U.userinfo_result.tel1}" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">第二联系人手机：</div>
			<div class="c">
				<input type="text" size="25" name="phone1" value="{$_U.userinfo_result.phone1}" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">第三联系人姓名：</div>
			<div class="c">
				<input type="text" size="25" name="linkman2" value="{$_U.userinfo_result.linkman2}" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">第三联系人关系：</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&name=relation2&nid=user_relation&value={$_U.userinfo_result.relation2}"></script> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">第三联系人电话：</div>
			<div class="c">
				<input type="text" size="25" name="tel2" value="{$_U.userinfo_result.tel2}" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">第三联系人手机：</div>
			<div class="c">
				<input type="text" size="25" name="phone2" value="{$_U.userinfo_result.phone2}" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">第四联系人姓名：</div>
			<div class="c">
				<input type="text" size="25" name="linkman3" value="{$_U.userinfo_result.linkman3}" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">第四联系人关系：</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&name=relation3&nid=user_relation&value={$_U.userinfo_result.relation3}"></script> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">第四联系人电话：</div>
			<div class="c">
				<input type="text" size="25" name="tel3" value="{$_U.userinfo_result.tel3}" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">第四联系人手机：</div>
			<div class="c">
				<input type="text" size="25" name="phone3" value="{$_U.userinfo_result.phone3}" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">MSN：</div>
			<div class="c">
				<input type="text" size="25" name="msn" value="{$_U.userinfo_result.msn}" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">QQ：</div>
			<div class="c">
				<input type="text" size="25" name="qq" value="{$_U.userinfo_result.qq}" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">旺旺：</div>
			<div class="c">
				<input type="text" size="25" name="wangwang" value="{$_U.userinfo_result.wangwang}" />
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