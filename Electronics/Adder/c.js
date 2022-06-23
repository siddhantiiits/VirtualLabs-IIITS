// Adder

function sum( a, b, carry) {
    var s = (a^b)^carry;
    return s;
}

function carryOut( a, b, carry) {
    var temp = a^b ;
    var carout = (temp&carry) | (a&b) ;
    return carout;
}

function onoff ( image) {
    if(image.src.match("off"))
        return 0;
    else
        return 1;
}

function s3()
{	
	var image1 = onoff(document.getElementById('i1')); //A4
	var image3 = onoff(document.getElementById('i3')); //A3
	var image4 = onoff(document.getElementById('i4')); //B3
    var image5 = onoff(document.getElementById('i5')); //Vcc
	var image7 = onoff(document.getElementById('i7')); //B2
	var image8 = onoff(document.getElementById('i8')); //A2
	var image10 = onoff(document.getElementById('i10')); //A1
	var image11 = onoff(document.getElementById('i11')); //B1
    var image12 = onoff(document.getElementById('i12')); //GND
	var image13 = onoff(document.getElementById('i13')); //Co
	var image16 = onoff(document.getElementById('i16')); //B4

    var s0 = sum(image10,image11,image13);
    var c1 = carryOut(image10,image11,image13);

    var s1 = sum(image8,image7,c1);
    var c2 = carryOut(image8,image7,c1);

    var s2 = sum(image3,image4,c2);
    var c3 = carryOut(image3,image4,c2);

    var s3 = sum(image1,image16,c3);
    var c4 = carryOut(image1,image16,c3);

    if((image5==1) && (image12==0))
    {
        if(s0)
            document.getElementById("i9").src="onlight.jpg";
        else
            document.getElementById("i9").src="offlight.jpg";

        if(s1)
            document.getElementById("i6").src="onlight.jpg";
        else
            document.getElementById("i6").src="offlight.jpg";

        if(s2)
            document.getElementById("i2").src="onlight.jpg";
        else
            document.getElementById("i2").src="offlight.jpg";

        if(s3)
            document.getElementById("i15").src="onlight.jpg";
        else
            document.getElementById("i15").src="offlight.jpg";
        
        if(c4)
            document.getElementById("i14").src="onlight.jpg";
        else 
        {
            document.getElementById("i14").src="offlight.jpg";
        }
    }
    else
    {
        document.getElementById("i2").src="offlight.jpg";
        document.getElementById("i6").src="offlight.jpg";
        document.getElementById("i9").src="offlight.jpg";
        document.getElementById("i14").src="offlight.jpg";
        document.getElementById("i15").src="offlight.jpg";
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

function a4() {
    var image = document.getElementById('i4');
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
function a5() {
    var image = document.getElementById('i5');
    if (image.src.match("off")) {
        image.src = "on.png";
    } else {
        image.src = "off.png";
    }
s3();
}
function a7() {
    var image = document.getElementById('i7');
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
function a13() {
    var image = document.getElementById('i13');
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
function a16() {
    var image = document.getElementById('i16');
    if (image.src.match("off")) {
        image.src = "on.png";
    } else {
        image.src = "off.png";
    }
s3();
}

