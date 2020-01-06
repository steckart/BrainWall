
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
  