<?php
/* @var $this UserSendemailLogController */
/* @var $model UserSendemailLog */

$this->breadcrumbs=array(
	'User Sendemail Logs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UserSendemailLog', 'url'=>array('index')),
	array('label'=>'Manage UserSendemailLog', 'url'=>array('admin')),
);
?>

<h1>Create UserSendemailLog</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>