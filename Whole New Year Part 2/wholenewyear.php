<!-- application/views/scripts/index/index.phtml -->

<?php
    session_start();
    error_reporting(E_ALL ^ E_DEPRECATED);
    $stock = '';
    
    copy("../data/item1.txt", "../data/item1_backup.txt");
    copy("../data/item2.txt", "../data/item2_backup.txt");
    copy("../data/item3.txt", "../data/item3_backup.txt");
    copy("../data/item4.txt", "../data/item4_backup.txt");
    copy("../data/item5.txt", "../data/item5_backup.txt");
    copy("../data/item6.txt", "../data/item6_backup.txt");
    copy("../data/item7.txt", "../data/item7_backup.txt");
    copy("../data/item8.txt", "../data/item8_backup.txt");
    copy("../data/item9.txt", "../data/item9_backup.txt");
    copy("../data/item10.txt", "../data/item10_backup.txt");
    copy("../data/item11.txt", "../data/item11_backup.txt");
    copy("../data/item12.txt", "../data/item12_backup.txt");
    copy("../data/item13.txt", "../data/item13_backup.txt");
    copy("../data/item14.txt", "../data/item14_backup.txt");
    copy("../data/item15.txt", "../data/item15_backup.txt");
    copy("../data/item16.txt", "../data/item16_backup.txt");
    copy("../data/item17.txt", "../data/item17_backup.txt");
    copy("../data/item18.txt", "../data/item18_backup.txt");
    copy("../data/item19.txt", "../data/item19_backup.txt");
    copy("../data/item20.txt", "../data/item20_backup.txt");
    copy("../data/item21.txt", "../data/item21_backup.txt");
    copy("../data/item22.txt", "../data/item22_backup.txt");
    copy("../data/item23.txt", "../data/item23_backup.txt");

    include 'database_setup.php';
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
            background: #b3d1ff;
        }
        .bordernoback {
            border: 3px solid black;
        }

        .banner-color {
            background: #ffb3ff;
        }

        .container{
            width:100%;
            height:425px;
            padding:15px;
            border:1px solid black;
            -webkit-box-sizing:border-box;
            -moz-box-sizing:border-box;
            box-sizing:border-box;
            background: white;
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
            <li><a href="#" class="w3-white"><img src="http://localhost/Whole%20New%20Year%20PHP%20MySQL/My%20Zend%20Framework/application/views/scripts/index/logo.jpg" style="width:65%" class="fa fa-home w3-margin-right"></a></li>
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
        <ul class="w3-blue w3-navbar w3-left-align">
            <li class="w3-hide-small"><a href="#" class="w3-theme-d3">Home</a></li>
            <li class="w3-hide-small"><a href="catalog.phtml" class="w3-theme-d3  w3-hover-yellow">Catalog</a></li>

            <a href="customerinfo.phtml" class="w3-theme-d3 w3-right w3-hover-yellow" style="margin-top:8px">Complete Form for Purchases</a>
        </ul>

        <div class="container w3-center">
            <div id="sales" class="carousel slide" data-ride="carousel" data-interval="5000">
                <ol class="carousel-indicators">
                    <li onclick="$('#imageDisplay1').attr('src','http://localhost/Whole%20New%20Year/My%20Zend%20Framework/application/views/scripts/index/sale1.gif' + '?' + new Date().getTime())" data-target="#sales" data-slide-to="0" class="active"></li>
                    <li onclick="$('#imageDisplay2').attr('src','http://localhost/Whole%20New%20Year/My%20Zend%20Framework/application/views/scripts/index/sale2.gif' + '?' + new Date().getTime())" data-target="#sales" data-slide-to="1"></li>
                    <li onclick="$('#imageDisplay3').attr('src','http://localhost/Whole%20New%20Year/My%20Zend%20Framework/application/views/scripts/index/sale3.gif' + '?' + new Date().getTime())" data-target="#sales" data-slide-to="2"></li>
                    <li onclick="$('#imageDisplay4').attr('src','http://localhost/Whole%20New%20Year/My%20Zend%20Framework/application/views/scripts/index/sale4.gif' + '?' + new Date().getTime())" data-target="#sales" data-slide-to="3"></li>
                    <li onclick="$('#imageDisplay5').attr('src','http://localhost/Whole%20New%20Year/My%20Zend%20Framework/application/views/scripts/index/sale5.gif' + '?' + new Date().getTime())" data-target="#sales" data-slide-to="4"></li>
                </ol>
                
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img id="imageDisplay1" src="http://localhost/Whole%20New%20Year%20PHP%20MySQL/My%20Zend%20Framework/application/views/scripts/index/sale1.gif" onload="setTimeout('document.getElementById(\'imageDisplay1\').src=\'http://localhost/Whole%20New%20Year%20PHP%20MySQL/My%20Zend%20Framework/application/views/scripts/index/sale1.gif?\'+new Date().getMilliseconds()',6000)">
                    </div>
                    <div class="item">
                        <img id="imageDisplay2" src="http://localhost/Whole%20New%20Year%20PHP%20MySQL/My%20Zend%20Framework/application/views/scripts/index/sale2.gif" onload="setTimeout('document.getElementById(\'imageDisplay2\').src=\'http://localhost/Whole%20New%20Year%20PHP%20MySQL/My%20Zend%20Framework/application/views/scripts/index/sale2.gif?\'+new Date().getMilliseconds()',6000)">
                    </div>
                    <div class="item">
                        <img id="imageDisplay3" src="http://localhost/Whole%20New%20Year%20PHP%20MySQL/My%20Zend%20Framework/application/views/scripts/index/sale3.gif" onload="setTimeout('document.getElementById(\'imageDisplay3\').src=\'http://localhost/Whole%20New%20Year%20PHP%20MySQL/My%20Zend%20Framework/application/views/scripts/index/sale3.gif?\'+new Date().getMilliseconds()',6000)">
                    </div>
                    <div class="item">
                        <img id="imageDisplay4" src="http://localhost/Whole%20New%20Year%20PHP%20MySQL/My%20Zend%20Framework/application/views/scripts/index/sale4.gif" onload="setTimeout('document.getElementById(\'imageDisplay4\').src=\'http://localhost/Whole%20New%20Year%20PHP%20MySQL/My%20Zend%20Framework/application/views/scripts/index/sale4.gif?\'+new Date().getMilliseconds()',6000)">
                    </div>
                    <div class="item">
                        <img id="imageDisplay5" src="http://localhost/Whole%20New%20Year%20PHP%20MySQL/My%20Zend%20Framework/application/views/scripts/index/sale5.gif" onload="setTimeout('document.getElementById(\'imageDisplay5\').src=\'http://localhost/Whole%20New%20Year%20PHP%20MySQL/My%20Zend%20Framework/application/views/scripts/index/sale5.gif?\'+new Date().getMilliseconds()',6000)">
                    </div>
                </div>

                <a class="left carousel-control" href="#sales" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#sales" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        
        <div class="w3-panel border">
            <div class="w3-row">
                <div class="w3-col m2">
                    <div class="w3-card">
                        <div class="w3-display-container w3-center" style="height:100px;">
                            <div class="w3-display-middle">
                                Get apparel from any brand
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w3-col m2">
                    <div class="w3-card">
                        <div class="w3-center">
                            <img src="http://d15v13h3408o3u.cloudfront.net/damfiles/article_img_4_rectangle/this-is-puma/history/bilder/1979_PUMA-no1-logo-07a9e63f571321c54a40025b8c54c96c.jpg" style="width:45%">
                            <p>PUMA</p>
                        </div>
                    </div>
                </div>
                <div class="w3-col m2">
                    <div class="w3-card">
                        <div class="w3-center">
                            <img src="https://static.festisite.com/static/partylogo/img/logos/nike.png" style="width:44%">
                            <p>NIKE</p>
                        </div>
                    </div>
                </div>
                <div class="w3-col m2">
                    <div class="w3-card">
                        <div class="w3-center">
                            <img src="http://i290.photobucket.com/albums/ll274/jessyokolee/logo_black_gray_552x300-1.jpg" style="width:44%">
                            <p>POLYVORE</p>
                        </div>
                    </div>
                </div>
                <div class="w3-col m2">
                    <div class="w3-card">
                        <div class="w3-center">
                            <img src="https://www.fineprintnyc.com/images/blog/history-adidas-logo/adidas-equipment-logo.jpg" style="width:35%">
                            <p>ADIDAS</p>
                        </div>
                    </div>
                </div>
                <div class="w3-col m2">
                    <div class="w3-card">
                        <div class="w3-center">
                            <img src="http://3.bp.blogspot.com/_7yB-eeGviiI/TShdNUu6twI/AAAAAAAAFTY/-GBTz4R3MN4/s1600/tommy_hilfiger_logo14.jpg" style="width:33%">
                            <p>TOMMY HILFIGER</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w3-panel">
            <h5><b>Hot Rated Apparel</b></h5>
        </div>
        
        <div class="w3-panel bordernoback">
            <div class="w3-row">
                <div class="w3-col m2">
                    <div class="w3-card">
                        <div class="card-block">
                            <div id="imagelist">
                                <a href="item2.php"><img src="http://pumaecom.scene7.com/is/image/PUMAECOM/571537_03_PNA?$PUMA_GRID$" style="width:100%">
                                <p class="imgtext">
                                    <span>
                                        <span>Quick View</span>
                                    </span>
                                </p>
                                </a>
                            </div>

                            <p>Price: $39.99</p>
                            <p>PUMA</p>
                            <p>T7 Heather Jacket</p>
                <?php
                    error_reporting(E_ALL ^ E_DEPRECATED);
                    $stock = '';

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

                    $count = "SELECT COUNT(*) FROM item2_tbl";
                    $countquery = mysql_query($count, $connection);

                    $average = "SELECT AVG(rating) FROM item2_tbl";
                    $averagequery = mysql_query($average, $connection);

                    echo "
                    <div class='w3-panel'>";
                    
                    if(mysql_result($averagequery, 0) == 1 ||
                       (mysql_result($averagequery, 0) > 0.8 && mysql_result($averagequery, 0) < 1) ||
                       (mysql_result($averagequery, 0) > 1 && mysql_result($averagequery, 0) < 1.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 2 ||
                       (mysql_result($averagequery, 0) > 1.8 && mysql_result($averagequery, 0) < 2) ||
                       (mysql_result($averagequery, 0) > 2 && mysql_result($averagequery, 0) < 2.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }  else if(mysql_result($averagequery, 0) == 3 ||
                       (mysql_result($averagequery, 0) > 2.8 && mysql_result($averagequery, 0) < 3) ||
                       (mysql_result($averagequery, 0) > 3 && mysql_result($averagequery, 0) < 3.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 4 ||
                       (mysql_result($averagequery, 0) > 3.8 && mysql_result($averagequery, 0) < 4) ||
                       (mysql_result($averagequery, 0) > 4 && mysql_result($averagequery, 0) < 4.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 5 ||
                       (mysql_result($averagequery, 0) > 4.8 && mysql_result($averagequery, 0) < 5)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }

                    if(mysql_result($averagequery, 0) == 0.5 ||
                       (mysql_result($averagequery, 0) > 0.3 && mysql_result($averagequery, 0) < 0.5)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 1.5 ||
                       (mysql_result($averagequery, 0) > 1.3 && mysql_result($averagequery, 0) < 1.5) ||
                       (mysql_result($averagequery, 0) > 1.5 && mysql_result($averagequery, 0) < 1.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 2.5 ||
                       (mysql_result($averagequery, 0) > 2.3 && mysql_result($averagequery, 0) < 2.5) ||
                       (mysql_result($averagequery, 0) > 2.5 && mysql_result($averagequery, 0) < 2.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }  else if(mysql_result($averagequery, 0) == 3.5 ||
                       (mysql_result($averagequery, 0) > 3.3 && mysql_result($averagequery, 0) < 3.5) ||
                       (mysql_result($averagequery, 0) > 3.5 && mysql_result($averagequery, 0) < 3.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 4.5 ||
                       (mysql_result($averagequery, 0) > 4.3 && mysql_result($averagequery, 0) < 4.5) ||
                       (mysql_result($averagequery, 0) > 4.5 && mysql_result($averagequery, 0) < 4.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }

                    echo "</div>";

                    mysql_close($connection);
                ?>
                        </div>
                    </div>
                </div>
                <div class="w3-col m2">
                    <div class="w3-card">
                        <div class="card-block">
                            <div id="imagelist">
                                <a href="item9.php"><img src="http://images.nike.com/is/image/DotCom/PDP_COPY/801996_012/pro-hyperwarm-long-sleeve-training-top.jpg" style="width:100%">
                                <p class="imgtext">
                                    <span>
                                        <span>Quick View</span>
                                    </span>
                                </p>
                                </a>
                            </div>

                            <p>Price: $45</p>
                            <p>NIKE</p>
                            <p>Nike Pro HyperWarm</p>
                <?php
                    error_reporting(E_ALL ^ E_DEPRECATED);
                    $stock = '';

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
                    
                    $count = "SELECT COUNT(*) FROM item9_tbl";
                    $countquery = mysql_query($count, $connection);

                    $average = "SELECT AVG(rating) FROM item9_tbl";
                    $averagequery = mysql_query($average, $connection);

                    echo "
                    <div class='w3-panel'>";
                    
                    if(mysql_result($averagequery, 0) == 1 ||
                       (mysql_result($averagequery, 0) > 0.8 && mysql_result($averagequery, 0) < 1) ||
                       (mysql_result($averagequery, 0) > 1 && mysql_result($averagequery, 0) < 1.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 2 ||
                       (mysql_result($averagequery, 0) > 1.8 && mysql_result($averagequery, 0) < 2) ||
                       (mysql_result($averagequery, 0) > 2 && mysql_result($averagequery, 0) < 2.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }  else if(mysql_result($averagequery, 0) == 3 ||
                       (mysql_result($averagequery, 0) > 2.8 && mysql_result($averagequery, 0) < 3) ||
                       (mysql_result($averagequery, 0) > 3 && mysql_result($averagequery, 0) < 3.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 4 ||
                       (mysql_result($averagequery, 0) > 3.8 && mysql_result($averagequery, 0) < 4) ||
                       (mysql_result($averagequery, 0) > 4 && mysql_result($averagequery, 0) < 4.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 5 ||
                       (mysql_result($averagequery, 0) > 4.8 && mysql_result($averagequery, 0) < 5)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }

                    if(mysql_result($averagequery, 0) == 0.5 ||
                       (mysql_result($averagequery, 0) > 0.3 && mysql_result($averagequery, 0) < 0.5)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 1.5 ||
                       (mysql_result($averagequery, 0) > 1.3 && mysql_result($averagequery, 0) < 1.5) ||
                       (mysql_result($averagequery, 0) > 1.5 && mysql_result($averagequery, 0) < 1.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 2.5 ||
                       (mysql_result($averagequery, 0) > 2.3 && mysql_result($averagequery, 0) < 2.5) ||
                       (mysql_result($averagequery, 0) > 2.5 && mysql_result($averagequery, 0) < 2.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }  else if(mysql_result($averagequery, 0) == 3.5 ||
                       (mysql_result($averagequery, 0) > 3.3 && mysql_result($averagequery, 0) < 3.5) ||
                       (mysql_result($averagequery, 0) > 3.5 && mysql_result($averagequery, 0) < 3.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 4.5 ||
                       (mysql_result($averagequery, 0) > 4.3 && mysql_result($averagequery, 0) < 4.5) ||
                       (mysql_result($averagequery, 0) > 4.5 && mysql_result($averagequery, 0) < 4.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }

                    echo "</div>";

                    mysql_close($connection);
                ?>
                        </div>
                    </div>
                </div>
                <div class="w3-col m2">
                    <div class="w3-card">
                        <div class="card-block">
                            <div id="imagelist">
                                <a href="item15.php"><img src="http://ak2.polyvoreimg.com/cgi/img-thing/size/l/tid/193538537.jpg" style="width:90%">
                                <p class="imgtext">
                                    <span>
                                        <span>Quick View</span>
                                    </span>
                                </p>
                                </a>
                            </div>

                            <p>Price: $125</p>
                            <p>POLYVORE</p>
                            <p>Choies Pink Short Sleeve Metallic Velvet Shift Dress</p>
                <?php
                    error_reporting(E_ALL ^ E_DEPRECATED);
                    $stock = '';

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
                    
                    $count = "SELECT COUNT(*) FROM item15_tbl";
                    $countquery = mysql_query($count, $connection);

                    $average = "SELECT AVG(rating) FROM item15_tbl";
                    $averagequery = mysql_query($average, $connection);

                    echo "
                    <div class='w3-panel'>";
                    
                    if(mysql_result($averagequery, 0) == 1 ||
                       (mysql_result($averagequery, 0) > 0.8 && mysql_result($averagequery, 0) < 1) ||
                       (mysql_result($averagequery, 0) > 1 && mysql_result($averagequery, 0) < 1.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 2 ||
                       (mysql_result($averagequery, 0) > 1.8 && mysql_result($averagequery, 0) < 2) ||
                       (mysql_result($averagequery, 0) > 2 && mysql_result($averagequery, 0) < 2.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }  else if(mysql_result($averagequery, 0) == 3 ||
                       (mysql_result($averagequery, 0) > 2.8 && mysql_result($averagequery, 0) < 3) ||
                       (mysql_result($averagequery, 0) > 3 && mysql_result($averagequery, 0) < 3.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 4 ||
                       (mysql_result($averagequery, 0) > 3.8 && mysql_result($averagequery, 0) < 4) ||
                       (mysql_result($averagequery, 0) > 4 && mysql_result($averagequery, 0) < 4.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 5 ||
                       (mysql_result($averagequery, 0) > 4.8 && mysql_result($averagequery, 0) < 5)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }

                    if(mysql_result($averagequery, 0) == 0.5 ||
                       (mysql_result($averagequery, 0) > 0.3 && mysql_result($averagequery, 0) < 0.5)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 1.5 ||
                       (mysql_result($averagequery, 0) > 1.3 && mysql_result($averagequery, 0) < 1.5) ||
                       (mysql_result($averagequery, 0) > 1.5 && mysql_result($averagequery, 0) < 1.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 2.5 ||
                       (mysql_result($averagequery, 0) > 2.3 && mysql_result($averagequery, 0) < 2.5) ||
                       (mysql_result($averagequery, 0) > 2.5 && mysql_result($averagequery, 0) < 2.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }  else if(mysql_result($averagequery, 0) == 3.5 ||
                       (mysql_result($averagequery, 0) > 3.3 && mysql_result($averagequery, 0) < 3.5) ||
                       (mysql_result($averagequery, 0) > 3.5 && mysql_result($averagequery, 0) < 3.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 4.5 ||
                       (mysql_result($averagequery, 0) > 4.3 && mysql_result($averagequery, 0) < 4.5) ||
                       (mysql_result($averagequery, 0) > 4.5 && mysql_result($averagequery, 0) < 4.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }

                    echo "</div>";

                    mysql_close($connection);
                ?>
                        </div>
                    </div>
                </div>
                <div class="w3-col m2">
                    <div class="w3-card">
                        <div class="card-block">
                            <div id="imagelist">
                                <a href="item16.php"><img src="http://demandware.edgesuite.net/sits_pod20-adidas/dw/image/v2/aaqx_prd/on/demandware.static/-/Sites-adidas-products/default/dw388cadfd/zoom/B10602_21_model.jpg?sw=500&sfrm=jpg" style="width:90%">
                                <p class="imgtext">
                                    <span>
                                        <span>Quick View</span>
                                    </span>
                                </p>
                                </a>
                            </div>

                            <p>Price: $70</p>
                            <p>ADIDAS</p>
                            <p>Men's Germany Training Pants</p>
                <?php
                    error_reporting(E_ALL ^ E_DEPRECATED);
                    $stock = '';

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
                    
                    $count = "SELECT COUNT(*) FROM item16_tbl";
                    $countquery = mysql_query($count, $connection);

                    $average = "SELECT AVG(rating) FROM item16_tbl";
                    $averagequery = mysql_query($average, $connection);

                    echo "
                    <div class='w3-panel'>";
                    
                    if(mysql_result($averagequery, 0) == 1 ||
                       (mysql_result($averagequery, 0) > 0.8 && mysql_result($averagequery, 0) < 1) ||
                       (mysql_result($averagequery, 0) > 1 && mysql_result($averagequery, 0) < 1.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 2 ||
                       (mysql_result($averagequery, 0) > 1.8 && mysql_result($averagequery, 0) < 2) ||
                       (mysql_result($averagequery, 0) > 2 && mysql_result($averagequery, 0) < 2.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }  else if(mysql_result($averagequery, 0) == 3 ||
                       (mysql_result($averagequery, 0) > 2.8 && mysql_result($averagequery, 0) < 3) ||
                       (mysql_result($averagequery, 0) > 3 && mysql_result($averagequery, 0) < 3.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 4 ||
                       (mysql_result($averagequery, 0) > 3.8 && mysql_result($averagequery, 0) < 4) ||
                       (mysql_result($averagequery, 0) > 4 && mysql_result($averagequery, 0) < 4.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 5 ||
                       (mysql_result($averagequery, 0) > 4.8 && mysql_result($averagequery, 0) < 5)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }

                    if(mysql_result($averagequery, 0) == 0.5 ||
                       (mysql_result($averagequery, 0) > 0.3 && mysql_result($averagequery, 0) < 0.5)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 1.5 ||
                       (mysql_result($averagequery, 0) > 1.3 && mysql_result($averagequery, 0) < 1.5) ||
                       (mysql_result($averagequery, 0) > 1.5 && mysql_result($averagequery, 0) < 1.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 2.5 ||
                       (mysql_result($averagequery, 0) > 2.3 && mysql_result($averagequery, 0) < 2.5) ||
                       (mysql_result($averagequery, 0) > 2.5 && mysql_result($averagequery, 0) < 2.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }  else if(mysql_result($averagequery, 0) == 3.5 ||
                       (mysql_result($averagequery, 0) > 3.3 && mysql_result($averagequery, 0) < 3.5) ||
                       (mysql_result($averagequery, 0) > 3.5 && mysql_result($averagequery, 0) < 3.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 4.5 ||
                       (mysql_result($averagequery, 0) > 4.3 && mysql_result($averagequery, 0) < 4.5) ||
                       (mysql_result($averagequery, 0) > 4.5 && mysql_result($averagequery, 0) < 4.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }

                    echo "</div>";

                    mysql_close($connection);
                ?>
                        </div>
                    </div>
                </div>
                <div class="w3-col m2">
                    <div class="w3-card">
                        <div class="card-block">
                            <div id="imagelist">
                                <a href="item20.php"><img src="http://shoptommy.scene7.com/is/image/ShopTommy/WW17392_901_FNT?wid=218&hei=326&fmt=jpeg&qlt=90%2c0&op_sharpen=1&resMode=trilin&op_usm=0.8%2c1.0%2c6%2c0&iccEmbed=0&cropN=0.165,0,0.67,1" style="width:60%">
                                <p class="imgtext">
                                    <span>
                                        <span>Quick View</span>
                                    </span>
                                </p>
                                </a>
                            </div>

                            <p>Price: $199.50</p>
                            <p>TOMMY HILFIGER</p>
                            <p>SEQUIN STRIPE SWEATER GIGI HADID</p>
                <?php
                    error_reporting(E_ALL ^ E_DEPRECATED);
                    $stock = '';

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
                    
                    $count = "SELECT COUNT(*) FROM item20_tbl";
                    $countquery = mysql_query($count, $connection);

                    $average = "SELECT AVG(rating) FROM item20_tbl";
                    $averagequery = mysql_query($average, $connection);

                    echo "
                    <div class='w3-panel'>";
                    
                    if(mysql_result($averagequery, 0) == 1 ||
                       (mysql_result($averagequery, 0) > 0.8 && mysql_result($averagequery, 0) < 1) ||
                       (mysql_result($averagequery, 0) > 1 && mysql_result($averagequery, 0) < 1.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 2 ||
                       (mysql_result($averagequery, 0) > 1.8 && mysql_result($averagequery, 0) < 2) ||
                       (mysql_result($averagequery, 0) > 2 && mysql_result($averagequery, 0) < 2.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }  else if(mysql_result($averagequery, 0) == 3 ||
                       (mysql_result($averagequery, 0) > 2.8 && mysql_result($averagequery, 0) < 3) ||
                       (mysql_result($averagequery, 0) > 3 && mysql_result($averagequery, 0) < 3.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 4 ||
                       (mysql_result($averagequery, 0) > 3.8 && mysql_result($averagequery, 0) < 4) ||
                       (mysql_result($averagequery, 0) > 4 && mysql_result($averagequery, 0) < 4.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 5 ||
                       (mysql_result($averagequery, 0) > 4.8 && mysql_result($averagequery, 0) < 5)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }

                    if(mysql_result($averagequery, 0) == 0.5 ||
                       (mysql_result($averagequery, 0) > 0.3 && mysql_result($averagequery, 0) < 0.5)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 1.5 ||
                       (mysql_result($averagequery, 0) > 1.3 && mysql_result($averagequery, 0) < 1.5) ||
                       (mysql_result($averagequery, 0) > 1.5 && mysql_result($averagequery, 0) < 1.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 2.5 ||
                       (mysql_result($averagequery, 0) > 2.3 && mysql_result($averagequery, 0) < 2.5) ||
                       (mysql_result($averagequery, 0) > 2.5 && mysql_result($averagequery, 0) < 2.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }  else if(mysql_result($averagequery, 0) == 3.5 ||
                       (mysql_result($averagequery, 0) > 3.3 && mysql_result($averagequery, 0) < 3.5) ||
                       (mysql_result($averagequery, 0) > 3.5 && mysql_result($averagequery, 0) < 3.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 4.5 ||
                       (mysql_result($averagequery, 0) > 4.3 && mysql_result($averagequery, 0) < 4.5) ||
                       (mysql_result($averagequery, 0) > 4.5 && mysql_result($averagequery, 0) < 4.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }

                    echo "</div>";

                    mysql_close($connection);
                ?>
                        </div>
                    </div>
                </div>
                <div class="w3-col m2">
                    <div class="w3-card">
                        <div class="card-block">
                            <div id="imagelist">
                                <a href="item19.php"><img src="http://shoptommy.scene7.com/is/image/ShopTommy/DW01231_078_BCK?wid=218&hei=326&fmt=jpeg&qlt=90%2c0&op_sharpen=1&resMode=trilin&op_usm=0.8%2c1.0%2c6%2c0&iccEmbed=0&cropN=0.165,0,0.67,1" style="width:60%">
                                <p class="imgtext">
                                    <span>
                                        <span>Quick View</span>
                                    </span>
                                </p>
                                </a>
                            </div>

                            <p>Price: $169.50</p>
                            <p>TOMMY HILFIGER</p>
                            <p>HILFIGER DENIM SEQUIN COMBO DRESS</p>
                <?php
                    error_reporting(E_ALL ^ E_DEPRECATED);
                    $stock = '';

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
                    
                    $count = "SELECT COUNT(*) FROM item20_tbl";
                    $countquery = mysql_query($count, $connection);

                    $average = "SELECT AVG(rating) FROM item20_tbl";
                    $averagequery = mysql_query($average, $connection);

                    echo "
                    <div class='w3-panel'>";
                    
                    if(mysql_result($averagequery, 0) == 1 ||
                       (mysql_result($averagequery, 0) > 0.8 && mysql_result($averagequery, 0) < 1) ||
                       (mysql_result($averagequery, 0) > 1 && mysql_result($averagequery, 0) < 1.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 2 ||
                       (mysql_result($averagequery, 0) > 1.8 && mysql_result($averagequery, 0) < 2) ||
                       (mysql_result($averagequery, 0) > 2 && mysql_result($averagequery, 0) < 2.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }  else if(mysql_result($averagequery, 0) == 3 ||
                       (mysql_result($averagequery, 0) > 2.8 && mysql_result($averagequery, 0) < 3) ||
                       (mysql_result($averagequery, 0) > 3 && mysql_result($averagequery, 0) < 3.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 4 ||
                       (mysql_result($averagequery, 0) > 3.8 && mysql_result($averagequery, 0) < 4) ||
                       (mysql_result($averagequery, 0) > 4 && mysql_result($averagequery, 0) < 4.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 5 ||
                       (mysql_result($averagequery, 0) > 4.8 && mysql_result($averagequery, 0) < 5)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }

                    if(mysql_result($averagequery, 0) == 0.5 ||
                       (mysql_result($averagequery, 0) > 0.3 && mysql_result($averagequery, 0) < 0.5)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 1.5 ||
                       (mysql_result($averagequery, 0) > 1.3 && mysql_result($averagequery, 0) < 1.5) ||
                       (mysql_result($averagequery, 0) > 1.5 && mysql_result($averagequery, 0) < 1.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 2.5 ||
                       (mysql_result($averagequery, 0) > 2.3 && mysql_result($averagequery, 0) < 2.5) ||
                       (mysql_result($averagequery, 0) > 2.5 && mysql_result($averagequery, 0) < 2.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }  else if(mysql_result($averagequery, 0) == 3.5 ||
                       (mysql_result($averagequery, 0) > 3.3 && mysql_result($averagequery, 0) < 3.5) ||
                       (mysql_result($averagequery, 0) > 3.5 && mysql_result($averagequery, 0) < 3.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 4.5 ||
                       (mysql_result($averagequery, 0) > 4.3 && mysql_result($averagequery, 0) < 4.5) ||
                       (mysql_result($averagequery, 0) > 4.5 && mysql_result($averagequery, 0) < 4.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }

                    echo "</div>";

                    mysql_close($connection);
                ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w3-panel">
            <h5><b>Outdoors Winter Warmth Apparel</b></h5>
        </div>
        
        <div class="w3-panel bordernoback">
            <div class="w3-row">
                <div class="w3-col m2">
                    <div class="w3-card">
                        <div class="card-block">
                            <div id="imagelist">
                                <a href="item5.php"><img src="http://pumaecom.scene7.com/is/image/PUMAECOM/761979_03_PNA?$PUMA_GRID$" style="width:85%">
                                <p class="imgtext">
                                    <span>
                                        <span>Quick View</span>
                                    </span>
                                </p>
                                </a>
                            </div>

                            <p>Price: $74.99</p>
                            <p>PUMA</p>
                            <p>Ferrari Hooded Jacket</p>
                <?php
                    error_reporting(E_ALL ^ E_DEPRECATED);
                    $stock = '';

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
                    
                    $count = "SELECT COUNT(*) FROM item5_tbl";
                    $countquery = mysql_query($count, $connection);

                    $average = "SELECT AVG(rating) FROM item5_tbl";
                    $averagequery = mysql_query($average, $connection);

                    echo "
                    <div class='w3-panel'>";
                    
                    if(mysql_result($averagequery, 0) == 1 ||
                       (mysql_result($averagequery, 0) > 0.8 && mysql_result($averagequery, 0) < 1) ||
                       (mysql_result($averagequery, 0) > 1 && mysql_result($averagequery, 0) < 1.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 2 ||
                       (mysql_result($averagequery, 0) > 1.8 && mysql_result($averagequery, 0) < 2) ||
                       (mysql_result($averagequery, 0) > 2 && mysql_result($averagequery, 0) < 2.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }  else if(mysql_result($averagequery, 0) == 3 ||
                       (mysql_result($averagequery, 0) > 2.8 && mysql_result($averagequery, 0) < 3) ||
                       (mysql_result($averagequery, 0) > 3 && mysql_result($averagequery, 0) < 3.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 4 ||
                       (mysql_result($averagequery, 0) > 3.8 && mysql_result($averagequery, 0) < 4) ||
                       (mysql_result($averagequery, 0) > 4 && mysql_result($averagequery, 0) < 4.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 5 ||
                       (mysql_result($averagequery, 0) > 4.8 && mysql_result($averagequery, 0) < 5)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }

                    if(mysql_result($averagequery, 0) == 0.5 ||
                       (mysql_result($averagequery, 0) > 0.3 && mysql_result($averagequery, 0) < 0.5)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 1.5 ||
                       (mysql_result($averagequery, 0) > 1.3 && mysql_result($averagequery, 0) < 1.5) ||
                       (mysql_result($averagequery, 0) > 1.5 && mysql_result($averagequery, 0) < 1.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 2.5 ||
                       (mysql_result($averagequery, 0) > 2.3 && mysql_result($averagequery, 0) < 2.5) ||
                       (mysql_result($averagequery, 0) > 2.5 && mysql_result($averagequery, 0) < 2.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }  else if(mysql_result($averagequery, 0) == 3.5 ||
                       (mysql_result($averagequery, 0) > 3.3 && mysql_result($averagequery, 0) < 3.5) ||
                       (mysql_result($averagequery, 0) > 3.5 && mysql_result($averagequery, 0) < 3.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 4.5 ||
                       (mysql_result($averagequery, 0) > 4.3 && mysql_result($averagequery, 0) < 4.5) ||
                       (mysql_result($averagequery, 0) > 4.5 && mysql_result($averagequery, 0) < 4.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }

                    echo "</div>";

                    mysql_close($connection);
                ?>
                        </div>
                    </div>
                </div>
                <div class="w3-col m2">
                    <div class="w3-card">
                        <div class="card-block">
                            <div id="imagelist">
                                <a href="item6.php"><img src="http://pumaecom.scene7.com/is/image/PUMAECOM/838646_01_PNA?$PUMA_GRID$" style="width:75%">
                                <p class="imgtext">
                                    <span>
                                        <span>Quick View</span>
                                    </span>
                                </p>
                                </a>
                            </div>

                            <p>Price: $74.99</p>
                            <p>PUMA</p>
                            <p>ACTIVE 600 PackLITE Down Jacket</p>
                <?php
                    error_reporting(E_ALL ^ E_DEPRECATED);
                    $stock = '';

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
                    
                    $count = "SELECT COUNT(*) FROM item6_tbl";
                    $countquery = mysql_query($count, $connection);

                    $average = "SELECT AVG(rating) FROM item6_tbl";
                    $averagequery = mysql_query($average, $connection);

                    echo "
                    <div class='w3-panel'>";
                    
                    if(mysql_result($averagequery, 0) == 1 ||
                       (mysql_result($averagequery, 0) > 0.8 && mysql_result($averagequery, 0) < 1) ||
                       (mysql_result($averagequery, 0) > 1 && mysql_result($averagequery, 0) < 1.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 2 ||
                       (mysql_result($averagequery, 0) > 1.8 && mysql_result($averagequery, 0) < 2) ||
                       (mysql_result($averagequery, 0) > 2 && mysql_result($averagequery, 0) < 2.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }  else if(mysql_result($averagequery, 0) == 3 ||
                       (mysql_result($averagequery, 0) > 2.8 && mysql_result($averagequery, 0) < 3) ||
                       (mysql_result($averagequery, 0) > 3 && mysql_result($averagequery, 0) < 3.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 4 ||
                       (mysql_result($averagequery, 0) > 3.8 && mysql_result($averagequery, 0) < 4) ||
                       (mysql_result($averagequery, 0) > 4 && mysql_result($averagequery, 0) < 4.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 5 ||
                       (mysql_result($averagequery, 0) > 4.8 && mysql_result($averagequery, 0) < 5)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }

                    if(mysql_result($averagequery, 0) == 0.5 ||
                       (mysql_result($averagequery, 0) > 0.3 && mysql_result($averagequery, 0) < 0.5)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 1.5 ||
                       (mysql_result($averagequery, 0) > 1.3 && mysql_result($averagequery, 0) < 1.5) ||
                       (mysql_result($averagequery, 0) > 1.5 && mysql_result($averagequery, 0) < 1.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 2.5 ||
                       (mysql_result($averagequery, 0) > 2.3 && mysql_result($averagequery, 0) < 2.5) ||
                       (mysql_result($averagequery, 0) > 2.5 && mysql_result($averagequery, 0) < 2.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }  else if(mysql_result($averagequery, 0) == 3.5 ||
                       (mysql_result($averagequery, 0) > 3.3 && mysql_result($averagequery, 0) < 3.5) ||
                       (mysql_result($averagequery, 0) > 3.5 && mysql_result($averagequery, 0) < 3.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 4.5 ||
                       (mysql_result($averagequery, 0) > 4.3 && mysql_result($averagequery, 0) < 4.5) ||
                       (mysql_result($averagequery, 0) > 4.5 && mysql_result($averagequery, 0) < 4.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }

                    echo "</div>";

                    mysql_close($connection);
                ?>
                        </div>
                    </div>
                </div>
                <div class="w3-col m2">
                    <div class="w3-card">
                        <div class="card-block">
                            <div id="imagelist">
                                <a href="item7.php"><img src="http://images.nike.com/is/image/DotCom/PDP_COPY/727324_101/sportswear-windrunner-jacket.jpg" style="width:75%">
                                <p class="imgtext">
                                    <span>
                                        <span>Quick View</span>
                                    </span>
                                </p>
                                </a>
                            </div>

                            <p>Price: $130</p>
                            <p>NIKE</p>
                            <p>Nike Sportswear Tech Fleece Windrunner</p>
                <?php
                    error_reporting(E_ALL ^ E_DEPRECATED);
                    $stock = '';

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
                    
                    $count = "SELECT COUNT(*) FROM item7_tbl";
                    $countquery = mysql_query($count, $connection);

                    $average = "SELECT AVG(rating) FROM item7_tbl";
                    $averagequery = mysql_query($average, $connection);

                    echo "
                    <div class='w3-panel'>";
                    
                    if(mysql_result($averagequery, 0) == 1 ||
                       (mysql_result($averagequery, 0) > 0.8 && mysql_result($averagequery, 0) < 1) ||
                       (mysql_result($averagequery, 0) > 1 && mysql_result($averagequery, 0) < 1.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 2 ||
                       (mysql_result($averagequery, 0) > 1.8 && mysql_result($averagequery, 0) < 2) ||
                       (mysql_result($averagequery, 0) > 2 && mysql_result($averagequery, 0) < 2.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }  else if(mysql_result($averagequery, 0) == 3 ||
                       (mysql_result($averagequery, 0) > 2.8 && mysql_result($averagequery, 0) < 3) ||
                       (mysql_result($averagequery, 0) > 3 && mysql_result($averagequery, 0) < 3.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 4 ||
                       (mysql_result($averagequery, 0) > 3.8 && mysql_result($averagequery, 0) < 4) ||
                       (mysql_result($averagequery, 0) > 4 && mysql_result($averagequery, 0) < 4.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 5 ||
                       (mysql_result($averagequery, 0) > 4.8 && mysql_result($averagequery, 0) < 5)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }

                    if(mysql_result($averagequery, 0) == 0.5 ||
                       (mysql_result($averagequery, 0) > 0.3 && mysql_result($averagequery, 0) < 0.5)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 1.5 ||
                       (mysql_result($averagequery, 0) > 1.3 && mysql_result($averagequery, 0) < 1.5) ||
                       (mysql_result($averagequery, 0) > 1.5 && mysql_result($averagequery, 0) < 1.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 2.5 ||
                       (mysql_result($averagequery, 0) > 2.3 && mysql_result($averagequery, 0) < 2.5) ||
                       (mysql_result($averagequery, 0) > 2.5 && mysql_result($averagequery, 0) < 2.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }  else if(mysql_result($averagequery, 0) == 3.5 ||
                       (mysql_result($averagequery, 0) > 3.3 && mysql_result($averagequery, 0) < 3.5) ||
                       (mysql_result($averagequery, 0) > 3.5 && mysql_result($averagequery, 0) < 3.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 4.5 ||
                       (mysql_result($averagequery, 0) > 4.3 && mysql_result($averagequery, 0) < 4.5) ||
                       (mysql_result($averagequery, 0) > 4.5 && mysql_result($averagequery, 0) < 4.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }

                    echo "</div>";

                    mysql_close($connection);
                ?>
                        </div>
                    </div>
                </div>
                <div class="w3-col m2">
                    <div class="w3-card">
                        <div class="card-block">
                            <div id="imagelist">
                                <a href="item21.php"><img src="http://images.nike.com/is/image/DotCom/PDP_COPY/777269_421/fc-barcelona-sportswear-authentic-n98-track-jacket.jpg" style="width:75%">
                                <p class="imgtext">
                                    <span>
                                        <span>Quick View</span>
                                    </span>
                                </p>
                                </a>
                            </div>

                            <p>Price: $120</p>
                            <p>NIKE</p>
                            <p>FC Barcelona Nike Sportswear Authentic N98</p>
                <?php
                    error_reporting(E_ALL ^ E_DEPRECATED);
                    $stock = '';

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
                    
                    $count = "SELECT COUNT(*) FROM item21_tbl";
                    $countquery = mysql_query($count, $connection);

                    $average = "SELECT AVG(rating) FROM item21_tbl";
                    $averagequery = mysql_query($average, $connection);

                    echo "
                    <div class='w3-panel'>";
                    
                    if(mysql_result($averagequery, 0) == 1 ||
                       (mysql_result($averagequery, 0) > 0.8 && mysql_result($averagequery, 0) < 1) ||
                       (mysql_result($averagequery, 0) > 1 && mysql_result($averagequery, 0) < 1.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 2 ||
                       (mysql_result($averagequery, 0) > 1.8 && mysql_result($averagequery, 0) < 2) ||
                       (mysql_result($averagequery, 0) > 2 && mysql_result($averagequery, 0) < 2.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }  else if(mysql_result($averagequery, 0) == 3 ||
                       (mysql_result($averagequery, 0) > 2.8 && mysql_result($averagequery, 0) < 3) ||
                       (mysql_result($averagequery, 0) > 3 && mysql_result($averagequery, 0) < 3.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 4 ||
                       (mysql_result($averagequery, 0) > 3.8 && mysql_result($averagequery, 0) < 4) ||
                       (mysql_result($averagequery, 0) > 4 && mysql_result($averagequery, 0) < 4.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 5 ||
                       (mysql_result($averagequery, 0) > 4.8 && mysql_result($averagequery, 0) < 5)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }

                    if(mysql_result($averagequery, 0) == 0.5 ||
                       (mysql_result($averagequery, 0) > 0.3 && mysql_result($averagequery, 0) < 0.5)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 1.5 ||
                       (mysql_result($averagequery, 0) > 1.3 && mysql_result($averagequery, 0) < 1.5) ||
                       (mysql_result($averagequery, 0) > 1.5 && mysql_result($averagequery, 0) < 1.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 2.5 ||
                       (mysql_result($averagequery, 0) > 2.3 && mysql_result($averagequery, 0) < 2.5) ||
                       (mysql_result($averagequery, 0) > 2.5 && mysql_result($averagequery, 0) < 2.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }  else if(mysql_result($averagequery, 0) == 3.5 ||
                       (mysql_result($averagequery, 0) > 3.3 && mysql_result($averagequery, 0) < 3.5) ||
                       (mysql_result($averagequery, 0) > 3.5 && mysql_result($averagequery, 0) < 3.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 4.5 ||
                       (mysql_result($averagequery, 0) > 4.3 && mysql_result($averagequery, 0) < 4.5) ||
                       (mysql_result($averagequery, 0) > 4.5 && mysql_result($averagequery, 0) < 4.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }

                    echo "</div>";

                    mysql_close($connection);
                ?>
                        </div>
                    </div>
                </div>
                <div class="w3-col m2">
                    <div class="w3-card">
                        <div class="card-block">
                            <div id="imagelist">
                                <a href="item17.php"><img src="http://demandware.edgesuite.net/sits_pod20-adidas/dw/image/v2/aaqx_prd/on/demandware.static/-/Sites-adidas-products/default/dwa8b868d7/zoom/S99320_21_model.jpg?sw=500&sfrm=jpg" style="width:75%">
                                <p class="imgtext">
                                    <span>
                                        <span>Quick View</span>
                                    </span>
                                </p>
                                </a>
                            </div>

                            <p>Price: $150</p>
                            <p>ADIDAS</p>
                            <p>Women's adidas Reigning Champ Fleece Jacket</p>
                <?php
                    error_reporting(E_ALL ^ E_DEPRECATED);
                    $stock = '';

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
                    
                    $count = "SELECT COUNT(*) FROM item17_tbl";
                    $countquery = mysql_query($count, $connection);

                    $average = "SELECT AVG(rating) FROM item17_tbl";
                    $averagequery = mysql_query($average, $connection);

                    echo "
                    <div class='w3-panel'>";
                    
                    if(mysql_result($averagequery, 0) == 1 ||
                       (mysql_result($averagequery, 0) > 0.8 && mysql_result($averagequery, 0) < 1) ||
                       (mysql_result($averagequery, 0) > 1 && mysql_result($averagequery, 0) < 1.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 2 ||
                       (mysql_result($averagequery, 0) > 1.8 && mysql_result($averagequery, 0) < 2) ||
                       (mysql_result($averagequery, 0) > 2 && mysql_result($averagequery, 0) < 2.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }  else if(mysql_result($averagequery, 0) == 3 ||
                       (mysql_result($averagequery, 0) > 2.8 && mysql_result($averagequery, 0) < 3) ||
                       (mysql_result($averagequery, 0) > 3 && mysql_result($averagequery, 0) < 3.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 4 ||
                       (mysql_result($averagequery, 0) > 3.8 && mysql_result($averagequery, 0) < 4) ||
                       (mysql_result($averagequery, 0) > 4 && mysql_result($averagequery, 0) < 4.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 5 ||
                       (mysql_result($averagequery, 0) > 4.8 && mysql_result($averagequery, 0) < 5)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }

                    if(mysql_result($averagequery, 0) == 0.5 ||
                       (mysql_result($averagequery, 0) > 0.3 && mysql_result($averagequery, 0) < 0.5)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 1.5 ||
                       (mysql_result($averagequery, 0) > 1.3 && mysql_result($averagequery, 0) < 1.5) ||
                       (mysql_result($averagequery, 0) > 1.5 && mysql_result($averagequery, 0) < 1.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 2.5 ||
                       (mysql_result($averagequery, 0) > 2.3 && mysql_result($averagequery, 0) < 2.5) ||
                       (mysql_result($averagequery, 0) > 2.5 && mysql_result($averagequery, 0) < 2.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }  else if(mysql_result($averagequery, 0) == 3.5 ||
                       (mysql_result($averagequery, 0) > 3.3 && mysql_result($averagequery, 0) < 3.5) ||
                       (mysql_result($averagequery, 0) > 3.5 && mysql_result($averagequery, 0) < 3.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 4.5 ||
                       (mysql_result($averagequery, 0) > 4.3 && mysql_result($averagequery, 0) < 4.5) ||
                       (mysql_result($averagequery, 0) > 4.5 && mysql_result($averagequery, 0) < 4.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }

                    echo "</div>";

                    mysql_close($connection);
                ?>
                        </div>
                    </div>
                </div>
                <div class="w3-col m2">
                    <div class="w3-card">
                        <div class="card-block">
                            <div id="imagelist">
                                <a href="item18.php"><img src="http://demandware.edgesuite.net/sits_pod20-adidas/dw/image/v2/aaqx_prd/on/demandware.static/-/Sites-adidas-products/default/dwb63ad037/zoom/AY0085_21_model.jpg?sw=500&sfrm=jpg" style="width:75%">
                                <p class="imgtext">
                                    <span>
                                        <span>Quick View</span>
                                    </span>
                                </p>
                                </a>
                            </div>

                            <p>Price: $300</p>
                            <p>ADIDAS</p>
                            <p>Women's Climaheat Light Jacket</p>
                <?php
                    error_reporting(E_ALL ^ E_DEPRECATED);
                    $stock = '';

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
                    
                    $count = "SELECT COUNT(*) FROM item18_tbl";
                    $countquery = mysql_query($count, $connection);

                    $average = "SELECT AVG(rating) FROM item18_tbl";
                    $averagequery = mysql_query($average, $connection);

                    echo "
                    <div class='w3-panel'>";
                    
                    if(mysql_result($averagequery, 0) == 1 ||
                       (mysql_result($averagequery, 0) > 0.8 && mysql_result($averagequery, 0) < 1) ||
                       (mysql_result($averagequery, 0) > 1 && mysql_result($averagequery, 0) < 1.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 2 ||
                       (mysql_result($averagequery, 0) > 1.8 && mysql_result($averagequery, 0) < 2) ||
                       (mysql_result($averagequery, 0) > 2 && mysql_result($averagequery, 0) < 2.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }  else if(mysql_result($averagequery, 0) == 3 ||
                       (mysql_result($averagequery, 0) > 2.8 && mysql_result($averagequery, 0) < 3) ||
                       (mysql_result($averagequery, 0) > 3 && mysql_result($averagequery, 0) < 3.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 4 ||
                       (mysql_result($averagequery, 0) > 3.8 && mysql_result($averagequery, 0) < 4) ||
                       (mysql_result($averagequery, 0) > 4 && mysql_result($averagequery, 0) < 4.3)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 5 ||
                       (mysql_result($averagequery, 0) > 4.8 && mysql_result($averagequery, 0) < 5)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }

                    if(mysql_result($averagequery, 0) == 0.5 ||
                       (mysql_result($averagequery, 0) > 0.3 && mysql_result($averagequery, 0) < 0.5)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 1.5 ||
                       (mysql_result($averagequery, 0) > 1.3 && mysql_result($averagequery, 0) < 1.5) ||
                       (mysql_result($averagequery, 0) > 1.5 && mysql_result($averagequery, 0) < 1.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 2.5 ||
                       (mysql_result($averagequery, 0) > 2.3 && mysql_result($averagequery, 0) < 2.5) ||
                       (mysql_result($averagequery, 0) > 2.5 && mysql_result($averagequery, 0) < 2.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }  else if(mysql_result($averagequery, 0) == 3.5 ||
                       (mysql_result($averagequery, 0) > 3.3 && mysql_result($averagequery, 0) < 3.5) ||
                       (mysql_result($averagequery, 0) > 3.5 && mysql_result($averagequery, 0) < 3.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    } else if(mysql_result($averagequery, 0) == 4.5 ||
                       (mysql_result($averagequery, 0) > 4.3 && mysql_result($averagequery, 0) < 4.5) ||
                       (mysql_result($averagequery, 0) > 4.5 && mysql_result($averagequery, 0) < 4.8)) {
                           echo '<div class="rating">
                                <span>' . mysql_result($countquery, 0) . '</span>
                                <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                            </div>';
                    }

                    echo "</div>";

                    mysql_close($connection);
                ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="w3-container w3-padding-32">
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
                        <font style="color:white"><a href="#">Home</a></font>
                    </div>
                    <div class="w3-panel w3-center bottomborder">
                        <font style="color:white"><a href="catalog.phtml">Catalog</a></font>
                    </div>
                    <div class="w3-panel w3-center bottomborder">
                        <font style="color:white"><a href="contact.phtml">Contact</a></font>
                    </div>
                    <div class="w3-panel w3-center">
                        <font style="color:white"><a href="adminsignin.php">Admin Section</a></font>
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