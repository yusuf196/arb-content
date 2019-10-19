/*
	Visualize by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
*/

$(function() {

	// Vars.
		var	$window = $(window),
			$body = $('body'),
			$wrapper = $('#wrapper');

	// Breakpoints.


	// Disable animations/transitions until everything's loaded.
		$body.addClass('is-loading');

		$window.on('load', function() {
			$body.removeClass('is-loading');
      user_list();
			submit_cats();
		});

	// Poptrox.
	$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
});


});
  var count=0;
  var s1=0,s2=0,s3=0,s4=0,s5=0,s6=0;
function user_list(){
	////////////////////////////////////
	var a1 =document.getElementById("1");
	let img1=a1.getElementsByTagName("img")[0];
	a1.addEventListener('click',function(){
	 if(s1 === 0){

		 if (count===4) {
				swal("O_O","لقد اخترت الحد الاقصى من المواضيع ","warning");
		 }
		 else {

		 count++;
     s1=1;
		 img1.classList.add('clicked');}
	 }
	else {
		s1=0;
	count--;
		img1.classList.remove("clicked");
	}});

	////////////////////////////////////
	var a2 =document.getElementById("2");
	let img2=a2.getElementsByTagName("img")[0];
	a2.addEventListener('click',function(){
	 if(s2 === 0){
		 if (count===4) {
			swal("O_O","لقد اخترت الحد الاقصى من المواضيع ","warning");
		 }
		 else {

		 count++;
	   s2=1;
		 img2.classList.add('clicked');}
	 }
	else {
		count--;
		s2=0;
		img2.classList.remove("clicked");
	}});
	////////////////////////////////////
	var a3 =document.getElementById("3");
	let img3=a3.getElementsByTagName("img")[0];
	a3.addEventListener('click',function(){
	 if(s3 === 0){
		 if (count===4) {
		swal("O_O","لقد اخترت الحد الاقصى من المواضيع ","warning");
		 }
		 else {


		 count++;
		 s3=1;
		 img3.classList.add('clicked');}
	 }
	else {
		count--;
		s3=0;
		img3.classList.remove("clicked");
	}});
	////////////////////////////////////
	////////////////////////////////////
	var a4 =document.getElementById("4");
	let img4=a4.getElementsByTagName("img")[0];
	a4.addEventListener('click',function(){
	 if(s4 === 0){
		 if (count===4) {
			swal("O_O","لقد اخترت الحد الاقصى من المواضيع ","warning");
		 }
		 else {

		 count++;
		 s4=1;
		 img4.classList.add('clicked');}
	 }
	else {
		count--;
		s4=0;
		img4.classList.remove("clicked");
	}});
	////////////////////////////////////
	var a5 =document.getElementById("5");
	let img5=a5.getElementsByTagName("img")[0];
	a5.addEventListener('click',function(){
	 if(s5 === 0){
		 if (count===4) {
		swal("O_O","لقد اخترت الحد الاقصى من المواضيع ","warning");
		 }
		 else {
		 count++;
		 s5=1;
		 img5.classList.add('clicked');}
	 }
	else {
		count--;
		s5=0;
		img5.classList.remove("clicked");
	}});

	////////////////////////////////////
	var a6 =document.getElementById("6");
	let img6=a6.getElementsByTagName("img")[0];
	a6.addEventListener('click',function(){
	 if(s6 === 0){
		 if (count===4) {
			swal("O_O","لقد اخترت الحد الاقصى من المواضيع ","warning");
		 }
		 else {


		 count++;
		 s6=1;
		 img6.classList.add('clicked');}
	 }
	else {
		count--;
		s6=0;
		img6.classList.remove("clicked");
	}});
}
function submit_cats(){


	// var submett=document.getElementById('#submit');
	// submett.addEventListener('onclick',function(){alert('submeted');});
	$("#form1").submit(function(event){
			 event.preventDefault();
		if (count === 0){swal("(ಥ﹏ಥ)","رجاءً اختر موضوعاً على الاقل ","warning");}
			else{
	//	alert('hello');
	 event.preventDefault();
  var cats=Array();
	if(s1===1) {cats.push("1");}
	if(s2===1){cats.push("2");}
	if(s3===1){cats.push("3");}
	if(s4===1){cats.push("4");}
	if(s5===1){cats.push("5");}
	if(s6===1){cats.push("6");}
	console.log(cats);

$.ajax({
	url:"catss",
	type:"post",
	data:{"1":s1,"2":s2,"3":s3,"4":s4,"5":s5,"6":s6},
	datatype:"json",
	success : function(){window.location.href = "/home";}

});


}});
}
