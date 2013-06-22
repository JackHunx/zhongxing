<?php

class DefaultController extends Controller
{
    //用户唯一id
    private $_user;

    public function init()
    {
        Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/User/user.css');
        //Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/css/my.js');
    }
    /**
     * @return array action filters
     */
    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
            );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules()
    {
        return array(
            array(
                'allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('view'),
                'users' => array('*'),
                ),
            array(
                'allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array(
                    'index',
                    'create',
                    'update'),
                'users' => array('@'),
                ),
            array(
                'allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
                ),
            array(
                'deny', // deny all users
                'users' => array('*'),
                ),
            );
    }

    public function actionIndex()
    {

        
    $this->_user=Yii::app()->user;

       // if (isset($_GET['id'])) {
//            $this->_userId = $_GET['id'];
//        }
        //$this->_userId = $_GET['id'];
       $userModel = $this->loadUserModel($this->_user->id);
        $this->render('index',array('model'=>$userModel));
    }
    //获取用户所有数据
    private function loadUserModel($user_id)
    {
        //$value = User::model()->findByAttributes(array('user_id'=>$user_id));
        $model = User::model()->findByPk($user_id);

        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }
}
