<?php
/* @var $this BorrowVouchRepaymentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Borrow Vouch Repayments',
);

$this->menu=array(
	array('label'=>'Create BorrowVouchRepayment', 'url'=>array('create')),
	array('label'=>'Manage BorrowVouchRepayment', 'url'=>array('admin')),
);
?>

<h1>Borrow Vouch Repayments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
