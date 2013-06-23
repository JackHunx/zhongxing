<?php
/* @var $this BbsPostsController */
/* @var $model BbsPosts */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bbs-posts-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tid'); ?>
		<?php echo $form->textField($model,'tid',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'tid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'istopic'); ?>
		<?php echo $form->textField($model,'istopic'); ?>
		<?php echo $form->error($model,'istopic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fid'); ?>
		<?php echo $form->textField($model,'fid',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'fid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'edittime'); ?>
		<?php echo $form->textField($model,'edittime',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'edittime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'iscover'); ?>
		<?php echo $form->textField($model,'iscover'); ?>
		<?php echo $form->error($model,'iscover'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'isverify'); ?>
		<?php echo $form->textField($model,'isverify',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'isverify'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'verifydesc'); ?>
		<?php echo $form->textField($model,'verifydesc',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'verifydesc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'addtime'); ?>
		<?php echo $form->textField($model,'addtime',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'addtime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'addip'); ?>
		<?php echo $form->textField($model,'addip',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'addip'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->