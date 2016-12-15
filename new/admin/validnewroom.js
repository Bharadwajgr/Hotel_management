function validateRoom(theForm) {
    var reason = "";
reason += validateRoomno(theForm.roomno);
	reason += validateRoomtype(theForm.type);
	reason += validateRoomoption(theForm.option);
if(reason != "") {
    	alert("Some fields need correction:\n" + reason);
 		return false;
	}
 	return true;
}

 function validateRoomno(fld) {
	   var error = "";
    if (fld.value == "") {
   		fld.style.background = 'Yellow';
        error = "You didn't enter the room no.\n";
    } 
	else {
        fld.style.background = 'White';
    }
    return error;
}

function validateRoomtype(fld) {
	  	var error = "";
		if(fld.value == 'default') {
			fld.style.background = 'Yellow';
        
        error = "Please select the type of room.\n";
		}
    return error;
}
 

function validateRoomoption(fld) {
	  	var error = "";
		if(fld.value == 'default') {
			fld.style.background = 'Yellow';
        
        error = "Please select the rooom option.\n";
		}
    return error;
}
 
function checkroomno()
{
	var error = "";
	theForm=document.forms['f'];
	var fld=theForm.roomno;
	
    if (fld.value == "") {
   		fld.style.background = 'Yellow';
        alert("You didn't enter the room no.\n");
    } 
	else {
        fld.style.background = 'White';
    }
}

function checktype()
{
	var error = "";
	theForm=document.forms['f'];
	var fld=theForm.type;

	if(fld.value == 'default') {
		fld.style.background = 'Yellow';
        alert("Please select the rooom type.\n");
	}
    else
		fld.style.background = 'White';
}

function checkroomoption()
{
	var error = "";
	theForm=document.forms['f'];
	var fld=theForm.option;

	if(fld.value == 'default') {
		fld.style.background = 'Yellow';
        alert("Please select the rooom option.\n");
	}
    else
		fld.style.background = 'White';
}