<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/ViL2/extras/php/"; include($IPATH."up.php"); ?>

<div id="main">
  <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776; Procedure</span>
  <span style="z-index:-1; position: relative; top: 12px;" onclick="openNav()"><img src="../extras/images/procedure.png" height="50" width="50" ></span>
  <br><br>
  <span style="font-size:20px;color:blue;font-family: Arial;position: absolute;left: 66px">Please follow the following steps to complete the experiment</span>
  <br>
<div id="main" class="text" style="position: absolute;left: 70px">
<ol type="1">
<li>At first go through the structure of 74153.Then apply high level voltage to Vcc and low level voltage to GND. If Vcc and ground are not connected properly then error message will be shown and no output will be generated.</li><br>
<div align="center">
	<img src="01.png" width="550px" height="450px">
</div>
<li> Next, apply high level voltage to Strobe1G or strobe 2G. If STROBE 1G is high 2nd Multiplexer is activated . If STROBE 2G is high then 1st Multiplexer is activated.</li><br>
<div align="center">
	<img src="02.png" width="550px" height="450px">
</div>
<li>Next, apply low level voltage to the select inputs A and B (A Most significant Bit,B Less significant bit). Then apply a high level voltage to 2C0. Now check that how Dual 4 Line to 1 Line Multiplexer select the particular input to be multiplexed and to be applied to the output IY{1 = 1, 2}.</li><br>
<div align="center">
	<img src="03.png" width="550px" height="450px">
</div>
<li> For all the combinations of the select inputs A,B verify that both the LEDs are glowing or not glowing. If the LED glows, it indicates that the corresponding output has reached logic 1 level. Similarly a dark LED indicates low level output voltage.
</li><br>
<div align="center">
	<img src="04.png" width="550px" height="450px">
</div>
<li>If both the Strobe inputs are low then both Multiplexers are activated.</li><br>
<div align="center">
	<img src="05.png" width="550px" height="450px">
</div>
	</div>

<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/ViL2/extras/php/"; include($IPATH."sideNav.php"); ?>	