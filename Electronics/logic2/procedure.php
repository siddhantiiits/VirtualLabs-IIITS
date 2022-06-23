<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/ViL2/extras/php/"; include($IPATH."up.php"); ?>

<div id="main">
  <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776; Procedure</span>
  <span style="z-index:-1; position: relative; top: 12px;" onclick="openNav()"><img src="../extras/images/procedure.png" height="50" width="50" ></span>
  <br><br>
  <span style="font-size:20px;color:blue;font-family: Arial;position: absolute;left: 66px">Please follow the following steps to complete the experiment</span>
  <br>
<div id="main" class="text" style="position: absolute;left: 70px">
<ol type="1">
<li>At first go through the structure of 7400(quad 2-input NAND gates), 7408(quad 2-input AND gates), 7432(quad 2-input OR gates).</li>
<li>Next, apply a high level voltage to inputs A,B.and apply low level voltage to the input C.</li>
<li>Next, check that both LEDs glow. This is because both the outputs z1 and z2 attain the same value.</li>
<li>So, the equivalence of AND-OR and NAND NAND structure can be verified.</li>
<li>For all the combinations of the variables A,B and C verify that both the LEDs are glowing or not glowing. If the LED glows, it indicates that the corresponding output has reached logic 1 level. Similarly a dark LED indicates low level output voltage.</li>
</ol>
<div align="center">
	<img src="11.jpeg" width="550px" height="450px">
</div>
	</div>

<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/ViL2/extras/php/"; include($IPATH."sideNav.php"); ?>