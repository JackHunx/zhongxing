<?php
/* @var $this CmsArticleFieldsController */
/* @var $model CmsArticleFields */

$this->breadcrumbs=array(
	'Cms Article Fields'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CmsArticleFields', 'url'=>array('index')),
	array('label'=>'Manage CmsArticleFields', 'url'=>array('admin')),
);
?>

<h1>Create CmsArticleFields</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>