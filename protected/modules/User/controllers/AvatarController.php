<?php

class AvatarController extends SBaseController
{
    public $layout = '/layouts/validate';
    public function init()
    {
        //注册jquery
        $cs = Yii::app()->clientScript;
        $cs->registerCoreScript('jquery');
        $cs->registerCssFile(Yii::app()->baseUrl . '/css/user.css');
        $cs->registerCssFile(Yii::app()->baseUrl . '/css/user_new.css');
        $cs->registerCssFile(Yii::app()->baseUrl . '/css/index.css');
        $cs->registerCssFile(Yii::app()->baseUrl . '/css/main_user.css');
        $cs->registerCssFile(Yii::app()->baseUrl . '/css/css.css');

    }
    //access controller
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
                //'index',
                'actions' => array('view'),
                'users' => array('*'),
                ),
            array(
                'allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array(
                    'index',
                    'avatar',
                    'upload',
                    'saveAvatar'),
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

    public function actionIndex()
    {
        $this->render('index');
    }
    public function actionUpload()
    {
        @header("Expires: 0");
        @header("Cache-Control: private, post-check=0, pre-check=0, max-age=0", false);
        @header("Pragma: no-cache");
        //define('SD_ROOT', dirname(__file__) . '/');
        $floder = Yii::getPathOfAlias('webroot') . '/upload/avatar/';
        $pic_id = time(); //使用时间来模拟图片的ID.
        $pic_dir = $floder . '/avatar_origin/';
        if (!is_dir($pic_dir)) {
            if (!mkdir($pic_dir, 0777, true))
                echo '<script type="text/javascript">alert("创建avatar_origin文件夹失败,检查用户权限");</script>';
        }
        $pic_path = $pic_dir . $pic_id . '.jpg';
        //上传后图片的绝对地址
        //$pic_abs_path = 'http://sns.com/avatar_test/avatar_origin/'.$pic_id.'.jpg';
        $pic_abs_path = Yii::app()->baseUrl . '/upload/avatar/avatar_origin/' . $pic_id .
            '.jpg';
        //保存上传图片.
        //$picName=
        if (empty($_FILES['Filedata'])) {
            echo '<script type="text/javascript">alert("对不起, 图片未上传成功, 请再试一下");</script>';
            exit();
        }

        $file = @$_FILES['Filedata']['tmp_name'];

        file_exists($pic_path) && @unlink($pic_path);
        if (@copy($_FILES['Filedata']['tmp_name'], $pic_path) || @move_uploaded_file($_FILES['Filedata']['tmp_name'],
            $pic_path)) {
            @unlink($_FILES['Filedata']['tmp_name']);
            /*list($width, $height, $type, $attr) = getimagesize($pic_path);
            if($width < 10 || $height < 10 || $width > 3000 || $height > 3000 || $type == 4) {
            @unlink($pic_path);
            return -2;
            }*/
        } else {
            echo "<pre>";
            print_r($_FILES);
            echo '<br>';
            print_r($pic_path);
            exit();
            //@unlink($_FILES['Filedata']['tmp_name']);
            echo '<script type="text/javascript">alert("对不起, 上传失败");</script>';
        }

        //写新上传照片的ID.
        echo '<script type="text/javascript">window.parent.hideLoading();window.parent.buildAvatarEditor("' .
            $pic_id . '","' . $pic_abs_path . '","photo");</script>';
    }

    // sava avatar
    /**
     * save avatar
     * 
     */
    public function actionSaveAvatar()
    {
        //define('SD_ROOT', dirname(__file__) . '/');
        @header("Expires: 0");
        @header("Cache-Control: private, post-check=0, pre-check=0, max-age=0", false);
        @header("Pragma: no-cache");

        //这里传过来会有两种类型，一先一后, big和small, 保存成功后返回一个json字串，客户端会再次post下一个.
        $type = isset($_GET['type']) ? trim($_GET['type']) : 'small';
        $pic_id = trim($_GET['photoId']);
        //$orgin_pic_path = $_GET['photoServer']; //原始图片地址，备用.
        //$from = $_GET['from']; //原始图片地址，备用.
        $path = Yii::getPathOfAlias('webroot') . '/upload/avatar/avatar_' . $type;
        if (!is_dir($path)) {
            if (!mkdir($path, 0777, true))
                throw new CException('you dont hava power to create floder');
        }
        //生成图片存放路径
        $new_avatar_path = $path . '/' . $pic_id . '_' . $type . '.jpg';
        $url = Yii::app()->getBaseUrl() . '/upload/avatar/avatar_' . $type . '/' . $pic_id .
            '_' . $type . '.jpg';

        //将POST过来的二进制数据直接写入图片文件.
        $len = file_put_contents($new_avatar_path, file_get_contents("php://input"));

        //原始图片比较大，压缩一下. 效果还是很明显的, 使用80%的压缩率肉眼基本没有什么区别
        //小图片 不压缩约6K, 压缩后 2K, 大图片约 50K, 压缩后 10K
        $avtar_img = imagecreatefromjpeg($new_avatar_path);
        imagejpeg($avtar_img, $new_avatar_path, 80);
        //nix系统下有必要时可以使用 chmod($filename,$permissions);

        //log_result('图片大小: '.$len);
        //save to data base
        if ($type == 'small') {
            $picName = $pic_id;
            $this->saveToDb($picName);
            //
        }
        //输出新保存的图片位置, 测试时注意改一下域名路径, 后面的statusText是成功提示信息.
        //status 为1 是成功上传，否则为失败.
        $d = array(
            'data' => array('urls' => array($url), ),
            'status' => 1,
            'statusText' => '长传成功',
            );
        $msg = json_encode($d);

        echo $msg;

    }
    //private function
    //save to database
    private function saveToDb($picName)
    {
        $model = new Userinfo;

        $record = $model->findByAttributes(array('user_id' => Yii::app()->user->id));
        if ($record == null) {
            $value = array(
                'site_id' => '1',
                'user_id' => Yii::app()->user->id,
                'status' => '0',
                'hits' => '0',
                'litpic' => $picName,
                // 'addtime'=>time(),

                );
            $value['addtime'] = $value['updatetime'] = time();
            $value['addip'] = $value['updateip'] = Yii::app()->request->getUserHostAddress();
            $model->attributes = $value;
            if (!$model->save()) {
                throw new CException("save avatar url to db error");
            }
        } else {
            //delete old avatar from hard disk
            $dir = Yii::getPathOfAlias('webroot') . '/upload/avatar';
            $pic = $record->litpic;
            //if(is_file($dir . '/avatar_orin/'. $pic . '.jpg'))
            if (is_file($dir . '/avatar_origin/' . $pic . '.jpg') && is_file($dir .
                '/avatar_big/' . $pic . '_big.jpg') && is_file($dir . '/avatar_small/' . $pic .
                '_small.jpg')) {
                unlink($dir . '/avatar_origin/' . $pic . '.jpg');
                unlink($dir . '/avatar_big/' . $pic . '_big.jpg');
                unlink($dir . '/avatar_small/' . $pic . '_small.jpg');

            }
            $pk = $record->id;
            $value = array(
                'litpic' => $picName,
                'updatetime' => time(),
                'updateip' => Yii::app()->request->getUserHostAddress(),
                );
            $status = $model->updateByPk($pk, $value);
            if (!$status > 0) {
                throw new CException('update by pk error ');
            }
        }
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
