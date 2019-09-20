<?php
   session_start();
   include "./connect.php";  
  if(isset($_SESSION['username'])){
      $sql="select * from guest where username='".$_SESSION['username']."'";
	  $res=mysql_query($sql);
	  if(mysql_num_rows($res) > 0){
	      }else{
		    header("location:index.php");
		       }
       }else{
	    header("location:index.php");
	        }
   ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Blogging
Description: A two-column, fixed-width design for 1024x768 screen resolutions.
Version    : 1.0
Released   : 20090208

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Blogging by Free CSS Templates</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">

	<!-- end #header -->
	

	
	<hr />
	<div id="logo">
		<p><a href="#">. </a></p>
	</div>
	<!-- end #logo -->
<!-- end #header-wrapper -->

<div id="page">
	<div id="content">
		<div class="post">
			<h1>welcome to guast page</h1>
		</div>
		
		
	</div>
	<!-- end #content -->
	<div id="sidebar">
		<h2>.</h2>
       <ul>
				<li class="current_page_item"><a href="guest.php">Home</a></li>
				<li><a href="feedback.php">Feedback</a></li>
				<li><a href="a_book.php">Avaible Book</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
	</div>
	<!-- end #sidebar -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end #page -->

<div id="footer">
	<p>Copyright (c) 2008 Sitename.com. All rights reserved. Design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.</p>
</div>
<!-- end #footer -->
</div>
</html>
