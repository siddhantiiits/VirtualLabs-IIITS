function s3()
{
	
	var image1 = document.getElementById('i1');
	var image2 = document.getElementById('i2');
	var image3 = document.getElementById('i3');
	var image4 = document.getElementById('i4');
	var image5 = document.getElementById('i5');
	var image6 = document.getElementById('i6');
	var image8 = document.getElementById('i8');
	var image10 = document.getElementById('i10');
	var image11 = document.getElementById('i11');
	var image12 = document.getElementById('i12');
	var image13 = document.getElementById('i13');
	var image14 = document.getElementById('i14');
	var image15 = document.getElementById('i15');
	var image16 = document.getElementById('i16');

	if(image16.src.match("on") && image8.src.match("off")) {
	if(image1.src.match("on"))
	{
		document.getElementById("i7").src="offlight.jpg";
	}
	else if(image2.src.match("on"))
	{
		if(image14.src.match("on"))
		{
			if(image3.src.match("on"))
			{
				document.getElementById("i7").src="onlight.jpg";
			}
			else
			{
				document.getElementById("i7").src="offlight.jpg";
			}
		}
		else //14 is off/low.
		{
			if(image4.src.match("on"))
			{
				document.getElementById("i7").src="onlight.jpg";
			}
			else
			{
				document.getElementById("i7").src="offlight.jpg";
			}
		}
	}
	else //2 is off.
	{
		if(image14.src.match("on"))
		{
			if(image5.src.match("on"))
			{
				document.getElementById("i7").src="onlight.jpg";
			}
			else
			{
				document.getElementById("i7").src="offlight.jpg";
			}
		}
		else //14 is off/low.
		{
			if(image6.src.match("on"))
			{
				document.getElementById("i7").src="onlight.jpg";
			}
			else
			{
				document.getElementById("i7").src="offlight.jpg";
			}
		}
	}
	//----------------------------------------For Bulb-2 below----------------------------

	if(image15.src.match("on"))
	{
		document.getElementById("i9").src="offlight.jpg";
	}
	else if(image2.src.match("on"))
	{
		if(image14.src.match("on"))
		{
			if(image13.src.match("on"))
			{
				document.getElementById("i9").src="onlight.jpg";
			}
			else
			{
				document.getElementById("i9").src="offlight.jpg";
			}
		}
		else //14 is off/low.
		{
			if(image12.src.match("on"))
			{
				document.getElementById("i9").src="onlight.jpg";
			}
			else
			{
				document.getElementById("i9").src="offlight.jpg";
			}
		}
	}
	else //2 is off.
	{
		if(image14.src.match("on"))
		{
			if(image11.src.match("on"))
			{
				document.getElementById("i9").src="onlight.jpg";
			}
			else
			{
				document.getElementById("i9").src="offlight.jpg";
			}
		}
		else //14 is off/low.
		{
			if(image10.src.match("on"))
			{
				document.getElementById("i9").src="onlight.jpg";
			}
			else
			{
				document.getElementById("i9").src="offlight.jpg";
			}
		}
	}
}
	else {
		document.getElementById("i7").src="offlight.jpg";
		document.getElementById("i9").src="offlight.jpg";

	}
}


function a1() {
    var image = document.getElementById('i1');
    if (image.src.match("off")) {
        image.src = "on.png";
    } else {
        image.src = "off.png";
    }
s3();
}

function a2() {
    var image = document.getElementById('i2');
    if (image.src.match("off")) {
        image.src = "on.png";
    } else {
        image.src = "off.png";
    }
s3();
}

function a3() {
    var image = document.getElementById('i3');
    if (image.src.match("off")) {
        image.src = "on.png";
    } else {
        image.src = "off.png";
    }
s3();
}
function a4() {
    var image = document.getElementById('i4');
    if (image.src.match("off")) {
        image.src = "on.png";
    } else {
        image.src = "off.png";
    }
s3();
}
function a5() {
    var image = document.getElementById('i5');
    if (image.src.match("off")) {
        image.src = "on.png";
    } else {
        image.src = "off.png";
    }
s3();
}
function a6() {
    var image = document.getElementById('i6');
    if (image.src.match("off")) {
        image.src = "on.png";
    } else {
        image.src = "off.png";
    }
s3();
}
function a8() {
    var image = document.getElementById('i8');
    if (image.src.match("off")) {
        image.src = "on.png";
    } else {
        image.src = "off.png";
    }
s3();
}

function a10() {
    var image = document.getElementById('i10');
    if (image.src.match("off")) {
        image.src = "on.png";
    } else {
        image.src = "off.png";
    }
s3();
}
function a11() {
    var image = document.getElementById('i11');
    if (image.src.match("off")) {
        image.src = "on.png";
    } else {
        image.src = "off.png";
    }
s3();
}
function a12() {
    var image = document.getElementById('i12');
    if (image.src.match("off")) {
        image.src = "on.png";
    } else {
        image.src = "off.png";
    }
s3();
}
function a13() {
    var image = document.getElementById('i13');
    if (image.src.match("off")) {
        image.src = "on.png";
    } else {
        image.src = "off.png";
    }
s3();
}
function a14() {
    var image = document.getElementById('i14');
    if (image.src.match("off")) {
        image.src = "on.png";
    } else {
        image.src = "off.png";
    }
s3();
}
function a15() {
    var image = document.getElementById('i15');
    if (image.src.match("off")) {
        image.src = "on.png";
    } else {
        image.src = "off.png";
    }
s3();
}
function a16() {
    var image = document.getElementById('i16');
    if (image.src.match("off")) {
        image.src = "on.png";
    } else {
        image.src = "off.png";
    }
s3();
}

