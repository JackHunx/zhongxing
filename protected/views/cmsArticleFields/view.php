<?php
/* @var $this CmsArticleFieldsController */
/* @var $model CmsArticleFields */

$this->breadcrumbs=array(
	'Cms Article Fields'=>array('index'),
	$model->aid,
);

$this->menu=array(
	array('label'=>'List CmsArticleFields', 'url'=>array('index')),
	array('label'=>'Create CmsArticleFields', 'url'=>array('create')),
	array('label'=>'Update CmsArticleFields', 'url'=>array('update', 'id'=>$model->aid)),
	array('label'=>'Delete CmsArticleFields', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->aid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CmsArticleFields', 'url'=>array('admin')),
);
?>

<h1>View CmsArticleFields #<?php echo $model->aid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'aid',
		'article_id',
	),
)); ?>
