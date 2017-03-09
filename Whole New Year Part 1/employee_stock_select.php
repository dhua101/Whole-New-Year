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

    $sqlstock = "SELECT * FROM stock_tbl";
    $sqlstockquery = mysql_query($sqlstock, $connection);

    echo "<tr>
        <th>Stock ID<th>
        <th>Stock Item<th>
        <th>Stock Quantity<th>
    </tr>";

    while($row = mysql_fetch_assoc($sqlstockquery, MYSQL_ASSOC)) {
        echo "<tr>";
         echo "<td style='border:1px solid black'>" . $row['stock_id'] . "</td><td style='border:1px solid black'>" . $row['stock_item'] . "</td><td style='border:1px solid black'>" . $row['stock_quantity'] . "</td>";
        echo "</tr>";
    }
?>