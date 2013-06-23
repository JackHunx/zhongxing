<?php
/* @var $this BorrowRepaymentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Borrow Repayments',
);

$this->menu=array(
	array('label'=>'Create BorrowRepayment', 'url'=>array('create')),
	array('label'=>'Manage BorrowRepayment', 'url'=>array('admin')),
);
?>

<h1>Borrow Repayments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
