<?php
   session_start();
   include "./connect.php";  
  if(isset($_SESSION['username'])){
      $sql="select * from librarian where username='".$_SESSION['username']."'";
	  $res=mysql_query($sql);
	  if(mysql_num_rows($res) > 0){
	      }else{
		    header("location:index.php");
		       }
       }else{
	    header("location:index.php");
	        }	
	   if(isset($_POST['submit']))	{
	   	$error="";
	   	$sid=$_POST['sid'];
	   	$bno=$_POST['bno'];
	   	$copy=$_POST['copy'];
	   	$idate=$_POST['idate'];
	   	$ddate=$_POST['ddate'];
	   	$returned='no';
	   	if($sid && $bno && $copy && $idate && $ddate){
	   		$sql="insert into borrowed values(NULL,'".$bno."','".$sid."','".$copy."','".$idate."','".$ddate."','".$returned."')";
	   		$result=mysql_query($sql);
	   		if($result){
	   			$error="successfully booked";
	   		}else{
	   			$error="sth wrong";
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
			<div id="contact_form">
				<form method="post" name="contact" action="b_book.php">
                    
                        <i><center><font color="red"size="2px"><?php if(isset($_POST['submit'])) echo "".$error.""; ?></font></center></i>
                        <label for="author">Book No:</label> <input type="number" id="author" name="bno" class="required input_field" />
                        <div class="cleaner_h10"></div>
                        
                        <label for="email">Student Id:</label> <input type="text" id="email" name="sid" class="validate-email required input_field" />
                        <div class="cleaner_h10"></div>

                         <label for="email">No Copy:</label> <input type="text" id="email" name="copy" class="validate-email required input_field" />
                        <div class="cleaner_h10"></div>

                        <label for="email">Issue Date:</label> <input type="date" id="email" name="idate" class="validate-email required input_field" />
                        <div class="cleaner_h10"></div>
                        <label for="email">Due Date:</label> <input type="date" id="email" name="ddate" class="validate-email required input_field" />
                        <div class="cleaner_h10"></div>
                        <br>
										
                        <input type="submit" class="submit_btn_login" name="submit" id="submit" value="Borrow Book" /></br></br>
                    
                    
                    </form>
                </div>
			<div id="contact_form1" class="hello">
                <p>List Of Requests From Members
                	    <form class="former_form1">
			
			<table class="table">
			<tr>
			<th>No</th>
			<th>Member Id</th>
			<th>Book No</th>
			
			</tr>
			    <?php
				  		            $sql1="select * from request";
				   $result1=mysql_query($sql1);
				   if( $result1){
				     	
				        while($row=mysql_fetch_assoc($result1)){
				        	
				        	echo "<tr>";
					echo "<td>".$row['id']."</td>";
					echo "<td>".$row['username']."</td>";
					echo "<td>".$row['book']."</td>";
					
					    echo "</tr>";
				
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
				<li class="current_page_item"><a href="b_book.php">Borrow Book</a></li>
				<li><a href="r_book.php">Return Book</a></li>
				<li><a href="a_book.php">A.Book</a></li>
				<li><a href="d_book.php">D.Book</a></li>
                <li><a href="re.php">Report</a></li>
				 <li><a href="view_b.php">L.Books</a></li>
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
