<?php
/* @var $this BbsCreditsController */
/* @var $model BbsCredits */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'creditscode'); ?>
		<?php echo $form->textField($model,'creditscode',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'creditsname'); ?>
		<?php echo $form->textField($model,'creditsname',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'postvar'); ?>
		<?php echo $form->textField($model,'postvar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'replyvar'); ?>
		<?php echo $form->textField($model,'replyvar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'goodvar'); ?>
		<?php echo $form->textField($model,'goodvar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'uploadvar'); ?>
		<?php echo $form->textField($model,'uploadvar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'downvar'); ?>
		<?php echo $form->textField($model,'downvar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'votevar'); ?>
		<?php echo $form->textField($model,'votevar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'isuse'); ?>
		<?php echo $form->textField($model,'isuse'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->