<?php
/* @var $this BbsDirtywordsController */
/* @var $model BbsDirtywords */

$this->breadcrumbs=array(
	'Bbs Dirtywords'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BbsDirtywords', 'url'=>array('index')),
	array('label'=>'Manage BbsDirtywords', 'url'=>array('admin')),
);
?>

<h1>Create BbsDirtywords</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>