<?php
$dalTableproject_audit = array();
$dalTableproject_audit["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTableproject_audit["datetime"] = array("type"=>135,"varname"=>"datetime", "name" => "datetime");
$dalTableproject_audit["ip"] = array("type"=>200,"varname"=>"ip", "name" => "ip");
$dalTableproject_audit["user"] = array("type"=>200,"varname"=>"user", "name" => "user");
$dalTableproject_audit["table"] = array("type"=>200,"varname"=>"table", "name" => "table");
$dalTableproject_audit["action"] = array("type"=>200,"varname"=>"action", "name" => "action");
$dalTableproject_audit["description"] = array("type"=>201,"varname"=>"description", "name" => "description");
	$dalTableproject_audit["id"]["key"]=true;

$dal_info["mc_at_192_168_1_111__project_audit"] = &$dalTableproject_audit;
?>