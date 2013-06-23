<?php
/* @var $this BorrowLineController */
/* @var $model BorrowLine */

$this->breadcrumbs=array(
	'Borrow Lines'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List BorrowLine', 'url'=>array('index')),
	array('label'=>'Create BorrowLine', 'url'=>array('create')),
	array('label'=>'Update BorrowLine', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BorrowLine', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BorrowLine', 'url'=>array('admin')),
);
?>

<h1>View BorrowLine #<?php echo $model->id; ?></h1>

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
		'type',
		'borrow_use',
		'borrow_qixian',
		'province',
		'city',
		'area',
		'account',
		'content',
		'pawn',
		'tel',
		'sex',
		'xing',
		'verify_user',
		'verify_time',
		'verify_remark',
		'addtime',
		'addip',
	),
)); ?>
