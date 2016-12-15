<html>

<head>
<title>Admin | Employee</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<style type="text/css">
 body{
	font-family: Verdana, Arial, Helvetica, sans-serif;
	background-image: url(images/aa.png);
 }




.style3 {font-size: 14px;
	color: #CCCCCC;
}
.style8 {
	color: #FFFF99;
	font-weight: bold;
}
.style9 {color: #5B0302}
.style10 {color: #FFFF99}
.style17 {	color: #FFFF99;
	font-size: 36px;
}
.style18 {	font-size: 36px;
	color: #FFFF99;
}
</style>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>

<body >

  <div align="center"><span class="style3"><img src="images/logo4.png" alt="" width="60" height="50" /><span class="style17">HOTEL <strong>SAI SURAJ</strong></span> <span class="style18"> INTERNATIONAL</span></span>
    <?php

//error_reporting(0);
session_start();

    if ( isset($_SESSION['username']) )
    {
		$user=$_SESSION['username'];
	  require('connect.php');
			$ex0=mysql_query("SELECT * FROM adminlogin WHERE user='$user'") or die(mysql_error());
							$count=mysql_num_rows($ex0);
				if($count)
				{								 		 
     echo "<center><strong><br><br>Welcome ".$_SESSION['username'].".<br></strong></center>";
     }
//echo "Hai".$_SESSION['username'];
   else
    {
        header("Location:index.php");
    }
	}
?>
</div>
<div align="center">
<table width="858" height="248" align="center" background="images/divider.gif">
      <tr>
        <th height="188" scope="row"><marquee direction="left" behavior='alternate' onMouseOver="this.stop()" onMouseOut="this.start()" loop="-1" truespeed="truespeed">
        <img src="images/dine_3.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine.jpg" width="140" height="90" />&nbsp;<img src="images/lobby.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine_3.jpg" width="140" height="90" />&nbsp;<img src="images/lounge.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/suite_1.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine_2.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/hall.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/restaurant.jpg" alt="" width="140" height="90" />
        </marquee></th>
      </tr>
      <tr>
        <th height="52" scope="row"><div align="left"><a href="admincpanel.php"><img src="images/home1.png" alt="" width="100" height="50" /></a><a href="signout.php"><img src="images/signout1.png" alt="" width="100" height="50" /></a>
          <table width="325" border=0 align="center" cellpadding=5 cellspacing=5 background="images/divider (2).gif">
            <tr>
              <td width="264" height="33"><center class="style8 style9">
                  <u><font color="#FFFFFF">Employee</font></u><span class="style10"><br>
                  </span>
                </center>
            <tr>
              <td><span class="style10"><a href='addemp.php' ><b><img src="images/edit.png" alt="Edit" width="48" height="48"></b></a> Add new employee</span></td>
            </tr>
            <tr>
              <td><span class="style10"><a href='aview.php' ><b><img src="images/Search-48.png" alt="Edit" width="48" height="48"></b></a> View Employees</span></td>
            </tr>
            <tr>
              <td><span class="style10"><a href="attendance.php"><img src="images/attendance_list.png" alt="View" width="48" height="48"></a> Attendence </span>                      </tr>
            <tr>
              <td><a href="viewatten.php"><img src="images/attendance_list.png" alt="View" width="48" height="48"></a><span class="style10"> View attendance</span>                       </tr>
            <tr>
              <td><a href="editatt.php"><img src="images/attendance_list.png" alt="View" width="48" height="48"></a><span class="style10">Edit  attendance</span>                       </tr>
            <tr>
              <td><span class="style10"><a href='customer.php'><b><img src="images/salary_icon.jpg" alt="View" width="48" height="48"></b></a> Salary </span>                      </tr>
          </table>
        </div></th>
      </tr>
    </table>
<br>
</strong></div>
<marquee scrollamount=4 onMouseOver="this.stop();" onMouseOut="this.start();">
Do feel free to contact us regarding any sort of technical queries, problems or suggestions. Mob:9000009999 E-mail:akshitha_1991@yahoo.in
</marquee>

</body>

</html>

