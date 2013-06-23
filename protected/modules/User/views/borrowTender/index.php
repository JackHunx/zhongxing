<?php
/* @var $this BorrowTenderController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Borrow Tenders',
);

$this->menu=array(
	array('label'=>'Create BorrowTender', 'url'=>array('create')),
	array('label'=>'Manage BorrowTender', 'url'=>array('admin')),
);
?>

<h1>Borrow Tenders</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
