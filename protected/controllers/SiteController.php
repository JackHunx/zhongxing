<?php

class SiteController extends SBaseController
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
                'maxLength'=>'5',
                'minLength'=>'4',
                'height'=>'40'
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}
    ///test upload
    public function actionUpload()
        {       
            
                //设定上传目录
                $tempFolder=Yii::getPathOfAlias('webroot').'/upload/temp/';
 
               // mkdir($tempFolder, 0777, TRUE);
//                mkdir($tempFolder.'chunks', 0777, TRUE);
// 
                Yii::import("ext.EFineUploader.qqFileUploader");
 
                $uploader = new qqFileUploader();
                $uploader->allowedExtensions = array('jpg','jpeg','doc');
                $uploader->sizeLimit = 2 * 1024 * 1024;//maximum file size in bytes
                $uploader->chunksFolder = $tempFolder.'chunks';
 
                $result = $uploader->handleUpload($tempFolder);
                $result['filename'] = $uploader->getUploadName();
                //$resuslt['response'] = "test";
               // $result['folder'] = $webFolder;
 
                $uploadedFile=$tempFolder.$result['filename'];
 
                header("Content-Type: text/html");
                $result=htmlspecialchars(json_encode($result), ENT_NOQUOTES);
                echo $result;
                //echo "haha";
                Yii::app()->end();
        }
        public function actionTestUpload()
        {
           if(isset($_POST['ajax']) && $_POST['ajax']=='FineUploader' )
           {
            print_r($_POST);
            exit();
           }
           $this->render('upload');
        }

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
	   $scroll=$this->getScrolPic();
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index',array('scroll'=>$scroll));
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;
        if(isset(Yii::app()->user->id))
        {
            echo '您已经登陆,请不要重复登陆';
            exit();
        }
		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}
    
    //获取滚动图片
    private function getScrolPic()
    {
        $record = Site::model()->find('nid=:nid',array(':nid'=>'scroll'))->content;
        if($record !==null)
        {
           return json_decode($record,true);
            //print_r($record);
        }
        return false;        
    }
    
	public function actionLoginold()
	{
		$model=new LoginForm;
        if(isset(Yii::app()->user->id))
        {
            echo '您已经登陆,请不要重复登陆';
            exit();
        }
		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login1',array('model'=>$model));
	}
	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}