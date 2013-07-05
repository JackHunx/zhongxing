<form action="" name="form1" method="post" >
<div class="user_help">请填写你个人的房产资料相关信息</div>
		
		<div class="user_right_border">
				<div class="l">房产地址：</div>
				<div class="c">
					<input type="text" size="30" name="house_address" value="{$_U.userinfo_result.house_address}" /> 
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">建筑面积：</div>
				<div class="c">
					<input type="text" size="25" name="house_area" value="{$_U.userinfo_result.house_area}"/> 
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">建筑年份：</div>
				<div class="c">
					<input type="text" size="25" name="house_year" value="{$_U.userinfo_result.house_year}" onclick="change_picktime()" /> 
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">供款状况：</div>
				<div class="c">
					<input type="text" size="25" name="house_status" value="{$_U.userinfo_result.house_status}" /> 元
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">所有权人1：</div>
				<div class="c">
					<input type="text" size="25" name="house_holder1" value="{$_U.userinfo_result.house_holder1}" /> 产权份额：<input type="text" size="25" name="house_right1" value="{$_U.userinfo_result.house_right1}" /> 
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">所有权人2：</div>
				<div class="c">
					<input type="text" size="25" name="house_holder2" value="{$_U.userinfo_result.house_holder2}" /> 产权份额：<input type="text" size="25" name="house_right2" value="{$_U.userinfo_result.house_right2}" /> 
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="e">若房产尚在按揭中, 请填写</div>
				<div class="c">
					贷款年限：<input type="text" size="10" name="house_loanyear" value="{$_U.userinfo_result.house_loanyear}" />每月供款：<input type="text" size="10" name="house_loanprice" value="{$_U.userinfo_result.house_loanprice}" /> 元
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">尚欠贷款余额：</div>
				<div class="c">
					<input type="text" size="25" name="house_balance" value="{$_U.userinfo_result.house_balance}" /> 元
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">按揭银行：</div>
				<div class="c">
					<input type="text" size="25" name="house_bank" value="{$_U.userinfo_result.house_bank}" /> 
				</div>
			</div>
		
		{literal}
		<script>
			function change_type(type){
				if (type==2){
					$("#type_net").addClass("dishide");
					$("#type_now").removeClass();
				}else{
					$("#type_now").addClass("dishide");
					$("#type_net").removeClass();
				}
				
			}
		
		</script>
		{/literal}
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