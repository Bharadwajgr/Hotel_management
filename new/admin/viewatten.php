<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>admin-view attendance</title>
<script type="text/javascript" src="validateviewattn.js"></script>
<SCRIPT language=Javascript>
      <!--
    function atten()
{
	var error="";
	theForm=document.forms['f'];
	var fn=theForm.emp;
	
	if(fn.value=="")
	{
		alert("You didnt enter the Employee ID.\n");
		fn.style.background = 'Yellow';
	}
	
	if(error=="")
	{
		fn.style.background = 'White';
	}
}

      //-->
   </SCRIPT>

<style type="text/css">
<!--
.style2 {
	font-weight: bold;
	font-size: 36px;
	font-family: Georgia, "Times New Roman", Times, serif;
	color: #330000;
}
.style3 {
	color: #FFFF99;
	font-size: 24px;
	font-weight: bold;
}
.style18 {font-size: 36px;
	color: #FFFF99;
}
.style21 {color: #FFFF99;
	font-size: 36px;
}
.style22 {font-size: 14px;
	color: #CCCCCC;
}
.style19 {color: #FFFF99}
body {
	background-image: url(../img/aa.png);
}
-->
</style>
</head>

<body>
<div align="center"><span class="style22"><img src="images/logo4.png" alt="" width="60" height="50" /><span class="style21">HOTEL <strong>SAI SURAJ</strong></span> <span class="style18"> INTERNATIONAL</span></span></div>
<table width="928" height="561" align="center" background="images/divider.gif">
  <tr>
    <th height="188" scope="row"><marquee direction="left" behavior='alternate' onmouseover="this.stop()" onmouseout="this.start()" loop="-1" truespeed="truespeed">
      <img src="images/dine_3.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine.jpg" width="140" height="90" />&nbsp;<img src="images/lobby.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine_3.jpg" width="140" height="90" />&nbsp;<img src="images/lounge.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/suite_1.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine_2.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/hall.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/restaurant.jpg" alt="" width="140" height="90" />
    </marquee></th>
  </tr>
  <tr>
    <th height="52" scope="row"><div align="left"><a href="admincpanel.php"><img src="images/home1.png" alt="" width="100" height="50" /></a><a href="signout.php"><img src="images/signout1.png" alt="" width="100" height="50" /></a><a href="emp.php"><img src="images/back.png" alt="" width="100" height="50" /></a></div></th>
  </tr>
  <tr>
    <th height="305" scope="row"><span class="style19"><br />
      </span>
      <div align="center" class="style2 style19">Attendance status</div>
      <?php
session_start();

    if ( $_SESSION['username'])
    {  
		$user=$_SESSION['username'];
	  require('connect.php');
			$ex0=mysql_query("SELECT * FROM adminlogin WHERE user='$user'") or die(mysql_error());
							$count=mysql_num_rows($ex0);
				if($count)
				{								 		 
    			 echo "<br><center><strong>Welcome ".$_SESSION['username'].".<br /></center></strong>";			 
			
?>
      <form id="form1" name="f" method="post" action="" onsubmit="return validateatten(this);" >
        <div align="center"><span class="style3">Enter employee number:</span>
            <input type="text" name="emp" onblur="atten()"/>
          &nbsp;&nbsp;&nbsp;
          <input type="submit" name="submit" id="submit" style=" border:double; border-color:#000000;  background-color:#990033; font-size:18px; font-family:Georgia, 'Times New Roman', Times, serif" value="Submit" />
        </div>
      </form>
    <?php
					 if(isset($_POST['submit']))
{
			$emp=$_POST["emp"];
			$ex=mysql_query("SELECT * FROM attendance WHERE empid='$emp'") or die(mysql_error());
			$count=mysql_num_rows($ex);
				if($count)
				{
				 		 echo "<table align='center' border=1  cellspacing='0' style=' border:double; border-color:#000000; color:#FFFFFF; background-color:#003300; font-size:18px; font-family:Georgia, 'Times New Roman', Times, serif'>";
						 echo "<tr><td>Date</td><td>Present</td>";
					while($row=mysql_fetch_assoc($ex)){
				$date			=$row['date'];
				$present		=$row['present'];
				$name			=$row['name'];
	echo "<tr><td>$date</td><td>$present</td></tr>";
	}
	}
	else
	{echo "<script type=\"text/javascript\">
alert(\"Employee with empID $emp is not found\");
</script>";}
	}
	}
   else
    {	
        header("Location:index.php");
    }   

	}
?></th>
  </tr>
</table>
<br />
</body>
</html>