<?php
/* @var $this BorrowRepaymentController */
/* @var $model BorrowRepayment */

$this->breadcrumbs=array(
	'Borrow Repayments'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List BorrowRepayment', 'url'=>array('index')),
	array('label'=>'Create BorrowRepayment', 'url'=>array('create')),
	array('label'=>'Update BorrowRepayment', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BorrowRepayment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BorrowRepayment', 'url'=>array('admin')),
);
?>

<h1>View BorrowRepayment #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'site_id',
		'status',
		'webstatus',
		'order',
		'borrow_id',
		'repayment_time',
		'repayment_yestime',
		'repayment_account',
		'repayment_yesaccount',
		'late_days',
		'late_interest',
		'interest',
		'capital',
		'forfeit',
		'reminder_fee',
		'addtime',
		'addip',
	),
)); ?>
