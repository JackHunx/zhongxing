<?php

class ValidateController extends SBaseController
{
    private $_user;
    private $_model;
    private $info;
    public $layout = "/layouts/validate";
    //actions
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
    /**
     * init $cs->registerScriptFile(Yii::app()->baseUrl.'/js/validate_tab.js');
     */
    public function init()
    {
        $this->_user = Yii::app()->user;
        $this->loadModel($this->_user->id);
        //$this->_model= User::model();
        //init css and javascript
        $cs = Yii::app()->clientScript;
        $cs->registerCoreScript('jquery');
        $cs->registerScriptFile(Yii::app()->baseUrl.'/js/base.js');
        $cs->registerScriptFile(Yii::app()->baseUrl.'/js/validate_tab.js');
        $cs->registerScriptFile(Yii::app()->baseUrl.'/js/My97DatePicker/WdatePicker.js');
        $cs->registerCssFile(Yii::app()->baseUrl . '/css/user.css');
        $cs->registerCssFile(Yii::app()->baseUrl . '/css/user_new.css');
        $cs->registerCssFile(Yii::app()->baseUrl . '/css/index.css');
        $cs->registerCssFile(Yii::app()->baseUrl . '/css/main_user.css');
        $cs->registerCssFile(Yii::app()->baseUrl . '/css/user.css');
        $cs->registerCssFile(Yii::app()->baseUrl . '/css/css.css');
        //Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/validate/user.css');
    }
    //实名认证
    public function actionRealName()
    {
        
        if(isset($_POST['user']))
        {
            
            $value=$_POST['user'];
            $value['real_status']='0';
           // echo "<pre>";
//            print_r($value);
//            exit();
            $model = new User;
            $model->attributes=$value;
            if($model->update())
            {
                $this->render('realname',array('model'=>$this->_model,'info'=>$this->info));
            }
        }else{
            $this->info['nation']=Linkage::model()->findByPk($this->_model->nation)->name;
            $this->info['card_type']=Linkage::model()->findByAttributes(array('type_id'=>'32','value'=>$this->_model->card_type))->name;
            $this->info['province']=Area::model()->findByPk($this->_model->province)->name;
            $this->info['city']=Area::model()->findByPk($this->_model->city)->name;
            $this->info['area']=Area::model()->findByPk($this->_model->area)->name;
            $this->render('realname',array('model'=>$this->_model,'info'=>$this->info));
        }
        //$model = $this->loadModel($this->_user->id);
        //$this->render('realname', array('model' => $this->_model));
    }
    //validate emsil
    public function actionEmail()
    {
        $this->render('email', array('model' => $this->_model));
    }
    //validate phone
    public function actionPhone()
    {

        $this->render('phone', array('model' => $this->_model));
    }


    public function actionIndex()
    {
        // print_r($this->_userid);
        //exit();
        //默认进入验证页面
        $this->render('index');
    }
    //vip
    public function actionVip()
    {
        $model = new Vip;
        $record = $model->findByPk($this->_user->id);
        
        if ($record !== null) {
            
            if ($record->vip_status == 1) {
                $this->render('vip', array('status' => 'Vip会员','model'=>$this->_model,'vip'=>$record));
            } elseif ($record->vip_status == 0) {
                $this->render('vip', array('status' => '<font color=red>Vip申请中</font>','model'=>$this->_model,'vip'=>$record));
            }
            //$this->render('vip');
        }else{
        if (isset($_POST['Vip'])) {
            $vip = array(
                'user_id' => $this->_user->id,
                'vip_status' => '0',

                );

            //print_r(array_merge($vip, $_POST['Vip']));
            //            exit();
           
            $model->attributes = array_merge($vip, $_POST['Vip']);
            if ($model->save())
                $this->redirect(array('validate/vip', 'id' => $model->user_id));
        }
        //$model = new User;
        $this->render('vip', array('model' => $this->_model,'status'=>'普通会员','vip'=>$record));}
    }
    //return $model  = user::mode();
    private function loadModel($id)
    {
        $model = User::model()->findByPk($id);
        if ($model == null)
            throw new CHttpException('400', '您查找的页面不存在');
        $this->_model = $model;

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
