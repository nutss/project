<?php
/*****************************************************************
File:                   MAIL2ALERTPROJECT.php
Description:			API DB TO MAIL
Created:                01-06-2022
Author:                 CHANAPHON LAMUNSUP
E-mail :                CHANAPHON.L@GMAIL.COM
Website :               nutss.wordpress.com
*****************************************************************/

date_default_timezone_set('Asia/Bangkok');

require("../include/phpmailer/PHPMailerAutoload.php");
require("../include/phpmailer/class.phpmailer.php");



		$mail             = new PHPMailer();
		$mail->IsSMTP();											
		$mail->SMTPAuth   = true;
		$mail->SMTPSecure = urldecode($_POST['SMTPSecure']);
		$mail->Host       = urldecode($_POST['strSMTPServer']);
		$mail->Port       = urldecode($_POST['strSMTPPort']);
		$mail->Username   = urldecode($_POST['strSMTPUser']);
		$mail->Password   = urldecode($_POST['strSMTPPassword']);
		$mail->CharSet = "UTF-8";
		$mail->SMTPOptions = array(
			'ssl' => array(
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => true
			)
		);
		
		//$mail->SMTPDebug = 1;
		$mail->SetFrom('chanaphon.l@outlook.com','Project Status');
		
		$mail->Subject    = "[ระบบบริหารการขอรับทุน]   แจ้งเตือน สถานะโครงการ ณ.วันที่ ".date("Y-m-d H:i:s");
		
		$mail->AltBody    = "[ระบบบริหารการขอรับทุน]  แจ้งเตือน สถานะโครงการ"; // optional, comment out and test

		
		foreach(explode(';', $_POST['MailTo']) as $MailTo) {

			if ($MailTo != "") {
				$mail->addBCC($MailTo);
			}
		}	

				$mail_body_html  = "ชื่อโครงการ			: ".urldecode($_POST['researchProjectNameThai']."<BR>");
				$mail_body_html .= "ชื่อหัวหน้าเสนอโครงการ		: ".urldecode($_POST['researchProjectHeadName']."<BR>");
				$mail_body_html .= "กระบวนการ			: ".urldecode($_POST['processName']."<BR>");
				$mail_body_html .= "ขั้นตอน				: ".urldecode($_POST['stepName']."<BR>");
				$mail_body_html .= "การพิจารณา			: ".urldecode($_POST['researchConsiderValue']."<BR>");
				$mail_body_html .= "หมายเหตุ			: ".urldecode($_POST['researchRegisterDesc']."<BR>");
				

				$mail->MsgHTML("[ระบบบริหารการขอรับทุน]  แจ้งเตือน สถานะโครงการ <BR> ".$mail_body_html);


		
		
				if(!$mail->Send()) {
		  			echo "Mailer Error: " . $mail->ErrorInfo;
				} else {
		  			echo "Message sent! ";
				}

?>

