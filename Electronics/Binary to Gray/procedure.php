<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/ViL2/extras/php/"; include($IPATH."up.php"); ?>

<div id="main">
  <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776; Procedure</span>
  <span style="z-index:-1; position: relative; top: 12px;" onclick="openNav()"><img src="../extras/images/procedure.png" height="50" width="50" ></span>
  <br><br>
  <span style="font-size:20px;color:blue;font-family: Arial;position: absolute;left: 66px">Please follow the following steps to complete the experiment</span>
  <br>
<div id="main" class="text" style="position: absolute;left: 70px">
<ol type="1">
	<li>Put Vcc to logic high and ground to logic low.</li><br>
	<div align="center">
         <img src="11.jpeg" width="500px" height="500px">
	</div>
	<li>Consider a Binary number 0011 and input as B3=0, B2=0, B1=1, B0=1. Resulting output will be G3=0, G2=0, G1=1, G0=0. Hence, Binary code is now converted to Gray code.</li><br>
	<div align="center">
		<img src="22.jpeg" width="500px" height="500px">
	</div>
	</ol>
</div>

<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/ViL2/extras/php/"; include($IPATH."sideNav.php"); ?>	