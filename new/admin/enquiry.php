<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin | Enquiry details</title>
<style type="text/css">
<!--
body {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	background-image: url(images/divider%20(2)
.gif);
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
.style5 {color: #003300; font-weight: bold; }
.style9 {color: #003300}
.style17 {color: #FFFF99;
	font-size: 36px;
}
.style18 {font-size: 36px;
	color: #FFFF99;
}
-->
</style></head>

<body>
<div align="center"><span class="style3"><img src="images/logo4.png" alt="" width="60" height="50" /><span class="style17">HOTEL <strong>SAI SURAJ</strong></span> <span class="style18"> INTERNATIONAL</span></span> </div>
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
			 echo "<br><strong><center>Welcome ".$_SESSION['username'].".<br><br></strong></center>";
			 	 if((!isset($_POST['delete']) && !isset($_GET['id'])))
				 {
			 echo "<center><font color='white'><strong>CUSTOMER ENQUIRY/FEEDBACK</strong></font></center></br></br>";
			 			$ex=mysql_query("SELECT * FROM contact") or die(mysql_error());
							$count=mysql_num_rows($ex);
				if($count)
				{								 		 
				echo "<table align='center' border=3 border-color='green' style=' border:double; border-color:#000000; color:#FFFFFF; background-color:#003300; font-size:18px; font-family:Georgia, 'Times New Roman', Times, serif' bgcolor='white' cellspacing='0'>";
				echo "<tr><td>Name</td><td>E-mail</td><td>Phone</td><td>Message</td><td>Option</td></tr>";
	while($row=mysql_fetch_assoc($ex)){
	$id	=$row['id'];
				$name			=$row['name'];
				$email			=$row['email'];
				$phone			=$row['phone'];
				$msg			=$row['message'];
					echo "<tr>		
					<td>$name</td>
					
					<td>$email</td>
					
					<td>$phone</td>
					
					<td>$msg</td>
					<td><a href='enquiry.php?id=$id&delete=yes'><img src='../images/b_drop.png'></td></tr>";
					}
					echo "</table>";
					}}
					if((isset($_GET['delete'])) && (isset($_GET['id'])))
			 {
			$id	 = $_GET['id'];
			echo "<table align='center' border=1 bgcolor='white' cellspacing='0' style='border:double; border-color:#000000; color:#FFFFFF; background-color:#003300; font-size:18px; font-family:Georgia, 'Times New Roman', Times, serif'>";
			$ex=mysql_query("DELETE FROM contact WHERE id='$id'") or die(mysql_error());
					
			echo "<script type=\"text/javascript\">
alert(\"Enquiry details of customer with ID $id Deleted\");
</script>";
		echo "</table>";
  
			}
	}
   else
    {	
        header("Location:index.php");
    }   

					}
			
?></th>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
