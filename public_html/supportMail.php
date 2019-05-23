<?php
header("Content-Type: text/html; charset=UTF-8");

require 'phpmailer/PHPMailerAutoload.php';

if(empty($_POST['customerName'])      ||
   empty($_POST['customerEmail'])     ||
   empty($_POST['customerTel'])     ||
   !filter_var($_POST['customerEmail'],FILTER_VALIDATE_EMAIL))
   {
     $data = file_get_contents("errormail.html",0);
     echo $data;
   return false;
   }

//보내는사람이름
$name = strip_tags(htmlspecialchars($_POST['customerName']));
//from
$email_address = strip_tags(htmlspecialchars($_POST['customerEmail']));

$phone = strip_tags(htmlspecialchars($_POST['customerTel']));

$text = strip_tags(htmlspecialchars($_POST['customerTxt']));

//제목
$email_subject = "고객기술지원 문의 메일: $name";

//내용
$email_body = "고객기술지원 문의 메일\n---------------------------------------------\n\n"."신청자 이름: $name\n이메일: $email_address\n핸드폰번호: $phone\n
내용: $text\n\n---------------------------------------------";

$mail = new PHPMailer(true);
//Tell PHPMailer to use SMTP
$mail->isSMTP();

$mail->Host = "smtp.gmail.com";  // 메일서버 주소

$mail->SMTPAuth = true; // SMTP 인증을 사용함

$mail->Port = 465; 	// email 보낼때 사용할 포트를 지정

$mail->SMTPSecure = "ssl";  // SSL을 사용함

$mail->Username = "gecinvitation@gmail.com";  // 계정  [ ??? =gmail 메일주소 @앞부분]

$mail->Password ="Invitation123"; // 패스워드         [ ??? = gamil 계정 페스워드 ]

$mail->CharSet = 'utf-8';

$mail->Encoding = "base64";

	//실제 메일에 관련된내용
  //Set who the message is to be sent from
$mail->setFrom($email_address, $name);
  //Set an alternative reply-to address
$mail->addReplyTo($email_address, $name);

// 받는사람메일주소 , 받는사람이름

$mail->AddAddress("user@gdsenc.com", "글로벌엔지니어링");

$mail->Subject = $email_subject; // 메일 제목

$mail->Body = $email_body; // 메일 내용

if(!$mail->Send()){
  echo '메일이 발송되지 않았습니다.';
  echo '메일 오류: ' . $mail->ErrorInfo;
}
else{
  $success = file_get_contents("successmail.html",0);
  echo $success;
}
?>
