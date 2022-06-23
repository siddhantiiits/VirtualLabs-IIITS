<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/ViL2/extras/php/"; include($IPATH."up.php"); ?>

<div id="main">
  <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776; Theory</span>
  <span style="z-index:-1; position: relative; top: 12px;" onclick="openNav()"><img src="../extras/images/theory.png" height="50" width="50" ></span>
  <br><br>
  <span onclick="openNav()" style="font-size:20px;color:blue;font-family: Arial;position: absolute;left: 66px"></span>
<div id="main" class="text" style="position: absolute;left: 70px">
	<div style="font-size:20px;color:blue;font-family: Arial "><b>Part1</b></div>
<br>
IC 7483 is 4-bit binary full adder which accepts two 4-bit binary words A<sub>3</sub>A<sub>2</sub>A<sub>1</sub>A<sub>0</sub> and B<sub>3</sub>B<sub>2</sub>B<sub>1</sub>B<sub>0</sub> and a carry input (C<sub>0</sub>) as inputs and produces a 4-bit binary sum output S<sub>3</sub>S<sub>2</sub>S<sub>1</sub>S<sub>0</sub> and a carry output C<sub>4</sub>.
<br><br>
<div align="center">
	<img src="fig1.png"><br>Figure 1<br>
</div>
<br>
The students of virtual DEC Laboratory can verify the functionality of the 7483 chip.Although in principle,there can be 2<sup>9</sup>=512 input paterns possible,the students can verify all zero,all one and some other patterns.<br>
<br>
</div>

<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/ViL2/extras/php/"; include($IPATH."sideNav.php"); ?>