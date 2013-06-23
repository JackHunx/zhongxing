<?php

class DefaultController extends Controller
{
	public function actionIndex()
	{
	   //Yii::app()->user->checkAccess("PostView");
		$this->render('index');
	}
}