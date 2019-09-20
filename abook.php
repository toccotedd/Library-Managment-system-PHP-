<?php
   session_start();
   include "./connect.php";  
  if(isset($_SESSION['username'])){
      $sql="select * from Admin where username='".$_SESSION['username']."'";
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
    $file=rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc=$_FILES['file']['tmp_name'];
    $file_size=$_FILES['file']['size'];
    $file_type=$_FILES['file']['type'];
    $folder="uploads/";

    $allowedExts = array("pdf", "doc"); 
    $temp = explode(".", $_FILES["file"]["name"]);
    $extension = end($temp);

    move_uploaded_file($file_loc,$folder.$file);
    $bno=$_POST['bno'];
    $isbn=$_POST['isbn'];
    $subject=$_POST['subject'];
    $bname=$_POST['bname'];
    $author=$_POST['author'];
    $publisher=$_POST['publisher'];
     $edition=$_POST['edition'];
      $copy=$_POST['copy'];
       $cost=$_POST['cost'];
    if($file && $bno && $isbn && $subject && $bname&& $author&& $publisher&& $edition&& $copy&& $cost){
if(($_FILES["file"]["type"] == "application/pdf") || ($_FILES["file"]["type"] == "application/doc") && in_array($extension, $allowedExts)){
    
        $sql="insert into  book values(NULL,'".$bno."','".$isbn."','".$subject."','".$bname."','".$author."','".$publisher."','".$edition."','".$copy."','".$cost."','".$file."')";
        $result=mysql_query($sql);
        if($result){
           $error="book uploaded successfilly";
           // $hello="book uploaded successfilly";
        }else{
           // $hello="Sth error";
            $error="Sth error";
        }

    }else{
         // $hello=" fill all fields";  
          $error="file  typle is not allowed to upload";
    }
  }else{
            $error="fill all fields";
            //$hello= "file  typle is not allowed to upload";  
            
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
			<div id="contact_form_n">
                
                	    <form method="post" name="contact" action="abook.php" enctype="multipart/form-data">
                        <i><center><font color="red"size="2px"><?php if(isset($_POST['submit'])) echo "".$error.""; ?></font></center></i>
                         <label for="author">Book No:</label> <input type="number" id="author" name="bno" class="required input_field" />
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
				<li><a href="abook.php">Upload Book</a></li>
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
