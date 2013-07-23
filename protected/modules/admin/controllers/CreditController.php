<?php

class CreditController extends SBaseController
{
    public $layout = '/layouts/admin';
    //init 
    public function init()
    {
        Yii::app()->clientScript->registerCoreScript('jquery');
    }
	public function actionIndex()
	{
	   //获取用户额度
       $model = UserAmount::model()->find
		$this->render('index');
	}

}