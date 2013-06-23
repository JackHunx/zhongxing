<?php
/* @var $this BorrowCollectionController */
/* @var $model BorrowCollection */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'borrow-collection-form',
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
		<?php echo $form->labelEx($model,'tender_id'); ?>
		<?php echo $form->textField($model,'tender_id'); ?>
		<?php echo $form->error($model,'tender_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'repay_time'); ?>
		<?php echo $form->textField($model,'repay_time',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'repay_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'repay_yestime'); ?>
		<?php echo $form->textField($model,'repay_yestime',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'repay_yestime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'repay_account'); ?>
		<?php echo $form->textField($model,'repay_account',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'repay_account'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'repay_yesaccount'); ?>
		<?php echo $form->textField($model,'repay_yesaccount',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'repay_yesaccount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'interest'); ?>
		<?php echo $form->textField($model,'interest',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'interest'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'capital'); ?>
		<?php echo $form->textField($model,'capital',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'capital'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'late_days'); ?>
		<?php echo $form->textField($model,'late_days'); ?>
		<?php echo $form->error($model,'late_days'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'late_interest'); ?>
		<?php echo $form->textField($model,'late_interest',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'late_interest'); ?>
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