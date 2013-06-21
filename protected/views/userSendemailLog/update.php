<?php
/* @var $this UserSendemailLogController */
/* @var $model UserSendemailLog */

$this->breadcrumbs=array(
	'User Sendemail Logs'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserSendemailLog', 'url'=>array('index')),
	array('label'=>'Create UserSendemailLog', 'url'=>array('create')),
	array('label'=>'View UserSendemailLog', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage UserSendemailLog', 'url'=>array('admin')),
);
?>

<h1>Update UserSendemailLog <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>