<?php

class InfoController extends SBaseController
{
    private $user;
    //private $model;
    //init()
    public $layout = "/layouts/info";
    /**
     * init $cs->registerScriptFile(Yii::app()->baseUrl.'/js/validate_tab.js');
     */
    public function init()
    { //
        $this->user = Yii::app()->user;
        //$this->loadModel($this->user->id);
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
        $user=User::model()->findByPk($this->user->id);
        $area = Area::model()->findByPk($user->province)->name."-".Area::model()->findByPk($user->city)->name."-".Area::model()->findByPk($user->area)->name; 
        if($user==null)
        {
            throw new CException("select form table User error not found ");
        }
        $this->render('index',array('user'=>$user,'info'=>$this->loadModel($this->user->id),'area'=>$area));
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


    private function loadModel($id)
    {
        $model = Userinfo::model()->findByAttributes(array('user_id' => $this->user->id));
        if ($model == null) {
            $value = array(
            'site_id'=>'1',
            'user_id'=>$this->user->id,
            'status'=>'0',
            'addtime'=>time(),
            'addip'=>Yii::app()->request->getUserHostAddress(),
            );
            $value['updatetime']=$value['addtime'];
            $value['updateip']=$value['addip'];
            $model->attributes=$value;
            if(!$model->save())
                throw new CException('create userinfo by <'.$this->user->id.'> fail');
        }
        return $model;
        
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
