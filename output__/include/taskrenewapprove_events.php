<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_taskrenewapprove  extends eventsBase
{
	function __construct()
	{
	// fill list of events

		$this->events["BeforeShowList"]=true;

		$this->events["BeforeShowEdit"]=true;

		$this->events["BeforeAdd"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowList(&$xt, &$templatefile, $pageObject)
{

		
if ($_SESSION["GroupName"]=="เจ้าหน้าที่") {

	$pageObject->hideItem("update_selected");
}


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeShowList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowEdit(&$xt, &$templatefile, $values, $pageObject)
{

		
	if ($_SESSION["GroupName"]=="เจ้าหน้าที่") {

		$pageObject->hideField("opinionDate");
		$pageObject->hideField("opinionStatus");
		$pageObject->hideField("opinionReason");
		$pageObject->hideField("approveStatus");
		$pageObject->hideField("approveDate");
		$pageObject->hideField("approveReason");

	}
	elseif (($_SESSION["GroupName"]=="คณะกลั่นกรอง") OR ($_SESSION["GroupName"]=="คณะกรรมการ")) {

		$pageObject->hideField("checkDate");
		$pageObject->hideField("checkStatus");
		$pageObject->hideField("checkReason");
		$pageObject->hideField("opinionDate");
		$pageObject->hideField("opinionStatus");
		$pageObject->hideField("opinionReason");
		$pageObject->hideField("approveStatus");
		$pageObject->hideField("approveDate");
		$pageObject->hideField("approveReason");

	}

	elseif ($_SESSION["GroupName"]=="คณะกรรมการบริหารโครงการ") {

		$pageObject->hideField("checkDate");
		$pageObject->hideField("checkStatus");
		$pageObject->hideField("checkReason");
		$pageObject->hideField("approveStatus");
		$pageObject->hideField("approveDate");
		$pageObject->hideField("approveReason");
	}
	elseif ($_SESSION["GroupName"]=="ปลัดฯ") {

		$pageObject->hideField("checkDate");
		$pageObject->hideField("checkStatus");
		$pageObject->hideField("checkReason");
		$pageObject->hideField("opinionDate");
		$pageObject->hideField("opinionStatus");
		$pageObject->hideField("opinionReason");
	}
// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeShowEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, $pageObject)
{

		
		$values["checkStatus"] = "รอตรวจสอบ";
		$values["opinionStatus"] = "รอตรวจสอบ";
		$values["approveStatus"] = "รออนุมัติ";

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>
