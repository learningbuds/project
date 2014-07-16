
<html>
    <body>
         <?php
      
       $name= $_POST['name'];
       echo "$name";
       $fname=$_POST['fname'];
       $mname=$_POST['mname'];
       $dob=$_POST['dob'];
       $lschool=$_POST['lschool'];
       $pclass=$_POST['pclass'];
       $per=$_POST['percentage'];
       $email=$_POST['email'];     
       $pnumber=$_POST['pnumber'];
       $mnumber=$_POST['mnumber'];
       $address=$_POST['address'];
       $pin=$_POST['pincode'];
       //mysql connection with database 
       $con=  mysqli_connect("localhost", "root", "", "college" );
       //check connection
       if(mysqli_connect_errno())
       {
           echo 'failed to connect with databse'.  mysqli_connect_error();
       }
       $sql= "INSERT INTO student" ."(name, fname, mname, dob, lschool, pclass , percentage, email, phonenumber, mobilenumber, address, pincode )". "VALUES ('$name','$fname', '$mname','$dob','$lschool','$pclass','$per', '$email','$pnumber','$mnumber','$address','$pin' )";
       if (!mysqli_query($con, $sql))
       {
           die('ERROR:'. mysqli_error($con));
       }
       echo "record has been added ";
       mysqli_close($con);
       ?>
        <table>
                    <tr> <td>Name:<?php echo $_POST['name']?></td></tr>
                    <tr> <td>Father name:<?php echo $_POST['fname']?></td></tr>
                    <tr> <td>Mother:<?php echo $_POST['mname']?></td></tr>
                    <tr> <td>Date of birth:<?php echo $_POST['dob']?></td></tr>
                    <tr> <td>Last School:<?php echo $_POST['lschool']?></td></tr>
                    <tr> <td>Passed Class:<?php echo $_POST['pclass']?></td></tr>
                    <tr> <td>Percentage in last class:<?php echo $_POST['percentage']?></td></tr>
                    <tr> <td>email:<?php echo $_POST['email']?></td></tr>
                    <tr> <td>Phone:<?php echo $_POST['pnumber']?></td></tr>
                    <tr> <td>Mobile:<?php echo $_POST['mnumber']?></td></tr>
                    <tr> <td>Address:<?php echo $_POST['address']?></td></tr>
                    <tr> <td>Pin code:<?php echo $_POST['pincode']?></td></tr>
                    
                    
        </table>
    </body>
</html>
   
