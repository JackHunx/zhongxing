<?php
/* @var $this UserSendemailLogController */
/* @var $model UserSendemailLog */

$this->breadcrumbs=array(
	'User Sendemail Logs'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List UserSendemailLog', 'url'=>array('index')),
	array('label'=>'Create UserSendemailLog', 'url'=>array('create')),
	array('label'=>'Update UserSendemailLog', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete UserSendemailLog', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserSendemailLog', 'url'=>array('admin')),
);
?>

<h1>View UserSendemailLog #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'status',
		'title',
		'type',
		'email',
		'user_id',
		'msg',
		'addtime',
		'addip',
	),
)); ?>
