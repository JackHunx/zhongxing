<?php
/* @var $this BbsCreditsController */
/* @var $model BbsCredits */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bbs-credits-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'creditscode'); ?>
		<?php echo $form->textField($model,'creditscode',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'creditscode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'creditsname'); ?>
		<?php echo $form->textField($model,'creditsname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'creditsname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'postvar'); ?>
		<?php echo $form->textField($model,'postvar'); ?>
		<?php echo $form->error($model,'postvar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'replyvar'); ?>
		<?php echo $form->textField($model,'replyvar'); ?>
		<?php echo $form->error($model,'replyvar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'goodvar'); ?>
		<?php echo $form->textField($model,'goodvar'); ?>
		<?php echo $form->error($model,'goodvar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'uploadvar'); ?>
		<?php echo $form->textField($model,'uploadvar'); ?>
		<?php echo $form->error($model,'uploadvar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'downvar'); ?>
		<?php echo $form->textField($model,'downvar'); ?>
		<?php echo $form->error($model,'downvar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'votevar'); ?>
		<?php echo $form->textField($model,'votevar'); ?>
		<?php echo $form->error($model,'votevar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'isuse'); ?>
		<?php echo $form->textField($model,'isuse'); ?>
		<?php echo $form->error($model,'isuse'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->