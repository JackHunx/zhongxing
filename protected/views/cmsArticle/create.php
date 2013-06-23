<?php
/* @var $this CmsArticleController */
/* @var $model CmsArticle */

$this->breadcrumbs=array(
	'Cms Articles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CmsArticle', 'url'=>array('index')),
	array('label'=>'Manage CmsArticle', 'url'=>array('admin')),
);
?>

<h1>Create CmsArticle</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>