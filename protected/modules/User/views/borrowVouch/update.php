<?php
/* @var $this BorrowVouchController */
/* @var $model BorrowVouch */

$this->breadcrumbs=array(
	'Borrow Vouches'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BorrowVouch', 'url'=>array('index')),
	array('label'=>'Create BorrowVouch', 'url'=>array('create')),
	array('label'=>'View BorrowVouch', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BorrowVouch', 'url'=>array('admin')),
);
?>

<h1>Update BorrowVouch <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>