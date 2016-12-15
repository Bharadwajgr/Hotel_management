<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SaiSuraj-Tariff</title>
<style type="text/css">
<!--
body {
	background-image: url(img/divider.gif);
	font-family: "Times New Roman", Times, serif;
}
body,td,th {
	font-size: 36px;
}
.style2 {font-size: 16px}
.style3 {
	font-size: 14px;
	color: #CCCCCC;
}
.style15 {font-size: 18px}
.style22 {color: #FFFFFF}
.style23 {color: #000000}
.style24 {color: #000000; font-size: 24px; }
.style18 {font-size: 36px;
	color: #FFFF99;
}
.style34 {color: #FFFF99;
	font-size: 36px;
}
-->
</style></head>

<body>
<?php
		  require('connect.php');

			$e1= mysql_query("SELECT rate FROM tariff WHERE no='1'");
			$row 		=mysql_fetch_assoc($e1);
			$r1		=$row['rate'];
			$e2= mysql_query("SELECT rate FROM tariff WHERE no='2'");
			$row 		=mysql_fetch_assoc($e2);
			$r2		=$row['rate'];
			$e3= mysql_query("SELECT rate FROM tariff WHERE no='3'");
			$row 		=mysql_fetch_assoc($e3);
			$r3		=$row['rate'];
			$e4= mysql_query("SELECT rate FROM tariff WHERE no='4'");
			$row 		=mysql_fetch_assoc($e4);
			$r4		=$row['rate'];
			$e5= mysql_query("SELECT rate FROM tariff WHERE no='5'");
			$row 		=mysql_fetch_assoc($e5);
			$r5		=$row['rate'];
			$e6= mysql_query("SELECT rate FROM tariff WHERE no='6'");
			$row 		=mysql_fetch_assoc($e6);
			$r6		=$row['rate'];
  ?>  
<blockquote>
  <p align="center"><span class="style3"><img src="images/logo4.png" alt="" width="60" height="50" /><span class="style34">HOTEL <strong> SAI SURAJ </strong></span> <span class="style18"> INTERNATIONAL</span></span></p>
</blockquote>
<table width="1020" height="992" align="center" background="img/aa.png">
  <tr>
    <th width="1012" height="986" scope="row"><table width="1014" height="934" align="center" cellspacing="3">
      <tr>
        <th width="1004" height="366" scope="row"><img src="images/room2.jpg" alt="" width="939" height="364" /></th>
      </tr>
      <tr>
        <th height="51" scope="row"><a href="index.html"><img src="img/home3.png" alt="" width="150" height="50"/></a><a href="aboutus.html"><img src="img/aboutus3.png" alt="" width="150" height="50" onclick="aboutus.html" /></a><a href="login.php"><img src="img/bk3.png" alt="" width="150" height="50" /></a><a href="tourplace.html"><img src="img/tplc3.png" alt="" width="150" height="50" /></a><a href="lmap.html"><img src="img/lmp3.png" alt="" width="150" height="50" /></a><a href="contact.php"><img src="img/enq.png" alt="" width="150" height="50" /></a></th>
        </tr>
      <tr>
        <th height="498" scope="row">
        <table width="980">
          <tr>
            <th width="1049" scope="row"><img src="images/suite_1.jpg" alt="" width="162" height="110" /><img src="images/lobby.jpg" alt="" width="162" height="110" /><img src="images/dine_3.jpg" alt="" width="162" height="110" /><img src="images/dine_2.jpg" alt="" width="162" height="110" /><img src="images/restaurant.jpg" alt="" width="162" height="110" /><img src="images/lounge.jpg" alt="" width="162" height="110" /></th>
          </tr>
        </table>
        <table width="621" height="614" align="right" bgcolor="#FFFFFF">
          <tr>
            <th height="608" colspan="2" scope="row">
                <div align="left">
                  <table width="994" height="445" align="left" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                    <tr>
                      <th width="484" rowspan="7" scope="row"><table width="454" height="336">
                          <tr>
                            <th width="112" bgcolor="#FFFFFF" scope="row"><p><br />
                                <a href="services.html"><img src="img/services5.png" width="150" height="50" /></a><br />
        <br />
<a href="facilities.html"> <img src="img/facilities5.png" width="150" height="50" /></a><br />
        <br />
<a href="foodmenu.html"> <img src="img/foodmenu5.png" width="150" height="50" /></a><br />
        <br />
        <a href="tariff.html"> <img src="img/tariff5.png" width="150" height="50" /></a>            </p>                              </th>
                            <th width="285" bgcolor="#FFFFFF" scope="row"><img src="img/9466864-chef.jpg" width="246" height="300" /></th>
                          </tr>
                        </table></th>
                      <th height="56" colspan="2" scope="row"><span class="style23">Tariff</span></th>
                      </tr>
                    <tr>
                      <th width="310" height="42" scope="row"><span class="style24"> Single Room Non AC </span></th>
                    <td width="198"><div align="center"><span class="style24">Rs. <?php echo $r1 ?></span></div></td>
                  </tr>
                    <tr>
                      <th height="53" scope="row"><span class="style24">Single Room  AC</span></th>
                    <td><div align="center"><span class="style24">Rs. <?php echo $r2 ?></span></div></td>
                  </tr>
                    <tr>
                      <th height="57" scope="row"><span class="style24">Deluxe Room Non AC</span></th>
                    <td><div align="center"><span class="style24">Rs. <?php echo $r3 ?></span></div></td>
                  </tr>
                    <tr>
                      <th height="57" scope="row"><span class="style24">Deluxe Room AC</span></th>
                    <td><div align="center"><span class="style24">Rs. <?php echo $r4 ?></span></div></td>
                  </tr>
                    <tr>
                      <th height="37" scope="row"><span class="style24">Suite Room  AC</span></th>
                      <td><div align="center"><span class="style24">Rs. <?php echo $r5 ?></span></div></td>
                    </tr>
                    <tr>
                      <th height="141" scope="row"><span class="style24">Hall</span></th>
                    <td><div align="center"><span class="style24">Rs. <?php echo $r6 ?></span></div></td>
                  </tr>
                    </table>
                <span class="style22"></span></div></th>
              </tr>
        </table></th>
        </tr></table>
    <div align="left"></div></th>
  </tr>
      
</table>
</th>
  </tr>
  <tr>
    <th height="324" scope="row">&nbsp;</th>
  </tr>
</table>
<div align="center"><span class="style15"><a href="index.html"><font color="#FF0000">Home</font></a>&nbsp;&nbsp; &nbsp;| &nbsp; &nbsp;&nbsp;<a href="aboutus.html"><font color="#FF0000">About us</font></a>&nbsp;&nbsp; &nbsp;| &nbsp;&nbsp;&nbsp; <a href="login.php"><font color="#FF0000">Booking</font></a>&nbsp;&nbsp;&nbsp; | &nbsp; &nbsp;&nbsp;<a href="tourplace.html"><font color="#FF0000">Tourism places</font></a>&nbsp; &nbsp;&nbsp;| &nbsp;&nbsp; &nbsp;<a href="lmap.html"><font color="#FF0000">Location map</font></a>&nbsp;&nbsp; &nbsp;| &nbsp; &nbsp;&nbsp;<a href="contact.php"><font color="#FF0000">Enquiry</font></a>&nbsp; |</span></div>

<p class="style2">&nbsp;</p>
</body>
</html>
