<?php
/* @var $this BbsRewardController */
/* @var $model BbsReward */

$this->breadcrumbs=array(
	'Bbs Rewards'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BbsReward', 'url'=>array('index')),
	array('label'=>'Create BbsReward', 'url'=>array('create')),
	array('label'=>'View BbsReward', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BbsReward', 'url'=>array('admin')),
);
?>

<h1>Update BbsReward <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>