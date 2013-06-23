<?php
/* @var $this CmsArticleController */
/* @var $model CmsArticle */

$this->breadcrumbs=array(
	'Cms Articles'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CmsArticle', 'url'=>array('index')),
	array('label'=>'Create CmsArticle', 'url'=>array('create')),
	array('label'=>'View CmsArticle', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CmsArticle', 'url'=>array('admin')),
);
?>

<h1>Update CmsArticle <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>