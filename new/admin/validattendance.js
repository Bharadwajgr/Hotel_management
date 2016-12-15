// JavaScript Document
function validAtten(theForm)
{ 
	var reason="";
	reason += validateDate(theForm.date);
	if(reason != "") 
	{
    	alert("Some fields need correction:\n" + reason);
 		return false;
	}
 	return true;
}

function validateDate(fld) {
	   var error = "";
    if (fld.value == "") {
   		fld.style.background = 'Yellow';
        error = "You didn't enter the Date.\n";
    } 
	else {
        fld.style.background = 'White';
    }
    return error;
}
