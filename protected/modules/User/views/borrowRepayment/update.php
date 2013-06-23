<?php
/* @var $this BorrowRepaymentController */
/* @var $model BorrowRepayment */

$this->breadcrumbs=array(
	'Borrow Repayments'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BorrowRepayment', 'url'=>array('index')),
	array('label'=>'Create BorrowRepayment', 'url'=>array('create')),
	array('label'=>'View BorrowRepayment', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BorrowRepayment', 'url'=>array('admin')),
);
?>

<h1>Update BorrowRepayment <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>