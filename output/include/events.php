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

		
		$SQLCommand = "SELECT ";
		$SQLCommand .= "project_ugmembers.UserName, ";
		$SQLCommand .= "project_uggroups.GroupID, ";
		$SQLCommand .= "project_uggroups.typeName, ";
		$SQLCommand .= "project_uggroups.Label  ";
		$SQLCommand .= "FROM project_uggroups ";
		$SQLCommand .= "RIGHT JOIN project_ugmembers ON project_uggroups.GroupID = project_ugmembers.GroupID ";
		$SQLCommand .= "WHERE (project_ugmembers.UserName = '".trim($_SESSION["UserID"])."')";
		$SQLCommand .= "ORDER BY FIELD(project_uggroups.Label,\"คณะกรรมการบริหารโครงการ\",\"ปลัดฯ\",\"คณะกรรมการ\",\"คณะกลั่นกรอง\",\"เจ้าหน้าที่\") ";


			$RS1 = CustomQuery($SQLCommand);
			while ($RS1_DATA = db_fetch_array($RS1)) {

				if ($RS1_DATA["GroupID"]=="") {
					
					$_SESSION["GroupName"].="'<Admin>'".",";

					$SQLCommand = "SELECT * FROM researchType";	
				
						$RS2 = CustomQuery($SQLCommand);
						while ($RS2_DATA = db_fetch_array($RS2)) {
								$_SESSION["typeName"].="'".$RS2_DATA["typeName"]."',";
						}

				}

				elseif ($RS1_DATA["typeName"]=="") {
					

					$SQLCommand = "SELECT * FROM researchType";	
				
						$RS2 = CustomQuery($SQLCommand);
						while ($RS2_DATA = db_fetch_array($RS2)) {
								$_SESSION["typeName"].="'".$RS2_DATA["typeName"]."',";
						}

				}

				else{
					$_SESSION["GroupName"].="'".$RS1_DATA["Label"]."',";
					$_SESSION["typeName"].="'".$RS1_DATA["typeName"]."',";
					//$pageObject->setProxyValue("GroupName", $data["Label"]);
				}

			}

			$_SESSION["GroupName"] = substr($_SESSION["GroupName"],0,-1);
			$_SESSION["typeName"] = substr($_SESSION["typeName"],0,-1);



// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterSuccessfulLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

//	onscreen events




}
?>
