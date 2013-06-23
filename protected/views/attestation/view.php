<?php
/* @var $this AttestationController */
/* @var $model Attestation */

$this->breadcrumbs=array(
	'Attestations'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Attestation', 'url'=>array('index')),
	array('label'=>'Create Attestation', 'url'=>array('create')),
	array('label'=>'Update Attestation', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Attestation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Attestation', 'url'=>array('admin')),
);
?>

<h1>View Attestation #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'type_id',
		'name',
		'status',
		'litpic',
		'content',
		'jifen',
		'pic',
		'pic2',
		'pic3',
		'verify_time',
		'verify_user',
		'verify_remark',
		'addtime',
		'addip',
	),
)); ?>
