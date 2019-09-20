<?php
   session_start();
   include "./connect.php";
 
   $code=$_GET['value'];
   if( $code){
      
	                  $sql="delete from book where id='".$code."'";
					  $result=mysql_query($sql);
	                  header("location:d_book.php");

                       }
     
?>
