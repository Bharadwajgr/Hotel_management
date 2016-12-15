// JavaScript Document
function validEditing(theForm)
{ 
	var reason="";
	reason += validateName(theForm.name);
	reason += validateCategory(theForm.category);
	reason += validatePhone(theForm.phone);
	reason += validateEmail(theForm.email);
	reason += validateAddress(theForm.address);
	reason += validateJoin(theForm.join);
	
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
	fld.style.background = 'Yellow';
	
    if (fld.value == "") 
        error = "You didn't enter your name.\n";
	else 
        fld.style.background = 'White';

	return error;
}

function validateCategory(fld) {
	var error = "";
	fld.style.background = 'Yellow';
	
    if (fld.value == "")
        error += "You didn't enter your category.\n";
	else
        fld.style.background = 'White';

	return error;
}


function validateAddress(fld) {
	var error = "";
	fld.style.background = 'Yellow';
	
    if (fld.value == "")
        error += "You didn't enter employee's address.\n";
	else
        fld.style.background = 'White';

	return error;
}


function validateJoin(fld) {
	var error = "";
    var Date1 = new Date(fld.value);
	var today = new Date();
	fld.style.background = 'Yellow';

	if (fld.value == "") 
        error += "You didn't enter your joining date.\n";
	else if(!/\d{4}\-\d{2}\-\d{2}/.test(fld.value))
		error += "Enter the date in proper format.\nProper format is:yyyy-mm-dd.";
	else if(Date1 > today)
		error += "Joining date is greater than today's date.\n";
	else 
        fld.style.background = 'White';
	return error;
}

function trim(s)
{
   	return s.replace(/^\s+|\s+$/, '');
}

 
function validateEmail(fld) {
    var error="";
    var tfld = trim(fld.value);                        // value of field with whitespace trimmed off
    var emailFilter = /^[^@]+@[^@.]+\.[^@]*\w\w$/ ;
    var illegalChars= /[\(\)\<\>\,\;\:\\\"\[\]]/ ;
	fld.style.background = 'Yellow';
	
    if (fld.value == "")
        error += "You didn't enter an email address.\n";
	else if (!emailFilter.test(tfld))
		error += "Please enter a valid email address.\n";
	else if (fld.value.match(illegalChars))
        error += "The email address contains illegal characters.\n";
	else
        fld.style.background = 'White';

	return error;
}

function validatePhone(fld) {
    var error = "";
    var stripped = fld.value;
	fld.style.background = 'Yellow';

   	if (fld.value == "")
        error += "You didn't enter a phone number.\n";
	else if (isNaN(parseInt(stripped)))
        error += "The phone number contains illegal characters.\n";
	else if (!(stripped.length == 10))
        error += "The phone number is the wrong length.Must be 10 digits. \n";
	else
        fld.style.background = 'White';

	return error;
}

function checkcat(fld) {
	var error = "";
	theForm=document.forms['f'];
	var fld=theForm.cat;

	if (fld.value == 'default') {
   		fld.style.background = 'Yellow';
        alert("You didn't enter your category.\n");
    } 
	else {
        fld.style.background = 'White';
    }
}

function checkphone()
{
	var error = "";
	theForm=document.forms['f'];
	var fld=theForm.phone;

    var stripped = fld.value;

   	if (fld.value == "") 
	{
        error = "You didn't enter a phone number.\n";
        fld.style.background = 'Yellow';
    } 
	else if (isNaN(parseInt(stripped))) 
	{
        error = "The phone number contains illegal characters.\n";
        fld.style.background = 'Yellow';
    } 
	else if (!(stripped.length == 10)) 
	{
        error = "The phone number is the wrong length.Must be 10 digits. \n";
        fld.style.background = 'Yellow';
    }
	if(error!="")
	{
		alert(error);
	}
	else
	{
		fld.style.background = 'White';
	}
}

function checkemail()
{
	var error="";
	theForm=document.forms['f'];
	var fld=theForm.email;

    var tfld = trim(fld.value);                        // value of field with whitespace trimmed off
    var emailFilter = /^[^@]+@[^@.]+\.[^@]*\w\w$/ ;
    var illegalChars= /[\(\)\<\>\,\;\:\\\"\[\]]/ ;

    if (fld.value == "") {
        fld.style.background = 'Yellow';
        error = "You didn't enter an email address.\n";
    } 
	else if (!emailFilter.test(tfld)) {              //test email for illegal characters
        fld.style.background = 'Yellow';
        error = "Please enter a valid email address.\n";
    } 
	else if (fld.value.match(illegalChars)) {
        fld.style.background = 'Yellow';
        error = "The email address contains illegal characters.\n";
    }
	if(error!="")
	{
		alert(error);
	}
	else 
	{
        fld.style.background = 'White';
    }
}

function checkadd() {
	var error = "";
	theForm=document.forms['f'];
	var fld=theForm.address;

	if (fld.value == "") {
   		fld.style.background = 'Yellow';
        alert("You didn't enter your address.\n");
    } 
	else {
        fld.style.background = 'White';
    }
}

function checkjoindate()
{
	var error = "";
	theForm=document.forms['f'];
	var fld=theForm.join;
	var Date1 = new Date(fld.value);
	var today = new Date();
	fld.style.background = 'Yellow';

	if (fld.value == "") 
        alert("You didn't enter your joining date.\n");
	else if(!/\d{4}\-\d{2}\-\d{2}/.test(fld.value))
		alert("Enter the date in proper format.\nProper format is:yyyy-mm-dd.");
	else if(Date1 > today)
		alert("Joining date is greater than today's date.\n");
	else 
        fld.style.background = 'White';
}

function checkname() {
	var error = "";
	theForm=document.forms['f'];
	var fld=theForm.name;

	if (fld.value == "") {
   		fld.style.background = 'Yellow';
        alert("You didn't enter your name.\n");
    } 
	else {
        fld.style.background = 'White';
    }
}