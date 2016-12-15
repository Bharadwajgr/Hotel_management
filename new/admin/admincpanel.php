<html>

<head>
<title>Admin | Cpanel</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<style type="text/css">
 body{
	font-family: Verdana, Arial, Helvetica, sans-serif;
	background-image: url(images/aa.png);
 }




.style3 {font-size: 14px;
	color: #CCCCCC;
}
.style17 {
	color: #000000;
	font-size: 36px;
}
.style19 {color: #FFFF99}
.style20 {
	color: #FFFF99;
	font-weight: bold;
	font-size: 36px;
}
.style21 {color: #FFFF99;
	font-size: 36px;
}
.style18 {font-size: 36px;
	color: #FFFF99;
}
</style>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>

<body >
<div align="center"><span class="style3"><img src="images/logo4.png" alt="" width="60" height="50" /><span class="style21">HOTEL <strong>SAI SURAJ</strong></span> <span class="style18"> INTERNATIONAL</span></span></div>
<center>
<table width="928" height="630" background="images/divider.gif">
  <tr>
    <th height="188" colspan="2" scope="row"><marquee direction="left" behavior='alternate' onMouseOver="this.stop()" onMouseOut="this.start()" loop="-1" truespeed="truespeed">
      <img src="images/dine_3.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine.jpg" width="140" height="90" />&nbsp;<img src="images/lobby.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine_3.jpg" width="140" height="90" />&nbsp;<img src="images/lounge.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/suite_1.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine_2.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/hall.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/restaurant.jpg" alt="" width="140" height="90" />
    </marquee></th>
  </tr>
  <tr>
    <th height="52" colspan="2" scope="row"><div align="left"><a href="admincpanel.php"><img src="images/home1.png" alt="" width="100" height="50"></a><a href="signout.php"><img src="images/signout1.png" alt="" width="100" height="50"></a></div></th>
  </tr>
  <tr>
    <th width="418" height="376" scope="row"><img src="images/hotel.jpg" alt="" width="411" height="372"></th>
    <th width="498" scope="row"><table width="325" border=0 cellpadding=5 cellspacing=5 background="images/divider (2).gif">
      <tr>
        <td width="264" height="33"><center class="style20">
          <?php

//error_reporting(0);
session_start();

    if ( isset($_SESSION['username']) )
    { $user=$_SESSION['username'];
	  require('connect.php');
			$ex0=mysql_query("SELECT * FROM adminlogin WHERE user='$user'") or die(mysql_error());
							$count=mysql_num_rows($ex0);
				if($count)
				{								 		 
		
     echo "<center><strong><br><font style='color:#ffff99' size='3'>Welcome ".$_SESSION['username'].". You are signed in.<br> </font></strong></center>";
     }
//echo "Hai".$_SESSION['username'];
   else
    {	
        header("Location:index.php");
    }
	}
?>
        </center>
            
        <span class="style19"><br>
            </span>
          <tr>
            <td><span class="style19"><a href='emp.php' ><b><img src="images/11650267.jpg" alt="Edit" width="48" height="48"></b></a> Employee</span></td>
          </tr>
          <tr>
            <td><span class="style19"><a href='cust.php' ><b><img src="images/People-48.png" alt="Edit" width="48" height="48"></b></a> Customer</span></td>
          </tr>
          <tr>
            <td><span class="style19"><a href="room.php"><img src="images/suite_2.jpg" alt="View" width="48" height="48"></a> Rooms </span>        
          </tr>
          <tr>
            <td><span class="style19"><a href='changepass.php' ><b><img src="images/Gnome-Dialog-Password-48.png" alt="Change Password" width="48" height="48"></b></a> Change  password </span>        
          </tr>
    </table></th>
  </tr>
</table>
</center>
<marquee scrollamount=4 onMouseOver="this.stop();" onMouseOut="this.start();">
Do feel free to contact us regarding any sort of technical queries, problems or suggestions. Mob:9611396334 E-mail:akshitha_1991@yahoo.in
</marquee>

</body>

</html>

