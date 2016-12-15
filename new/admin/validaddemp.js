// JavaScript Document
function validAdd(theForm)
{ 
	var reason="";
	reason += validateName(theForm.name);
	reason += validatePhoto(theForm.photo);
	reason += validateCat(theForm.cat);
	reason += validateDob(theForm.dob);
	reason += validatePhone(theForm.phone);
	reason += validateEmail(theForm.email);
	reason += validateAddress(theForm.address);
	reason += datecheck(theForm.join);
	reason += validateExp(theForm.exp);

	if(reason != "") 
	{
    	alert("Some fields need correction:\n" + reason);
 		return false;
	}
 	return true;
}

function validateDob(dob)
{
	var error = "";

	if (dob.value == "") 
	{
   		dob.style.background = 'Yellow';
        error += "You didn't enter date of birth.\n";
    } 
		
	var Date1 = new Date(dob.value);
	var today = new Date();
	if(Date1 > today)
	{
		error += "Date of Birth is greater than today's date.\n";
	}
	
	var age=cal_age();
	if(age!=0)
	{
		if( age<18 || age>65 )
		{
			error += "Sorry, employee's age should be within 18-65.\n";
			dob.style.background = 'Yellow';
		}
		else
		{
			dob.style.background = 'White';
		}
	}
	else
	{
		error += "Please Enter proper date of birth.\nNote that employee's age should be within 18-65.\n";
		dob.style.background = 'Yellow';
	}
 	return error;
}



function datecheck(joind)
{
	var error = "";
	var Date1 = new Date(joind.value);
	var today = new Date();

	if (joind.value == "") 
	{
   		joind.style.background = 'Yellow';
        error += "You didn't enter join date.\n";
    } 
	else if(Date1 > today)
	{
   		joind.style.background = 'Yellow';
		error += "Joining date is greater than today's date.\n";
	}
	else
   		joind.style.background = 'White';

 	return error;
}

function validateName(fld)
{

    var error = "";
    if (fld.value == "") 
	{
   		fld.style.background = 'Yellow';
        error = "You didn't enter your name.\n";
    }
	else 
	{
        fld.style.background = 'White';
    }
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
	else {
        fld.style.background = 'White';
    }
    return error;
}

//Phone nnmber check
function validatePhone(fld) {
    var error = "";
    var stripped = fld.value;

   if (fld.value == "") {
        error = "You didn't enter a phone number.\n";
        fld.style.background = 'Yellow';
    } 
	else if (isNaN(parseInt(stripped))) {
        error = "The phone number contains illegal characters.\n";
        fld.style.background = 'Yellow';
    } 
	else if (!(stripped.length == 10)) {
        error = "The phone number is the wrong length.Must be 10 digits. \n";
        fld.style.background = 'Yellow';
    }
    return error;
}

function validateAddress(fld) {
	   var error = "";
    if (fld.value == "") {
   		fld.style.background = 'Yellow';
        error = "You didn't enter your address.\n";
    } 
	else {
        fld.style.background = 'White';
    }
    return error;
}

function validatePhoto(fld) {
	   var error = "";
    if (fld.value == "") {
   		fld.style.background = 'Yellow';
        error = "You didn't enter your photo.\n";
    } 
	else {
        fld.style.background = 'White';
    }
    return error;
}

function validateCat(fld) {
	   var error = "";
    if (fld.value == 'default') {
   		fld.style.background = 'Yellow';
        error = "You didn't enter your category.\n";
    } 
	else {
        fld.style.background = 'White';
    }
    return error;
}

function validateExp(fld) {
	   var error = "";
    if (fld.value == "") {
   		fld.style.background = 'Yellow';
        error = "You didn't enter your experience.\n";
    } 
	else if (fld.value > 10)
	{
		fld.style.background = 'Yellow';
        error = " experience should be less than 10.\n";
    } 
	else {
        fld.style.background = 'White';
    }
    return error;
}
function checkphoto()
{
	var error = "";
	theForm=document.forms['f'];
	var fld=theForm.photo;
	
    if(fld.value == "") {
   		fld.style.background = 'Yellow';
        alert("You didn't enter your photo.\n");
    } 
	else {
        fld.style.background = 'White';
    }
}

function checkname()
{
	var error="";
	theForm=document.forms['f'];
	var name=theForm.name;
	
	if(name.value=="")
	{
		alert("You didnt enter the employee name.\n");
		name.style.background = 'Yellow';
	}
	else
	{
		name.style.background = 'White';
	}
}

function checkdob()
{
	var error="";
	theForm=document.forms['f'];
	var fld=theForm.dob;
	var bd=/^[1-2]{1}[0-9]{3}-[0-1]{1}[0-9]{1}-[0-3]{1}[0-9]{1}$/;
	var age=cal_age();
	
	if(fld.value=="")
	{
		alert("You didnt enter the date of birth.");
		fld.style.background = 'Yellow';
	}
	else if(fld.value.search(bd)==-1)
	{
		alert("Please Enter proper date of birth.\nProper format is yyyy-mm-dd.");
		fld.style.background = 'Yellow';
	}
	else if(age!=0)
	{
		if( age<18 || age>65 )
		{
			alert("Sorry, employee's age should be within 18-65.");
			fld.style.background = 'Yellow';
		}
		else
		{
			alert("Your age is:"+age);
			fld.style.background = 'White';
		}
	}
	else
	{
		alert("Please Enter proper date of birth.\nProper format is yyyy-mm-dd.");
		fld.style.background = 'Yellow';
	}
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

function checkjoindate()
{
	var error = "";
	theForm=document.forms['f'];
	var fld=theForm.join;
	
    if (fld.value == "") 
	{
   		fld.style.background = 'Yellow';
        alert("You didn't enter your joining date.\n");
    } 
	else 
	{
        fld.style.background = 'White';
    }
}

function checkexp()
{
	var error = "";
	theForm=document.forms['f'];
	var fld=theForm.exp;

	if (fld.value == "") {
   		fld.style.background = 'Yellow';
        alert("You didn't enter your experience.\n");
    } 
	else {
        fld.style.background = 'White';
    }
}

function cal_age()
{
	var today = new Date();
	var d = document.getElementById("dob").value;
	
	if (!/\d{4}\-\d{2}\-\d{2}/.test(d))
		return 0;

	d = d.split("-");
	var byr = parseInt(d[0]);
	var nowyear = today.getFullYear();
	
	if (byr >= nowyear || byr < 1900) 
		return 0;
	
	var bmth = parseInt(d[1],10)-1; // radix 10!
	if (bmth <0 || bmth >11)
		return 0;

	var bdy = parseInt(d[2],10); // radix 10!
	var dim = daysInMonth(bmth+1,byr);
	// check valid date according to month
	if (bdy <1 || bdy > dim)
		return 0;

	var age = nowyear - byr;
	return age;
}

function daysInMonth(month,year) 
{ 
	// months are 1-12
	var dd = new Date(year, month, 0);
	return dd.getDate();
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
