<?php
/* @var $this BorrowVouchRepaymentController */
/* @var $model BorrowVouchRepayment */

$this->breadcrumbs=array(
	'Borrow Vouch Repayments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BorrowVouchRepayment', 'url'=>array('index')),
	array('label'=>'Manage BorrowVouchRepayment', 'url'=>array('admin')),
);
?>

<h1>Create BorrowVouchRepayment</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>