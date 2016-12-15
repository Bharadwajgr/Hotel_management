<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="validlogin.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SaiSuraj-View Booking</title>
<style type="text/css">
body {
	background-image: url(img/divider.gif);
}
.style20 {font-size: 14px;
	color: #CCCCCC;
}
.style34 {color: #FFFF99;
	font-size: 36px;
}
.style36 {
	font-size: 24px;
	font-weight: bold;
}
.style37 {font-size: 16px}
.style38 {font-size: 16}
.style39 {font-size: 18px}
</style>
</head>

<body>
<div align="center"><span class="style20"><img src="images/logo4.png" alt="" width="60" height="50" /><span class="style34">HOTEL <strong>SAI SURAJ</strong></span> <span class="style34"> INTERNATIONAL</span></span></div>
<table width="917" border="0" align="center" background="img/aa.png" bgcolor="#333333">
  <tr>
    <th height="302" colspan="4" scope="row"><img src="images/room2.jpg" alt="" width="900" height="300" /></th>
  </tr>
  <tr>
    <th height="56" colspan="4" scope="row"><a href="index.html"><img src="img/home3.png" alt="" width="175" height="50"/></a><a href="aboutus.html"><img src="img/aboutus3.png" alt="" width="175" height="50" onclick="aboutus.html" /></a><a href="login.php"><img src="img/bk3.png" alt="" width="175" height="50" /></a><a href="tourplace.html"><img src="img/tplc3.png" alt="" width="180" height="50" /></a><a href="lmap.html"><img src="img/lmp3.png" alt="" width="175" height="50" /></a></th>
  </tr>
  <tr>
    <th height="60" colspan="4" scope="row"><marquee direction="left" behavior='alternate' onmouseover="this.stop()" onmouseout="this.start()" loop="-1" truespeed="truespeed"><img src="images/dine_3.jpg" alt="" width="162" height="119" />&nbsp;&nbsp;<img src="images/dine.jpg" width="162" height="119" />&nbsp;&nbsp;<img src="images/lobby.jpg" alt="" width="162" height="119" />&nbsp;&nbsp;<img src="images/dine_3.jpg" width="162" height="119" />&nbsp;&nbsp;<img src="images/lounge.jpg" alt="" width="162" height="119" />&nbsp;&nbsp;<img src="images/suite_1.jpg" alt="" width="162" height="119" />&nbsp;&nbsp;<img src="images/dine_2.jpg" alt="" width="162" height="119" /> &nbsp;&nbsp; <img src="images/hall.jpg" alt="" width="162" height="119" /> &nbsp;&nbsp;<img src="images/restaurant.jpg" alt="" width="162" height="119" />
    </marquee>&nbsp;</th>
  </tr>
  <tr>
    <th width="204" height="356" scope="row"><a href="facilities.html"><img src="images/facilities.jpg" alt="" width="200" height="161" /></a><br />
    <br /><a href="tariff.php"><img src="images/tariff.jpg" width="200" height="72" /></a><br />
    <br /> <a href="lmap.html"><img src="images/location.jpg" width="200" height="73" /></a></th>
    <td width="703"><form action="" method="post" name="f" onsubmit="return validateLogin(this);">
      <table width="645" height="60">
        <tr>
          <th width="123" scope="row"><a href="changepass.php"><img src="img/changepassword.png" width="110" height="50" /></a></th>
            <td width="104"><a href="changeprofile.php"><img src="img/changeprofile5.png" width="110" height="50" /></a></td>
            <td width="104"><a href="viewprofile.php"><img src="img/viewprofile5.png" width="110" height="50" /></a></td>
            <td width="92"><a href="viewbook.php"><img src="img/viewbooking51.png" alt="" width="110" height="50" /></a></td>
            <td width="104"><a href="res.php"><img src="img/reservation5.png" width="110" height="50" /></a></td>
            <td width="104"><a href="signout.php"><img src="img/logout5.png" width="100" height="50" /></a></td>
          </tr>
        </table>
        
      <?php
	  session_start();

    if ( $_SESSION['username'])
    {  
	 $username=$_SESSION['username'];
	  require('connect.php');
			$ex0=mysql_query("SELECT * FROM registration WHERE user='$username'") or die(mysql_error());
							$count=mysql_num_rows($ex0);
				if($count)
				{			    
    			 echo "<br><center><strong>Welcome ".$_SESSION['username'].".<br /></center></strong>";			 
			 	$ex=mysql_query("SELECT * FROM registration WHERE user='$username'") or die(mysql_error());
	       	$count=mysql_num_rows($ex);
				if($count)
				{
						 echo "<table align='center' border=1 bgcolor='maroon'  style='color:white' cellspacing='0'>";
					while($row=mysql_fetch_assoc($ex)){
					$first			=$row['first_name'];
					$gender			=$row['gender'];
					$city			=$row['city'];
					$state			=$row['state'];
					$country		=$row['country'];
					$secq			=$row['security_question'];
					$seca			=$row['answer'];
					$phone			=$row['phone'];
					$email			=$row['email'];
					echo "<tr><td><lable>Name</lable></td><td>$first</td></tr>
					<tr><td><lable>Gender</lable></td><td>$gender</td></tr>
					<tr><td><lable>City</lable></td><td>$city</td></tr>
					<tr><td><lable>State</lable></td><td>$state</td></tr>
					<tr><td><lable>Country</lable></td><td>$country</td></tr>
					<tr><td><lable>Phone No.</lable></td><td>$phone</td></tr>
			<tr><td><lable>Email</lable></td><td>$email</td></tr>
			<tr><td><lable>Security Question</lable></td><td>$secq</td></tr>
			<tr><td><lable>Security Answer</lable></td><td>$seca</td></tr>";
			}
			echo "</table>";
			}
			} 
	 else
    {	
        header("Location:login.php");
    }
	}
	?></form></td>
  </tr></table>
<p align="center"><span class="style36"><span class="style37"><span class="style38"><span class="style39"><a href="index.html"><font color="#FF0000">Home</font></a>&nbsp;&nbsp; &nbsp;| &nbsp; &nbsp;&nbsp;<a href="aboutus.html"><font color="#FF0000">About us</font></a>&nbsp;&nbsp; &nbsp;| &nbsp;&nbsp;&nbsp; <a href="login.php"><font color="#FF0000">Booking</font></a>&nbsp;&nbsp; | &nbsp; &nbsp;&nbsp;<a href="tourplace.html"><font color="#FF0000">Tourism places</font></a>&nbsp; &nbsp;&nbsp;| &nbsp;&nbsp; &nbsp;<a href="lmap.html"><font color="#FF0000">Location map</font><font color="#FF0000"></font></a></span></span></span>&nbsp;&nbsp;</span></p>
</body>
</html>
