<?php
/* @var $this VipController */
/* @var $model Vip */

$this->breadcrumbs=array(
	'Vips'=>array('index'),
	$model->user_id=>array('view','id'=>$model->user_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Vip', 'url'=>array('index')),
	array('label'=>'Create Vip', 'url'=>array('create')),
	array('label'=>'View Vip', 'url'=>array('view', 'id'=>$model->user_id)),
	array('label'=>'Manage Vip', 'url'=>array('admin')),
);
?>

<h1>Update Vip <?php echo $model->user_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>