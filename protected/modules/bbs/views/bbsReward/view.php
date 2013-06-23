<?php
/* @var $this BbsRewardController */
/* @var $model BbsReward */

$this->breadcrumbs=array(
	'Bbs Rewards'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List BbsReward', 'url'=>array('index')),
	array('label'=>'Create BbsReward', 'url'=>array('create')),
	array('label'=>'Update BbsReward', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BbsReward', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BbsReward', 'url'=>array('admin')),
);
?>

<h1>View BbsReward #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tid',
		'userid',
		'bestid',
		'reward',
		'rewardcredits',
	),
)); ?>
