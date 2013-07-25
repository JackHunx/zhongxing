<?php

class BorrowController extends SBaseController
{
    /**
     * 关于状态说明 
     * 0.发标待审 , <0 审核失败 ,1  投标 , 2 流标 ,3 满标 ,4 满标审核通过 
     * 
     */
    public $layout = '/layouts/borrow';
    public function init()
    {
        Yii::app()->clientScript->registerCoreScript('jquery');
    }
    public function actionIndex()
    {
        //borrow success the status =1
        $model = new Borrow('search');
        $model->unsetAttributes();
        $model->attributes = array('status' => 1);
        if (isset($_GET['Borrow']))
            $model->attributes = $_GET['Borrow'];
        $this->render('index', array('model' => $model));
    }
    /**
     * verify status = 0 发标待审
     */
    public function actionPush()
    {
        $model = new Borrow('search');
        $model->unsetAttributes();
        $model->attributes = array('status' => '0');
        if (isset($_GET['Borrow']))
            $model->attributes = $_GET['Borrow'];
        $this->render('push', array('model' => $model));
    }
    /**
     * invitaTender 正在招标 status =1
     */
    public function actionInviteTender()
    {
        $model = new Borrow('search');
        $model->unsetAttributes();
        $model->attributes = array('status' => '1');
        if (isset($_GET['Borrow']))
            $model->attributes = $_GET['Borrow'];
        $this->render('tender', array('model' => $model));
    }
    /**
     * finish inivate render   status = 3
     */
    public function actionFinish()
    {
        $model = new Borrow('search');
        $model->unsetAttributes();
        $model->attributes = array('status' => '3');
        if (isset($_GET['Borrow']))
            $model->attributes = $_GET['Borrow'];
        $this->render('finish', array('model' => $model));
    }
    /**
     * 流标 status =2
     */
    public function actionFlowStandard()
    {
        $model = new Borrow('search');
        $model->unsetAttributes();
        $model->attributes = array('status' => '2');
        if (isset($_GET['Borrow']))
            $model->attributes = $_GET['Borrow'];
        $this->render('flow', array('model' => $model));
    }
    //return time limit
    public function timeLimit($data, $row, $c)
    {
        return Linkage::model()->findByPk($data->time_limit)->value;
    }
    //get status
    public function getStatus($data, $row, $c)
    {
        return "-";
    }
    //get change like edit drop or delete
    public function getChange($data, $row, $c)
    {
        return "-";
    }
}
