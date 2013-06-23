<?php
/* @var $this BorrowAmountController */
/* @var $model BorrowAmount */

$this->breadcrumbs=array(
	'Borrow Amounts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BorrowAmount', 'url'=>array('index')),
	array('label'=>'Manage BorrowAmount', 'url'=>array('admin')),
);
?>

<h1>Create BorrowAmount</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>