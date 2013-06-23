<?php
/* @var $this CacheController */
/* @var $model Cache */

$this->breadcrumbs=array(
	'Caches'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Cache', 'url'=>array('index')),
	array('label'=>'Create Cache', 'url'=>array('create')),
	array('label'=>'Update Cache', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Cache', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cache', 'url'=>array('admin')),
);
?>

<h1>View Cache #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'date',
		'user_num',
		'user_online_num',
		'user_online_time',
		'last_user',
		'bbs_first_visit',
		'bbs_topics_num',
		'bbs_posts_num',
		'bbs_today_topics',
		'bbs_today_posts',
		'bbs_yesterday_topics',
		'bbs_yesterday_posts',
		'bbs_most_topics',
		'bbs_most_posts',
		'borrow_account',
		'borrow_success',
		'borrow_num',
		'borrow_successnum',
	),
)); ?>
