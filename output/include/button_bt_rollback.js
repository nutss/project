
Runner.buttonEvents["bt_rollback"]=function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='bt_rollback';if(!pageObj.buttonEventBefore['bt_rollback']){pageObj.buttonEventBefore['bt_rollback']=function(params,ctrl,pageObj,proxy,pageid,rowData,row,submit){var ajax=ctrl;swal("คุณต้องการกู้ค่าที่ถูกลบออก ใช่ไหม?",{buttons:{cancel:"ไม่ใช่",proceed:{text:"ใช่ กู้คืนค่า",value:"proceed",}},}).then(function(value){switch(value){case"proceed":swal("ระบบได้กู้คืนค้าเรียบร้อย");submit();break;default:swal("ยกเลิกการกู้คืนค่า");break;}});return false;}}
if(!pageObj.buttonEventAfter['bt_rollback']){pageObj.buttonEventAfter['bt_rollback']=function(result,ctrl,pageObj,proxy,pageid,rowData,row,params){var ajax=ctrl;var message=result["txt"]+" !!!";ajax.setMessage(message);}}
$('a[id="bt_rollback"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="bt_rollback"+"_"+Runner.genId();var button_bt_rollback=new Runner.form.Button({id:this.id,btnName:"bt_rollback"});button_bt_rollback.init({args:[pageObj,proxy,pageid]});});};