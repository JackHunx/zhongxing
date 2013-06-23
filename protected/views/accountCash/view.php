<?php
/* @var $this AccountCashController */
/* @var $model AccountCash */

$this->breadcrumbs=array(
	'Account Cashes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AccountCash', 'url'=>array('index')),
	array('label'=>'Create AccountCash', 'url'=>array('create')),
	array('label'=>'Update AccountCash', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AccountCash', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AccountCash', 'url'=>array('admin')),
);
?>

<h1>View AccountCash #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'status',
		'account',
		'bank',
		'branch',
		'total',
		'credited',
		'fee',
		'verify_userid',
		'verify_time',
		'verify_remark',
		'addtime',
		'addip',
	),
)); ?>
