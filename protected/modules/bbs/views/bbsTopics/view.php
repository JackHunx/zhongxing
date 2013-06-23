<?php
/* @var $this BbsTopicsController */
/* @var $model BbsTopics */

$this->breadcrumbs=array(
	'Bbs Topics'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List BbsTopics', 'url'=>array('index')),
	array('label'=>'Create BbsTopics', 'url'=>array('create')),
	array('label'=>'Update BbsTopics', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BbsTopics', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BbsTopics', 'url'=>array('admin')),
);
?>

<h1>View BbsTopics #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fid',
		'user_id',
		'status',
		'username',
		'name',
		'content',
		'posttime',
		'edittime',
		'ordertime',
		'last_replytime',
		'last_replyuser',
		'last_replyusername',
		'type',
		'posts_num',
		'hits',
		'islock',
		'isgood',
		'istop',
		'isalltop',
		'stamp',
		'isrecycle',
		'credit',
		'verifystate',
		'verifydesc',
		'isresolved',
		'attachicon',
		'highlight',
		'addtime',
		'addip',
	),
)); ?>
