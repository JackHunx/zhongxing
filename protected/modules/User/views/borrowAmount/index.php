<?php
/* @var $this BorrowAmountController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Borrow Amounts',
);

$this->menu=array(
	array('label'=>'Create BorrowAmount', 'url'=>array('create')),
	array('label'=>'Manage BorrowAmount', 'url'=>array('admin')),
);
?>

<h1>Borrow Amounts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
