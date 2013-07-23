
		<!--额度申请 开始-->
		<div class="user_main_title"> 
		额度申请原则上每次最多申请1万
		</div>
        <?php if ($model !=null &&$model->status != 1) { ?>
			<div align="center"><font color="#FF0000"><br />
<br />
{$_G.system.con_webname}提醒你：</font>你还不是VIP会员，请先成为<a href="/vip/index.html"><strong>VIP会员</strong></a>。</div><br /><br /><br />

		{else}
		{article module="borrow" function="GetAmountApplyOne" user_id="0" var="var"}
		
		<div class="user_right_border">
			<div class="e">申请者：</div>
			<div class="c">
				{$_G.user_result.username}
			</div>
		</div>
		{if $var.status==2}
		<div class="user_right_border">
			<div class="e"> 状态：</div>
			<div class="c">
				正在审核中
			</div>
		</div>
		<div class="user_right_border">
			<div class="e"> 申请类型：</div>
			<div class="c">
            <?php if ($model->type == 'tender_vouch')
        echo '投资担保额度';
    elseif ($model->type == 'borrow_vouch')
        echo '借款担保额度';
    else
        echo '借款信用额度';
?>
				
			</div>
		</div>
		<div class="user_right_border">
			<div class="e"> 申请金额：</div>
			<div class="c">
				<?php echo $model->account;?>
			</div>
		</div>
		<div class="user_right_border">
			<div class="e">详细说明：</div>
			<div class="c">
				<?php echo $model->content;?>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="e">其它地方借款详细说明：</div>
			<div class="c">
		
            <?php echo $model->remark;?>
			</div>
		</div>
		<?php } else { ?>
		<form action="" method="post">
		
		<div class="user_right_border">
			<div class="e"> 申请类型：</div>
			<div class="c">
				<select name="credit[type]"><option value="credit" <?php echo $_GET['type'] == 'credit'? 'seclected="selected"':'';?>> 借款信用额度</option><option value="tender_vouch" <?php echo $_GET['type'] == 'render_vouch' ? 'seclected="selected"':'';?> >投资担保额度</option>
<option value="borrow_vouch" <?php echo $_GET['type'] == 'borrow_vouch' ? 'seclected="selected"':'';?> >借款担保额度</option>				
				</select>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="e"> 申请金额：</div>
			<div class="c">
				<input type="text" name="credit[account]" value="" /> 
			</div>
		</div>
		
		
		<div class="user_right_border">
			<div class="e">详细说明：</div>
			<div class="c">
				<textarea rows="5" cols="40" name="credit[content]"></textarea>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="e">其它地方借款详细说明：</div>
			<div class="c">
			<textarea rows="5" cols="40" name="credit[remark]"></textarea>
			</div>
		</div>
		
		
		<div class="user_right_border">
			<div class="e"></div>
			<div class="c">
				<input type="submit" name="name"  value="确认提交" size="30" /> 
			</div>
		</div>
        </form>
		<?php } ?>
		