<?php
/* @var $this ArticleFieldsController */
/* @var $model ArticleFields */

$this->breadcrumbs=array(
	'Article Fields'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ArticleFields', 'url'=>array('index')),
	array('label'=>'Manage ArticleFields', 'url'=>array('admin')),
);
?>

<h1>Create ArticleFields</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>