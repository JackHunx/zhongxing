<?php

class DefaultController extends Controller
{
    //用户
    private $_user;
    private $_vip;
    public function init()
    {
        $cs = Yii::app()->clientScript;
        $cs->registerCssFile(Yii::app()->baseUrl . '/css/user.css');
        $cs->registerCssFile(Yii::app()->baseUrl . '/css/user_new.css');
        $cs->registerCssFile(Yii::app()->baseUrl . '/css/index.css');
        $cs->registerCssFile(Yii::app()->baseUrl . '/css/main_user.css');
        $cs->registerCssFile(Yii::app()->baseUrl . '/css/css.css');
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


        $this->_user = Yii::app()->user;

        // if (isset($_GET['id'])) {
        //            $this->_userId = $_GET['id'];\
        //        }
        //$this->_userId = $_GET['id'];
        $userModel = $this->loadUserModel($this->_user->id);
        $this->render('index', array('model' => $userModel));
    }
    /**
     * vip 查询
     * @return vip status
     */
    private function checkVip()
    {
        $record = UserCache::model()->findAllByPk($this->_user->id);
        if ($record === null || $record->vip_status = 0)
            $this->_vip = "申请vip";
        elseif ($record->vip_status = 1)
            $this->_vip = ''; //返回vip期限


    }
    //加载用户模型
    private function loadUserModel($user_id)
    {
        //$value = User::model()->findByAttributes(array('user_id'=>$user_id));
        $model = User::model()->findByPk($user_id);

        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }
}
