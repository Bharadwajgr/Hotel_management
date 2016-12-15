<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin | Overall bill </title>
<style type="text/css">
<!--
body {
font-family: Verdana, Arial, Helvetica, sans-serif;
	background-image: url(images/aa.png);
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
<table width="858" height="469" align="center" background="images/divider.gif">
  <tr>
    <th height="188" scope="row"><marquee direction="left" behavior='alternate' onmouseover="this.stop()" onmouseout="this.start()" loop="-1" truespeed="truespeed">
      <img src="images/dine_3.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine.jpg" width="140" height="90" />&nbsp;<img src="images/lobby.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine_3.jpg" width="140" height="90" />&nbsp;<img src="images/lounge.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/suite_1.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine_2.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/hall.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/restaurant.jpg" alt="" width="140" height="90" />
    </marquee></th>
  </tr>
  <tr>
    <th height="52" scope="row"><div align="left"><a href="admincpanel.php"><img src="images/home1.png" alt="" width="100" height="50" /></a><a href="signout.php"><img src="images/signout1.png" alt="" width="100" height="50" /></a><a href="cust.php"><img src="images/back.png" alt="" width="100" height="50" /></a></div></th>
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
			 echo "<br><center><strong>Welcome ".$_SESSION['username'].".<br /></strong></center><br><br>";
	 if(!isset($_POST['delete']) && !isset($_GET['roomno']) && !isset($_GET['id']))
			 {
		 echo "<table align='center' border=1 bgcolor='white' cellspacing='0' style=' border:double; border-color:#000000; color:#FFFFFF; background-color:#003300; font-size:18px; font-family:Georgia, 'Times New Roman', Times, serif' >";
		 echo "<tr align='center'><td>Username</td><td>Room no</td><td>Check-in Date</td><td>Check-out Date</td><td>No. of days</td><td>Category</td><td>Room Type</td><td>AC/Non AC</td><td>Rate</td><td>option</td></tr>";
			$ex=mysql_query("SELECT * FROM roombooking") or die(mysql_error());
			$count=mysql_num_rows($ex);
				if($count)
				{				while($row=mysql_fetch_assoc($ex)){
				$username		=$row['username'];
				$roomno			=$row['roomno'];
				$cin			=$row['checkindate'];
				$cout			=$row['checkoutdate'];
				$ndays			=$row['ndays'];
				$ct				=$row['category'];
				$type			=$row['type'];
				$optn			=$row['option'];
				$rate			=$row['rate'];
								echo "<tr align='center'><td>$username</td><td>$roomno</td><td>$cin</td><td>$cout</td><td>$ndays</td><td>$ct</td><td>$type</td><td>$optn</td><td>$rate</td><td><a href='bill.php?roomno=$roomno&delete=yes'><img src='../images/b_drop.png'></td></tr>";
			}
				}
				$ex1=mysql_query("SELECT * FROM hallbooking") or die(mysql_error());
				$count1=mysql_num_rows($ex1);
				if($count1)
				{
				while($row=mysql_fetch_assoc($ex1)){
				$id				=$row['id'];
				$username		=$row['username'];
				$cin			=$row['checkindate'];
				$cout			=$row['checkoutdate'];
				$ndays			=$row['ndays'];
				$rate			=$row['rate'];
	echo "<tr align='center'><td>$username</td><td>$id</td><td>$cin</td><td>$cout</td><td>$ndays</td><td>Hall</td><td>-</td><td>-</td><td>$rate</td><td><a href='bill.php?id=$id&delete=yes'><img src='../images/b_drop.png'></td></tr>";

}}
				if($count==0 && $count1==0)
					{		echo "<script type=\"text/javascript\">
alert(\"No bils are present\");
</script>";
}
					echo "</table>";
		}
				
			 if(isset($_GET['roomno']) && isset($_GET['delete']))
			 {
			$roomno	 = $_GET['roomno'];
			echo "<table align='center' border=1 bgcolor='white' cellspacing='0'>";
			$ex=mysql_query("DELETE FROM roombooking WHERE roomno='$roomno'") or die(mysql_error());
			echo "<tr><td>Customer with Room No. $roomno is Deleted</td></tr>";
			echo "</table>";	
			}
			
			if(isset($_GET['id'])  && isset($_GET['delete']))
			 {
			$id =$_GET['id'];
			echo "<table align='center' border=1 bgcolor='white' cellspacing='0'>";
			$ex1=mysql_query("DELETE FROM hallbooking WHERE id='$id'") or die(mysql_error());
			echo "<tr><td>Hall booking is Deleted</td></tr>";			
			echo "</table>";	
			}}
   else
    {	
        header("Location:index.php");
    }

}?></th>
  </tr>
</table>
</body>
</html>
