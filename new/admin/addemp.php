<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="javascript" src="cal2.js">
</script>
<script language="javascript" src="cal_conf2.js"></script>
<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>

<script type="text/javascript" src="validaddemp.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin-addemployee</title>
<style type="text/css">
body {
font-family: Verdana, Arial, Helvetica, sans-serif;
	background-image: url(images/aa.png);
	background-repeat: repeat;
}
.style5 {
	color: #000000;
	font-size: 36px;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-style: italic;
}
.style7 {color: #FFFFFF; font-family: Georgia, "Times New Roman", Times, serif; font-style: italic; }
.style8 {color: #000000}
.style9 {color: #000000; font-family: Georgia, "Times New Roman", Times, serif; font-style: italic; }
.style10 {
	color: #000000;
	font-size: 16px;
}
.style3 {font-size: 14px;
	color: #CCCCCC;
}
.style6 {font-size: 12px;
	color: #FFFF99;
}
.style11 {color: #FF0000;
	font-weight: bold;
	font-size: 36px;
}
.style17 {color: #FFFF99;
	font-size: 36px;
}
.style18 {font-size: 36px;
	color: #FFFF99;
}
</style>
</head>

<body>
<div align="center"><span class="style3"><img src="images/logo4.png" alt="" width="60" height="50" /><span class="style17">HOTEL <strong>SAI SURAJ</strong></span> <span class="style18"> INTERNATIONAL</span></span>
</div>
<table width="1029" height="783" align="center" background="images/divider.gif">
  <tr>
    <th width="938" height="188" scope="row"><marquee direction="left" behavior='alternate' onmouseover="this.stop()" onmouseout="this.start()" loop="-1" truespeed="truespeed">
      <img src="images/dine_3.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine.jpg" width="140" height="90" />&nbsp;<img src="images/lobby.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine_3.jpg" width="140" height="90" />&nbsp;<img src="images/lounge.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/suite_1.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine_2.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/hall.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/restaurant.jpg" alt="" width="140" height="90" />
    </marquee></th>
  </tr>
  <tr>
    <th height="52" scope="row"><div align="left"><a href="admincpanel.php"><img src="images/home1.png" alt="" width="100" height="50" /></a><a href="signout.php"><img src="images/signout1.png" alt="" width="100" height="50" /></a><a href="emp.php"><img src="images/back.png" alt="" width="100" height="50" /></a></div></th>
  </tr>
  <tr>
    <th height="217" scope="row"><?php
session_start();

    if ( $_SESSION['username'])
    {  
	$user=$_SESSION['username'];
	  require('connect.php');
			$ex0=mysql_query("SELECT * FROM adminlogin WHERE user='$user'") or die(mysql_error());
							$count=mysql_num_rows($ex0);
				if($count)
				{								 		 
			 echo "<br><center><strong>Welcome ".$_SESSION['username'].".<br> <br></strong></center>";


if(isset($_POST['submit']))
{
$name	=$_POST["name"];
$cat	=$_POST["cat"];
$dob	=$_POST["dob"];
$phone	=$_POST["phone"];
$email	=$_POST["email"];
$address=$_POST["address"];
$join	=$_POST["join"];
$exp	=$_POST["exp"];
//photo stuff
$photo	=$_FILES["photo"]["name"];
$path	="upload/".$photo;
move_uploaded_file($_FILES["photo"]["tmp_name"],$path);

$sql="INSERT INTO employee VALUES('', '$name','$dob','$cat','$phone','$email','$address','$join','$exp','$path')";

$result=mysql_query($sql) or die(mysql_error());
if($result)
{echo "<script type=\"text/javascript\">
alert(\"employee added is succesful\");
</script>";
header('Location:emp.php');
}

else
echo "<script type=\"text/javascript\">
alert(\"employee failed\");
</script>";
}}
   else
    {	
        header("Location:index.php");
    }
}
?>
      <table width="952" border="0" align="center" bgcolor="#FFFFFF">
        <tr>
          <th width="267" scope="row"><img src="images/9466864-chef.jpg" alt="" width="267" height="400" /></th>
          <td width="675"><div align="left">
              <p class="style5">ADD EMPLOYEE DETAILS</p>
          </div>
              <form action="" method="post" enctype="multipart/form-data" name="f" id="f" onsubmit="return validAdd(this);">
                <table width="672" height="431" align="center">
                  <tr>
                    <th width="255" scope="row"><div align="left" class="style7 style8">Emp Photo</div></th>
                  <td width="405"><label>
          <div align="left">
                        <input name="photo" type="file" id="photo" size="30"  onblur="checkphoto()"/>
                    </div>
                  </label></td>
                  </tr>
                  <tr>
                    <th scope="row"><div align="left" class="style9">Emp Name</div></th>
                    <td><label>
                      <div align="left">
                        <input name="name" type="text" id="name" size="30" onblur="checkname()"/>
                      </div>
                    </label></td>
                  </tr>
                  <tr>
                    <th scope="row"><div align="left"><span class="style9">Date of Birth (YYYY-MM-DD)</span></div></th>
                    <td><div align="left">
                      <input name="dob" type="text" id="dob" size="30" onblur="checkdob()" />
                    </div></td>
                  </tr>
                  <tr>
                    <th scope="row"><div align="left" class="style9">Category</div></th>
                    <td><label>
                      <div align="left">
                        <select name="cat" size="1" id="select" onblur="checkcat()">
                          <option value="manager">manager</option>
                          <option value="supervisor">supervisor</option>
                          <option value="vegchef">vegchef</option>
                          <option value="nonvegchef">nonvegchef</option>
                          <option value="cook">cook</option>
                          <option value="homekeeping">homekeeping</option>
                          <option value="waiter">waiter</option>
                          <option value="generalmanager">generalmanager</option>
                          <option value="security">security</option>
                          <option value="storekeeper">storekeeper</option>
                          <option value="receptionist">receptionist</option>
                          <option value="electrician">electrician</option>
                          <option value="accountant">accountant</option>
                          <option value="default" disabled="disabled" selected="selected">choose</option>
                        </select>
                      </div>
                    </label></td>
                  </tr>
                  <tr>
                    <th scope="row"><div align="left" class="style9">Phone</div></th>
                    <td><label>
                      <div align="left">
                        <input name="phone" type="text" id="phone" size="30" maxlength="12" onblur="checkphone()" onkeypress="return isNumberKey(event)" />
                      </div>
                    </label></td>
                  </tr>
                  <tr>
                    <th scope="row"><div align="left" class="style9">Email</div></th>
                    <td><label>
                      <div align="left">
                        <input name="email" type="text" id="email" size="30" onblur="checkemail()" />
                      </div>
                    </label></td>
                  </tr>
                  <tr>
                    <th scope="row"><div align="left" class="style9">Address</div></th>
                    <td><label>
                      <div align="left">
                        <textarea name="address" cols="23" onblur="checkadd()" id="address"></textarea>
                      </div>
                    </label></td>
                  </tr>
                  <tr>
                    <th scope="row"><div align="left" class="style9">Joining Date</div></th>
                    <td><label>
                      <div align="left">
                        <input name="join" type="text" id="join" size="30" onblur="checkjoindate()"/>
                        <a href="javascript:showCal('Calendar1')" class="style10">Select Date</a> </div>
                    </label></td>
                  </tr>
                  <tr>
                    <th scope="row"><div align="left" class="style9">Experience</div></th>
                    <td><label>
                      <div align="left">
                        <input name="exp" type="text" id="exp" size="30" onblur="checkexp()"/>
                      </div>
                    </label></td>
                  </tr>
                  <tr>
                    <th scope="row"> <span class="style8">
                      <label></label>
                    </span> <input type="reset" name="reset" id="reset" style=" border:double; border-color:#990033" value="Reset" /></th>
                    <td>
                      <div align="left">
                        <input type="submit" name="submit" id="button" style=" border:double; border-color:#990033" value="Submit" />
                    </div></td>
                  </tr>
                </table>
            </form></td>
        </tr>
      </table></th>
  </tr>
</table>
</body>
</html>
