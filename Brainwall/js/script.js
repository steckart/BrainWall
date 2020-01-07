
function matchpass(){  

	var x = document.getElementById('rpswd');
	var y = document.getElementById('rpswd-repeat');
	  
	if(x.value==y.value){  
		return true;  
	}  
	else{  
		alert("Passwörter müssen übereinstimmen!");  
		return false;  
	}  
}


// Funktioniert noch nicht!
// Funktioniert bisher nur, wenn <script> in der "navtop.php" am Ende steht
document.addEventListener('DOMContentLoaded', start);

function start() {
	for (var i = 0; i < document.links.length; i++) {
		if (document.links[i].href == document.URL) {
			document.links[i].className += ' active';
		}
	}
}
  