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

    $username = $_GET['user'];
    $password = $_GET['pass'];

    
    $sqlsignin = "SELECT * FROM account_tbl WHERE username='$username' AND password='$password'";
    $sqlquery = mysql_query($sqlsignin, $connection);

    if(mysql_fetch_array($sqlquery) !== false) {
        $filew = fopen("../data/account.txt", "w");
        fwrite($filew, $username);
        fclose($filew);
        header("Location: wholenewyearmember.php");
    } else {
        header("Location: accountretry.php");
    }

    mysql_close($connection);
?>