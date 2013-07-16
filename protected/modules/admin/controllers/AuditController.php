<?php

class AuditController extends SBaseController
{
    public $layout='/layouts/admin';
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
    
        $model = new Attestation('search');
        $model->unsetAttributes();
        if (isset($_GET['Attestation']))
            $model->attributes = $_GET['Attestation'];
        $this->render('upload', array('model' => $model));
        //$this->render('upload');
    }
    //user name 
    public function getUser($data,$row,$c)
    {
        return User::model()->findByPk($data->user_id)->username;
    }
    //real name
    public function realname($data,$row,$c)
    {
        return User::model()->findByPk($data->user_id)->realname;
    }
    //get verfiy type
    public function verifyType($data,$row,$c)
    {
        return AttestationType::model()->findByPk($data->type_id)->name;
    }
    //get verify pic
    public function verifyPic($data,$row,$c)
    {
        return '<a href = "'.Yii::app()->baseUrl.$data->litpic.'" target="_blank"><img src="'.Yii::app()->baseUrl.$data->litpic.'" width="50" height="50" style="border:1px solid #CCCCCC"></a>';
    }
    //verify status
    public function verifyStatus($data,$row,$c)
    {
        return $data->status == 0 ? '<font color="red">等待审核</font>':($data->status==1?'<font color="green">审核通过</font>':'<font color="grey">未通过</font>'); 
    }
    //verify uplod
    public function verifyUpload($data,$row,$c)
    {
        return $data->status == 1 ?'-':'<a href="'.Yii::app()->baseUrl.'/index.php?r=admin/audit/upload&id='.$data->id.'"><font color="green">审核</font></a>';
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