<?php
/* @var $this ArticleFieldsController */
/* @var $model ArticleFields */

$this->breadcrumbs=array(
	'Article Fields'=>array('index'),
	$model->aid,
);

$this->menu=array(
	array('label'=>'List ArticleFields', 'url'=>array('index')),
	array('label'=>'Create ArticleFields', 'url'=>array('create')),
	array('label'=>'Update ArticleFields', 'url'=>array('update', 'id'=>$model->aid)),
	array('label'=>'Delete ArticleFields', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->aid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ArticleFields', 'url'=>array('admin')),
);
?>

<h1>View ArticleFields #<?php echo $model->aid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'aid',
		'files',
	),
)); ?>
