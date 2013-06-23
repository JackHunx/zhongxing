<?php
/* @var $this BorrowUnionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Borrow Unions',
);

$this->menu=array(
	array('label'=>'Create BorrowUnion', 'url'=>array('create')),
	array('label'=>'Manage BorrowUnion', 'url'=>array('admin')),
);
?>

<h1>Borrow Unions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
