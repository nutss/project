<?php
$dalTableProjectContact = array();
$dalTableProjectContact["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTableProjectContact["contactName"] = array("type"=>200,"varname"=>"contactName", "name" => "contactName");
$dalTableProjectContact["companyName"] = array("type"=>200,"varname"=>"companyName", "name" => "companyName");
$dalTableProjectContact["contactAddress"] = array("type"=>200,"varname"=>"contactAddress", "name" => "contactAddress");
$dalTableProjectContact["contactTelephone"] = array("type"=>200,"varname"=>"contactTelephone", "name" => "contactTelephone");
$dalTableProjectContact["contactEmail"] = array("type"=>200,"varname"=>"contactEmail", "name" => "contactEmail");
$dalTableProjectContact["entryUserName"] = array("type"=>200,"varname"=>"entryUserName", "name" => "entryUserName");
$dalTableProjectContact["entryTime"] = array("type"=>135,"varname"=>"entryTime", "name" => "entryTime");
	$dalTableProjectContact["id"]["key"]=true;

$dal_info["mc_at_192_168_1_111__ProjectContact"] = &$dalTableProjectContact;
?>