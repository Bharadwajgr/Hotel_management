<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="validlogin.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SaiSuraj-Login</title>
<style type="text/css">
.style3 {font-size: xx-large}
body {font-family: Verdana, Arial, Helvetica, sans-serif;
	background-image: url(img/divider.gif);
}
.style15 {font-size: 18px}
.style17 {
	font-size: 36px;
	font-weight: bold;
}
.style20 {	font-size: 14px;
	color: #CCCCCC;
}
.style23 {color: #FFFF99; font-size: 36px; font-weight: bold; }
.style25 {font-size: 24px}
.style30 {color: #FFFFFF}
.style31 {
	color: #FFFF99
}
.style33 {font-size: 24px; color: #FFFFFF; }
.style34 {color: #FFFF99;
	font-size: 36px;
}
.style18 {font-size: 36px;
	color: #FFFF99;
}
.style35 {
	color: #000000;
	font-weight: bold;
}
</style>
</head>

<body>
<div align="center">
  <?php
   error_reporting(0);
    session_start();
    if(isset($_SESSION['username']))
    {
	$username=$_SESSION['username'];
	  require('connect.php');
			$ex0=mysql_query("SELECT * FROM registration WHERE user='$username'") or die(mysql_error());
							$count=mysql_num_rows($ex0);
				if($count)
				{			    
    			 echo "<br><center><strong>Welcome ".$_SESSION['username'].".<br /></center></strong>";			 

     header("Location:login2.html");
    }
}

    require('connect.php');

    if(isset($_POST['submit']))
    {

        $user=$_POST['username'];
        //$user=mysql_real_escape_string($user);

        //$password=md5($_POST['password']);
		$password=$_POST['password'];


        $extract1=mysql_query("SELECT *FROM registration WHERE user='$user' ");
        $count=mysql_num_rows($extract1);

        if($count == 0)
        {echo "<script type=\"text/javascript\">
alert(\"Sorry user: $user not found...!!! \");
</script>";
           
        }
        else
        {
            $extract2=mysql_query("SELECT password FROM registration WHERE user='$user'");
            $row = mysql_fetch_assoc($extract2);
            $checkpass = $row['password'];

            if($password != $checkpass)
            {
			echo "<script type=\"text/javascript\">
alert(\"Password incorrect.Please enter correct password and try again!!!\");
</script>";
            }
            else
            {   $_SESSION['username']=$user;
                header("Location:login2.html"); }
        }
    }
?>
  <span class="style20"><img src="images/logo4.png" alt="" width="60" height="50" /><span class="style34">HOTEL <span class="style35">  SAI SURAJ  </span></span> <span class="style18"> INTERNATIONAL</span></span></div>
<table width="934" border="0" align="center" background="img/aa.png" bgcolor="#333333">
  <tr>
    <th height="272" colspan="6" scope="row"><img src="images/room2.jpg" alt="" width="900" height="258" border="10" style="border:thick; border-color:#000000" /></th>
  </tr>
  <tr>
    <th height="60" colspan="6" scope="row"><a href="index.html"><img src="img/home3.png" alt="" width="150" height="50"/></a><a href="aboutus.html"><img src="img/aboutus3.png" alt="" width="150" height="50" onclick="aboutus.html" /></a><a href="login.php"><img src="img/bk3.png" alt="" width="150" height="50" /></a><a href="tourplace.html"><img src="img/tplc3.png" alt="" width="150" height="50" /></a><a href="lmap.html"><img src="img/lmp3.png" alt="" width="150" height="50" /></a><a href="contact.php"><img src="img/enq.png" alt="" width="150" height="50" /></a></th>
  </tr>
  <tr>
    <th height="60" colspan="6" scope="row"><marquee direction="left" behavior='alternate' onmouseover="this.stop()" onmouseout="this.start()" loop="-1" truespeed="truespeed">
          <img src="images/dine_3.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine.jpg" width="140" height="90" />&nbsp;<img src="images/lobby.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine_3.jpg" width="140" height="90" />&nbsp;<img src="images/lounge.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/suite_1.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine_2.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/hall.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/restaurant.jpg" alt="" width="140" height="90" />
          </marquee></th>
  </tr>
  <tr>
    <th width="277" height="356" scope="row"><a href="facilities.html"><img src="images/facilities.jpg" alt="" width="226" height="161" /></a><br />
    <br /><a href="tariff.php"><img src="images/tariff.jpg" width="226" height="72" /></a><br /><br /> <a href="lmap.html"><img src="images/location.jpg" width="226" height="73" /></a></th>
   
    <td width="647"><form action="" method="post" name="f" onsubmit="return validateLogin(this);">
      <table width="446" height="260" align="left" background="img/bg1.jpg">
          <tr>
            <th width="120" bgcolor="#330033" scope="row"></th>
          </tr>
          <tr bordercolor="#E0DFE3" bgcolor="#003300">
            <th height="57" colspan="3" scope="row"><span class="style30">Dont have a Saisuraj account? </span><a href="registration.php" class="style33" >Register Now</a></th>
          </tr>
          <tr bgcolor="#993300">
            <th height="57" colspan="3" scope="row"><div align="center" class="style31"><span class="style17 "> Sai Suraj Login</span></div></th>
          </tr>
          <tr>
            <td height="59" colspan="2" class="style23 style25">User Name:</td>
            <td width="250"><input name="username" type="text" size="25" onblur="checkname()"/>            </td>
          </tr>
          <tr>
            <td height="49" colspan="2"><span class="style23 style25">Password:</span></td>
            <td><input name="password" type="password" size="25" onblur="pass()"/>             </td>
          </tr>
          <tr>
            <td colspan="2"><div align="center">
              <input type="reset" name="reset" id="reset" style="background-color:#ffff99; font-size:18px; color:#400000; border:groove" value="Reset" />
            </div></td>
            <td><label> </label>
                <div align="center">
                  <input type="submit" value="Submit" name="submit" style="background-color:#ffff99; border-left-style:double; font-size:18px;color:#400000; border:groove" />
              </div>              </td>
          </tr>
          <tr bgcolor="#003300">
            <td height="41" colspan="3"><span class="style30 style3 style8"><em><a href="fpass.php" ><font color="#FFFFFF">Forgot Password?</font> </a></em></span>               </td>
          </tr>
      </table>
    </form></td>
  </tr></table>
<p align="center"><span class="style15"><a href="index.html"><font color="#FF0000">Home</font></a>&nbsp;&nbsp; &nbsp;| &nbsp; &nbsp;&nbsp;<a href="aboutus.html"><font color="#FF0000">About us</font></a>&nbsp;&nbsp; &nbsp;| &nbsp;&nbsp;&nbsp; <a href="login.php"><font color="#FF0000">Booking</font></a>&nbsp;&nbsp;&nbsp; | &nbsp; &nbsp;&nbsp;<a href="tourplace.html"><font color="#FF0000">Tourism places</font></a>&nbsp; &nbsp;&nbsp;| &nbsp;&nbsp; &nbsp;<a href="lmap.html"><font color="#FF0000">Location map</font></a>&nbsp;&nbsp; &nbsp;| &nbsp; &nbsp;&nbsp;<a href="contact.php"><font color="#FF0000">Enquiry</font></a>&nbsp;&nbsp; | &nbsp;</span></p>
</body>
</html>
