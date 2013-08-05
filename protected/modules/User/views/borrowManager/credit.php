
		<!--额度申请 开始-->
		<div class="user_main_title"> 
		额度申请原则上每次最多申请1万
		</div>
        <?php if ($model !=null &&$model->status != 1&&$model->status!=0) { ?>
			
		
		<div class="user_right_border">
			<div class="e">申请者：</div>
			<div class="c">
				<?php echo User::model()->findByPk(Yii::app()->user->id)->username;?>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="e"> 状态：</div>
			<div class="c">
				<font color="grey">正在审核中</font>
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
		<?php } else {
		      if(isset($_GET['type']))
                    $type=$_GET['type'];
                else 
                    $type='credit';?>
		<form action="" method="post">
		
		<div class="user_right_border">
			<div class="e"> 申请类型：</div>
			<div class="c">
				<select name="credit[type]"><option value="credit" <?php echo $type == 'credit'? 'seclected="selected"':'';?>> 借款信用额度</option><option value="tender_vouch" <?php echo $type == 'render_vouch' ? 'seclected="selected"':'';?> >投资担保额度</option>
<option value="borrow_vouch" <?php echo $type == 'borrow_vouch' ? 'seclected="selected"':'';?> >借款担保额度</option>				
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
		