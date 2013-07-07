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
                'actions' => array('card', 'attestation','moreAttestation'),
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
        $result['url'] = Yii::app()->getBaseUrl() . '/upload/card/' . $uploader->
            getUploadName();
        $result['saveUrl'] = $url = '/upload/card/' . $uploader->getUploadName();
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
            'filesize' => filesize($tempFolder . $result['filename']),
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
            $result = json_encode($result);
            echo $result;
            //echo "haha";
            Yii::app()->end();
        }

    }
    //�����ϴ������ļ�������
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
        $result['url'] = Yii::app()->getBaseUrl() . '/upload/attestation/' . $uploader->
            getUploadName();
        $result['saveUrl'] = $url = '/upload/attestation/' . $uploader->getUploadName();
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
            'filesize' => filesize($tempFolder . $result['filename']),
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
            $result = json_encode($result);
            echo $result;
            //echo "haha";
            Yii::app()->end();
        }
    }
    public function actionMoreAttestation()
    {
        if (!isset(Yii::app()->user->id)) {
            throw new CException('No user id');
        }

        $saveFolder = Yii::getPathOfAlias('webroot') . '/upload/attestation/';
        header("Content-Type: text/html; charset=utf-8");
        error_reporting(E_ERROR | E_WARNING);
        //include "Uploader.class.php";
        //�ϴ�����
        $config = array(
            "savePath" => $saveFolder, //����·��
            "allowFiles" => array(
                ".rar",
                ".doc",
                ".docx",
                ".zip",
                ".pdf",
                ".txt",
                ".swf",
                ".wmv",
                ".jpg"), //�ļ������ʽ
            "maxSize" => 100000 //�ļ���С���ƣ���λKB
                );
        //�����ϴ�ʵ����������ϴ�
        Yii::import("ext.FilesUpload.php.Uploader");
        $up = new Uploader("upfile", $config);

        /**
         * �õ��ϴ��ļ�����Ӧ�ĸ�������,����ṹ
         * array(
         *     "originalName" => "",   //ԭʼ�ļ���
         *     "name" => "",           //���ļ���
         *     "url" => "",            //���صĵ�ַ
         *     "size" => "",           //�ļ���С
         *     "type" => "" ,          //�ļ�����
         *     "state" => ""           //�ϴ�״̬���ϴ��ɹ�ʱ���뷵��"SUCCESS"
         * )
         */

        $upinfo = $up->getFileInfo();
        $patterns = Yii::getPathOfAlias('webroot');
        //$replace = Yii::app()->getBaseUrl();
        $url = str_replace($patterns, "", $upinfo['url']);
        //save to database
        $model = new Upfiles;

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
            // д��attestation����
            $attestation = new Attestation;
            $attarray = array(
                'user_id' => Yii::app()->user->id,
                'status' => '0',
                'content' => $value['name'],
                'litpic' => $url,
                'addtime' => time(),
                'addip' => Yii::app()->request->getUserHostAddress(),

                );
            $attestation->attributes = $attarray;
            if (!$attestation->save()) {

                $model->delete();
                unlink(Yii::app()->basePath . $url);
                $upinfo['state'] = 'false';
            }

            /**
             * ���������������json����
             * {
             *   'url'      :'a.rar',        //�������ļ�·��
             *   'fileType' :'.rar',         //�ļ���������ͼƬ��˵��ǰ�˻���ӵ�title������
             *   'original' :'�༭��.jpg',   //ԭʼ�ļ���
             *   'state'    :'SUCCESS'       //�ϴ�״̬���ɹ�ʱ����SUCCESS,�����κ�ֵ��ԭ��������ͼƬ�ϴ�����
             * }
             */
            echo '{"url":"' . $url . '","fileType":"' . $upinfo['type'] . '","original":"' .
                $upinfo["originalName"] . '","state":"' . $upinfo["state"] . '"}';
        } else {
            throw new CException("Save to data base error!");
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
