<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/ViL2/extras/php/"; include($IPATH."up.php"); ?>

<div id="main">
  <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776; Procedure</span>
  <span style="z-index:-1; position: relative; top: 12px;" onclick="openNav()"><img src="../extras/images/procedure.png" height="50" width="50" ></span>
  <br><br>
  <span style="font-size:20px;color:blue;font-family: Arial;position: absolute;left: 66px">Please follow the following steps to complete the experiment</span>
  <br>
<div id="main" class="text" style="position: absolute;left: 70px">
<ol type="1">
<li>At first go through the structure of 7404 Hex inverter, 7408(quad 2-input AND gates), 7432(quad 2-input OR gates).</li>
<li>Next, apply a high level voltage to all the inputs A,B,C.</li>
<li>Next, check that both LEDs glow. This is because both the outputs z1 and z2 attain the same value.</li>
<li>Thus, AB+<font style="text-decoration: overline;">A</font>C+BC=AB+<font style="text-decoration: overline;">A</font>C holds for the condition A=B=C="1".</li>
<li>For all the combinations of the variables A,B, and C verify that both the LEDs are glowing or not glowing. If the LED glows, it indicates that the corresponding output has reached logic 1 level. Similarly a dark LED indicates low level output voltage.</li>
</ol>
<div align="center">
	<img src="pro.jpeg" width="550px" height="450px">
</div>
	</div>

<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/ViL2/extras/php/"; include($IPATH."sideNav.php"); ?>