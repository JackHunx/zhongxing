<?php
/* @var $this BorrowVouchController */
/* @var $model BorrowVouch */

$this->breadcrumbs=array(
	'Borrow Vouches'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List BorrowVouch', 'url'=>array('index')),
	array('label'=>'Create BorrowVouch', 'url'=>array('create')),
	array('label'=>'Update BorrowVouch', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BorrowVouch', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BorrowVouch', 'url'=>array('admin')),
);
?>

<h1>View BorrowVouch #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'borrow_id',
		'status',
		'account',
		'vouch_account',
		'content',
		'award_fund',
		'award_account',
		'addtime',
		'addip',
	),
)); ?>
