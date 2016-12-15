<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="validchangepass.js"></script>
<SCRIPT language=Javascript>
      <!--

function Current()
{
	var error="";
	theForm=document.forms['f'];
	var fn=theForm.curpass;
	
	if(fn.value=="")
	{		fn.style.background = 'Yellow';

		alert("You didnt enter the Current password.\n");
	}
	else
	{
		fn.style.background = 'White';
	}
}

function New()
{
	var error="";
	theForm=document.forms['f'];
	var fn=theForm.newpass;
	
	if(fn.value=="")
	{		fn.style.background = 'Yellow';

		alert("You didnt enter the New password.\n");
	}
			else if ((fn.value.length < 5) ) {
        fn.style.background = 'Yellow';
        alert("The password must be min 5 character long.\n");
    }

	else
	{
		fn.style.background = 'White';
	}
}

      //-->
   </SCRIPT>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SaiSuraj-Change password</title>
<style type="text/css">
body {
	background-image: url(img/divider.gif);
}
.style3 {
	font-size: 14px;
	color: #FFFFFF;
}
.style35 {font-size: 36px}
.style36 {color: #000000}
.style38 {
	color: #FFFF99;
	font-size: 24px;
}
.style40 {color: #FFFF99; font-weight: bold; font-size: 24px; }
.style41 {
	font-size: 18px;
	font-weight: bold;
}
</style>
</head>

<body>
<div align="center">
  <?php

error_reporting(0);
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
	    if(isset($_POST['submit']))
	{
        require('connect.php');
		//$username=$_POST["username"];
		$curpass=$_POST["curpass"];
		$newpass=$_POST["newpass"];
		$extract1=mysql_query("SELECT *FROM registration WHERE user='$username' ");
        $count=mysql_num_rows($extract1);

        if($count == 0)
        {
		echo "<script type=\"text/javascript\">
alert(\"Sorry user: $user not found...!!!\");
</script>";
        }
        else
        {
            $extract2=mysql_query("SELECT password FROM registration WHERE user='$username'");
            $row = mysql_fetch_assoc($extract2);
            $checkpass = $row['password'];

            if($curpass != $checkpass)
            {
			echo "<script type=\"text/javascript\">
alert(\"Password incorrect.Please enter correct password and try again!!!\");
</script>";

            }
            else
            {    $extract2=mysql_query("UPDATE registration SET password='$newpass' WHERE user='$username' ");
			echo "<script type=\"text/javascript\">
alert(\"Updated successfully\");
</script>";
					  }
        }}
    } else
    {	
        header("Location:login.php");
    }
	}
?>
  <span class="style3"><img src="images/logo4.png" alt="" width="60" height="50" /><span class="style35">HOTEL <span class="style36"><strong> SAI SURAJ </strong></span></span>  <span class="style35">INTERNATIONAL</span></span></div>
<table width="949" border="0" align="center" background="img/aa.png" bgcolor="#333333">
  <tr>
    <th height="272" colspan="4" scope="row"><img src="images/room2.jpg" alt="" width="900" height="258" border="10" style="border:thick; border-color:#000000" /></th>
  </tr>
  <tr>
    <th height="60" colspan="4" scope="row"><a href="index.html"><img src="img/home3.png" alt="" width="175" height="50"/></a><a href="aboutus.html"><img src="img/aboutus3.png" alt="" width="175" height="50" onclick="aboutus.html" /></a><a href="login.php"><img src="img/bk3.png" alt="" width="175" height="50" /></a><a href="tourplace.html"><img src="img/tplc3.png" alt="" width="175" height="50" /></a><a href="lmap.html"><img src="img/lmp3.png" alt="" width="175" height="50" /></a></th>
  </tr>
  <tr>
    <th height="60" colspan="4" scope="row"><marquee direction="left" behavior='alternate' onmouseover="this.stop()" onmouseout="this.start()" loop="-1" truespeed="truespeed">
          <img src="images/dine_3.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine.jpg" width="140" height="90" />&nbsp;<img src="images/lobby.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine_3.jpg" width="140" height="90" />&nbsp;<img src="images/lounge.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/suite_1.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine_2.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/hall.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/restaurant.jpg" alt="" width="140" height="90" />
          </marquee></th>
  </tr>
  <tr>
    <th width="205" height="357" scope="row"><a href="facilities.html"><img src="images/facilities.jpg" alt="" width="200" height="161" /></a><br />
    <br /><a href="tariff.php"><img src="images/tariff.jpg" width="200" height="72" /></a><br />
    <br /> <a href="lmap.html"><img src="images/location.jpg" width="200" height="73" /></a></th>
    <td width="734"><form action="" method="post" name="f" onsubmit="return validNewpassword(this);">
      <table width="645" height="60">
        <tr>
          <th scope="row"><a href="changepass.php"><img src="img/changepassword.png" width="110" height="50" /></a></th>
            <td width="104"><a href="changeprofile.php"><img src="img/changeprofile5.png" width="110" height="50" /></a></td>
            <td width="104"><a href="viewprofile.php"><img src="img/viewprofile5.png" width="110" height="50" /></a></td>
            <td width="92"><a href="viewbook.php"><img src="img/viewbooking51.png" alt="" width="110" height="50" /></a></td>
            <td width="104"><a href="res.php"><img src="img/reservation5.png" width="110" height="50" /></a></td>
            <td width="104"><a href="signout.php"><img src="img/logout5.png" width="100" height="50" /></a></td>
        </tr>
      </table>
            <br /><table width="513" border="0" align="left" cellpadding="5" cellspacing="5" bordercolor="#F0F0F0" bgcolor="#003300">
              <p align="center">Enter detils below to change your password</p>
              <p>&nbsp;</p>
              <tr>
                <td height="37"><span class="style40">Username:</span></td>
                <td width="148"><label>
                  <input type="text" name="user" value="<?php echo $username; ?>" onfocus="this.blur()"/>
                  </label>                </td>
              </tr>
              <tr>
                <td><span class="style40">Enter the current password:</span></td>
                <td><label>
                  <input type="password" name="curpass" onblur="Current()"/>
                </label></td>
              </tr>
              <tr>
                <td><span class="style40">Enter the new password:</span></td>
                <td><label>
                  <input type="password" name="newpass" onblur="New()"/>
                </label></td>
              </tr>
              <tr>
                <td height="45"><div align="center" class="style38">
                    <input type="reset" name="reset" id="reset" value="Reset" style="background-color:#ffff99; font-size:18px; color:#400000; border:groove"  />
                </div></td>
                <td><label></label>
                    <div align="center">
                      <input name="submit" type="submit" value="Submit" style="background-color:#ffff99; font-size:18px; color:#400000; border:groove" />
                  </div></td>
              </tr>
            </table>
    </form></td>
  </tr>
  </table>
<p align="center"><span class="style41"><a href="index.html"><font color="#FF0000">Home</font></a>&nbsp;&nbsp; &nbsp;| &nbsp; &nbsp;&nbsp;<a href="aboutus.html"><font color="#FF0000">About us</font></a>&nbsp;&nbsp; &nbsp;| &nbsp;&nbsp;&nbsp; <a href="login.php"><font color="#FF0000">Booking</font></a>&nbsp;&nbsp;&nbsp; | &nbsp; &nbsp;&nbsp;<a href="tourplace.html"><font color="#FF0000">Tourism places</font></a>&nbsp; &nbsp;&nbsp;| &nbsp;&nbsp; &nbsp;<a href="lmap.html"><font color="#FF0000">Location map</font></a>&nbsp;&nbsp;</span></p>
</body>
</html>
