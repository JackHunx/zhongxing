<?php
/* @var $this CacheController */
/* @var $model Cache */
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
		<?php echo $form->label($model,'date'); ?>
		<?php echo $form->textField($model,'date',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_num'); ?>
		<?php echo $form->textField($model,'user_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_online_num'); ?>
		<?php echo $form->textField($model,'user_online_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_online_time'); ?>
		<?php echo $form->textField($model,'user_online_time',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_user'); ?>
		<?php echo $form->textField($model,'last_user',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bbs_first_visit'); ?>
		<?php echo $form->textField($model,'bbs_first_visit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bbs_topics_num'); ?>
		<?php echo $form->textField($model,'bbs_topics_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bbs_posts_num'); ?>
		<?php echo $form->textField($model,'bbs_posts_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bbs_today_topics'); ?>
		<?php echo $form->textField($model,'bbs_today_topics'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bbs_today_posts'); ?>
		<?php echo $form->textField($model,'bbs_today_posts'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bbs_yesterday_topics'); ?>
		<?php echo $form->textField($model,'bbs_yesterday_topics'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bbs_yesterday_posts'); ?>
		<?php echo $form->textField($model,'bbs_yesterday_posts'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bbs_most_topics'); ?>
		<?php echo $form->textField($model,'bbs_most_topics'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bbs_most_posts'); ?>
		<?php echo $form->textField($model,'bbs_most_posts'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'borrow_account'); ?>
		<?php echo $form->textField($model,'borrow_account',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'borrow_success'); ?>
		<?php echo $form->textField($model,'borrow_success',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'borrow_num'); ?>
		<?php echo $form->textField($model,'borrow_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'borrow_successnum'); ?>
		<?php echo $form->textField($model,'borrow_successnum',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->