<html>

<head>
<title>Admin | Customer</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<style type="text/css">
 body{
	font-family: Verdana, Arial, Helvetica, sans-serif;
	background-image: url(images/aa.png);
 }




.style3 {font-size: 14px;
	color: #CCCCCC;
}
.style18 {font-size: 36px;
	color: #FFFF99;
}
.style19 {
	color: #FFFF99;
	font-weight: bold;
	font-size: 36px;
	font-style: italic;
}
.style20 {color: #FFFF99}
</style>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>

<body >
  <div align="center"><span class="style3"><img src="images/logo4.png" alt="" width="60" height="50" /><span class="style18">HOTEL <strong>SAI SURAJ</strong></span> <span class="style18"> INTERNATIONAL</span></span>
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
     echo "<center><strong><br><br>Welcome ".$_SESSION['username'].".</strong></center>";
}     
//echo "Hai".$_SESSION['username'];
   else
    {
        header("Location:index.php");
    }
	}
?>
    <br>
    <br>
    
  </div>
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
    <th width="498" scope="row"><table width="487" height="362" border=0 align="center" cellpadding=5 cellspacing=5>
      <tr>
        <td width="412" height="33"><center class="style19">
          <u><font color="#FFFF99" size="5">Customer</font></u>
          <span class="style20"><br>
            </span>
          </center>
            <tr>
            <td><span class="style20"><a href='adminregister.php'><b><img src="images/registration,4.jpg" alt="View" width="48" height="48"></b></a> Customer Registration Detail </span>                   
            </tr>
          <tr>
            <td><span class="style20"><a href='billing.php' ><b><img src="images/Search-48.png" alt="Edit" width="48" height="48"></b></a> Search Booked Customer </span>                   
          </tr>
          <tr>
            <td><span class="style20"><a href='bill.php'><b><img src="images/billing.jpg" alt="View" width="48" height="48"></b></a> Billing </span>                   </tr>
          <tr>
            <td height="65"><span class="style20"><a href="enquiry.php"><img src="images/enquiry.jpg" alt="View" width="48" height="48"></a> Enquiry deatils </span>                   </tr>
    </table></th>
  </tr>
</table>
</center>
<br><br></strong>
<marquee scrollamount=4 onMouseOver="this.stop();" onMouseOut="this.start();">
Do feel free to contact us regarding any sort of technical queries, problems or suggestions. Mob:9000009999 E-mail:akshitha_1991@yahoo.in
</marquee>

</body>

</html>

