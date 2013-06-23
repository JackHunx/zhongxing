<?php
/* @var $this BorrowVouchRepaymentController */
/* @var $model BorrowVouchRepayment */

$this->breadcrumbs=array(
	'Borrow Vouch Repayments'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List BorrowVouchRepayment', 'url'=>array('index')),
	array('label'=>'Create BorrowVouchRepayment', 'url'=>array('create')),
	array('label'=>'Update BorrowVouchRepayment', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BorrowVouchRepayment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BorrowVouchRepayment', 'url'=>array('admin')),
);
?>

<h1>View BorrowVouchRepayment #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'status',
		'user_id',
		'borrow_id',
		'order',
		'repay_time',
		'repay_yestime',
		'repay_account',
		'repay_yesaccount',
		'addtime',
		'addip',
	),
)); ?>
