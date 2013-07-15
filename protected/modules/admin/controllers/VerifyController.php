<?php

class VerifyController extends SBaseController
{
    public $layout = '/layouts/admin';
    public function init()
    {
        Yii::app()->clientScript->registerCoreScript('jquery');
    }
    public function actionIndex()
    {
        $this->render('index');
    }
    //verify admin
    public function actionRealname()
    {
        if (isset($_GET['id'])) {
            $this->render('_realname');
        } else {
            $count = User::model()->count('real_status=:real_status', array(':real_status' =>
                    '0'));
            $model = new User('search');
            $model->unsetAttributes();
            if (isset($_GET['User']))
                $model->attributes = $_GET['User'];
            $this->render('realname', array('model' => $model, 'count' => $count));
        }
    }
    //verify vip
    public function actionVip()
    {
        $model = new Vip('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['Vip']))
            $model->attributes = $_GET['Vip'];

        $this->render('vip', array('model' => $model));

    }
    //return vip status
    public function vipStatus($data, $row, $c)
    {
        return $data->vip_status == 1 ? '<font color=blue>已审核</font>' :
            '<font color=red>未审核</font>';
    }
    //get sex
    public function Sex($data, $row, $c)
    {
        return $data->sex == null ? '' : ($data->sex == 1 ? '男' : '女');
    }
    //获取民族
    public function nation($data, $row, $c)
    {
        if ($data->nation == null)
            return "";
        else
            return Linkage::model()->findByPk($data->nation)->value;

    }
    public function cardtype($data, $row, $c)
    {
        if ($data->card_type == null)
            return "";
        else
            return Linkage::model()->findByPk($data->card_type)->name;
    }
    //get area
    public function area($data, $row, $c)
    {
        $area = Area::model()->findByPk($data->area);
        if ($area != null) {
            $city = Area::model()->findByPk($area->pid);
            $provice = Area::model()->findByPk($city->pid);
            return $provice->name . '-' . $city->name . '-' . $area->name;
        }
    }
    //real_status
    public function cardpic($data, $row, $c)
    {
        if ($data->card_pic1 == null || $data->card_pic2 == null)
            return '无|无';
        else
            return "<a target='_blank' href=" . Yii::app()->baseUrl . '/' . $data->
                card_pic1 . ">正面</a>|<a target='_blank' href=" . Yii::app()->baseUrl . '/' . $data->
                card_pic2 . '>反面</a>';
    }
    //realStatus
    public function realStatus($data, $row, $c)
    {
        return $data->real_status == null ? '' : ($data->real_status == 0 ?
            '<font color=red>未审核</font>' : '<font color=green>通过</font>');
    }
    //update
    public function actionupdate($id)
    {

    }
    public function verify($data, $row, $c)
    {
        return $data->real_status == 0 ? Yii::app()->createUrl("/admin/verify/realname",
            array("id" => $data->user_id)) : Yii::app()->request->url;
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
