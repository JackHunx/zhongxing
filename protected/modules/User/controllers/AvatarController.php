<?php

class AvatarController extends SBaseController
{
    public $layout = '/layouts/user';
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
    public function actionIndex()
    {
        $this->render('index');
    }
    public function actionUpload()
    {
        @header("Expires: 0");
        @header("Cache-Control: private, post-check=0, pre-check=0, max-age=0", false);
        @header("Pragma: no-cache");
        define('SD_ROOT', dirname(__file__) . '/');
        $pic_id = time(); //使用时间来模拟图片的ID.
        $pic_path = SD_ROOT . './avatar_origin/' . $pic_id . '.jpg';
        //上传后图片的绝对地址
        //$pic_abs_path = 'http://sns.com/avatar_test/avatar_origin/'.$pic_id.'.jpg';
        $pic_abs_path = '/avatar_test/avatar_origin/' . $pic_id . '.jpg';
        //保存上传图片.
        if (empty($_FILES['Filedata'])) {
            echo '<script type="text/javascript">alert("对不起, 图片未上传成功, 请再试一下");</script>';
            exit();
        }
       
        $file = @$_FILES['Filedata']['tmp_name'];

        file_exists($pic_path) && @unlink($pic_path);
        if (@copy($_FILES['Filedata']['tmp_name'], $pic_path) || @move_uploaded_file($_FILES['Filedata']['tmp_name'],$pic_path)) {
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
