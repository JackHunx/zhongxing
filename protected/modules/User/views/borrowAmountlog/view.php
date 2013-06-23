<?php
/* @var $this BorrowAmountlogController */
/* @var $model BorrowAmountlog */

$this->breadcrumbs=array(
	'Borrow Amountlogs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List BorrowAmountlog', 'url'=>array('index')),
	array('label'=>'Create BorrowAmountlog', 'url'=>array('create')),
	array('label'=>'Update BorrowAmountlog', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BorrowAmountlog', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BorrowAmountlog', 'url'=>array('admin')),
);
?>

<h1>View BorrowAmountlog #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'type',
		'amount_type',
		'account',
		'account_total',
		'account_use',
		'account_nouse',
		'remark',
		'addtime',
		'addip',
	),
)); ?>
