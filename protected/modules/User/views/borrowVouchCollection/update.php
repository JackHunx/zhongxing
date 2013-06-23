<?php
/* @var $this BorrowVouchCollectionController */
/* @var $model BorrowVouchCollection */

$this->breadcrumbs=array(
	'Borrow Vouch Collections'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BorrowVouchCollection', 'url'=>array('index')),
	array('label'=>'Create BorrowVouchCollection', 'url'=>array('create')),
	array('label'=>'View BorrowVouchCollection', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BorrowVouchCollection', 'url'=>array('admin')),
);
?>

<h1>Update BorrowVouchCollection <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>