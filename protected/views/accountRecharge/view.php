<?php
/* @var $this AccountRechargeController */
/* @var $model AccountRecharge */

$this->breadcrumbs=array(
	'Account Recharges'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AccountRecharge', 'url'=>array('index')),
	array('label'=>'Create AccountRecharge', 'url'=>array('create')),
	array('label'=>'Update AccountRecharge', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AccountRecharge', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AccountRecharge', 'url'=>array('admin')),
);
?>

<h1>View AccountRecharge #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'trade_no',
		'user_id',
		'status',
		'money',
		'payment',
		'return',
		'type',
		'remark',
		'fee',
		'verify_userid',
		'verify_time',
		'verify_remark',
		'addtime',
		'addip',
	),
)); ?>
