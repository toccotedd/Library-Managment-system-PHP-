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
			<th>Book No</th>
			<th>Issue Date</th>
			<th>Due Date</th>
			</tr>
			    <?php
				  		            $sql1="select * from borrowed where mid='".$_SESSION['id']."'";
				   $result1=mysql_query($sql1);
				   if( $result1){
				     	$i=1;
				        while($row=mysql_fetch_assoc($result1)){
				        	
				        	echo "<tr>";
				        	
						echo "<td>".$row['bno']."</td>";
					echo "<td>".$row['idate']."</td>";
					echo "<td>".$row['date']."</td>";
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
