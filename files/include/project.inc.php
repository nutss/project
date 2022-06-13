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


function ScholarshipConsiderInsert($PROJECT_ID,$REGISTER_ID){


		$SQLCommand = "SELECT * FROM researchScholarshipRegister WHERE (id = ".$REGISTER_ID.")";
	
		$RS1 = CustomQuery($SQLCommand);
		if ($RS1_DATA = db_fetch_array($RS1)) {


			$SQLCommand = "SELECT * FROM researchType WHERE (typeName = '".$RS1_DATA["researchType"]."')";
	
			$RS2 = CustomQuery($SQLCommand);
			if ($RS2_DATA = db_fetch_array($RS2)) {


				$SQLCommand = "SELECT * FROM researchConsider WHERE (researchTypeID = ".$RS2_DATA["id"].") AND (processName = 'รับสมัครขอรับทุน')";

				$RS3 = CustomQuery($SQLCommand);
				while ($RS3_DATA = db_fetch_array($RS3)) {
					
					
					
					$SQLCommand = "INSERT INTO researchScholarshipConsider ( ";
					$SQLCommand .= "researchProjectID,";
					$SQLCommand .= "researchConsiderNumber,";
					$SQLCommand .= "processName,";
					$SQLCommand .= "stepName,";
					$SQLCommand .= "researchConsiderFile,";
					$SQLCommand .= "researchRegisterDesc,";
					$SQLCommand .= "researchConsiderName,";
					$SQLCommand .= "entryUserName,";
					$SQLCommand .= "entryTime ";					
					
					$SQLCommand .= ") VALUES (";
					$SQLCommand .= " ".$PROJECT_ID.",";
					$SQLCommand .= "'".$RS3_DATA["researchConsiderNumber"]."',";
					$SQLCommand .= "'".$RS3_DATA["processName"]."',";
					$SQLCommand .= "'".$RS3_DATA["stepName"]."',";
					$SQLCommand .= "'".$RS3_DATA["researchConsiderFile"]."',";
					$SQLCommand .= "'".$RS3_DATA["researchRegisterDesc"]."',";
					$SQLCommand .= "'".$RS3_DATA["researchConsiderName"]."',";
					$SQLCommand .= "'".$RS3_DATA["entryUserName"]."',";
					$SQLCommand .= "'".$RS3_DATA["entryTime"]."');";

					CustomQuery($SQLCommand);		
					
				}


			}
		
		}
		
	
}


function DisburseConsiderInsert($PROJECT_ID,$DISBURSE_ID){


		$SQLCommand = "SELECT * FROM researchScholarshipProposal WHERE (id = ".$PROJECT_ID.")";
	
		$RS1 = CustomQuery($SQLCommand);
		if ($RS1_DATA = db_fetch_array($RS1)) {


			$SQLCommand = "SELECT * FROM researchScholarshipRegister WHERE (id = ".$RS1_DATA["researchRegisterID"].")";
	
			$RS2 = CustomQuery($SQLCommand);
			if ($RS2_DATA = db_fetch_array($RS2)) {


				$SQLCommand = "SELECT * FROM researchType WHERE (typeName = '".$RS2_DATA["researchType"]."')";
		
				$RS3 = CustomQuery($SQLCommand);
				if ($RS3_DATA = db_fetch_array($RS3)) {


					$SQLCommand = "SELECT * FROM researchConsider WHERE (researchTypeID = '".$RS3_DATA["id"]."') AND (processName = 'ขออนุมัติการเบิกจ่าย')";

					$RS4 = CustomQuery($SQLCommand);
					while ($RS4_DATA = db_fetch_array($RS4)) {
						
						
						
						$SQLCommand = "INSERT INTO researchDisburseConsider ( ";
						$SQLCommand .= "researchDisburseID,";
						$SQLCommand .= "researchConsiderNumber,";
						$SQLCommand .= "processName,";
						$SQLCommand .= "stepName,";
						$SQLCommand .= "researchConsiderFile,";
						$SQLCommand .= "researchRegisterDesc,";
						$SQLCommand .= "researchConsiderName,";
						$SQLCommand .= "entryUserName,";
						$SQLCommand .= "entryTime ";					
						
						$SQLCommand .= ") VALUES (";
						$SQLCommand .= " ".$DISBURSE_ID.",";
						$SQLCommand .= "'".$RS4_DATA["researchConsiderNumber"]."',";
						$SQLCommand .= "'".$RS4_DATA["processName"]."',";
						$SQLCommand .= "'".$RS4_DATA["stepName"]."',";
						$SQLCommand .= "'".$RS4_DATA["researchConsiderFile"]."',";
						$SQLCommand .= "'".$RS4_DATA["researchRegisterDesc"]."',";
						$SQLCommand .= "'".$RS4_DATA["researchConsiderName"]."',";
						$SQLCommand .= "'".$RS4_DATA["entryUserName"]."',";
						$SQLCommand .= "'".$RS4_DATA["entryTime"]."');";

						CustomQuery($SQLCommand);		
						
					}
				}

			}
		
		}
		
	
}


function AppointmentConsiderInsert($PROJECT_ID,$APPPOINTMENT_ID){


		$SQLCommand = "SELECT * FROM researchScholarshipProposal WHERE (id = ".$PROJECT_ID.")";
	
		$RS1 = CustomQuery($SQLCommand);
		if ($RS1_DATA = db_fetch_array($RS1)) {


			$SQLCommand = "SELECT * FROM researchScholarshipRegister WHERE (id = ".$RS1_DATA["researchRegisterID"].")";
	
			$RS2 = CustomQuery($SQLCommand);
			if ($RS2_DATA = db_fetch_array($RS2)) {


				$SQLCommand = "SELECT * FROM researchType WHERE (typeName = '".$RS2_DATA["researchType"]."')";
		
				$RS3 = CustomQuery($SQLCommand);
				if ($RS3_DATA = db_fetch_array($RS3)) {


					$SQLCommand = "SELECT * FROM researchConsider WHERE (researchTypeID = '".$RS3_DATA["id"]."') AND (processName = 'นัดหมายและติดตามงาน')";

					$RS4 = CustomQuery($SQLCommand);
					while ($RS4_DATA = db_fetch_array($RS4)) {
						
						
						
						$SQLCommand = "INSERT INTO researchAppointmentConsider ( ";
						$SQLCommand .= "researchAppointmentID,";
						$SQLCommand .= "researchConsiderNumber,";
						$SQLCommand .= "processName,";
						$SQLCommand .= "stepName,";
						$SQLCommand .= "researchConsiderFile,";
						$SQLCommand .= "researchRegisterDesc,";
						$SQLCommand .= "researchConsiderName,";
						$SQLCommand .= "entryUserName,";
						$SQLCommand .= "entryTime ";					
						
						$SQLCommand .= ") VALUES (";
						$SQLCommand .= " ".$APPPOINTMENT_ID.",";
						$SQLCommand .= "'".$RS4_DATA["researchConsiderNumber"]."',";
						$SQLCommand .= "'".$RS4_DATA["processName"]."',";
						$SQLCommand .= "'".$RS4_DATA["stepName"]."',";
						$SQLCommand .= "'".$RS4_DATA["researchConsiderFile"]."',";
						$SQLCommand .= "'".$RS4_DATA["researchRegisterDesc"]."',";
						$SQLCommand .= "'".$RS4_DATA["researchConsiderName"]."',";
						$SQLCommand .= "'".$RS4_DATA["entryUserName"]."',";
						$SQLCommand .= "'".$RS4_DATA["entryTime"]."');";

						CustomQuery($SQLCommand);		
						
					}
				}

			}
		
		}
		
	
}


function RenewalConsiderInsert($PROJECT_ID,$RENEWAL_ID){


		$SQLCommand = "SELECT * FROM researchScholarshipProposal WHERE (id = ".$PROJECT_ID.")";
	
		$RS1 = CustomQuery($SQLCommand);
		if ($RS1_DATA = db_fetch_array($RS1)) {


			$SQLCommand = "SELECT * FROM researchScholarshipRegister WHERE (id = ".$RS1_DATA["researchRegisterID"].")";
	
			$RS2 = CustomQuery($SQLCommand);
			if ($RS2_DATA = db_fetch_array($RS2)) {


				$SQLCommand = "SELECT * FROM researchType WHERE (typeName = '".$RS2_DATA["researchType"]."')";
		
				$RS3 = CustomQuery($SQLCommand);
				if ($RS3_DATA = db_fetch_array($RS3)) {


					$SQLCommand = "SELECT * FROM researchConsider WHERE (researchTypeID = '".$RS3_DATA["id"]."') AND (processName = 'ขอขยายระยะเวลาโครงการ')";

					$RS4 = CustomQuery($SQLCommand);
					while ($RS4_DATA = db_fetch_array($RS4)) {
						
						
						
						$SQLCommand = "INSERT INTO researchRenewalConsider ( ";
						$SQLCommand .= "researchRenewalID,";
						$SQLCommand .= "researchConsiderNumber,";
						$SQLCommand .= "processName,";
						$SQLCommand .= "stepName,";
						$SQLCommand .= "researchConsiderFile,";
						$SQLCommand .= "researchRegisterDesc,";
						$SQLCommand .= "researchConsiderName,";
						$SQLCommand .= "entryUserName,";
						$SQLCommand .= "entryTime ";					
						
						$SQLCommand .= ") VALUES (";
						$SQLCommand .= " ".$RENEWAL_ID.",";
						$SQLCommand .= "'".$RS4_DATA["researchConsiderNumber"]."',";
						$SQLCommand .= "'".$RS4_DATA["processName"]."',";
						$SQLCommand .= "'".$RS4_DATA["stepName"]."',";
						$SQLCommand .= "'".$RS4_DATA["researchConsiderFile"]."',";
						$SQLCommand .= "'".$RS4_DATA["researchRegisterDesc"]."',";
						$SQLCommand .= "'".$RS4_DATA["researchConsiderName"]."',";
						$SQLCommand .= "'".$RS4_DATA["entryUserName"]."',";
						$SQLCommand .= "'".$RS4_DATA["entryTime"]."');";

						CustomQuery($SQLCommand);		
						
					}
				}

			}
		
		}
		
	
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