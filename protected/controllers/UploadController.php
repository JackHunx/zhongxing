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
            // 写入attestation表中
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
