<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/ViL2/extras/php/"; include($IPATH."up.php"); ?>

<div id="main">
  <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776; Theory</span>
  <span style="z-index:-1; position: relative; top: 12px;" onclick="openNav()"><img src="../extras/images/theory.png" height="50" width="50" ></span>
  <br><br>
  <span onclick="openNav()" style="font-size:20px;color:blue;font-family: Arial;position: absolute;left: 66px"></span>
<div id="main" class="text" style="position: absolute;left: 70px">
	<div style="font-size:20px;color:blue;font-family: Arial "><b>Part1</b></div>
<br>

IC 74138 works as a 3-to-8 active low decoder,based on the values assigned to three select inputs of the three enable inputs, G1 must be made high value while <font style="text-decoration: overline;">G</font>2A and <font style="text-decoration: overline;">G</font>2B must be low. The eight active low inputs (<font style="text-decoration: overline;">Y</font>0 to <font style="text-decoration: overline;">Y</font>7) correspond to eight maxterms (M0 to M7) or in other words, component of the corresponding minterms m0-m7. For example, <font style="text-decoration: overline;">Y</font>0 = component of <font style="text-decoration: overline;">C</font> <font style="text-decoration: overline;">B</font> <font style="text-decoration: overline;">A</font> = C+B+A.
<br>
<br>
<div align="center">
<img src="74138.gif">
<br>
Figure 1 (IC 74138)
<br>
<br>
<br>
<img src="truth.jpg">
<br>
Figure 2 : Truth table for 3 to 8 decoder
</div>
<br>
<div style="font-size:20px;color:blue;font-family: Arial "><b>Part2</b></div>
<br>

Cascading two 74138 IC(Two 3 to 8 active low decoder) we can achieve a 4 to 16 active low decoder.<br>
<font style="text-decoration: overline;">G2A</font> and <font style="text-decoration: overline;">G2B</font> inputs of the first IC(74138) and G1 input of 2nd IC(74138) are shorted and it acts as MSB of 4 binary select input .<font style="text-decoration: overline;">G2A</font> & <font style="text-decoration: overline;">G2B</font> of second IC(74138) is kept low.G1 of 1st IC is kept always high.
<br>
<br>
<div align="center">
<img src="dual-74138.jpg">
<br>
Figure 3 : 4 to 16 decoder cascadeding two 3 to 8 decoder
<br>
<br>
<br>
<img src="table.png">
<br>
<br>
Figure 4 : Truth table for 4 to 16 decoder
</div>
<br>
<br>
<div style="font-size:20px;color:blue;font-family: Arial "><b>Part3</b></div>
<br>

A decoder with active high outputs generates minterms. Whereas, a decoder with active low outputs generates maxterms (i.e. complements of the corresponding minterm). Thus, if a function is specified as a sum of minterms or equivalently as a product of maxterms, it can be realized by a decoder with active low outputs and additional AND/NAND gates.<br>
For example, consider the following<br>
F1 (A,B,C) = Σ m (1,2)<br>
F2 (A,B,C) = Σ m (0,1,2,3,4,5)
<br>
<br>
<div align="center">
<img src="123.jpg" width="450" height="450">
</div>

	</div>


<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/ViL2/extras/php/"; include($IPATH."sideNav.php"); ?>