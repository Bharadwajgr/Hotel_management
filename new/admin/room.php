<html>

<head>
<title>Admin | Room</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<style type="text/css">
 body{
	font-family: Verdana, Arial, Helvetica, sans-serif;
	background-image: url(images/aa.png);
 }




.style3 {font-size: 14px;
	color: #CCCCCC;
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

<div align="left">
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
    			 echo "<br><center><strong>Welcome ".$_SESSION['username'].".<br /></center></strong>";			 
     }
	 
//echo "Hai".$_SESSION['username'];
   else
    {
        header("Location:index.php");
    }
	}
?>
  </div>
<table width="928" height="572" align="center" background="images/divider.gif">
      <tr>
        <th height="188" scope="row"><marquee direction="left" behavior='alternate' onMouseOver="this.stop()" onMouseOut="this.start()" loop="-1" truespeed="truespeed">
          <img src="images/dine_3.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine.jpg" width="140" height="90" />&nbsp;<img src="images/lobby.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine_3.jpg" width="140" height="90" />&nbsp;<img src="images/lounge.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/suite_1.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine_2.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/hall.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/restaurant.jpg" alt="" width="140" height="90" />
        </marquee></th>
      </tr>
      <tr>
        <th height="52" scope="row"><div align="left"><a href="admincpanel.php"><img src="images/home1.png" alt="" width="100" height="50"></a><a href="signout.php"><img src="images/signout1.png" alt="" width="100" height="50"></a></div></th>
      </tr>
      <tr>
        <th height="318" scope="row"><table width="325" border=0 align="center" cellpadding=5 cellspacing=5 background="images/divider (2).gif">
          <tr>
            <td width="264" height="33"><center class="style20">
                <b><u><font color="#FFFFFF">Room details</font></u></b>
              </center>
                <span class="style20"><br>
                </span>
<tr>
                    <td><span class="style20"><a href='newroom.php' ><b><img src="images/edit.png" alt="Edit" width="48" height="48"></b></a> Add Room
          </span></tr>
                  <tr>
                    <td><span class="style20"><a href='viewroom.php'><b><img src="images/Search-48.png" alt="View" width="48" height="48"></b></a>View all rooms                    
          </span></tr>
                  <tr>
                    <td><span class="style20"><a href='checkincout.php'><b><img src="images/suite_2.jpg" alt="View" width="48" height="48"></b></a> Room allotment                    
          </span></tr>
                  <tr>
                    <td><a href='tariff.php'><b><img src="images/suite_2.jpg" alt="View" width="48" height="48"><span class="style20">Tariff Plan</span></b></a>
          </tr>
        </table></th>
      </tr>
    </table>
  <br>
  <br>
    
  </div>
<center>
</center>
<br><br></strong>
<marquee scrollamount=4 onMouseOver="this.stop();" onMouseOut="this.start();">
Do feel free to contact us regarding any sort of technical queries, problems or suggestions. Mob:9000009999 E-mail:akshitha_1991@yahoo.in
</marquee>

</body>

</html>

