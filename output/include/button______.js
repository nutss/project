
Runner.buttonEvents["_____"]=function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='_____';if(!pageObj.buttonEventBefore['_____']){pageObj.buttonEventBefore['_____']=function(params,ctrl,pageObj,proxy,pageid,rowData,row,submit){var ajax=ctrl;}}
if(!pageObj.buttonEventAfter['_____']){pageObj.buttonEventAfter['_____']=function(result,ctrl,pageObj,proxy,pageid,rowData,row,params){var ajax=ctrl;var win=Runner.displayPopup({url:"https://project.mac.in.th/report/documents/master/ViewerTransferNotice.php?"+result["txt"],width:800,height:600,header:'หนังสือแจ้งโอน'});}}
$('a[id="_____"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="_____"+"_"+Runner.genId();var button______=new Runner.form.Button({id:this.id,btnName:"_____"});button______.init({args:[pageObj,proxy,pageid]});});};