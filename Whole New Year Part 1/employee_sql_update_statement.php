<?php
    error_reporting(0);

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

    // Select the database
    mysql_select_db("wholenewyear_2_db");

    if(isset($_POST['runsql3'])) {
        $sqlfield = $_POST['fields'];
        $sqltable = $_POST['tables'];
        $sqlcondition = $_POST['condition'];
    }
    $sqlstatement = "UPDATE $sqltable SET $sqlfield WHERE $sqlcondition";
    $sqlquery = mysql_query($sqlstatement, $connection);

    mysql_close($connection);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>