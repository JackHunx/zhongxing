<?php

class UploadController extends SBaseController
{
    public $layout = "/layouts/upload";
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
    public function actionIndex()
    {
        $this->render('index');
    }
    //upload one by one
    public function actionOne()
    {
        if (isset($_POST['attestation'])) {
            $value = array(
                'user_id' => Yii::app()->user->id,
                'status' => '0',
                'addtime' => time(),
                'addip' => Yii::app()->request->getUserHostAddress(),

                );
            $model = new Attestation;
            $model->attributes = array_merge($value, $_POST['attestation']);
            if ($model->save()) {
                $this->layout = "//layouts/main";
                $this->render('//user/msg', array(
                    'msg' => '上传成功',
                    'msg_url' => Yii::app()->request->urlReferrer,
                    'msg_content' => '返回继续上传'));
            } else {
                unlink(Yii::app()->basePath . $_POST['litpic']);
                $this->render('//user/msg', array(
                    'msg' => '上传保存数据库失败',
                    'msg_usr' => Yii::app()->request->urlReferrer,
                    'msg_content' => '返回重新上传'));
            }
        } else
            $this->render('one');
    }
    //upload once by more
    public function actionMore()
    {
        $this->render('more');
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
