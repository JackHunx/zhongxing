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
    //实名认证
    public function actionRealName()
    {

        if (isset($_POST['user'])) {

            $value = array_filter($_POST['user']);
            $value['real_status'] = '0';
            // echo "<pre>";
            //            print_r($value);
            //            exit();
            $model = User::model()->findByPk(Yii::app()->user->id);
            $model->attributes = $value;
            if ($model->update()) {                {
                    //$this->_model = $model;
                    $this->layout = '//layouts/main';
                    $this->render('//user/msg', array(
                        'msg' => "信息已更新,请等待审核",
                        'msg_url' => Yii::app()->request->urlReferrer,
                        'msg_content' => "点此返回"));
                    ;
                }
            }
        } elseif ($this->_model->real_status == null) {
            $this->render('realname', array('model' => $this->_model));
        } else {
            $this->info['nation'] = Linkage::model()->findByPk($this->_model->nation)->name;
            $this->info['card_type'] = Linkage::model()->findByAttributes(array('type_id' =>
                    '32', 'value' => $this->_model->card_type))->name;

            $this->info['province'] = Area::model()->findByPk($this->_model->province)->
                name;
            $this->info['city'] = Area::model()->findByPk($this->_model->city)->name;
            $this->info['area'] = Area::model()->findByPk($this->_model->area)->name;
            $this->render('realname', array('model' => $this->_model, 'info' => $this->info));
        } //$model = $this->loadModel($this->_user->id);
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
        if (isset($_POST['phone'])) {
            //$value['phone']=$_POST['phone'];
            //$value['phone_status']='0';
            $model = User::model()->findByPk(Yii::app()->user->id);
            $model->attributes = array('phone' => $_POST['phone']);
            if ($model->update())
                $this->render('phone', array('model' => $model));

        } else
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

        if ($record != null) {

            if ($record->vip_status == 1) {
                $this->layout = '//layouts/main';
                $this->render('vip', array(
                    'status' => 'Vip会员',
                    'model' => $this->_model,
                    'vip' => $record));
            } elseif ($record->vip_status == 0) {
                $this->layout = '//layouts/main';
                $this->render('vip', array(
                    'status' => '<font color=red>Vip申请中</font>',
                    'model' => $this->_model,
                    'vip' => $record));
            }
            //$this->render('vip');
        } else {
            if (isset($_POST['Vip'])) {
                $vip = array(
                    'user_id' => $this->_user->id,
                    'vip_status' => '0',
                    'kefu_username' => ($_POST['Vip']['kefu_userid'] == 0 ? '0000' : User::model()->
                        findByPk($_POST['Vip']['kefu_userid'])->realname),
                    'kefu_addtime' => time(),
                    );
          
                //
                $model->attributes = array_merge($vip, $_POST['Vip']);
                //return $model->save();
                if ($model->save()) //$this->layout='//layoust/main';

                {
                    $this->redirect(array('validate/vip', 'id' => $model->user_id));
                    Yii::app()->end();
                }else
                    throw new CException('save to table {vip} error');
               
            }
            //$model = new User;
            $custom = Assignments::model()->findAll('itemname=:itemname', array(':itemname' =>
                    '客服'));
            $service = '';
            if ($custom != null) {
                for ($i = 0; $i < count($custom); $i++) {
                    //echo $custom->userid;

                    $service .= '<option value="' . $custom[$i]->userid . '">' . User::model()->
                        findByPk($custom[$i]->userid)->realname . '</option>';
                }
            } else
                $service = '<option value="0">0000</option>';

            $this->layout = '//layouts/main';
            $this->render('vip', array(
                'model' => $this->_model,
                'status' => '普通会员',
                'vip' => $record,
                'service' => $service));
        }
    }
    /**
     * 视频认证
     * 认证之前需检查vip状态，只有vip审核通过之后才能进行视频认证
     */
    public function actionVideo()
    {
        //$info = User::model()->findByPk(Yii::app()->user->id);
        $userCache = UserCache::model()->findByPk(Yii::app()->user->id);
        $video_status = User::model()->findByPk(Yii::app()->user->id);
        if ($userCache == null) {
            $vip_status = '0';
        } else
            $vip_status = $userCache->vip_status;
        $info = array(
            'vip_status' => $vip_status,
            'video_status' => $video_status,
            );
        $this->render('video', array('info' => $info));
    }
    //scene validate
    public function actionScene()
    {
        $this->render('scene');
    }
    //csrect setting
    public function actionSecret()
    {
        $this->render('secret');
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
