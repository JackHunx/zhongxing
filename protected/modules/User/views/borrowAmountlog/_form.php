<?php
/* @var $this BorrowAmountlogController */
/* @var $model BorrowAmountlog */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'borrow-amountlog-form',
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
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'amount_type'); ?>
		<?php echo $form->textField($model,'amount_type',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'amount_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account'); ?>
		<?php echo $form->textField($model,'account',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'account'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account_total'); ?>
		<?php echo $form->textField($model,'account_total',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'account_total'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account_use'); ?>
		<?php echo $form->textField($model,'account_use',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'account_use'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account_nouse'); ?>
		<?php echo $form->textField($model,'account_nouse',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'account_nouse'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'remark'); ?>
		<?php echo $form->textField($model,'remark',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'remark'); ?>
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