<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="valideditat.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin | Attendance</title>
<style type="text/css">
.style2 {
	font-size: xx-large;
	font-weight: bold;
}
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
.style9 {color: #FFFF99}
.style17 {color: #FFFF99;
	font-size: 36px;
}
.style18 {font-size: 36px;
	color: #FFFF99;
}
</style>
</head>

<body>
<div align="center" class="style2">
  <div align="left">
    <div align="center"><span class="style3"><img src="images/logo4.png" alt="" width="60" height="50" /><span class="style17">HOTEL <strong>SAI SURAJ</strong></span> <span class="style18"> INTERNATIONAL</span></span></div>
    <table width="858" height="469" align="center" background="images/divider.gif">
      <tr>
        <th height="188" scope="row"><marquee direction="left" behavior='alternate' onmouseover="this.stop()" onmouseout="this.start()" loop="-1" truespeed="truespeed">
          <img src="images/dine_3.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine.jpg" width="140" height="90" />&nbsp;<img src="images/lobby.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine_3.jpg" width="140" height="90" />&nbsp;<img src="images/lounge.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/suite_1.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine_2.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/hall.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/restaurant.jpg" alt="" width="140" height="90" />
        </marquee></th>
      </tr>
      <tr>
        <th height="52" scope="row"><div align="center"><a href="admincpanel.php"><img src="images/home1.png" alt="" width="100" height="50" /></a><a href="signout.php"><img src="images/signout1.png" alt="" width="100" height="50" /></a><a href="emp.php"><img src="images/back.png" alt="" width="100" height="50" /></a></div></th>
      </tr>
      <tr>
        <th height="217" scope="row">
          <p align="center" class="style9">Edit the attendance</p>
          <?php
session_start();
require("connect.php");
if($_SESSION['username'])
{	
$user=$_SESSION['username'];
	  require('connect.php');
			$ex0=mysql_query("SELECT * FROM adminlogin WHERE user='$user'") or die(mysql_error());
							$count=mysql_num_rows($ex0);
				if($count)
				{								 		 
			 echo "<br><strong><center>Welcome ".$_SESSION['username'].".<br><br></strong></center>";

echo "<font style='color:#FFFFFF; font-size:18px; font-family:Georgia, 'Times New Roman', Times, serif'>";
	if(isset($_POST['submit']))
	{
		$date=$_POST['date'];
		
		$ext=mysql_query("SELECT * FROM attendance WHERE date='$date'") or die(mysql_error());
		$cnt=mysql_num_rows($ext);
		
		if($cnt==0)
		{
			echo "<center>Sorry, No data available for $date.</center>";
		}
		else if($cnt>0)
		{
			echo "<center><table border='1' style=' border:double; border-color:#000000; color:#FFFFFF; background-color:#003300; font-size:18px; font-family:Georgia, 'Times New Roman', Times, serif' align='center'>
				<tr><td>Emp Id</td><td>Name</td><td>Date</td><td>Present</td><td></td></tr>";
			while($row=mysql_fetch_assoc($ext))
			{
				$eid=$row['empid'];
				$name=$row['name'];
				$date=$row['date'];
				$pre=$row['present'];
				
				echo "<tr><td>$eid</td><td>$name</td><td>$date</td><td>$pre</td><td><a href='editatt.php?eid=$eid&date=$date'>Edit</a></td></tr>";	
			}
			echo "</table></center>";
		}
	}
	else if(isset($_GET['eid']))
	{
		$eid=$_GET['eid'];
		$date=$_GET['date'];
		
		$extr=mysql_query("SELECT * FROM attendance WHERE empid='$eid' AND date='$date'");
		$cnt=mysql_num_rows($extr);
		
		$row=mysql_fetch_assoc($extr);
		$pre=$row['present'];
		$name=$row['name'];
		
		$v1 = 'unchecked';
		$v2 = 'unchecked';
		      
		if($row['present']=='yes')
			$v1='checked';
		else
		   	$v2='checked';
			
		echo "<center><table border='1' style=' border:double; border-color:#000000; color:#FFFFFF; background-color:#003300; font-size:18px; font-family:Georgia, 'Times New Roman', Times, serif' align='center'>
			<tr><td>Emp Id</td><td>Name</td><td>Date</td><td>Present?</td></tr>
			<tr><td>$eid</td><td>$name</td><td>$date</td>
			<td><form action='editsucc.php' method='post'>
				<input type='hidden' name='eid' value='$eid'>
				<input type='hidden' name='name' value='$name'>
				<input type='hidden' name='date' value='$date'>
				<label>Yes <input type='radio' name='pre' value='yes' $v1></label> 
			    <label>No <input type='radio' name='pre' value='no' $v2></label></td><td>
				<input type='submit' name='submit' value='Submit'></form></td>
			</tr></table></center>";
	}
	else
	{
		echo "<center><form action='' name='f' method='post' onsubmit='return validAttdate(this);'>
			Enter the date : <input type='text' name='date' onblur='checkdate()'>
			<input type='submit' name='submit' value='Submit'>";	
	}echo "</font></center>";
}
   else
    {	
        header("Location:index.php");
    }   
	}
?>
        </th>
      </tr>
    </table>
    <br />
  </div>
</div>
</body>
</html>
