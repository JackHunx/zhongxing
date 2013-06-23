<?php
/* @var $this BbsRewardController */
/* @var $model BbsReward */

$this->breadcrumbs=array(
	'Bbs Rewards'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BbsReward', 'url'=>array('index')),
	array('label'=>'Manage BbsReward', 'url'=>array('admin')),
);
?>

<h1>Create BbsReward</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>