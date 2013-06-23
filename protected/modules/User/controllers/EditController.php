<?php

class EditController extends SBaseController
{
    //init some file like css js and so on.
    public function init()
    {
        Yii::app()->clientScript->registerCoreScript(
            'jquery');
        Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl .
            '/css/User/myinfo.css');
        Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl .
            '/css/User/reset.css');
        Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl .
            '/css/User/success.css');
        Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl .
            '/css/User/newstyle.css');
            Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl .
            '/css/User/index.css');
        //Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl .'/css/User/messages_cn.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl .
            '/css/User/jquery.validate.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl .
            '/css/User/Cursorfocus.js');
        //Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl .'/css/User/ga.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl .
            '/css/User/JsEven.js');
        //Yii::app()->clientScript->registerScriptFile()

    }
    public function actionIndex()
    {
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
