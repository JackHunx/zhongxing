<?php
/* @var $this AttestationController */
/* @var $model Attestation */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'attestation-form',
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
		<?php echo $form->labelEx($model,'type_id'); ?>
		<?php echo $form->textField($model,'type_id'); ?>
		<?php echo $form->error($model,'type_id'); ?>
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
		<?php echo $form->labelEx($model,'litpic'); ?>
		<?php echo $form->textField($model,'litpic',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'litpic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textField($model,'content',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jifen'); ?>
		<?php echo $form->textField($model,'jifen'); ?>
		<?php echo $form->error($model,'jifen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pic'); ?>
		<?php echo $form->textArea($model,'pic',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'pic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pic2'); ?>
		<?php echo $form->textField($model,'pic2',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'pic2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pic3'); ?>
		<?php echo $form->textField($model,'pic3',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'pic3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'verify_time'); ?>
		<?php echo $form->textField($model,'verify_time',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'verify_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'verify_user'); ?>
		<?php echo $form->textField($model,'verify_user'); ?>
		<?php echo $form->error($model,'verify_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'verify_remark'); ?>
		<?php echo $form->textField($model,'verify_remark',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'verify_remark'); ?>
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