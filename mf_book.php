<?php
   session_start();
   include "./connect.php";  
  if(isset($_SESSION['username'])){
      $sql="select * from member where username='".$_SESSION['username']."'";
	  $res=mysql_query($sql);
	  if(mysql_num_rows($res) > 0){
	      }else{
		    header("location:index.php");
		       }
       }else{
	    header("location:index.php");
	        }	

	         if(isset($_POST['submit'])){ 
       $error=""; 	   
			$email=$_POST['email'];
			$feedback=$_POST['feedback'];
			
			if($email && $feedback ){
			   $sql="insert into feedback values(NULL,'".$email."','".$feedback."')";
			   $result=mysql_query($sql);
			   if($result){
			     $error="Feedback sent Successfully"; 
			              }else{
						  echo(mysql_error());
						       }
			   }else{
			    $error="please fill all fields..."; 
			       }
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
			<h2 class="title">Welcome to Online Library</h2>
			<p class="date">01.23.09</p>
			<div id="contact_form_n">
				<form method="post" name="contact" action="#">
                        <i><center><font color="red"size="2px"><?php if(isset($_POST['submit'])) echo "".$error.""; ?></font></center></i>
                         <label for="author">Email:</label> <input type="email" id="author" name="email" class="required input_field" />
                        <div class="cleaner_h10"></div>

                        <label for="text">Feedbak:</label> <textarea id="text" name="feedback" rows="0" cols="2" class="required"></textarea>
                        <div class="cleaner_h10"></div>
                                 	 <div class="cleaner_h10"></div>
                        

                                            </br>
                        
                        <input type="submit" class="submit_btn_login" name="submit" id="submit" value="Send Feedback" />
                    
                    </form>
                </div>
		</div>
		
		
	</div>
	<!-- end #content -->
	<div id="sidebar">
	
       <ul>
			<li class="current_page_item"><a href="mv_book.php">View Book</a></li>
				<li class="current_page_item"><a href="mb_book.php">Borrow Book</a></li>
				<li><a href="mbb_book.php">Borrowed Book</a></li>
				<li><a href="mf_book.php">Feedback</a></li>
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
