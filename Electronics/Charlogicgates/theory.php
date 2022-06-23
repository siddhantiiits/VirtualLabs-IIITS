<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/ViL2/extras/php/"; include($IPATH."up.php"); ?>

<div id="main">
  <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776; Theory</span>
  <span style="z-index:-1; position: relative; top: 12px;" onclick="openNav()"><img src="../extras/images/theory.png" height="50" width="50" ></span>
  <br><br>
  <span onclick="openNav()" style="font-size:20px;color:blue;font-family: Arial;position: absolute;left: 66px"></span>
<div id="main" class="text" style="position: absolute;left: 70px">
<h3><u>TTL NAND Gate:</u></h3><br><br>
<div align="center">
     <img src="1.jpg" width="400px" height="400px"><br>Figure 1: Multiple Input Emitter Structure of TTL<br><br>
</div>
	In the above diagram if any input is low, the corresponding base-emitter junction becomes forward-biased and the transistor conducts.<br><br>
<h3><u>LOGICAL OPERATION:</u></h3><br><br>
A table of conduction states has been drawn up showing the state of each transistor in the circuit for all possible input conditions to verify the logic function performed. The direction of conduction of T1 can be in the forward or reverse mode so this should also be noted in the table. It can be seen from the table that the output goes LOW only when both inputs are HIGH which verifies the NAND function.<br><br>
<div align="center">
     <img src="2.png" width="400px" height="350px"><br><br>
     <img src="3.jpg" width="400px" height="350px"><br>Figure 2: Circuit Diagram of a Standard 2-input TTL NAND Gate<br><br>
</div>

	</div>
<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/ViL2/extras/php/"; include($IPATH."sideNav.php"); ?>