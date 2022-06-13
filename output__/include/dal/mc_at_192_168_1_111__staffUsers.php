<?php
$dalTablestaffUsers = array();
$dalTablestaffUsers["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTablestaffUsers["staffFullName"] = array("type"=>200,"varname"=>"staffFullName", "name" => "staffFullName");
$dalTablestaffUsers["staffUsername"] = array("type"=>200,"varname"=>"staffUsername", "name" => "staffUsername");
$dalTablestaffUsers["staffPassword"] = array("type"=>200,"varname"=>"staffPassword", "name" => "staffPassword");
$dalTablestaffUsers["staffEmail"] = array("type"=>200,"varname"=>"staffEmail", "name" => "staffEmail");
$dalTablestaffUsers["staffStatus"] = array("type"=>3,"varname"=>"staffStatus", "name" => "staffStatus");
$dalTablestaffUsers["staffEmailNotify"] = array("type"=>200,"varname"=>"staffEmailNotify", "name" => "staffEmailNotify");
$dalTablestaffUsers["entryUserName"] = array("type"=>200,"varname"=>"entryUserName", "name" => "entryUserName");
$dalTablestaffUsers["entryTime"] = array("type"=>135,"varname"=>"entryTime", "name" => "entryTime");
$dalTablestaffUsers["apikey"] = array("type"=>200,"varname"=>"apikey", "name" => "apikey");
	$dalTablestaffUsers["id"]["key"]=true;

$dal_info["mc_at_192_168_1_111__staffUsers"] = &$dalTablestaffUsers;
?>