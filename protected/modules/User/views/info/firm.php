<form action="" name="form1" method="post" >

<!--˽Ӫҵ������  ��ʼ-->
		{elseif $_U.query_type=="firm"}
		<div class="user_help">����д������ҵ������</div>
		 <form action="" method="post">
			 <div class="user_right_border">
				<div class="l">˽Ӫ��ҵ���ͣ�</div>
				<div class="c">
					<script src="/plugins/index.php?q=linkage&name=private_type&nid=user_company_industry&value="></script> 
				</div>
			</div>
			
			 <div class="user_right_border">
				<div class="l">�������ڣ�</div>
				<div class="c">
					<input type="text" size="25" name="private_date" value="{$_U.userinfo_result.private_date}" onclick="change_picktime()"/> 
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">��Ӫ������</div>
				<div class="c">
					<input type="text" size="25" name="private_place" value="{$_U.userinfo_result.private_place}" /> 
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">���</div>
				<div class="c">
					<input type="text" size="25" name="private_rent" value="{$_U.userinfo_result.private_rent}" /> Ԫ
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">���ڣ�</div>
				<div class="c">
					<input type="text" size="25" name="private_term" value="{$_U.userinfo_result.private_term}" /> ��
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">˰���ţ�</div>
				<div class="c">
					<input type="text" size="25" name="private_taxid" value="{$_U.userinfo_result.private_commerceid}" /> 
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">���̵ǼǺţ�</div>
				<div class="c">
					<input type="text" size="25" name="private_commerceid" value="{$_U.userinfo_result.private_commerceid}" /> 
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">ȫ��ӯ��/����</div>
				<div class="c">
					<input type="text" size="25" name="private_income" value="{$_U.userinfo_result.private_income}" /> Ԫ����ȣ�
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">��Ա������</div>
				<div class="c">
					<input type="text" size="25" name="private_employee" value="{$_U.userinfo_result.private_employee}" /> ��
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
		
		<!--˽Ӫҵ������  ����-->


</form>