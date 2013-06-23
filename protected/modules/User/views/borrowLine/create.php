<?php
/* @var $this BorrowLineController */
/* @var $model BorrowLine */

$this->breadcrumbs=array(
	'Borrow Lines'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BorrowLine', 'url'=>array('index')),
	array('label'=>'Manage BorrowLine', 'url'=>array('admin')),
);
?>

<h1>Create BorrowLine</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>