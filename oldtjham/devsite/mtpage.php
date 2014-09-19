<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>tjHAM :: Home</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
</head>
<body>
<div class="paper">
<table class="header">
<tbody><tr><td>
<img src="images/headlogo.png" alt="headlogo.png" />
</td><td>
<div class="title">Amateur Radio Club</div>
<div class="subtitle">Thomas Jefferson High School for Science and Technology</div><br /><br /><br />
<div class="menu">
<span class="menucurr">Home</span> \\ <a href="about" class="menul">About Us</a> \\ <a href="members" class="menul">Members</a> \\ <a href="/tjham/gallery2" class="menul">Pictures</a> \\ <a href="links" class="menul">Links</a>
</div>
</td></tr></tbody></table>
<div class="content">
<?php include("maptest.php"); ?>
</div>
<div class="copy">
<a href="http://validator.w3.org/check?uri=referer">XHTML</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a><br />
<?php>
/*
This bit of PHP modified from that provded by Jack Breese.
(13:41:10) Jack Breese: giving some credit for the code would be nice...
*/
$ie = 'MSIE';
$win = 'Windows'; //I'll use this later
$opera = 'Opera';
$user = $_SERVER['HTTP_USER_AGENT'];
$chkie = strpos($user, $ie);
$chkwin = strpos($user, $win);
$chkopera = strpos($user, $opera);
if ($chkie !== false && $chkopera === false ) {
   print('This page does not display well in Internet Explorer.<br />');
         }
	       ?>
&copy; 2005-2006 Nathan Watson &amp; The TJHSST Amateur Radio Club
</div>
</div>
</body>
</html>
