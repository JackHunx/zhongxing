<form action="" name="form1" method="post" >

<div class="user_help">����д����ϵ��ʽ</div>
		<form action="" method="post">
		
		<div class="user_right_border">
			<div class="l">��ż������</div>
			<div class="c">
				<input type="text" size="25" name="mate_name" value="{$_U.userinfo_result.mate_name}" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">ÿ��н��</div>
			<div class="c">
				<input type="text" size="25" name="mate_salary" value="{$_U.userinfo_result.mate_salary}" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">�ƶ��绰��</div>
			<div class="c">
				<input type="text" size="25" name="mate_phone" value="{$_U.userinfo_result.mate_phone}" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">��λ�绰��</div>
			<div class="c">
				<input type="text" size="25" name="mate_tel" value="{$_U.userinfo_result.mate_tel}" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">������λ��</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&name=mate_type&nid=user_company_industry&value={$_U.userinfo_result.mate_type}"></script> 
			</div>
		</div>
		
		
		<div class="user_right_border">
			<div class="l">ְλ��</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&name=mate_office&nid=user_company_office&value={$_U.userinfo_result.mate_office}"></script> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">��λ��ַ��</div>
			<div class="c">
				<input type="text" size="25" name="mate_address" value="{$_U.userinfo_result.mate_address}" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">�����룺</div>
			<div class="c">
				<input type="text" size="25" name="mate_income" value="{$_U.userinfo_result.mate_income}" />
			</div>
		</div>
			
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