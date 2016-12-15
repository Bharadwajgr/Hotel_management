<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<SCRIPT language=Javascript>
      <!--
    function Bill()
{
	var error="";
	theForm=document.forms['f'];
	var fn=theForm.user;
	
	if(fn.value=="")
	{		fn.style.background = 'Yellow';

		alert("You didnt enter the Username.\n");
	}
	
	if(error=="")
	{
		fn.style.background = 'White';
	}
}

      //-->
   </SCRIPT>

<script type="text/javascript" src="validatebill.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin | Room billing</title>
<style type="text/css">
<!--
body {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	background-image: url(images/aa.png);
}
.style1 {
	color: #000000;
	font-size: 36px;
	font-weight: bold;
}
.style2 {
	color: #000000;
	font-size: 24px;
	font-weight: bold;
}
.style3 {font-size: 14px;
	color: #CCCCCC;
}
.style6 {font-size: 12px;
	color: #FFFF99;
}
.style7 {color: #FF0000;
	font-weight: bold;
	font-size: 36px;
}
.style19 {color: #FFFF99}
.style17 {color: #FFFF99;
	font-size: 36px;
}
.style18 {font-size: 36px;
	color: #FFFF99;
}
-->
</style></head>

<body>
<div align="center"><span class="style3"><img src="images/logo4.png" alt="" width="60" height="50" /><span class="style17">HOTEL <strong>SAI SURAJ</strong></span> <span class="style18"> INTERNATIONAL</span></span></div>
<table width="928" height="468" align="center" background="images/divider.gif">
  <tr>
    <th width="916" height="188" colspan="2" scope="row"><marquee direction="left" behavior='alternate' onmouseover="this.stop()" onmouseout="this.start()" loop="-1" truespeed="truespeed">
      <img src="images/dine_3.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine.jpg" width="140" height="90" />&nbsp;<img src="images/lobby.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine_3.jpg" width="140" height="90" />&nbsp;<img src="images/lounge.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/suite_1.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine_2.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/hall.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/restaurant.jpg" alt="" width="140" height="90" />
    </marquee></th>
  </tr>
  <tr>
    <th height="52" colspan="2" scope="row"><div align="left"><a href="admincpanel.php"><img src="images/home1.png" alt="" width="100" height="50" /></a><a href="signout.php"><img src="images/signout1.png" alt="" width="100" height="50" /></a><a href="cust.php"><img src="images/back.png" alt="" width="100" height="50" /></a></div></th>
  </tr>
  <tr>
    <th height="214" colspan="2" scope="row"><?php
session_start();

    if ( $_SESSION['username'])
    {  $user=$_SESSION['username'];
	  require('connect.php');
			$ex0=mysql_query("SELECT * FROM adminlogin WHERE user='$user'") or die(mysql_error());
							$count=mysql_num_rows($ex0);
				if($count)
				{								 		 
    				 echo "<font style='color:#ffff99'><br><center><strong>Welcome ".$_SESSION['username'].".</strong></center></font><br><br>";
			
?>
      <form id="form1" name="f" method="post" action="" onsubmit="return validBill(this);">
        <div align="center"><span class="style2 style19">Username :</span>
            <input type="text" name="user" id="user" onblur="Bill()" />
          &nbsp;&nbsp;&nbsp;
            <input type="submit" name="submit" id="submit" style=" border:double; border-color:#000000;  background-color:#ffff99; font-size:18px; font-family:Georgia, 'Times New Roman', Times, serif" value="Submit" />
        </div>
      </form>
      <p>&nbsp; </p>
    <?php
					 if(isset($_POST['submit']))
{
			$user=$_POST["user"];
			$ex=mysql_query("SELECT * FROM roombooking WHERE username='$user'") or die(mysql_error());
			$count=mysql_num_rows($ex);
				if($count)
				{
	$row=mysql_fetch_assoc($ex);
				 		 echo "<table align='center' border=1  cellspacing='0' style=' border:double; border-color:#000000; color:#FFFFFF; background-color:#003300; font-size:18px; font-family:Georgia, 'Times New Roman', Times, serif'>";

					//$username		=$row['username'];
							$ex1=mysql_query("SELECT * FROM registration WHERE user='$user'") or die(mysql_error());
								$row=mysql_fetch_assoc($ex1);
					$fname=$row['first_name'];
$gender=$row['gender'];
$city=$row['city'];
$state=$row['state'];
$country=$row['country'];
$phone=$row["phone"];
$email=$row["email"];

			echo "<tr>
					<td>Username</td><td><input type='text' value='$user' onFocus='this.blur()'></td></tr>
					<tr>
					<td>First name</td><td><input type='text'  value='$fname' onFocus='this.blur()'></td></tr>					
					<td>Gender</td><td><input type='text' value='$gender' onFocus='this.blur()'></td></tr>
					<tr>
					<td>City</td><td><input type='text' value='$city' onFocus='this.blur()'></td></tr>
					<tr>
					<td>State</td><td><input type='text' value='$state' onFocus='this.blur()'></td></tr>
					<tr>
					<td>Country</td><td><input type='text' value='$country' onFocus='this.blur()'></td></tr>
					<tr>
					<td>Phone no.</td><td><input type='text' value='$phone' onFocus='this.blur()'></td></tr>
					<tr>
					<td>E-mail</td><td><input type='text' value='$email' onFocus='this.blur()'></td></tr>";
						echo "<table align='center' border=1  cellspacing='0' style=' border:double; border-color:#000000; color:#FFFFFF; background-color:#003300; font-size:18px; font-family:Georgia, 'Times New Roman', Times, serif'>";
					echo "<tr><td>Room No.</td><td>Room type</td><td>Option(Ac/Non Ac)</td><td>Check-in date</td><td>Cnheck-out date</td><td>Rate for each Room per day</td><td>No. of days</td><td>Amount</td></tr>";
									$total=0;
								$ex2=mysql_query("SELECT * FROM roombooking WHERE username='$user'") or die(mysql_error());
					$count=mysql_num_rows($ex2);
				if($count)
				{
					while($row=mysql_fetch_assoc($ex2)){
					$perday	=0;
				$cin			=$row['checkindate'];
				$cout			=$row['checkoutdate'];
				$ndays			=$row['ndays'];
				$ct				=$row['category'];
				$type			=$row['type'];
				$optn			=$row['option'];
				$pernday			=$row['rate'];
				$roomno			=$row['roomno'];
				$perday			=$pernday/$ndays;
				$total 	=$total+$pernday;
				echo "<tr><td>$roomno</td></td><td>$type</td><td>$optn</td><td>$cin</td><td>$cout</td><td>$perday</td><td>$ndays</td><td>$pernday</td></tr>";
				}
				}
				$ex3=mysql_query("SELECT * FROM hallbooking WHERE username='$user'") or die(mysql_error());
					$count=mysql_num_rows($ex3);
				if($count)
				{
				while($row=mysql_fetch_assoc($ex3)){
					$perday	=0;
				$cin			=$row['checkindate'];
				$cout			=$row['checkoutdate'];
				$ndays			=$row['ndays'];
				$pernday			=$row['rate'];
				$perday			=$pernday/$ndays;
				$total 	=$total+$pernday;
				echo "<tr><td>Hall</td></td><td>-</td><td>-</td><td>$cin</td><td>$cout</td><td>$perday</td><td>$ndays</td><td>$pernday</td></tr>";
				}
				}
				echo "<br><br><tr>
					<td><br><br>Total amount paid</td><td><input type='text' name='total' value='$total' onFocus='this.blur()'></td></tr>";
						echo "</table></table>";
}
		else
		{
		echo "<script type=\"text/javascript\">
alert(\"Crrently there is no bill present for $user\");
</script>";
		}
		}
		}
   else
    {	
        header("Location:index.php");
    }}
?></th>
  </tr>
</table>
<p align="left" class="style1">&nbsp;</p>
</body>
</html>
