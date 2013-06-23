<?php

class UserController extends SBaseController
{
    private $userInfo = array();
    //auth key
    private $authKey = 'safeEmail';
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

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
            array(
                'allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array(
                    'index',
                    'view',
                    'register',
                    'check_email',
                    'check_username',
                    'checkstring'),
                'users' => array('*'),
                ),
            array(
                'allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update','setquestion'),
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

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id)
    {
        $this->render('view', array('model' => $this->loadModel($id), ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {   
        $userid='6';
        $this->render('msg',array('msg'=>'邮箱激活成功','msg_url'=>Yii::app()->baseUrl.'/index.php?r=User&id='.$userid,'msg_content'=>'进入用户中心'));
        exit();
        $code='2&159.mzod@163.com';
        $string = Yii::app()->authstring->authcode($code, 'ENCODE', $this->
            authKey);
        //对加密字符串进行编码传递 不能用urlencode()函数 此函数不能编码 ‘/’ 等数据
        $string = rawurlencode($string);
        print_r($string);
        echo"</br>";
        $string = rawurldecode($string);
        $value=Yii::app()->authstring->authcode($string,'DECODE',$this->authKey);
        print_r($value);
        echo "</br>";
        list($id,$email)=explode('&',$value);
        echo 'id='.$id.'</br>';
        
        echo 'email='.$email;
        /**

         *         $email = '43555015@qq.com';
         *         $safeEmail = Yii::app()->authstring->authcode($email,'ENCODE','safeEmail');
         *         $urlEnsafeEmail=urlencode($safeEmail);
         *         print_r($urlEnsafeEmail);
         */
        /**
         * $model=new User;

         * 		// Uncomment the following line if AJAX validation is needed
         * 		// $this->performAjaxValidation($model);

         * 		if(isset($_POST['User']))
         * 		{
         * 		  echo '<pre>';
         * 		  print_r($_POST['User']);
         *           exit();
         * 			$model->attributes=$_POST['User'];
         * 			if($model->save())
         * 				$this->redirect(array('view','id'=>$model->user_id));
         * 		}

         * 		$this->render('create',array(
         * 			'model'=>$model,
         * 		));
         */
    }
    //return email post body
    private function getEmailBody()
    {
        $code=$this->userInfo['id'].'&'.$this->userInfo['email'];
        $string = Yii::app()->authstring->authcode($code, 'ENCODE', $this->
            authKey);
        //对加密字符串进行编码传递 不能用urlencode()函数 此函数不能编码 ‘/’ 等数据
        $string = rawurlencode($string);
        return "
	<div style=\"background: url(" . $this->userInfo['webUrl'] .
            "/data/images/base/email_bg.png) no-repeat left bottom; font-size:14px; width: 588px; \">
	<div style=\"padding: 10px 0px; background: url(" . $this->userInfo['webUrl'] .
            "/data/images/base/email_button.png)  no-repeat \">
		<h1 style=\"padding: 0px 15px; margin: 0px; overflow: hidden; height: 48px;\">
			<a title=\"众兴投资用户中心\" href=\"" . $this->userInfo['webUrl'] .
            "/index.php?r=User\" target=\"_blank\" swaped=\"true\">
			<img style=\"border-width: 0px; padding: 0px; margin: 0px;\" alt=\"众兴投资用户中心\" src=\"" .
            $this->userInfo['webUrl'] . "/data/images/base/email_logo.png\" height=\"48\" width=\"208\">		</a>
		</h1>
		<div style=\"padding: 0px 20px; overflow: hidden; line-height: 40px; height: 50px; text-align: right;\"> </div>
		<div style=\"padding: 2px 20px 30px;\">
			<p>亲爱的 <span style=\"color: rgb(196, 0, 0);\">" . $this->userInfo['realname'] .
            "</span> , 您好！</p>
			<p>感谢您注册众兴投资，您登录的邮箱帐号为 <strong style=\"font-size: 16px;\">" . $this->
            userInfo['email'] . "</strong></p>
			<p>请点击下面的链接即可完成激活。</p>
			<p style=\"overflow: hidden; width: 100%; word-wrap: break-word;\"><a title=\"点击完成注册\" href=\"" .
            $this->userInfo['webUrl'] . "/index.php?r=user/checkstring&string=" . $string .
            "\" target=\"_blank\" swaped=\"true\">" . $this->userInfo['webUrl'] .
            "/index.php?r=user/checkestring&string=" . $string . "</a>
			<br><span style=\"color: rgb(153, 153, 153);\">(如果链接无法点击，请将它拷贝到浏览器的地址栏中)</span></p>

			<p>感谢您光临众兴投资用户中心，我们的宗旨：为您提供优秀的产品和优质的服务！ <br>现在就登录吧!
			<a title=\"点击登录众兴投资用户中心\" style=\"color: rgb(15, 136, 221);\" href=\"" . $this->
            userInfo['webUrl'] . "/index.php?r=User\" target=\"_blank\" swaped=\"true\">" .
            $this->userInfo['webUrl'] . "/index.php?r=User</a> 
			</p>
			<p style=\"text-align: right;\"><br>众兴投资用户中心 敬启</p>
			<p><br>此为自动发送邮件，请勿直接回复！如您有任何疑问，请点击<a title=\"点击联系我们\" style=\"color: rgb(15, 136, 221);\" href=\"" .
            $this->userInfo['webUrl'] . "/help/index.html\" target=\"_blank\" >联系我们&gt;&gt;</a></p>
		</div>
	</div>
</div>
		";
    }
    /**
     * user register
     */
    public function actionRegister()
    {

        $model = new User;
        //print_r($model->attributes);
        if (isset($_POST['User'])) {
            $value = $_POST['User'];
            $value['username'] = strtolower($value['username']);
            $value['password'] = $this->encypt($value['password']);
            $value['addip'] = Yii::app()->request->getUserHostAddress();
            $value['addtime'] = time();
            $value['uptime']=$value['addtime'];
            $value['upip']=$value['addip'];
            //发送验证邮件
            //$this->sendEmail($value['email'], $value['realname']);
            //            header("Content-Type: text/html; charset=utf-8");
            //            echo '<pre>';
            //            print_r($value);
            //            exit();
            $model->attributes = $value;
            if ($model->save()) {
                //发送验证邮件并记录
                $this->sendEmail($value['email'], $value['realname'], $model->user_id);
                //进入用户中心
                 $this->redirect(array('User/','id'=>$model->user_id));
                //$this->redirect(array('view', 'id' => $model->user_id));
                
            }
            //$model->attributes = $_POST['User'];
            //print_r($_POST['User']);
        }
        $this->render('register');
    }
    /**
     * check user name exist
     * 
     */
    /**
     *  public function actionCheck_exists()
     *     {
     *         $key='admin';
     *         
     *         $value=User::model()->find('LOWER(username)=?',array($username));
     *         //$exists=User::model()->exists($value);
     *         echo'<pre>';
     *         print_r($value);
     *         exit();
     *         if($exists=='')
     *         {
     *             return true;
     *         }else{
     *             return false;
     *         }
     *     }
     */
    //check email

    public function actionCheck_email()
    {
        if (isset($_GET['email'])) {
            $email = $_GET['email'];

            $exists = User::model()->findByAttributes(array('email' => $email));
            if ($exists == null)
                printf('true');
            else
                printf('false');
        }

    }
    //check username
    public function actionCheck_username()
    {
        if (isset($_GET['username'])) {
            $username = strtolower($_GET['username']);

            $exists = User::model()->findByAttributes(array('username' => $username));
            if ($exists == null)
                printf('true');
            else
                printf('false');
        }

    }
    //邮箱验证
    public function actionCheckstring()
    {
        //get string
        $string = $_GET['string'];
        //decode string
        $string = rawurldecode($string);
        
        $value = Yii::app()->authstring->authcode($string, 'DECODE', $this->authKey);
        //验证开始
        list($userid,$email)=explode('&',$value);
        $model = $this->loadModel($userid);
        if($model->email == $email)
        {
            //验证成功 更改状态
            $model->email_status='1';
            if($model->save())
            {
                //邮箱验证状态更改
                $this->render('msg',array('msg'=>'邮箱激活成功','msg_url'=>Yii::app()->baseUrl.'/index.php?r=User&id='.$userid,'msg_content'=>'进入用户中心'));
            }
            
        }else{
            //邮箱验证失败，有可能是邮箱验证超出时间，有可能数据不对跳转到重新发送验证邮件
            $this->render('msg',array('msg'=>'验证失败,进入用户中心重新验证','msg_url'=>'','msg_content'=>''));
        }
        //
      //  print_r($email);
    }
    //send auth email
    private function sendEmail($email, $realname, $userid)
    {
        $model = new UserSendemailLog;
        $this->userInfo['id']=$userid;
        $this->userInfo['email'] = $email;
        $this->userInfo['realname'] = $realname;
        $this->userInfo['webUrl'] = System::model()->find('nid=:nid', array(':nid' =>
                'con_weburl'))->value;
        //save log to user_sendemail_log
        $model->attributes = array(
            'status' => '1',
            'title' => "注册邮件确认",
            'type' => 'reg',
            'email' => $this->userInfo['email'],
            'user_id' => $userid,
            'msg' => $this->getEmailBody(),
            'addtime' => time(),
            'addip' => Yii::app()->request->getUserHostAddress(),
            );
        if ($model->save()) {
            return Yii::app()->sendemail->send($this->userInfo['email'], '众兴投资有限公司', '邮件验证',
                $this->getEmailBody());
        }
    }
    //encypt password by md5
    private function encypt($value)
    {
        return md5($value);
    }
    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id)
    {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['User'])) {
            $model->attributes = $_POST['User'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->user_id));
        }

        $this->render('update', array('model' => $model, ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id)
    {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex()
    {
        $dataProvider = new CActiveDataProvider('User');
        $this->render('index', array('dataProvider' => $dataProvider, ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $model = new User('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['User']))
            $model->attributes = $_GET['User'];

        $this->render('admin', array('model' => $model, ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return User the loaded model
     * @throws CHttpException
     */
    public function loadModel($id)
    {
        $model = User::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param User $model the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'user-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}
