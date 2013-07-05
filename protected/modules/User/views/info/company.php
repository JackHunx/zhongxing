<form action="" name="form1" method="post" >

<!--单位资料 开始-->
		{elseif $_U.query_type=="company"}
		<div class="user_help">请填写你个人的最近的单位资料</div>
		 <form action="" method="post">
		<div class="user_right_border">
			<div class="l">单位名称：</div>
			<div class="c">
				<input type="text" size="25" name="company_name" value="{$_U.userinfo_result.company_name}" /> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">单位性质：</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&name=company_type&nid=user_company_type&value={$_U.userinfo_result.company_type}"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">单位行业：</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&name=company_industry&nid=user_company_industry&value={$_U.userinfo_result.company_industry}"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">工作级别：</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&name=company_jibie&nid=user_company_jibie&value={$_U.userinfo_result.company_jibie}"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">职 位：</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&name=company_office&nid=user_company_office&value={$_U.userinfo_result.company_office}"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">服务时间：</div>
			<div class="c">
				<input type="text" size="25" name="company_worktime1" value="{$_U.userinfo_result.company_worktime1}" onclick="change_picktime()" />  到 <input type="text" size="25" name="company_worktime2" value="{$_U.userinfo_result.company_worktime2}" onclick="change_picktime()" /> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">工作年限：</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&name=company_workyear&nid=user_company_workyear&value={$_U.userinfo_result.company_workyear}"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">工作电话：</div>
			<div class="c">
				<input type="text" size="25" name="company_tel" value="{$_U.userinfo_result.company_tel}" /> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">公司地址：</div>
			<div class="c">
				<input type="text" size="25" name="company_address" value="{$_U.userinfo_result.company_address}" /> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">公司网站：</div>
			<div class="c">
				<input type="text" size="25" name="company_weburl" value="{$_U.userinfo_result.company_weburl}" /> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">备注说明：</div>
			<div class="c">
				<textarea  cols="50" rows="6"name="company_reamrk"  >{$_U.userinfo_result.company_reamrk}</textarea>
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