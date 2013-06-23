<?php
/* @var $this BbsForumsController */
/* @var $model BbsForums */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bbs-forums-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pid'); ?>
		<?php echo $form->textField($model,'pid',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'pid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textField($model,'content',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rules'); ?>
		<?php echo $form->textArea($model,'rules',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'rules'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'picurl'); ?>
		<?php echo $form->textField($model,'picurl',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'picurl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'admins'); ?>
		<?php echo $form->textField($model,'admins',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'admins'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'today_num'); ?>
		<?php echo $form->textField($model,'today_num',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'today_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'topics_num'); ?>
		<?php echo $form->textField($model,'topics_num',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'topics_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'posts_num'); ?>
		<?php echo $form->textField($model,'posts_num',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'posts_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_postname'); ?>
		<?php echo $form->textField($model,'last_postname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'last_postname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_postuser'); ?>
		<?php echo $form->textField($model,'last_postuser',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'last_postuser'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_postusername'); ?>
		<?php echo $form->textField($model,'last_postusername',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'last_postusername'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_posttime'); ?>
		<?php echo $form->textField($model,'last_posttime',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'last_posttime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_postid'); ?>
		<?php echo $form->textField($model,'last_postid',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'last_postid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'isverify'); ?>
		<?php echo $form->textField($model,'isverify'); ?>
		<?php echo $form->error($model,'isverify'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'forumpass'); ?>
		<?php echo $form->textField($model,'forumpass',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'forumpass'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'forumusers'); ?>
		<?php echo $form->textArea($model,'forumusers',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'forumusers'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'forumgroups'); ?>
		<?php echo $form->textArea($model,'forumgroups',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'forumgroups'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'showtype'); ?>
		<?php echo $form->textField($model,'showtype'); ?>
		<?php echo $form->error($model,'showtype'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ishidden'); ?>
		<?php echo $form->textField($model,'ishidden'); ?>
		<?php echo $form->error($model,'ishidden'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'order'); ?>
		<?php echo $form->textField($model,'order',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'order'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keywords'); ?>
		<?php echo $form->textField($model,'keywords',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'keywords'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->