<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/ViL2/extras/php/"; include($IPATH."up.php"); ?>

<div id="main">
  <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776; Procedure</span>
  <span style="z-index:-1; position: relative; top: 12px;" onclick="openNav()"><img src="../extras/images/procedure.png" height="50" width="50" ></span>
  <br><br>
  <span onclick="openNav()" style="font-size:20px;color:blue;font-family: Arial;position: absolute;left: 66px">Please follow the following steps to complete the experiment</span>
  <br>
<div id="main" class="text" style="position: absolute;left: 70px">
<ol type="1">
<li>At first go through the structure of 74138. Then apply high level voltage to VCC and apply low level voltage to GND and also apply high level voltage to G1.</li><br>
<li>Next, apply low level voltage to all the three select inputs (C B A). Now check that <font style="text-decoration: overline;">Y0</font> is at low state. Other outputs are at high state.</li>
<div align="center">
<img src="1.png" width="550" height="450">
</div>

	<li>Next, apply low level voltage to C and B and apply high level voltage to A. Now check that <font style="text-decoration: overline;">Y1</font> is at low state. Other outputs are at high state.</li>

<div align="center">
<img src="3.png" width="550" height="450">
</div>
<li>Next, apply low level voltage to C and A and apply high level voltage to B. Now check that <font style="text-decoration: overline;">Y2</font> is at low state. Other outputs are at high state.</li>
<div align="center">
<img src="4.png" width="550" height="450">
</div>
<li> Next, apply low level voltage to C and apply high level voltage to B and A. Now check that <font style="text-decoration: overline;">Y3</font> is at low state. Other outputs are at high state.</li>
<div align="center">
<img src="5.png" width="550" height="450">
</div>
<li>Next, apply high level voltage to C and apply low level voltage to B and A. Now check that <font style="text-decoration: overline;">Y4</font> is at low state. Other outputs are at high state.</li>
<div align="center">
<img src="6.png" width="550" height="450">
</div>
<li> Next, apply high level voltage to C and A and apply low level voltage to B. Now check that <font style="text-decoration: overline;">Y5</font> is at low state. Other outputs are at high state.</li>
<div align="center">
<img src="7.png" width="550" height="450">
</div>
<li>Next, apply high level voltage to C and B high and apply low level voltage to A. Now check that <font style="text-decoration: overline;">Y6</font> is at low state. Other outputs are at high state.</li>
<div align="center">
<img src="8.png" width="550" height="450">
</div>
<li> Next, apply high level voltage to all the select inputs (C,B,A). Now check that <font style="text-decoration: overline;">Y7</font> is at low state. Other outputs are at high state.</li>
<div align="center">
<img src="9.png" width="550" height="450">
</div>
</ol>
</div>

<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/ViL2/extras/php/"; include($IPATH."sideNav.php"); ?>