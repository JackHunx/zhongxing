<?php
/* @var $this BbsRewardController */
/* @var $model BbsReward */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bbs-reward-form',
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
		<?php echo $form->labelEx($model,'userid'); ?>
		<?php echo $form->textField($model,'userid',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'userid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bestid'); ?>
		<?php echo $form->textField($model,'bestid',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'bestid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reward'); ?>
		<?php echo $form->textField($model,'reward',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'reward'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rewardcredits'); ?>
		<?php echo $form->textField($model,'rewardcredits',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'rewardcredits'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->