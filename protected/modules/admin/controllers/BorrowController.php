<?php

class BorrowController extends SBaseController
{
    public $layout='/layouts/borrow';
    public function init()
    {
        Yii::app()->clientScript->registerCoreScript('jquery');
    }
	public function actionIndex()
	{
      $model = new Borrow('search');
      $model->unsetAttributes();
      if(isset($_GET['Borrow']))
            $model->attributes=$_GET['Borrow'];  
	  $this->render('index',array('model'=>$model));
	}
    //return time limit
    public function timeLimit($data,$row,$c)
    {
        return Linkage::model()->findByPk($data->time_limit)->value;
    }
	
}