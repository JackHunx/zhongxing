<?php

class UploadController extends SBaseController
{

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
                'actions' => array('index'),
                'users' => array('*'),
                ),
            array(
                'allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('card','attestation'),
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
     * upload card pic 
     */
    public function actionCard()
    {
        $tempFolder = Yii::getPathOfAlias('webroot') . '/upload/card/';
        Yii::import("ext.EFineUploader.qqFileUploader");
        $uploader = new qqFileUploader();
        $uploader->allowedExtensions = array(
            'jpg',
            'jpeg',
            'png',
            'gif');
        //the max size
        $uploader->sizeLimit = 500 * 1024; //100kb
        $uploader->chunksFolder = $tempFolder . 'chunks';
        $result = $uploader->handleUpload($tempFolder);
        //save to db

        $result['filename'] = $uploader->getUploadName();
        $result['url'] = Yii::app()->getBaseUrl() . '/upload/card/' .$uploader->getUploadName();
        $result['saveUrl']=$url= '/upload/card/' . $uploader->getUploadName();
        //$resuslt['response'] = "test";
        // $result['folder'] = $webFolder;

        $model = new Upfiles;
        $value = array(
            'name' => $result['filename'],
            'user_id' => Yii::app()->user->id,
            'code' => $_POST['code'],
            'aid' => '0',
            'status' => '0',
            'filetype' => $this->extend($result['filename']),
            'filename' => $result['filename'],
            'filesize' => filesize($tempFolder.$result['filename']),
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
            $uploadedFile = $tempFolder . $result['filename'];

            header("Content-Type: text/html");
            $result =json_encode($result);
            echo $result;
            //echo "haha";
            Yii::app()->end();
        }

    }
    //资料上传单个文件处理函数
    public function actionAttestation()
    {
        $tempFolder = Yii::getPathOfAlias('webroot') . '/upload/attestation/';
        Yii::import("ext.EFineUploader.qqFileUploader");
        $uploader = new qqFileUploader();
        $uploader->allowedExtensions = array(
            'jpg',
            'jpeg',
            'png',
            'gif');
        //the max size
        $uploader->sizeLimit = 500 * 1024; //100kb
        $uploader->chunksFolder = $tempFolder . 'chunks';
        $result = $uploader->handleUpload($tempFolder);
        //save to db

        $result['filename'] = $uploader->getUploadName();
        $result['url'] = Yii::app()->getBaseUrl() . '/upload/attestation/' .$uploader->getUploadName();
        $result['saveUrl']=$url= '/upload/attestation/' . $uploader->getUploadName();
        //$resuslt['response'] = "test";
        // $result['folder'] = $webFolder;

        $model = new Upfiles;
        $value = array(
            'name' => $result['filename'],
            'user_id' => Yii::app()->user->id,
            'code' => $_POST['code'],
            'aid' => '0',
            'status' => '0',
            'filetype' => $this->extend($result['filename']),
            'filename' => $result['filename'],
            'filesize' => filesize($tempFolder.$result['filename']),
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
            $uploadedFile = $tempFolder . $result['filename'];

            header("Content-Type: text/html");
            $result =json_encode($result);
            echo $result;
            //echo "haha";
            Yii::app()->end();
        }
    }
    private function extend($filename)
    {
        $extend = explode('.', $filename);
        $val = count($extend) - 1;
        return $extend[$val];
    }
    //return model

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
