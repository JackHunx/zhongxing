<?php
/* @var $this BorrowTenderController */
/* @var $model BorrowTender */

$this->breadcrumbs=array(
	'Borrow Tenders'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List BorrowTender', 'url'=>array('index')),
	array('label'=>'Create BorrowTender', 'url'=>array('create')),
	array('label'=>'Update BorrowTender', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BorrowTender', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BorrowTender', 'url'=>array('admin')),
);
?>

<h1>View BorrowTender #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'site_id',
		'user_id',
		'status',
		'borrow_id',
		'money',
		'account',
		'repayment_account',
		'interest',
		'repayment_yesaccount',
		'wait_account',
		'wait_interest',
		'repayment_yesinterest',
		'addtime',
		'addip',
	),
)); ?>
