<?php
/* @var $this UserCacheController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'User Caches',
);

$this->menu=array(
	array('label'=>'Create UserCache', 'url'=>array('create')),
	array('label'=>'Manage UserCache', 'url'=>array('admin')),
);
?>

<h1>User Caches</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
