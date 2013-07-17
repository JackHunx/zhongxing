<?php

class SiteController extends SBaseController
{
    private $info = array(); //user info
    public function init()
    {
        Yii::app()->clientScript->registerCoreScript('jquery');
    }
    /**
     * Declares class-based actions.
     */
    public function actions()
    {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
                'maxLength' => '5',
                'minLength' => '4',
                'height' => '40'),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array('class' => 'CViewAction', ),
            );
    }
    //test 
    public function actionTest()
    {
        echo Yii::app()->credit->getRank('123');
    }
    ///test upload
    public function actionUpload()
    {
		
        //设定上传目录
        $tempFolder = Yii::getPathOfAlias('webroot') . '/upload/temp/';

        // mkdir($tempFolder, 0777, TRUE);
        //                mkdir($tempFolder.'chunks', 0777, TRUE);
        //
        Yii::import("ext.EFineUploader.qqFileUploader");

        $uploader = new qqFileUploader();
        $uploader->allowedExtensions = array(
            'jpg',
            'jpeg',
            'doc');
        $uploader->sizeLimit = 500 * 1024; //maximum file size in bytes
        $uploader->chunksFolder = $tempFolder . 'chunks';

        $result = $uploader->handleUpload($tempFolder);
        $result['filename'] = $uploader->getUploadName();
        $result['url'] = Yii::app()->getBaseUrl() . '/upload/temp/' . $uploader->getUploadName();
        //$resuslt['response'] = "test";
        // $result['folder'] = $webFolder;

        $uploadedFile = $tempFolder . $result['filename'];

        header("Content-Type: text/html");
        $result = htmlspecialchars(json_encode($result), ENT_NOQUOTES);
        echo $result;
        //echo "haha";
        Yii::app()->end();
    }
    public function actionUploads()
    {
        if (!isset(Yii::app()->user->id)) {
            throw new CException('No user id');
        }
        /**
         * Created by JetBrains PhpStorm.
         * User: taoqili
         * Date: 12-7-26
         * Time: 上午10:32
         */
        $saveFolder = Yii::getPathOfAlias('webroot') . '/upload/credit/';
        header("Content-Type: text/html; charset=utf-8");
        error_reporting(E_ERROR | E_WARNING);
        //include "Uploader.class.php";
        //上传配置
        $config = array(
            "savePath" => $saveFolder, //保存路径
            "allowFiles" => array(
                ".rar",
                ".doc",
                ".docx",
                ".zip",
                ".pdf",
                ".txt",
                ".swf",
                ".wmv",
                ".jpg"), //文件允许格式
            "maxSize" => 100000 //文件大小限制，单位KB
                );
        //生成上传实例对象并完成上传
        Yii::import("ext.FilesUpload.php.Uploader");
        $up = new Uploader("upfile", $config);

        /**
         * 得到上传文件所对应的各个参数,数组结构
         * array(
         *     "originalName" => "",   //原始文件名
         *     "name" => "",           //新文件名
         *     "url" => "",            //返回的地址
         *     "size" => "",           //文件大小
         *     "type" => "" ,          //文件类型
         *     "state" => ""           //上传状态，上传成功时必须返回"SUCCESS"
         * )
         */

        $upinfo = $up->getFileInfo();
        $patterns = Yii::getPathOfAlias('webroot');
        //$replace = Yii::app()->basePath;
        $url = str_replace($patterns, "", $upinfo['url']);
        //save to database
        
        $model = new Upfiles;
        //$value['name']= htmlspecialchars($_POST['pictitle'], ENT_QUOTES);
        //         $value['user_id']=Yii::app()->user->id;
        //         $value['filetype']=$upinfo['type'];
        //         $value['filename']=$upinfo['originalName'];
        //         $value['filesize']=filesize($upinfo['url']);
        //
        $value = array(
            'name' => htmlspecialchars($_POST['pictitle'], ENT_QUOTES),
            'user_id' => Yii::app()->user->id,
            'aid' => '0',
            'status' => '0',
            'filetype' => $upinfo['type'],
            'filename' => $upinfo['originalName'],
            'filesize' => filesize($upinfo['url']),
            'fileurl' => $url,
            'if_cover' => '0',
            'order' => '0',
            'hits' => '0',
            'addtime' => time(),
            'addip' => Yii::app()->request->getUserHostAddress(),
            );
        $value['updatetime'] = $value['addtime'];
        $value['updateip'] = $value['addip'];
        $model->attributes = $value;
        if ($model->save()) {
            /**
             * 向浏览器返回数据json数据
             * {
             *   'url'      :'a.rar',        //保存后的文件路径
             *   'fileType' :'.rar',         //文件描述，对图片来说在前端会添加到title属性上
             *   'original' :'编辑器.jpg',   //原始文件名
             *   'state'    :'SUCCESS'       //上传状态，成功时返回SUCCESS,其他任何值将原样返回至图片上传框中
             * }
             */
            echo '{"url":"' . $url . '","fileType":"' . $upinfo['type'] . '","original":"' .
                $upinfo["originalName"] . '","state":"' . $upinfo["state"] . '"}';
        } else {
            throw new CException("Save to data base error!");
        }

    }
    public function actionTestUpload()
    {

        //$this->render('uploads');
        // if(isset($_POST['ajax']) && $_POST['ajax']=='FineUploader' )
        //           {
        //            print_r($_POST);
        //            exit();
        //           }
        $this->render('upload');
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex()
    {
        // get scrolPic
        $scroll = $this->getScrolPic();
        //get user info
        $this->getUserInfo('small');
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $this->render('index', array('scroll' => $scroll, 'userInfo' => $this->info));
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError()
    {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
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
        $model = new ContactForm;
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
                $name = '=?UTF-8?B?' . base64_encode($model->name) . '?=';
                $subject = '=?UTF-8?B?' . base64_encode($model->subject) . '?=';
                $headers = "From: $name <{$model->email}>\r\n" . "Reply-To: {$model->email}\r\n" .
                    "MIME-Version: 1.0\r\n" . "Content-type: text/plain; charset=UTF-8";

                mail(Yii::app()->params['adminEmail'], $subject, $model->body, $headers);
                Yii::app()->user->setFlash('contact',
                    'Thank you for contacting us. We will respond to you as soon as possible.');
                $this->refresh();
            }
        }
        $this->render('contact', array('model' => $model));
    }

    /**
     * Displays the login page
     */
    public function actionLogin()
    {
        $model = new LoginForm;
        if (isset(Yii::app()->user->id)) {
            $this->redirect('index.php?r=User');
            //echo '您已经登陆,请不要重复登陆';

        }
        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginForm'])) {

            $model->attributes = $_POST['LoginForm'];
            // echo "<pre>";
            //            print_r($model->attributes);
            //            exit();
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login())
                $this->redirect(Yii::app()->user->returnUrl);
        }
        // display the login form
        $this->render('login', array('model' => $model));
    }
    //获取用户信息
    private function getUserInfo($type)
    {
        $record = Userinfo::model()->findByAttributes(array('user_id' => Yii::app()->
                user->id));
        //print_r($record->litpic)
        $this->info['avatar'] = (($record != null && is_file(Yii::getPathOfAlias('webroot') .
            '/upload/avatar/avatar_' . $type . '/' . $record->litpic . '_' . $type . '.jpg')) ?
            Yii::app()->baseUrl . '/upload/avatar/avatar_' . $type . '/' . $record->litpic .
            '_' . $type . '.jpg' : Yii::app()->baseUrl . '/images/default_avatar.jpg');

    }
    //获取滚动图片
    private function getScrolPic()
    {
        $record = Site::model()->find('nid=:nid', array(':nid' => 'scroll'))->content;
        if ($record !== null) {
            return json_decode($record, true);
            //print_r($record);
        }
        return false;
    }

    public function actionLoginold()
    {
        $model = new LoginForm;
        if (isset(Yii::app()->user->id)) {
            echo '您已经登陆,请不要重复登陆';
            exit();
        }
        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login())
                $this->redirect(Yii::app()->user->returnUrl);
        }
        // display the login form
        $this->render('login1', array('model' => $model));
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
