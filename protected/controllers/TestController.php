<?php

class TestController extends SBaseController
{
    public function init()
    {
        Yii::app()->clientScript->registerCoreScript('jquery');
    }
	public function actionIndex()
	{
	   $model1 = Linkage::model()->findAll('type_id=:type_id',array(':type_id'=>'1'));
       $model2 = Linkage::model()->findAll('type_id=:type_id',array(':type_id'=>'2'));
       $model = array_merge($model1,$model2);
       echo "<pre>";
       print_r($model[0]->name); 
	   exit();
	   $this->render('index');
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}