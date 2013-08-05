<?php

class TestController extends SBaseController
{
    public function init()
    {
        Yii::app()->clientScript->registerCoreScript('jquery');
    }
	public function actionIndex()
	{
	   $this->redirect('testurl');
	   exit();
	   $this->layout='adf';
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