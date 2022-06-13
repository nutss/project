<?php
/*****************************************************************
File:                   DB2MAIL.php
Description:    SEND DB TO MAIL
Created:                02-04-2010
Author:                 CHANAPHON LAMUNSUP
E-mail :                CHANAPHON.L@GMAIL.COM
Website :               nutss.wordpress.com
*****************************************************************/

date_default_timezone_set('Asia/Bangkok');

require("include/phpmailer/PHPMailerAutoload.php");
require("include/phpmailer/class.phpmailer.php");


		$mail             = new PHPMailer();
		$mail->IsSMTP();											
		$mail->SMTPAuth   = true;
		$mail->SMTPSecure = $_POST['SMTPSecure'];
		$mail->Host       = $_POST['strSMTPServer'];
		$mail->Port       = $_POST['strSMTPPort'];
		$mail->Username   = $_POST['strSMTPUser'];
		$mail->Password   = $_POST['strSMTPPassword'];
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
		
		$mail->Subject    = "ระบบ บริหารการขอรับทุน   แจ้งเตือน สถานะโครงการ ณ.วันที่ ".date("Y-m-d H:i:s");
		
		$mail->AltBody    = "ระบบ บริหารการขอรับทุน  แจ้งเตือน สถานะโครงการ"; // optional, comment out and test

		
		foreach(explode(',', $_POST['MailTo']) as $MailTo) {

			if ($MailTo != "") {
				$mail->addBCC($MailTo);
			}
		}

				$mail_body_html  = "ชื่อโครงการ		: ".$_POST['projectName']."<BR>";
				$mail_body_html .= "วันเริ่มโครงการ		: ".$_POST['projectStart']."<BR>";
				$mail_body_html .= "วันสิ้นสุดโครงการ	: ".$_POST['projectEnd']."<BR>";
				$mail_body_html .= "ประเภททุนวิจัย		: ".$_POST['researchFundingType']."<BR>";
				$mail_body_html .= "ผู้ติดต่อ			: ".$_POST['contactName']."<BR>";
						
				
				$mail->MsgHTML("ระบบ บริหารการขอรับทุน  แจ้งเตือน สถานะโครงการ <BR> ". $mail_body_html);


		
		
				if(!$mail->Send()) {
		  			echo "Mailer Error: " . $mail->ErrorInfo;
				} else {
		  			echo "Message sent! ";
				}

?>

