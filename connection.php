<?php
//mysql connection with database 
       $con=  mysqli_connect("localhost", "root", "", "college" );
       //check connection
       if(mysqli_connect_errno())
       {
           echo 'failed to connect with databse'.  mysqli_connect_error();
       }

?>