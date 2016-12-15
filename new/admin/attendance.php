<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
          <p align="center" class="style9">
          Start todays attendance
            <?php
$date=date("Y-m-d");
	session_start();
	if ( $_SESSION['username'])
	{  
	$user=$_SESSION['username'];
	  require('connect.php');
			$ex0=mysql_query("SELECT * FROM adminlogin WHERE user='$user'") or die(mysql_error());
							$count=mysql_num_rows($ex0);
				if($count)
				{								 		 
		echo "<br><center><strong>Welcome ".$_SESSION['username']."<br><br></strong></center>";
		?>
  
          </p>
          <form action="" method="post">
          
            <table align="center" background="images/bg1.jpg" bgcolor="#FFFFFF">
              <tr>
                <td class="style9"><input type="text" name="date" value="<?php echo $date;?>" onfocus="this.blur();" /></td>
              </tr>
              <tr>
                <td class="style9"><input type="submit" name="start" value="    Start   " style="background-color:#ffff99; border:double"/></td>
              </tr>
            </table>
            <br />
            </form>
                  <?php
		if(isset($_POST['start']))
		{
		$today=$_POST['date'];
		$checkdate=mysql_query("SELECT * FROM attendance WHERE date='$today'");
		if($cnt=mysql_num_rows($checkdate))
		{
		echo "<script type=\"text/javascript\">
alert(\"Attendance already finalised for the date $today .Kindly use other option.\");
</script>";
		}
		else
		{
		echo "<form action='attendanceverify.php' method='POST'>";
		echo "<table align='center' border=2 bgcolor='#ffffff' cellspacing='0' style=' border:double; border-color:#000000; color:#FFFFFF; background-color:#003300; font-size:18px; font-family:Georgia, 'Times New Roman', Times, serif'>";
			$ex=mysql_query("SELECT * FROM employee") or die(mysql_error());
			$count=mysql_num_rows($ex);
				if($count)
				{echo "<tr align='center'><td>Emp_ID</td><td>Name</td><td>Present?</tr>";
				while($row=mysql_fetch_assoc($ex)){
				$empid		=$row['empid'];
				$name		=$row['name'];
				
		    	echo "<tr align='center'><td>$empid</td><td>$name</td><td>Present<input type='checkbox' name='$empid' value='present'></td></tr>";}//close while
				echo "<input type='hidden' name='employeecount' value='$count'>";
				echo "<input type='hidden' name='today' value='$today'>";
				echo "</table>";
				echo "<br /></br><center><input type='submit' name='verify' value='Confirm Todays Attendance' style=' border:double; border-color:#000000; color:#FFFFFF; background-color:#003300; font-size:18px; font-family:Georgia, 'Times New Roman', Times, serif'></center> </br></br>";
		
				echo "</form>";
				}//close if count 	

		else
		{echo "<script type=\"text/javascript\">
alert(\"Current there is no employee\");
</script>";
		}}
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
    <br />
  </div>
</div>
</body>
</html>
