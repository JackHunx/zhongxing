<form action="" name="form1" method="post" >

<!--��λ���� ��ʼ-->
		{elseif $_U.query_type=="company"}
		<div class="user_help">����д����˵�����ĵ�λ����</div>
		 <form action="" method="post">
		<div class="user_right_border">
			<div class="l">��λ���ƣ�</div>
			<div class="c">
				<input type="text" size="25" name="company_name" value="{$_U.userinfo_result.company_name}" /> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">��λ���ʣ�</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&name=company_type&nid=user_company_type&value={$_U.userinfo_result.company_type}"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">��λ��ҵ��</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&name=company_industry&nid=user_company_industry&value={$_U.userinfo_result.company_industry}"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">��������</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&name=company_jibie&nid=user_company_jibie&value={$_U.userinfo_result.company_jibie}"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">ְ λ��</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&name=company_office&nid=user_company_office&value={$_U.userinfo_result.company_office}"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">����ʱ�䣺</div>
			<div class="c">
				<input type="text" size="25" name="company_worktime1" value="{$_U.userinfo_result.company_worktime1}" onclick="change_picktime()" />  �� <input type="text" size="25" name="company_worktime2" value="{$_U.userinfo_result.company_worktime2}" onclick="change_picktime()" /> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">�������ޣ�</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&name=company_workyear&nid=user_company_workyear&value={$_U.userinfo_result.company_workyear}"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">�����绰��</div>
			<div class="c">
				<input type="text" size="25" name="company_tel" value="{$_U.userinfo_result.company_tel}" /> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">��˾��ַ��</div>
			<div class="c">
				<input type="text" size="25" name="company_address" value="{$_U.userinfo_result.company_address}" /> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">��˾��վ��</div>
			<div class="c">
				<input type="text" size="25" name="company_weburl" value="{$_U.userinfo_result.company_weburl}" /> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">��ע˵����</div>
			<div class="c">
				<textarea  cols="50" rows="6"name="company_reamrk"  >{$_U.userinfo_result.company_reamrk}</textarea>
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
		
		<!--��λ���� ����-->


</form>