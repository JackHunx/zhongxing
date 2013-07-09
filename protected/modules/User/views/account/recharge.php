<!--账号充值 开始-->
		{elseif $_U.query_type=="recharge_new"}
		<div class="user_help">{$_G.system.con_webname}禁止信用卡套现、虚假交易等行为,一经发现将予以处罚,包括但不限于：限制收款、冻结账户、永久停止服务,并有可能影响相关信用记录。
</div>
		<div class="user_right_border">
			<div class="l">真实姓名：</div>
			<div class="c">
				{$_G.user_result.realname}
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">账号：</div>
			<div class="c">
				{$_G.user_result.email}
			</div>
		</div>
		<form action="" method="post" name="form1"  onsubmit = "return check();" >
		<div id="returnpay">
		<div class="user_right_border">
			<div class="l">充值方式：</div>
			<div class="c">
				<input type="radio" name="type"  id="type"  class="input_border" checked="checked" onclick="change_type(1)" value="1"  /> 网上充值 <input type="radio" name="type"  id="type" class="input_border"  value="2"  onclick="change_type(2)" /> 线下充值 
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">充值金额：</div>
			<div class="c">
				<input type="text" name="money"  class="input_border" value="" size="10" onkeyup="commit(this);" maxlength="9" /> 元 <span id="realacc">实际入账：，<font color="#FF0000" id="real_money">0</font> 元</span>
			</div>
		</div>
		<div id="type_net">
			<div class="user_right_border">
				<div class="l">充值类型：</div>
				<div class="c">
		
				{foreach from=$_U.account_payment_list item="var"}
					{if $var.nid!="offline"}
					<input type="radio" name="payment1"  class="input_border" checked="checked" value="{$var.id}" id="payment1"  /> {$var.name} <input type="hidden" name="payname{$var.id}" value="{$var.name}" />({$var.description}) <br />
					{/if}
					{/foreach}  
				</div>
			</div>
		</div>
		
		<div id="type_now" class="dishide">
			<div class="user_right_border">
				<div class="l">充值银行：</div>
				<div class="c">
					{foreach from=$_U.account_payment_list item="var"}
					{if $var.nid=="offline"}
					<input type="radio" name="payment2"  class="input_border" value="{$var.id}"  />{$var.name}  <br /><font color="#FF0000">{$var.description}</font> <br />
					{/if}
					{/foreach}
				</div>
			</div>
			<div class="user_right_border">
				<div class="l">账单流水号：</div>
				<div class="c">
					<input type="text" name="remark"  class="input_border" value="" size="30" />
				</div>
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">验证码：</div>
			<div class="c">
				<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3"/>&nbsp;<?php  $this->widget('CCaptcha',array('showRefreshButton'=>false,'clickableImage'=>true,'imageOptions'=>array('alt'=>'点击换图','title'=>'点击换图','style'=>'cursor:pointer'))); ?>
			</div>
		</div>
		<div class="user_right_border">
			<div class="l"></div>
			<div class="c">
				<input type="submit" name="name"  value="确认提交" size="30" id="submitsubmit" />       
                 <input   type="button"   value="刷新"   name="refresh"   onclick= "window.location.reload() ">           
			</div>
		</div>
		</form>
			
	
		</div>
	
		{literal}
		
		<script>
		function check(){
			document.getElementById("submitsubmit").disabled = true;
			aa = $("input[name=type][checked]").val();
			if(aa == 2){
				//if (!ctype()){
					//alert('请选择充值的银行');
				//return false;
				//}
			}
		}
			function change_type(type){
				if (type==2){
					$("#type_net").addClass("dishide");
					$("#type_now").removeClass();
					$("#realacc").hide();
				}else{
					$("#type_now").addClass("dishide");
					$("#type_net").removeClass();
					
					$("#realacc").show();
				}
				
			}
		function payment (){
	 		var type = GetRadioValue("type");
			if (type==1){
				$("#returnpay").html("<font color='red'>请到打开的新页面充值</font>");
				
			}
			
		}
		function ctype(){
		var resualt=false;
		
			alert(document.form1.payment2.length);
			for(var i=0;i<document.form1.payment2.length;i++)
			{
				
				if(document.form1.payment2[i].checked)
				{
				  resualt=true;
				}
			}
			return resualt;
		}
        function commit(obj) {
            if (parseFloat(obj.value) > 0 ) 
            {
//                var realMoney = Math.round(parseFloat(obj.value)) / 100;

//                if (realMoney > 50) realMoney = 50;

//                document.getElementById("hspanReal").innerText = Math.round(parseFloat(obj.value)*10)/10 - realMoney;
                var realMoney=parseFloat(obj.value);
                if(realMoney>=5000)
                {
                    document.getElementById("real_money").innerText = realMoney - 0;
                }
                else 
                {
                    document.getElementById("real_money").innerText = parseInt(realMoney*1*100)/100;
                }
            }else{
				 var realMoney=parseFloat(obj.value);
                 document.getElementById("real_money").innerText = realMoney ;
			}
        }
    </script>
		{/literal}
		<div class="user_right_foot">
		* 温馨提示：网上银行充值过程中请耐心等待,充值成功后，请不要关闭浏览器,充值成功后返回{$_G.system.con_webname},充值金额才能打入您的帐号。如有问题,请与我们联系
		</div>
		
		<!--账号充值 结束-->