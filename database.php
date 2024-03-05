<?php
/*
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "nn_booking";
    $conn = "";

    $conn = mysqli_connect($db_server, 
                            $db_user, 
                            $db_pass, 
                            $db_name);

*/

//Get Heroku ClearDB connection information
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["us-cluster-east-01.k8s.cleardb.net"];
$username = $url["b88a2b15bce268"];
$password = $url["c7ed68d4"];
$db = substr($url["heroku_705236df3394619"], 1);

$conn = new mysqli($server, 
                   $username, 
                   $password, 
                   $db);


    /*
    if($conn){
        echo "You are connected! ❤︎";
    }

    else{
        echo "Could not connect!";
    }
    */
?>