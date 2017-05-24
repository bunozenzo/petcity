<?php 
namespace common\libs;
use yii;
class sendmail
{
public function mail($tomail,$subject,$content)
    {
     $check=Yii::$app->mailer->compose()
     ->setFrom(Yii::$app->params['adminEmail'])
     ->setTo($tomail)
     ->setSubject($subject)
    ->setHtmlBody($content)
    ->send();
    if($check)
    {
     echo "<script> alert('gửi thành công')</script>";
    }
    else
    {
    	echo "<script> alert('gửi lỗi')</script>";
    }
}
}

 ?>