<?php

class CreditController extends SBaseController
{
    public $layout = '/layouts/admin';
    //init 
    public function init()
    {
        Yii::app()->clientScript->registerCoreScript('jquery');
        Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl .
            '/css/admin/bootstrap.css');
    }
	public function actionIndex()
	{
	   //获取用户额度
       $model = new UserAmount('search');
       $model->unsetAttributes();
       if(isset($_GET['UserAmount']))
            $model->attributes=$_GET['UserAmount'];
		$this->render('index',array('model'=>$model));
	}
    /**
     * credit apply
     */
    public function actionApply()
    {
        
        
        if(isset($_GET['id']))
        {   
            $model=UserAmountapply::model()->findByPk($_GET['id']);
            if(isset($_POST['credit']))
            {
                //$model = UserAmountapply::model()->find;
                $val = array(
                    'verify_user'=>Yii::app()->user->id,
                    'verify_time'=>time(),
                );
                $model->attributes=array_merge($val,$_POST['credit']);
                if($model->update()&&$_POST['credit']['status']==1)
                {
                    //update ammout and log
                    $amount = UserAmount::model()->find('user_id=:user_id',array(':user_id'=>$model->user_id));
                    $amount->attributes=array(
                        'credit'=>$_POST['credit']['account'],
                        'credit_use'=>$_POST['credit']['account'],
                    );
                    if($amount->update())
                    {
                        $log = new UserAmountlog;
                        $log->attributes = array(
                            'user_id'=>$model->user_id,
                            'type'=>'apply_add',
                            'amount_type'=>$model->type,
                            'account'=>$model->account,
                            'account_all'=>$model->account,
                            'account_use'=>$model->account,
                            'account_nouse'=>'0',
                            'remark'=>'申请额度审核通过',
                            'addtime'=>time(),
                            'addip'=>Yii::app()->request->getUserHostAddress(),
                            
                        );
                        if($log->save())
                            $this->redirect(Yii::app()->createUrl('admin/credit/apply'));
                    }
                    
                }else{
                    $this->redirect(Yii::app()->createUrl('admin/credit/apply'));
                }
            }
            
            $this->render('_apply',array('model'=>$model));
            Yii::app()->end();
        }
        $model = new UserAmountapply('search');
        $model->unsetAttributes();
        if(isset($_GET['UserAmountapply']))
            $model->attributes = $_GET['UserAmountapply'];
        $this->render('apply',array('model'=>$model));
    }
    //get amount type 
    public function getAmountType($data,$row,$c)
    {
        if($data->type == 'credit')
            return '借款信用额度';
        if($data->type=='tender_vouch')
            return '投资担保额度';
        if($data->type == 'borrow_vouch')
            return '借款担保额度';
    }
    //return apply status
    public function applyStatus($data,$row,$c)
    {
        return $data->status==1?'<font color="green">通过</font>':($data->status==0?'<font color="red">为通过</font':'<font color="grey">未审核</font>');
    }
    //verify apply
    public function verifyApply($data,$row,$c)
    {
        return '<a href="'.Yii::app()->createUrl('admin/credit/apply',array('id'=>$data->id)).'">审核</a>';
    }
    
    
    
    
    
    
    
}