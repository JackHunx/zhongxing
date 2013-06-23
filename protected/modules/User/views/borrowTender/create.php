<?php
/* @var $this BorrowTenderController */
/* @var $model BorrowTender */

$this->breadcrumbs=array(
	'Borrow Tenders'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BorrowTender', 'url'=>array('index')),
	array('label'=>'Manage BorrowTender', 'url'=>array('admin')),
);
?>

<h1>Create BorrowTender</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>