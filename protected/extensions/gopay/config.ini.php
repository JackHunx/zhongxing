<?php

/**
 * @author Mr.Hu
 * @copyright 2013
 */
return array(
     'version' => '2.0',
        'language' => 1,
        //sinType =1 md5 加密 =2 sha 加密
        'sinType' => 1,
        'tranCode' => '8888',
        //商户唯一id
        'merchantID' => '',
        //订单号
        'merOrderNum' => '',
        //交易金额
        'tranAmt' => '',
        //币种类型 156代表人民币
        'currencyType' => '156',
        'frontMerUrl' => '',
        'backgroundMerUrl' => '',
        //交易时间
        'tranDateTime' => '',
        //国付宝账户号
        'virCardNoIn' => '',
        //用户ip
        'tranIp' => '',
        //加密密文
        'signValue' => '',
        'gopayServerTime' => '',
        //一下为直连银行必填
        'banckCode' => '', //格式数字
        'userType' => '' //数字 判断个人还是企业 1为个人，2为企业

);

?>