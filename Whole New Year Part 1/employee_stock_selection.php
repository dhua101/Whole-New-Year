<!-- application/views/scripts/index/employee_main.php -->
<?php
    session_start();
    error_reporting(E_ALL ^ E_DEPRECATED);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Whole New Year</title>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-blue.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
    <script type="text/javascript" src="Image-Slider-LnR.js"></script>
    <link rel="stylesheet" type="text/css" href="Image-Slider-LnR.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        .topmargin {
            margin-top:50px;
        }

        .leftborder {
            border-left: 3px solid red;
        }
        .bothborders {
            border-left: 3px solid red;
            border-right: 3px solid red;
        }
        .rightborder {
            border-right: 3px solid red;
        }
        .bottomborder {
            border-bottom: 3px solid green;
        }
        .border {
            border: 3px solid black;
            background: #cccc00;
        }
        .bordernoback {
            border: 3px solid black;
        }

        .container{
            width:100%;
            height:425px;
            padding:15px;
            border:1px solid black;
            -webkit-box-sizing:border-box;
            -moz-box-sizing:border-box;
            box-sizing:border-box;
            background: #ffbf00;
            text-align: center;
        }
        .slider_wrapper{
            overflow: hidden;
            position:relative;
            height:350px;
            top:auto;
        }
        #image_slider{

            position: relative;
            height: auto;
            list-style: none;
            overflow: hidden;
            float: left;
            /*Chrom default padding for ul is 40px */
            padding:0px;
            margin:0px;
        }
        #image_slider li{
            position: relative;
            float: left;
        }
        .nvgt{
            position:absolute;
            top: 120px;
            height: 50px;
            width: 30px;
            opacity: 0.6;
        }
        .nvgt:hover{
            opacity: 0.9;
        }
        #prev{
            background: #000 url('https://dl.dropboxusercontent.com/u/65639888/image/prev.png') no-repeat center;
            left: 0px;
        }
        #next{
            background: #000 url('https://dl.dropboxusercontent.com/u/65639888/image/next.png') no-repeat center;
            right: 0px;
        }
        #pager{
            /* firefox has different center method. this doesn't work for fire fox */
            /* not in the center*/
            padding:0px;
            position:relative;
            height:50px;
            margin:auto;
            margin-top:10px;
        }
        #pager li{
            padding: 0px;
            margin:5px;
            width:20px;
            height:20px;
            border:1px solid red;
            color:red;
            list-style: none;
            opacity: 0.6;
            float:left;
            border-radius: 3px;
            cursor: pointer;
        }
        #pager li:hover{
            opacity:0.9;
        }

        #search{
            background: white url(https://d30y9cdsu7xlg0.cloudfront.net/png/6983-200.png) right no-repeat;
            padding-right: 25px;
            background-size: 20px 20px;
            width: 375px;
        }
        
        #button-holder{
            background-color:#f1f1f1;
            border-top:thin solid #e5e5e5;
            box-shadow:1px 1px 1px 1px #e5e5e5;
            cursor:pointer;
            float:left;
            height:27px;
            margin:11px 0 0 0;
            text-align:center;
            width:50px;
        }
        
        #button-holder img{
            margin:4px;
            width:20px; 
        }

        .rating {
            unicode-bidi: bidi-override;
            direction: rtl;
            text-align:left;
        }
        .rating > span {
            display: inline-block;
            position: relative;
            width: 1.1em;
        }
        #imagelist a {
            position: relative;
            display: inline-block;
        }
        #imagelist a p {
            display: none;
        }
        #imagelist a:hover p {
            position: absolute;
            width: 100%;
            height: 100%;
            background: #000;
            opacity: 0.8;
            top: 0;
            left: 0;
            margin: 0;
            display: block;
        }
        #imagelist a p span {
            display: inline-table;
            width: 100%;
            height: 100%;
            text-align: center;
            color:#fff;
        }
        #imagelist a p span span {
            display: table-cell;
            vertical-align: middle;
        }

        #runsql {
            background-color: limegreen;
            font-weight: bold;
        }

        #resultscontent {
            width: 950px;
            height: 500px;
            border: 1px solid black;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <!-- Side Navigation on click -->
    <nav class="w3-sidenav w3-white w3-card-2 w3-animate-left" style="display:none;z-index:2" id="mySidenav">
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-closenav w3-xxxlarge w3-text-teal">Close
            <i class="fa fa-remove"></i>
        </a>
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
        <a href="#">Link 4</a>
        <a href="#">Link 5</a>
    </nav>

    <!-- Navbar -->
    <div class="w3-top">
        <ul class="w3-navbar w3-white w3-left-align">
            <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
                <a class="w3-hover-red w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
            </li>
            <li><a href="wholenewyear.php" class="w3-white"><img src="http://localhost/Whole%20New%20Year%20PHP%20MySQL/My%20Zend%20Framework/application/views/scripts/index/logo.jpg" style="width:65%" class="fa fa-home w3-margin-right"></a></li>
            <li class="w3-hide-small w3-left"><a href="#" class="w3-hover-yellow" title="Search">
            <form action="searching.php" method="POST">
                <input type="text" id="search" name="search" placeholder="search item" id='search-text-input' style="width:425px margin-top:42px;">
            </form></a></li>
            <li class="w3-hide-small w3-right">
            <form action="exitmain.php">
                <input type="submit" name="exit" value="x">
            </form></li>
            <li class="w3-hide-small w3-right"><a href="contact.phtml" class="w3-hover-yellow" title="Help"><i class="fa fa-question-circle" id="help"></i> Help</a></li>
            <li class="w3-hide-small w3-right"><a href="shoppingcart.php" class="w3-hover-yellow" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
            <li class="w3-hide-small w3-right"><a href="accountsignin.phtml" class="w3-hover-yellow">Sign In</a></li>
        </ul>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium">
        <ul class="w3-navbar w3-left-align w3-theme">
            <li><a href="#">Search</a></li>
        </ul>
     </div>
    </div>
    
    <div class="w3-main topmargin" method="POST">
        <div class="w3-panel">
            <div class="col-xs-9">
                <div class="w3-panel">
                    <div class="w3-center">
                        <h1>Employee Lounge</h1>
                    </div>
                </div>
                <div class="w3-panel">
                    <h3>SQL Results</h3>
                    <div id="content">
                        <h3>Inventory and Stock</h3>
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

    $sqlstockcount = "SELECT COUNT(*) as total FROM stock_tbl";
    $sqlstockcountquery = mysql_query($sqlstockcount, $connection);
    $count = mysql_fetch_assoc($sqlstockcountquery);
    echo "Number of Records: " . $count['total'];
?>
                        <table>
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

    echo "<tr><th style='border:1px solid black'>Stock ID</th><th style='border:1px solid black'>Stock Item</th><th style='border:1px solid black'>Stock Quantity</th></tr>";

    while($row = mysql_fetch_assoc($sqlstockquery, MYSQL_ASSOC)) {
        echo "<tr>";
        echo "<td style='border:1px solid black'>" . $row['stock_id'] . "</td><td style='border:1px solid black'>" . $row['stock_item'] . "</td><td style='border:1px solid black'>" . $row['stock_quantity'] . "</td>";
        echo "</tr>";
    }

    mysql_close($connection);
?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="w3-center">
                    <div class="w3-panel">
                        <div class="col-xs-6 w3-left">
                            <p>Name of Table</p>
                            <a href="employee_stock_selection.php" name="stock">Stock</a>
                            <br>
                            <a href="employee_customerinfo_selection.php" name="customerinfo">Customer Info</a>
                            <br>
                            <a href="employee_account_selection.php" name="account">Account</a>
                        </div>
                        <div class="col-xs-6 w3-right">
                            <p># of Records</p>
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

    $sqlstockcount = "SELECT COUNT(*) as total1 FROM stock_tbl";
    $sqlstockcountquery = mysql_query($sqlstockcount, $connection);
    $count1 = mysql_fetch_assoc($sqlstockcountquery);
    echo $count1['total1'] . "<br>";

    $sqlcustomerinfocount = "SELECT COUNT(*) as total2 FROM customerinfo_tbl";
    $sqlcustomerinfocountquery = mysql_query($sqlcustomerinfocount, $connection);
    $count2 = mysql_fetch_assoc($sqlcustomerinfocountquery);
    echo $count2['total2'] . "<br>";

    $sqlaccountcount = "SELECT COUNT(*) as total3 FROM account_tbl";
    $sqlaccountcountquery = mysql_query($sqlaccountcount, $connection);
    $count3 = mysql_fetch_assoc($sqlaccountcountquery);
    echo $count3['total3'] . "<br>";
?>
                        </div>

                        <br>
                        <br>

                        <h3>SQL Statement</h3>
                        <form method="post" action="employee_sql_statement.php">
                            Mode: SELECT
                            <br>
                            Fields:
                            <input type="text" id="fields" name="fields">
                            <br>
                            (separate each field by comma ",");
                            <br>
                            Table Select:
                            <br>
                            <select name="tables">
                                <option name="any" value="any">Select a table</option>
                                <option name="stock" value="stock_tbl">stock_tbl</option>
                                <option name="item1" value="item1_tbl">item1_tbl</option>
                                <option name="item2" value="item2_tbl">item2_tbl</option>
                                <option name="item3" value="item3_tbl">item3_tbl</option>
                                <option name="item4" value="item4_tbl">item4_tbl</option>
                                <option name="item5" value="item5_tbl">item5_tbl</option>
                                <option name="item6" value="item6_tbl">item6_tbl</option>
                                <option name="item7" value="item7_tbl">item7_tbl</option>
                                <option name="item8" value="item8_tbl">item8_tbl</option>
                                <option name="item9" value="item9_tbl">item9_tbl</option>
                                <option name="item10" value="item10_tbl">item10_tbl</option>
                                <option name="item11" value="item11_tbl">item11_tbl</option>
                                <option name="item12" value="item12_tbl">item12_tbl</option>
                                <option name="item13" value="item13_tbl">item13_tbl</option>
                                <option name="item14" value="item14_tbl">item14_tbl</option>
                                <option name="item15" value="item15_tbl">item15_tbl</option>
                                <option name="item16" value="item16_tbl">item16_tbl</option>
                                <option name="item17" value="item17_tbl">item17_tbl</option>
                                <option name="item18" value="item18_tbl">item18_tbl</option>
                                <option name="item19" value="item19_tbl">item19_tbl</option>
                                <option name="item20" value="item20_tbl">item20_tbl</option>
                                <option name="item21" value="item21_tbl">item21_tbl</option>
                            </select>
                            <br>
                            Condition:
                            <input type="text" name="condition">
                            <br>
                            <br>
                            <input type="submit" id="runsql" class="btn btn-default" name="runsql" value="Run SQL">
                        </form>
                        <form method="post" action="employee_sql_insert_statement.php">
                            Mode: INSERT
                            <br>
                            Table Select:
                            <br>
                            <select name="tables">
                                <option name="any" value="any">Select a table</option>
                                <option name="stock" value="stock_tbl">stock_tbl</option>
                                <option name="item1" value="item1_tbl">item1_tbl</option>
                                <option name="item2" value="item2_tbl">item2_tbl</option>
                                <option name="item3" value="item3_tbl">item3_tbl</option>
                                <option name="item4" value="item4_tbl">item4_tbl</option>
                                <option name="item5" value="item5_tbl">item5_tbl</option>
                                <option name="item6" value="item6_tbl">item6_tbl</option>
                                <option name="item7" value="item7_tbl">item7_tbl</option>
                                <option name="item8" value="item8_tbl">item8_tbl</option>
                                <option name="item9" value="item9_tbl">item9_tbl</option>
                                <option name="item10" value="item10_tbl">item10_tbl</option>
                                <option name="item11" value="item11_tbl">item11_tbl</option>
                                <option name="item12" value="item12_tbl">item12_tbl</option>
                                <option name="item13" value="item13_tbl">item13_tbl</option>
                                <option name="item14" value="item14_tbl">item14_tbl</option>
                                <option name="item15" value="item15_tbl">item15_tbl</option>
                                <option name="item16" value="item16_tbl">item16_tbl</option>
                                <option name="item17" value="item17_tbl">item17_tbl</option>
                                <option name="item18" value="item18_tbl">item18_tbl</option>
                                <option name="item19" value="item19_tbl">item19_tbl</option>
                                <option name="item20" value="item20_tbl">item20_tbl</option>
                                <option name="item21" value="item21_tbl">item21_tbl</option>
                            </select>
                            <br>
                            Values:
                            <input type="text" name="values">
                            <br>
                            (each value goes like this 'value1', 'value2'...)
                            <br>
                            <br>
                            <input type="submit" id="runsql2" class="btn btn-default" name="runsql2" value="Run SQL">
                        </form>
                        <form method="post" action="employee_sql_update_statement.php">
                            Mode: UPDATE
                            <br>
                            Fields and Values:
                            <input type="text" id="fields" name="fields">
                            <br>
                            (fields should be like this field1='value1');
                            <br>
                            Table Select:
                            <br>
                            <select name="tables">
                                <option name="any" value="any">Select a table</option>
                                <option name="stock" value="stock_tbl">stock_tbl</option>
                                <option name="item1" value="item1_tbl">item1_tbl</option>
                                <option name="item2" value="item2_tbl">item2_tbl</option>
                                <option name="item3" value="item3_tbl">item3_tbl</option>
                                <option name="item4" value="item4_tbl">item4_tbl</option>
                                <option name="item5" value="item5_tbl">item5_tbl</option>
                                <option name="item6" value="item6_tbl">item6_tbl</option>
                                <option name="item7" value="item7_tbl">item7_tbl</option>
                                <option name="item8" value="item8_tbl">item8_tbl</option>
                                <option name="item9" value="item9_tbl">item9_tbl</option>
                                <option name="item10" value="item10_tbl">item10_tbl</option>
                                <option name="item11" value="item11_tbl">item11_tbl</option>
                                <option name="item12" value="item12_tbl">item12_tbl</option>
                                <option name="item13" value="item13_tbl">item13_tbl</option>
                                <option name="item14" value="item14_tbl">item14_tbl</option>
                                <option name="item15" value="item15_tbl">item15_tbl</option>
                                <option name="item16" value="item16_tbl">item16_tbl</option>
                                <option name="item17" value="item17_tbl">item17_tbl</option>
                                <option name="item18" value="item18_tbl">item18_tbl</option>
                                <option name="item19" value="item19_tbl">item19_tbl</option>
                                <option name="item20" value="item20_tbl">item20_tbl</option>
                                <option name="item21" value="item21_tbl">item21_tbl</option>
                            </select>
                            <br>
                            Condition:
                            <input type="text" name="condition">
                            <br>
                            <br>
                            <input type="submit" id="runsql" class="btn btn-default" name="runsql3" value="Run SQL">
                        </form>
                        <form method="post" action="employee_sql_delete_statement.php">
                            Mode: DELETE
                            <br>
                            Table Select:
                            <br>
                            <select name="tables">
                                <option name="any" value="any">Select a table</option>
                                <option name="stock" value="stock_tbl">stock_tbl</option>
                                <option name="item1" value="item1_tbl">item1_tbl</option>
                                <option name="item2" value="item2_tbl">item2_tbl</option>
                                <option name="item3" value="item3_tbl">item3_tbl</option>
                                <option name="item4" value="item4_tbl">item4_tbl</option>
                                <option name="item5" value="item5_tbl">item5_tbl</option>
                                <option name="item6" value="item6_tbl">item6_tbl</option>
                                <option name="item7" value="item7_tbl">item7_tbl</option>
                                <option name="item8" value="item8_tbl">item8_tbl</option>
                                <option name="item9" value="item9_tbl">item9_tbl</option>
                                <option name="item10" value="item10_tbl">item10_tbl</option>
                                <option name="item11" value="item11_tbl">item11_tbl</option>
                                <option name="item12" value="item12_tbl">item12_tbl</option>
                                <option name="item13" value="item13_tbl">item13_tbl</option>
                                <option name="item14" value="item14_tbl">item14_tbl</option>
                                <option name="item15" value="item15_tbl">item15_tbl</option>
                                <option name="item16" value="item16_tbl">item16_tbl</option>
                                <option name="item17" value="item17_tbl">item17_tbl</option>
                                <option name="item18" value="item18_tbl">item18_tbl</option>
                                <option name="item19" value="item19_tbl">item19_tbl</option>
                                <option name="item20" value="item20_tbl">item20_tbl</option>
                                <option name="item21" value="item21_tbl">item21_tbl</option>
                            </select>
                            <br>
                            Condition:
                            <input type="text" name="condition">
                            <br>
                            <br>
                            <input type="submit" id="runsql" class="btn btn-default" name="runsql4" value="Run SQL">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="w3-container w3-padding-32 w3-theme-d1">
        <div class="w3-left">
            <div class="w3-panel">
                <div class="w3-row">
                    <div class="w3-quarter">
                        <img src="#" style="width:50%">
                    </div>
                    <div class="w3-quarter">
                        <img src="#" style="width:50%">
                    </div>
                    <div class="w3-quarter">
                        <img src="#" style="width:50%">
                    </div>
                    <div class="w3-quarter">
                        <img src="#" style="width:50%">
                    </div>
                </div>
            </div>
        </div>

        <div class="w3-panel">
            <div class="w3-quarter rightborder">
                <div class='w3-center'>
                    <h3>Find Your Location</h3>
                </div>

                London Ontario, Canada
                <br>
                Toronto Ontario, Canada
                <br>
                Montreal Quebec, Canada
            </div>
            <div class="w3-quarter w3-center">
                <h4>Follow Us</h4>
                <a class="w3-btn-floating w3-theme-l3" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
                <a class="w3-btn-floating w3-theme-l3" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
                <a class="w3-btn-floating w3-theme-l3" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
                <a class="w3-btn-floating w3-theme-l3 w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
            </div>
            <div class="w3-quarter leftborder">
                <div class="w3-half">
                    <div class="w3-panel w3-center bottomborder">
                        <a href="#">Home</a>
                    </div>
                    <div class="w3-panel w3-center bottomborder">
                        <a href="catalog.phtml">Catalog</a>
                    </div>
                    <div class="w3-panel w3-center bottomborder">
                        <a href="contact.phtml">Contact</a>
                    </div>
                </div>
            </div>
            <div style="position:relative;bottom:25px;z-index:1;" class="w3-tooltip w3-right">
                <span class="w3-text w3-padding w3-red w3-hide-small">Go To Top</span>   
                <a class="w3-btn w3-theme" href="wholenewyear.php"><span class="w3-xlarge">
                <i class="fa fa-chevron-circle-up"></i></span></a>
            </div>
        </div>
    </footer>

    <!-- Script For Side Navigation -->
    <script>
    function w3_open() {
        var x = document.getElementById("mySidenav");
        x.style.width = "300px";
        x.style.textAlign = "center";
        x.style.fontSize = "40px";
        x.style.paddingTop = "10%";
        x.style.display = "block";
    }
    function w3_close() {
        document.getElementById("mySidenav").style.display = "none";
    }

    // Used to toggle the menu on smaller screens when clicking on the menu button
    function openNav() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else { 
            x.className = x.className.replace(" w3-show", "");
        }
    }

    var ul;
    var li_items; 
    var li_number;
    var image_number = 0;
    var slider_width = 0;
    var image_width;
    var current = 0;
    function init(){	
        ul = document.getElementById('image_slider');
        li_items = ul.children;
        li_number = li_items.length;
        for (i = 0; i < li_number; i++){
            // nodeType == 1 means the node is an element.
            // in this way it's a cross-browser way.
            //if (li_items[i].nodeType == 1){
                //clietWidth and width???
                image_width = li_items[i].childNodes[0].clientWidth;
                slider_width += image_width;
                image_number++;
        }
        
        ul.style.width = parseInt(slider_width) + 'px';
        slider(ul);
    }

    function slider(){		
            animate({
                delay:25,
                duration: 4000,
                delta:function(p){return Math.max(0, -1 + 2 * p)},
                step:function(delta){
                        ul.style.left = '-' + parseInt(current * image_width + delta * image_width) + 'px';
                    },
                callback:function(){
                    current++;
                    if(current < li_number-1){
                        slider();
                    }
                    else{
                        var left = (li_number - 1) * image_width;					
                        setTimeout(function(){goBack(left)},2000); 				
                        setTimeout(slider, 4000);
                    }
                }
            });
    }
    function goBack(left_limits){
        current = 0;	
        setInterval(function(){
            if(left_limits >= 0){
                ul.style.left = '-' + parseInt(left_limits) + 'px';
                left_limits -= image_width / 10;
            }	
        }, 17);
    }
    function animate(opts){
        var start = new Date;
        var id = setInterval(function(){
            var timePassed = new Date - start;
            var progress = timePassed / opts.duration
            if(progress > 1){
                progress = 1;
            }
            var delta = opts.delta(progress);
            opts.step(delta);
            if (progress == 1){
                clearInterval(id);
                opts.callback();
            }
        }, opts.dalay || 17);
    }
    window.onload = init;
    </script>
</body>
</html>