<?php
/* @var $this UserCacheController */
/* @var $model UserCache */

$this->breadcrumbs=array(
	'User Caches'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UserCache', 'url'=>array('index')),
	array('label'=>'Manage UserCache', 'url'=>array('admin')),
);
?>

<h1>Create UserCache</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>