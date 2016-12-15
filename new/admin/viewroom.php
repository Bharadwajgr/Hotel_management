<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin-View room</title>
<style type="text/css">
<!--
body {
font-family: Verdana, Arial, Helvetica, sans-serif;
	background-image: url(images/logo%20(3)
.jpg);
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
.style19 {	color: #FFFF99;
	font-weight: bold;
	font-size: 36px;
	font-style: italic;
}
.style20 {color: #FFFF99}
.style17 {color: #FFFF99;
	font-size: 36px;
}
.style18 {font-size: 36px;
	color: #FFFF99;
}
-->
</style></head>

<body>
<div align="center"><span class="style3"><img src="images/logo4.png" alt="" width="60" height="50" /><span class="style17">HOTEL <strong>SAI SURAJ</strong></span> <span class="style18"> INTERNATIONAL</span></span>
</div>
<table width="928" height="315" align="center" background="images/divider.gif">
  <tr>
    <th width="916" height="188" colspan="2" scope="row"><marquee direction="left" behavior='alternate' onmouseover="this.stop()" onmouseout="this.start()" loop="-1" truespeed="truespeed">
      <img src="images/dine_3.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine.jpg" width="140" height="90" />&nbsp;<img src="images/lobby.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine_3.jpg" width="140" height="90" />&nbsp;<img src="images/lounge.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/suite_1.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine_2.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/hall.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/restaurant.jpg" alt="" width="140" height="90" />
    </marquee></th>
  </tr>
  <tr>
    <th height="59" colspan="2" scope="row"><div align="left"><a href="admincpanel.php"><img src="images/home1.png" alt="" width="100" height="50" /></a><a href="signout.php"><img src="images/signout1.png" alt="" width="100" height="50" /></a><a href="room.php"><img src="images/back.png" alt="" width="100" height="50" /></a></div></th>
  </tr>
  <tr>
    <th height="52" colspan="2" scope="row"><?php
session_start();

    if ( $_SESSION['username'])
    {  
		$user=$_SESSION['username'];
	  require('connect.php');
			$ex0=mysql_query("SELECT * FROM adminlogin WHERE user='$user'") or die(mysql_error());
							$count=mysql_num_rows($ex0);
				if($count)
				{								 		 
			 echo "<br><center><strong>Welcome ".$_SESSION['username'].".<br /></center></strong>";
			 if(!isset($_POST['delete']) && !isset($_GET['roomno']))
			 {
		 echo "<table align='center' border=1 bgcolor='white' cellspacing='0' style=' border:double; border-color:#000000; color:#FFFFFF; background-color:maroon; font-size:18px; font-family:Georgia, 'Times New Roman', Times, serif'>";
			$ex=mysql_query("SELECT * FROM roomtypes") or die(mysql_error());
			$count=mysql_num_rows($ex);
				if($count)
				{echo "<tr align='center'><td>Room no</td><td>Room type</td><td>AC/Non AC</td><td>Option</td></tr>";
				while($row=mysql_fetch_assoc($ex)){
				$roomno		=$row['roomno'];
				$type		=$row['roomtype'];
				$optn		=$row['ac'];
				echo "<tr><td>$roomno</td><td>$type</td><td>$optn</td><td><a href='viewroom.php?roomno=$roomno&delete=yes'><img src='../images/b_drop.png'></td></tr>";
				}
				echo "</table>";
			}}
			
			if(isset($_GET['roomno']) && isset($_GET['delete']))
			 {
			$roomno	 = $_GET['roomno'];
			echo "<table align='center' border=1 bgcolor='white' cellspacing='0' style='border:double; border-color:#000000; color:#FFFFFF; background-color:#003300; font-size:18px; font-family:Georgia, 'Times New Roman', Times, serif'>";
			$ex=mysql_query("DELETE FROM roomtypes WHERE roomno='$roomno'") or die(mysql_error());
					
			echo "<script type=\"text/javascript\">
alert(\"Room with Room No. $roomno Deleted\");
</script>";
		echo "</table>";
  
			}
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
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
