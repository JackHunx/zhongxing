<?php
/* @var $this CacheController */
/* @var $model Cache */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cache-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model,'date',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_num'); ?>
		<?php echo $form->textField($model,'user_num'); ?>
		<?php echo $form->error($model,'user_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_online_num'); ?>
		<?php echo $form->textField($model,'user_online_num'); ?>
		<?php echo $form->error($model,'user_online_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_online_time'); ?>
		<?php echo $form->textField($model,'user_online_time',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'user_online_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_user'); ?>
		<?php echo $form->textField($model,'last_user',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'last_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bbs_first_visit'); ?>
		<?php echo $form->textField($model,'bbs_first_visit'); ?>
		<?php echo $form->error($model,'bbs_first_visit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bbs_topics_num'); ?>
		<?php echo $form->textField($model,'bbs_topics_num'); ?>
		<?php echo $form->error($model,'bbs_topics_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bbs_posts_num'); ?>
		<?php echo $form->textField($model,'bbs_posts_num'); ?>
		<?php echo $form->error($model,'bbs_posts_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bbs_today_topics'); ?>
		<?php echo $form->textField($model,'bbs_today_topics'); ?>
		<?php echo $form->error($model,'bbs_today_topics'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bbs_today_posts'); ?>
		<?php echo $form->textField($model,'bbs_today_posts'); ?>
		<?php echo $form->error($model,'bbs_today_posts'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bbs_yesterday_topics'); ?>
		<?php echo $form->textField($model,'bbs_yesterday_topics'); ?>
		<?php echo $form->error($model,'bbs_yesterday_topics'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bbs_yesterday_posts'); ?>
		<?php echo $form->textField($model,'bbs_yesterday_posts'); ?>
		<?php echo $form->error($model,'bbs_yesterday_posts'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bbs_most_topics'); ?>
		<?php echo $form->textField($model,'bbs_most_topics'); ?>
		<?php echo $form->error($model,'bbs_most_topics'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bbs_most_posts'); ?>
		<?php echo $form->textField($model,'bbs_most_posts'); ?>
		<?php echo $form->error($model,'bbs_most_posts'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'borrow_account'); ?>
		<?php echo $form->textField($model,'borrow_account',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'borrow_account'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'borrow_success'); ?>
		<?php echo $form->textField($model,'borrow_success',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'borrow_success'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'borrow_num'); ?>
		<?php echo $form->textField($model,'borrow_num'); ?>
		<?php echo $form->error($model,'borrow_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'borrow_successnum'); ?>
		<?php echo $form->textField($model,'borrow_successnum',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'borrow_successnum'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->