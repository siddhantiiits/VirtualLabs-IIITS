// Comparator

function onoff ( image) {
    if(image.src.match("off"))
        return 0;
    else
        return 1;
}

function s3()
{	
	var image1 = onoff(document.getElementById('i1')); //B3
    var image2 = onoff(document.getElementById('i2')); //
	var image3 = onoff(document.getElementById('i3')); //
	var image4 = onoff(document.getElementById('i4')); //
	var image8 = onoff(document.getElementById('i8')); //GND
    var image9 = onoff(document.getElementById('i9')); //B0
	var image10 = onoff(document.getElementById('i10')); //A0
	var image11 = onoff(document.getElementById('i11')); //B1
    var image12 = onoff(document.getElementById('i12')); //A1
	var image13 = onoff(document.getElementById('i13')); //A2
    var image14 = onoff(document.getElementById('i14')); //B2
    var image15 = onoff(document.getElementById('i15')); //A3
	var image16 = onoff(document.getElementById('i16')); //Vcc

    
    if((image16==1) && (image8==0) )
    {
        if((image2==0) && (image3==1) && (image4 == 0)) {
            document.getElementById("blinktext").innerHTML="";
            if(image15 > image1) {
                document.getElementById("i5").src="onlight.jpg";
                document.getElementById("i6").src="offlight.png";
                document.getElementById("i7").src="offlight.png"; }
            else if(image1 > image15) {
                document.getElementById("i5").src="offlight.png";
                document.getElementById("i6").src="offlight.png";
                document.getElementById("i7").src="onlight.jpg"; }
            else {
                if(image13 > image14) {
                    document.getElementById("i5").src="onlight.jpg";
                    document.getElementById("i6").src="offlight.png";
                    document.getElementById("i7").src="offlight.png"; }
                else if(image13 < image14) {
                    document.getElementById("i5").src="offlight.png";
                    document.getElementById("i6").src="offlight.png";
                    document.getElementById("i7").src="onlight.jpg"; }
                else {
                    if(image12 > image11) {
                        document.getElementById("i5").src="onlight.jpg";
                        document.getElementById("i6").src="offlight.png";
                        document.getElementById("i7").src="offlight.png"; }
                    else if(image12 < image11) {                
                        document.getElementById("i5").src="offlight.png";
                        document.getElementById("i6").src="offlight.png";
                        document.getElementById("i7").src="onlight.jpg"; }
                    else {
                        if(image10 > image9) {
                            document.getElementById("i5").src="onlight.jpg";
                            document.getElementById("i6").src="offlight.png";
                            document.getElementById("i7").src="offlight.png"; }
                        else if(image10 < image9) {
                            document.getElementById("i5").src="offlight.png";
                            document.getElementById("i6").src="offlight.png";
                            document.getElementById("i7").src="onlight.jpg"; }
                        else {
                            document.getElementById("i5").src="offlight.png";
                            document.getElementById("i6").src="onlight.jpg";
                            document.getElementById("i7").src="offlight.png"; }
                    }
                }
            }
        }
        else {
            document.getElementById("blinktext").innerHTML="Connect (A&ltB)in,(A=B)in,(A&gtB)in properly.";
            document.getElementById("i5").src="offlight.png";
            document.getElementById("i6").src="offlight.png";
            document.getElementById("i7").src="offlight.png";
        }
    }
    else {
        document.getElementById("blinktext").innerHTML="Connect Vcc and GND properly.";
        document.getElementById("i5").src="offlight.png";
        document.getElementById("i6").src="offlight.png";
        document.getElementById("i7").src="offlight.png";
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

function a8() {
    var image = document.getElementById('i8');
    if (image.src.match("off")) {
        image.src = "on.png";
    } else {
        image.src = "off.png";
    }
s3();
}

function a9() {
    var image = document.getElementById('i9');
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

