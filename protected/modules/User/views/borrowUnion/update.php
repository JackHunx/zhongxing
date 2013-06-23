<?php
/* @var $this BorrowUnionController */
/* @var $model BorrowUnion */

$this->breadcrumbs=array(
	'Borrow Unions'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BorrowUnion', 'url'=>array('index')),
	array('label'=>'Create BorrowUnion', 'url'=>array('create')),
	array('label'=>'View BorrowUnion', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BorrowUnion', 'url'=>array('admin')),
);
?>

<h1>Update BorrowUnion <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>