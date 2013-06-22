<?php

class ValidateController extends Controller
{
    private $_user;
    /**
     * init 
     */
    public function init()
    {
        $this->_userid = Yii::app()->user;
    }
    public function actionCheck()
    {
        
    }
	public function actionIndex()
	{
	  // print_r($this->_userid);
       //exit();
	   //默认进入验证页面
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