<?php
/* @var $this AccountPaymentController */
/* @var $model AccountPayment */

$this->breadcrumbs=array(
	'Account Payments'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List AccountPayment', 'url'=>array('index')),
	array('label'=>'Create AccountPayment', 'url'=>array('create')),
	array('label'=>'Update AccountPayment', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AccountPayment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AccountPayment', 'url'=>array('admin')),
);
?>

<h1>View AccountPayment #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'nid',
		'status',
		'style',
		'config',
		'fee',
		'fee_type',
		'max_money',
		'max_fee',
		'description',
		'order',
	),
)); ?>
