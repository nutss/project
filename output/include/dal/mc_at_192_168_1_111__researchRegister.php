<?php
$dalTableresearchRegister = array();
$dalTableresearchRegister["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTableresearchRegister["researchRegisterNo"] = array("type"=>200,"varname"=>"researchRegisterNo", "name" => "researchRegisterNo");
$dalTableresearchRegister["researchRegisterName"] = array("type"=>200,"varname"=>"researchRegisterName", "name" => "researchRegisterName");
$dalTableresearchRegister["researchRegisterStartDate"] = array("type"=>7,"varname"=>"researchRegisterStartDate", "name" => "researchRegisterStartDate");
$dalTableresearchRegister["researchRegisterEndDate"] = array("type"=>7,"varname"=>"researchRegisterEndDate", "name" => "researchRegisterEndDate");
$dalTableresearchRegister["researchRegisterFile"] = array("type"=>201,"varname"=>"researchRegisterFile", "name" => "researchRegisterFile");
$dalTableresearchRegister["researchType"] = array("type"=>200,"varname"=>"researchType", "name" => "researchType");
$dalTableresearchRegister["researchRegisterStatus"] = array("type"=>200,"varname"=>"researchRegisterStatus", "name" => "researchRegisterStatus");
$dalTableresearchRegister["entryUserName"] = array("type"=>200,"varname"=>"entryUserName", "name" => "entryUserName");
$dalTableresearchRegister["entryTime"] = array("type"=>135,"varname"=>"entryTime", "name" => "entryTime");
	$dalTableresearchRegister["id"]["key"]=true;

$dal_info["mc_at_192_168_1_111__researchRegister"] = &$dalTableresearchRegister;
?>