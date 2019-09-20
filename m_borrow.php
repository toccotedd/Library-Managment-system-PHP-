<?php
   session_start();
   include "./connect.php";
 
   $code=$_GET['value'];
   if( $code){
      
	                  $sql="insert into request values(NULL,'".$_SESSION['id']."','".$code."')";
					  $result=mysql_query($sql);
	                  header("location:mb_book.php");

                       }
     
?>
