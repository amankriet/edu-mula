<?php include ('login1.html'); ?>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Allerta Stencil' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="style.css">
<script>
var arr=["img2.jpg","1.jpg","2.jpg","3.jpg","img5.jpg","4.jpg","5.jpg"];
var n=0;
function change()
{
var a=document.getElementById("img1");
a.src=arr[n];
n++;
if(n==arr.length)
{
n=0;
}
window.setTimeout("change()",5000);
}
</script>
</head>
<body onload="change()" >
<div id="outer">
<div id="header">
<div id="logo"><h1>Edu -</h1></div>
<div id="logo1"><h1>Mula</h1></div>
<ul id="menu1" >
<li>Home</li>
<li>Subjects</li>
<li>Services</li>
<li>Vocational Trainings</li>
<li>Registration</li>
<li>Contact Us</li><br>
<li style="Float:right"><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login & Sign Up</button></li>

</ul>

</div>
<div id="content">
<div id="slider"><img id="img1" height="650px" width="100%"/></div>
</div>

</body>
</html>