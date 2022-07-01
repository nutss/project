
Runner.pages.PageSettings.addPageEvent('researchScholarshipConsider',Runner.pages.constants.PAGE_LIST,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var id="delete";var button=$("[id^="+id+"]");Runner.addDisabledClass(button);$(':checkbox').change(function(){var ICount=$('input[name="selection[]"]:checked').length;if(ICount==1)
Runner.delDisabledClass(button);else
Runner.addDisabledClass(button);});});Runner.pages.PageSettings.addPageEvent('researchScholarshipConsider',Runner.pages.constants.PAGE_EDIT,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var ctrl_researchRegisterDescCheck=Runner.getControl(pageid,"researchRegisterDescCheck");if(ctrl_researchRegisterDescCheck.getValue()=="false"){pageObj.hideField("researchRegisterDesc");}
else{pageObj.showField("researchRegisterDesc");}
var ctrl_researchConsiderFileCheck=Runner.getControl(pageid,"researchConsiderFileCheck");if(ctrl_researchConsiderFileCheck.getValue()=="false"){pageObj.hideField("researchConsiderFile");}
else{pageObj.showField("researchConsiderFile");}
pageObj.hideField("researchRegisterDescCheck");pageObj.hideField("researchConsiderFileCheck");});