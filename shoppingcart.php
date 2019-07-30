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

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/ddsmoothmenu.js"></script>

    <?php
    session_start();
    $status = "";
    if (isset($_POST['action']) && $_POST['action'] == "remove") {
        echo ("here1");
        if (!empty($_SESSION["shopping_cart"])) {
            echo ("here2");
            $counter=0;
            foreach ($_SESSION["shopping_cart"] as $key) {
                echo (" code=");
                echo ($_POST["code"]);
                echo (" key=");
                echo ($key["code"]);
                echo (" counter=");
                echo($counter);
                if ($_POST["code"] == $key["code"]) {
                    echo ("here4");
                    unset($_SESSION["shopping_cart"][$counter]);
                    $status = "<div class='box' style='color:red;'>
      Product is removed from your cart!</div>";
                    echo ($status);
                }
                $counter=$counter+1;
                if (empty($_SESSION["shopping_cart"]))
                    unset($_SESSION["shopping_cart"]);
            }
        }
    }

    if (isset($_POST['action']) && $_POST['action'] == "change") {
        foreach ($_SESSION["shopping_cart"] as &$value) {
            if ($value['code'] === $_POST["code"]) {
                $value['quantity'] = $_POST["quantity"];
                break; // Stop the loop after we've found the product
            }
        }
    }
    ?>

</head>

<body id="subpage">

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
                <li><a href="products.php">Products</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="faqs.html">FAQs</a></li>
                <li><a href="checkout.html">Checkout</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
            <br style="clear: left" />
        </div>
        <!-- end of templatemo_menu -->

        <div class="cleaner h20"></div>
        <div id="templatemo_main_top"></div>
        <div id="templatemo_main">

            <div id="templatemo_main_top"></div>
            <div id="templatemo_main">
                <div id="product_slider">
                    <div class="cleaner"></div>
                </div>

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

                    <table width="700px" cellspacing="0" cellpadding="5">
                        <tr bgcolor="#CCCCCC">
                            <th width="220" align="left">Image </th>
                            <th width="180" align="left">Description </th>
                            <th width="100" align="center">Quantity </th>
                            <th width="60" align="right">Price </th>
                            <th width="60" align="right">Total </th>
                            <th width="90"> </th>

                        </tr>
                        <?php
                        $total_price = 0;
                        if (isset($_SESSION["shopping_cart"])) {
                            
                            foreach ($_SESSION["shopping_cart"] as $product) {
                                ?>
                                <tr>
                                    <td><img src="images/product/<?php echo $product["code"]; ?>.jpg" alt="<?php echo $product["name"]; ?> image" /></td>
                                    <td><?php echo $product["name"]; ?></td>
                                    <td>
                                        <form method='post' action=''>
                                            <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
                                            <input type='hidden' name='action' value="change" />
                                            <select name='quantity' class='quantity' onChange="this.form.submit()">
                                                <option <?php if ($product["quantity"] == 1) echo "selected "; ?>value="1">1</option>
                                                <option <?php if ($product["quantity"] == 2) echo "selected "; ?>value="2">2</option>
                                                <option <?php if ($product["quantity"] == 3) echo "selected "; ?>value="3">3</option>
                                                <option <?php if ($product["quantity"] == 4) echo "selected "; ?>value="4">4</option>
                                                <option <?php if ($product["quantity"] == 5) echo "selected "; ?>value="5">5</option>
                                            </select>
                                        </form>
                                    </td>
                                    <td><?php echo "$" . $product["price"]; ?></td>
                                    <td><?php echo "$" . $product["price"] * $product["quantity"]; ?></td>
                                    <td>
                                        <form method='post' action=''>
                                            <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
                                            <input type='hidden' name='action' value="remove" />
                                            <button type='submit' class='remove'>Remove Item</button>
                                    </td>
                                </tr>
                                <?php
                                $total_price += ($product["price"] * $product["quantity"]);
                            }
                            ?>
                        <?php
                        } else {
                            echo "<h3>Your cart is empty!</h3>";
                        }
                        ?>
                        <tr>
                            <td colspan="3" align="right" height="40px"></td>
                            <td align="right" style="background:#ccc; font-weight:bold"> Total </td>
                            <td align="right" style="background:#ccc; font-weight:bold"><?php echo "$" . $total_price; ?></td>
                            <td style="background:#ccc; font-weight:bold"> </td>
                        </tr>
                    </table>
                    <div style="float:right; width: 215px; margin-top: 20px;">

                        <div class="checkout"><a href="checkout.html" class="more">Proceed to Checkout</a></div>
                        <div class="cleaner h20"></div>
                        <div class="continueshopping"><a href="javascript:history.back()" class="more">Continue Shopping</a></div>

                    </div>

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


            <script type='text/javascript' src='js/logging.js'></script>
</body>

</html>