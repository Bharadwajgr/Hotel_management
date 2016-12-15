<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="javascript" src="validaterescon.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SaiSuraj-Reservation</title>
<style type="text/css">body {
font-family: Verdana, Arial, Helvetica, sans-serif;
	background-image: url(img/divider.gif);
}
.style15 {font-size: 18px}
.style20 {	font-size: 14px;
	color: #CCCCCC;
}
.style18 {font-size: 36px;
	color: #FFFF99;
}
.style34 {color: #FFFF99;
	font-size: 36px;
}
</style>
</head>

<body>
<div align="center"><span class="style20"><img src="images/logo4.png" alt="" width="60" height="50" /><span class="style34">HOTEL <strong> SAI SURAJ </strong></span> <span class="style18"> INTERNATIONAL</span></span>
</div>
<table width="852" height="1014" border="0" align="center" background="img/aa.png" bgcolor="#333333">
  <tr>
    <th height="302" colspan="6" scope="row"><img src="images/room2.jpg" alt="" width="864" height="309" /></th>
  </tr>
  <tr>
    <th height="60" colspan="6" scope="row"><a href="index.html"><img src="img/home3.png" alt="" width="175" height="50"/></a><a href="aboutus.html"><img src="img/aboutus3.png" alt="" width="175" height="50" onclick="aboutus.html" /></a><a href="login.php"><img src="img/bk3.png" alt="" width="175" height="50" /></a><a href="tourplace.html"><img src="img/tplc3.png" alt="" width="175" height="50" /></a><a href="lmap.html"><img src="img/lmp3.png" alt="" width="150" height="50" /></a></th>
  </tr>
  <tr>
    <th height="60" colspan="6" scope="row"><marquee direction="left" behavior='alternate' onmouseover="this.stop()" onmouseout="this.start()" loop="-1" truespeed="truespeed">
      <img src="images/dine_3.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine.jpg" width="140" height="90" />&nbsp;<img src="images/lobby.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine_3.jpg" width="140" height="90" />&nbsp;<img src="images/lounge.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/suite_1.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine_2.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/hall.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/restaurant.jpg" alt="" width="140" height="90" />
    </marquee></th>
  </tr>
  <tr>
    <th height="60" colspan="14" scope="row"><a href="changepass.php"><img src="img/changepassword.png" width="110" height="50" /></a><a href="changeprofile.php"><img src="img/changeprofile5.png" width="110" height="50" /></a><a href="viewprofile.php"><img src="img/viewprofile5.png" width="110" height="50" /></a><a href="viewbook.php"><img src="img/viewbooking51.png" alt="" width="110" height="50" /></a><a href="res.php"><img src="img/reservation5.png" width="110" height="50" /></a><a href="signout.php"><img src="img/logout5.png" width="100" height="50" /></a>      </th>
  </tr>
  
  <th width="233" height="381" scope="row"><a href="facilities.html"><img src="images/facilities.jpg" alt="" width="226" height="161" /></a><br />
          <br />
    <a href="tariff.php"><img src="images/tariff.jpg" width="226" height="72" /></a><br />
    <br />
        <a href="lmap.html"><img src="images/location.jpg" width="226" height="73" /></a></th>
      <td width="609"><table border="0" cellpadding="5" cellspacing="5" background="img/bg1.jpg" align="center" style="color:#FFFFFF">
          <?php
		session_start();
		    if ( $_SESSION['username'])
    {
	 $username=$_SESSION['username'];
	  require('connect.php');
			$ex0=mysql_query("SELECT * FROM registration WHERE user='$username'") or die(mysql_error());
							$count=mysql_num_rows($ex0);
				if($count)
				{			    
    			 echo "<br><center><strong>Welcome ".$_SESSION['username'].".<br /></center></strong>";			 

	if(isset($_POST['book']))
		{
			$username	=$_POST["username"];
			$cindate	=$_POST["cindate"];
			$coutdate	=$_POST["coutdate"];
			$rooms		=$_POST["roomno"];
			$perroom	=$_POST["rateperroom"];
			$ndays		=$_POST["ndays"];
			$ct			=$_POST["ct"];
			$type		=$_POST["type"];
			$optn		=$_POST["optn"];
			$rate		=$_POST['rate'];
			$transid	=strtotime(date("Y-m-d G:i:s"));

?>
          <form action='confirmed.php' name='rescon' method='post' onsubmit="return validateRes(this)">
            <tr>
              <td><input type='hidden' name='roomno' value='<?php echo $rooms?>' /></td>
            </tr>
            <tr>
              <td><input type='hidden' name='cindate' value='<?php echo $cindate?>' /></td>
            </tr>
            <tr>
              <td><input type='hidden' name='coutdate' value='<?php echo $coutdate?>' /></td>
            </tr>
            <tr>
              <td><input type='hidden' name='ct' value='<?php echo $ct?>' /></td>
            </tr>
            <tr>
              <td>Username</td>
              <td><input type='text' name='username' value='<?php echo $username?>' onfocus='this.blur()' /></td>
            </tr>
            <tr>
              <td>Bank Name</td>
              <td><input type='text' name='bankname' id="bankname" onblur="checkbankname()" /></td>
            </tr>
            <tr>
              <td>Card No</td>
              <td><input type='text' name='cardno' id="cardno" onblur="checkcardno()" /></td>
            </tr>
            <tr>
              <td>Transaction ID</td>
              <td><input type='text' name='transid' value='<?php echo $transid?>' onfocus='this.blur()' /></td>
            </tr>
            <tr>
              <td>Password</td>
              <td><input type='password' name='password' id="password" onblur="checkpass()" />
                  <input type='hidden' name='amount' value='<?php echo $rate?>' /></td>
              <input type='hidden' name='optn' value='<?php echo $optn?>' />
              <input type='hidden' name='ndays' value='<?php echo $ndays?>' />
              <input type='hidden' name='type' value='<?php echo $type?>' />
              <input type='hidden' name='perroom' value='<?php echo $perroom?>' />
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input type='submit' name='submit' value='Confirm Booking And Pay' style="background-color:#ffff99; border-left-style:double; font-size:18px;color:#400000; border:groove"s /></td>
            </tr>
          </form>
        <?php			  
		}
		}
		 else
    {	
        header("Location:login.php");
    }
		}?>
      </table></td>
  </tr>
</table>
<p align="center"><span class="style15"><a href="index.html"><font color="#FF0000">Home</font></a>&nbsp;&nbsp; &nbsp;| &nbsp; &nbsp;&nbsp;<a href="aboutus.html"><font color="#FF0000">About us</font></a>&nbsp;&nbsp; &nbsp;| &nbsp;&nbsp;&nbsp; <a href="login.php"><font color="#FF0000">Booking</font></a>&nbsp; | &nbsp; &nbsp;&nbsp;<a href="tourplace.html"><font color="#FF0000">Tourism places</font></a>&nbsp; &nbsp;&nbsp;| &nbsp;&nbsp; &nbsp;<a href="lmap.html"><font color="#FF0000">Location map</font></a>&nbsp;&nbsp;&nbsp;</span></p>
</body>
</html>
