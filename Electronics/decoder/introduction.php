<!-- Seven Segment LED -->

<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/ViL2/extras/php/"; include($IPATH."up.php"); ?>

<div id="main">
  <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776; Introduction</span>
  <span style="z-index:-1; position: relative; top: 12px;" onclick="openNav()"><img src="../extras/images/intro.png" height="50" width="50" ></span>
  <br><br>
  <span onclick="openNav()" style="font-size:20px;color:blue;font-family: Arial;position: absolute;left: 66px"> About the Experiment</span>
  <br>
<div id="main" class="text" onclick="openNav()" style="position: absolute;left: 66px">
This experiment enables a student to learn
<ul>
	<li>
How to realize functionality of a 3-to-8 line active low Decoder viz. 74138 IC. That is on setting the two active low and one active high enable inputs to proper level, one can verify that one and only one of the eight active low outputs is asserted based on the values assigned to three select input.
</li>
<br>
<li>
How to cascade two 74138 IC's to implement a 4-to-6 active low decoder.
</li>
</ul>
</div>

<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/ViL2/extras/php/"; include($IPATH."sideNav.php"); ?>
