<?php
   session_start();
   include "./connect.php";
 
   $code=$_GET['value'];
   if( $code){
      
	                  $sql="update borrowed set returned='yes' where id='".$code."'";
					  $result=mysql_query($sql);
	                  header("location:r_book.php");

                       }
     
?>
