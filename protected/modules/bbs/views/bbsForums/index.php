<?php
/* @var $this BbsForumsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bbs Forums',
);

$this->menu=array(
	array('label'=>'Create BbsForums', 'url'=>array('create')),
	array('label'=>'Manage BbsForums', 'url'=>array('admin')),
);
?>

<h1>Bbs Forums</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
