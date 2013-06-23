<?php
/* @var $this BbsTopicsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bbs Topics',
);

$this->menu=array(
	array('label'=>'Create BbsTopics', 'url'=>array('create')),
	array('label'=>'Manage BbsTopics', 'url'=>array('admin')),
);
?>

<h1>Bbs Topics</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
