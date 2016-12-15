<html>

<head>
<title>Admin-Siignout</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<style type="text/css">
 body{
	font-family: Verdana, Arial, Helvetica, sans-serif;
	background-image: url(images/aa.png);
 }




.style3 {	font-size: 14px;
	color: #CCCCCC;
}
.style6 {	font-size: 12px;
	color: #FFFF99;
}
.style7 {	color: #FF0000;
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
</style>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>

<body >
<div align="center">
  <div align="center"><span class="style3"><img src="images/logo4.png" alt="" width="60" height="50" /><span class="style17">HOTEL <strong>SAI SURAJ</strong></span> <span class="style18"> INTERNATIONAL</span></span>
     
  </div>
  <table width="928" height="476" background="images/divider.gif">
    <tr>
      <th height="188" scope="row"><marquee direction="left" behavior='alternate' onMouseOver="this.stop()" onMouseOut="this.start()" loop="-1" truespeed="truespeed">
        <img src="images/dine_3.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine.jpg" width="140" height="90" />&nbsp;<img src="images/lobby.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine_3.jpg" width="140" height="90" />&nbsp;<img src="images/lounge.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/suite_1.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine_2.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/hall.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/restaurant.jpg" alt="" width="140" height="90" />
      </marquee></th>
    </tr>
    <tr>
      <th height="52" scope="row"><div align="left"><a href="signout.php"><img src="images/signout1.png" alt="" width="100" height="50"></a><a href="admincpanel.php"><img src="images/home1.png" alt="" width="100" height="50"></a></div></th>
    </tr>
    <tr>
      <th height="222" scope="row"><?php
session_start();
session_destroy();

echo "<br><br><br>
<center><table border=0 cellpadding=5 cellspacing=5 style=' border:double; border-color:#000000; color:#FFFFFF; background-color:#003300; font-size:18px; font-family:Georgia, 'Times New Roman', Times, serif' >
        <tr><td>&nbsp;</td></tr>
        <tr><td>&nbsp;</td><td><center>Signed out successfully.</center></td><td>&nbsp;</td><td>
        <tr><td>&nbsp;</td><td><a href='index.php'>Click here</a> to go to Home page or wait to be redirected.</center><td>&nbsp;</td><td>
        <tr><td>&nbsp;</td><td>
        </table></center>";
header('Refresh:10;url=index.php');
?></th>
    </tr>
  </table>
  <p align="left">&nbsp;</p>
</div>
</body>
</html>