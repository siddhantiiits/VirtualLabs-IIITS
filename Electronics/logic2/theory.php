<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/ViL2/extras/php/"; include($IPATH."up.php"); ?>

<div id="main">
  <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776; Theory</span>
  <span style="z-index:-1; position: relative; top: 12px;" onclick="openNav()"><img src="../extras/images/theory.png" height="50" width="50" ></span>
  <br><br>
  <span onclick="openNav()" style="font-size:20px;color:blue;font-family: Arial;position: absolute;left: 66px"></span>
<div id="main" class="text" style="position: absolute;left: 70px">
<br>
Analysis of Logic gates using 7400(quad 2-input NAND gates),7402(quad 2-input NOR gates), 7404(HEX inverter),7408(quad 2-input AND gates),7432(quad 2-input OR gates). Diagrams of each chip are shown in Figure
<div align="center">
	<img src="1.jpg" width="400px" height="400px"><br>Figure 1<br><br>
	<img src="2.jpg" width="400px" height="400px"><br>Figure 2<br><br>
	<img src="3.jpg" width="400px" height="400px"><br>Figure 3<br><br>
	<img src="4.jpg" width="400px" height="400px"><br>Figure 4<br><br>
	Fig: 1 . 7400(quad 2 input NAND gates) Fig: 2 . 7402 (quad 2 input NOR gates)
Fig: 3 . 7404(HEX inverter) Fig: 4 . 7432(quad 2-input OR gates)<br>
</div>
<br>
<ul>
	<li><b>AB+<font style="text-decoration: overline;">A</font>C+BC=AB+<font style="text-decoration: overline;">A</font>C</b></li>
		<br>
		According to consensus theorem,the Boolean identity holds.<br><br>
		<img src="a1.jpg" width="300px" height="150px">    <img src="a2.jpg" width="300px" height="150px"><br><br>
		In the above picture both circuits are equivalent.<br><br><br>
<li><b>AB+<font style="text-decoration: overline;">A</font>C=(A+C)(<font style="text-decoration: overline;">A</font>+B)</b></li>
<br>
		According to consensus theorem,the Boolean identity holds.<br><br>
		<img src="b1.jpg" width="300px" height="150px">    <img src="b2.jpg" width="300px" height="150px"><br><br>
		In the above picture both circuits are equivalent.<br><br><br>
		<li><b>Verify eqivalence of AND-OR and NAND-NAND structure</b></li><br>
		<img src="c1.jpg" width="300px" height="150px">    <img src="c2.jpg" width="300px" height="150px"><br><br>
		In the above picture both circuits are equivalent.<br><br><br>

		<li><b>Verify eqivalence of OR-AND and NOR-NOR structure</b></li>
		<br><img src="d1.jpg" width="300px" height="150px">    <img src="d2.jpg" width="300px" height="150px"><br><br>
		In the above picture both circuits are equivalent.<br><br><br>
	</ul>
	Student may be asked to wire up the network of gates shown in the above figures. They can next verify that the output of the two circuits,viz z1 and z2 should attain the same value for each of the eight possible input combinations assigned to the variables A,B,C,and D.<br><br><br>
</div>


<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/ViL2/extras/php/"; include($IPATH."sideNav.php"); ?>