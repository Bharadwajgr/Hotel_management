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
			 	 if(!isset($_POST['update']) && !isset($_GET['edit']))
				 {
			 echo "<center><font color='white'><strong>TARIFF PLANS</strong></font></center></br></br>";
			 			$ex=mysql_query("SELECT * FROM tariff") or die(mysql_error());
							$count=mysql_num_rows($ex);
				if($count)
				{								 		 
				echo "<form action='' method='post' name='f'>
				<table align='center' border=3 border-color='green' style=' border:double; border-color:#000000; color:#FFFFFF; background-color:#003300; font-size:18px; font-family:Georgia, 'Times New Roman', Times, serif' bgcolor='white' cellspacing='0'>";
				echo "<tr><td>Sl.No</td><td>Room</td><td>Amount</td><td>Option</td></tr>";
	while($row=mysql_fetch_assoc($ex)){
	
				$rname			=$row['name'];
				$rate			=$row['rate'];
				$no			=$row['no'];
					echo "<tr>		
					<td>$no</td>
					
					<td>$rname</td>
					
					<td>$rate</td>
					<td><a href='tariff.php?no=$no&edit=yes'><img src='../images/edit.png' height='20' width='20'></a></td>

					</tr>";
					}
					echo "</table> 
					</form>";
					}}
								 if(isset($_GET['no']) && isset($_GET['edit']) && !isset($_POST['update']))
			 {	
			 	$no	 = $_GET['no'];
				$extract2= mysql_query("SELECT * FROM tariff WHERE no='$no'");
             	$count	 = mysql_num_rows($extract2);
				if($count)
				{$row 		=mysql_fetch_assoc($extract2);
    	       $no		=$row['no'];
				$name		=$row['name'];
				$rate		=$row['rate'];
				echo "<table align='center' border=1  cellspacing='0' style=' border:double; border-color:#000000; color:#FFFFFF; background-color:#003300; font-size:18px; font-family:Georgia, 'Times New Roman', Times, serif'>";
				echo "<form action='' method='post' name='f' >";
				echo "<tr><td>No.</td><td><input type='text' name='no' value='$no' onFocus='this.blur()'></td></tr>
				<tr><td>Name</td><td><input type='text' name='name' value='$name' onFocus='this.blur()'></td></tr>
				<tr><td>Rate</td><td><input type='text' name='rate' value='$rate'></td></tr>
				<tr><td><input type='submit' name='update' 	value='Update'></td></tr>
				</table></form>";
}}
			 	 if(isset($_POST['update'] ))
			 {
				$no		=$_POST['no'];
				$rate	=$_POST['rate'];
				$ext=mysql_query("UPDATE tariff SET rate='$rate' WHERE no='$no'") or die(mysql_error());
		echo "<script type=\"text/javascript\">
alert(\"Tariff detail is added\");
</script>";
			
}	}
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
