<?php
$topsprovince = array();
			$topsprovince["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "",
		"payload" => "[{\"name\":\"name\",\"value\":\"value\",\"location\":\"post\",\"skipEmpty\":true}]"
	);
	$tables_data["province"][".operations"] = &$topsprovince;
?>