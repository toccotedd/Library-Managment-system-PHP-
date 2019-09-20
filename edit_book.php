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
   
if(isset($_POST['submit_login'])){
  $error="";
     $a=$_POST['b'];
     $b=$_POST['isbn'];
     $c=$_POST['subject'];
      $d=$_POST['b_name'];
      $e=$_POST['author'];
      $f=$_POST['publisher'];
      $g=$_POST['edition'];
       $h=$_POST['copies'];
        $i=$_POST['cost'];
       $id=$_POST['code'];
      if($a && $b && $c && $d && $e && $f && $g && $h && $i ){
        $sql="update book set b_no='".$a."',isbn='".$b."',subject='".$c."',b_name='".$id."',author='".$e."',publisher='".$f."',edition='".$g."',copies='".$h."',cost='".$i."' where id='".$id."'";
           $result=mysql_query($sql);
           if($result){
            header('location:d_book.php');
           }else{
            $error="Invalide query";
           }
      }else{
        $error="pls fill all fields";
      }
 }
 
?>


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
function numberlimit(input){
  if(input.value<0)
    input.value=0;
  if(input.value>100)
    input.value=100;
}
</script>
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
			<div id="contact_form_n">

                   <form method="post" name="contact" action="edit_book.php">
                    <i><center><font color="red"size="2px"><?php if(isset($_POST['submit_login'])) echo "".$error.""; ?></font></center></i>
                          <?php
              $code=$_GET['value'];
                 $sql="select * from book where id='".$code."'";
                 $result=mysql_query($sql);
                 if($result){
                  $sign=1;
                  $rows=mysql_fetch_assoc($result);
                 }else{
                  $sign=0;
                 }
                       if($sign == 1){
                        $c0=$rows['id'];
                           $c1=$rows['b_no'];
                          
                           $c4=$rows['isbn'];
                           $c5=$rows['subject']; 
                           $c6=$rows['b_name']; 
                           $c7=$rows['author']; 
                            $c8=$rows['publisher']; 
                             $c9=$rows['edition']; 
                             $c10=$rows['copies']; 
                              $c11=$rows['cost'];
                                         }
                                                   
      ?>
      <input type="hidden" value="<?php echo "".$c0 ?>"name="code" class="required input_field" />
                     <label for="author">Book No:</label> <input type="number" id="author"name="b"value="<?php echo "".$c1 ?>" class="required input_field" onchange="numberlimit(this);" />
                        <div class="cleaner_h10"></div>

                        
                  </br>
                        <label for="author">Isbn:</label> <input type="text" id="author"name="isbn" value="<?php echo "".$c4 ?>" class="required input_field"  />
                        <div class="cleaner_h10"></div>
                        <label for="author">Subject:</label> <input type="text" id="author"name="subject" value="<?php echo "".$c5 ?>" class="required input_field" onKeyPress="return letteronly(event);"/>
                        <div class="cleaner_h10"></div>
                       
                         <label for="author">Book Name:</label> <input type="text" id="author"name="b_name" value="<?php echo "".$c6 ?>" class="required input_field" onKeyPress="return letteronly(event);" />
                        <div class="cleaner_h10"></div>
                        <label for="author">Author:</label> <input type="text" id="author"name="author" value="<?php echo "".$c7 ?>" class="required input_field" onKeyPress="return letteronly(event);"  />
                        <div class="cleaner_h10"></div>
                        <label for="author">Publisher:</label> <input type="text" id="author"name="publisher" value="<?php echo "".$c8 ?>" class="required input_field" onKeyPress="return letteronly(event);"/>
                        <div class="cleaner_h10"></div>
                          <label for="author">Edition:</label> <input type="number" id="author"name="edition" value="<?php echo "".$c9 ?>" class="required input_field" />
                        <div class="cleaner_h10"></div>
                          <label for="author">copies:</label> <input type="number" id="author"name="copies" value="<?php echo "".$c10 ?>" class="required input_field"  />
                        <div class="cleaner_h10"></div>
                          <label for="author">cost:</label> <input type="number" id="author"name="cost" value="<?php echo "".$c11 ?>" class="required input_field"  />
                        <div class="cleaner_h10"></div>
                        <div class="cleaner_h10"></div>
                                            </br>
                        
                        <input type="submit" class="submit_btn_login" name="submit_login" id="submit" value="Edit Book" />
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
