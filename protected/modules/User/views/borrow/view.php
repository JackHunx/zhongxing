<?php
/* @var $this BorrowController */
/* @var $model Borrow */

$this->breadcrumbs=array(
	'Borrows'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Borrow', 'url'=>array('index')),
	array('label'=>'Create Borrow', 'url'=>array('create')),
	array('label'=>'Update Borrow', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Borrow', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Borrow', 'url'=>array('admin')),
);
?>

<h1>View Borrow #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'site_id',
		'user_id',
		'name',
		'status',
		'order',
		'hits',
		'litpic',
		'flag',
		'is_vouch',
		'type',
		'view_type',
		'vouch_award',
		'vouch_user',
		'vouch_account',
		'vouch_times',
		'source',
		'publish',
		'customer',
		'number_id',
		'verify_user',
		'verify_time',
		'verify_remark',
		'repayment_user',
		'forst_account',
		'repayment_account',
		'monthly_repayment',
		'repayment_yesaccount',
		'repayment_yesinterest',
		'repayment_time',
		'repayment_remark',
		'success_time',
		'end_time',
		'payment_account',
		'each_time',
		'use',
		'time_limit',
		'style',
		'account',
		'account_yes',
		'tender_times',
		'apr',
		'lowest_account',
		'most_account',
		'valid_time',
		'award',
		'part_account',
		'funds',
		'is_false',
		'open_account',
		'open_borrow',
		'open_tender',
		'open_credit',
		'content',
		'addtime',
		'addip',
	),
)); ?>
