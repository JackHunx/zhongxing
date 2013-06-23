<?php
/* @var $this BorrowAmountlogController */
/* @var $model BorrowAmountlog */

$this->breadcrumbs=array(
	'Borrow Amountlogs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BorrowAmountlog', 'url'=>array('index')),
	array('label'=>'Manage BorrowAmountlog', 'url'=>array('admin')),
);
?>

<h1>Create BorrowAmountlog</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>