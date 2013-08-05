<?php

class AuditController extends SBaseController
{
    public $layout = '/layouts/admin';
    public function init()
    {
        //register jquery
        Yii::app()->clientScript->registerCoreScript('jquery');
    }
    public function actionIndex()
    {
        $this->render('index');
    }
    /**
     * 上传资料审核
     */
    public function actionUpload()
    {
        if (isset($_GET['id']) || isset($_POST['Attestation'])) {
            //添加记录并积分
            if (isset($_GET['id']) && isset($_POST['Attestation'])) {
                //更新积分并通过认证
                $attestation = $_POST['Attestation'];
                $model = Attestation::model()->findByPk($_GET['id']);
                //$userModel = User::model()->findByPk($_GET['id']);
                if ($attestation['status'] == 1) // $this->render()
                    {
                    $model->attributes = array(
                        'status' => $_POST['Attestation']['status'],
                        'jifen' => $attestation['value'],
                        'verify_time' => time(),
                        'verify_user' => Yii::app()->user->id,
                        'verify_remark' => $_POST['Attestation']['remark'],
                        );
                    $val = array(
                        'user_id' => $model->user_id,
                        'type_id' => '6', //积分类型 在此处固定
                        'value' => $attestation['value'],
                        'remark' => $attestation['remark'],
                        'op' => '1', //增加积分
                        'op_user' => Yii::app()->user->id,
                        );
                    Yii::app()->credit->set($model->user_id, $val);
                    if (!$model->update())
                        throw new CException('real name save to table {attestation,credit} error');

                } else {
                    //审核不通过 status == 2
                    $model->attributes = array(
                        'status' => $_POST['Attestation']['status'],
                        'verify_remark' => $_POST['Attestation']['remark'],
                        );

                    if (!$model->update())
                        throw new CException('update to table {attestion} error');

                }
            } else {
                $attestation = Attestation::model()->findByPk($_GET['id']);
                $attestationType = AttestationType::model()->findByPk($attestation->type_id)->
                    name;
                $username = User::model()->findByPk($attestation->user_id)->username;

                $this->render('_upload', array(
                    'username' => $username,
                    'attestation' => $attestation,
                    'attestationType' => $attestationType));
                Yii::app()->end();
            }

        }
        $count = array(
            'success' => Attestation::model()->count('status=:status', array(':status' =>
                    '1')),
            'wait' => Attestation::model()->count('status=:status', array(':status' => '0')),
            'fail' => Attestation::model()->count('status=:status', array(':status' => '2')),
            );
        // Attestation::model()->count('status=:status', array(':status' => '0'));
        $model = new Attestation('search');
        $model->unsetAttributes();
        if (isset($_GET['Attestation']))
            $model->attributes = $_GET['Attestation'];
        $this->render('upload', array('model' => $model, 'count' => $count));
        //$this->render('upload');
    }
    //user name
    public function getUser($data, $row, $c)
    {
        return User::model()->findByPk($data->user_id)->username;
    }
    //real name
    public function realname($data, $row, $c)
    {
        return User::model()->findByPk($data->user_id)->realname;
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
    //verify uplod
    public function verifyUpload($data, $row, $c)
    {
        return $data->status == 1 ? '-' : '<a href="' . Yii::app()->baseUrl .
            '/index.php?r=admin/audit/upload&id=' . $data->id .
            '"><font color="green">审核</font></a>';
    }
    /**
     * VIP 审核
     */
    //public function a
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
