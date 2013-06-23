<?php
/* @var $this BbsTopicsController */
/* @var $model BbsTopics */
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
		<?php echo $form->label($model,'fid'); ?>
		<?php echo $form->textField($model,'fid',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'posttime'); ?>
		<?php echo $form->textField($model,'posttime',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'edittime'); ?>
		<?php echo $form->textField($model,'edittime',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ordertime'); ?>
		<?php echo $form->textField($model,'ordertime',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_replytime'); ?>
		<?php echo $form->textField($model,'last_replytime',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_replyuser'); ?>
		<?php echo $form->textField($model,'last_replyuser'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_replyusername'); ?>
		<?php echo $form->textField($model,'last_replyusername',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type'); ?>
		<?php echo $form->textField($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'posts_num'); ?>
		<?php echo $form->textField($model,'posts_num',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hits'); ?>
		<?php echo $form->textField($model,'hits',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'islock'); ?>
		<?php echo $form->textField($model,'islock'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'isgood'); ?>
		<?php echo $form->textField($model,'isgood'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'istop'); ?>
		<?php echo $form->textField($model,'istop'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'isalltop'); ?>
		<?php echo $form->textField($model,'isalltop'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stamp'); ?>
		<?php echo $form->textField($model,'stamp'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'isrecycle'); ?>
		<?php echo $form->textField($model,'isrecycle'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'credit'); ?>
		<?php echo $form->textField($model,'credit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'verifystate'); ?>
		<?php echo $form->textField($model,'verifystate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'verifydesc'); ?>
		<?php echo $form->textField($model,'verifydesc',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'isresolved'); ?>
		<?php echo $form->textField($model,'isresolved'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'attachicon'); ?>
		<?php echo $form->textField($model,'attachicon',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'highlight'); ?>
		<?php echo $form->textField($model,'highlight',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'addtime'); ?>
		<?php echo $form->textField($model,'addtime',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'addip'); ?>
		<?php echo $form->textField($model,'addip',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->