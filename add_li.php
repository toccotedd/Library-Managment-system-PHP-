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
<script language="javascript"type="text/javascript">
function letteronly(){
  var charCode=event.keyCode;
  if((charCode > 64 && charCode<91 )|| (charCode > 96 && charCode <123)|| charCode==32)
    return true;
  else
    return false;
}
</script>
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
			<p class="date">01.23.09</p>
				<div id="contact_form_n">
                
                	    <form method="post" name="contact" action="add_li.php">
                        <i><center><font color="red"size="2px"><?php if(isset($_POST['submit'])) echo "".$error.""; ?></font></center></i>
                         <label for="author">Librarian Id:</label> <input type="text" id="author" name="id" class="required input_field" />
                        <div class="cleaner_h10"></div>
                        <label for="author">Name:</label> <input type="text" id="author" name="sname" class="required input_field"     onKeyPress="return letteronly(event)"   />
                        <div class="cleaner_h10"></div>
                        
                        <label for="author">User Name:</label> <input type="text" id="author" name="username" class="required input_field"      onKeyPress="return letteronly(event)"  />
                        <div class="cleaner_h10"></div>
                        
                        <label for="email">Password:</label> <input type="text" id="email" name="password" class="validate-email required input_field" />
                        <div class="cleaner_h10"></div>

                        <label for="email">Age:</label> <input type="number" id="email" name="age" class="validate-email required input_field" />
                        <div class="cleaner_h10"></div>
                         <label for="login">Gender:</label>
										<select name="sex" style="width:350px;height:34px;margin-top:5px;background: #d1d1d1;">
										<option value="Female">Female</option>
										<option value="Male">Male</option>

										</select>

                        <label for="email">Address:</label> <input type="text" id="email" name="address" class="validate-email required input_field" />
                        <div class="cleaner_h10"></div>

                       
                                 	 <div class="cleaner_h10"></div>
                                            </br>
                        
                        <input type="submit" class="submit_btn_login" name="submit" id="submit" value="Register Librarian" />
                    
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
