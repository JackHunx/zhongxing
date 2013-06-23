<?php
/* @var $this BbsSettingsController */
/* @var $model BbsSettings */

$this->breadcrumbs=array(
	'Bbs Settings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BbsSettings', 'url'=>array('index')),
	array('label'=>'Manage BbsSettings', 'url'=>array('admin')),
);
?>

<h1>Create BbsSettings</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>