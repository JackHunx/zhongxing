<?php

class BorrowManagerController extends SBaseController
{
    public $layout = '/layouts/borrow';
    public function actionIndex()
    {
        $this->render('index');
    }
    //init sdaf
    public function init()
    {
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
    public function actions()
    {

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
            //array(
            //                'allow', // allow all users to perform 'index' and 'view' actions
            //                'actions' => array(
            //                    'index',
            //                   ),
            //                'users' => array('*'),
            //                ),
            array(
                'allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('credit'),
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
    /**
     * 额度申请
     */
    public function actionCredit()
    {
        if (isset($_POST['credit'])) {
            echo "<pre>";
            print_r($_POST['credit']);
            exit();
            $criteria = new CDbCriteria;
            $criteria->addCondition('user_id=:user_id');
            $criteria->params[':id'] = Yii::app()->user->id;
            $criteria->addCondition('addtime<:time');
            $criteria->params[':time'] = time() - 30 * 24 * 60 * 60;
            $record = UserAmountapply::model()->findAll($criteria);
            if ($record == null) {
                $model = new UserAmountapply;
                $model->attributes = $_POST['credit'];
                if (!$model->save())
                    throw new CException('404');
                $this->render('credit',array('model'=>$model));
                Yii::app()->end();
            }else
                $this->redirect('site/msg',array('msg'=>'请一个月后再申请','msg_url'=>Yii::app()->createUrl('User'),'msg_content'=>'进入用户中心'));
            
        }
        $criteria = new CDbCriteria;
        $criteria->addCondition('user_id=:user_id');
        $criteria->params[':user_id']=Yii::app()->user->id;
        $criteria->order='id DESC';
        
        $model = UserAmountapply::model()->find($criteria);
        $this->render('credit',array('model'=>$model));
    }


}
