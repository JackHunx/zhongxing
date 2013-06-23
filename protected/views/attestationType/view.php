<?php
/* @var $this AttestationTypeController */
/* @var $model AttestationType */

$this->breadcrumbs=array(
	'Attestation Types'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List AttestationType', 'url'=>array('index')),
	array('label'=>'Create AttestationType', 'url'=>array('create')),
	array('label'=>'Update AttestationType', 'url'=>array('update', 'id'=>$model->type_id)),
	array('label'=>'Delete AttestationType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->type_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AttestationType', 'url'=>array('admin')),
);
?>

<h1>View AttestationType #<?php echo $model->type_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'type_id',
		'name',
		'order',
		'status',
		'jifen',
		'summary',
		'remark',
		'addtime',
		'addip',
	),
)); ?>
