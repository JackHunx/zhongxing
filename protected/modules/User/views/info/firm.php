<form action="" name="form1" method="post" >

<!--私营业主资料  开始-->
		{elseif $_U.query_type=="firm"}
		<div class="user_help">请填写您个人业主资料</div>
		 <form action="" method="post">
			 <div class="user_right_border">
				<div class="l">私营企业类型：</div>
				<div class="c">
					<script src="/plugins/index.php?q=linkage&name=private_type&nid=user_company_industry&value="></script> 
				</div>
			</div>
			
			 <div class="user_right_border">
				<div class="l">成立日期：</div>
				<div class="c">
					<input type="text" size="25" name="private_date" value="{$_U.userinfo_result.private_date}" onclick="change_picktime()"/> 
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">经营场所：</div>
				<div class="c">
					<input type="text" size="25" name="private_place" value="{$_U.userinfo_result.private_place}" /> 
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">租金：</div>
				<div class="c">
					<input type="text" size="25" name="private_rent" value="{$_U.userinfo_result.private_rent}" /> 元
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">租期：</div>
				<div class="c">
					<input type="text" size="25" name="private_term" value="{$_U.userinfo_result.private_term}" /> 月
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">税务编号：</div>
				<div class="c">
					<input type="text" size="25" name="private_taxid" value="{$_U.userinfo_result.private_commerceid}" /> 
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">工商登记号：</div>
				<div class="c">
					<input type="text" size="25" name="private_commerceid" value="{$_U.userinfo_result.private_commerceid}" /> 
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">全年盈利/亏损额：</div>
				<div class="c">
					<input type="text" size="25" name="private_income" value="{$_U.userinfo_result.private_income}" /> 元（年度）
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">雇员人数：</div>
				<div class="c">
					<input type="text" size="25" name="private_employee" value="{$_U.userinfo_result.private_employee}" /> 人
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
		
		<!--私营业主资料  结束-->


</form>