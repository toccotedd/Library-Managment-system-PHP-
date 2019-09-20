<?php
   session_start();
   include "./connect.php";  
  if(isset($_SESSION['username'])){
      $sql="select * from admin where username='".$_SESSION['username']."'";
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
		<div id="search">
			<form method="get" action="a_search.php">
				<fieldset>
				<input type="text" name="s" id="search-text" size="15" />
				<input type="submit" id="search-submit"name="search" value="Search Book" />
				</fieldset>
			</form>
		</div>
	</div>
	<!-- end #logo -->
<!-- end #header-wrapper -->
<div class="s-top">
       <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About us</a></li>
        <li><a href="contact.php">Contact us</a></li>
      </ul>
      </div>
<div id="page">
	<div id="content">
		<div class="post">
			<h1>Welcome to Admin Page</h1>
		</div>
		
		
	</div>
	<!-- end #content -->
	<div id="sidebar">
	
       <ul>
				<li class="current_page_item"><a href="add_li.php">Add Librarian</a></li>
				<li><a href="li.php">Librarian</a></li>
				<li><a href="add_me.php">Add Members</a></li>
				<li><a href="me.php">Members</a></li>
                <li><a href="report.php">Report</a></li>
				 <li><a href="view_bb.php">View Books</a></li>
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
