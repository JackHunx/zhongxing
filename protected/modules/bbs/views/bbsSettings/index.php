<?php
/* @var $this BbsSettingsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bbs Settings',
);

$this->menu=array(
	array('label'=>'Create BbsSettings', 'url'=>array('create')),
	array('label'=>'Manage BbsSettings', 'url'=>array('admin')),
);
?>

<h1>Bbs Settings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
