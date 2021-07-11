const par1 = document.getElementById("one") ;
const par3 = document.getElementById("three") ;
window.addEventListener("scroll",function() {
	let offset = window.pageYOffset ;
	par1.style.backgroundPositionY= offset*-2 +"px" ;
	par3.style.backgroundPositionY= offset*-2 +"px" ;
})