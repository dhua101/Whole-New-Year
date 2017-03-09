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

    if(isset($_POST['runsql2'])) {
        $sqltable = $_POST['tables'];
        $sqlvalue = $_POST['values'];
    }

    if($sqltable == 'stock_tbl') {
        $sqlstatement = "INSERT INTO $sqltable(stock_item, stock_quantity) VALUES ($sqlvalue)";
        $sqlquery = mysql_query($sqlstatement, $connection);
    } else if($sqltable == 'item1_tbl' ||
              $sqltable == 'item2_tbl' ||
              $sqltable == 'item3_tbl' ||
              $sqltable == 'item4_tbl' ||
              $sqltable == 'item5_tbl' ||
              $sqltable == 'item6_tbl' ||
              $sqltable == 'item7_tbl' ||
              $sqltable == 'item8_tbl' ||
              $sqltable == 'item9_tbl' ||
              $sqltable == 'item10_tbl' ||
              $sqltable == 'item11_tbl' ||
              $sqltable == 'item12_tbl' ||
              $sqltable == 'item13_tbl' ||
              $sqltable == 'item14_tbl' ||
              $sqltable == 'item15_tbl' ||
              $sqltable == 'item16_tbl' ||
              $sqltable == 'item17_tbl' ||
              $sqltable == 'item18_tbl' ||
              $sqltable == 'item19_tbl' ||
              $sqltable == 'item20_tbl' ||
              $sqltable == 'item21_tbl') {
        $sqlstatement = "INSERT INTO $sqltable(name, rating, comment, entered) VALUES ($sqlvalue)";
        $sqlquery = mysql_query($sqlstatement, $connection);
    }

    mysql_close($connection);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>