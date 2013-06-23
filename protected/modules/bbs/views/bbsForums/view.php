<?php
/* @var $this BbsForumsController */
/* @var $model BbsForums */

$this->breadcrumbs=array(
	'Bbs Forums'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List BbsForums', 'url'=>array('index')),
	array('label'=>'Create BbsForums', 'url'=>array('create')),
	array('label'=>'Update BbsForums', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BbsForums', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BbsForums', 'url'=>array('admin')),
);
?>

<h1>View BbsForums #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'pid',
		'name',
		'content',
		'rules',
		'picurl',
		'admins',
		'today_num',
		'topics_num',
		'posts_num',
		'last_postname',
		'last_postuser',
		'last_postusername',
		'last_posttime',
		'last_postid',
		'isverify',
		'forumpass',
		'forumusers',
		'forumgroups',
		'showtype',
		'ishidden',
		'order',
		'keywords',
	),
)); ?>
