<?php

class VerifyController extends SBaseController
{
    public function actionIndex()
    {
        $this->render('index');
    }
    //verify vip
    public function actionVerifyVip()
    {
        $model = new Vip('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['Vip']))
            $model->attributes = $_GET['Vip'];
      
        $this->render('vip', array('model' => $model, ));
        
    }
    //return vip status 
    public function vipStatus($data,$row,$c)
    {
        return $data->vip_status==1 ? '<font color=blue>已审核</font>':'<font color=red>未审核</font>';
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
