

<h1>View PaymentType #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'nid',
		'type',
		'description',
		'order',
	),
)); ?>
