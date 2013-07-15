<?php

class UserController extends SBaseController
{
    public $layout='/layouts/admin';
    public function init()
    {
        Yii::app()->clientScript->registerCoreScript('jquery');
    }
	public function actionIndex()
	{
	   //获取用户列表
        $model = new User('search');
        $model->unsetAttributes();
        if(isset($_GET['User']))
            $model->attributes=$_GET['User'];
		$this->render('index',array('model'=>$model));
	}
    //get status
    public function islock($data,$row,$c)
    {
        return $data->islock==0 ? '正常':'<font color="red">锁定</font>';
    }
    //sex
    public function sex($data,$row,$c)
    {
        return $data->sex==null ? '未填写':($data->sex==1?'男':'女');
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