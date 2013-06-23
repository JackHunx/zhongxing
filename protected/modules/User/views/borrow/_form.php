<?php
/* @var $this BorrowController */
/* @var $model Borrow */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'borrow-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'site_id'); ?>
		<?php echo $form->textField($model,'site_id'); ?>
		<?php echo $form->error($model,'site_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'order'); ?>
		<?php echo $form->textField($model,'order'); ?>
		<?php echo $form->error($model,'order'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hits'); ?>
		<?php echo $form->textField($model,'hits'); ?>
		<?php echo $form->error($model,'hits'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'litpic'); ?>
		<?php echo $form->textField($model,'litpic',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'litpic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'flag'); ?>
		<?php echo $form->textField($model,'flag',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'flag'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_vouch'); ?>
		<?php echo $form->textField($model,'is_vouch'); ?>
		<?php echo $form->error($model,'is_vouch'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'view_type'); ?>
		<?php echo $form->textField($model,'view_type'); ?>
		<?php echo $form->error($model,'view_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vouch_award'); ?>
		<?php echo $form->textField($model,'vouch_award',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'vouch_award'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vouch_user'); ?>
		<?php echo $form->textField($model,'vouch_user',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'vouch_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vouch_account'); ?>
		<?php echo $form->textField($model,'vouch_account',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'vouch_account'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vouch_times'); ?>
		<?php echo $form->textField($model,'vouch_times'); ?>
		<?php echo $form->error($model,'vouch_times'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'source'); ?>
		<?php echo $form->textField($model,'source',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'source'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'publish'); ?>
		<?php echo $form->textField($model,'publish',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'publish'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'customer'); ?>
		<?php echo $form->textField($model,'customer',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'customer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'number_id'); ?>
		<?php echo $form->textField($model,'number_id',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'number_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'verify_user'); ?>
		<?php echo $form->textField($model,'verify_user',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'verify_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'verify_time'); ?>
		<?php echo $form->textField($model,'verify_time',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'verify_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'verify_remark'); ?>
		<?php echo $form->textField($model,'verify_remark',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'verify_remark'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'repayment_user'); ?>
		<?php echo $form->textField($model,'repayment_user'); ?>
		<?php echo $form->error($model,'repayment_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'forst_account'); ?>
		<?php echo $form->textField($model,'forst_account',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'forst_account'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'repayment_account'); ?>
		<?php echo $form->textField($model,'repayment_account',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'repayment_account'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'monthly_repayment'); ?>
		<?php echo $form->textField($model,'monthly_repayment',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'monthly_repayment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'repayment_yesaccount'); ?>
		<?php echo $form->textField($model,'repayment_yesaccount',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'repayment_yesaccount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'repayment_yesinterest'); ?>
		<?php echo $form->textField($model,'repayment_yesinterest'); ?>
		<?php echo $form->error($model,'repayment_yesinterest'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'repayment_time'); ?>
		<?php echo $form->textField($model,'repayment_time',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'repayment_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'repayment_remark'); ?>
		<?php echo $form->textField($model,'repayment_remark',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'repayment_remark'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'success_time'); ?>
		<?php echo $form->textField($model,'success_time',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'success_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'end_time'); ?>
		<?php echo $form->textField($model,'end_time',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'end_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'payment_account'); ?>
		<?php echo $form->textField($model,'payment_account',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'payment_account'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'each_time'); ?>
		<?php echo $form->textField($model,'each_time',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'each_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'use'); ?>
		<?php echo $form->textField($model,'use',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'use'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'time_limit'); ?>
		<?php echo $form->textField($model,'time_limit',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'time_limit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'style'); ?>
		<?php echo $form->textField($model,'style',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'style'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account'); ?>
		<?php echo $form->textField($model,'account',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'account'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account_yes'); ?>
		<?php echo $form->textField($model,'account_yes',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'account_yes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tender_times'); ?>
		<?php echo $form->textField($model,'tender_times',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'tender_times'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apr'); ?>
		<?php echo $form->textField($model,'apr',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'apr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lowest_account'); ?>
		<?php echo $form->textField($model,'lowest_account',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'lowest_account'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'most_account'); ?>
		<?php echo $form->textField($model,'most_account',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'most_account'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valid_time'); ?>
		<?php echo $form->textField($model,'valid_time',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'valid_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'award'); ?>
		<?php echo $form->textField($model,'award',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'award'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'part_account'); ?>
		<?php echo $form->textField($model,'part_account',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'part_account'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'funds'); ?>
		<?php echo $form->textField($model,'funds',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'funds'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_false'); ?>
		<?php echo $form->textField($model,'is_false',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'is_false'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'open_account'); ?>
		<?php echo $form->textField($model,'open_account',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'open_account'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'open_borrow'); ?>
		<?php echo $form->textField($model,'open_borrow',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'open_borrow'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'open_tender'); ?>
		<?php echo $form->textField($model,'open_tender',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'open_tender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'open_credit'); ?>
		<?php echo $form->textField($model,'open_credit',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'open_credit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'addtime'); ?>
		<?php echo $form->textField($model,'addtime',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'addtime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'addip'); ?>
		<?php echo $form->textField($model,'addip',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'addip'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->