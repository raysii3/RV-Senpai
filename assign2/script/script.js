/* Filename: script.js
   Target html: All webpages
   Purpose : Output in the Header & Navigation
   Author: ERICSON TAN PENG HONG
   Date written: 1/5/2018
   Revisions:  Ericson Lab-Tutorial 10:00am 2/5/2018
*/ 

//Stores the Data in local storage
function subjectDataTransfer(product_id){
	sessionStorage.setItem("selected_product_id", product_id);
	//Storage Test 
	// var test = localStorage.getItem("selected_product_id");
	// alert(typeof(test));
}

function checkProductActive(){
	if(location.pathname == "/assign2/classa.html")
		document.getElementById("CA").classList.add("active");
	else if(location.pathname == "/assign2/classb.html")
		document.getElementById("CB").classList.add("active");
	else if(location.pathname == "/assign2/classc.html")
		document.getElementById("CC").classList.add("active");
	else if(location.pathname == "/assign2/trailer.html")
		document.getElementById("T").classList.add("active");
}

//Check if "Subject" field is filled, show "Product" field if yes, none if no
function check() {
    var dropdown = document.getElementById("Subject");
    var current_value = dropdown.options[dropdown.selectedIndex].value;

    if (current_value !== "Select your RV") {
		document.getElementById("productlabel").style.display = "inline";
        document.getElementById("product").style.display = "inline";
    }
    else {
		document.getElementById("productlabel").style.display = "none";
        document.getElementById("product").style.display = "none";
    }
}

//Retrieves the Data in local storage
function enquirySelectedProduct(){
	try{
		var temp = sessionStorage.getItem("selected_product_id");
		var selectedSubjectId = parseInt(temp.substr(1,1));
		var selectedProductId = parseInt(temp.substr(2,1));
		document.getElementById("Subject").selectedIndex = selectedSubjectId;
		document.getElementById("product").selectedIndex = selectedProductId;
	}catch(err){
		
	}
}

//Function for all dropdown repopulation
function populateDropdown(){
	populateNavDropdown();
	populateSubjectDropdown();
	populateProductDropdown();
}

//Populate navigation bar Product drop-down list using Javascript
function populateNavDropdown(){
	var product_content = document.getElementById("product_dropdown_id");
	var textNodes = [];
	var links = [];
	
	for(var i = 0; i < 4; ++i){
		links[i] = document.createElement("a");
		
		switch(i){
			case 0:	
				links[0].href = "classa.html";
				textNodes[0] = document.createTextNode("Class A");
				links[0].setAttribute("id", "CA");
				break;
			case 1:	
				links[1].href = "classb.html";
				textNodes[1] = document.createTextNode("Class B");
				links[1].setAttribute("id", "CB");
				break;
			case 2:	
				links[2].href = "classc.html";
				textNodes[2] = document.createTextNode("Class C");
				links[2].setAttribute("id", "CC");
				break;
			case 3:	
				links[3].href = "trailer.html";
				textNodes[3] = document.createTextNode("Trailer");
				links[3].setAttribute("id", "CT");
				break;
		}
		links[i].appendChild(textNodes[i]);
		product_content.appendChild(links[i]);
	}
}

//Populate enquiry "Subject" field drop-down list using Javascript
function populateSubjectDropdown(){
	var dropdown_id = document.getElementById("Subject");
	var dropdownList =["Class A","Class B","Class C","Trailer"]
	
	for(var i = 0; i < dropdownList.length; ++i){
		var opt = dropdownList[i];
		var el = document.createElement("option");
		el.text = opt;
		el.value = opt;
		try{
			dropdown_id.appendChild(el);
		}catch(err){
			
		}
	}
}
//Populate enquiry "Product" field drop-down list using Javascript
function populateProductDropdown(){
	var dropdown_id = document.getElementById("product");
	var dropdownList =["Basic","Standard","Popular","Premium","Luxury"]
	
	for(var i = 0; i < dropdownList.length; ++i){
		var opt = dropdownList[i];
		var el = document.createElement("option");
		el.text = opt;
		el.value = opt;
		try{
			dropdown_id.appendChild(el);
		}catch(err){
			
		}
	}
}


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
	var pattern = /^\d\d\d\-\d\d\d\d\d\d\d\d$/;
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
	var pattern = /^\d\d\d\-\d\d\d\d\d\d\d\d$/;
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

//To load multiple functions 
function addLoadEvent(func) {
  var oldonload = window.onload;
  if (typeof window.onload != 'function') {
    window.onload = func;
  } else {
    window.onload = function() {
      if (oldonload) {
        oldonload();
      }
      func();
    }
  }
}
addLoadEvent(populateDropdown());
addLoadEvent(enquirySelectedProduct());
addLoadEvent(checkProductActive());


