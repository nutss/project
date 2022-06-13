<?php
/*****************************************************************
File:                   project.inc.php
Description:			Function and Library
Created:                13-01-2022
Author:                 CHANAPHON LAMUNSUP
E-mail :                CHANAPHON.L@GMAIL.COM
Website :               nutss.wordpress.com
*****************************************************************/

function SendMailProjectAlert($PROJECT_ID) {

	$SQLCommand = "SELECT * FROM staffUsers WHERE (staffEmailNotify = '1')";
	
	$RS = CustomQuery($SQLCommand);
	while ($data = db_fetch_array($RS)) {

		$mailTo .= $data["staffEmail"].";";
		
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


	$SendmailOut=runner_mail(array('bcc' => $mailTo, 'subject' => $mailSubject, 'htmlbody' => $mailMessageHTML));

	if(!$SendmailOut["mailed"]){
	  return $SendmailOut["message"];
	}

}

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