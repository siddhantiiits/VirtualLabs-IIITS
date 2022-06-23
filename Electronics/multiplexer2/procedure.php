<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/ViL2/extras/php/"; include($IPATH."up.php"); ?>

<div id="main">
  <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776; Procedure</span>
  <span style="z-index:-1; position: relative; top: 12px;" onclick="openNav()"><img src="../extras/images/procedure.png" height="50" width="50" ></span>
  <br><br>
  <span style="font-size:20px;color:blue;font-family: Arial;position: absolute;left: 66px">Please follow the following steps to complete the experiment</span>
  <br>
<div id="main" class="text" style="position: absolute;left: 70px">
<ol type="1">
<li>At first go through the structure of 74157.Then apply high level voltage to Vcc and low level voltage to GND. If Vcc and ground are not connected properly then error message will be shown and no output will be generated.
</li><br>
<div align="center">
	<img src="11.png" width="550px" height="450px">
</div>
<li> Next, apply high level voltage to Strobe input.Now check that all the LEDs are not glowing.Soall the outputs are at low state.</li><br>
<div align="center">
	<img src="22.png" width="550px" height="450px">
</div>
<li> Next, apply low level voltage to the Strobe input and also apply low level voltage to the Select input. Then apply high level voltage to A1,A2,A3,A4.Now check that all the LEDs are glowing.Because inputs are properly multiplexed to the outputs of the four multiplexers according to the voltage applied to the select input.</li><br>
<div align="center">
	<img src="33.png" width="550px" height="450px">
</div>
<li> Next, apply low level voltage to the Strobe input and apply high level voltage to the Select input. Then apply high level voltage to B1,B2,B3,B4. Now check that all the LEDs are glowing.Because inputs are properly multiplexed to the outputs of the four multiplexers according to the voltage applied to the select input.</li><br>
<div align="center">
	<img src="44.png" width="550px" height="450px">
</div>
</ol>
</div>

<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/ViL2/extras/php/"; include($IPATH."sideNav.php"); ?>	