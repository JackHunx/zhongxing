<?php
//no验证
if($model->avatar_status==0)
{
echo <<<ETO
<div class="user_right_main">
		
				<!--修改登录密码 开始-->
				
		<form action="" name="form1" method="post" onsubmit="return check_form()" enctype="multipart/form-data">
		<div class="user_help">注意：请认真填写以下的内容，一旦通过实名认证以下信息将不能修改。认证费用国家统一5元!（应广大用户要求，现认证由网站垫付。）</div>
		<div class="user_right_border">
			<div class="l">用户名：</div>
			<div class="c">
				{$model->username} 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">真实姓名：</div>
			<div class="c">
				<input type="text" name="realname" value="{$model->realname}"><font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">性 别 ：</div>
			<div class="c">
				<input type="radio" name="sex" value="1" checked="checked">男 <input type="radio" name="sex" value="2">女 <font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">民 族：</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&amp;nid=nation&amp;name=nation&amp;value="></script><select name="nation" id="nation"><option value="329">汉族</option><option value="330">蒙古族</option><option value="331">满族</option><option value="332">朝鲜族</option><option value="333">赫哲族</option><option value="334">达斡尔族</option><option value="335">鄂温克族</option><option value="336">鄂伦春族</option><option value="337">回族</option><option value="338">东乡族</option><option value="339">土族</option><option value="340">撒拉族</option><option value="341">保安族</option><option value="342">裕固族</option><option value="343">维吾尔族</option><option value="344">哈萨克族</option><option value="345">柯尔克孜族</option><option value="346">锡伯族</option><option value="347">塔吉克族</option><option value="348">乌孜别克族</option><option value="349">俄罗斯族</option><option value="350">塔塔尔族</option><option value="351">藏族</option><option value="352">门巴族</option><option value="353">珞巴族</option><option value="354">羌族</option><option value="355">彝族</option><option value="356">白族</option><option value="357">哈尼族</option><option value="358">傣族</option><option value="359">傈僳族</option><option value="360">佤族</option><option value="361">拉祜族</option><option value="362">纳西族</option><option value="363">景颇族</option><option value="364">布朗族</option><option value="365">阿昌族</option><option value="366">普米族</option><option value="367">怒族</option><option value="368">德昂族</option><option value="369">独龙族</option><option value="370">基诺族</option><option value="371">苗族</option><option value="372">布依族</option><option value="373">侗族</option><option value="374">水族</option><option value="375">仡佬族</option><option value="376">壮族</option><option value="377">瑶族</option><option value="378">仫佬族</option><option value="379">毛南族</option><option value="380">京族</option><option value="381">土家族</option><option value="382">黎族</option><option value="383">畲族</option><option value="384">高山族</option></select> <font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">出生日期：</div>
			<div class="c">
				<input type="text" name="birthday" value="" onclick="change_picktime()">  <font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">证件类别：</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&amp;nid=card_type&amp;name=card_type&amp;isid=false&amp;value="></script><select name="card_type" id="card_type"><option value="1">身份证</option><option value="2">军官证</option><option value="3">台胞证</option></select> <font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">证件号码：</div>
			<div class="c">
				<input type="text" name="card_id" value="">  <font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">籍贯：</div>
			<div class="c">
				<script src="/plugins/index.php?q=area&amp;area="></script><select id="province" name="province"><option value="">请选择</option><option value="1">北京</option><option value="21">天津</option><option value="40">上海</option><option value="61">重庆</option><option value="102">河北省</option><option value="297">山西省</option><option value="439">内蒙古区</option><option value="561">辽宁省</option><option value="690">吉林省</option><option value="768">黑龙江省</option><option value="924">江苏省</option><option value="1057">浙江省</option><option value="1170">安徽省</option><option value="1310">福建省</option><option value="1414">江西省</option><option value="1536">山东省</option><option value="1711">河南省</option><option value="1905">湖北省</option><option value="2034">湖南省</option><option value="2184">广东省</option><option value="2403">广西区</option><option value="2541">海南省</option><option value="2570">四川省</option><option value="2791">贵州省</option><option value="2892">云南省</option><option value="3046">西藏区</option><option value="3128">陕西省</option><option value="3256">甘肃省</option><option value="3369">青海省</option><option value="3422">宁夏区</option><option value="3454">新疆区</option><option value="3571">台湾省</option><option value="3573">香港特区</option><option value="3575">澳门特区</option></select>&nbsp;<select id="city" name="city"><option value="">请选择</option></select>&nbsp;<select id="area" name="area"><option value="">请选择</option></select>&nbsp; <font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">身份证正面上传：</div>
			<div class="c">
				<input type="file" name="card_pic1" size="20" class="input_border">   <font color="#FF0000">*</font> 
			</div>
		</div>
		
		
	<div class="user_right_border">
			<div class="l">身份证背面上传：</div>
			<div class="c">
				<input type="file" name="card_pic2" size="20" class="input_border">   <font color="#FF0000">*</font> 
			</div>
		</div>
		
		
		<div class="user_right_border">
			<div class="e"></div>
			<div class="c">
				<input type="submit" name="name" value="确认提交" size="30"> 			</div>
		</div>
		</form>		<div class="user_right_foot">
		* 温馨提示：我们将严格对用户的所有资料进行保密
		</div>
		<script>
			function check_form(){
				 var frm = document.forms['form1'];
				 var realname = frm.elements['realname'].value;
				 var birthday = frm.elements['birthday'].value;
				 var card_id = frm.elements['card_id'].value;
				 var area = frm.elements['area'].value;
				 var errorMsg = '';
				  if (realname.length == 0 ) {
					errorMsg += '* 真实姓名不能为空' + '\n';
				  }
				  if (birthday.length == 0 ) {
					birthday += '* 生日不能为空' + '\n';
				  }
				  if (card_id.length == 0 ) {
					errorMsg += '* 证件号码不能为空' + '\n';
				  }
				  if (area.length == 0 ) {
					errorMsg += '* 请填写籍贯' + '\n';
				  }
				   
				  if (errorMsg.length > 0){
					alert(errorMsg); return false;
				  } else{  
					return true;
				}
			
			}
		</script>
		<!--修改登录密码 结束-->
		
		</div>
ETO;
}else{
    echo <<<ETO
    
    <div class="user_right_main">
		
				<!--修改登录密码 开始-->
		 
		<div class="user_help">注意：您已经通过了实名认证，如要修改请跟客服联系。</div>
		<div class="user_right_border">
			<div class="l">用户名：</div>
			<div class="c">
				admin 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">真实姓名：</div>
			<div class="c">
				系统管理员 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">性 别 ：</div>
			<div class="c">
				女 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">民 族：</div>
			<div class="c">
							</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">出生日期：</div>
			<div class="c">
							</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">证件类别：</div>
			<div class="c">
				身份证			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">证件号码：</div>
			<div class="c">
							</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">籍贯：</div>
			<div class="c">
							</div>
		</div>
		<div class="user_right_border">
			<div class="l">身份证图片：</div>
			<div class="c">
				<a href="/plugins/index.php?q=imgurl&amp;url=QGltZ3VybEA=" target="_blank">正面</a> | <a href="/plugins/index.php?q=imgurl&amp;url=QGltZ3VybEA=" target="_blank">反面</a>
			</div>
		</div>
				<div class="user_right_foot">
		* 温馨提示：我们将严格对用户的所有资料进行保密
		</div>
		<script>
			function check_form(){
				 var frm = document.forms['form1'];
				 var realname = frm.elements['realname'].value;
				 var birthday = frm.elements['birthday'].value;
				 var card_id = frm.elements['card_id'].value;
				 var area = frm.elements['area'].value;
				 var errorMsg = '';
				  if (realname.length == 0 ) {
					errorMsg += '* 真实姓名不能为空' + '\n';
				  }
				  if (birthday.length == 0 ) {
					birthday += '* 生日不能为空' + '\n';
				  }
				  if (card_id.length == 0 ) {
					errorMsg += '* 证件号码不能为空' + '\n';
				  }
				  if (area.length == 0 ) {
					errorMsg += '* 请填写籍贯' + '\n';
				  }
				   
				  if (errorMsg.length > 0){
					alert(errorMsg); return false;
				  } else{  
					return true;
				}
			
			}
		</script>
		<!--修改登录密码 结束-->
		
		</div>
    
ETO;
}

//
 