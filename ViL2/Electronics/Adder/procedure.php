<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/ViL2/extras/php/"; include($IPATH."up.php"); ?>

<div id="main">
  <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776; Procedure</span>
  <span style="z-index:-1; position: relative; top: 12px;" onclick="openNav()"><img src="../extras/images/procedure.png" height="50" width="50" ></span>
  <br><br>
  <span style="font-size:20px;color:blue;font-family: Arial;position: absolute;left: 66px">Please follow the following steps to complete the experiment</span>
  <br>
<div id="main" class="text" style="position: absolute;left: 70px">
<ol type="1">
<li>At first click on the V<sub>cc</sub> switch that means V<sub>cc</sub> = 1 and GND = 0 , show message V<sub>cc</sub> & GND properly connected.</li>
<div align="center">
	<img src="1.png" width="600px" height="450px">
</div>
<li>  Next, A<sub>0</sub>= 1, A<sub>1</sub>= 0, A<sub>2</sub>= 0, A<sub>3</sub>= 0 and B<sub>0</sub>= 1, B<sub>1</sub>= 0, B<sub>2</sub>= 0, B<sub>3</sub>= 0 now you can see the output result of S<sub>0</sub>= 0, S<sub>1</sub>= 1, S<sub>2</sub>= 0, S<sub>3</sub>= 0 and C<sub>4</sub>= 0.</li>

<div align="center">
	<img src="2.png" width="600px" height="450px">
</div>
<li>Next, A<sub>0</sub>= 0, A<sub>1</sub>= 0, A<sub>2</sub>= 0, A<sub>3</sub>= 0 and B<sub>0</sub>= 1, B<sub>1</sub>= 1, B<sub>2</sub>= 0, B<sub>3</sub>= 0 now you can see the output result of S<sub>0</sub>= 1, S<sub>1</sub>= 1, S<sub>2</sub>= 0, S<sub>3</sub>= 0 and C<sub>4</sub>= 0.</li>
<div align="center">
	<img src="3.png" width="600px" height="450px">
</div>
<li>  Next, A<sub>0</sub>= 0, A<sub>1</sub>= 0, A<sub>2</sub>= 0, A<sub>3</sub>= 1 and B<sub>0</sub>= 0, B<sub>1</sub>= 0, B<sub>2</sub>= 0, B<sub>3</sub>= 1 now you can see the output result of S<sub>0</sub>= 0, S<sub>1</sub>= 0, S<sub>2</sub>= 0, S<sub>3</sub>= 0 and C<sub>4</sub>= 1.</li>
	<div align="center">
	<img src="4.png" width="600px" height="450px">
</div>
<li> Next, A<sub>0</sub>= 1, A<sub>1</sub>= 1, A<sub>2</sub>= 1, A<sub>3</sub>= 1 and B<sub>0</sub>= 1, B<sub>1</sub>= 1, B<sub>2</sub>= 1, B<sub>3</sub>= 1 now you can see the output result of S<sub>0</sub>= 0, S<sub>1</sub>= 1, S<sub>2</sub>= 1, S<sub>3</sub>= 1 and C<sub>4</sub>= 1.
</li>
<div align="center">
	<img src="5.png" width="600px" height="450px">
</div>
	</ol>
</div>

<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/ViL2/extras/php/"; include($IPATH."sideNav.php"); ?>