<?php
/* @var $this BbsSettingsController */
/* @var $model BbsSettings */

$this->breadcrumbs=array(
	'Bbs Settings'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List BbsSettings', 'url'=>array('index')),
	array('label'=>'Create BbsSettings', 'url'=>array('create')),
	array('label'=>'Update BbsSettings', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BbsSettings', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BbsSettings', 'url'=>array('admin')),
);
?>

<h1>View BbsSettings #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'nid',
		'value',
		'type',
		'style',
		'status',
	),
)); ?>
