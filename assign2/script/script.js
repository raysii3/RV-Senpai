/* Filename: script.js
   Target html: All webpages
   Purpose : Output in the Header & Navigation
   Author: ERICSON TAN PENG HONG
   Date written: 1/5/2018
   Revisions:  Ericson Lab-Tutorial 10:00am 2/5/2018
*/ 

function img() {
	return "<a href='lab8.php'><img id='images' src='swinburne_logo.gif' alt='Swinburne Sarawak Logo' title='Swinburne Sarawak Logo' /></a>";
}

function nav(){
var menu = ['Contact Us', 'Jobs at Swinburne', 'Copyright and deisclaimer', 'Privacy', 'Accessibility', 'Feedback', 'Register'];
var link = ['https://www.swinburne.edu.my/contact', 'https://www.swinburne.edu.my/hr', 'http://www.swinburne.edu.au/copyright-disclaimer/', 'https://www.swinburne.edu.my/privacy/privacy-collection-notice', 'https://www.swinburne.edu.my/accessibility-information', 'https://www.swinburne.edu.my/feedback', 'register.php'];
var navi = "<nav><ul>";

	for(var i = 0; i < menu.length; i++)
	{
		navi = navi + "<li><a href='" + link[i] + "'>" + menu[i] + "</a>|</li>";
	}

navi = navi + "</ul></nav>";
return navi;

}


	document.write(img());
	document.write(nav());

