windows.onload = function(){
	// var product_content = document.getElementById('product_dropdown_content');
	var textNodes = [];
	var links = [];
	
	links[0] = document.createElement('a');
	links[0].href = 'classa.html';
	textNodes[0] = document.createTextNode('Class A');
	links[0].appendChild(textNodes[0]);
	
	links[1] = document.createElement('a');
	links[1].href = 'classb.html';
	textNodes[1] = document.createTextNode('Class B');
	links[1].appendChild(textNodes[1]);
	
	links[2] = document.createElement('a');
	links[2].href = 'classc.html';
	textNodes[2] = document.createTextNode('Class C');
	links[2].appendChild(textNodes[2]);
	
	links[3] = document.createElement('a');
	links[3].href = 'trailer.html';
	textNodes[3] = document.createTextNode('Trailer');
	links[3].appendChild(textNodes[3]);
	
	
	document.getElementById('product_dropdown_content').appendChild(links);
}