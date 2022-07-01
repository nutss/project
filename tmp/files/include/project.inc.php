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


	$ChoiceValue = array("true", "false");

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
					$SQLCommand .= "researchConsiderFileCheck,";
					$SQLCommand .= "researchRegisterDesc,";
					$SQLCommand .= "researchRegisterDescCheck,";
					$SQLCommand .= "researchConsiderName,";
					$SQLCommand .= "entryUserName,";
					$SQLCommand .= "entryTime ";					
					
					$SQLCommand .= ") VALUES (";
					$SQLCommand .= " ".$PROJECT_ID.",";
					$SQLCommand .= "'".$RS3_DATA["researchConsiderNumber"]."',";
					$SQLCommand .= "'".$RS3_DATA["processName"]."',";
					$SQLCommand .= "'".$RS3_DATA["stepName"]."',";
					$SQLCommand .= "'',";
					$SQLCommand .= "'".$RS3_DATA["researchConsiderFile"]."',";
					$SQLCommand .= "'',";
					$SQLCommand .= "'".$RS3_DATA["researchRegisterDesc"]."',";

					$SQLCommand .= "'".$RS3_DATA["researchConsiderName"]."',";

					$SQLCommand .= "'".$_SESSION["UserName"]."',";
					$SQLCommand .= "'".strftime("%Y-%m-%d %H:%M:%S")."');";

					CustomQuery($SQLCommand);

					$ICount = 0;
					

					$SQLCommand = "SELECT LAST_INSERT_ID() As 'LastID';";
	
					$RS4 = CustomQuery($SQLCommand);

						if ($RS4_DATA = db_fetch_array($RS4)) {
							
							$researchConsiderNameData = explode("/", $RS3_DATA["researchConsiderName"]);

							foreach ($researchConsiderNameData as $value) {

								$SQLCommand = "INSERT INTO considerChoice ( ";
								$SQLCommand .= "ConsiderID,";
								$SQLCommand .= "ChoiceType,";
								$SQLCommand .= "ChoiceNameGroup,";
								$SQLCommand .= "ChoiceName,";
								$SQLCommand .= "ChoiceValue,";
								$SQLCommand .= "entryUserName,";
								$SQLCommand .= "entryTime ";					
							
								$SQLCommand .= ") VALUES (";
								$SQLCommand .= "'".$RS4_DATA["LastID"]."',";
								$SQLCommand .= "'researchScholarshipConsider',";
								$SQLCommand .= "'".$RS3_DATA["researchConsiderName"]."',";
								$SQLCommand .= "'".$value."',";
								$SQLCommand .= "'".$ChoiceValue[$ICount]."',";

								$SQLCommand .= "'".$_SESSION["UserName"]."',";
								$SQLCommand .= "'".strftime("%Y-%m-%d %H:%M:%S")."');";
								

								$ICount++;
								

								CustomQuery($SQLCommand);
								

							}

								
						}


					
				}


			}
		
		}
		
	
}


function DisburseConsiderInsert($PROJECT_ID,$DISBURSE_ID){

	$ChoiceValue = array("true", "false");


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
						$SQLCommand .= "researchConsiderFileCheck,";
						$SQLCommand .= "researchRegisterDesc,";
						$SQLCommand .= "researchRegisterDescCheck,";
						$SQLCommand .= "researchConsiderName,";
						$SQLCommand .= "entryUserName,";
						$SQLCommand .= "entryTime ";					
						
						$SQLCommand .= ") VALUES (";
						$SQLCommand .= " ".$DISBURSE_ID.",";
						$SQLCommand .= "'".$RS4_DATA["researchConsiderNumber"]."',";
						$SQLCommand .= "'".$RS4_DATA["processName"]."',";
						$SQLCommand .= "'".$RS4_DATA["stepName"]."',";

						$SQLCommand .= "'',";
						$SQLCommand .= "'".$RS4_DATA["researchConsiderFile"]."',";
						$SQLCommand .= "'',";
						$SQLCommand .= "'".$RS4_DATA["researchRegisterDesc"]."',";

						$SQLCommand .= "'".$RS4_DATA["researchConsiderName"]."',";
						$SQLCommand .= "'".$_SESSION["UserName"]."',";
						$SQLCommand .= "'".strftime("%Y-%m-%d %H:%M:%S")."');";

						CustomQuery($SQLCommand);
						
						$ICount = 0;


						$SQLCommand = "SELECT LAST_INSERT_ID() As 'LastID';";
		
						$RS5 = CustomQuery($SQLCommand);

							if ($RS5_DATA = db_fetch_array($RS5)) {
								
								$researchConsiderNameData = explode("/", $RS4_DATA["researchConsiderName"]);

								foreach ($researchConsiderNameData as $value) {

									$SQLCommand = "INSERT INTO considerChoice ( ";
									$SQLCommand .= "ConsiderID,";
									$SQLCommand .= "ChoiceType,";
									$SQLCommand .= "ChoiceNameGroup,";
									$SQLCommand .= "ChoiceName,";
									$SQLCommand .= "ChoiceValue,";
									$SQLCommand .= "entryUserName,";
									$SQLCommand .= "entryTime ";					
								
									$SQLCommand .= ") VALUES (";
									$SQLCommand .= "'".$RS5_DATA["LastID"]."',";
									$SQLCommand .= "'researchDisburseConsider',";
									$SQLCommand .= "'".$RS4_DATA["researchConsiderName"]."',";
									$SQLCommand .= "'".$value."',";

									$SQLCommand .= "'".$ChoiceValue[$ICount]."',";


									$SQLCommand .= "'".$_SESSION["UserName"]."',";
									$SQLCommand .= "'".strftime("%Y-%m-%d %H:%M:%S")."');";
									

									$ICount++;

									CustomQuery($SQLCommand);
									

								}


							}



						
					}
				}

			}
		
		}
		
	
}


function AppointmentConsiderInsert($PROJECT_ID,$APPPOINTMENT_ID){

	$ChoiceValue = array("true", "false");

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
						$SQLCommand .= "researchConsiderFileCheck,";
						$SQLCommand .= "researchRegisterDesc,";
						$SQLCommand .= "researchRegisterDescCheck,";
						$SQLCommand .= "researchConsiderName,";
						$SQLCommand .= "entryUserName,";
						$SQLCommand .= "entryTime ";					
						
						$SQLCommand .= ") VALUES (";
						$SQLCommand .= " ".$APPPOINTMENT_ID.",";
						$SQLCommand .= "'".$RS4_DATA["researchConsiderNumber"]."',";
						$SQLCommand .= "'".$RS4_DATA["processName"]."',";
						$SQLCommand .= "'".$RS4_DATA["stepName"]."',";

						$SQLCommand .= "'',";
						$SQLCommand .= "'".$RS4_DATA["researchConsiderFile"]."',";
						$SQLCommand .= "'',";
						$SQLCommand .= "'".$RS4_DATA["researchRegisterDesc"]."',";


						$SQLCommand .= "'".$RS4_DATA["researchConsiderName"]."',";
						$SQLCommand .= "'".$_SESSION["UserName"]."',";
						$SQLCommand .= "'".strftime("%Y-%m-%d %H:%M:%S")."');";

						CustomQuery($SQLCommand);		
						
						$ICount = 0;


						$SQLCommand = "SELECT LAST_INSERT_ID() As 'LastID';";
		
						$RS5 = CustomQuery($SQLCommand);

							if ($RS5_DATA = db_fetch_array($RS5)) {
								
								$researchConsiderNameData = explode("/", $RS4_DATA["researchConsiderName"]);

								foreach ($researchConsiderNameData as $value) {

									$SQLCommand = "INSERT INTO considerChoice ( ";
									$SQLCommand .= "ConsiderID,";
									$SQLCommand .= "ChoiceType,";
									$SQLCommand .= "ChoiceNameGroup,";
									$SQLCommand .= "ChoiceName,";
									$SQLCommand .= "ChoiceValue,";
									$SQLCommand .= "entryUserName,";
									$SQLCommand .= "entryTime ";					
								
									$SQLCommand .= ") VALUES (";
									$SQLCommand .= "'".$RS5_DATA["LastID"]."',";
									$SQLCommand .= "'researchAppointmentConsider',";
									$SQLCommand .= "'".$RS4_DATA["researchConsiderName"]."',";
									$SQLCommand .= "'".$value."',";

									$SQLCommand .= "'".$ChoiceValue[$ICount]."',";


									$SQLCommand .= "'".$_SESSION["UserName"]."',";
									$SQLCommand .= "'".strftime("%Y-%m-%d %H:%M:%S")."');";
									

									$ICount++;

									CustomQuery($SQLCommand);
									

								}


							}
					
					
					}
				}

			}
		
		}
		
	
}


function RenewalConsiderInsert($PROJECT_ID,$RENEWAL_ID){


	$ChoiceValue = array("true", "false");


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
						$SQLCommand .= "researchConsiderFileCheck,";
						$SQLCommand .= "researchRegisterDesc,";
						$SQLCommand .= "researchRegisterDescCheck,";
						$SQLCommand .= "researchConsiderName,";
						$SQLCommand .= "entryUserName,";
						$SQLCommand .= "entryTime ";					
						
						$SQLCommand .= ") VALUES (";
						$SQLCommand .= " ".$RENEWAL_ID.",";
						$SQLCommand .= "'".$RS4_DATA["researchConsiderNumber"]."',";
						$SQLCommand .= "'".$RS4_DATA["processName"]."',";
						$SQLCommand .= "'".$RS4_DATA["stepName"]."',";


						$SQLCommand .= "'',";
						$SQLCommand .= "'".$RS4_DATA["researchConsiderFile"]."',";
						$SQLCommand .= "'',";
						$SQLCommand .= "'".$RS4_DATA["researchRegisterDesc"]."',";


						$SQLCommand .= "'".$RS4_DATA["researchConsiderName"]."',";
						$SQLCommand .= "'".$RS4_DATA["entryUserName"]."',";
						$SQLCommand .= "'".$RS4_DATA["entryTime"]."');";

						CustomQuery($SQLCommand);

						$ICount = 0;



						$SQLCommand = "SELECT LAST_INSERT_ID() As 'LastID';";
		
						$RS5 = CustomQuery($SQLCommand);

							if ($RS5_DATA = db_fetch_array($RS5)) {
								
								$researchConsiderNameData = explode("/", $RS4_DATA["researchConsiderName"]);

								foreach ($researchConsiderNameData as $value) {

									$SQLCommand = "INSERT INTO considerChoice ( ";
									$SQLCommand .= "ConsiderID,";
									$SQLCommand .= "ChoiceType,";
									$SQLCommand .= "ChoiceNameGroup,";
									$SQLCommand .= "ChoiceName,";
									$SQLCommand .= "ChoiceValue,";
									$SQLCommand .= "entryUserName,";
									$SQLCommand .= "entryTime ";					
								
									$SQLCommand .= ") VALUES (";
									$SQLCommand .= "'".$RS5_DATA["LastID"]."',";
									$SQLCommand .= "'researchRenewalConsider',";
									$SQLCommand .= "'".$RS4_DATA["researchConsiderName"]."',";
									$SQLCommand .= "'".$value."',";

									$SQLCommand .= "'".$ChoiceValue[$ICount]."',";


									$SQLCommand .= "'".$_SESSION["UserName"]."',";
									$SQLCommand .= "'".strftime("%Y-%m-%d %H:%M:%S")."');";
									

									$ICount++;

									CustomQuery($SQLCommand);
									

								}


							}


						
					}
				}

			}
		
		}
		
	
}


function optionSubChoiceInsert($optionSubID,$process){


	$ChoiceValue = array("true", "false");
	
		
		if ($process == "DELETE") {
		
			$SQLCommand = "DELETE FROM considerChoice WHERE (ConsiderID='".$optionSubID."') AND (ChoiceType = 'optionSub')";
			CustomQuery($SQLCommand);	
		}



		$SQLCommand = "SELECT * FROM optionSub WHERE (id='".$optionSubID."') AND (optionGroupID = 2)";
	
		$RS1 = CustomQuery($SQLCommand);
		while ($RS1_DATA = db_fetch_array($RS1)) {

			$optionNameData = explode("/", $RS1_DATA["optionName"]);
			$ICount = 0;

			foreach ($optionNameData as $value) {

				$SQLCommand = "INSERT INTO considerChoice ( ";
				$SQLCommand .= "ConsiderID,";
				$SQLCommand .= "ChoiceType,";
				$SQLCommand .= "ChoiceNameGroup,";
				$SQLCommand .= "ChoiceName,";
				$SQLCommand .= "ChoiceValue,";
				$SQLCommand .= "entryUserName,";
				$SQLCommand .= "entryTime ";					

				$SQLCommand .= ") VALUES (";
				$SQLCommand .= "'".$optionSubID."',";
				$SQLCommand .= "'optionSub',";
				$SQLCommand .= "'".$RS1_DATA["optionName"]."',";
				$SQLCommand .= "'".$value."',";

				$SQLCommand .= "'".$ChoiceValue[$ICount]."',";


				$SQLCommand .= "'".$_SESSION["UserName"]."',";
				$SQLCommand .= "'".strftime("%Y-%m-%d %H:%M:%S")."');";
				

				$ICount++;

				CustomQuery($SQLCommand);	
						
			}

		}
		
	
}


function ScholarshipProposalUpdateStatus($ProjectID) {
	

			$researchScholarshipConsiderArr = ProposalCalStatus($ProjectID);
			$ScholarshipPercentSuccess = ($researchScholarshipConsiderArr[1]*100)/$researchScholarshipConsiderArr[0];

			$researchDisburseConsiderArr = DisburseCalStatus($ProjectID);
			$DisbursePercentSuccess = ($researchDisburseConsiderArr[1]*100)/$researchDisburseConsiderArr[0];

			$researchAppointmentConsiderArr = AppointmentCalStatus($ProjectID);
			$AppointmentPercentSuccess = ($researchAppointmentConsiderArr[1]*100)/$researchAppointmentConsiderArr[0];


			$ScholarshipFinishStatus = ScholarshipProposalFinishStatus($ProjectID);


			if ($DisbursePercentSuccess > 0 ){

				$SQLCommand  = "UPDATE researchScholarshipProposal SET ";
				$SQLCommand .= "researchProjectStatus = '".$researchDisburseConsiderArr[2]." ".number_format($DisbursePercentSuccess,2)."%', ";
				$SQLCommand .= "researchProjectDisburseStatus = '".$researchDisburseConsiderArr[2]." ".number_format($DisbursePercentSuccess,2)."%', ";
				$SQLCommand .= "ScholarshipProposalFinishStatus = '".$ScholarshipFinishStatus."', ";

				$SQLCommand .= "researchOperatingPeriodEndDate = '".$researchDisburseConsiderArr[3]."' ";
				$SQLCommand .= "WHERE (id = ".$ProjectID.")";

				CustomQuery($SQLCommand);		
			
			}
			else{
			
				$SQLCommand  = "UPDATE researchScholarshipProposal SET ";
				$SQLCommand .= "researchProjectStatus = '".$researchScholarshipConsiderArr[2]." ".number_format($ScholarshipPercentSuccess,2)."%', ";
				$SQLCommand .= "researchProjectDisburseStatus = '".$researchDisburseConsiderArr[2]." ".number_format($DisbursePercentSuccess,2)."%', ";
				$SQLCommand .= "ScholarshipProposalFinishStatus = '".$ScholarshipFinishStatus."', ";

				$SQLCommand .= "researchOperatingPeriodEndDate = '".$researchDisburseConsiderArr[3]."' ";
				$SQLCommand .= "WHERE (id = ".$ProjectID.")";

				CustomQuery($SQLCommand);
			}


			
			if ($researchAppointmentConsiderArr[0] > 0){


				$SQLCommand  = "UPDATE researchScholarshipProposal SET ";
				$SQLCommand .= "researchProjectAppointmentStatus = '".$researchAppointmentConsiderArr[2]." ".number_format($AppointmentPercentSuccess,2)."%', ";

				$SQLCommand .= "researchOperatingPeriodEndDate = '".$researchDisburseConsiderArr[3]."' ";
				$SQLCommand .= "WHERE (id = ".$ProjectID.")";

				CustomQuery($SQLCommand);
			}

}

		
function ScholarshipProposalFinishStatus($ProjectID) {
	

		$SQLCommand = "SELECT * FROM researchScholarshipConsider WHERE (researchProjectID='".$ProjectID."') ORDER BY researchConsiderNumber DESC LIMIT 1";
	
		$RS1 = CustomQuery($SQLCommand);
		if ($RS1_DATA = db_fetch_array($RS1)) {

			$SQLCommand = "SELECT * FROM considerChoice ";
			$SQLCommand .= "WHERE (ChoiceName = '".$RS1_DATA["researchConsiderValue"]."') ";
			$SQLCommand .= "AND   (ConsiderID = '".$RS1_DATA["id"]."') ";
			$SQLCommand .= "AND   (ChoiceType = 'researchScholarshipConsider') ";
			$SQLCommand .= "AND   (ChoiceValue ='true') ";

			$RS2 = CustomQuery($SQLCommand);
			if ($RS2_DATA = db_fetch_array($RS2)) {

				$ScholarshipFinishStatus = "true";

			}
			else{
				$ScholarshipFinishStatus = "false";
			}


		}

		return $ScholarshipFinishStatus;
	

}

function ProposalCalStatus($ProjectID) {
	
	$ConsiderArray = [];
	$ICount = 0;
	$RCount = 0;


		$SQLCommand = "SELECT * FROM researchScholarshipConsider WHERE (researchProjectID='".$ProjectID."') ORDER BY researchConsiderNumber";
	
		$RS1 = CustomQuery($SQLCommand);
		while ($RS1_DATA = db_fetch_array($RS1)) {

			$SQLCommand = "SELECT * FROM considerChoice ";
			$SQLCommand .= "WHERE (ChoiceName = '".$RS1_DATA["researchConsiderValue"]."') ";
			$SQLCommand .= "AND   (ConsiderID = '".$RS1_DATA["id"]."') ";
			$SQLCommand .= "AND   (ChoiceType = 'researchScholarshipConsider') ";
			$SQLCommand .= "AND   (ChoiceValue ='true') ";

			$RS2 = CustomQuery($SQLCommand);
			if ($RS2_DATA = db_fetch_array($RS2)) {

				$ICount = $ICount +1;

			}

			$RCount = $RCount +1;
			$stepName = $RS1_DATA["stepName"];
		}
	
		

		array_push($ConsiderArray, strval($RCount));
		array_push($ConsiderArray, strval($ICount));
		array_push($ConsiderArray, $stepName);
		return $ConsiderArray;
	

}


function DisburseCalStatus($ProjectID) {
	
	$ConsiderArray = [];
	$ICount = 0;
	$RCount = 0;



		$SQLCommand = "SELECT * FROM researchOperatingPeriod WHERE (researchProjectID='".$ProjectID."') ORDER BY researchOperatingPeriodEndDate ASC";
		
		$RS1 = CustomQuery($SQLCommand);
		while ($RS1_DATA = db_fetch_array($RS1)) {


			$SQLCommand = "SELECT * FROM researchDisburseConsider WHERE (researchDisburseID='".$RS1_DATA["id"]."') ORDER BY researchConsiderNumber";

			$RS2 = CustomQuery($SQLCommand);
			while ($RS2_DATA = db_fetch_array($RS2)) {

				$SQLCommand = "SELECT * FROM considerChoice ";
				$SQLCommand .= "WHERE (ChoiceName = '".$RS2_DATA["researchConsiderValue"]."') ";
				$SQLCommand .= "AND   (ConsiderID = '".$RS2_DATA["id"]."') ";
				$SQLCommand .= "AND   (ChoiceType = 'researchDisburseConsider') ";
				$SQLCommand .= "AND   (ChoiceValue ='true') ";

				$RS3 = CustomQuery($SQLCommand);
				if ($RS3_DATA = db_fetch_array($RS3)) {

					$ICount = $ICount +1;

				}

				$RCount = $RCount +1;
				$stepName = $RS2_DATA["stepName"];
			}

				$researchOperatingPeriodEndDate = $RS1_DATA["researchOperatingPeriodEndDate"];
		}
		

		array_push($ConsiderArray, strval($RCount));
		array_push($ConsiderArray, strval($ICount));
		array_push($ConsiderArray, $stepName);
		array_push($ConsiderArray, $researchOperatingPeriodEndDate);

		return $ConsiderArray;

}


function AppointmentCalStatus($ProjectID) {
	
	$ConsiderArray = [];
	$ICount = 0;
	$RCount = 0;



		$SQLCommand = "SELECT * FROM researchAppointment WHERE (researchProjectID='".$ProjectID."') ORDER BY researchAppointmentNo ASC";
		
		$RS1 = CustomQuery($SQLCommand);
		while ($RS1_DATA = db_fetch_array($RS1)) {


			$SQLCommand = "SELECT * FROM researchAppointmentConsider WHERE (researchAppointmentID='".$RS1_DATA["id"]."') ORDER BY researchConsiderNumber";

			$RS2 = CustomQuery($SQLCommand);
			while ($RS2_DATA = db_fetch_array($RS2)) {

				$SQLCommand = "SELECT * FROM considerChoice ";
				$SQLCommand .= "WHERE (ChoiceName = '".$RS2_DATA["researchConsiderValue"]."') ";
				$SQLCommand .= "AND   (ConsiderID = '".$RS2_DATA["id"]."') ";
				$SQLCommand .= "AND   (ChoiceType = 'researchDisburseConsider') ";
				$SQLCommand .= "AND   (ChoiceValue ='true') ";

				$RS3 = CustomQuery($SQLCommand);
				if ($RS3_DATA = db_fetch_array($RS3)) {

					$ICount = $ICount +1;

				}

				$RCount = $RCount +1;
				$stepName = $RS2_DATA["stepName"];
			}

		}
		

		array_push($ConsiderArray, strval($RCount));
		array_push($ConsiderArray, strval($ICount));
		array_push($ConsiderArray, $stepName);

		return $ConsiderArray;

}

function missionCalStatus($missionFollowID) {
	
	$ConsiderArray = [];
	$ICount = 0;
	$RCount = 0;


		$SQLCommand = "SELECT * FROM missionAssignment WHERE (missionFollowID='".$missionFollowID."') ORDER BY missionAssignmentNo";
	
		$RS1 = CustomQuery($SQLCommand);
		while ($RS1_DATA = db_fetch_array($RS1)) {

			$SQLCommand = "SELECT * FROM considerChoice ";
			$SQLCommand .= "WHERE (ChoiceName = '".$RS1_DATA["missionAssignmentConsiderValue"]."') ";
			$SQLCommand .= "AND   (ChoiceType = 'optionSub') ";
			$SQLCommand .= "AND   (ChoiceValue ='true') ";

			$RS2 = CustomQuery($SQLCommand);
			if ($RS2_DATA = db_fetch_array($RS2)) {

				$ICount = $ICount +1;

			}

			$RCount = $RCount +1;
			$ChoiceName = $RS2_DATA["ChoiceName"];
		}
	
		

		array_push($ConsiderArray, strval($RCount));
		array_push($ConsiderArray, strval($ICount));
		array_push($ConsiderArray, $ChoiceName);
		return $ConsiderArray;
	

}

function missionCalUpdateStatus($missionFollowID) {
	

			$missionCalConsiderArr = missionCalStatus($missionFollowID);
			$missionPercentSuccess = ($missionCalConsiderArr[1]*100)/$missionCalConsiderArr[0];
			
				$SQLCommand  = "UPDATE missionFollow SET ";
				$SQLCommand .= "missionFollowStatus = '".$missionCalConsiderArr[2]." ".number_format($missionPercentSuccess,2)."%' ";
				$SQLCommand .= "WHERE (id = ".$missionFollowID.")";

				CustomQuery($SQLCommand);			


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