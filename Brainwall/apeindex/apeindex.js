function apeindex(){
	// var slider1 = document.getElementById("myRange1");
	// var output1 = document.getElementById("demo1");
	// output1.innerHTML = slider1.value;

	// slider1.onchange = function() {
		// output1.innerHTML = this.value;
		// var value1 = output1.innerHTML;
		// var value2 = output2.innerHTML;
		// var result = document.getElementById("result");
		

		// var re = output2.innerHTML/output1.innerHTML;
		// result.innerHTML = re.toFixed(2);
	
	// }
	
	// var slider2 = document.getElementById("myRange2");
	// var output2 = document.getElementById("demo2");
	// output2.innerHTML = slider2.value;

	// slider2.onchange = function() {
		// output2.innerHTML = this.value;
		// var value1 = output1.innerHTML;
		// var value2 = output2.innerHTML;
		// var result = document.getElementById("result");
		

		// var re = output2.innerHTML/output1.innerHTML;
		// result.innerHTML = re.toFixed(2);
	// }
	
// für Bechtold: ich glaub bei "slider.onchange" lag der Fehler
	// mit slider.oninput funktioniert es
	
	var slider1 = document.getElementById("myRange1");
	var output1 = document.getElementById("demo1");
	output1.innerHTML = slider1.value;

	slider1.oninput = function() {
		output1.innerHTML = this.value;
		  
		var result = document.getElementById("result");
		var re = output2.innerHTML/output1.innerHTML;
		result.innerHTML = re.toFixed(2);
	}

	var slider2 = document.getElementById("myRange2");
	var output2 = document.getElementById("demo2");
	output2.innerHTML = slider2.value;

	slider2.oninput = function() {
		output2.innerHTML = this.value;
		  
		var result = document.getElementById("result");
		var re = output2.innerHTML/output1.innerHTML;
		result.innerHTML = re.toFixed(2);
	}
	
}
document.addEventListener("DOMContentLoaded", apeindex);