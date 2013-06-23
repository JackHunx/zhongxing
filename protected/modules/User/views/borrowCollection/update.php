<?php
/* @var $this BorrowCollectionController */
/* @var $model BorrowCollection */

$this->breadcrumbs=array(
	'Borrow Collections'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BorrowCollection', 'url'=>array('index')),
	array('label'=>'Create BorrowCollection', 'url'=>array('create')),
	array('label'=>'View BorrowCollection', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BorrowCollection', 'url'=>array('admin')),
);
?>

<h1>Update BorrowCollection <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>