<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="validcontact.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SaiSuraj-Reach us</title>
<style type="text/css">
<!--
body {
	background-image: url(img/divider.gif);
	font-family: "Times New Roman", Times, serif;
}
body,td,th {
	font-size: 36px;
}
.style3 {
	font-size: 14px;
	color: #CCCCCC;
}
.style7 {
	color: #FF0000;
	font-weight: bold;
	font-size: 36px;
}
.style13 {font-size: x-large}
.style14 {font-size: large}
.style13 {font-size: x-large; font-weight: bold; }
.style15 {font-size: 18px}
.style1 {color: #FFFFFF}
.style12 {color: #FFFFFF; font-size: large; }
.style21 {font-size: xx-large; color: #333333; }
.style35 {font-size: 36px;
	color: #FFFF99;
}
.style34 {color: #FFFF99;
	font-size: 36px;
}
.style36 {color: #800000}
-->
</style>
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
  

<?php
	  require('connect.php');
if(isset($_POST['submit']))
{
require("connect.php");
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$message=$_POST["message"];

$sql="INSERT INTO contact VALUES('', '$name','$email','$phone','$message')";

$result=mysql_query($sql) or die(mysql_error());
if($result)
{

echo "<script type=\"text/javascript\">
alert(\"message sent\");
</script>";
}
else
header("Location:contact.php");

}
?>
</head>

<body>
<blockquote>
  <p align="center"><span class="style7"><span class="style3"><img src="images/logo4.png" alt="" width="60" height="50" /><span class="style34">HOTEL <strong> SAI SURAJ </strong></span> <span class="style35"> INTERNATIONAL</span></span></span></p>
  <table width="937" align="center" cellspacing="3" background="img/aa.png">
    <tr>
      <th width="927" colspan="5" scope="row"><img src="images/room2.jpg" alt="" width="900" height="258" border="10" style="border:thick; border-color:#000000" /></th>
    </tr>
    <tr>
      <th height="56" colspan="5" scope="row"><a href="index.html"><img src="img/home3.png" alt="" width="150" height="50"/></a><a href="aboutus.html"><img src="img/aboutus3.png" alt="" width="150" height="50" onclick="aboutus.html" /></a><a href="login.php"><img src="img/bk3.png" alt="" width="150" height="50" /></a><a href="tourplace.html"><img src="img/tplc3.png" alt="" width="150" height="50" /></a><a href="lmap.html"><img src="img/lmp3.png" alt="" width="150" height="50" /></a><a href="contact.php"><img src="img/enq.png" alt="" width="150" height="50" /></a></th>
    </tr>
    <tr>
      <th height="131" colspan="5" scope="row"><marquee direction="left" behavior='alternate' onmouseover="this.stop()" onmouseout="this.start()" loop="-1" truespeed="truespeed">
        <img src="images/dine_3.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine.jpg" width="140" height="90" />&nbsp;<img src="images/lobby.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine_3.jpg" width="140" height="90" />&nbsp;<img src="images/lounge.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/suite_1.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine_2.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/hall.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/restaurant.jpg" alt="" width="140" height="90" />
      </marquee></th>
    </tr>
    <tr>
      <th height="131" colspan="5" scope="row"><table width="658" height="657" align="center" bgcolor="#003300">
          <form action="" method="post" name="f" onsubmit="return validateEnquiry(this);">
            <tr bgcolor="#990000">
              <th colspan="2" scope="row"> <span class="style1">Enquiry</span></th>
            </tr>
            <tr>
              <th width="159" scope="row"><div align="left"><span class="style12">Your Name :</span></div></th>
              <td width="197"><label>
                  <div align="left">
                    <input name="name" type="text" size="30" maxlength="20" onblur="checkname()"/>
                  </div>
                </label>
              </td>
            </tr>
            <tr>
              <th scope="row"><div align="left"><span class="style12">Your E-mail :</span></div></th>
              <td><label>
                  <div align="left">
                    <input name="email" id="email" type="text" size="30" onblur="checkemail()" />
                  </div>
                </label></td>
            </tr>
            <tr>
              <th scope="row"><div align="left"><span class="style12">Your Contact No.</span></div></th>
              <td><label>
                  <div align="left">
                    <input name="phone" type="text" size="30" maxlength="12" onkeypress="return isNumberKey(event)"/>
                  </div>
                </label></td>
            </tr>
            <tr>
              <th scope="row"><div align="left"><span class="style12">Your message :</span></div></th>
              <td><label>
                  <div align="left">
                    <textarea name="message" cols="30" onblur="checkmessage()"></textarea>
                  </div>
                </label></td>
            </tr>
            <tr>
              <th scope="row"><span class="style14">
                <label></label>
                <input type="reset" name="reset" value="Reset" style="background-color:#ffff99; border-left-style:double; font-size:18px;color:#400000; border:groove"/>
              </span></th>
              <td><label>
                <input type="submit" name="submit" value="Submit" style="background-color:#ffff99; border-left-style:double; font-size:18px;color:#400000; border:groove" />
              </label></td>
            </tr>
          </form>
        <tr>
            <th colspan="2" scope="row"><p align="center" class="style21 style36">CONTACT US</p>
                <p align="center" class="style13 style1">SAI SURAJ INTERNATIONAL HOTELS PVT. LTD. </p>
              <p align="center" class="style13 style1">Subhashitha Nagara,Surathkal
                NH-66, </p>
              <p align="center" class="style13 style1">Mangalore-575014,</p>
              <p align="center" class="style13 style1"> Phone: 0824-2478531/ 32/ 33</p></th>
        </tr>
      </table></th>
    </tr>
  </table>
 
</blockquote>
<div align="center"><span class="style15"><a href="index.html"><font color="#FF0000">Home</font></a>&nbsp;&nbsp; &nbsp;| &nbsp; &nbsp;&nbsp;<a href="aboutus.html"><font color="#FF0000">About us</font></a>&nbsp;&nbsp; &nbsp;| &nbsp;&nbsp;&nbsp; <a href="login.php"><font color="#FF0000">Booking</font></a>&nbsp;&nbsp;&nbsp; | &nbsp; &nbsp;&nbsp;<a href="tourplace.html"><font color="#FF0000">Tourism places</font></a>&nbsp; &nbsp;&nbsp;| &nbsp;&nbsp; &nbsp;<a href="lmap.html"><font color="#FF0000">Location map</font></a>&nbsp;&nbsp; &nbsp;| &nbsp; &nbsp;&nbsp;<a href="contact.php"><font color="#FF0000">Enquiry</font></a>&nbsp;&nbsp; |</span> </div>
<p></p>
<p>&nbsp;</p>
</body>
</html>
