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
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>

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
            border: 2px solid blue;
        }
        
        .rating {
            float:left;
            width:300px;
        }
        .rating span {
            float:right;
            position:relative;
        }
        .rating span input {
            position:absolute;
            top:0px;
            left:0px;
            opacity:0;
        }
        .rating span label {
            display:inline-block;
            width:30px;
            height:30px;
            text-align:center;
            color:#FFF;
            background:#ccc;
            font-size:30px;
            margin-right:2px;
            line-height:30px;
            border-radius:50%;
            -webkit-border-radius:50%;
        }
        .rating span:hover ~ span label,
        .rating span:hover label,
        .rating span.checked label,
        .rating span.checked ~ span label {
            
            background:#F90;
            color:#FFF;
        }

        .rating1 {
            unicode-bidi: bidi-override;
            direction: rtl;
            text-align:left;
        }
        .rating1 > span {
            display: inline-block;
            position: relative;
            width: 1.1em;
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
            <li><a href="wholenewyear.php" class="w3-white"><img src="http://localhost/Whole%20New%20Year/My%20Zend%20Framework/application/views/scripts/index/logo.jpg" style="width:16%" class="fa fa-home w3-margin-right"></a></li>
            <li class="w3-hide-small w3-left"><a href="searching.php" class="w3-hover-yellow" title="Search">
            <form action="searching.php" method="POST">
                <input type="text" id="search" name="search" placeholder="search item" id='search-text-input' style="width:425px margin-top:42px;">
            </form></a></li>
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
        <ul class="w3-blue w3-navbar w3-left-align">
            <li class="w3-hide-small"><a href="goback.php" class="w3-theme-d3">Home</a></li>
            <li class="w3-hide-small"><a href="catalog.phtml" class="w3-theme-d3  w3-hover-yellow">Catalog</a></li>
            <li class="w3-hide-small"><a href="#" class="w3-theme-d3  w3-hover-yellow">Contact Us</a></li>

            <a href="customerinfo.phtml" class="w3-theme-d3 w3-right w3-hover-yellow" style="margin-top:8px">Complete Form for Purchases</a>
        </ul>
        
        <div class="w3-panel w3-center">
            <h1>New Year Special</h1>
            <h3>Catalog</h3>
        </div>

        <div class="w3-panel">
            <div class="w3-third border">
                <img src="http://images.nike.com/is/image/DotCom/pwp_sheet2?$NIKE_PWPx3$&$img0=688477_011&$img1=688477_071&$img2=688477_092" style="width:48%">
            </div>
            <div class="w3-twothird border" style="padding: 10px">
                <p name="item8">Nike Therma-Sphere Max Pants</p>
                <p>Price: $90</p>
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

                    $sqlstock = "SELECT stock_quantity FROM stock_tbl WHERE stock_id='8'";
                    $sqlquery = mysql_query($sqlstock, $connection);
                    $stock = mysql_fetch_assoc($sqlquery, MYSQL_ASSOC);

                    if($stock['stock_quantity'] != 0) {
                        echo "<font color='green'><i class='fa fa-check'></i> In stock online</font>";
                        echo '
                            <form action="cart.php"method="get">
                                Quantity: 
                                <input type="text" name="quantity8" style="width:50px" id="quantity8"><br>
                                <input type="submit" name="submit" value="Add to Cart" id="item8">
                            </form>';
                    } else {
                        echo "<font color='red'><i class='fa fa-close'></i> out of stock</font>";
                    }

                    mysql_close($connection);
                ?>
            </div>
        </div>

        <div class="w3-panel">
            <h1 style="font-size:25px;"><b>Customer Reviews</b></h1>

            <?php
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

                $sql = "SELECT * FROM item8_tbl ORDER BY id DESC";
                $query = mysql_query($sql, $connection);

                $count = "SELECT COUNT(*) FROM item8_tbl";
                $countquery = mysql_query($count, $connection);

                $average = "SELECT AVG(rating) FROM item8_tbl";
                $averagequery = mysql_query($average, $connection);

                $count1 = "SELECT COUNT(*) FROM item8_tbl WHERE rating=1";
                $count1query = mysql_query($count1, $connection);
                $row1 = mysql_fetch_array($count1query);
                $count2 = "SELECT COUNT(*) FROM item8_tbl WHERE rating=2";
                $count2query = mysql_query($count2, $connection);
                $row2 = mysql_fetch_array($count2query);
                $count3 = "SELECT COUNT(*) FROM item8_tbl WHERE rating=3";
                $count3query = mysql_query($count3, $connection);
                $row3 = mysql_fetch_array($count3query);
                $count4 = "SELECT COUNT(*) FROM item8_tbl WHERE rating=4";
                $count4query = mysql_query($count4, $connection);
                $row4 = mysql_fetch_array($count4query);
                $count5 = "SELECT COUNT(*) FROM item8_tbl WHERE rating=5";
                $count5query = mysql_query($count5, $connection);
                $row5 = mysql_fetch_array($count5query);

                $average1 = $row1[0] / $countquery * 100;
                $average2 = $row2[0] / $countquery * 100;
                $average3 = $row3[0] / $countquery * 100;
                $average4 = $row4[0] / $countquery * 100;
                $average5 = $row5[0] / $countquery * 100;

                echo "
                <div class='w3-panel'>
                    <div class='w3-quarter'>
                        <h1>" . mysql_result($averagequery, 0) . "</h1><h5>out of " . mysql_result($countquery, 0) . "</h5>
                    </div>
                    <div class='w3-quarter'>
                        <br>
                        5 Stars
                        <div class='w3-progress-container' style='display:inline-block; width:250px;'>
                            <div class='w3-progressbar w3-yellow' style='width:" . $average5 . "%'></div>
                        </div>" . $row5[0] . 
                        "<br>
                        4 Stars
                        <div class='w3-progress-container' style='display:inline-block; width:250px;'>
                            <div class='w3-progressbar w3-yellow' style='width:" . $average4 . "%'></div>
                        </div>" . $row4[0] . 
                        "<br>
                        3 Stars
                        <div class='w3-progress-container' style='display:inline-block; width:250px;'>
                            <div class='w3-progressbar w3-yellow' style='width:" . $average3 . "%'></div>
                        </div>" . $row3[0] . 
                        "<br>
                        2 Stars
                        <div class='w3-progress-container' style='display:inline-block; width:250px;'>
                            <div class='w3-progressbar w3-yellow' style='width:" . $average2 . "%'></div>
                        </div>" . $row2[0] . 
                        "<br>
                        1 Stars
                        <div class='w3-progress-container' style='display:inline-block; width:250px;'>
                            <div class='w3-progressbar w3-yellow' style='width:" . $average1 . "%'></div>
                        </div>" . $row1[0] .
                    "</div>
                    <div class='w3-quarter'>
                    </div>
                    <div class='w3-quarter'>
                    </div>
                </div>";

                while($row1 = mysql_fetch_assoc($query, MYSQL_ASSOC)) {
                    echo "
                        <div class='w3-panel'>
                            <div class='w3-right'>" . $row1['entered'] . "</div>";
                            if($row1['rating'] == 1) {
                                echo '<div class="rating1">
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                </div>';
                            } else if($row1['rating'] == 2) {
                                echo ' <div class="rating1">
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                    <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                </div>';
                            } else if($row1['rating'] == 3) {
                                echo '<div class="rating1">
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                    <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                    <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                </div>';
                            } else if($row1['rating'] == 4) {
                                echo '<div class="rating1">
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                    <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                    <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                    <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                </div>';
                            } else if($row1['rating'] == 5) {
                                echo '<div class="rating1">
                                    <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                    <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                    <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                    <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                    <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                </div>';
                            }
                        echo "by " . $row1['name'] . "</div>
                        <div class='w3-panel'>
                            <p>" . $row1['comment'] . "</p>
                        </div>";
                }

                mysql_close($connection);
            ?>
        </div>

        <div class="w3-panel">
            <h1 style="font-size:25px;"><b>Write a Review!</b></h1>

            <form action="item8review.php" method="GET">
                Name<br>
                <input type="text" name="name" id="name"><br><br>
                Rating<br>
                <div class="rating">
                    <span><input type="radio" name="rating" id="str5" value="5"><label for="str5"></label></span>
                    <span><input type="radio" name="rating" id="str4" value="4"><label for="str4"></label></span>
                    <span><input type="radio" name="rating" id="str3" value="3"><label for="str3"></label></span>
                    <span><input type="radio" name="rating" id="str2" value="2"><label for="str2"></label></span>
                    <span><input type="radio" name="rating" id="str1" value="1"><label for="str1"></label></span>
                </div><br><br>
                Comment<br>
                <textarea rows="5" cols="50" name="comment" id="comment"></textarea><br><br>
                <input type="submit" name="submit" value="Submit">
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

    $(document).ready(function(){
        //  Check Radio-box
        $(".rating input:radio").attr("checked", false);
        $('.rating input').click(function () {
            $(".rating span").removeClass('checked');
            $(this).parent().addClass('checked');
        });

        $('input:radio').change(
        function(){
            var userRating = this.value;
            alert(userRating);
        }); 
    });
    </script>
</body>
</html>it