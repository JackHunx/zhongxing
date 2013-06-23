<?php
/* @var $this AccountPaymentController */
/* @var $model AccountPayment */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nid'); ?>
		<?php echo $form->textField($model,'nid',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'style'); ?>
		<?php echo $form->textField($model,'style'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'config'); ?>
		<?php echo $form->textArea($model,'config',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fee'); ?>
		<?php echo $form->textField($model,'fee'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fee_type'); ?>
		<?php echo $form->textField($model,'fee_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'max_money'); ?>
		<?php echo $form->textField($model,'max_money'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'max_fee'); ?>
		<?php echo $form->textField($model,'max_fee'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'order'); ?>
		<?php echo $form->textField($model,'order'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->