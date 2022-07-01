<script>

if (!document.location.href.includes('login')) {
  let b = document.body
  let dhead = document.createElement('div') //สร้าง div สำหรับ header
  let dfoot = document.createElement('div') //สร้าง div สำหรับ footer
  let normpage = document.querySelector('.r-vbar-page') //หน้าทั่าไป
  let printpage = document.querySelector('[class="rp-presplitpage rp-page"]') //หน้า print
  //if (normpage) normpage.style.marginTop = "100px"
  //if (printpage) printpage.style.marginTop = "100px"

  //เลื่อนหน้าลงมา จะได้ไม่ทับกับ header
  //dhead.className ="yourheader" 
   // css ของ heade
  //dhead.textContent = 'THis is header'//content ใน header
  //dhead.innerHTML = '<div style="font-family:Kanit; display:flex;padding-left:40px"><div class="imghead"><img src="https://www.mhesi.go.th/images/2565/Pornnapa/05/110565/1/1.png" style="width:60px;padding:5px 0px 0px 5px"/></div><div class="texthead" style="font-size:0.8em;padding:4px;text-align:left"><span style="font-size:1.8em;color:#7a4ea3">ระบบบริหารการขอรับทุน</span><br>กลุ่มภารกิจบริหารยุทธศาสตร์ (ภย.)<br>สำนักงานปลัดกระทรวงการอุดมศึกษา วิทยาศาสตร์ วิจัยและนวัตกรรม (สป.อว.)</div></div>'
  //dhead.style="position:fixed;left:0;top:0;width:100%;height:100px;text-align:center;z-index:2;background-color:white;color:black"

	dhead.innerHTML = '<img style ="height:100%; object-fit: cover; object-position:0 0" src="https://project.mac.in.th/images/header.png" />'
  
	b.insertBefore(dhead,b.firstChild) //แทรก div header เป็นตัวแรก จาก body
  dfoot.className ="yourfooter"
  dfoot.innerText = `กระทรวงการอุดมศึกษา วิทยาศาสตร์ วิจัยและนวัตกรรม (อว.)\n
  เป็นหน่วยงานของรัฐที่จัดตั้งขึ้นเพื่อขับเคลื่อนการอุดมศึกษาไทย วิทยาศาสตร์ วิจัยและนวัตกรรม ไปสู่มาตรฐานในระดับสากล\nและเพิ่มอันดับความสามารถการแข่งขันในระดับนานาชาติอย่างยั่งยืน ไม่ได้มีวัตถุประสงค์เพื่อแสวงหากำไร\nหากท่านพบว่ามีข้อมูลใดๆ ที่ละเมิดทรัพย์สินทางปัญญาปรากฏอยู่ในเว็บไซต์นี้ โปรดแจ้งให้ทราบ เพื่อดำเนินการแก้ปัญหาดังกล่าวโดยเร็วที่สุดต่อไป\n© 2020 Ministry of Higher Education, Science, Research and Innovation. ALL RIGHTS RESERVED`//content ใน footer
  dfoot.style="font-family:Kanit;left:0;bottom:0;width:100%;text-align:right;padding:10px;z-index:9999;background-color:#999999;color:black;font-size:0.75em"//css ของ footer

  b.appendChild(dfoot) //แทรก div ของ footer ไว้ท้่ายสุด  

}




</script>