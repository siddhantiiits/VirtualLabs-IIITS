<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/ViL2/extras/php/"; include($IPATH."up.php"); ?>

<div id="main">
  <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776; Theory</span>
  <span style="z-index:-1; position: relative; top: 12px;" onclick="openNav()"><img src="../extras/images/theory.png" height="50" width="50" ></span>
  <br><br>
  <span onclick="openNav()" style="font-size:20px;color:blue;font-family: Arial;position: absolute;left: 66px"></span>
<div id="main" class="text" style="position: absolute;left: 70px">
IC 7485 is used to compare magnitude of two binary numbers .The two 4-bit numbers are applied at the inputs A3,A2,A1,A0 and B3,B2,B1,B0 Where A3 and B3 are the most significant bits of the two 4-bit operands to be Compared.The Three cascading inputs (A = B)<sub>IN</sub>, (A < B)<sub>IN</sub> and (A > B)<sub>IN</sub> should be connected to logic '1'(HIGH),logic '0'(LOW) and logic '0'(LOW) respectively.The Three outputs (A > B)<sub>OUT</sub>, (A = B)<sub>OUT</sub> and (A < B)<sub>OUT</sub> will reflect the results of comparing the two 4-Bit numbers A=A3A2A1A0 and B=B3B2B1B0.<br><br>
<div align="center">
	<img src="1.jpg"><br>Figure 1<br><br>
</div>
The students of virtual DEC Laboratory can verify the functionality of the 7485 chip fully rather than testing for a total of 2<sup>8</sup>= 256 inputs,the students can observe the outputs listed in the compressed function table given below.
<br><br><br>
<div align="center">
	<img src="2.jpg"><br><br>Figure 2<br><br>
</div>
	</div>
<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/ViL2/extras/php/"; include($IPATH."sideNav.php"); ?>