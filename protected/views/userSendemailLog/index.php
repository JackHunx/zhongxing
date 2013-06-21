<?php
/* @var $this UserSendemailLogController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'User Sendemail Logs',
);

$this->menu=array(
	array('label'=>'Create UserSendemailLog', 'url'=>array('create')),
	array('label'=>'Manage UserSendemailLog', 'url'=>array('admin')),
);
?>

<h1>User Sendemail Logs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
