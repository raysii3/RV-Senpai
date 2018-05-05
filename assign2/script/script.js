/* Filename: script.js
   Target html: All webpages
   Purpose : Output in the Header & Navigation
   Author: ERICSON TAN PENG HONG
   Date written: 1/5/2018
   Revisions:  Ericson Lab-Tutorial 10:00am 2/5/2018
*/ 






//Enquiry Validation
var gErrorMsg = "";
function validate_fname() {
	var input_blank = document.getElementById("Fname").value;
	var validname = true;
	if (input_blank == "") {
		gErrorMsg = gErrorMsg + "First Name: cannot be blank\n";
		validname = false;
	}
	return validname;
}
function validate_lname() {
	var input_blank = document.getElementById("Lname").value;
	var validname = true;
	if (input_blank == "") {
		gErrorMsg = gErrorMsg + "Last Name: cannot be blank\n";
		validname = false;
	}
	return validname;
}
function validate_email () {  
	var email = document.getElementById("email");
	var validemail = false; 
	var pattern = /[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-za-zA-Z0-9.-]{1,4}$/;
	if (pattern.test(email.value)){
		validemail = true;
	}else{  
		validemail = false;
		gErrorMsg = gErrorMsg + "Email: Enter a valid email address\n"
	}
	return validemail;
}

function validate_pnum () {  
	var pnum = document.getElementById("p_number");
	var validpnum = false; 
	var pattern = /^\(\d\d\) \d\d\d\d-\d\d\d\d$/;
	if (pattern.test(p_number.value)){
		validpnum = true;
	}else{  
		validpnum = false;
		gErrorMsg = gErrorMsg + "Phone number: Enter a valid phone number\n"
	}
	return validpnum;
}
function validate_hpnum () {  
	var hpnum = document.getElementById("hp_number");
	var validhpnum = false; 
	var pattern = /^\(\d\d\d\) \d\d\d\d-\d\d\d\d$/;
	if (pattern.test(hp_number.value)){
		validhpnum = true;
	}else{  
		validhpnum = false;
		gErrorMsg = gErrorMsg + "Handphone number: Enter a valid handphone number\n"
	}
	return validhpnum;
}
function validate_sadd (){
	var no_input = document.getElementById("srt_add").value;
	var validsadd = true; 
	if(no_input == ""){
		gErrorMsg = gErrorMsg + "Street address: cannot be blank\n"
		validsadd = false;
	}
	return validsadd;
}
function validate_citytown(){
	var no_input = document.getElementById("city/town").value;
	var validcitytown = true;
	if(no_input ==""){
		gErrorMsg = gErrorMsg + "City/Town: Enter a valid city/town\n"
		validcitytown = false;
	}
	return validcitytown;
}

function validate_state(){
	var no_input = document.getElementById("state").value;
	var validstate = true;
	if(no_input == "Select a state"){
		gErrorMsg = gErrorMsg + "State: Please select a state from the selection list\n"
		validstate = false;
	}
	return validstate;
}
function validate_postcode(){
	var no_input = document.getElementById("postcode").value;
	var validpostcode = false;
	var pattern = /^\d\d\d\d\d$/;
	if(pattern.test(postcode.value)){
		validpostcode = true;
	}else{
		validpostcode = false;
		gErrorMsg = gErrorMsg + "Postcode: Enter a valid postcode\n"
	}
	return validpostcode;
}
function validate_product(){
	var no_input = document.getElementById("product").value;
	var validproduct = true;
	if(no_input == "Select your RV"){
		gErrorMsg = gErrorMsg + "RV Rental: Please select a RV type from the selection list\n"
		validproduct = false;
	}
	return validproduct;
}

function validate_duration(){
	var no_input = document.getElementById("rental_dur").value;
	var validdur = true;
	if(no_input == "0"){
		gErrorMsg = gErrorMsg + "Rental duration: Please enter the duration of yuor rental\n"
		validdur = false;
	}
	return validdur;
}
function display(){
	var fnameok = validate_fname();
	var lnameok = validate_lname();
	var emailok = validate_email();
	var phoneok = validate_pnum();
	var handphoneok = validate_hpnum();
	var streetok = validate_sadd();
	var citytownok = validate_citytown();
	var stateok = validate_state();
	var postcodeok = validate_postcode();
	var productok = validate_product();
	var durationok = validate_duration();
	var isALLOK = false;
	if(fnameok && lnameok && emailok && phoneok && handphoneok && streetok && citytownok && stateok && postcodeok && productok && durationok){
		isALLOK = true;
	}
	else{
		alert(gErrorMsg);
		gErrorMsg = "";
		isALLOK = false;
	}
	return isALLOK;
}
function init(){
	var clickme = document.getElementById("clickme");
	clickme.onclick = display;
}
window.onload = init;
window.onload = init;


