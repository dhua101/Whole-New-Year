<?php
    session_start();
    error_reporting(E_ALL ^ E_DEPRECATED);

    //$servername = "127.0.0.1:3306";
    $servername = "localhost";
    $username = "dhua3";
    $password = "OpTicGen101";

    // Create the connection
    $connection = mysql_connect($servername, $username, $password);

    // Check the connection
    if(!$connection) {
        die("Connection Failed");
    }

    mysql_select_db("wholenewyear_2_db");

    $name = $_GET['name'];
    $rating = $_GET['rating'];
    $comment = $_GET['comment'];
    $entered = date("M d, Y");

    $sql = "INSERT INTO item6_tbl(name, rating, comment, entered) VALUES('$name', '$rating', '$comment', '$entered')";
    mysql_query($sql, $connection);

    header("Location: item6.php");

    mysql_close($connection);
?>