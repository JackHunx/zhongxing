<?php
/* @var $this BorrowCollectionController */
/* @var $model BorrowCollection */

$this->breadcrumbs=array(
	'Borrow Collections'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List BorrowCollection', 'url'=>array('index')),
	array('label'=>'Create BorrowCollection', 'url'=>array('create')),
	array('label'=>'Update BorrowCollection', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BorrowCollection', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BorrowCollection', 'url'=>array('admin')),
);
?>

<h1>View BorrowCollection #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'site_id',
		'status',
		'order',
		'tender_id',
		'repay_time',
		'repay_yestime',
		'repay_account',
		'repay_yesaccount',
		'interest',
		'capital',
		'late_days',
		'late_interest',
		'addtime',
		'addip',
	),
)); ?>
