<?php

/**
 * @author Mr.Hu
 * @copyright 2013
 */
require_once 'gopay.class.php';
class GopayRequest extends Gopay
{   
    private $_config ;
    public function toSubmit($payment=array())
    {
        $this->_config= require_once 'config.ini.php';
        echo "<pre>";
        print_r($this->_config);
    }
}
$payment=array();
$test = new GopayRequest;
$test->toSubmit();
?>