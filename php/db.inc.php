<?php 

    $servername="localhost";    
    $serverusername="root";    
    $serverpassword="temitope";    
    $dbname="jq";    

    // $connection=mysqli_connect("$servername", "$serverusername", "$serverpassword", "$dbname");
    $connection=mysqli_connect($servername, $serverusername, $serverpassword, $dbname);
    if (!$connection) {
        die("Error in connection".mysqli_connect_error());
    }
?>