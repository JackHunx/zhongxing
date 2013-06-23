<?php
/* @var $this AdController */
/* @var $model Ad */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ad-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nid'); ?>
		<?php echo $form->textField($model,'nid',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'nid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'order'); ?>
		<?php echo $form->textField($model,'order'); ?>
		<?php echo $form->error($model,'order'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'litpic'); ?>
		<?php echo $form->textField($model,'litpic',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'litpic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'timelimit'); ?>
		<?php echo $form->textField($model,'timelimit'); ?>
		<?php echo $form->error($model,'timelimit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'firsttime'); ?>
		<?php echo $form->textField($model,'firsttime',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'firsttime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'endtime'); ?>
		<?php echo $form->textField($model,'endtime',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'endtime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'endcontent'); ?>
		<?php echo $form->textArea($model,'endcontent',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'endcontent'); ?>
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