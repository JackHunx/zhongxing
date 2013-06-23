<?php
/* @var $this BorrowLineController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Borrow Lines',
);

$this->menu=array(
	array('label'=>'Create BorrowLine', 'url'=>array('create')),
	array('label'=>'Manage BorrowLine', 'url'=>array('admin')),
);
?>

<h1>Borrow Lines</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
