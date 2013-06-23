<?php
/* @var $this BbsPostsController */
/* @var $model BbsPosts */

$this->breadcrumbs=array(
	'Bbs Posts'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List BbsPosts', 'url'=>array('index')),
	array('label'=>'Create BbsPosts', 'url'=>array('create')),
	array('label'=>'Update BbsPosts', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BbsPosts', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BbsPosts', 'url'=>array('admin')),
);
?>

<h1>View BbsPosts #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tid',
		'istopic',
		'fid',
		'user_id',
		'username',
		'name',
		'content',
		'edittime',
		'iscover',
		'isverify',
		'verifydesc',
		'addtime',
		'addip',
	),
)); ?>
