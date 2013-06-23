<?php
/* @var $this BorrowCollectionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Borrow Collections',
);

$this->menu=array(
	array('label'=>'Create BorrowCollection', 'url'=>array('create')),
	array('label'=>'Manage BorrowCollection', 'url'=>array('admin')),
);
?>

<h1>Borrow Collections</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
