<?php
/* @var $this BbsSettingsController */
/* @var $model BbsSettings */

$this->breadcrumbs=array(
	'Bbs Settings'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BbsSettings', 'url'=>array('index')),
	array('label'=>'Create BbsSettings', 'url'=>array('create')),
	array('label'=>'View BbsSettings', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BbsSettings', 'url'=>array('admin')),
);
?>

<h1>Update BbsSettings <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>