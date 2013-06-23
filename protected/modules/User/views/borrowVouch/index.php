<?php
/* @var $this BorrowVouchController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Borrow Vouches',
);

$this->menu=array(
	array('label'=>'Create BorrowVouch', 'url'=>array('create')),
	array('label'=>'Manage BorrowVouch', 'url'=>array('admin')),
);
?>

<h1>Borrow Vouches</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
