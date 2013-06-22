<?php
/* @var $this VipController */
/* @var $model UserCache */

$this->breadcrumbs=array(
	'User Caches'=>array('index'),
	$model->user_id=>array('view','id'=>$model->user_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserCache', 'url'=>array('index')),
	array('label'=>'Create UserCache', 'url'=>array('create')),
	array('label'=>'View UserCache', 'url'=>array('view', 'id'=>$model->user_id)),
	array('label'=>'Manage UserCache', 'url'=>array('admin')),
);
?>

<h1>Update UserCache <?php echo $model->user_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>