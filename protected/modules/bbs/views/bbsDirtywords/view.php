<?php
/* @var $this BbsDirtywordsController */
/* @var $model BbsDirtywords */

$this->breadcrumbs=array(
	'Bbs Dirtywords'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List BbsDirtywords', 'url'=>array('index')),
	array('label'=>'Create BbsDirtywords', 'url'=>array('create')),
	array('label'=>'Update BbsDirtywords', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BbsDirtywords', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BbsDirtywords', 'url'=>array('admin')),
);
?>

<h1>View BbsDirtywords #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'word',
		'replaceto',
		'type',
		'doaction',
	),
)); ?>
