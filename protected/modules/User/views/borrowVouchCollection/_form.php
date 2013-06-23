<?php
/* @var $this BorrowVouchCollectionController */
/* @var $model BorrowVouchCollection */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'borrow-vouch-collection-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'borrow_id'); ?>
		<?php echo $form->textField($model,'borrow_id'); ?>
		<?php echo $form->error($model,'borrow_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'order'); ?>
		<?php echo $form->textField($model,'order'); ?>
		<?php echo $form->error($model,'order'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vouch_id'); ?>
		<?php echo $form->textField($model,'vouch_id'); ?>
		<?php echo $form->error($model,'vouch_id'); ?>
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