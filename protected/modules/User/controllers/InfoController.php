<?php

class InfoController extends SBaseController
{
    //private $_user;
    //    private $loadModel;
    //init()
    public $layout = "/layouts/info";
    /**
     * init $cs->registerScriptFile(Yii::app()->baseUrl.'/js/validate_tab.js');
     */
    public function init()
    { //
        //        $this->_user = Yii::app()->user;
        //        $this->loadModel($this->_user->id);
        //
        //init css and javascript
        $cs = Yii::app()->clientScript;
        $cs->registerCoreScript('jquery');
        $cs->registerScriptFile(Yii::app()->baseUrl . '/js/base.js');
        $cs->registerScriptFile(Yii::app()->baseUrl . '/js/validate_tab.js');
        $cs->registerScriptFile(Yii::app()->baseUrl .
            '/js/My97DatePicker/WdatePicker.js');
        $cs->registerCssFile(Yii::app()->baseUrl . '/css/user.css');
        $cs->registerCssFile(Yii::app()->baseUrl . '/css/user_new.css');
        $cs->registerCssFile(Yii::app()->baseUrl . '/css/index.css');
        $cs->registerCssFile(Yii::app()->baseUrl . '/css/main_user.css');
        $cs->registerCssFile(Yii::app()->baseUrl . '/css/user.css');
        $cs->registerCssFile(Yii::app()->baseUrl . '/css/css.css');
        //Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/validate/user.css');
    }
    public function actionIndex()
    {
        $this->render('index');
    }
    // building information
    public function actionBuilding()
    {
        $this->render('building');
    }
    // company information
    public function actionCompany()
    {
        $this->render('company');
    }
    public function actionEdu()
    {
        $this->render('edu');
    }
    public function actionFirm()
    {
        $this->render('firm');
    }
    public function actionFinance()
    {
        $this->render('finance');
    }
    public function actionContact()
    {
        $this->render('contact');
    }
    public function actionMate()
    {
        $this->render('mate');
    }
    public function actionJob()
    {
        $this->render('job');
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
