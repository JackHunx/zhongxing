<?php
/* @var $this VipController */
/* @var $model UserCache */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-cache-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kefu_userid'); ?>
		<?php echo $form->textField($model,'kefu_userid'); ?>
		<?php echo $form->error($model,'kefu_userid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kefu_username'); ?>
		<?php echo $form->textField($model,'kefu_username'); ?>
		<?php echo $form->error($model,'kefu_username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kefu_addtime'); ?>
		<?php echo $form->textField($model,'kefu_addtime'); ?>
		<?php echo $form->error($model,'kefu_addtime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vip_status'); ?>
		<?php echo $form->textField($model,'vip_status'); ?>
		<?php echo $form->error($model,'vip_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vip_remark'); ?>
		<?php echo $form->textField($model,'vip_remark',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'vip_remark'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vip_money'); ?>
		<?php echo $form->textField($model,'vip_money',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'vip_money'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vip_verify_remark'); ?>
		<?php echo $form->textField($model,'vip_verify_remark',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'vip_verify_remark'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vip_verify_time'); ?>
		<?php echo $form->textField($model,'vip_verify_time',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'vip_verify_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bbs_topics_num'); ?>
		<?php echo $form->textField($model,'bbs_topics_num'); ?>
		<?php echo $form->error($model,'bbs_topics_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bbs_posts_num'); ?>
		<?php echo $form->textField($model,'bbs_posts_num'); ?>
		<?php echo $form->error($model,'bbs_posts_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'credit'); ?>
		<?php echo $form->textField($model,'credit'); ?>
		<?php echo $form->error($model,'credit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account'); ?>
		<?php echo $form->textField($model,'account'); ?>
		<?php echo $form->error($model,'account'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account_use'); ?>
		<?php echo $form->textField($model,'account_use'); ?>
		<?php echo $form->error($model,'account_use'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account_nouse'); ?>
		<?php echo $form->textField($model,'account_nouse'); ?>
		<?php echo $form->error($model,'account_nouse'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account_waitin'); ?>
		<?php echo $form->textField($model,'account_waitin'); ?>
		<?php echo $form->error($model,'account_waitin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account_waitintrest'); ?>
		<?php echo $form->textField($model,'account_waitintrest'); ?>
		<?php echo $form->error($model,'account_waitintrest'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account_intrest'); ?>
		<?php echo $form->textField($model,'account_intrest'); ?>
		<?php echo $form->error($model,'account_intrest'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account_award'); ?>
		<?php echo $form->textField($model,'account_award'); ?>
		<?php echo $form->error($model,'account_award'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account_payment'); ?>
		<?php echo $form->textField($model,'account_payment'); ?>
		<?php echo $form->error($model,'account_payment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account_expired'); ?>
		<?php echo $form->textField($model,'account_expired'); ?>
		<?php echo $form->error($model,'account_expired'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account_waitvip'); ?>
		<?php echo $form->textField($model,'account_waitvip'); ?>
		<?php echo $form->error($model,'account_waitvip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'borrow_amount'); ?>
		<?php echo $form->textField($model,'borrow_amount'); ?>
		<?php echo $form->error($model,'borrow_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vouch_amount'); ?>
		<?php echo $form->textField($model,'vouch_amount'); ?>
		<?php echo $form->error($model,'vouch_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'borrow_loan'); ?>
		<?php echo $form->textField($model,'borrow_loan'); ?>
		<?php echo $form->error($model,'borrow_loan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'borrow_success'); ?>
		<?php echo $form->textField($model,'borrow_success'); ?>
		<?php echo $form->error($model,'borrow_success'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'borrow_wait'); ?>
		<?php echo $form->textField($model,'borrow_wait'); ?>
		<?php echo $form->error($model,'borrow_wait'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'borrow_paymeng'); ?>
		<?php echo $form->textField($model,'borrow_paymeng'); ?>
		<?php echo $form->error($model,'borrow_paymeng'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'friends_apply'); ?>
		<?php echo $form->textField($model,'friends_apply'); ?>
		<?php echo $form->error($model,'friends_apply'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->