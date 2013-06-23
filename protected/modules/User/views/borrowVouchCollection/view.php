<?php
/* @var $this BorrowVouchCollectionController */
/* @var $model BorrowVouchCollection */

$this->breadcrumbs=array(
	'Borrow Vouch Collections'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List BorrowVouchCollection', 'url'=>array('index')),
	array('label'=>'Create BorrowVouchCollection', 'url'=>array('create')),
	array('label'=>'Update BorrowVouchCollection', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BorrowVouchCollection', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BorrowVouchCollection', 'url'=>array('admin')),
);
?>

<h1>View BorrowVouchCollection #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'status',
		'user_id',
		'borrow_id',
		'order',
		'vouch_id',
		'repay_time',
		'repay_yestime',
		'repay_account',
		'repay_yesaccount',
		'addtime',
		'addip',
	),
)); ?>
