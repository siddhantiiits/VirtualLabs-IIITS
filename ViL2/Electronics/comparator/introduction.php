<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/ViL2/extras/php/"; include($IPATH."up.php"); ?>

<div id="main">
  <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776; Introduction</span>
  <span style="z-index:-1; position: relative; top: 12px;" onclick="openNav()"><img src="../extras/images/intro.png" height="50" width="50" ></span>
  <br><br>
  <span style="font-size:20px;color:blue;font-family: Arial;position: absolute;left: 66px"> About the Experiment</span>
  <br>
<div id="main" class="text"  style="position: absolute;left: 66px">
This experiment enables a student to learn
<ul>
	<li>How to realize the functionality of IC 7485 which is used to compare magnitudes of two binary numbers.</li>
	<li>How to realize an eight bit magnitude comparator by cascading two comparator (one is lower nibble comparator,another is higher nibble comparator)</li>
</div>

<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/ViL2/extras/php/"; include($IPATH."sideNav.php"); ?>	