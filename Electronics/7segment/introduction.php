<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/extras/php/"; include($IPATH."up.php"); ?>

<div id="main">
  <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776; Introduction</span>
  <span style="z-index:-1; position: relative; top: 12px;" onclick="openNav()"><img src="../extras/images/intro.png" height="50" width="50" ></span>
  <br><br>
  <span  style="font-size:20px;color:blue;font-family: Arial;position: absolute;left: 66px"> About the Experiment</span>
  <br>
<div id="main" class="text"  style="position: absolute;left: 66px">
This experiment enables a student to learn
<ul>
	<li>How to display decimal numbers 0-9 on a 7-segment LED display</li>
<li>How to display a blank (making all the segments off)</li>
<li>How to test the inputs LT (lamp test), ripple blanking input (RBI) and blanking input / ripple blanking output (BI/RBO) of TTL 7447 BCD-to-7-segment decoder</li>
<li>How to blank out the leading 0s in a multiple digit display</li>
</ul>

</div>

<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/extras/php/"; include($IPATH."sideNav.php"); ?>	
