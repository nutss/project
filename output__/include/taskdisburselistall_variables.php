<?php
$strTableName="taskDisburseListAll";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="taskDisburse";

$gstrOrderBy="ORDER BY taskDisburse.projectID DESC, taskDisburse.trackDisburseDate DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$reportCaseSensitiveGroupFields = false;

?>