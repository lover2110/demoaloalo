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
    <body>
        <?php
        $conn_string ="host=ec2-52-87-58-157.compute-1.amazonaws.com port=5432 dbname=dnasclsedgf3r user=ubburogejmlcbx password=65e177cf7971cb19ac28ef95fafeef48d7bc1a60b61d245b2750a3da65262200";
        $dbconn = pg_connect($conn_string);
        if(isset($_POST['username']))
        {
            $username=$_POST['username'];
        }
        if(isset($_POST['password']))
        {
            $password=$_POST['password'];
            $result = pg_query($dbconn ,"SELECT * FROM tbl_user WHERE username='". $username ."'and password='".$password."'");
        }
            if(!result)
            {
                echo"Login Sai";
            }
 else 
     {
                echo "Login Dung";
 }
            
            
        ?>
    </body>
</html>
