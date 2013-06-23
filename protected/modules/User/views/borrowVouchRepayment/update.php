<?php
/* @var $this BorrowVouchRepaymentController */
/* @var $model BorrowVouchRepayment */

$this->breadcrumbs=array(
	'Borrow Vouch Repayments'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BorrowVouchRepayment', 'url'=>array('index')),
	array('label'=>'Create BorrowVouchRepayment', 'url'=>array('create')),
	array('label'=>'View BorrowVouchRepayment', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BorrowVouchRepayment', 'url'=>array('admin')),
);
?>

<h1>Update BorrowVouchRepayment <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>