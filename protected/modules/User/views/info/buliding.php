<form action="" name="form1" method="post" >
<div class="user_help">����д����˵ķ������������Ϣ</div>
		
		<div class="user_right_border">
				<div class="l">������ַ��</div>
				<div class="c">
					<input type="text" size="30" name="house_address" value="{$_U.userinfo_result.house_address}" /> 
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">���������</div>
				<div class="c">
					<input type="text" size="25" name="house_area" value="{$_U.userinfo_result.house_area}"/> 
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">������ݣ�</div>
				<div class="c">
					<input type="text" size="25" name="house_year" value="{$_U.userinfo_result.house_year}" onclick="change_picktime()" /> 
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">����״����</div>
				<div class="c">
					<input type="text" size="25" name="house_status" value="{$_U.userinfo_result.house_status}" /> Ԫ
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">����Ȩ��1��</div>
				<div class="c">
					<input type="text" size="25" name="house_holder1" value="{$_U.userinfo_result.house_holder1}" /> ��Ȩ�ݶ<input type="text" size="25" name="house_right1" value="{$_U.userinfo_result.house_right1}" /> 
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">����Ȩ��2��</div>
				<div class="c">
					<input type="text" size="25" name="house_holder2" value="{$_U.userinfo_result.house_holder2}" /> ��Ȩ�ݶ<input type="text" size="25" name="house_right2" value="{$_U.userinfo_result.house_right2}" /> 
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="e">���������ڰ�����, ����д</div>
				<div class="c">
					�������ޣ�<input type="text" size="10" name="house_loanyear" value="{$_U.userinfo_result.house_loanyear}" />ÿ�¹��<input type="text" size="10" name="house_loanprice" value="{$_U.userinfo_result.house_loanprice}" /> Ԫ
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">��Ƿ������</div>
				<div class="c">
					<input type="text" size="25" name="house_balance" value="{$_U.userinfo_result.house_balance}" /> Ԫ
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">�������У�</div>
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
				<input type="submit" name="name"  value="ȷ���ύ" size="30" /> 
			</div>
		</div>
		
		<div class="user_right_foot">
		* ��ܰ��ʾ�����ǽ������е���Ϣ���б���
		</div>
		



</form>