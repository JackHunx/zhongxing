<?php
/**
 * gopay class 
 * 必须支持curl 需开启curl在php.ini
 * php version is php 5 or above
 * @author jack (king.521.love@gmail.com)
 */
// require_once 'config.ini.php';
class Gopay
{
    //curl 实例
    private $ch;
    //config
    private $options;
    //http_build_query
    private $fields;
    //default config
    private $_options = array(
        CURLOPT_CONNECTTIMEOUT => 10,
        CURLOPT_TIMEOUT => 10,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_USERAGENT =>
            'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:5.0) Gecko/20110619 Firefox/5.0');
    private $encrypt_config;
    private $config = array(
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

    public function init()
    {
        $this->ch = curl_init();
        $this->setOptions($this->_options);
        //$this->options = array(


    }
    private function _exec($url)
    {
        $this->setOption(CURLOPT_URL, $url);
        $c = curl_exec($this->ch);
        if (!curl_errno($this->ch))
            return $c;
        else
            die('curl config error');
    }
    /**
     *get gopay server time
     * @param $url server time request url 
     * @return time
     */

    public function getServerTime($url)
    {

        //$this->setOption()
        // $this->options = is_array($config)? ($options+$config):$this->options;

        //curl_setopt_array($this->ch,$this->options);
        $this->config['gopayServerTime'] = $this->_exec($url);
        //curl_close($this->ch);
        //$this->hostTimeUrl = $url;
        //curl_setopt($this->ch,CURLOPT_URL,$url);
        //curl_setopt($this)
    }
    //set option
    public function setOption($option, $value)
    {
        curl_setopt($this->ch, $option, $value);
        return $this;
    }
    private function setOptions($options = array())
    {
        curl_setopt_array($this->ch, $options);
        return $this;
    }

    //post function
    public function post($url, $fields)
    {
        $this->setOption(CURLOPT_POST, true);
        $this->setOption(CURLOPT_POSTFIELDS, $fields);
        $this->_exec($url);
    }
    public function setFields()
    {
        foreach ($this->config as $key => $value) {
            if ($value == '')
                die('请求的数据中含有空值');
        }
        $this->fields = http_build_query($this->config);

    }
    protected function setEncrypt()
    {
        $this->encrypt_config = array(
            'version' => '[2.0]',
            'tranCode' => '[8888]',
            'merchantID' => '',
            'merOrderNum' => '',
            'tranAmt' => '',
            'feeAmt' => '',
            'tranDateTime' => '',
            'frontMerUrl' => '',
            'backgroundMerUrl' => '',

            'orderId' => '',
            'gopayOutOrderId' => '',
            'tranIP' => '',
            'respCode' => '',
            'VerficationCode' => '');
    }
    protected function arr2str($array)
    {
        $str = '';
        if (is_array($array)) {
            foreach ($array as $key => $value) {
                $str = $str . $key . "=" . $value;
            }
        }
        return $str;
    }
    //encrypt by md5
    protected function encrypt()
    {

        $this->setEncrypt($this->encrypt_config);
        $query = $this->arr2str($this->encrypt_config);
        print_r($query);

        //
        //   print_r($this->encrypt_config);
        //            $query=http_build_query($this->encrypt_config);
        //
        //           // $this->config['signValue']=md5(str_replace('&','',$query));
        //            echo str_replace('&','',$query);
        //print_r($this->config['signValue']);


    }
    protected function setConfig($key, $value)
    {
        if (array_key_exists($this->config[$key]) && array_key_exists($this->
            encrypt_config[$key])) {
            $this->config[$key] = $value;
            $this->encrypt_config[$key] = "[" . $value . "]";
        } elseif (array_key_exists($this->config[$key])) {
            $this->config[$key] = $value;
        } elseif (array_key_exists($this->encrypt_config[$key])) {
            $this->encrypt_config[$key] = "[" . $value . "]";
        }

    }
    protected function close()
    {
        curl_close($this->ch);
    }
}
