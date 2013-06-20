<?php
/**
 * SendEmail
 * @author jack_hunx 
 */
class SendEmail
{
    

    public function init()
    {
        // must need
    }
    public function send($email, $name=null, $subject = null, $body ,$altbody=null)
    {
        //$system = new System;

        $mail = Yii::createComponent('application.extensions.mailer.EMailer');
        //charset
        $mail->CharSet='utf-8';
        //ishtml
        $mail->IsHTML(true);
        //set smpt server host
        $mail->IsSMTP();
        //
        //set email host
        $mail->Host = $this->findFromDb('con_email_host');
        //set auth
        $mail->SMTPAuth = $this->findFromDb('con_email_auth');
        $mail->Username = $this->findFromDb('con_email_email');
        $mail->Password = $this->findFromDb('con_email_pwd');
        //email from
        $mail->From = $this->findFromDb('con_email_from');
        
        //from user name
        $mail->FromName = $this->findFromDb('con_email_from_name');
        //header("Content-type: text/html; charset=utf-8");
       
        //to
        $mail->AddAddress($email, $name);
        //subject
        $mail->Subject = $subject;
        //body msg
        $mail->Body = $body;
        //¸½¼ÓÐÅÏ¢
        $mail->AltBody=$altbody;
        
        if(!$mail->Send())
        {
            throw new CHttpException('Email Send',$mail->ErrorInfo);
        }
        
        //$system = new System;

        //$email ='est' ;
        //$email = system::model()->find('nid=:nid',array(':nid'=>'con_email_email'));
        //$email->get
        //header("Content-type: text/html; charset=utf-8");
        //echo "<pre>";
        //print_r($email);
    }
    private function findFromDb($key)
    {
        //   $system = new System;
        $value = System::model()->find('nid=:nid', array(':nid' => $key));
        // print_r($value->value);
        //exit();
        if ($value == null) {
            throw new Exception("no value in this table");
        }
        return $value->value;

    }
}
