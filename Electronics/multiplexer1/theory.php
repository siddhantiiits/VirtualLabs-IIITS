<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/ViL2/extras/php/"; include($IPATH."up.php"); ?>

<div id="main">
  <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776; Theory</span>
  <span style="z-index:-1; position: relative; top: 12px;" onclick="openNav()"><img src="../extras/images/theory.png" height="50" width="50" ></span>
  <br><br>
  <span onclick="openNav()" style="font-size:20px;color:blue;font-family: Arial;position: absolute;left: 66px"></span>
<div id="main" class="text" style="position: absolute;left: 70px">
74153 is a dual 4 line-to-1 line multiplexer. It has the schematic representation shown in Fig 1. Selection lines A and B select the particular input to be multiplexed and applied to the output IY{1 = 1, 2}. Each of the strobe signals IG {I = 1, 2} acts as an enable signal for the corresponding multiplexer. Figure 2(a) & 2(b) shows the multiplex function of 74153 in terms of select lines. Note that each of the on-chip multiplexers act independently from the other, while sharing the same select lines A and B.
<br><br>
<div align="center">
	<img src="1.jpg" width="500px" height="450px"><br>Figure 1(74153)<br><br>
	<img src="2.png" width="500px" height="450px"><br>Figure 2(a) x:don't care state<br><br><br>
	<img src="3.png" width="485px" height="450px"><br>Figure 2(b) x:don't care state<br><br><br>
	<img src="4.png" width="500px" height="450px"><br><br>
	The above circuit diagram shows the detail gate level structure of 74153(Dual 4 line to 1 line Multiplexer)<br><br>
</div>


	</div>
<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/ViL2/extras/php/"; include($IPATH."sideNav.php"); ?>