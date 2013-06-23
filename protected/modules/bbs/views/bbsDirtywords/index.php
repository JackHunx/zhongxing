<?php
/* @var $this BbsDirtywordsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bbs Dirtywords',
);

$this->menu=array(
	array('label'=>'Create BbsDirtywords', 'url'=>array('create')),
	array('label'=>'Manage BbsDirtywords', 'url'=>array('admin')),
);
?>

<h1>Bbs Dirtywords</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
