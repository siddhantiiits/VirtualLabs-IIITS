<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/ViL2/extras/php/"; include($IPATH."up.php"); ?>

<div id="main">
  <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776; Procedure</span>
  <span style="z-index:-1; position: relative; top: 12px;" onclick="openNav()"><img src="../extras/images//procedure.png" height="50" width="50" ></span>
  <br><br>
  <span onclick="openNav()" style="font-size:20px;color:blue;font-family: Arial;position: absolute;left: 66px">Please follow the following steps to complete the experiment</span>
  <br>
<div id="main" class="text" style="position: absolute;left: 70px">
<ol type="1">
<li>At first go through the 7 Segment Decoder Circuit on the virtual workspace. Now see that IC 7447 is connected to the LED display package complete with VCC, GND and current-limiting resistor. Verify that the sixteen 7-segment patterns appear for 16 possible combinations of the 4-bit word DCBA while keeping LT (lamp test) and BI (blanking input) inputs high. Note that RBI should be kept high for displaying the 7-segment pattern for 0.</li><br>
<li>Next, applying a low level signal to BI input, verify that all segments are off irrespective of the logic level of any other input.</li><br>
<li>Next, setting RBI (ripple blanking input), D,C, B, and A to low level and setting LT input to high level, verify that all segments go off, and the RBO (ripple blanking output) output goes to a low level.</li><br>
<li>Next, setting BI/RBO input to high and making LT input low, verify that all segments are lit up.</li><br>


</div>

<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/ViL2/extras/php/"; include($IPATH."sideNav.php"); ?>	