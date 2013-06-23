<?php
/* @var $this BorrowAmountController */
/* @var $model BorrowAmount */

$this->breadcrumbs=array(
	'Borrow Amounts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List BorrowAmount', 'url'=>array('index')),
	array('label'=>'Create BorrowAmount', 'url'=>array('create')),
	array('label'=>'Update BorrowAmount', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BorrowAmount', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BorrowAmount', 'url'=>array('admin')),
);
?>

<h1>View BorrowAmount #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'type',
		'account',
		'newaccount',
		'oldaccount',
		'status',
		'addtime',
		'content',
		'remark',
		'verify_remark',
		'verify_time',
		'verify_user',
		'addip',
	),
)); ?>
