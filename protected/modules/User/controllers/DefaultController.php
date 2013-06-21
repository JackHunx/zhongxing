<?php

class DefaultController extends Controller
{
    private $_userId;
	public function actionIndex()
	{
	   if(isset($_GET['id']))
       {
        $this->_userId = $_GET['id'];
       }
	   //$this->_userId = $_GET['id'];
		$this->render('index');
	}
}