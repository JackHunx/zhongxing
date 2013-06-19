
<form action="" method="post" name="formUser" onsubmit="return userReg();">
		       <table width="96%" border="0" align="center" cellpadding="0" cellspacing="0" class="zc_tab">
  <tbody><tr>
    <td width="28%" align="center" valign="middle">邮&nbsp;&nbsp;&nbsp;&nbsp;箱：</td>
    <td width="67%" valign="middle"> <input maxlength="32" onblur="checkEmail(this.value);" class="in_text" name="User[email]" id="email">
				  <div class="user_action_error" id="email_notice"><font color="#999999">请尽量不使用QQ邮箱(认证用)</font></div></td>
  </tr>
  <tr>
    <td align="center" valign="middle">用 户 名：</td>
    <td valign="middle"><input maxlength="15" onblur="checkUsername(this.value);" class="in_text" name="User[username]" id="username">
				  <div class="user_action_error" id="username_notice"><font color="#999999">请输入您网站的用户名</font></div></td>
  </tr>
  <tr>
    <td align="center" valign="middle">密&nbsp;&nbsp;&nbsp;&nbsp;码：</td>
    <td valign="middle"><input class="in_text" onblur="checkPassword(this.value);" type="password" maxlength="16" name="User[password]" id="password">
				 <div class="user_action_error" id="password_notice"><font color="#999999">请输入6到16位密码</font></div></td>
  </tr>
  <tr>
    <td align="center" valign="middle">确认密码：</td>
    <td valign="middle"><input class="in_text" onblur="checkConformPassword(this.value);" type="password" maxlength="16" name="confirm_password" id="conform_password">
				 <div class="user_action_error" id="conform_password_notice"><font color="#999999">请重复输入上面的密码</font></div></td>
  </tr>
  <tr>
    <td align="center" valign="middle">真实姓名：</td>
    <td valign="middle"> <input class="in_text" onblur="checkRealname(this.value);" type="text" name="User[realname]" id="realname">
				  <div class="user_action_error" id="realname_notice"><font color="#999999">请填写你的真实姓名</font>
				  
  <input name="invite_userid" type="hidden" value="">
  <input name="type_id" type="hidden" value="2"></div></td>
  </tr>
  <tr>
    <td colspan="2" align="right" valign="middle">
	    <div class="yinsi">
		<b>*</b> 我们重视您的隐私，您所填写的信息仅为了您在本站的方便
使用，我们不会泄露您的任何信息给任何第三方。		</div>	</td>
    </tr>
   <tr>
    <td colspan="2" align="center" valign="middle"><br><input name="Submit" type="submit" value="注册" width="170" height="29" id="submit" class="reg_button" style="cursor: pointer" align="absmiddle" disabled="disabled"></td>
    </tr>
</tbody></table>
</form>