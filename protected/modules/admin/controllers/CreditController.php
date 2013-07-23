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
       $model = new UserAmount('search');
       $model->unsetAttributes();
       if(isset($_GET['UserAmount']))
            $model->attributes=$_GET['UserAmount'];
		$this->render('index',array('model'=>$model));
	}
    /**
     * 信用额度申请
     */
    public function actionApply()
    {
        $this->render('apply');
    }

}