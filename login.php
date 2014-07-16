<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    
    <body bgcolor="darkseagreen">
        <form action="welcome.php" method="POST" name="student">
            <table > <tr><td align="left">  Name:<input type="text" name="name"></td></tr><br><br>
     <tr><td align="left">Father Name:<input type="text" name="fname"></td></tr><br><br>
     <tr><td align="left">Mother Name:<input type="text" name="mname"></td></tr><br><br>
     <tr><td align="left">Date of Birth:<input type="date" name="dob"></td></tr><br><br>
     <tr><td align="left">Last School:<input type="text" name="lschool"></td></tr><br><br>
     <tr><td align="left">Passed Class:<input type="text" name="pclass"></td></tr><br><br>
     <tr><td align="left">Percentage:<input type="text" name="percentage"></td></tr><br><br>
     <tr><td align="lef">Email:<input type="email" name="email"></td></tr><br><br>
     <tr><td align="left">Phone Number:<input type="text" name="pnumber"></td></tr><br><br>
     <tr><td align="left">Mobile Number:<input type="text" name="mnumber"></td></tr><br><br>
     <tr><td align="left">Address:<input type="text" name="address"></td></tr><br><br>   
     <tr><td align="left">Pin Code:<input type="text" name="pincode"></td></tr><br><br>    
     <tr><td align="left"><input type="submit" value="submit"</td></tr>
           </table>
        </form>
        <?php
       $con=  mysqli_connect("localhost", "root", "", "college" );
       //check connection
       if(mysqli_connect_errno())
       {
           echo 'failed to connect with databse'.  mysqli_connect_error();
       }
     
     
       ?>
    </body>
</html>

