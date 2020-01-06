
function matchpass(){  

var x = document.getElementById('rpswd');
var y = document.getElementById('rpswd-repeat');
  
if(x.value==y.value){  
return true;  
}  
else{  
alert("password must be same!");  
return false;  
}  
}  