<?php
   session_start();
   include "./connect.php";
  if(isset($_POST['submit_login'])){ 
		  $error="";
         $username=$_POST['username'];
		 $password=$_POST['password'];
		 $type=$_POST['type'];
           if($username && $password ){
		          if($type=='Admin'){
								$sql="select * from admin where username='".$username."' and password='".$password."'";
								$result=mysql_query($sql);
								if(mysql_num_rows($result) > 0){
								$row=mysql_fetch_assoc($result);
								$error="logged in success";
								$_SESSION['username']=$row['username'];
								header("location:admin.php");
								}
		          }if($type=='Librarian'){
                                  $sql="select * from librarian where username='".$username."' and password='".$password."'";
								$result=mysql_query($sql);
								if(mysql_num_rows($result) > 0){
								$row=mysql_fetch_assoc($result);
								$error="logged in success";
								$_SESSION['username']=$row['username'];
								header("location:librarian.php");
								}
		          }if($type=='Member'){
                                $sql="select * from member where username='".$username."' and password='".$password."'";
								$result=mysql_query($sql);
								if(mysql_num_rows($result) > 0){
								$row=mysql_fetch_assoc($result);
								$error="logged in success";
								$_SESSION['username']=$row['username'];
								$_SESSION['id']=$row['id'];
								header("location:member.php");
								}
		          }else{
		          	            $sql="select * from guest where username='".$username."' and password='".$password."'";
								$result=mysql_query($sql);
								if(mysql_num_rows($result) > 0){
								$row=mysql_fetch_assoc($result);
								$error="logged in success";
								$_SESSION['username']=$row['username'];
								
								header("location:guest.php");
								}
		          }
											
		   }else{
		   $error="pls fill all fields";
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
		<p><a href="#">. </a></p>
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
			<div class="entry">
				<p>This is <strong>Blogging</strong>, a free, fully standards-compliant CSS template designed by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>, released for free under the <a href="http://creativecommons.org/licenses/by/2.5/">Creative Commons Attribution 2.5</a> license. The photos in this design are from <a href="http://www.pdphoto.org/">PDPhoto.org</a>. You're free to use this template for anything as long as you link back to <a href="http://www.freecsstemplates.org/">my site</a>. Enjoy :)</p>
				<p>Sed lacus. Donec lectus. Nullam pretiu
					You're free to use this template for anything as long as you link back to <a href="http://www.freecsstemplates.org/">my site</a>. Enjoy :)</p>
				<p>Sed lacus. Donec lectus for anything as long as you link back to <a href="http://www.freecsstemplates.org/">my site</a>. Enjoy :)</p>
				<p>Sed lacus. Donec lectus. Nullam pretiu
					You're free to use this 	to <a href="http://www.freecsstemplates.org/">my site</a>. Enjoy :)</p>
				<p>Sed lacus. Donec lectus. </p>
				<p class="links"><a href="#" class="comments">Comments (64)</a> &nbsp;&nbsp;&nbsp; <a href="#" class="permalink">Full article</a></p>
			</div>
		</div>
		
		
	</div>
	<!-- end #content -->
	<div id="sidebar">
		<ul>
			<li>
				
				<div id="contact_form">
				<form method="post" name="contact" action="login.php">
                    
                        <i><center><font color="red"size="2px"><?php if(isset($_POST['submit_login'])) echo "".$error.""; ?></font></center></i>
                        <label for="author">User Name:</label> <input type="text" id="author" name="username" class="required input_field" />
                        <div class="cleaner_h10"></div>
                        
                        <label for="email">Password:</label> <input type="text" id="email" name="password" class="validate-email required input_field" />
                        <div class="cleaner_h10"></div>
                        
										<div class="cleaner_h10"></div>
										<label for="login">User Type:</label>
										<select name="type" style="width:200px;height:34px;margin-top:5px;background: #d1d1d1;">
										<option value="Admin">Admin</option>
										<option value="Librarian"> Librarian</option>
                                         <option value="Member">Member</option>
                                         <option value="guest">Guest</option>
										</select>
                                 	 <div class="cleaner_h10"></div>
                                            </br>
                        
                        <input type="submit" class="submit_btn_login" name="submit_login" id="submit" value="Login" /></br></br>
                        <p><a href="new_account.php">Create New Account</p></p>
                    
                    </form>
                </div>
			</li>
			
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
