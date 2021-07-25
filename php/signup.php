<?php 
    require 'db.inc.php';

    if (isset($_POST['username'])) {
        $username=$_POST['username'];
        $password=$_POST['password'];

        $username    = stripslashes($_POST['username']);
        $username    = mysqli_real_escape_string($connection, $username);

        $password = stripslashes($_POST['password']);
        $password = mysqli_real_escape_string($connection, $password);
        $password= md5($password);



        $query="INSERT INTO jq (username, password) VALUES('$username', '$password'  )";
        $result=mysqli_query($connection, $query);
        if (!$result) {
            die("Error in Query!".mysqli_error($result));
        } 
            echo $username.' Created!'; 

    }
    
?>

