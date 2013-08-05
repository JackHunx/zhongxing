<?php

class DefaultController extends SBaseController
{
    //用户
    public $layout = "/layouts/user";
    private $_user;
    private $_vip;
    private $info = array();
    public function init()
    {
        $cs = Yii::app()->clientScript;
        $cs->registerCoreScript('jquery');
        $cs->registerCssFile(Yii::app()->baseUrl . '/css/user.css');
        $cs->registerCssFile(Yii::app()->baseUrl . '/css/user_new.css');
        $cs->registerCssFile(Yii::app()->baseUrl . '/css/index.css');
        $cs->registerCssFile(Yii::app()->baseUrl . '/css/main_user.css');
        $cs->registerCssFile(Yii::app()->baseUrl . '/css/css.css');
        //Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/css/my.js');
        //获取用户数据
        $this->_user = Yii::app()->user;
        //check vip status
        $this->checkVip();
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
                //'index',
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

        $userModel = $this->loadUserModel($this->_user->id);
        //get avatar
        //获取用户账户信息
        $account = Account::model()->find('user_id=:user_id', array(':user_id' => $this->
                _user->id));
        //get user amonut credit
        $amount = UserAmount::model()->find('user_id=:user_id', array(':user_id' => $this->
                _user->id));
        //if($account == null)
        $this->getAvatar('big');
        $this->getInfo();
        $this->render('index', array(
            'model' => $userModel,
            'info' => $this->info,
            'vip' => $this->_vip,
            'baseUrl' => Yii::app()->baseUrl,
            'account' => $account,
            'amount' => $amount));
    }
    /**
     * vip 查询
     * @return vip status
     */
    private function checkVip()
    {
        $record = UserCache::model()->findByPk($this->_user->id);
        if ($record === null) {
            $this->_vip['status'] = '0';
            $this->_vip['msg'] = "申请vip";
        } elseif ($record->vip_status == 0) {
            $this->_vip['status'] = '0';
            $this->_vip['msg'] = "vip申请中";
        } elseif ($record->vip_status == 1) {
            $this->_vip['status'] = '1';
            $this->_vip['msg'] = date("Y-m-d", $record->vip_verify_time) . '到' . date("Y-m-d",
                $record->vip_verify_time + 365 * 24 * 60 * 60); //返回vip期限
        }


    }
    /**
     * get user avatar 
     * @return $info['avatar']
     */
    private function getAvatar($type)
    {
        $record = Userinfo::model()->findByAttributes(array('user_id' => $this->_user->
                id));

        $this->info['avatar'] = (($record != null && is_file(Yii::getPathOfAlias('webroot') .
            '/upload/avatar/avatar_' . $type . '/' . $record->litpic . '_' . $type . '.jpg')) ?
            Yii::app()->baseUrl . '/upload/avatar/avatar_' . $type . '/' . $record->litpic .
            '_' . $type . '.jpg' : Yii::app()->baseUrl . '/images/default_avatar.jpg');
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
    /**
     * 
     * 
     */
    private function getInfo()
    {
        $record = Userinfo::model()->findByAttributes(array('user_id' => $this->_user->
                id));
        $this->info['house'] = (($record != null && $record->house_address != null) ?
            '<font color="#009900">已填写</font>' : '<font color="#FF0000">未填写</font>');
        $this->info['company'] = (($record != null && $record->company_name != null) ?
            '<font color="#009900">已填写</font>' : '<font color="#FF0000">未填写</font>');
        $this->info['firm'] = (($record != null && $record->private_type != null) ?
            '<font color="#009900">已填写</font>' : '<font color="#FF0000">未填写</font>');
        $this->info['finance'] = (($record != null && $record->finance_car != null) ?
            '<font color="#009900">已填写</font>' : '<font color="#FF0000">未填写</font>');
        $this->info['contact'] = (($record != null && $record->area != null) ?
            '<font color="#009900">已填写</font>' : '<font color="#FF0000">未填写</font>');
        $this->info['edu'] = (($record != null && $record->education_record != null) ?
            '<font color="#009900">已填写</font>' : '<font color="#FF0000">未填写</font>');
    }
    //加载用户信息模型

}
