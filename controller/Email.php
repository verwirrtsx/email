<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/8/7
 * Time: 16:58
 */

namespace app\index\controller;

use  PHPMailer\PHPMailer\PHPMailer;
class Email
{
public  function  index(){
    $mail = new PHPMailer();
}

    public function email() {
        $toemail='1132891272@qq.com';
        $name='static7';
        $subject='QQ邮件发送测试';
        $content='恭喜你，邮件测试成功。';
        dump(send_mail($toemail,$name,$subject,$content));
    }
}