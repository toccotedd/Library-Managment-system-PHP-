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
	<div class="s-top">
       <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About us</a></li>
        <li><a href="contact.php">Contact us</a></li>
      </ul>
      </div>
	<!-- end #logo -->
<!-- end #header-wrapper -->

<div id="page">
	<div id="content">
		<div class="post">
			<h2 class="title">Welcome to Online Library</h2>
			<p class="date">01.23.09</p>
				<div id="contact_form1" class="hello">
                
                	    <form class="former_form1">
			
			<table class="table">
			<tr>
             <th>Id</th>
			<th>Librarian  Id</th>
			<th>Student Name</th>
			<th> Address </th>
			<th>Age</th>
			<th>Sex</th>
			<th>Delete</th>
			</tr>
			    <?php
				  		            $sql1="select * from librarian";
				   $result1=mysql_query($sql1);
				   if( $result1){
				     	$i=1;
				        while($row=mysql_fetch_assoc($result1)){
				        	
				        	echo "<tr>";
				        	echo "<td>".$i."</td>";
						echo "<td>".$row['id']."</td>";
						$code=$row['id'];
					echo "<td>".$row['sname']."</td>";
					echo "<td>".$row['address']."</td>";
					echo "<td>".$row['age']."</td>";
					echo "<td>".$row['sex']."</td>";
				    echo "<td><a href=\"a_delete_li.php?value=$code\">Delete</a></td>";
					    echo "</tr>";
					    $i++;
				        }
						
				       }else{
					   $error="Error occured 404";
					        }
		 
				
				?>
		    </table>

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
