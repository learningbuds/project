<?php
//start the session
include 'connection.php';
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $name=$_POST["user"];
    $password=$_POST["pass"];
if($name== '' || $password== '')
{
  echo"you must enter user name and password";
}
 else {
    $query = "SELECT * FROM login WHERE username = '$name' AND password = '$password'";
        $result= mysql_query($query);

        if($result == false)
        {
            echo "couldnt login sucessfully" . mysql_errno();
            exit;
            
        }
        if (mysql_num_rows($result))
        {
            header('Location: your_location');
        }

        echo"username and password didnt match";
        }
    
}
?>

