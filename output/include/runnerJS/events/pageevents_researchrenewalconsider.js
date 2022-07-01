
Runner.pages.PageSettings.addPageEvent('researchRenewalConsider',Runner.pages.constants.PAGE_EDIT,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var ctrl_researchRegisterDescCheck=Runner.getControl(pageid,"researchRegisterDescCheck");if(ctrl_researchRegisterDescCheck.getValue()=="false"){pageObj.hideField("researchRegisterDesc");}
else{pageObj.showField("researchRegisterDesc");}
var ctrl_researchConsiderFileCheck=Runner.getControl(pageid,"researchConsiderFileCheck");if(ctrl_researchConsiderFileCheck.getValue()=="false"){pageObj.hideField("researchConsiderFile");}
else{pageObj.showField("researchConsiderFile");}
pageObj.hideField("researchRegisterDescCheck");pageObj.hideField("researchConsiderFileCheck");});