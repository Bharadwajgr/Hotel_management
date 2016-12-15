<html>

<head>
<script type="text/javascript" src="validadminlogin.js"></script>

<title>Admin | Home</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<style type="text/css">
 body{
	background-color:#FFFFFF;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	background-image: url(images/divider.gif);
 }
.style5 {color: #003300; font-weight: bold; }
body,td,th {
	color: #FFFFFF;
}
.style7 {color: #000000}
.style8 {color: #000000; font-weight: bold; }
.style9 {color: #003300}
.style3 {font-size: 14px;
	color: #CCCCCC;
}
.style6 {font-size: 12px;
	color: #FFFF99;
}
.style10 {color: #FF0000;
	font-weight: bold;
	font-size: 36px;
}
.style17 {	color: #FFFF99;
	font-size: 36px;
}
.style18 {	font-size: 36px;
	color: #FFFF99;
}
.style19 {	color: #FFFF99;
	font-weight: bold;
	font-size: 36px;
	font-style: italic;
}
.style20 {color: #FFFF99}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>



<body>

    <div align="center">
      <p><span class="style3"><img src="images/logo4.png" alt="" width="60" height="50" /><span class="style17">HOTEL <strong>SAI SURAJ</strong></span> <span class="style18"> INTERNATIONAL</span></span><span class="style8"><br>
        
        
        </span></p>
      <table width="858" height="450" background="images/divider.gif">
        <tr>
          <th height="188" scope="row"><marquee direction="left" behavior='alternate' onMouseOver="this.stop()" onMouseOut="this.start()" loop="-1" truespeed="truespeed">
            <img src="images/dine_3.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine.jpg" width="140" height="90" />&nbsp;<img src="images/lobby.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine_3.jpg" width="140" height="90" />&nbsp;<img src="images/lounge.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/suite_1.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine_2.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/hall.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/restaurant.jpg" alt="" width="140" height="90" />
          </marquee></th>
        </tr>
        <tr>
          <th height="33" scope="row">&nbsp;</th>
        </tr>
        <tr>
          <th height="217" scope="row"><table width="805" height="212" align="center" background="images/aa.png">
            <tr>
              <th width="420" height="202" scope="row"><img src="images/lobby.jpg" alt="" width="400" height="200"></th>
              <td width="556"><span class="style8">
                <?php
   error_reporting(0);
    session_start();
    if(isset($_SESSION['username']))
    {
	$user=$_SESSION['username'];
	  require('connect.php');
			$ex0=mysql_query("SELECT * FROM adminlogin WHERE user='$user'") or die(mysql_error());
							$count=mysql_num_rows($ex0);
				if($count)
				{								 		 
    			 echo "<br><center><strong>Welcome ".$_SESSION['username'].".<br /></center></strong>";			 

     header("Location:admincpanel.php");
    }

}
    require('connect.php');

    if(isset($_POST['submit']))
    {

        $user=$_POST['username'];
        //$user=mysql_real_escape_string($user);

        //$password=md5($_POST['password']);
		$password=$_POST['password'];


        $extract1=mysql_query("SELECT *FROM adminlogin WHERE user='$user' ");
        $count=mysql_num_rows($extract1);

        if($count == 0)
        {
		echo "<script type=\"text/javascript\">
alert(\"Sorry user: $user not found...!!!\");
</script>";
        }
        else
        {
            $extract2=mysql_query("SELECT * FROM adminlogin WHERE user='$user'");
            $row = mysql_fetch_assoc($extract2);
            $checkpass = $row['pass'];
		
            if($password != $checkpass)
            {
				echo "<script type=\"text/javascript\">
alert(\"Password incorrect.Please enter correct password and try again!!!\");
</script>";
            }
            else
            {   $_SESSION['username']=$user;
                header("Location:admincpanel.php"); }
        }
    }
?>
                </span>
                <form action="" method="post" name="f" onSubmit="return validateLogin(this);">
                <table width="361" height="158" border=0 align="right" cellpadding=5 cellspacing=5 background="images/aa.png">
                  <tr>
                    <td width="2">&nbsp;</td>
                    <td width="130"><span class="style5">User Name:</span></td>
                    <td width="144"><input type="text" name="username" onBlur="checkname()">
                    </td>
                    <td width="20">&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td><strong><span class="style9">Password:</span></strong></td>
                    <td><input type="password" name="password" maxlength='15' onBlur="pass()"></td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td><input type="reset" value="Reset" name="reset" onClick="reservation.php" id="reset" style=' border:double; border-color:#000000; color:#FFFFFF; background-color:#003300; font-size:18px; font-family:Georgia, 'Times New Roman', Times, serif'></td>
                    <td><input type="submit" value="Submit" name="submit" onClick="reservation.php" style=' border:double; border-color:#000000; color:#FFFFFF; background-color:#003300; font-size:18px; font-family:Georgia, 'Times New Roman', Times, serif'></td>
                    <td>&nbsp;</td>
                  </tr>
              </table></form></td>
            </tr>
          </table></th>
        </tr>
      </table>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    </div>
    <br>
<br><marquee scrollamount=4 onMouseOver="this.stop();" onMouseOut="this.start();"></marquee>
</body>
</html>