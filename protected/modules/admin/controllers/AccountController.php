<?php

class AccountController extends SBaseController
{
    public $layout = '/layouts/account';
    public function init()
    {
        Yii::app()->clientScript->registerCoreScript('jquery');
        Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl .
            '/css/admin/bootstrap.css');
    }
    public function actionIndex()
    {
        $model = new Account('search');
        $model->unsetAttributes();
        if (isset($_GET['Account']))
            $model->attributes = $_GET['Account'];

        $this->render('index', array('model' => $model));
    }
    public function actionRechargeLog()
    {
        if (isset($_GET['id'])) {
            $record = AccountRecharge::model()->findByPk($_GET['id']);
            $username = User::model()->findByPk($record->user_id)->username;
            if (isset($_POST['Account'])) {
                if ($_POST['Account']['status'] == 1) {
                    //充值成功更新account
                    $account = Yii::app()->account->getAccount($record->user_id);
                    $account->attributes = array(
                        'total' => $account->total + $_POST['Account']['money'],
                        'use_money' => $account->use_money + $_POST['Account']['money'],
                        );
                    if ($account->update()) {
                        //更行recharge
                        $rechargeValue = array(
                            'id' => $_GET['id'],
                            'status' => $_POST['Account']['status'],
                            'verify_userid' => Yii::app()->user->id,
                            'verify_time' => time(),
                            'verify_remark' => $_POST['Account']['verify_remark'],
                            );
                        Yii::app()->account->updateRecharge($rechargeValue);
                        $this->redirect(Yii::app()->createUrl('admin/account/rechargeLog'));
                    }
                } else {
                    $rechargeValue = array(
                        'id' => $_GET['id'],
                        'status' => $_POST['Account']['status'],
                        'verify_userid' => Yii::app()->user->id,
                        'verify_time' => time(),
                        'verify_remark' => $_POST['Account']['verify_remark'],
                        );
                    Yii::app()->account->updateRecharge($rechargeValue);
                    $this->redirect(Yii::app()->createUrl('admin/account/rechargeLog'));
                }
            }
            //提交form 待定

            $this->render('_recharge', array('model' => $record, 'username' => $username));
            Yii::app()->end();
        }
        $model = new AccountRecharge('search');
        $model->unsetAttributes();
        if (isset($_GET['AccountRecharge']))
            $model->attributes = $_GET['AccountRecharge'];
        $this->render('recharge', array('model' => $model));
    }
    //payment type
    public function actionPaymentList()
    {
        $model = new PaymentType('search');
        $model->unsetAttributes();
        if (isset($_GET['PaymentType']))
            $model->attributes = $_GET['PaymentType'];
        $this->render('addpayment', array('model' => $model));
    }
    public function actionAddPayment()
    {
        if (isset($_POST['Payment'])||isset($_GET['id'])) {
            if(isset($_POST['Payment'])&&isset($_GET['id']))
            {
                Yii::app()->end();
            }
            if(isset($_GET['id']))
            {
                $model = PaymentType::model()->findByPk($_GET['id']);
                $this->render('_payment',array('model'=>$model));
                Yii::app()->end();
            }
            $model = new PaymentType;
            $model->attributes = array_merge(array('nid'=>$_POST['Payment']['type']==1?'online':'offline',),$_POST['Payment']);
            if($model->save())
                $this->redirect(Yii::app()->createUrl('admin/account/paymentList'));
        }
        $this->render('payment');
    }
    //recaharge type
    public function rechargeType($data, $row, $c)
    {
        return $data->type == 1 ? "线上充值" : "线下充值";
    }
    //payment
    public function payment($data, $row, $c)
    {
        return $data->payment == 0 ? "线下充值" : PaymentType::model()->findByPk($data->
            payment)->name;
    }
    public function afterfee($data, $row, $c)
    {
        return '<font color="red">' . sprintf("%01.2f", $data->money - $data->fee) .
            '</font>';
    }
    public function rechargeStatus($data, $row, $c)
    {
        return $data->status == '0' ? '<font color="grey">未审核</font>' : ($data->status ==
            '1' ? '<font color="green">成功</font>' : '<font color="red">失败</font>');
    }
    public function verifyRecharge($data, $row, $c)
    {
        return $data->status == '0' ? '<a href ="' . Yii::app()->baseUrl .
            '/index.php?r=admin/account/rechargeLog&id=' . $data->id . '">审核</a>' : '-';
    }
    public function getPaymentType($data,$row,$c)
    {
        return $data->type==1 ? '<font color="green">网上充值</font>':'<font color="blue">线下充值</font>';
    }
    /**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDeletePaymentType($id)
	{
		PaymentType::model()->findByPk($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
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
