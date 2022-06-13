<?php
class eventsBase
{
	var $events = array();
	var $maps = array();
	function exists($event, $table = "")
	{
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
}

class class_GlobalEvents extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterSuccessfulLogin"]=true;



//	onscreen events



		}

//	handlers

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username, $password, &$data, $pageObject)
{

		
/*
		$SQLCommand = "SELECT ";
		$SQLCommand .= "project_ugmembers.UserName, ";
		$SQLCommand .= "project_uggroups.GroupID, ";
		$SQLCommand .= "project_uggroups.Label  ";
		$SQLCommand .= "FROM project_uggroups ";
		$SQLCommand .= "INNER JOIN project_ugmembers ON project_uggroups.GroupID = project_ugmembers.GroupID ";
		$SQLCommand .= "WHERE ( project_ugmembers.UserName = '".$_SESSION["UserID"]."') ";
		$SQLCommand .= "ORDER BY FIELD(project_uggroups.Label,\"คณะกรรมการบริหารโครงการ\",\"ปลัดฯ\",\"คณะกรรมการ\",\"คณะกลั่นกรอง\",\"เจ้าหน้าที่\") ";
		$SQLCommand .= "LIMIT 1 ";

			$RS1 = CustomQuery($SQLCommand);
			$data = db_fetch_array($RS1);

			if ($data["GroupID"]=="-1") {

				$_SESSION["GroupName"]="<Admin>";
				$pageObject->setProxyValue("GroupName", "<Admin>");
			}
			else{

				$_SESSION["GroupName"]=$data["Label"];
				$pageObject->setProxyValue("GroupName", $data["Label"]);
			}



*/

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterSuccessfulLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

//	onscreen events




}
?>
