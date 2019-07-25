<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Roots Coffee - The online coffee shop store</title>
    <meta name="keywords" content="coffee, coffee shop, roots" />
    <meta name="description" content="Roots Coffee - The online coffee shop store provided by filipeam" />
    <link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/ddsmoothmenu.js">
        /***********************************************
         * Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
         * This notice MUST stay intact for legal use
         * Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
         ***********************************************/
    </script>

    <script type="text/javascript">
        ddsmoothmenu.init({
            mainmenuid: "templatemo_menu", //menu DIV id
            orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
            classname: 'ddsmoothmenu', //class added to menu's outer DIV
            //customtheme: ["#1c5a80", "#18374a"],
            contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
        })
    </script>

    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <script language="javascript" type="text/javascript" src="scripts/mootools-1.2.1-core.js"></script>
    <script language="javascript" type="text/javascript" src="scripts/mootools-1.2-more.js"></script>
    <script language="javascript" type="text/javascript" src="scripts/slideitmoo-1.1.js"></script>
    <script language="javascript" type="text/javascript">
        window.addEvents({
            'domready': function () {
                /* thumbnails example , div containers */
                new SlideItMoo({
                    overallContainer: 'SlideItMoo_outer',
                    elementScrolled: 'SlideItMoo_inner',
                    thumbsContainer: 'SlideItMoo_items',
                    itemsVisible: 5,
                    elemsSlide: 2,
                    duration: 200,
                    itemsSelector: '.SlideItMoo_element',
                    itemWidth: 171,
                    showControls: 1
                });
            },

        });

        function clearText(field) {
            if (field.defaultValue == field.value) field.value = '';
            else if (field.value == '') field.value = field.defaultValue;
        }
    </script>

</head>

<body id="home">

    <div id="templatemo_wrapper">
        <div id="templatemo_header">
            <div id="site_title">
                <h1>Roots Coffee</a>
                </h1>
            </div>

            <div id="header_right">
                <ul id="language">
                    <li>
                        <a><img src="images/usa.png" alt="English" /></a>
                    </li>
                    <li>
                        <a><img src="images/china.png" alt="Chinese" /></a>
                    </li>
                    <li>
                        <a><img src="images/germany.png" alt="Germany" /></a>
                    </li>
                    <li>
                        <a><img src="images/brazil.png" alt="Brazilian" /></a>
                    </li>
                </ul>

                <div id="templatemo_search">
                    <form action="#" method="get">
                        <input type="text" value="Search" name="keyword" id="keyword" title="keyword"
                            onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                        <input type="submit" name="Search" value="" alt="Search" id="searchbutton" title="Search"
                            class="sub_btn" />
                    </form>
                </div>
            </div>
            <!-- END -->
        </div>
        <!-- END of header -->

        <div id="templatemo_menu" class="ddsmoothmenu">
            <ul>
                <li><a href="index.html" class="selected">Home</a></li>
                <li><a href="products.html">Products</a>
                    <ul>
                        <li><a href="#">Sub menu 1</a></li>
                        <li><a href="#">Sub menu 2</a></li>
                        <li><a href="#">Sub menu 3</a></li>
                    </ul>
                </li>
                <li><a href="about.html">About</a>
                    <ul>
                        <li><a href="#">Sub menu 1</a></li>
                        <li><a href="#">Sub menu 2</a></li>
                        <li><a href="#">Sub menu 3</a></li>
                        <li><a href="#">Sub menu 4</a></li>
                        <li><a href="#">Sub menu 5</a></li>
                    </ul>
                </li>
                <li><a href="faqs.html">FAQs</a></li>
                <li><a href="checkout.html">Checkout</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
            <br style="clear: left" />
        </div>
        <!-- end of templatemo_menu -->

        <div id="templatemo_middle">
            <img src="images/foodiesfeed.com_coffee-beans-in-a-leaf-macro.png" alt="coffee-beans-in-a-leaf-macro" />
            <h1>Introducing Roots Coffee</h1>
            <p>Roots Coffee is an online coffee shop that brings only renowed coffee brands direct from local producers
                of the world bests coffee places.</p>
            <a href="#" class="buy_now">Browse All Products</a>
        </div>
        <!-- END of middle -->

        <div id="templatemo_main_top"></div>
        <div id="templatemo_main">
            <div id="product_slider">
                <div class="cleaner"></div>
            </div>

            <div id="sidebar">
                <h3>Categories</h3>
                <ul class="sidebar_menu">
                    <li><a href="#">Aenean et dolor diam</a></li>
                    <li><a href="#">Aenean pulvinar</a></li>
                    <li><a href="#">Cras bibendum auctor</a></li>
                    <li><a href="#">Donec sodales bibendum</a></li>
                    <li><a href="#">Etiam in tellus</a></li>
                    <li><a href="#">Hendrerit justo</a></li>
                    <li><a href="#">Integer interdum</a></li>
                    <li><a href="#">Maecenas a diam</a></li>
                    <li><a href="#">Nullam in semper</a></li>
                    <li><a href="#">Posuere in commodo</a></li>
                    <li><a href="#">Tincidunt leo</a></li>
                    <li><a href="#">Vestibulum blandit</a></li>
                </ul>
                <h3><a class="sidebar_title" href="http://www.mystockvector.com" title="stock vector"
                        target="_blank">Newsletter</a></h3>
                <p>Praesent aliquam mi id tellus pretium pulvinar in vel ligula.</p>
                <div id="newsletter">
                    <form action="#" method="get">
                        <input type="text" value="Subscribe" name="email_newsletter" id="email_newsletter"
                            title="email_newsletter" onfocus="clearText(this)" onblur="clearText(this)"
                            class="txt_field" />
                        <input type="submit" name="subscribe" value="Subscribe" alt="Subscribe" id="subscribebtn"
                            title="Subscribe" class="subscribebtn" />
                    </form>
                    <div class="cleaner"></div>
                </div>
            </div>
            <!-- END of sidebar -->

            <?php
            include '../appdata/rootsdb.inc';

            $connection = mysqli_connect($host, $user, $password, $database);
            
            if (mysqli_connect_errno()) {
              die(mysqli_connect_error());    // not production error handling
            }

            $sqlSelectAllTheProducts = "SELECT * FROM tblproduct";
            ?>
        <div id="content">
        	<div class="col col_14 product_gallery">
            	<a href="productdetail.html"><img src="images/product/01.jpg" alt="Product 01" /></a>
                <h3>Ut eu feugiat</h3>
                <p class="product_price">$ 100</p>
                <a href="shoppingcart.html" class="add_to_cart">Add to Cart</a>
            </div>        	
            <div class="col col_14 product_gallery">
            	<a href="productdetail.html"><img src="images/product/02.jpg" alt="Product 02" /></a>
                <h3>Curabitur et turpis</h3>
                <p class="product_price">$ 200</p>
                <a href="shoppingcart.html" class="add_to_cart">Add to Cart</a>
            </div>        	
            <div class="col col_14 product_gallery no_margin_right">
            	<a href="productdetail.html"><img src="images/product/03.jpg" alt="Product 03" /></a>
                <h3>Mauris consectetur</h3>
                <p class="product_price">$ 120</p>
                <a href="shoppingcart.html" class="add_to_cart">Add to Cart</a>
            </div>        	
            <div class="col col_14 product_gallery">
            	<a href="productdetail.html"><img src="images/product/04.jpg" alt="Product 04" /></a>
                <h3>Proin volutpat</h3>
                <p class="product_price">$ 260</p>
                <a href="shoppingcart.html" class="add_to_cart">Add to Cart</a>
            </div>        	
            <div class="col col_14 product_gallery">
            	<a href="productdetail.html"><img src="images/product/05.jpg" alt="Product 05" /></a>
                <h3>Aenean tempus</h3>
                <p class="product_price">$ 80</p>
                <a href="shoppingcart.html" class="add_to_cart">Add to Cart</a>
            </div>        	
            <div class="col col_14 product_gallery no_margin_right">
            	<a href="productdetail.html"><img src="images/product/06.jpg" alt="Product 06" /></a>
                <h3>Nulla luctus urna</h3>
                <p class="product_price">$ 193</p>
                <a href="shoppingcart.html" class="add_to_cart">Add to Cart</a>
            </div>        	
            <div class="col col_14 product_gallery">
            	<a href="productdetail.html"><img src="images/product/07.jpg" alt="Product 07" /></a>
                <h3>Pellentesque egestas</h3>
                <p class="product_price">$ 30</p>
                <a href="shoppingcart.html" class="add_to_cart">Add to Cart</a>
            </div>        	
            <div class="col col_14 product_gallery">
            	<a href="productdetail.html"><img src="images/product/08.jpg" alt="Product 08" /></a>
                <h3>Suspendisse porttitor</h3>
                <p class="product_price">$ 220</p>
                <a href="shoppingcart.html" class="add_to_cart">Add to Cart</a>
            </div>        	
            <div class="col col_14 product_gallery no_margin_right">
            	<a href="productdetail.html"><img src="images/product/09.jpg" alt="Product 09" /></a>
                <h3>Nam vehicula</h3>
                <p class="product_price">$ 65</p>
                <a href="shoppingcart.html" class="add_to_cart">Add to Cart</a>
            </div>        	
        </div> <!-- END of content -->
        <div class="cleaner"></div>
    </div> <!-- END of main -->
    

            <div id="templatemo_footer">
                <div class="col col_16">
                    <h4>Categories</h4>
                    <ul class="footer_menu">
                        <li><a href="#">Aenean et dolor diam</a></li>
                        <li><a href="#">Aenean pulvinar</a></li>
                        <li><a href="#">Cras bibendum auctor</a></li>
                        <li><a href="#">Donec sodales bibendum</a></li>
                    </ul>
                </div>
                <div class="col col_16">
                    <h4>Pages</h4>
                    <ul class="footer_menu">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Privacy</a></li>
                    </ul>
                </div>
                <div class="col col_16">
                    <h4>Partners</h4>
                    <ul class="footer_menu">
                        <li><a rel="nofollow" href="http://www.flashmo.com/">Free Flash Templates</a></li>
                        <li><a rel="nofollow" href="http://www.templatemo.com/">Free CSS Templates</a></li>
                        <li><a href="http://www.koflash.com/">Website Gallery</a></li>
                        <li><a href="http://www.webdesignmo.com/blog/">Web Design Resources</a></li>
                    </ul>
                </div>
                <div class="col col_16">
                    <h4>Social</h4>
                    <ul class="footer_menu">
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Youtube</a></li>
                        <li><a href="#">LinkedIn</a></li>
                    </ul>
                </div>
                <div class="col col_13 no_margin_right">
                    <h4>About Us</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur semper quam sit amet turpis
                        rhoncus id venenatis tellus sollicitudin. Fusce ullamcorper, dolor non mollis pulvinar, turpis
                        tortor commodo nisl. Validate <a href="http://validator.w3.org/check?uri=referer"
                            rel="nofollow"><strong>XHTML</strong></a> &amp; <a
                            href="http://jigsaw.w3.org/css-validator/check/referer"
                            rel="nofollow"><strong>CSS</strong></a>.</p>
                </div>

                <div class="cleaner h40"></div>
                <center>
                    Copyright © 2048 Your Company Name | Designed by <a href="http://www.templatemo.com" rel="nofollow"
                        target="_parent">Free CSS Templates</a>
                </center>
            </div>
            <!-- END of footer -->

        </div>


        <script type='text/javascript' src='js/logging.js'></script>
</body>

</html>