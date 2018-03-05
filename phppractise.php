<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Php Html Css</title>
<style type="text/css">
*
{
margin:0 auto 0 auto;
width:96%;
height:auto;
}
.container
{
background-color:#8080FF;

}
header
{

color:white;
font-family:Verdana, Arial, Helvetica, sans-serif;
font-weight:bold;
text-align:center;
}
nav ul
{
float:left;
text-align:center;
list-style:none;
background-color:#3538c6;

margin:0px;
padding:15px;
font-weight:bold;
font-size:20px;
}
nav li
{
display:inline;
list-style:none;
color:white;
}
nav li a
{
text-decoration:none;
color:white;
}
nav li a:hover
{
background-color:#6e70cc;
}
.leftaside
{
width:200px;
height:auto;
margin-left:0px;
padding:5px;
background-color:#6e70cc;
color:white;
float:left;

}
.rightaside
{
width:200px;
height:auto;
margin-top:-495px;
margin-right:45px;
background-color:#6e70cc;
color:white;
float:right;
}

.maincontent
{
width:600px;
margin-left:225px;
display:block;
color:white;
}
.dclear
{
clear:both;
}
.stext
{
font-family:Georgia, "Times New Roman", Times, serif;
color:#FFFFFF;
font-size:16px;
text-align:left;
text-decoration:none;
}
.stext a
{
text-decoration:none;
color:white;
}
.gsbox
{
margin:10px 5px 10px 5px;
padding:5px;
border:1px solid black;
border-radius:10px;
}
.gsbox1,.gsbox2,.gsbox4,.gsbox5
{
width:280px;
height:280px;
background-color:#44468e;
margin:10px 5px 10px 5px;
padding:5px;
border:1px solid black;
border-radius:10px;
float:left;
}
.gsbox3
{
width:600px;
background-color:#44468e;
margin:10px 5px 10px 5px;
padding:5px;
border:1px solid black;
border-radius:10px;
float:left;

}
img
{
height:100px;
width:100px;
text-align:center;
}
#img1
{
margin-top:5px;
padding:5px;
height:250px;
width:285px;
text-align:center;
}
.img2
{
margin-top:5px;
margin-left:70px;
padding:5px;
height:50px;
width:50px;
text-align:center;
}

footer
{


margin-left:450px;
padding:5px;
}
</style>
<link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
</head>

<body>
<div class="container">
<header>
<h1><?php
echo "welcome to php";
?>
</h1>
</header>
<nav>
<ul><li><a href="#"><?php echo "Home";?></a></li>
<li><a href="#"><?php echo "Profile";?></a></li>
<li><a href="#"><?php echo "About us";?></a></li>
<li><a href="#"><?php echo "Contact us";?></a></li>
</ul>
</nav>

<section>
<div class="leftaside">
<p class="stext">
<a href="#"><?php echo "Home";?></a><br/>
<a href="#"><?php echo "Profile";?></a><br/>
<a href="#"><?php echo "About us";?></a><br/>
<a href="#"><?php echo "Contact us";?></a><br/>
</p>

</div>

<div class="maincontent">
<span class="gsbox1">
<h2 style="background:#FFFFFF; color:black; text-align:center;">Heading</h2><br/>
<span class="img2"><img src="img/icon2.jpg"     /></span><br/>
Lorem Ipsum is simply dummy text of the printing and typesetting industry.
</span>
<span class="gsbox2"><h2 style="background:#FFFFFF; color:black; text-align:center;">Heading</h2><br/>
<span class="img2"><img src="img/icon2.jpg"   /></span><br/>
Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>

<p class="dclear"></p>
<span class="gsbox3">
<h2 style="background:#FFFFFF; color:black; text-align:center;">Heading</h2><br/>
<ul><li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li> 
<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
</ul>
</span>

<span class="gsbox4" id="img1"> <img src="img/img1.jpg"   /></span>
<span class="gsbox5" id="img1"><img src="img/img1.jpg" /></span>

</div>
<div class="rightaside">
<p class="gsbox">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p><p class="gsbox"> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><p class="gsbox"> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p><p class="gsbox"> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
</div>
</section>
<div class="dclear"></div>
<hr/>
<footer>
<p class="stext">All rights are reserved</p>
</footer>
</div>
<script src="http://code.jquery.com/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
