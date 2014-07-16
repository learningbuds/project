<html>
    <body>     
<?php

$name= $_POST['name'];
$uname=$_POST['user'];
$pass=$_POST['pass'];

//MY SQL connection
include 'connection.php';

$sql="INSERT INTO login" ."(name, username, password )". "VALUES('$name','$uname','$pass')";
 if (!mysqli_query($con, $sql))
       {
           die('ERROR:'. mysqli_error($con));
       }
       echo "record has been added ";
       mysqli_close($con);
       ?>
</body>
</html>