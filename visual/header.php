<script src="js/jquery.maskMoney.min.js" type="text/javascript"></script>

<script>
if (!document.location.href.includes('login')) {
    let dhead = document.createElement('div')
    let dfoot = document.createElement('div')
    dhead.className = "yourheader"
    dhead.style = 'position:fixed;top:0;z-index:2;width:100%;background-color:white'
    dhead.innerHTML = '<img style ="height:100%; object-fit: cover; object-position:0 0" src="https://project.mac.in.th/images/header.png" />'
		let topoffset = "97px"
		 if (document.location.href.includes('print')) {
			document.querySelector('[class="rp-presplitpage rp-page"]').style.marginTop = topoffset
		} else {
			document.querySelector('.r-vbar-page').style.marginTop = topoffset
		}
    let b = document.body
    b.insertBefore(dhead, b.firstChild)
    dfoot.className = "yourfooter"
    dfoot.innerText = `กระทรวงการอุดมศึกษา วิทยาศาสตร์ วิจัยและนวัตกรรม (อว.)\nเป็นหน่วยงานของรัฐที่จัดตั้งขึ้นเพื่อขับเคลื่อนการอุดมศึกษาไทย วิทยาศาสตร์ วิจัยและนวัตกรรม ไปสู่มาตรฐานในระดับสากล\nและเพิ่มอันดับความสามารถการแข่งขันในระดับนานาชาติอย่างยั่งยืน ไม่ได้มีวัตถุประสงค์เพื่อแสวงหากำไร\nหากท่านพบว่ามีข้อมูลใดๆ ที่ละเมิดทรัพย์สินทางปัญญาปรากฏอยู่ในเว็บไซต์นี้ โปรดแจ้งให้ทราบ เพื่อดำเนินการแก้ปัญหาดังกล่าวโดยเร็วที่สุดต่อไป\n© 2020 Ministry of Higher Education, Science, Research and Innovation. ALL RIGHTS RESERVED` 
    dfoot.style = "font-family:Kanit;left:0;width:100%;text-align:right;padding:10px;z-index:0;background-color:rgba(153, 153, 153);color:black;font-size:0.75em"
    b.appendChild(dfoot)
    let footposn = ()=>{
			(b.getBoundingClientRect(0).bottom+dfoot.getBoundingClientRect(0).height+50 > screen.height) ? dfoot.style.position = 'relative' : dfoot.style.position = 'absolute';
			if (document.location.href.includes('dashboard_dashboard.php')) dfoot.style.position = 'relative'
			dfoot.style.bottom = "0px"
    }
    footposn()
	const resizeObserver = new ResizeObserver(entries => footposn())
	resizeObserver.observe(b)
}
</script>