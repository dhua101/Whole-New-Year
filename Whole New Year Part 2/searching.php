<!-- application/views/scripts/index/index.phtml -->

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
            <li class="w3-hide-small w3-right"><a href="shoppingcart.phtml" class="w3-hover-yellow" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
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
            <li class="w3-hide-small"><a href="wholenewyear.php" class="w3-theme-d3">Home</a></li>
            <li class="w3-hide-small"><a href="catalog.phtml" class="w3-theme-d3  w3-hover-yellow">Catalog</a></li>

            <a href="customerinfo.phtml" class="w3-theme-d3 w3-right w3-hover-yellow" style="margin-top:8px">Complete Form for Purchases</a>
        </ul>
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

            mysql_select_db("wholenewyear_2_db");

            $searchitem = $_POST['search'];

            $sql = "SELECT * FROM items_tbl WHERE item_name LIKE '%{$searchitem}%'";
            $query = mysql_query($sql, $connection);

            $sqlnumber = "SELECT COUNT(*) FROM items_tbl WHERE item_name LIKE '%{$searchitem}%'";

            
            echo "<table align='center' style='border:1px solid black'>";
            echo "<tr><th style='border:1px solid black'>Item ID</th><th style='border:1px solid black'>Item Image</th><th style='border:1px solid black'>Item Name</th><th style='border:1px solid black'>Item Price</th></tr>";

            while($row1 = mysql_fetch_assoc($query, MYSQL_ASSOC)) {
                echo "<tr><td style='border:1px solid black'>" . $row1['item_id'] . "</td><td style='border:1px solid black'><img src=" . $row1['image'] ."></td><td style='border:1px solid black'>" . $row1['item_name'] . "</td><td style='border:1px solid black'>" . $row1['item_price'] . "</td></tr>";
            }

            echo "</table>";

            mysql_close($connection);
        ?>
    </div>

    <br>

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
                        <a href="wholenewyear.php">Home</a>
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