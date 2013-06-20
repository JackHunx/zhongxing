<?php

class UserController extends Controller
{
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
                    'check_username'),
                'users' => array('*'),
                ),
            array(
                'allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update'),
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
        Yii::app()->sendemail->send('jack_hunx@163.com','test','est','send mail test');
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
            $value['addip'] = Yii::app()->request->getUserHostAddress;
            $value['addtime'] = time();

            $model->attributes = $value;
            if ($model->save()) {
                $this->redirect(array('view', 'id' => $model->user_id));
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
