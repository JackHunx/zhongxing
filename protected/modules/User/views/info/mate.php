<form action="" name="form1" method="post" >

<div class="user_help">请填写您联系方式</div>
		<form action="" method="post">
		
		<div class="user_right_border">
			<div class="l">配偶姓名：</div>
			<div class="c">
				<input type="text" size="25" name="mate_name" value="{$_U.userinfo_result.mate_name}" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">每月薪金：</div>
			<div class="c">
				<input type="text" size="25" name="mate_salary" value="{$_U.userinfo_result.mate_salary}" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">移动电话：</div>
			<div class="c">
				<input type="text" size="25" name="mate_phone" value="{$_U.userinfo_result.mate_phone}" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">单位电话：</div>
			<div class="c">
				<input type="text" size="25" name="mate_tel" value="{$_U.userinfo_result.mate_tel}" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">工作单位：</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&name=mate_type&nid=user_company_industry&value={$_U.userinfo_result.mate_type}"></script> 
			</div>
		</div>
		
		
		<div class="user_right_border">
			<div class="l">职位：</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&name=mate_office&nid=user_company_office&value={$_U.userinfo_result.mate_office}"></script> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">单位地址：</div>
			<div class="c">
				<input type="text" size="25" name="mate_address" value="{$_U.userinfo_result.mate_address}" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">月收入：</div>
			<div class="c">
				<input type="text" size="25" name="mate_income" value="{$_U.userinfo_result.mate_income}" />
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