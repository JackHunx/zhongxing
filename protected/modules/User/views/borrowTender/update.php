<?php
/* @var $this BorrowTenderController */
/* @var $model BorrowTender */

$this->breadcrumbs=array(
	'Borrow Tenders'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BorrowTender', 'url'=>array('index')),
	array('label'=>'Create BorrowTender', 'url'=>array('create')),
	array('label'=>'View BorrowTender', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BorrowTender', 'url'=>array('admin')),
);
?>

<h1>Update BorrowTender <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>