<?php
/* @var $this BbsForumsController */
/* @var $model BbsForums */

$this->breadcrumbs=array(
	'Bbs Forums'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BbsForums', 'url'=>array('index')),
	array('label'=>'Manage BbsForums', 'url'=>array('admin')),
);
?>

<h1>Create BbsForums</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>