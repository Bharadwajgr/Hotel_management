<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="formvalidation.js"></script>
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
   <script type="text/javascript">
<!--
	var letters=' ABCÇDEFGHIJKLMNÑOPQRSTUVWXYZabcçdefghijklmnñopqrstuvwxyzàáÀÁéèÈÉíìÍÌïÏóòÓÒúùÚÙüÜ'
	var numbers='1234567890'
	var signs=',.:;@-\''
	var mathsigns='+-=()*/'
	var custom='<>#$%&?¿'

	function alpha(e,allow) 
	{
		var k;
		k=document.all?parseInt(e.keyCode): parseInt(e.which);
		return (allow.indexOf(String.fromCharCode(k))!=-1);
	}

// -->
</script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
.style1 {color: #FFFFFF}
.style2 {
	color: #FFFFFF;
	font-size: 18px;
	font-style: italic;
	font-weight: bold;
}
.style3 {color: #33CC99}
body {
	background-image: url(img/divider.gif);
}
.style7 {	font-size: 14px;
	color: #CCCCCC;
}
.style7 {	color: #FF0000;
	font-weight: bold;
	font-size: 36px;
}
.style8 {
	font-size: 18px;
	font-weight: bold;
}
.style29 {
	font-size: 24px
}
.style31 {color: #FFFFFF; font-size: 18px; font-weight: bold; }
.style18 {font-size: 36px;
	color: #FFFF99;
}
.style34 {color: #FFFF99;
	font-size: 36px;
}
</style>
<?php
error_reporting(0);
if(isset($_POST['submit']))
{
	  require('connect.php');

$fname=$_POST["fname"];
$username=$_POST["username"];
$password=$_POST["password"];
$gender=$_POST["sex"];
$city=$_POST["city"];
$state=$_POST["state"];
$country=$_POST["country"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$secquestion=$_POST["secquestion"];
$secanswer=$_POST["secanswer"];

       $extract1=mysql_query("SELECT * FROM registration WHERE user='$username' ");
        $count=mysql_num_rows($extract1);

        if($count == 0)
        {

$sql="INSERT INTO registration VALUES('', '$fname','$username','$password','$gender','$city','$state','$country','$phone','$email','$secquestion','$secanswer')";

$result=mysql_query($sql) or die(mysql_error());
if($result)
{
			echo "Registration done";
			header('Location:login.php');
}
else
	{		echo "<script type=\"text/javascript\">
alert(\"Registration failed\");
</script>";
}}
else
{
	 echo "<center><font face='Arial' size='6' color='white'>We cannot create the account from this username.<br>So please create the account with different name.</font></center>";
}} ?>
</head>

<body>
  <blockquote>
    <p align="center"><span class="style7"><img src="images/logo4.png" alt="" width="60" height="50" /><span class="style34">HOTEL <strong> SAI SURAJ </strong></span> <span class="style18"> INTERNATIONAL</span></span></p>
</blockquote>
<table width="937" border="0" align="center" background="img/aa.png">
  <tr>
    <th height="95" colspan="2" scope="row"><img src="images/room2.jpg" alt="" width="900" height="258" border="10" style="border:thick; border-color:#000000" /></th>
  </tr>
  <tr>
    <th colspan="2" scope="row"><a href="index.html"><img src="img/home3.png" alt="" width="150" height="50"/></a><a href="aboutus.html"><img src="img/aboutus3.png" alt="" width="150" height="50" onclick="aboutus.html" /></a><a href="login.php"><img src="img/bk3.png" alt="" width="150" height="50" /></a><a href="tourplace.html"><img src="img/tplc3.png" alt="" width="150" height="50" /></a><a href="lmap.html"><img src="img/lmp3.png" alt="" width="150" height="50" /></a><a href="contact.php"><img src="img/enq.png" alt="" width="150" height="50" /></a></th>
  </tr>
  
  <tr>
    <th width="275" height="477" scope="row"><a href="facilities.html"><img src="images/facilities.jpg" width="226" height="161" /></a><br /><br /><a href="lmap.html"><img src="images/location.jpg" alt="" width="226" height="73" /></a><br /><br /><a href="tariff.php"><img src="images/tariff.jpg" alt="" width="226" height="72" /></a>  </th>
    <td width="652">
    <form action="" method="post" name="f" onsubmit="return validateFormOnSubmit(this);">
    <table width="492" height="559" border="0" align="left" cellpadding="5" cellspacing="5" background="img/bg1.jpg">
      <tr bgcolor="#003300">
        <td colspan="2"><div align="center" class="style2 style29">Sai Suraj Registration </div></td>
      </tr>
      <tr>

        <td width="160" height="32"><span class="style31">Name:</span></td>
        <td width="297" colspan="2"><input name="fname" type="text" size="30" value="<?php echo $_POST['fname'];?>" onblur="checkfname()" onkeypress="return alpha(event,letters)"/>        </td>
        </tr>
      <tr>
        <td height="32"><span class="style31">User Name:</span></td>
        <td colspan="2"><input name="username" type="text" size="30" onblur="checkuname()"/>        </td>
        </tr>
      <tr>
        <td height="32"><span class="style31">Password:</span></td>
        <td colspan="2"><input name="password" type="password" size="30" value="<?php echo $_POST['password'];?>" onblur="checkpass()" />        </td>
        </tr>
      <tr>
        <td height="32"><span class="style31">Confirm Password:</span></td>
        <td colspan="2"><input name="confirmpass" type="password" size="30" value="<?php echo $_POST['confirmpass'];?>" onblur="checkconfpass()"/>        </td>
        </tr>
      <tr>
        <td height="32"><span class="style31">Gender:</span></td>
        <td colspan="2"><span class="style1">
          <input type="radio" name="sex" value="Male" />
          Male</span><span class="style3">
          <input type="radio" name="sex" value="Female" />
          <span class="style1">Female</span></span></td>
        </tr>
      <tr>
        <td height="32"><span class="style31">City:</span></td>
        <td colspan="2"><input name="city" type="text" size="30" value="<?php echo $_POST['city'];?>" onblur="checkcity()"/>        </td>
        </tr>
      <tr>
        <td height="32"><span class="style31">State:</span></td>
        <td colspan="2"><input name="state" type="text" size="30" value="<?php echo $_POST['state'];?>" onblur="checkstate()"/>        </td>
        </tr>
      <tr>
        <td height="32"><span class="style31">Country:</span></td>
        <td colspan="2"><input name="country" type="text" size="30" value="<?php echo $_POST['country'];?>" onblur="checkcountry()"/>        </td>
        </tr>
      <tr>
        <td height="32"><span class="style31">Phone Number:</span></td>
        <td colspan="2"><input name="phone" type="text" size="30" maxlength="12" value="<?php echo $_POST['phone'];?>" onkeypress="return isNumberKey(event)"/>        </td>
        </tr>
      <tr>
        <td height="32"><span class="style31">E-mail ID:</span></td>
        <td colspan="2"><input name="email" type="text" size="30" value="<?php echo $_POST['email'];?>"onblur="checkemail()"/></td>
        </tr>
      <tr>
        <td><span class="style31">Security question:</span></td>
        <td height="32" colspan="2"><select  size="1" name="secquestion" onblur="securityques()" >
            <option value="Which is your favourite dessert?">Which is your favourite dessert?</option>
            <option value="Which is your favourite juice?">Which is your favourite juice?</option>
            <option value="which is your favourite dish?"> which is your favourite dish?</option>
            <option value="where did you celebrate your last birthday?">where did you celebrate your last birthday?</option>
            <option value="which is your favourite hotel?">which is your favourite hotel?</option>
            <option selected="selected" disabled="disabled" value='default'>choose a question?</option>
          </select>        </td>
        </tr>
      <tr>
        <td><span class="style31">Answer:</span></td>
        <td height="32" colspan="2"><input name="secanswer" type="text" size="30" maxlength="30" id="ans"value="<?php echo $_POST['secanswer'];?>"  onblur="checksecqstn()"/>        </td>
        </tr>
      <tr>
        <td height="48"><span class="style1"></span></td>
        <td colspan="2"> <input type="submit" value="Submit" name="submit" style="background-color:#ffff99; color:#400000; border:groove; font-style:inherit; font-size:18px"/></td>
        </tr>
    </table>
    </form></td>
  </tr>
  <tr>
    <th height="21" colspan="2" scope="row">&nbsp;</th>
  </tr>
</table>
<div align="center" class="style8"><a href="index.html"><font color="#FF0000">Home</font></a>&nbsp;&nbsp; &nbsp;| &nbsp; &nbsp;&nbsp;<a href="aboutus.html"><font color="#FF0000">About us</font></a>&nbsp;&nbsp; &nbsp;| &nbsp;&nbsp;&nbsp; <a href="login.php"><font color="#FF0000">Booking</font></a>&nbsp;&nbsp; | &nbsp; &nbsp;&nbsp;<a href="tourplace.html"><font color="#FF0000">Tourism places</font></a>&nbsp; &nbsp;&nbsp;| &nbsp;&nbsp; &nbsp;<a href="lmap.html"><font color="#FF0000">Location map</font></a>&nbsp;&nbsp; &nbsp;| &nbsp; &nbsp;&nbsp;<a href="contact.php"><font color="#FF0000">Enquiry</font></a></div>
</body>
</html>
