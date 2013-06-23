<?php
/* @var $this BbsPostsController */
/* @var $model BbsPosts */

$this->breadcrumbs=array(
	'Bbs Posts'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BbsPosts', 'url'=>array('index')),
	array('label'=>'Create BbsPosts', 'url'=>array('create')),
	array('label'=>'View BbsPosts', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BbsPosts', 'url'=>array('admin')),
);
?>

<h1>Update BbsPosts <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>