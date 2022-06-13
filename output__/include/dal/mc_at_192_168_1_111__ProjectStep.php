<?php
$dalTableProjectStep = array();
$dalTableProjectStep["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTableProjectStep["projectTypeID"] = array("type"=>3,"varname"=>"projectTypeID", "name" => "projectTypeID");
$dalTableProjectStep["stepNumber"] = array("type"=>16,"varname"=>"stepNumber", "name" => "stepNumber");
$dalTableProjectStep["stepName"] = array("type"=>200,"varname"=>"stepName", "name" => "stepName");
$dalTableProjectStep["entryUserName"] = array("type"=>200,"varname"=>"entryUserName", "name" => "entryUserName");
$dalTableProjectStep["entryTime"] = array("type"=>135,"varname"=>"entryTime", "name" => "entryTime");
	$dalTableProjectStep["id"]["key"]=true;

$dal_info["mc_at_192_168_1_111__ProjectStep"] = &$dalTableProjectStep;
?>