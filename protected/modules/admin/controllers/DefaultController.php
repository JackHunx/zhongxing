<?php

class DefaultController extends SBaseController
{
    public $layout='/layouts/admin';
    public function init()
    {
        
        
        Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/admin/bootstrap-classic.css');
        
        //Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/admin/noty_theme_default.css');
         Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/admin/charisma-app.css');
         
    }
	public function actionIndex()
	{
	   if(isset($_POST['admin']))
           { print_r($_POST);
            exit();}
   	   //Yii::app()->user->checkAccess("PostView");
		$this->render('login');
	}
   
}