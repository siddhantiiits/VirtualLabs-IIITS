// Gray to Binary

function onoff ( image) {
    if(image.src.match("off"))
        return 0;
    else
        return 1;
}

function xor(a,b) {
    return ((a || b) && !(a && b));
}

function s3()
{	
	var image1 = onoff(document.getElementById('i1')); //G3
	var image2 = onoff(document.getElementById('i2')); //G2
    var image5 = onoff(document.getElementById('i5')); //G1
	var image7 = onoff(document.getElementById('i7')); //GND
	var image10 = onoff(document.getElementById('i10')); //G0
	var image14 = onoff(document.getElementById('i14')); //Vcc

    
    if((image14==1) && (image7==0))
    {
        document.getElementById("blinktext").innerHTML="";
        if(image1)
            document.getElementById("i1b").src="onlight.jpg";
        else
            document.getElementById("i1b").src="offlight.png";
        if(xor(image1,image2))
            document.getElementById("i3").src="onlight.jpg";
        else
            document.getElementById("i3").src="offlight.png";
        if(xor(image5,xor(image1,image2)))
            document.getElementById("i6").src="onlight.jpg";
        else
            document.getElementById("i6").src="offlight.png";
        if(xor(image10,xor(image5,xor(image1,image2))))
            document.getElementById("i8").src="onlight.jpg";
        else
            document.getElementById("i8").src="offlight.png";

    }
    else
    {
        document.getElementById("blinktext").innerHTML="Connect Vcc and GND properly";
        document.getElementById("i1b").src="offlight.png";
        document.getElementById("i3").src="offlight.png";
        document.getElementById("i6").src="offlight.png";
        document.getElementById("i8").src="offlight.png";
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
function a10() {
    var image = document.getElementById('i10');
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

