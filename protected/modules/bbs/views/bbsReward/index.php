<?php
/* @var $this BbsRewardController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bbs Rewards',
);

$this->menu=array(
	array('label'=>'Create BbsReward', 'url'=>array('create')),
	array('label'=>'Manage BbsReward', 'url'=>array('admin')),
);
?>

<h1>Bbs Rewards</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
