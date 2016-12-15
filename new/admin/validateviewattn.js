// JavaScript Document
function validateatten(theForm) {
    var reason = "";
	reason += validatename(theForm.emp);
 	if(reason != "") {
    	alert("Some fields need correction:\n" + reason);
 		return false;
	}
 	return true;
}

function validatename(fld) {
	   var error = "";
    if (fld.value == "") {
   		fld.style.background = 'Yellow';
        error = "You didn't enter Employee ID.\n";
    } 
	else {
        fld.style.background = 'White';
    }
    return error;
}
