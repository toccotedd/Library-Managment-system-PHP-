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

    if(isset($_POST['submit'])){ 
       $error=""; 	   
			$s_id=$_POST['id'];
			$s_name=$_POST['sname'];
			$username=$_POST['username'];
			$password=$_POST['password'];
			$address=$_POST['address'];
			$age=$_POST['age'];
			$sex=$_POST['sex'];
			if($s_id && $s_name  && $username && $password && $address && $age && $sex){
			   $sql="insert into librarian values('".$s_id."','".$s_name."','".$username."','".$password."','".$address."','".$age."','".$sex."')";
			   $result=mysql_query($sql);
			   if($result){
			     $error="Librarian Registered Successfully"; 
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
				<div id="contact_form1" class="hello">
                
                	   <form method="post" name="contact" action="add_book.php" enctype="multipart/form-data">
                        <i><center><font color="red"size="2px"><?php if(isset($_POST['submit'])) echo "".$error.""; ?></font></center></i>
                         <label for="author">Book No:</label> <input type="text" id="author" name="bno" class="required input_field" />
                        <div class="cleaner_h10"></div>
                        <label for="author">ISBN:</label> <input type="text" id="author" name="isbn" class="required input_field" />
                        <div class="cleaner_h10"></div>
                        
                        <label for="author">Subject:</label> <input type="text" id="author" name="subject" class="required input_field" />
                        <div class="cleaner_h10"></div>
                        
                        <label for="email">Book Name:</label> <input type="text" id="email" name="bname" class="validate-email required input_field" />
                        <div class="cleaner_h10"></div>

                        <label for="email">Author:</label> <input type="text" id="email" name="author" class="validate-email required input_field" />
                        <div class="cleaner_h10"></div>
                         
                         <label for="email">Publisher:</label> <input type="text" id="email" name="publisher" class="validate-email required input_field" />
                        <div class="cleaner_h10"></div>

                        <label for="email">Edition:</label> <input type="number" id="email" name="edition" class="validate-email required input_field" />
                        <div class="cleaner_h10"></div>

                        <label for="email">Copies:</label> <input type="number" id="email" name="copy" class="validate-email required input_field" />
                        <div class="cleaner_h10"></div>


                        <label for="email">Cost:</label> <input type="number" id="email" name="cost" class="validate-email required input_field" />
                        <div class="cleaner_h10"></div>
                        
                        <label for="email">Book:</label> <input type="file" id="email" name="file" class="validate-email required input_field" />
                        <div class="cleaner_h10"></div>
                        
                       
                                 	 <div class="cleaner_h10"></div>
                                            </br>
                        
                        <input type="submit" class="submit_btn_login" name="submit" id="submit" value="Add Book" />
                    
                    </form>
                </div>
		</div>
		
		
	</div>
	<!-- end #content -->
	    <div id="sidebar">

       <ul>
			<li class="current_page_item"><a href="add_li.php">Add Librarian</a></li>
				<li><a href="li.php">Librarian</a></li>
				<li><a href="add_me.php">Add Members</a></li>
				<li><a href="me.php">Members</a></li>
                <li><a href="re.php">Report</a></li>
				 <li><a href="view_b.php">View Books</a></li>
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
