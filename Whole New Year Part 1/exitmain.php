<?php
    error_reporting(E_ALL ^ E_DEPRECATED);

    unlink('../data/cart.txt');
    unlink('../data/purchase.txt');
    unlink('../data/things.txt');

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

    $sqldropping1 = "DROP TABLE stock_tbl";
    $sqldroptable1 = mysql_query($sqldropping1, $connection);

    $sqlnewtable1 = "CREATE TABLE stock_tbl LIKE stock_backup_tbl";
    $sqlcreate1 = mysql_query($sqlnewtable1, $connection);

    $sqlnewdata1 = "INSERT INTO stock_tbl SELECT * FROM stock_backup_tbl";
    $sqlinsert1 = mysql_query($sqlnewdata1, $connection);

    $sqldropping1 = "DROP TABLE stock_backup_tbl";
    $sqldroptable1 = mysql_query($sqldropping1, $connection);

    unlink("../data/item1.txt");
    unlink("../data/item2.txt");
    unlink("../data/item3.txt");
    unlink("../data/item4.txt");
    unlink("../data/item5.txt");
    unlink("../data/item6.txt");
    unlink("../data/item7.txt");
    unlink("../data/item8.txt");
    unlink("../data/item9.txt");
    unlink("../data/item10.txt");
    unlink("../data/item11.txt");
    unlink("../data/item12.txt");
    unlink("../data/item13.txt");
    unlink("../data/item14.txt");
    unlink("../data/item15.txt");
    unlink("../data/item16.txt");
    unlink("../data/item17.txt");
    unlink("../data/item18.txt");
    unlink("../data/item19.txt");
    unlink("../data/item20.txt");
    unlink("../data/item21.txt");

    rename("../data/item1_backup.txt", "../data/item1.txt");
    rename("../data/item2_backup.txt", "../data/item2.txt");
    rename("../data/item3_backup.txt", "../data/item3.txt");
    rename("../data/item4_backup.txt", "../data/item4.txt");
    rename("../data/item5_backup.txt", "../data/item5.txt");
    rename("../data/item6_backup.txt", "../data/item6.txt");
    rename("../data/item7_backup.txt", "../data/item7.txt");
    rename("../data/item8_backup.txt", "../data/item8.txt");
    rename("../data/item9_backup.txt", "../data/item9.txt");
    rename("../data/item10_backup.txt", "../data/item10.txt");
    rename("../data/item11_backup.txt", "../data/item11.txt");
    rename("../data/item12_backup.txt", "../data/item12.txt");
    rename("../data/item13_backup.txt", "../data/item13.txt");
    rename("../data/item14_backup.txt", "../data/item14.txt");
    rename("../data/item15_backup.txt", "../data/item15.txt");
    rename("../data/item16_backup.txt", "../data/item16.txt");
    rename("../data/item17_backup.txt", "../data/item17.txt");
    rename("../data/item18_backup.txt", "../data/item18.txt");
    rename("../data/item19_backup.txt", "../data/item19.txt");
    rename("../data/item20_backup.txt", "../data/item20.txt");
    rename("../data/item21_backup.txt", "../data/item21.txt");

    mysql_close($connection);

    header("Location: wholenewyear.php");
?>