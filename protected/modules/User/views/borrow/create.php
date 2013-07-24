
<?php if(Yii::app()->user->id==null){?>
<script>
	alert("你还没有登录，请先登录");
	location.href='<?php echo Yii::app()->createUrl('site/login');?>';
</script>
<?php }?>
<?php if($user['real_status']!=1){?>
<script>
	alert("你还没通过实名认证，还不能发借款标");
	location.href='<?php echo Yii::app()->createUrl('User/validate/realname');?>';
</script>
<?php }?>
<?php if($user['credit']<30){?>
<script>
alert("您的信用积分还未到30分，请先上传资料认证");
location.href='<?php echo Yii::app()->createUrl('User/upload'); ?>';
</script>

<?php }?>




<?php if(!isset($_GET['type'])&&!isset($_GET['id'])){?>
<div class="wrap950 list_1">
	<div class="borrow_box">
		<div><strong>发布按月借款</strong></div>
		<div>按等额本息法进行计算</div>
		<div align="center"><a href="<?php echo Yii::app()->createUrl('User/borrow/create',array('type'=>'month')); ?>"><img src="<?php echo Yii::app()->baseUrl;?>/images/borrow_yue.jpg" align=""/></a></div>
	</div>
	
	<div class="borrow_box">
		<div><strong>发布按季借款</strong></div>
		<div>按等额本息法进行计算</div>
		<div align="center"><a href="<?php echo Yii::app()->createUrl('User/borrow/create',array('type'=>'month')); ?>"><img src="<?php echo Yii::app()->baseUrl;?>/images/borrow_ji.jpg" align=""/></div>
	</div>
	
	<div class="borrow_box">
		<div><strong>发布担保借款</strong></div>
		<div>按等额本息法进行计算</div>
		<div align="center"><a href="<?php echo Yii::app()->createUrl('User/borrow/create',array('type'=>'vouch')); ?>"><img src="<?php echo Yii::app()->baseUrl;?>/images/borrow_danbao.jpg" align=""/></a></div>
	</div>
</div>
<?php }else{?>


	<!--
	{if $_G.user_result.borrow_vouch==0}
	<script>
		alert("你没有权限发担保标，请跟客服联系");
		location.href='/borrow/index.html';
	</script>
	{/if}
	-->

	

<!--子栏目 开始-->
<div class="wrap950 header_site_sub">

</div>
<!--子栏目 结束-->
<form name="form1" method="post" action=""  enctype="multipart/form-data" onsubmit="return check_form();" >
<!--借款信息 开始-->
<div class="wrap950 list_1">
	<div class="title"><img src="<?php echo Yii::app()->baseUrl;?>/images/ico_4.gif"  /> 借款信息：</div>
	<div class="content">
		<div class="module_border">
			<div class="w">借款信息：</div>
			<div class="c">
				<script src="<?php echo Yii::app()->baseUrl;?>/index.php?r=getDropValue/drop&name=Borrow[use]&type=19&value=<?php echo $model->use;?>"></script>
			</div>
			<div class="sco" >说明借款成功后的具体用途。</div>
		</div>
		
		<div class="module_border">
			<div class="w">借款期限：</div>
			<div class="c">
				<script src="<?php echo Yii::app()->baseUrl;?>/index.php?r=getDropValue/drop&name=Borrow[time_limit]&type=20&value=<?php echo $model->time_limit;?>"></script>
				
			</div>
			<div class="sco" >借款成功后,打算以几个月的时间来还清贷款。</div>
		</div>
		
		<div class="module_border">
			<div class="w">还款方式：</div>
			<div class="c">
			<script src="<?php echo Yii::app()->baseUrl;?>/index.php?r=getDropValue/drop&name=Borrow[style]&type=21&value=<?php echo $model->style;?>"></script>
			</div>
			<div class="sco" >按月分期还款是指贷款者借款成功后，每月还本息。</div>
		</div>
		
		<div class="module_border">
			<div class="w">借贷总金额：</div>
			<div class="c">
					<input type="text" name="Borrow[account]"  id="account" value="<?php echo $model->account;?>" onkeyup="value=value.replace(/[^0-9]/g,'')" /> 
			</div>
			<div class="sco" >借款金额应在500元至500,000元之间。交易币种均为人民币。借款成功后, 借款2个月 ,收取当前借款金额{$_G.system.con_borrow_fee*100}%的管理费,借款三个月以上的每月增加0.4%管理费,冻结{$_G.system.con_exbaozhengjinbilv}%作为保证金,正常还款完后,网站解冻{$_G.system.con_exbaozhengjinbilv}%的保证金。</div>
		</div>
		
		<div class="module_border">
			<div class="w">年利率：</div>
			<div class="c">
				<input type="text" name="Borrow[apr]" value="<?php echo $model->apr;?>" onkeyup="value=value.replace(/[^0-9.]/g,'')" /> % 
			</div>
			<div class="sco" >1～6个月，借款标利率下限为{$_G.system.con_xiaxian16}%上限为{$_G.system.con_shangxian16}%，超过6个月～12个月借款标利率下限为{$_G.system.con_xiaxian612}%上限为{$_G.system.con_shangxian612}%
</div>
		</div>
		
		<div class="module_border">
			<div class="w">最低投标金额：</div>
			<div class="c">
				
				<script src="<?php echo Yii::app()->baseUrl;?>/index.php?r=getDropValue/drop&name=Borrow[lowest_account]&type=22&value=<?php echo $model->lowest_account;?>"></script>
			</div>
			<div class="sco" >允许投资者对一个借款标的投标总额的限制</div>
		</div>
		
		<div class="module_border">
			<div class="w">最多投标总额：</div>
			<div class="c">
			<script src="<?php echo Yii::app()->baseUrl;?>/index.php?r=getDropValue/drop&name=Borrow[most_account]&type=23&value=<?php echo $model->most_account;?>"></script>
			</div>
			<div class="sco" >允许投资者对一个借款标的投标总额的限制</div>
		</div>
		
		<div class="module_border">
			<div class="w">有效时间：</div>
			<div class="c">
			<script src="<?php echo Yii::app()->baseUrl;?>/index.php?r=getDropValue/drop&name=Borrow[valid_time]&type=24&value=<?php echo $model->valid_time;?>"></script>
			</div>
			<div class="sco" >设置此次借款融资的天数。融资进度达到100%后直接进行网站的复审</div>
		</div>
		
	</div>
	<div class="foot"></div>
</div>
<!--借款信息 结束-->


<!--投标奖励 开始-->
<div class="wrap950 list_1">
	<div class="title"><img src="<?php echo Yii::app()->baseUrl;?>/images/ico_4.gif"  /> 投标奖励：</div>
	<div class="content">
		<div class="module_border">
			<div class="w"><input type="radio" name="Borrow[award]" id="award" value="0" <?php echo ($model->award == 0|| $model->award="")?'checked="checked"':'';?> onclick="change_j(0)">不设置奖励</div>
			<div class="c">
			</div>
			<div class="sco" >如果您设置了奖励金额，将会冻结您帐户中相应的账户余额。如果要设置奖励，请确保您的帐户有足够 的账户余额。 </div>
		</div>
		
		<div class="module_border">
			<div class="w"><input type="radio" name="Borrow[award]" id="award" value="1" <?php echo $model->award==1 ?'checked="checked"':''; ?>  onclick="change_j(1)"/>按固定金额分摊奖励：</div>
			<div class="c">
				<input type="text" name="Borrow[part_account]" value="<?php echo $model->part_account;?>" size="5" <?php echo $model->part_account == ""? 'disabled="disabled"':"" ;?>/>元
			</div>
			<div class="sco" >不能低于5元,不能高于总标的金额的2%，且请保留到“元”为单位。这里设置本次标的要奖励给所有投标用户的总金额。 </div>
		</div>
		
		<div class="module_border">
			<div class="w"><input type="radio" name="Borrow[award]" id="award" value="2" <?php echo $model->award==1 ?'checked="checked"':''; ?> onclick="change_j(2)"/>按投标金额比例奖励：</div>
			<div class="c">
				<input type="text" name="Borrow[funds]" value="<?php echo $model->funds;?>" size="5" <?php echo $model->funds == ""? 'disabled="disabled"':"" ;?>/>%  
			</div>
			<div class="sco" >范围：0.1%~6% ，这里设置本次标的要奖励给所有投标用户的奖励比例。</div>
		</div>
		
		<div class="module_border">
			<div class="w"><input type="checkbox" name="Borrow[is_false]" value="1"<?php echo $model->is_false==1 ? 'checked="checked"':'disabled="disabled"';?>  {if $var.is_false!=1}disabled="disabled"{/if}/>标的失败时也同样奖励：</div>
			<div class="c">
				  
			</div>
			<div class="sco" >如果您勾选了此选项，到期未满标或复审失败时同样会奖励给投标用户。如果没有勾选，标的失败时会把奖励金额解冻回账户余额。 </div>
		</div>
	
	</div>
	<div class="foot"></div>
</div>
<!--投标奖励 结束-->


<?php if(isset($_GET['type'])&&$_GET['type']=='vouch'){?>
<!--担保奖励 开始-->
<div class="wrap950 list_1">
	<div class="title"><img src="<?php echo Yii::app()->baseUrl;?>/images/ico_4.gif"  /> 担保奖励：</div>
	<div class="content">
		<div class="module_border">
			<div class="w">担保比例：</div>
			<div class="c">
			<input name="Borrow[vouch_award]" type="text" value="<?php echo $model->vouch_award;?>" size="6" />%
			</div>
			<div class="sco" >担保奖励按照所要借款的百分比给担保人，比如借100，奖励是3%，担保人借出50，则奖励50*3%=1.5</div>
		</div>
		<div class="module_border">
			<div class="w">指定担保人：</div>
			<div class="c">
			<input name="Borrow[vouch_user]" type="text" value="<?php echo $model->vouch_user;?>" /><input name="Borrow[is_vouch]" type="hidden" value="1" />
			</div>
			<div class="sco" >指定多个担保人请用|隔开，为空表示所有人都可以担保</div>
		</div>
	</div>
	<div class="foot"></div>
</div>
<!--担保奖励 结束-->
<?php }?>

<!--帐户信息公开设置 开始-->
<div class="wrap950 list_1">
	<div class="title"><img src="<?php echo Yii::app()->baseUrl;?>/images/ico_4.gif"  /> 帐户信息公开设置：</div>
	<div class="content">
		<div class="module_border">
			<div class="w">公开我的帐户资金情况<input type="checkbox" name="Borrow[open_account]" value="1" checked="checked" disabled="disabled"/> </div>
			<div class="sco" >如果您勾上此选项，将会实时公开您帐户的：账户总额、可用余额、冻结总额。 </div>
		</div>
		
		<div class="module_border">
			<div class="w">公开我的借款资金情况<input type="checkbox" name="Borrow[open_borrow]" value="1" checked="checked" disabled="disabled"/></div>
			<div class="sco" >如果您勾上此选项，将会实时公开您帐户的：借款总额、已还款总额、未还款总额、迟还总额、逾期总额。</div>
		</div>
		
		<div class="module_border">
			<div class="w">公开我的投标资金情况<input type="checkbox" name="Borrow[open_tender]" value="1" accept="<?php echo $model->open_tender == 1 ?'checked="checked"':'';?>" /></div>
			<div class="sco" >如果您勾上此选项，将会实时公开您帐户的：投标总额、已收回总额、待收回总额。</div>
		</div>
		
		<div class="module_border">
			<div class="w">
				公开我的信用额度情况 <input type="checkbox" name="Borrow[open_credit]" value="1" checked="checked" disabled="disabled"/></div>
			
			<div class="sco" >如果您勾上此选项，将会实时公开您帐户的：最低信用额度、最高信用额度。 </div>
		</div>
	
	</div>
	<div class="foot"></div>
</div>
<!--帐户信息公开设置 结束-->

<!--帐户信息公开设置 开始-->
<div class="wrap950 list_1">
	<div class="title"><img src="<?php echo Yii::app()->baseUrl;?>/images/ico_4.gif"  /> 投标的详细说明：</div>
	<div class="content">
		<div class="module_border">
			<div class="w">标题：</div>
			<div>
			<input type="text" name="Borrow[name]" value="抵押/担保/联保/推荐/考察：<?php echo $model->name;?>" size="80" />	
			</div>	
			<div class="sco" >填写借款的标题，类型必须且只能保留一个(抵押/担保/联保/推荐/考察)</div>
		</div>
		<div class="module_border">
        <div class="w">信息：</div>
        </div>
		<div class="module_border">
			
			<div >
				<textarea name="Borrow[content]" id="contentEditor" ><?php if($model->content!=""){
				    echo $model->content;
				}else{
				 
                 echo <<<ETO
                 <P>借款详情： </P>
<P>&nbsp;</P>
<P></P>
<P>我的每月收入明细：</P>
<P>　　　　每月收入：<FONT color=#ff6600>￥0</FONT><BR>　　　　配偶收入：<FONT color=#ff6600>￥0</FONT><BR>　　　　其它收入：<FONT color=#ff6600>￥0</FONT></P>
<P><FONT color=#ff6600></FONT><BR>&nbsp;</P>
<P>我的每月支出明细</P>
<P>　　　　房屋,住宿：<FONT color=#ff6600>￥0</FONT><BR>　　　　保险,汽车：<FONT color=#ff6600>￥0</FONT><BR>　　　　食品：<FONT color=#ff6600>￥0</FONT><BR>　　　　电话、手机、网络：<FONT color=#ff6600>￥0</FONT><BR>　　　　其他开销：<FONT color=#ff6600>￥0</FONT></P>
<P><FONT color=#ff6600></FONT><BR>&nbsp;</P>
<P>其它地方借款：</P>
<P>　　　　借款机构：<FONT color=#ff6600>银行贷款</FONT><BR>　　　　借款总额：<FONT color=#ff6600>￥0</FONT>(已还款总额:<FONT color=#ff6600>￥0</FONT>待还款总额:<FONT color=#ff6600>￥0</FONT>)<BR>　　　　是否有过逾期还款：<FONT color=#ff6600>无</FONT>(逾期次数:<FONT color=#ff6600>0</FONT>次)</P>
<P><BR>&nbsp;</P>
<P>站内关联用户名：</P>
<P>还款保障：</P>
                 
                    
ETO;
				}?></textarea>
                <script type="text/javascript">
        UE.getEditor('contentEditor',{
            //这里可以选择自己需要的工具按钮名称,此处仅选择如下五个
            toolbars:[['FullScreen', 'Source', 'Undo', 'Redo','Bold','test']],
            //focus时自动清空初始化时的内容
            autoHeightEnabled: false,
            //关闭字数统计
            wordCount:false,
            //关闭elementPath
            elementPathEnabled:false,
            //默认的编辑区域高度
            initialFrameHeight:300
            //更多其他参数，请参考ueditor.config.js中的配置项
        })
    </script>
			</div>
		</div>
	</div>
	<div class="foot"></div>
</div>
<!--帐户信息公开设置 结束-->
<!--帐户信息公开设置 开始-->
<div class="wrap950 list_1">
	<div class="title"><img src="<?php echo Yii::app()->baseUrl;?>/images/ico_4.gif"  /> 提交：</div>
	<div class="content">
		<input name="verifyCode" type="text" size="11" maxlength="5"  tabindex="3"/>&nbsp;<?php  $this->widget('CCaptcha',array('showRefreshButton'=>false,'clickableImage'=>true,'imageOptions'=>array('alt'=>'点击换图','title'=>'点击换图','style'=>'cursor:pointer'))); ?>
		<input type="submit" value="确认提交" name="submit" id="submitsubmit" /> <input type="submit" value="保存草稿"  name="submit" />
         <input   type="button"   value="刷新"   name="refresh"   onclick= "window.location.reload() ">
	</div>
	<div class="foot"></div>
</div>
</form>

<script>
<?php $system = System::model();?>
var max_account = <?php echo UserAmount::model()->find('user_id=:user_id',array(':user_id'=>Yii::app()->user->id))->credit_use ?>;
var max_apr =<?php $max_apr = $system->find('nid=:nid',array(':nid'=>'con_borrow_apr'))->value;
    echo $max_apr == null ? '22.18':$max_apr;
    ?>;

var shangxian16=<?php echo $system->find('nid=:nid',array(':nid'=>'con_shangxian16'))->value;?>;
var xiaxian16=<?php echo $system->find('nid=:nid',array(':nid'=>'con_xiaxian16'))->value;?>;
var shangxian612=<?php echo $system->find('nid=:nid',array(':nid'=>'con_shangxian612'))->value;?>;
var xiaxian612=<?php echo $system->find('nid=:nid',array(':nid'=>'con_xiaxian612'))->value;?>;

function check_form(){
    
	document.getElementById("submitsubmit").disabled = true;
          
	 var frm = document.forms['form1'];
	 var account = frm.elements['Borrow[account]'].value;
	 var title = frm.elements['Borrow[name]'].value;
	 var style = frm.elements['Borrow[style]'].value;
	 var content = frm.elements['Borrow[content]'].value;
	 var time_limit = frm.elements['Borrow[time_limit]'].value;

	 var award = get_award_value();
	 var part_account = frm.elements['Borrow[part_account]'].value;
	 var funds = frm.elements['Borrow[funds]'].value;
	 var apr = frm.elements['Borrow[apr]'].value;
	 var valicode = frm.elements['verifyCode'].value;
	 var most_account = frm.elements['Borrow[most_account]'].value;
	 var use = frm.elements['Borrow[most_account]'].value;
	 var lowest_account = frm.elements['Borrow[lowest_account]'].value;
             
	 var errorMsg = '';
	  if (account.length == 0 ) {
		errorMsg += '- 总金额不能为空' + '\n';
       
	  }
	  if (account<500 || account>500000) {
		errorMsg += '- 借款金额不能小于500且不能大于500000' + '\n';
	  }
	  
	  if (account>max_account) {
		errorMsg += '- 你申请的额度为'+account+',你的可用额度为'+max_account+',请不要超过此可用额度\n';
	  }
	  if (apr.length == 0 ) {
		errorMsg += '- 利率不能为空' + '\n';
	  }
/*	  
	  if (time_limit >=1 && time_limit<=6 && apr>22.4) {
		errorMsg += '- 1至6个月的年利率不能超过22.4%' + '\n';
	  }else if (time_limit >6  && apr>24) {
		errorMsg += '- 6至12个月的年利率不能超过'+max_fax+'%' + '\n';
	  }
*/
/**易行**/
   
	  if (time_limit >=1 && time_limit<=6 && (apr>shangxian16||apr<xiaxian16)) {
		errorMsg += '- 1至6个月的年利率不能超过'+shangxian16+'%,且不能低于'+xiaxian16+ '%\n';
	  }else if (time_limit >6  && (apr>shangxian612||apr<xiaxian612)) {
		errorMsg += '- 6至12个月的年利率不能超过'+shangxian612+'%,且不能低于'+xiaxian612+ '%\n';
	  }
/*******/
	  
	  //if (apr<0 ||apr>max_apr) {errorMsg += '- 利率不能大于'+max_apr+'%' + '\n';}
	  
	  if (award==1 && (part_account=="" || part_account<5 || part_account>account*0.02)) {
		errorMsg += '- 固定金额分摊奖励不能低于5元,不能高于总标的金额的2%' + '\n';
	  }
	  if (award==2 && (funds =="" || funds<0.1 || funds>6)) {
		errorMsg += '- 投标金额比例奖励0.1%~6% ' + '\n';
	  }
	  if (most_account!=0 && parseInt(most_account)<parseInt(lowest_account)){
		  errorMsg += '- 投标最大金额不能小于最小金额' + '\n';
	  }
	  if (title.length == 0 ) {
		errorMsg += '- 标题不能为空' + '\n';
	  }
	  if (content.length == 0 ) {
		errorMsg += '- 内容不能为空' + '\n';
	  }
	  if (valicode.length == 0 ) {
		errorMsg += '- 验证码不能为空' + '\n';
	  }
	
	var awa = "";
			for(var i=0;i<form1.award.length;i++){   
			   if(form1.award[i].checked){
				 awa =  form1.award[i].value;
				}
			} 
	if(awa==1){
		if (part_account==""){
			errorMsg += '- 固定分摊比例奖励不能为空 ' + '\n';
		}
	}
	if(awa==2){
		if (funds==""){
			errorMsg += '- 投标金额比例奖励不能为空 ' + '\n';
		}
	}
	
	  if (errorMsg.length > 0){
		alert(errorMsg); return false;
	  } else{  
		return true;
	  }

}
function get_award_value()
{
    var form1 = document.forms['form1'];
    
    for (i=0; i<form1.award.length; i++)    {
        if (form1.award[i].checked)
        {
           return form1.award[i].value;
        }
    }
}
function change_j(type){
	var frm = document.forms['form1'];
	if (type==0){
		frm.elements['Borrow[part_account]'].disabled = "disabled";
		frm.elements['Borrow[funds]'].disabled = "disabled";
		frm.elements['Borrow[is_false]'].disabled = "disabled";
	}else if (type==1){
		frm.elements['Borrow[part_account]'].disabled = "";
		frm.elements['Borrow[funds]'].disabled = "disabled";
		frm.elements['Borrow[is_false]'].disabled = "";
	}else if (type==2){
		frm.elements['Borrow[part_account]'].disabled = "disabled";
		frm.elements['Borrow[funds]'].disabled = "";
		frm.elements['Borrow[is_false]'].disabled = "";
	}
}	
</script>
<?php }?>
