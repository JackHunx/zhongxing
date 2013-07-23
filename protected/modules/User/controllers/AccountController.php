<?php

class AccountController extends SBaseController
{
    public $layout = "/layouts/account";
    public function actions()
    {
        return array('captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
                'maxLength' => '5',
                'minLength' => '4',
                'height' => '30'), //'page' => array('class' => 'CViewAction', ),
                );
    }
    /**
     * @return array action filters
     */
    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
            );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules()
    {
        return array(
            //array(
            //                'allow', // allow all users to perform 'index' and 'view' actions
            //                'actions' => array(
            //                    'index',
            //                   ),
            //                'users' => array('*'),
            //                ),
            array(
                'allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array(
                    'index',
                    'recharge',
                    'bank',
                    'captcha',
                    'rechargelog',
                    'log'),
                'users' => array('@'),
                ),
            array(
                'allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
                ),
            array(
                'deny', // deny all users
                'users' => array('*'),
                ),
            );
    }

    //init sdaf
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
    //账户详情
    public function actionIndex()
    {
        $this->render('index');
    }
    /**
     * info = array('webname'=>,)
     * 
     */
    public function actionBank()
    {
        $webname = $this->getWebName();
        $bank = AccountBank::model()->find('user_id=:user_id', array(':user_id' => Yii::
                app()->user->id));

        if (isset($_POST['bank'])) {
            if ($bank == null) {
                $bank = new AccountBank;
                $array = array(
                    'user_id' => Yii::app()->user->id,
                    'addtime' => time(),
                    'addip' => Yii::app()->request->getUserHostAddress(),
                    );
                $bank->attributes = array_merge($array, $_POST['bank']);
                if (!$bank->save())
                    throw new CException('Save to bank table error');
                $this->layout = "//layouts/main";
                $this->render('//site/msg', array(
                    'msg' => '添加成功',
                    'msg_url' => Yii::app()->request->urlReferrer,
                    'msg_content' => '点击返回'));
            } else {
                $bank->attributes = $_POST['bank'];
                if (!$bank->update())
                    throw new CException('update to bank error');
                $this->layout = "//layouts/main";
                $this->render('//site/msg', array(
                    'msg' => '更新成功',
                    'msg_url' => Yii::app()->request->urlReferrer,
                    'msg_content' => '点击返回'));
            }
        } else {
            $bank_status = ($bank == null) ? 0 : 1;
            //$bank = Linkage::model()->findByPk($bank)
            if ($bank_status == 1)
                $bankname = Linkage::model()->findByPk($bank->bank)->value;
            else
                $bankname = null;
            $user = User::model()->findByPk(Yii::app()->user->id);
            $this->render('bank', array(
                'webname' => $webname,
                'bankname' => $bankname,
                'bank' => $bank,
                'bank_status' => $bank_status,
                'user' => $user));
        }

    }
    /**
     * recharge to account 
     * -审核成功后记录入account账户,account为一个用户一条记录
     * -每次充值都写入account_recharge 表 不论充值成功与否
     * -
     * @important 功能只能实现线下充值
     * 
     */
    public function actionRecharge()
    {
        $offline = $this->getPaymentType('2');
        $online = $this->getPaymentType('1');
        $webname = $this->getWebName();
        $user = User::model()->findByPk(Yii::app()->user->id);
        if (isset($_POST['recharge'])) {
            //记录入数据库等待审核 线下充值
            $model = new AccountRecharge;
            $value = array(
                'trade_no' => time() . Yii::app()->user->id . rand(1, 999),
                'user_id' => Yii::app()->user->id,
                'status' => '0',
                'addtime' => time(),
                'addip' => Yii::app()->request->getUserHostAddress(),
                );
            $model->attributes = array_merge($value, $_POST['recharge']);
            //验证码验证
            if (!$this->createAction('captcha')->validate($_POST['verifyCode'], false)) {
                $this->layout = "//layouts/main";
                $this->render("//site/msg", array(
                    'msg' => "验证码输入错误",
                    'msg_url' => Yii::app()->request->urlReferrer,
                    'msg_content' => '点击返回'));
                Yii::app()->end();
            }

            if (!$model->save())
                throw new CHttpException('505');
            $this->layout = "//layouts/main";
            $this->render("//site/msg", array(
                'msg' => "充值完成等待审核",
                'msg_url' => Yii::app()->baseUrl . '/index.php?r=User',
                'msg_content' => '回到用户中心'));
            Yii::app()->end();
        }

        $this->render('recharge', array(
            'webname' => $webname,
            'user' => $user,
            'offline' => $offline,
            'online' => $online));
    }
    public function actionRechargeLog()
    {
        $criteria = new CDbCriteria;
        $count = AccountRecharge::model()->count('user_id=:user_id', array(':user_id' =>
                Yii::app()->user->id));
        $user_id = Yii::app()->user->id;
        $criteria->addCondition("user_id={$user_id}");
        $criteria->order = 'addtime DESC';

        // $record = AccountRecharge::model()->findAll("user_id=:userid",array(':user_id'=>Yii::app()->user->id),array('order'=>'addtime desc','limit'=>,'offset'=>$pages));
        // $record = AccountRecharge::model()->findAll()
        //('user_id=:user_id',array(':user_id'=>Yii::app()->user->id));
        //$value = $record->getAttributes();
        $pages = new CPagination($count);
        $pages->pageSize = 10;
        $pages->applyLimit($criteria);
        $criteria->limit = $pages->pageSize;
        $criteria->offset = $pages->currentPage * $pages->pageSize;
        $record=AccountRecharge::model()->findAll($criteria);

        // print_r();
        //$criteria = new CDbCriteria();
        //$model->unsetAttributes();

        $this->render('rechargelog', array('posts' => $record, 'pages' => $pages));
    }
    public function actionCash()
    {
        $this->render('cash');
    }
    public function actionCashLog()
    {
        $this->render('cashlog');
    }
    public function actionLog()
    {
        $this->render('log');
    }
    //@returen webname;;
    private function getWebName()
    {
        $webname = System::model()->find('nid=:nid', array(':nid' => 'con_webname'))->
            value;
        if ($webname == null)
            $webname = '网站名称未设置';
        return $webname;
    }
    /**
     * payment type nid=1为线上充值online，nid=1为线下充值offline
     * @return array sort by order
     */

    private function getPaymentType($type)
    {
        $record = PaymentType::model()->findAll('type=:type', array(':type' => $type));
        if ($record != null) {
            $value = array();
            for ($i = 0; $i < count($record); $i++) {
                $value[$record[$i]->order] = array(
                    'id' => $record[$i]->id,
                    'name' => $record[$i]->name,
                    'description' => $record[$i]->description);
            }
            //对结果根据 key 升序排序
            ksort($value);
        } else
            $value = array('0' => array(
                    'id' => '0',
                    'name' => '账户未设置',
                    'description' => '000000'));
        return $value;

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
