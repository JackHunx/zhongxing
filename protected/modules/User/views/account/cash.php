<!--提现 开始-->
		{elseif $_U.query_type=="cash_new"}
		<div class="user_help">注：1、请输入您要取出金额,我们将在1至3个工作日(国家节假日除外)之内将钱转入您网站上填写的银行帐号。 <br />
			  2、如你急需要把钱转到你的帐号或者24小时之内网站未将钱转入到你的银行帐号,请联系客服中心。 <br />
			  3、确保您的银行帐号的姓名和您的网站上的真实姓名一致。 <br />
			  4、在钱打到您帐号时会发一封站内信通知你。 <br />
			  5、每笔提现金额至少3元以上。 <br />
			  6、每笔提现金额最高不能超过49980元以上。 <br />
			  7、您目前能提取的最高额度是<font color="#FF0000">{if $_G.user_cache.use_money>49980}49980{else}{$_G.user_cache.use_money}{/if}元</font>。 <br />
		</div>
		<form action="" method="post" onsubmit="return check_form()" name="form1">
		<div class="user_right_border">
			<div class="l">真实姓名：</div>
			<div class="c">
				{$_G.user_result.realname}
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">账户余额：</div>
			<div class="c">
				{$_G.user_result.use_money|default:0}元
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">可用余额：</div>
			<div class="c">
				{$_G.user_result.use_money|default:0}元
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">冻结总额：</div>
			<div class="c">
				{$_G.user_result.no_use_money|default:0}元
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">提现的银行：</div>
			<div class="c">
				{$_U.account_bank_result.bank|linkage} {$_U.account_bank_result.branch} {$_U.account_bank_result.account} 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">交易密码：</div>
			<div class="c">
				{if $_U.account_bank_result.paypassword==""}<a href="{$_U.query_url}&q=code/user/paypwd"><font color="#FF0000">请先设置一个支付密码</font></a>{else}<input type="password" name="paypassword" />{/if}
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">提现金额：</div>
			<div class="c">
				<!--<input type="text" name="money" onkeyup="value=value.replace(/[^\d]/g,'');" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"/>大于10元小于49980元-->
				<input type="text" name="money"   />大于10元小于49980元

			</div>
		</div>
		<div class="user_right_border">
			<div class="l">验证码：</div>
			<div class="c">
				<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3"/>&nbsp;<img src="plugins/index.php?q=imgcode" alt="点击刷新" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
			</div>
		</div>
		<div class="user_right_border">
			<div class="l"></div>
			<div class="c">
				<input type="hidden" name="user_id" value="{$_G.user_id}" />
				<input type="submit" name="name"  value="确认提交" size="30" id="submitsubmit1" /> 
                <input   type="button"   value="刷新"   name="refresh"   onclick= "window.location.reload() ">
			</div>
		</div>
		</form>
		<div class="user_right_foot">
		* 温馨提示：禁止信用卡套现
		</div>
		
<script>
var use_money = {$_G.user_result.use_money|default:0};
{literal}
function check_form(){
	document.getElementById("submitsubmit1").disabled = true;
	 var frm = document.forms['form1'];
	 var paypassword = frm.elements['paypassword'].value;
	 var money = frm.elements['money'].value;
	 var errorMsg = '';
	  if (paypassword.length == 0 ) {
		errorMsg += '请输入您的交易密码' + '\n';
	  }
	  if (money.length == 0 ) {
		errorMsg += '请输入你的提现金额' + '\n';
	  }
	 if (money <10 || money >49980) {
		errorMsg += '提现金额要大于10元少于49980' + '\n';
	  }

	 if (money >use_money) {
		errorMsg += '您的提现金额大于现有的可用余额' + '\n';
	  }
	  if (errorMsg.length > 0){
		alert(errorMsg); return false;
	  } else{  
		return true;
	  }
}
</script>
{/literal}
		<!--提现 结束-->