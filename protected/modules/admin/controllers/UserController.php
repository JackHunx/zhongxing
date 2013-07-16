<?php

class UserController extends SBaseController
{
    public $layout = '/layouts/admin';
    public function init()
    {
        Yii::app()->clientScript->registerCoreScript('jquery');
    }
    public function actionIndex()
    {
        //获取用户列表
        $model = new User('search');
        $model->unsetAttributes();
        if (isset($_GET['User']))
            $model->attributes = $_GET['User'];
        $this->render('index', array('model' => $model));
    }
    /**
     * user info list
     */
    public function actionInfo()
    {
        $model = new Userinfo('search');
        $model->unsetAttributes();
        if (isset($_GET['Userinfo']))
            $model->attributes = $_GET['Userinfo'];
        $this->render('info', array('model' => $model));
    }
    //get user name
    public function getUser($data,$row,$c)
    {
        return User::model()->findByPk($data->user_id)->username;
    }
    //house
    public function house($data,$row,$c)
    {
       return $data->house_address==null? '未填写':'<font color="green">已填写</font>';
    }
    //company 
    public function company($data,$row,$c)
    {
        return $data->company_address==null?'未填写':'<font color="green">已填写</font>';
    }
    //private 
    public function priv($data,$row,$c)
    {
        return $data->private_place ==null?'未填写':'<font color="green">已填写</font>';
    }
    //finance
    public function finance($data,$row,$c)
    {
        return $data->finance_repayment ==null?'未填写':'<font color="green">已填写</font>';
    }
    //mate
    public function mate($data,$row,$c)
    {
        return $data->mate_name ==null?'未填写':'<font color="green">已填写</font>';
    }
    //education
    public function edu($data,$row,$c)
    {
        return $data->education_school ==null?'未填写':'<font color="green">已填写</font>';
    }
    //other
    public function contact($data,$row,$c)
    {
       return ($data->tel==null&&$data->phone==null&&$data->area==null)?'未填写':'<font color="green">已填写</font>';
    }
    //others
    public function others($data,$row,$c)
    {
       return ($data->interest==null&&$data->experience==null&&$data->others==null)?'未填写':'<font color="green">已填写</font>';
    }
    //get status
    public function islock($data, $row, $c)
    {
        return $data->islock == 0 ? '正常' : '<font color="red">锁定</font>';
    }
    //sex
    public function sex($data, $row, $c)
    {
        return $data->sex == null ? '未填写' : ($data->sex == 1 ? '男' : '女');
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
