
Runner.pages.PageSettings.addPageEvent('ReportMonitor1',Runner.pages.constants.PAGE_DASHBOARD,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){$("#dashelement_reportsearchresearchregister_list1").hide();$("[data-dbelement='reportsearchresearchregister_list']").remove();$("[name='srchOpt_4_researchRegisterID']").remove();$("[name='srchOpt_4_researchType']").remove();});