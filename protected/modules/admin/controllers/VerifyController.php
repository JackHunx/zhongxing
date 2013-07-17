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
        if (isset($_GET['id']) || isset($_POST['User'])) {
            //添加记录并积分
            if (isset($_GET['id']) && isset($_POST['User'])) {
                //更新积分并通过认证
                $user = $_POST['User'];
                $userModel = User::model()->findByPk($_GET['id']);
                if ($user['status'] == 1) // $this->render()
                    {

                    $userModel->attributes = array('real_status' => '1');
                    $val = array(
                        'user_id' => $_GET['id'],
                        'type_id' => '2', //积分类型 在此处固定
                        'value' => $user['value'],
                        'remark' => $user['remark'],
                        'op' => '1', //增加积分
                        'op_user' => Yii::app()->user->id,
                        );
                    Yii::app()->credit->set($_GET['id'], $val);
                    if (!$userModel->update())
                        throw new CException('real name save to table {User} error');

                    // echo "<pre>";
                    //                    print_r($val);
                } else {
                    $userModel->attributes = array('real_status' => null);
                    if (!$userModel->update())
                        throw new CException('real name save to table {User} error');
                }
            } else {
                $this->render('_realname');
                Yii::app()->end();
            }

        }
        $count = User::model()->count('real_status=:real_status', array(':real_status' =>
                '0'));
        $model = new User('search');
        $model->unsetAttributes();
        if (isset($_GET['User']))
            $model->attributes = $_GET['User'];
        $this->render('realname', array('model' => $model, 'count' => $count));

    }
    //verify vip
    public function actionVip()
    {
         if (isset($_GET['id']) || isset($_POST['Vip'])) {
            //添加记录并积分
            if (isset($_GET['id']) && isset($_POST['Vip'])) {
                //更新积分并通过认证
                $vip = $_POST['Vip'];
                $vipModel = Vip::model()->findByPk($_GET['id']);
                if ($vip['vip_status'] == 1) // $this->render()
                    {

                    $vipModel->attributes = array(
                        'vip_status' => '1',
                        'vip_verify_time'=>time(),
                        'vip_verify_remark'=>$vip['vip_verify_remark'],
                        'credit'=>$vip['credit'],
                    );
                    $val = array(
                        'user_id' => $_GET['id'],
                        'type_id' => '2', //积分类型 在此处固定
                        'value' => $vip['credit'],
                        'remark' => 'vip认证',
                        'op' => '1', //增加积分
                        'op_user' => Yii::app()->user->id,
                        );
                    Yii::app()->credit->set($_GET['id'], $val);
                    if (!$vipModel->update())
                        throw new CException('real name save to table {vip} error');

                    // echo "<pre>";
                    //                    print_r($val);
                } else {
                    if (!$vipModel->delete())
                        throw new CException('vip delete error');
                }
            } else {
                $this->render('_vip');
                Yii::app()->end();
            }

        }
        $model = new Vip('search');
        $model->unsetAttributes(); // clear any default values
        //过滤结果
        $model->attributes = array('vip_status' => '0');
        //$count = count($model)
        if (isset($_GET['Vip']))
            $model->attributes = $_GET['Vip'];
        $count = Vip::model()->count('vip_status=:vip_status',array(':vip_status'=>'0'));
        $this->render('vip', array('model' => $model,'count'=>$count));


    }
    //return vip status
    public function vipStatus($data, $row, $c)
    {
        return $data->vip_status == 1 ? '<font color=blue>已审核</font>' :
            '<font color=red>未审核</font>';
    }
    //return vip add time formate
    public function vipAddTime($data, $row, $c)
    {
        return date("Y-m-d H:i:s", $data->kefu_addtime);
    }
    //vip 是否缴费
    public function vipMoney($data, $row, $c)
    {
        return $data->vip_money == null ? '<font color="red">否</font>' :
            '<font color="green">已缴费</font>';
    }
    //vip verify usr
    public function vipVerify($data, $row, $c)
    {
        return '<a href="' . Yii::app()->baseUrl . '/index.php?r=admin/verify/vip&id=' .
            $data->user_id . '"><font color="green">审核</font></a>';
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
            array("id" => $data->user_id)) : '#';
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
