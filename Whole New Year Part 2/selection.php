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
    echo "Connection Successful<br>";

    mysql_select_db("autosolution_db");

    $sqlselect = "SELECT make_name FROM 2016_vehicle_make_tbl";
    $sqlselectquery = mysql_query($sqlselect, $connection);

    echo '<select id="make" name="make" style="width:300px;">
        <option id="any" name="any" value="any">Select Make</option>';

    while($rows = msql_fetch_assoc($sqlselectquery, MSQL_ASSOC)) {
        echo "<option>" . $row['make_name'] . "</option>";
    }
    echo "</select>";
    mysql_close($connection);
?>