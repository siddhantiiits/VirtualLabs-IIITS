function s3()
{
	var image1 = document.getElementById('i3');
	var image2 = document.getElementById('i4');
	var image3 = document.getElementById('i5');
if(image1.src.match("green") && image2.src.match("green") && (image3.src.match("red") ||  image3.src.match("green")))
{
		document.getElementById("off").src="on1.jpg";
}
if(image3.src.match("green") && image2.src.match("green") && (image1.src.match("red") ||  image1.src.match("green")))
{
		document.getElementById("off").src="on1.jpg";
}
if(image1.src.match("green") && image3.src.match("green") && image2.src.match("red"))
{
		document.getElementById("off").src="off1.jpg";
}
if(image1.src.match("green") && image3.src.match("green") && image2.src.match("green"))
{
		document.getElementById("off").src="on1.jpg";
}
if(image3.src.match("red") && image2.src.match("green") && image1.src.match("red"))
{
		document.getElementById("off").src="off1.jpg";
}
if(image3.src.match("red") && image2.src.match("red") && image1.src.match("green"))
{
		document.getElementById("off").src="off1.jpg";
}
if(image3.src.match("green") && image2.src.match("red") && image1.src.match("red"))
{
		document.getElementById("off").src="on1.jpg";
}
if(image3.src.match("red") && image2.src.match("red") && image1.src.match("red"))
{
		document.getElementById("off").src="off1.jpg";
}
}
function a() {
    var image = document.getElementById('i3');
    if (image.src.match("red")) {
        image.src = "green.jpg";
	
    } else {
        image.src = "red.jpg";
    }
s3();
}
function b() {
    var image = document.getElementById('i4');
    if (image.src.match("red")) {
        image.src = "green.jpg";
	
    } else {
        image.src = "red.jpg";
    }
s3();
}
function c() {
    var image = document.getElementById('i5');
    if (image.src.match("red")) {
        image.src = "green.jpg";
	
    } else {
        image.src = "red.jpg";
    }
s3();
}