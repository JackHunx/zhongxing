<form action="" name="form1" method="post" >

<div class="user_help">����д����������</div>
		<form action="" method="post">
		<div class="user_right_border">
			<div class="l">���ѧ����</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&name=education_record&nid=user_education&value={$_U.userinfo_result.education_record}"></script> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">���ѧ��ѧУ��</div>
			<div class="c">
				<input type="text" size="25" name="education_school" value="{$_U.userinfo_result.education_school}" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">רҵ��</div>
			<div class="c">
				<input type="text" size="25" name="education_study" value="{$_U.userinfo_result.education_study}" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">ʱ�䣺</div>
			<div class="c">
				<input type="text" size="25" name="education_time1" value="{$_U.userinfo_result.education_time1}" onclick="change_picktime()" /> �� <input type="text" size="25" name="education_time2" value="{$_U.userinfo_result.education_time2}" onclick="change_picktime()" /> 
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