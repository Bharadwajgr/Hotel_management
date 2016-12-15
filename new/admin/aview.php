<html>
<head>
<script type="text/javascript" src="validedit.js"></script>
<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>

<title>Admin | View Employees</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<style type="text/css">
 body{
	font-family: Verdana, Arial, Helvetica, sans-serif;
	background-image: url(images/aa.png);
 }
.style3 {font-size: 14px;
	color: #CCCCCC;
}
.style6 {	font-size: 18px;
	color: #FFFF99;
	font-weight: bold;
}
.style7 {color: #FF0000;
	font-weight: bold;
	font-size: 36px;
}
.style8 {	font-size: 16px;
	font-weight: bold;
}
.style10 {
	color: #FFFF99;
	font-size: 24px;
}
.style17 {color: #FFFF99;
	font-size: 36px;
}
.style18 {font-size: 36px;
	color: #FFFF99;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<body>
<center>
</center>
<div align="center"><span class="style3"><img src="images/logo4.png" alt="" width="60" height="50" /><span class="style17">HOTEL <strong>SAI SURAJ</strong></span> <span class="style18"> INTERNATIONAL</span></span></div>
<table width="858" height="469" align="center" background="images/divider.gif">
  <tr>
    <th height="188" scope="row"><marquee direction="left" behavior='alternate' onMouseOver="this.stop()" onMouseOut="this.start()" loop="-1" truespeed="truespeed">
      <img src="images/dine_3.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine.jpg" width="140" height="90" />&nbsp;<img src="images/lobby.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine_3.jpg" width="140" height="90" />&nbsp;<img src="images/lounge.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/suite_1.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine_2.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/hall.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/restaurant.jpg" alt="" width="140" height="90" />
    </marquee></th>
  </tr>
  <tr>
    <th height="52" scope="row"><div align="left"><a href="admincpanel.php"><img src="images/home1.png" alt="" width="100" height="50" /></a><a href="signout.php"><img src="images/signout1.png" alt="" width="100" height="50" /></a><a href="emp.php"><img src="images/back.png" alt="" width="100" height="50" /></a></div></th>
  </tr>
  <tr>
    <th height="217" scope="row"><?php
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
    		 echo "<br><center>Welcome ".$_SESSION['username'].".<br><br/></center>";
			 //******************************Updating all the values****************************
			 
			 if(isset($_POST['update']))
			 {
			 	$name		=$_POST['name'];
				$phone		=$_POST['phone'];
				$address	=$_POST['address'];
				$category	=$_POST['category'];
				$empid		=$_POST['empid'];
				$email		=$_POST['email'];				
				$join		=$_POST['join'];
				$file		=$_FILES["imagepath"]['name'];
				
				if($file)
				{
				$imagepath="upload/".$_FILES["imagepath"]['name'];
				move_uploaded_file($_FILES["imagepath"]["tmp_name"],$imagepath);
				}
				else
				{$imagepath		=$_POST['imagehidden'];
				}
				//moving file to server to our specified location
			move_uploaded_file($_FILES["photo"]["tmp_name"],$imagepath);
			$ex=mysql_query("UPDATE employee SET name='$name', category='$category', phone='$phone', email='$email' , address='$address', joiningdate='$join', photo='$imagepath' WHERE empid='$empid'") or die(mysql_error());
		echo "<script type=\"text/javascript\">
alert(\"Employee updated successfully\");
</script>";
			$ex=mysql_query("SELECT * FROM employee WHERE empid='$empid'") or die(mysql_error());
			$count=mysql_num_rows($ex);
			if($count==1)
             {	$row 	= mysql_fetch_assoc($ex);

				$empid		=$row['empid'];
				$name		=$row['name'];
				$dob		=$row['dob'];
				$category	=$row['category'];
				$phone		=$row['phone'];
				$email		=$row['email'];
				$address	=$row['address'];
				$join		=$row['joiningdate'];
				$imagepath	=$row['photo'];
		    	echo "<table align='center' border='1' bgcolor='#ffffff' style=' border:double; border-color:#000000; color:#FFFFFF; background-color:#003300; font-size:18px; font-family:Georgia, 'Times New Roman', Times, serif'><tr align='center'><td><img src='$imagepath' height='110' width='100' /> </td><td>$empid</td><td>$name</td><td>$dob</td><td>$category</td><td>$phone</td><td>$email</td><td>$address</td><td>$join</td><td><a href='aview.php?empid=$empid&edit=yes'>Edit</a> <a href='aview.php?empid=$empid&delete=yes'><img src='../images/b_drop.png'></td></tr></table>";
			
			}
			 }//close if set Update
			 //ends updating  values
	
			 //******************************Ends Updating all the values***********************
			 if(!isset($_POST['update']) && !isset($_GET['empid']))
			 {
			echo "<table align='center' border=1 bgcolor='white' cellspacing='0' style=' border:double; border-color:#000000; color:#FFFFFF; background-color:#003300; font-size:18px; font-family:Georgia, 'Times New Roman', Times, serif'>";
			$ex=mysql_query("SELECT * FROM employee") or die(mysql_error());
			$count=mysql_num_rows($ex);
				if($count)
				{echo "<tr align='center'><td>Photo</td><td>Emp ID</td><td>Name</td><td>D.O.B</td><td>Category</td><td>Phone</td><td>Email</td><td>Address</td><td>Joining Date</td><td>Option</tr>";
				while($row=mysql_fetch_assoc($ex)){
				$empid		=$row['empid'];
				$name		=$row['name'];
				$dob		=$row['dob'];
				$category	=$row['category'];
				$phone		=$row['phone'];
				$email		=$row['email'];
				$address	=$row['address'];
				$join		=$row['joiningdate'];
				$imagepath	=$row['photo'];
		    	echo "<tr align='center'><td><img src='$imagepath' height='110' width='100' /> </td><td>$empid</td><td>$name</td><td>$dob</td><td>$category</td><td>$phone</td><td>$email</td><td>$address</td><td>$join</td><td><a href='aview.php?empid=$empid&edit=yes'><img src='../images/edit.png' height='20' width='20'></a> <a href='aview.php?empid=$empid&delete=yes'><img src='../images/b_drop.png'></td></tr>";}//close while
				}//close if count 
				
							 }//closing empid and update check
			 ///////////*******Deleting an entry************
			  if(isset($_GET['empid']) && isset($_GET['delete']))
			 {
			$empid	 = $_GET['empid'];
			echo "<table align='center' border=1 bgcolor='white' cellspacing='0' style='border:double; border-color:#000000; color:#FFFFFF; background-color:#003300; font-size:18px; font-family:Georgia, 'Times New Roman', Times, serif'>";
			$ex=mysql_query("DELETE FROM employee WHERE empid='$empid'") or die(mysql_error());
			echo "<script type=\"text/javascript\">
alert(\"Employeee with Empid $empid Deleted\");
</script>";
    header('Refresh:3;Location:emp.php');

			echo "</table>";	
			}//closing empid and update check
			 
			 ////********ends deleting an entry***************
			 
			 ///////*****************Checking if edit has been clicked*********************
			 if(isset($_GET['empid']) && isset($_GET['edit']) && !isset($_POST['update']))
			 {	
			 	$empid	 = $_GET['empid'];
				$extract2= mysql_query("SELECT * FROM employee WHERE empid='$empid'");
             	$count	 = mysql_num_rows($extract2);
       			if($count==0)
				{echo "<script type=\"text/javascript\">
alert(\"No employee with $empid found\");
</script>";
    header('Location:emp.php');

}          
      			else
               {$row 		=mysql_fetch_assoc($extract2);
    	       $empid		=$row['empid'];
				$name		=$row['name'];
				$dob		=$row['dob'];
				$category	=$row['category'];
				$phone		=$row['phone'];
				$email		=$row['email'];
				$address	=$row['address'];
				$join		=$row['joiningdate'];
				$imagepath	=$row['photo'];
				echo "<table align='center' border=1  cellspacing='0' style=' border:double; border-color:#000000; color:#FFFFFF; background-color:#003300; font-size:18px; font-family:Georgia, 'Times New Roman', Times, serif'>";
				echo "<form action='' enctype='multipart/form-data' method='post' name='f' onsubmit='return validEditing(this);' >";
				echo "<tr><td>Emp ID</td><td><input type='text' name='empid' value='$empid' onFocus='this.blur()'></td></tr>
				<tr><td>Name</td><td><input type='text' name='name' value='$name' onblur='checkname()'></td></tr>
					 <tr><td>D.O.B</td><td><input type='text' name='dob' value='$dob' onFocus='this.blur()'></td></tr>
					  <tr><td>Category</td><td><select name='category' size='1' id='select' onblur='checkcat()'>
                          <option value='$category'>$category</option>
                          <option value='manager'>manager</option>
                          <option value='supervisor'>supervisor</option>
                          <option value='vegchef'>vegchef</option>
                          <option value='nonvegchef'>nonvegchef</option>
                          <option value='cook'>cook</option>
                          <option value='homekeeping'>homekeeping</option>
                          <option value='waiter'>waiter</option>
                          <option value='generalmanager'>generalmanager</option>
                          <option value='security'>security</option>
                          <option value='storekeeper'>storekeeper</option>
                          <option value='receptionist'>receptionist</option>
                          <option value='electrician'>electrician</option>
                          <option value='accountant'>accountant</option>
                        </select></td></tr>
					  <tr><td>Phone</td><td><input type='text' name='phone' value='$phone' onblur='checkphone()' onkeypress='return isNumberKey(event)'></td></tr>
					  <tr><td>Email</td><td><input type='text' name='email' value='$email' onblur='checkemail()'></td></tr>
					  <tr><td>Address</td><td><textarea name='address' onblur='checkadd()'>$address</textarea></td></tr>
					  <tr><td>Joining Date</td><td><input type='text' name='join' value='$join' onblur='checkjoindate()' onFocus='this.blur()'></td></tr>
					  <tr><td><img src='$imagepath' height='100' width='100' ></td><td><input type='file' name='imagepath'></td></tr>
					  <tr><td><input type='hidden' name='imagehidden' value='$imagepath'><input type='hidden' name='id' value='$id'></td><td><input type='submit' name='update' 	value='Update'></td></tr>";
				echo "</table>";
				echo "</form>";}
	 }
	 ///////////////////////****************Ends the editing stuff*********************
   }
   
   else
    {	
        header("Location:index.php");
    } }// End of if session
 
?></th>
  </tr>
</table>
<p align="left">&nbsp;</p>
<p align="center" class="style10">&nbsp;</p>
</body>
</html>