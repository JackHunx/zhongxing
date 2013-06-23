<?php
/* @var $this CmsArticleFieldsController */
/* @var $data CmsArticleFields */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('aid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->aid), array('view', 'id'=>$data->aid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('article_id')); ?>:</b>
	<?php echo CHtml::encode($data->article_id); ?>
	<br />


</div>