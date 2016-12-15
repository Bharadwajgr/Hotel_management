<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin | Employee Salary</title>
<style type="text/css">
.style2 {
	font-size: xx-large;
	font-weight: bold;
}
body {
font-family: Verdana, Arial, Helvetica, sans-serif;
	background-image: url(images/aa.png);
}
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
.style17 {color: #FFFF99;
	font-size: 36px;
}
.style18 {font-size: 36px;
	color: #FFFF99;
}
</style>
</head>

<body>
<div align="center"><span class="style3"><img src="images/logo4.png" alt="" width="60" height="50" /><span class="style17">HOTEL <strong>SAI SURAJ</strong></span> <span class="style18"> INTERNATIONAL</span></span> </div>
<table width="858" height="469" align="center" background="images/divider.gif">
  <tr>
    <th height="188" scope="row"><marquee direction="left" behavior='alternate' onmouseover="this.stop()" onmouseout="this.start()" loop="-1" truespeed="truespeed">
      <img src="images/dine_3.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine.jpg" width="140" height="90" />&nbsp;<img src="images/lobby.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine_3.jpg" width="140" height="90" />&nbsp;<img src="images/lounge.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/suite_1.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/dine_2.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/hall.jpg" alt="" width="140" height="90" />&nbsp;<img src="images/restaurant.jpg" alt="" width="140" height="90" />
    </marquee></th>
  </tr>
  <tr>
    <th height="52" scope="row"><div align="left"><a href="admincpanel.php"><img src="images/home1.png" alt="" width="100" height="50" /></a><a href="signout.php"><img src="images/signout1.png" alt="" width="100" height="50" /></a><a href="emp.php"><img src="images/back.png" alt="" width="100" height="50" /></a></div></th>
  </tr>
  <tr>
    <th height="217" scope="row"><?php

//Function to check the difference between two dates.
function noofdays($start,$end,$name) {
	if (is_string($start) === true) $start = strtotime($start);
	if (is_string($end) === true ) $end = strtotime($end);

	if ($start > $end) return noofdays($end, $start,$name);

	$i=0;
	while($start <= $end)
	{
		$strt=date('Y-m-d',$start);
		$att=mysql_query("SELECT * FROM attendance WHERE date='$strt' AND name='$name'");
		if(($cnt=mysql_num_rows($att))>0)
		{
			$row=mysql_fetch_assoc($att);
			$present=$row['present'];
			if($present=='yes')
				$i++;
		}		
		$start = strtotime("+ 1 day", $start);
	}
	return $i;
}
$date=date("m");
$month=date("m");
$year=date("Y");

session_start();
if ( $_SESSION['username'])
{  
$user=$_SESSION['username'];
	  require('connect.php');
			$ex0=mysql_query("SELECT * FROM adminlogin WHERE user='$user'") or die(mysql_error());
							$count=mysql_num_rows($ex0);
				if($count)
				{								 		 
	echo "<br><center><strong>Welcome ".$_SESSION['username']."</strong><br><br></center>";
	
	$start = date('Y-m-d', mktime(0, 0, 0, $month, 1, $year));
	$end=date("Y-m-d");	
	
	echo "<table border='1' style=' border:double; border-color:#000000; color:#FFFFFF; background-color:#003300; font-size:18px; font-family:Georgia, 'Times New Roman', Times, serif' align='center'>
			<tr><th>Name</th><th>No. of Days<br> Attended</th><th>Salary</th><th>Experience</th><th>Increment (Based<br>on experience)</th><th>Total Salary</th></tr>";
	
	$ext=mysql_query("SELECT * FROM employee ORDER BY empid");
						$count=mysql_num_rows($ext);
				if($count)
	{
	while($erow=mysql_fetch_assoc($ext))
	{
		$name=$erow['name'];
		$category=$erow['category'];
		$exp=$erow['experience'];
		
		$sal=mysql_query("SELECT * FROM monthlysalary WHERE employeetype='$category'");
		$mrow=mysql_fetch_assoc($sal);
		$dsal=$mrow['daily_salary'];
		
		$inc=round(($dsal*$exp)*5/100,2);	
			
		$no=noofdays($start,$end,$name);
		$sal_got=$dsal*$no;
		$inc=$inc*$no;
		$sal=$sal_got+$inc;
		$sal=round($sal,2);
		echo "<tr><td>$name</td><td>$no</td><td>$sal_got</td><td>$exp</td><td>$inc</td><td>$sal</td></tr>";
		$s=mysql_query("SELECT * FROM salary WHERE name='$name'");
		$cnt=mysql_num_rows($s);
		if($cnt==0)
		{
			$extr=mysql_query("INSERT INTO salary Values('','$name','$no','$sal_got','$exp','$inc','$sal')")or die(mysql_error());
		}
		else
		{
			$r=mysql_fetch_assoc($s);
			$id=$r['id'];
			$extr=mysql_query("UPDATE salary SET name='$name',noofdays='$no',sal='$sal_got',exp='$exp',inc='$inc',tot_sal='$sal' WHERE id='$id'")or die(mysql_error());
		}
	}}
	else
		{echo "<script type=\"text/javascript\">
alert(\"Current there is no employee\");
</script>";
		}
	echo "</table>";
}
   else
    {	
        header("Location:index.php");
    }   
}
		
?></th>
  </tr>
</table>
</body>
</html>