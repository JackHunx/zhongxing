<?php
/* @var $this BorrowVouchCollectionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Borrow Vouch Collections',
);

$this->menu=array(
	array('label'=>'Create BorrowVouchCollection', 'url'=>array('create')),
	array('label'=>'Manage BorrowVouchCollection', 'url'=>array('admin')),
);
?>

<h1>Borrow Vouch Collections</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
