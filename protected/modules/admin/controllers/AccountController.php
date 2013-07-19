<?php

class AccountController extends SBaseController
{
    public $layout = '/layouts/admin';
    public function init()
    {
        Yii::app()->clientScript->registerCoreScript('jquery');
    }
    public function actionIndex()
    {
        $model = new Account('search');
        $model->unsetAttributes();
        if (isset($_GET['Account']))
            $model->attributes = $_GET['Account'];
        $this->render('index', array('model' => $model));
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
