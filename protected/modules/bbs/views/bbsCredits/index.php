<?php
/* @var $this BbsCreditsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bbs Credits',
);

$this->menu=array(
	array('label'=>'Create BbsCredits', 'url'=>array('create')),
	array('label'=>'Manage BbsCredits', 'url'=>array('admin')),
);
?>

<h1>Bbs Credits</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
