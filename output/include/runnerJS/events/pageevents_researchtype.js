
Runner.pages.PageSettings.addPageEvent('researchType',Runner.pages.constants.PAGE_LIST,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var id="delete";var button=$("[id^="+id+"]");Runner.addDisabledClass(button);$(':checkbox').change(function(){var ICount=$('input[name="selection[]"]:checked').length;if(ICount==1)
Runner.delDisabledClass(button);else
Runner.addDisabledClass(button);});});