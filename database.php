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
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["us-cluster-east-01.k8s.cleardb.net"];
$cleardb_username = $cleardb_url["b88a2b15bce268"];
$cleardb_password = $cleardb_url["c7ed68d4"];
$cleardb_db = substr($cleardb_url["heroku_705236df3394619"],1);
$active_group = 'default';
$query_builder = TRUE;

// Connect to DB
$conn = mysqli_connect($cleardb_server, 
                       $cleardb_username, 
                       $cleardb_password, 
                       $cleardb_db);
?>

    /*
    if($conn){
        echo "You are connected! ❤︎";
    }

    else{
        echo "Could not connect!";
    }
    */
?>