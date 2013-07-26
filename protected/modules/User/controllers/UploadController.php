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
    //list upload file
    public function actionList()
    {
        $model = new Attestation('search');
        $model->unsetAttributes();
        $model->attributes = array('prefix.user_id' => Yii::app()->user->id);
        if (isset($_GET['Attestation']))
            $model->attributes = $_GET['Attestation'];
        $this->render('list', array('model' => $model));
    }
    //get verfiy type
    public function verifyType($data, $row, $c)
    {
        return AttestationType::model()->findByPk($data->type_id)->name;
    }
    //get verify pic
    public function verifyPic($data, $row, $c)
    {
        return '<a href = "' . Yii::app()->createUrl('site/image', array('url' => Yii::
                app()->baseUrl . $data->litpic)) . '" target="_blank"><img src="' . Yii::app()->
            baseUrl . $data->litpic .
            '" width="50" height="50" style="border:1px solid #CCCCCC"></a>';
    }
    //verify status
    public function verifyStatus($data, $row, $c)
    {
        return $data->status == 0 ? '<font color="red">等待审核</font>' : ($data->status ==
            1 ? '<font color="green">审核通过</font>' : '<font color="grey">未通过</font>');
    }

}
