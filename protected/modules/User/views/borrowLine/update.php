<?php
/* @var $this BorrowLineController */
/* @var $model BorrowLine */

$this->breadcrumbs=array(
	'Borrow Lines'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BorrowLine', 'url'=>array('index')),
	array('label'=>'Create BorrowLine', 'url'=>array('create')),
	array('label'=>'View BorrowLine', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BorrowLine', 'url'=>array('admin')),
);
?>

<h1>Update BorrowLine <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>