<form action="" name="form1" method="post" >

<div class="user_help">请填写您工作经历</div>
		<form action="" method="post">
		<div class="user_right_border">
			<div class="l">个人能力：</div>
			<div class="c">
				<textarea rows="7" cols="50" name="ability">{$_U.userinfo_result.ability}</textarea><br />（如电脑能力、组织协调能力或其他） 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">个人爱好：</div>
			<div class="c">
				<textarea rows="7" cols="50" name="interest">{$_U.userinfo_result.interest}</textarea><br />（突出自己的个性，工作态度或他人对自己的评价等）
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">其他说明：</div>
			<div class="c">
				<textarea rows="7" cols="50" name="others">{$_U.userinfo_result.others}</textarea><br />
				
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