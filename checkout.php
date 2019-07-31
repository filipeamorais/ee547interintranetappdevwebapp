<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Roots Coffee - The online coffee shop store</title>
    <meta name="keywords" content="coffee, coffee shop, roots" />
    <meta name="description" content="Roots Coffee - The online coffee shop store provided by filipeam" />
    <link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
    <link rel="stylesheet" type="text/css" href="css/styles.css" />

    <?php
    include 'rootsdb.inc';
    session_start();
    $connection = mysqli_connect($host, $user, $password, $database);

    if (mysqli_connect_errno()) {
        die(mysqli_connect_error());    // not production error handling
    }

    if (isset($_POST['prod_no']) && $_POST['prod_no'] != "") {
        $prod_no = $_POST['prod_no'];
        $resultAddedProduct = mysqli_query($connection, "SELECT * FROM `tblproduct` WHERE `prod_no`='$prod_no'");
        $addedProductRow = mysqli_fetch_assoc($resultAddedProduct);
        $nameProd = $addedProductRow['prod_name'];
        $codeProd = $addedProductRow['prod_no'];
        $priceProd = $addedProductRow['prod_price'];

        $cartArray = array(
            $codeProd => array(
                'name' => $nameProd,
                'code' => $codeProd,
                'price' => $priceProd,
                'quantity' => 1
            )
        );

        if (empty($_SESSION["shopping_cart"])) {
            $_SESSION["shopping_cart"] = $cartArray;
            //$status = "<div class='box'>Product is added to your cart!</div>";
            echo ("<script type='text/javascript'>alert('Product is added to your cart!');</script>");
        } else {
            $array_keys = array_keys($_SESSION["shopping_cart"]);
            if (in_array($codeProd, $array_keys)) {
                //$status = "<div class='box' style='color:red;'>Product is already added to your cart!</div>";
                echo ("<script type='text/javascript'>alert('Product is already added to your cart!');</script>");
            } else {
                $_SESSION["shopping_cart"] = array_merge(
                    $_SESSION["shopping_cart"],
                    $cartArray
                );
                //$status = "<div class='box'>Product is added to your cart!</div>";
                echo ("<script type='text/javascript'>alert('Product is added to your cart!');</script>");
            }
        }
    }
    ?>
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
                        <a><img src="images/brazil.png" alt="Brazilian" /></a>
                    </li>
                </ul>

                <div id="templatemo_search">
                    <form action="#" method="get">
                        <input type="text" value="Search" name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                        <input type="submit" name="Search" value="" alt="Search" id="searchbutton" title="Search" class="sub_btn" />
                    </form>
                </div>
            </div>
        </div>
        <!-- END of header of the page -->

        <div id="templatemo_menu" class="ddsmoothmenu">
            <ul>
                <li><a href="index.php" class="selected">Home</a></li>
                <li><a>Products</a></li>
                <li><a>About</a></li>
                <li><a>FAQs</a></li>
                <li><a>Checkout</a></li>
                <li><a>Contact</a></li>
            </ul>
            <br style="clear: left" />
        </div>
        <!-- end of templatemo_menu -->
    <div class="cleaner h20"></div>
    <div id="templatemo_main_top"></div>
    <div id="templatemo_main">
    	
    <div id="sidebar">
                <h3>Categories</h3>
                <ul class="sidebar_menu">
                    <li><a href="#">Whole Bean</a></li>
                    <li><a href="#">Percolator</a></li>
                    <li><a href="#">Gold filter</a></li>
                    <li><a href="#">French press</a></li>
                    <li><a href="#">Espresso</a></li>
                    <li><a href="#">Paper filter</a></li>
                </ul>
                <h3>Newsletter</h3>
                <p>Sign up to receive our promotions and updates.</p>
                <div id="newsletter">
                    <form action="#" method="get">
                        <input type="text" value="Subscribe" name="email_newsletter" id="email_newsletter" title="email_newsletter" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                        <input type="submit" name="subscribe" value="Subscribe" alt="Subscribe" id="subscribebtn" title="Subscribe" class="subscribebtn" />
                    </form>
                    <div class="cleaner"></div>
                </div>
            </div>
            <!-- END of sidebar -->
       
        <div id="content">
       		<h2>Checkout</h2>
            <h5><strong>BILLING DETAILS</strong></h5>
            <div class="col col_13 checkout">
				Enter your full name as it is on the credit card:                				<input type="text"  style="width:300px;"  />
                Address:
                <input type="text"  style="width:300px;"  />
                City:
                <input type="text"  style="width:300px;"  />
                Country:
                <input type="text"  style="width:300px;"  />
            </div>
            
            <div class="col col_13 checkout">
            	E-MAIL
				<input type="text"  style="width:300px;"  />
                PHONE<br />
				<span style="font-size:10px">Please, specify your reachable phone number. YOU MAY BE GIVEN A CALL TO VERIFY AND COMPLETE THE ORDER.</span>
                <input type="text"  style="width:300px;"  />
            </div>
            <?php
            $total_price = $_GET["total_price"];
            ?>
            <div class="cleaner h50"></div>
            <h3>Shopping Cart</h3>
            <h4>TOTAL: <strong><?php echo ("$".$total_price.",00");?></strong></h4>
			<p><input type="checkbox" />I have accepted the <a href="#">Terms of Use</a>.</p>
            <table style="border:1px solid #CCCCCC;" width="100%">
                <tr>
                    <td height="80px"> <img src="images/paypal.gif" alt="paypal" /></td>
                    <td width="400px;" style="padding: 0px 20px;">Recommended if you have a PayPal account. Fastest delivery time.
                    </td>
                    <td><a href="#" class="more">PAYPAL</a></td>
                </tr>
                <tr>
                    <td  height="80px"><img src="images/bitcoin.gif" alt="bitcoin" />
                    </td>
                    <td  width="400px;" style="padding: 0px 20px;">Bitcoin is the world's first cryptocurrency, a form of electronic cash. It is the first decentralized digital currency: the system works without a central bank or single administrator.
                    </td>
                    <td><a href="#" class="more">BITCOIN</a></td>
                </tr>
            </table>
               
		</div>
        <div class="cleaner"></div>
    </div> <!-- END of main -->
    
    <div id="templatemo_footer">
                <div class="col col_16">
                    <h4>Partners</h4>
                    <ul class="footer_menu">
                        <li><a rel="nofollow" href="https://www.uab.edu/home/">UAB</a></li>
                        <li><a rel="nofollow" href="https://secure.php.net/">PHP</a></li>
                        <li><a href="https://www.apachefriends.org/index.html">XAMPP</a></li>
                        <li><a href="https://www.mysql.com/">MySQL</a></li>
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
                    <p>Roots Coffee is an online coffee shop that brings only renowed coffee brands direct from local producers
                        of the world bests coffee places.</p>
                </div>

                <div class="cleaner h40"></div>
                <center>
                    Copyright © 2048 Roots Coffee | Designed by Filipe Morais</a>
                </center>
            </div>
            <!-- END of footer -->   
   
</div>


<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>