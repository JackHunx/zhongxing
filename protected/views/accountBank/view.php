<?php
/* @var $this AccountBankController */
/* @var $model AccountBank */

$this->breadcrumbs=array(
	'Account Banks'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AccountBank', 'url'=>array('index')),
	array('label'=>'Create AccountBank', 'url'=>array('create')),
	array('label'=>'Update AccountBank', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AccountBank', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AccountBank', 'url'=>array('admin')),
);
?>

<h1>View AccountBank #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'account',
		'bank',
		'branch',
		'province',
		'city',
		'area',
		'addtime',
		'addip',
	),
)); ?>
