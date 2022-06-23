// Decoder

function andgateBubble(one,two,three,four) {
    var input = ((one)&(two)&(three)&(four));
    if(input > 0)
        return 0;
    else
        return 1;
}


function onoff ( image) {
    if(image.src.match("off"))
        return 0;
    else
        return 1;
}

function s3()
{	
	var image1 = onoff(document.getElementById('i1')); 
    var image2 = onoff(document.getElementById('i2')); 
	var image3 = onoff(document.getElementById('i3')); 
    var image6 = onoff(document.getElementById('i6')); 
	var image8 = onoff(document.getElementById('i8')); 
	var image16 = onoff(document.getElementById('i16')); 

    
    if((image16==1) && (image8==0))
    {
        if(andgateBubble(image3,image2,image1,image6))
            document.getElementById("i7").src="onlight.jpg";
        else
            document.getElementById("i7").src="offlight.png";

        if(andgateBubble(image3,image2,~image1,image6))
            document.getElementById("i9").src="onlight.jpg";
        else
            document.getElementById("i9").src="offlight.png";

        if(andgateBubble(image3,~image2,image1,image6))
            document.getElementById("i10").src="onlight.jpg";
        else
            document.getElementById("i10").src="offlight.png";

        if(andgateBubble(image3,~image2,~image1,image6))
            document.getElementById("i11").src="onlight.jpg";
        else
            document.getElementById("i11").src="offlight.png";
        
        if(andgateBubble(~image3,image2,image1,image6))
            document.getElementById("i12").src="onlight.jpg";
        else 
            document.getElementById("i12").src="offlight.png";
        
        if(andgateBubble(~image3,image2,~image1,image6))
            document.getElementById("i13").src="onlight.jpg";
        else 
            document.getElementById("i13").src="offlight.png";
        
        if(andgateBubble(~image3,~image2,image1,image6))
            document.getElementById("i14").src="onlight.jpg";
        else 
            document.getElementById("i14").src="offlight.png";
        
        if(andgateBubble(~image3,~image2,~image1,image6))
            document.getElementById("i15").src="onlight.jpg";
        else 
            document.getElementById("i15").src="offlight.png";
        
    }
    else
    {
        document.getElementById("i10").src="offlight.png";
        document.getElementById("i7").src="offlight.png";
        document.getElementById("i9").src="offlight.png";
        document.getElementById("i11").src="offlight.png";
        document.getElementById("i12").src="offlight.png";
        document.getElementById("i13").src="offlight.png";
        document.getElementById("i14").src="offlight.png";
        document.getElementById("i15").src="offlight.png";
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

function a16() {
    var image = document.getElementById('i16');
    if (image.src.match("off")) {
        image.src = "on.png";
    } else {
        image.src = "off.png";
    }
s3();
}

