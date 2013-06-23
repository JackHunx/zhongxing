<?php
/* @var $this BbsTopicsController */
/* @var $model BbsTopics */

$this->breadcrumbs=array(
	'Bbs Topics'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BbsTopics', 'url'=>array('index')),
	array('label'=>'Manage BbsTopics', 'url'=>array('admin')),
);
?>

<h1>Create BbsTopics</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>