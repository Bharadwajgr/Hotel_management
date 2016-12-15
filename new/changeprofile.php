<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="validchangeprofile.js"></script>
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

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SaiSuraj-Change profile</title>
<style type="text/css">
body {
	background-image: url(img/divider.gif);
}
.style20 {	font-size: 14px;
	color: #CCCCCC;
}
.style18 {font-size: 36px;
	color: #FFFF99;
}
.style34 {color: #FFFF99;
	font-size: 36px;
}
.style35 {
	font-size: 18px;
	font-weight: bold;
}
</style>
</head>

<body>
<div align="center"><span class="style20"><img src="images/logo4.png" alt="" width="60" height="50" /><span class="style34">HOTEL <strong> SAI SURAJ </strong></span> <span class="style18"> INTERNATIONAL</span></span>
</div>
<table width="918" border="0" align="center" background="img/aa.png" bgcolor="#333333">
  <tr>
    <th height="214" colspan="4" scope="row"><img src="images/room2.jpg" alt="" width="856" height="200" border="10" style="border:thick; border-color:#000000" /></th>
  </tr>
  <tr>
    <th height="60" colspan="4" scope="row"><a href="index.html"><img src="img/home3.png" alt="" width="175" height="50"/></a><a href="aboutus.html"><img src="img/aboutus3.png" alt="" width="175" height="50" onclick="aboutus.html" /></a><a href="login.php"><img src="img/bk3.png" alt="" width="175" height="50" /></a><a href="tourplace.html"><img src="img/tplc3.png" alt="" width="175" height="50" /></a><a href="lmap.html"><img src="img/lmp3.png" alt="" width="175" height="50" /></a></th>
  </tr>
  <tr>
    <th height="60" colspan="4" scope="row"><marquee direction="left" behavior='alternate' onmouseover="this.stop()" onmouseout="this.start()" loop="-1" truespeed="truespeed">
          <img src="images/dine_3.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine.jpg" width="140" height="90" />&nbsp;<img src="images/lobby.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine_3.jpg" width="140" height="90" />&nbsp;<img src="images/lounge.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/suite_1.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine_2.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/hall.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/restaurant.jpg" alt="" width="140" height="90" />
          </marquee></th>
  </tr>
  <tr>
    <th width="238" height="357" scope="row"><a href="facilities.html"><img src="images/facilities.jpg" alt="" width="226" height="161" /></a><br />
    <br /><a href="tariff.php"><img src="images/tariff.jpg" width="226" height="72" /></a><br /><br /> <a href="lmap.html"><img src="images/location.jpg" width="226" height="73" /></a></th>
    <td width="670">
      <table width="645" height="60">
        <tr>
          <th scope="row"><a href="changepass.php"><img src="img/changepassword.png" width="110" height="50" /></a></th>
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
			  if(!isset($_POST['update']) && !isset($_GET['username']))
			 {

			 	$ex=mysql_query("SELECT * FROM registration WHERE user='$username'") or die(mysql_error());
	       	$count=mysql_num_rows($ex);
				if($count)
				{
						 echo "<form action='' method='post' name='f' onsubmit='return validateChangeprof(this);'>
						 <table align='center' border=0 bgcolor='maroon'  cellspacing='0' style='color:white'>";
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
					echo "<tr><td><lable>Username</lable></td><td><input type='text' name='username' value='$username' onfocus='this.blur()'/></td></tr>
					<tr><td><lable>Name</lable></td><td><input type='text' name='first' value='$first' onblur='checkname()'/></td></tr>
					<tr><td><lable>Gender</lable></td><td><input type='text' name='gender' value='$gender' onfocus='this.blur()'/></td></tr>
					<tr><td><lable>City</lable></td><td><input type='text' name='city' value='$city' onblur='checkcity()'/></td></tr>
					<tr><td><lable>State</lable></td><td><input type='text' name='state' value='$state' onblur='checkstate()'/></td></tr>
					<tr><td><lable>Country</lable></td><td><input type='text' name='country' value='$country' onblur='checkcountry()'/></td></tr>
					<tr><td><lable>Phone No.</lable></td><td><input type='text' name='phone' value='$phone' maxlength='12' onkeypress='return isNumberKey(event)'/></td></tr>
			<tr><td><lable>Email</lable></td><td><input type='text' name='email' value='$email' onblur='checkemail()'/></td></tr>
			<tr><td><lable>Security Question</lable></td><td>
			<select  size='1' name='secq'>
			            <option value='$secq'>$secq</option>
            <option value='Which is your favourite dessert?'>Which is your favourite dessert?</option>
            <option value='Which is your favourite juice?'>Which is your favourite juice?</option>
            <option value='which is your favourite dish?'> which is your favourite dish?</option>
            <option value='where did you celebrate your last birthday?'>where did you celebrate your last birthday?</option>
            <option value='which is your favourite hotel?'>which is your favourite hotel?</option>
          </select>      </td></tr>
			<tr><td><lable>Security Answer</lable></td><td><input type='text' name='seca' value='$seca' onblur='checkanswer()'/></td></tr>";
			}
			echo "<tr><td><input type='submit' value='update' name='update' style='background-color:#ffff99; font-size:18px; color:#400000; border:groove'></td></tr></table></form>";
			}
		}	 
			 if(isset($_POST['update']))
			 {
			 $fname=$_POST["first"];
				$city=$_POST["city"];
				$state=$_POST["state"];
				$country=$_POST["country"];
				$phone=$_POST["phone"];
				$email=$_POST["email"];
				$secq=$_POST["secq"];
				$seca=$_POST["seca"];
				$ex=mysql_query("UPDATE registration SET first_name='$fname', city='$city', state='$state', country='$country', phone='$phone', email='$email', security_question='$secq', answer='$seca' WHERE user='$username'") or die(mysql_error());
	echo "<script type=\"text/javascript\">
alert(\"Updated successfully\");
</script>";
	}} else
    {	
        header("Location:login.php");
    }}
	?>
    
    </td>
  </tr></table>
<p align="center"><span class="style35"><a href="index.html"><font color="#FF0000">Home</font></a>&nbsp;&nbsp; &nbsp;| &nbsp; &nbsp;&nbsp;<a href="aboutus.html"><font color="#FF0000">About us</font></a>&nbsp;&nbsp; &nbsp;| &nbsp;&nbsp;&nbsp; <a href="login.php"><font color="#FF0000">Booking</font></a>&nbsp;&nbsp;&nbsp; | &nbsp; &nbsp;&nbsp;<a href="tourplace.html"><font color="#FF0000">Tourism places</font></a>&nbsp; &nbsp;&nbsp;| &nbsp;&nbsp; &nbsp;<a href="lmap.html"><font color="#FF0000">Location map</font></a>&nbsp;</span></p>
</body>
</html>
