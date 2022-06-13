<?php
$dalTableproject = array();
$dalTableproject["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTableproject["projectName"] = array("type"=>200,"varname"=>"projectName", "name" => "projectName");
$dalTableproject["projectStart"] = array("type"=>7,"varname"=>"projectStart", "name" => "projectStart");
$dalTableproject["projectEnd"] = array("type"=>7,"varname"=>"projectEnd", "name" => "projectEnd");
$dalTableproject["ProjectTypeName"] = array("type"=>200,"varname"=>"ProjectTypeName", "name" => "ProjectTypeName");
$dalTableproject["companyName"] = array("type"=>200,"varname"=>"companyName", "name" => "companyName");
$dalTableproject["projectBudgetCost"] = array("type"=>5,"varname"=>"projectBudgetCost", "name" => "projectBudgetCost");
$dalTableproject["projectFile"] = array("type"=>201,"varname"=>"projectFile", "name" => "projectFile");
$dalTableproject["DocumentCheckDate"] = array("type"=>7,"varname"=>"DocumentCheckDate", "name" => "DocumentCheckDate");
$dalTableproject["DocumentCheckStatus"] = array("type"=>200,"varname"=>"DocumentCheckStatus", "name" => "DocumentCheckStatus");
$dalTableproject["DocumentCheckReason"] = array("type"=>200,"varname"=>"DocumentCheckReason", "name" => "DocumentCheckReason");
$dalTableproject["screenDate"] = array("type"=>7,"varname"=>"screenDate", "name" => "screenDate");
$dalTableproject["screenStatus"] = array("type"=>200,"varname"=>"screenStatus", "name" => "screenStatus");
$dalTableproject["screenReason"] = array("type"=>200,"varname"=>"screenReason", "name" => "screenReason");
$dalTableproject["approveDate"] = array("type"=>7,"varname"=>"approveDate", "name" => "approveDate");
$dalTableproject["approveStatus"] = array("type"=>200,"varname"=>"approveStatus", "name" => "approveStatus");
$dalTableproject["approveReason"] = array("type"=>200,"varname"=>"approveReason", "name" => "approveReason");
$dalTableproject["entryUserName"] = array("type"=>200,"varname"=>"entryUserName", "name" => "entryUserName");
$dalTableproject["entryTime"] = array("type"=>135,"varname"=>"entryTime", "name" => "entryTime");
	$dalTableproject["id"]["key"]=true;

$dal_info["mc_at_192_168_1_111__project"] = &$dalTableproject;
?>