<?php
/* @var $this BorrowAmountController */
/* @var $model BorrowAmount */

$this->breadcrumbs=array(
	'Borrow Amounts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BorrowAmount', 'url'=>array('index')),
	array('label'=>'Create BorrowAmount', 'url'=>array('create')),
	array('label'=>'View BorrowAmount', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BorrowAmount', 'url'=>array('admin')),
);
?>

<h1>Update BorrowAmount <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>