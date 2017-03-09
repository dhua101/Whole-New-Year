<!DOCTYPE html>
<html>
<head>
    <title>Whole New Year</title>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-blue.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
    <script type="text/javascript" src="Image-Slider-LnR.js"></script>
    <link rel="stylesheet" type="text/css" href="Image-Slider-LnR.css">

    <style>
        .topmargin {
            margin-top:75px;
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
            <li><a href="#" class="w3-white"><img src="http://localhost/Whole%20New%20Year/My%20Zend%20Framework/application/views/scripts/index/logo.jpg" style="width:16%" class="fa fa-home w3-margin-right"></a></li>
            <li class="w3-hide-small w3-right">
            <form action="exitmain.php">
                <input type="submit" name="exit" value="x">
            </form></li>
            <li class="w3-hide-small w3-right"><a href="#" class="w3-hover-yellow" title="Help"><i class="fa fa-question-circle" id="help"></i> Help</a></li>
            <li class="w3-hide-small w3-right"><a href="#" class="w3-hover-yellow" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
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
            <p>Thank you for shopping here at Whole New Year. Here is your recipt. Please save a copy for your reference.</p>
            
            <div class="w3-panel">
                <?php
                    error_reporting(E_ALL ^ E_DEPRECATED);

                    $filer = fopen("../data/things.txt", "r");
                    $sale = fopen("../data/sale.txt", "a");
                    $buyer = fopen('../data/buyer.txt', 'a');
                    $datebuy = date("M d, Y H:i:sa");
                    $dateday = date ("M d, Y");
                    $items_num = 0;
                    
                    $quantity = '';
                    $file = fopen('../data/cart.txt', 'a');
                    $purchase = fopen('../data/purchase.txt', 'a');
                    $stuff = fopen("../data/things.txt", "a");
                    $stock = '';
                    $sold_quantity = 0;

                    fwrite($buyer, $datebuy . PHP_EOL);
                    fwrite($sale, $datebuy . PHP_EOL);

                    while(!feof($filer)) {
                        $name = fgets($filer);
                        $quantity = fgets($filer);
                        $price = fgets($filer);

                        echo "<div class='w3-half'><div class='w3-left'>";
                        echo "$name($quantity)";
                        echo "</div></div>";
                        echo "<div class='w3-quarter'><div class='w3-right'>";
                        echo "$price";
                        echo "</div></div>";

                        fwrite($buyer, $name . PHP_EOL);
                        fwrite($buyer, $quantity . PHP_EOL);
                        fwrite($buyer, $price . PHP_EOL);

                        fwrite($sale, $name . PHP_EOL);
                        fwrite($sale, $quantity . PHP_EOL);
                        fwrite($sale, $price . PHP_EOL);

                        $items_num += $quantity;
                    }
                        
                    $breaks = "=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=";
                    fwrite($sale, $breaks . PHP_EOL);
                    fwrite($buyer, $breaks . PHP_EOL);

                    fclose($filer);
                    fclose($sale);
                    fclose($buyer);
                    
                ?>
            </div>

            <div class="w3-panel">
                <div class="w3-container w3-right">
                    <?=
                        error_reporting(E_ALL ^ E_DEPRECATED);
                        $filemoney = fopen("../data/money.txt", "r");

                        $submoney = fgets($filemoney);
                        $taxmoney = fgets($filemoney);
                        $totalmoney = fgets($filemoney);

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

                        echo "Subtotal: $submoney <br>";
                        echo "HST: $taxmoney <br>";
                        echo "Total: $totalmoney <br>";

                        $sqlinsert = "INSERT INTO sales_tbl(total_items, total_price, total_tax, date_purchase) VALUES('$items_num','$totalmoney', '$taxmoney', '$datebuy')";

                        if(!mysql_query($sqlinsert, $connection)) {
                            die("New Record Creation Failed");
                        }

                        fclose($filemoney);
                        mysql_close($connection);
                    ?>
                </div>
            </div>

            <div class="w3-panel">
                <p>We'll email you the comfirmation right away. We'll also email you when it's available to pick up at your email (
                <?php
                    $fileemail = fopen("../data/emails.txt", "r");
                    $email = fgets($fileemail);

                    echo "$email";

                    fclose($fileemail);
                ?>
                )</p>
            </div>

            <p>Done? Click the button to go back to the homepage.</p>
            <form action="close.php">
                <input type="submit" name="submit" value="Close">
            </form>
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
                    <h3>Our Location</h3>
                </div>

                2079 Meadowgate Blvd
                <br>
                London ON N6M 1L5
                <br>
                Canada
            </div>
            <div class="w3-quarter w3-center">
                <h4>Follow Us</h4>
                <a class="w3-btn-floating w3-theme-l3" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
                <a class="w3-btn-floating w3-theme-l3" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
                <a class="w3-btn-floating w3-theme-l3" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
                <a class="w3-btn-floating w3-theme-l3 w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>

                <br>

                <a href="contact.php">Contact us</a>
            </div>
            <div class="w3-quarter leftborder">
                <div class="w3-half">
                    <div class="w3-panel w3-center bottomborder">
                        <a href="#">Home</a>
                    </div>
                    <div class="w3-panel w3-center bottomborder">
                        <a href="#">Catalog</a>
                    </div>
                    <div class="w3-panel w3-center bottomborder">
                        <a href="#">Contact</a>
                    </div>
                </div>
                <div style="position:relative;bottom:25px;z-index:1;" class="w3-tooltip w3-right">
                    <span class="w3-text w3-padding w3-red w3-hide-small">Go To Top</span>   
                    <a class="w3-btn w3-theme" href="#"><span class="w3-xlarge">
                    <i class="fa fa-chevron-circle-up"></i></span></a>
                </div>
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