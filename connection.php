<?php
    $hostname = "localhost";
    $dbUser = "root";
    $dbpass = "";
    $dbName = "todo";

    $conn = mysqli_connect(
        $hostname,
        $dbUser, 
        $dbpass,
        $dbName
        
    );

    if($conn){
        echo "yes";
    }else{
        echo "no";
    }


?>