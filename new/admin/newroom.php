<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="validnewroom.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin | Add room</title>
<style type="text/css">
<!--
body {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	background-image: url(images/aa.png);
}
.style1 {color: #FFFFFF}
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
-->
</style></head>

<body>
<div align="center"><span class="style3"><img src="images/logo4.png" alt="" width="60" height="50" /><span class="style17">HOTEL <strong>SAI SURAJ</strong></span> <span class="style18"> INTERNATIONAL</span></span></div>
<table width="928" height="576" align="center" background="images/divider.gif">
  <tr>
    <th height="188" scope="row"><marquee direction="left" behavior='alternate' onmouseover="this.stop()" onmouseout="this.start()" loop="-1" truespeed="truespeed">
      <img src="images/dine_3.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine.jpg" width="140" height="90" />&nbsp;<img src="images/lobby.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine_3.jpg" width="140" height="90" />&nbsp;<img src="images/lounge.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/suite_1.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine_2.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/hall.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/restaurant.jpg" alt="" width="140" height="90" />
    </marquee></th>
  </tr>
  <tr>
    <th height="52" scope="row"><div align="left"><a href="admincpanel.php"><img src="images/home1.png" alt="" width="100" height="50" /></a><a href="signout.php"><img src="images/signout1.png" alt="" width="100" height="50" /></a><a href="room.php"><img src="images/back.png" alt="" width="100" height="50" /></a></div></th>
  </tr>
  <tr>
    <th height="322" scope="row"><?php
session_start();

    if ( $_SESSION['username'])
    {  
		$user=$_SESSION['username'];
	  require('connect.php');
			$ex0=mysql_query("SELECT * FROM adminlogin WHERE user='$user'") or die(mysql_error());
							$count=mysql_num_rows($ex0);
				if($count)
				{								 		 
			 echo "<br><strong><center>Welcome ".$_SESSION['username'].".<br> <br>";
	if(isset($_POST['submit']))
{
$roomno=$_POST["roomno"];
$type=$_POST["type"];
$option=$_POST["option"];
    $extract1=mysql_query("SELECT * FROM roomtypes WHERE roomno='$roomno' ");
        $count=mysql_num_rows($extract1);

        if($count == 0)
        {
			if($type=='suite' && $option=='Non ac' )
			{	$option='Ac';
			echo "<script type=\"text/javascript\">
alert(\"We don't have NON-AC option in suite. So your suite room's option will be saved as AC\");
</script>";
			}

$sql=mysql_query("INSERT INTO roomtypes VALUES('$roomno','$type','$option')") or die(mysql_error());
echo "<script type=\"text/javascript\">
alert(\"Room is added\");
</script>";
	}
	else
	{echo "<script type=\"text/javascript\">
alert(\"Room already present\");
</script>";

	}
}
}
   else
    {	
        header("Location:index.php");
    }   
}
?>
      <form action="" method="post" name="f" id="f" onsubmit="return validateRoom(this)">
        <table width="450" height="188" align="center" background="images/divider.gif">
          <tr>
            <th colspan="2" scope="row"><span class="style1">NEW ROOMS</span></th>
          </tr>
          <tr>
            <th scope="row"><span class="style1">Room No. :</span></th>
            <td><input name="roomno" type="text" id="roomno" onblur="checkroomno()"/></td>
          </tr>
          <tr>
            <th height="39" scope="row"><span class="style1">Room Type :</span></th>
            <td><span class="style1">
              <select name="type" id="type" onblur="checktype()">
                <option value="single">single</option>
                <option value="deluxe">deluxe</option>
                <option value="suite">suite</option>
                <option value="default" selected="selected">choose</option>
              </select>
            </span> </td>
          </tr>
          <tr>
            <th height="52" scope="row"><span class="style1">Option(AC/Non AC)</span></th>
            <td><span class="style1">
              <select name="option" id="option" onblur="checkroomoption()">
                <option value="Ac">AC</option>
                <option value="Non ac">Non AC </option>
                <option value="default" selected="selected">choose</option>
              </select>
            </span></td>
          </tr>
          <tr>
            <th scope="row"><input name="Reset" type="reset" id="button" style=" border:double; border-color:#000000; color:#FFFFFF; background-color:#003300; font-size:18px; font-family:Georgia, 'Times New Roman', Times, serif" value="Reset" /></th>
            <td><input name="submit" type="submit" id="submit" value="Submit" style=" border:double; border-color:#000000; color:#FFFFFF; background-color:#003300; font-size:18px; font-family:Georgia, 'Times New Roman', Times, serif" /></td>
          </tr>
        </table>
    </form></th>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
