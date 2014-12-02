$(document).ready(function(){

/* Ira basic footer message setter  */
	
	 todate = new Date();
     ftr = $("#footer");
     ftr.html("&copy;" + todate.getFullYear() + " <a href='#Rose_Nyamwamu'> </a> for <a href='http://ueab.ac.ke/' > UEAB</a>");
     $(".page-content").toggleClass("toggle");
     $(".logo-brand").removeClass("white-color");
		$(".logo-brand").removeClass("primary-color");
		$(".logo-brand").removeClass("info-color");
		$(".logo-brand").removeClass("success-color");
		$(".logo-brand").removeClass("danger-color");
		$(".logo-brand").removeClass("warning-color");
		$(".logo-brand").addClass("white-color");
		$(".sidebar-left").addClass("light-color");

});