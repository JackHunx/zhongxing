<?php
/* @var $this BbsPostsController */
/* @var $model BbsPosts */

$this->breadcrumbs=array(
	'Bbs Posts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BbsPosts', 'url'=>array('index')),
	array('label'=>'Manage BbsPosts', 'url'=>array('admin')),
);
?>

<h1>Create BbsPosts</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>