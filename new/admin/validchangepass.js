// JavaScript Document
function validChangepassword(theForm)
{ 
	var reason="";
	reason += validateName(theForm.username);
	reason += validateCurpass(theForm.curpass);
	reason += validateNewpass(theForm.newpass);
	if(reason != "") 
	{
    	alert("Some fields need correction:\n" + reason);
 		return false;
	}
 	return true;
}

function validateName(fld)
{

    var error = "";
    if (fld.value == "") 
	{
   		fld.style.background = 'Yellow';
        error = "You didn't enter your name.\n";
    }
	//else if (illegalChars.test(fld.value)) 
	//{
      //  fld.style.background = 'Yellow';
       // error = "The username contains illegal characters.\n";
	//}
	else 
	{
        fld.style.background = 'White';
    }
    return error;
}

function validateCurpass(fld) {
	   var error = "";
    if (fld.value == "") {
   		fld.style.background = 'Yellow';
        error = "You didn't enter your current password.\n";
    } 
	else {
        fld.style.background = 'White';
    }
    return error;
}

function validateNewpass(fld) {
	   var error = "";
    if (fld.value == "") {
   		fld.style.background = 'Yellow';
        error = "You didn't enter your new password.\n";
    } 
	else if ((fld.value.length < 5) ) {
        fld.style.background = 'Yellow';
        error = "The password must be min 5 character long.\n";
    }

	else {
        fld.style.background = 'White';
    }
    return error;
}