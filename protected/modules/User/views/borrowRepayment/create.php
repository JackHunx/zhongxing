<?php
/* @var $this BorrowRepaymentController */
/* @var $model BorrowRepayment */

$this->breadcrumbs=array(
	'Borrow Repayments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BorrowRepayment', 'url'=>array('index')),
	array('label'=>'Manage BorrowRepayment', 'url'=>array('admin')),
);
?>

<h1>Create BorrowRepayment</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>