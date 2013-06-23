<?php
/* @var $this AccountController */
/* @var $model Account */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'account-form',
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
		<?php echo $form->labelEx($model,'total'); ?>
		<?php echo $form->textField($model,'total',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'total'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'use_money'); ?>
		<?php echo $form->textField($model,'use_money',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'use_money'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_use_money'); ?>
		<?php echo $form->textField($model,'no_use_money',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'no_use_money'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'collection'); ?>
		<?php echo $form->textField($model,'collection',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'collection'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->