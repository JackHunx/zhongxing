<?php
/* @var $this BorrowUnionController */
/* @var $model BorrowUnion */

$this->breadcrumbs=array(
	'Borrow Unions'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List BorrowUnion', 'url'=>array('index')),
	array('label'=>'Create BorrowUnion', 'url'=>array('create')),
	array('label'=>'Update BorrowUnion', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BorrowUnion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BorrowUnion', 'url'=>array('admin')),
);
?>

<h1>View BorrowUnion #<?php echo $model->id; ?></h1>

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
		'range',
		'content',
		'verify_remark',
		'verify_time',
		'addtime',
		'addip',
	),
)); ?>
