<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="validchangepass.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin | Change password</title>
<SCRIPT language=Javascript>
      <!--
    function Name()
{
	var error="";
	theForm=document.forms['f'];
	var fn=theForm.username;
	
	if(fn.value=="")
	{		fn.style.background = 'Yellow';

		alert("You didnt enter the Username.\n");
	}
	
	else
	{
		fn.style.background = 'White';
	}
}

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

<style type="text/css">
<!--
body {
font-family: Verdana, Arial, Helvetica, sans-serif;
	background-image: url(images/aa.png);
}
.style6 {
	color: #FFFFFF;
	font-size: 18px;
	font-weight: bold;
	font-style: italic;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.style9 {font-size: 24px}
.style10 {font-weight: bold; font-size: 36px; color: #400000;}
.style17 {color: #FFFF99;
	font-size: 36px;
}
.style18 {font-size: 36px;
	color: #FFFF99;
}
.style3 {font-size: 14px;
	color: #CCCCCC;
}
-->
</style>
</head>

<body>
 <div align="center"><span class="style3"><img src="images/logo4.png" alt="" width="60" height="50" /><span class="style17">HOTEL <strong>SAI SURAJ</strong></span> <span class="style18"> INTERNATIONAL</span></span></div>
<table width="881" height="469" align="center" background="images/divider.gif">
 <tr>
     <th width="873" height="188" scope="row"><marquee direction="left" behavior='alternate' onmouseover="this.stop()" onmouseout="this.start()" loop="-1" truespeed="truespeed">
       <img src="images/dine_3.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine.jpg" width="140" height="90" />&nbsp;<img src="images/lobby.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine_3.jpg" width="140" height="90" />&nbsp;<img src="images/lounge.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/suite_1.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine_2.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/hall.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/restaurant.jpg" alt="" width="140" height="90" />
     </marquee></th>
  </tr>
   <tr>
     <th height="52" scope="row"><div align="left"><a href="admincpanel.php"><img src="images/home1.png" alt="" width="100" height="50" /></a><a href="signout.php"><img src="images/signout1.png" alt="" width="100" height="50" /></a></div></th>
   </tr>
   <tr>
     <th height="217" scope="row"><h5 align="center" class="style10 style9">Changing Password
       <?php

error_reporting(0);
session_start();

    if ( $_SESSION['username'])
    {  
$user=$_SESSION['username'];
	  require('connect.php');
			$ex0=mysql_query("SELECT * FROM adminlogin WHERE user='$user'") or die(mysql_error());
							$count=mysql_num_rows($ex0);
				if($count)
				{								 		 
			 echo "<br><strong><center>Welcome ".$_SESSION['username'].".<br><br></strong></center>";

    if(isset($_POST['submit']))
	{
        require('connect.php');
		//$username=$_POST["username"];
		$curpass=$_POST["curpass"];
		$newpass=$_POST["newpass"];
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
            $extract2=mysql_query("SELECT pass FROM adminlogin WHERE user='$user'");
            $row = mysql_fetch_assoc($extract2);
            $checkpass = $row['pass'];

            if($curpass != $checkpass)
            {
			echo "<script type=\"text/javascript\">
alert(\"Password incorrect.Please enter correct password and try again!!!\");
</script>";

            }
            else
            {    $extract2=mysql_query("UPDATE adminlogin SET pass='$newpass' WHERE user='$username' ");
			
header("Location:admincpanel.php");

			 }
        }
    }
	}
   else
    {	
        header("Location:index.php");
    }   

}	
?>
       </h5>
       </h5>
       <table width="761" height="271" align="center" background="images/divider.gif">
         <tr>
           <th width="236" height="265" scope="row"><img src="images/8617209.jpg" alt="" width="200" height="263" /></th>
           <td width="513"><table width="506" height="247" border="0" cellpadding="5" cellspacing="5">
               <p align="center">Enter detils below to change your password</p>
             <p>&nbsp;</p>
             <form action="" method="post" name="f" id="f" onsubmit="return validChangepassword(this);" >
                 <tr>
                   <td width="327"><div align="left"><span class="style6">Enter the Username:</span></div></td>
                   <td width="144"><label>
                     <input type="text" name="username" id="username" value="<?php echo $user; ?>" onfocus="this.blur()"/>
                     </label>                   </td>
                 </tr>
                 <tr>
                   <td><div align="left"><span class="style6">Enter the current password:</span></div></td>
                   <td><label>
                     <input type="password" name="curpass"	onblur="Current()" />
                   </label></td>
                 </tr>
                 <tr>
                   <td><div align="left"><span class="style6">Enter the new password:</span></div></td>
                   <td colspan="2"><label>
                     <input type="password" name="newpass" onblur="New()"/>
                   </label></td>
                 </tr>
                 <tr>
                   <td height="42">
                   <div align="left"></div>                   <label></label></td>
                 </tr>
                 <tr>
                   <td height="28"><input name="reset" type="reset" id="reset" " style="background-color:#000000; color:#FFFFFF; border:double " value="       Reset      " /></td>
                   <td height="28" colspan="2"><input name="submit" type="submit" " style="background-color:#000000; color:#FFFFFF; border:double " value="      Submit        " /></td>
                 </tr>
               </form>
           </table></td>
         </tr>
       </table></th>
   </tr>
 </table>
<h5 align="center" class="style10">&nbsp;</h5>
<br />
<br />
</body>
</html>
