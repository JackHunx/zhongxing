<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__file__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'My Web Application',
    'language' => 'zh',
    // preloading 'log' component
    'preload' => array('log'),

    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',

        'application.extensions.*',
        //srbac config
        'application.modules.srbac.controllers.SBaseController',
        ),


    'modules' => array(
        //config srbac modules
        'srbac' => array(
            'userclass' => 'User',
            'userid' => 'user_id',
            'username' => 'username',
            'debug' => false,
            'pageSize' => 10,
            'superUser' => 'Authority',
            'css' => 'srbac.css',
            'layout' => 'application.views.layouts.main',
            'notAuthorizedView' => 'srbac.views.authitem.unauthorized',
            'alwaysAllowed' => array(
                'SiteLogin',
                'SiteLogout',
                'SiteIndex',
                'SiteAdmin',
                'SiteError',
                'SiteContact'),
            'userActions' => array(
                'Show',
                'View',
                'List'),
            'listBoxNumberOfLines' => 15,
            'imagesPath' => 'srbac.images',
            'imagesPack' => 'noia',
            'iconText' => true,
            'header' => 'srbac.views.authitem.header',
            'footer' => 'srbac.views.authitem.footer',
            'showHeader' => true,
            'showFooter' => true,
            'alwaysAllowedPath' => 'srbac.components',
            ),
        // uncomment the following to enable the Gii tool
        'admin'=>array(
        //'defaultController'=>'system',
        ),
        //用户中心模块
        'User',
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => 'admin',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters' => array('127.0.0.1', '::1'),
            ),

        ),

    // application components
    'components' => array(
        'user' => array( // enable cookie-based authentication
                'allowAutoLogin' => true, ),

        'authManager' => array(
            'class' => 'CDbAuthManager',
            'connectionID' => 'db',
            'itemTable' => 'zx_items',
            'assignmentTable' => 'zx_assignments',
            'itemChildTable' => 'zx_itemchildren',
            ),
        'request' => array('class' => 'CmsCHttpRequest', ),
        //encrypt string
        'authstring'=>array('class'=>'AuthString',),
        //send email to user 邮箱验证等
        'sendemail'=>array('class'=>'SendEmail'),
        
        // uncomment the following to enable URLs in path-format
        /*
        'urlManager'=>array(
        'urlFormat'=>'path',
        'rules'=>array(
        '<controller:\w+>/<id:\d+>'=>'<controller>/view',
        '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
        '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
        ),
        ),
        *
        'db'=>array(
        'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
        ),
        // uncomment the following to use a MySQL database
        */
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=zx',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            ),

        'errorHandler' => array( // use 'site/error' action to display errors
                'errorAction' => 'site/error', ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                    ), // uncomment the following to show log messages on web pages
                    /*
                array(
                'class'=>'CWebLogRoute',
                ),
                */
                ),
            ),
        ),

    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => array( // this is used in contact page
            'adminEmail' => 'webmaster@example.com', ),
    );
