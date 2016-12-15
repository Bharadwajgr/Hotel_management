// JavaScript Document
function validAttdate(theForm)
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

function validateDate(fld)
{

    var error = "";
    if (fld.value == "") 
	{
   		fld.style.background = 'Yellow';
        error = "You didn't enter the date.\n";
    }
	else 
	{
        fld.style.background = 'White';
    }
    return error;
}

function checkdate()
{
	var error = "";
	theForm=document.forms['f'];
	var fld=theForm.date;

	if (fld.value == "") 
	{
   		fld.style.background = 'Yellow';
        alert("You didn't enter the date.\n");
    } 
	else 
	{
        fld.style.background = 'White';
    }
}

