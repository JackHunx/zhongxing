<?php
/* @var $this BorrowAmountlogController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Borrow Amountlogs',
);

$this->menu=array(
	array('label'=>'Create BorrowAmountlog', 'url'=>array('create')),
	array('label'=>'Manage BorrowAmountlog', 'url'=>array('admin')),
);
?>

<h1>Borrow Amountlogs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
