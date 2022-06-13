<?php
/*****************************************************************
File:                   project.inc.php
Description:						Function and Library
Created:                13-01-2022
Author:                 CHANAPHON LAMUNSUP
E-mail :                CHANAPHON.L@GMAIL.COM
Website :               nutss.wordpress.com
*****************************************************************/

$wget_command = "/usr/bin/wget";
$hostname_www = "project.mac.in.th";



function Mail2ProjectAlert($MailSettings,$Project) {

	global $hostname_www,$wget_command;



	$SQLCommand = "SELECT * FROM staffUsers WHERE (staffEmailNotify = '1')";
	
	$RS = CustomQuery($SQLCommand);
	while ($data = db_fetch_array($RS)) {

		$MailTo .= $data["staffEmail"].",";
		
	}


	$Url = "http://".$hostname_www."/script/mail2AlertProject.php";
	$UrlOption.= "projectID=".urlencode($Project["id"])."&";
	$UrlOption.= "projectName=".urlencode($Project["projectName"])."&";
	$UrlOption.= "projectStart=".$Project["projectStart"]."&";
	$UrlOption.= "projectEnd=".$Project["projectEnd"]."&";
	$UrlOption.= "researchFundingType=".urlencode($Project["researchFundingType"])."&";
	$UrlOption.= "contactName=".urlencode($Project["contactName"])."&";
	$UrlOption.= "SMTPSecure=".urlencode($MailSettings["SMTPSecure"])."&";
	$UrlOption.= "strSMTPServer=".urlencode($MailSettings["strSMTPServer"])."&";
	$UrlOption.= "strSMTPPort=".urlencode($MailSettings["strSMTPPort"])."&";
	$UrlOption.= "strSMTPUser=".urlencode($MailSettings["strSMTPUser"])."&";
	$UrlOption.= "strSMTPPassword=".urlencode($MailSettings["strSMTPPassword"])."&";
	$UrlOption.= "MailTo=".$MailTo."";

	
	
	$command_sh = $wget_command." ".$Url." --post-data \"".$UrlOption."\"";
	//echo $command_sh;
	executeBackgroundProces($command_sh);


}	





/*
function SendMailProjectAlert($PROJECT_ID) {
	
	
	$SQLCommand = "SELECT * FROM staffUsers WHERE (staffEmailNotify = '1')";
	
	$RS = CustomQuery($SQLCommand);
	while ($data = db_fetch_array($RS)) {

		$mailTo .= $data["staffEmail"].",";
		
	}


	$SQLCommand = "SELECT * FROM project WHERE (id = '".$PROJECT_ID."')";
	
	$RS = CustomQuery($SQLCommand);
	if ($data = db_fetch_array($RS)) {

		$mailMessageHTML = "ชื่อโครงการ		: ".$data['projectName']."<BR>";
		$mailMessageHTML .= "ผู้ติดต่อ		: ".$data['contactName']."<BR>";
		$mailMessageHTML .= "วันเริ่มโครงการ	: ".$data['projectStart']."<BR>";
		$mailMessageHTML .= "วันสิ้นสุดโครงการ	: ".$data['projectEnd']."<BR>";

		
	}

	$mailSubject = "[ระบบบริหารการขอรับทุน]  ยื่นขอรับทุนวิจัย ณ.วันที่ ".date("Y-m-d H:i:s");
	$mailTo = "chanaphon.l@gmail.com,chanaphon.l@thairath.co.th";

	$mailArr = runner_mail(array('to' => $mailTo, 'subject' => $mailSubject, 'htmlbody' => $mailMessageHTML, 'charset' => 'UTF-8'));

	if(!$mailArr["mailed"]){
	  return $mailArr["message"];
	}

}
*/

function executeBackgroundProces($command) {

    $command = $command . ' > /dev/null 2>&1 & echo $!';
    exec ( $command, $op );
    $pid = ( int ) $op [0];
    if ($pid != "")
        return $pid;

    return false;
}

function executeProces($command) {


    exec ( $command, $op );
    $pid = ( int ) $op [0];
    if ($pid != "")
        return $pid;

    return false;
}


?>