<?php
session_start();
include('func.php');
error_reporting(0);
set_time_limit(0);
$ser="http://site24.way2sms.com/";
$ckfile = tempnam ("/tmp", "CURLCOOKIE");
//rondom key generator
$str = '';
for($i=7;$i>0;$i--){
    $str = $str.chr(rand(97,122)); 
}

$shuffled = str_shuffle($str);
//echo $str;
session_start();
$_SESSION['loggedinuser'] = 1;
$_SESSION['secretpassword']=$str;
$login=$ser."Login1.action";
$uid="7569888505";
$pwd="7396538791";
$to=$_SESSION["phno"];
//echo $_SESSION["phno"];
$msg="Hai your fitbit insurance OTP is(".$str.") this msg is confidential";
if(!$to)
{ $to=$uid; }
if(!$msg)
{ $msg=rword(5).rword(5).rword(5).rword(5).rword(5); }
$captcha=input($_REQUEST['captcha']);
flush();
if($uid && $pwd)
{
$ibal="0";
$sbal="0";
$lhtml="0";
$shtml="0";
$khtml="0";
$qhtml="0";
$fhtml="0";
$te="0";
flush();

$loginpost="gval=&username=".$uid."&password=".$pwd."&Login=Login";

$ch = curl_init();
$lhtml=post($login,$loginpost,$ch,$ckfile);
////curl_close($ch);

if(stristr($lhtml,'Location: '.$ser.'vem.action') || stristr($lhtml,'Location: '.$ser.'MainView.action') || stristr($lhtml,'Location: '.$ser.'ebrdg.action'))
{
preg_match("/~(.*?);/i",$lhtml,$id);
$id=$id['1'];
if(!$id)
{

goto end;
}
// * Login Sucess Message//

goto bal;
}
elseif(stristr($lhtml,'Location: http://site2.way2sms.com/entry'))
{
// * Login Faild or SMS Send Error Message 3//

goto end;
}
else
{
// * Login Faild or SMS Send Error Message 2//

goto end;
}
bal:
///$ch = curl_init();
$msg=urlencode($msg);
$main=$ser."smstoss.action";
$ref=$ser."sendSMS?Token=".$id;
$conf=$ser."smscofirm.action?SentMessage=".$msg."&Token=".$id."&status=0";

$post="ssaction=ss&Token=".$id."&mobile=".$to."&message=".$msg."&Send=Send Sms&msgLen=".strlen($msg);
$mhtml=post($main,$post,$ch,$ckfile,$proxy,$ref);
if(stristr($mhtml,'smscofirm.action?SentMessage='))
// * Message Sended Sucessfull Message//
{ 
}
else
// * Login Faild or SMS Send Error Message 1//
{ 
}
curl_close($ch);

end:

echo "</div>";
flush();
}

?>
<script>
 
    window.location.assign("verify.php")
</script>