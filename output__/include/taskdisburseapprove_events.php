<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_taskdisburseapprove  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeShowEdit"]=true;

		$this->events["BeforeShowList"]=true;

		$this->events["BeforeAdd"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowEdit(&$xt, &$templatefile, $values, $pageObject)
{

		
if (($_SESSION["GroupName"]=="เจ้าหน้าที่") OR ($_SESSION["GroupName"]=="คณะกลั่นกรอง") OR ($_SESSION["GroupName"]=="คณะกรรมการ") OR ($_SESSION["GroupName"]=="คณะกรรมการบริหารโครงการ")){

		$pageObject->hideField("approveStatus");
		$pageObject->hideField("approveDate");
		$pageObject->hideField("approveReason");

	}


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeShowEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowList(&$xt, &$templatefile, $pageObject)
{

		
	if (($_SESSION["GroupName"]=="เจ้าหน้าที่") OR ($_SESSION["GroupName"]=="คณะกรรมการ") OR ($_SESSION["GroupName"]=="คณะกรรมการบริหารโครงการ") OR ($_SESSION["GroupName"]=="คณะกลั่นกรอง")) {

		$pageObject->hideItem("update_selected");
	}


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeShowList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, $pageObject)
{

			
		$values["approveStatus"] = "รออนุมัติ";

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>
