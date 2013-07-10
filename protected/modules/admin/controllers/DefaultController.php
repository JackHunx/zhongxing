<?php

class DefaultController extends SBaseController
{
    public $layout = '/layouts/admin';
    public function init()
    {


       // Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl .
           // '/css/admin/bootstrap-classic.css');

        //Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/admin/noty_theme_default.css');
        //Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl .
           // '/css/admin/charisma-app.css');

    }
     public function actions()
    {
        return array('captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
                'maxLength' => '5',
                'minLength' => '4',
                'height' => '30'), //'page' => array('class' => 'CViewAction', ),
                );
    }
    public function actionIndex()
    {
        $model = new AdminLoginForm;
        if (isset(Yii::app()->user->id)) {
            //$this->layout='/layouts/admin';
            $this->render('index');
            Yii::app()->end();
        }
       // $this->render('login');
        // if it is ajax validation request
        //if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
//            echo CActiveForm::validate($model);
//            Yii::app()->end();
//        }

        // collect user input data
        if (isset($_POST['admin'])) {
            $model->attributes = $_POST['admin'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login())
                $this->render('index');//$this->redirect(Yii::app()->user->returnUrl);
        }
        $this->layout='/layouts/adminlogin';
        // display the login form
        $this->render('login', array('model' => $model));
        //if (isset($_POST['admin'])) {
//            $record = User::model()->find('username=:username', array(':username' => $_POST['username']));
//            if ($record === null)
//                echo '您没有权限进入这里';
//
//
//        }
//        //Yii::app()->user->checkAccess("PostView");
//        $this->render('login');
    }
    //login
    public function actionLogin()
    {
        
    }
    private function verify()
    {

    }
}
