<?php
/* @var $this BbsTopicsController */
/* @var $model BbsTopics */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bbs-topics-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

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
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'posttime'); ?>
		<?php echo $form->textField($model,'posttime',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'posttime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'edittime'); ?>
		<?php echo $form->textField($model,'edittime',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'edittime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ordertime'); ?>
		<?php echo $form->textField($model,'ordertime',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'ordertime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_replytime'); ?>
		<?php echo $form->textField($model,'last_replytime',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'last_replytime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_replyuser'); ?>
		<?php echo $form->textField($model,'last_replyuser'); ?>
		<?php echo $form->error($model,'last_replyuser'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_replyusername'); ?>
		<?php echo $form->textField($model,'last_replyusername',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'last_replyusername'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type'); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'posts_num'); ?>
		<?php echo $form->textField($model,'posts_num',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'posts_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hits'); ?>
		<?php echo $form->textField($model,'hits',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'hits'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'islock'); ?>
		<?php echo $form->textField($model,'islock'); ?>
		<?php echo $form->error($model,'islock'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'isgood'); ?>
		<?php echo $form->textField($model,'isgood'); ?>
		<?php echo $form->error($model,'isgood'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'istop'); ?>
		<?php echo $form->textField($model,'istop'); ?>
		<?php echo $form->error($model,'istop'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'isalltop'); ?>
		<?php echo $form->textField($model,'isalltop'); ?>
		<?php echo $form->error($model,'isalltop'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stamp'); ?>
		<?php echo $form->textField($model,'stamp'); ?>
		<?php echo $form->error($model,'stamp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'isrecycle'); ?>
		<?php echo $form->textField($model,'isrecycle'); ?>
		<?php echo $form->error($model,'isrecycle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'credit'); ?>
		<?php echo $form->textField($model,'credit'); ?>
		<?php echo $form->error($model,'credit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'verifystate'); ?>
		<?php echo $form->textField($model,'verifystate'); ?>
		<?php echo $form->error($model,'verifystate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'verifydesc'); ?>
		<?php echo $form->textField($model,'verifydesc',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'verifydesc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'isresolved'); ?>
		<?php echo $form->textField($model,'isresolved'); ?>
		<?php echo $form->error($model,'isresolved'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'attachicon'); ?>
		<?php echo $form->textField($model,'attachicon',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'attachicon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'highlight'); ?>
		<?php echo $form->textField($model,'highlight',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'highlight'); ?>
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