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
        if (!empty($_SESSION["shopping_cart"])) {
            foreach ($_SESSION["shopping_cart"] as $key => $value) {
                if ($_POST["code"] == $key) {
                    unset($_SESSION["shopping_cart"][$key]);
                    $status = "<div class='box' style='color:red;'>
      Product is removed from your cart!</div>";
                }
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
                <h3><a class="sidebar_title" href="http://www.hdstockphoto.com" title="foto" target="_blank">Newsletter</a></h3>
                <p>Praesent aliquam mi id tellus pretium pulvinar in vel ligula.</p>
                <div id="newsletter">
                    <form action="#" method="get">
                        <input type="text" value="Subscribe" name="email_newsletter" id="email_newsletter" title="email_newsletter" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                        <input type="submit" name="subscribe" value="Subscribe" alt="Subscribe" id="subscribebtn" title="Subscribe" class="subscribebtn" />
                    </form>
                    <div class="cleaner"></div>
                </div>
            </div> <!-- END of sidebar -->

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
                    if (isset($_SESSION["shopping_cart"])) {
                        $total_price = 0;
                        foreach ($_SESSION["shopping_cart"] as $product) {
                            ?>
                            <tr>
                                <td><img src="images/product/'<?php echo $product["prod_no"]; ?>'.jpg" alt="image 01" /></td>
                                <td><?php echo $product["prod_name"]; ?></td>
                                <td align="center"><input type="text" value="1" style="width: 20px; text-align: right" /> </td>
                                <td>
                                    <form method='post' action=''>
                                        <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
                                        <input type='hidden' name='action' value="change" />
                                        <select name='quantity' class='quantity' onChange="this.form.submit()">
                                            <option <?php if ($product["quantity"] == 1) echo "selected"; ?>value="1">1</option>
                                            <option <?php if ($product["quantity"] == 2) echo "selected"; ?>value="2">2</option>
                                            <option <?php if ($product["quantity"] == 3) echo "selected"; ?>value="3">3</option>
                                            <option <?php if ($product["quantity"] == 4) echo "selected"; ?>value="4">4</option>
                                            <option <?php if ($product["quantity"] == 5) echo "selected"; ?>value="5">5</option>
                                        </select>
                                    </form>
                                </td>
                                <td align="right">$100 </td>
                                <td align="center"> <a href="#"><img src="images/remove_x.gif" alt="remove" /><br />Remove</a> </td>
                            </tr>
                            <tr>
                                <td><img src="images/product/02.jpg" alt="image 02" /> </td>
                                <td>Hendrerit justo</td>
                                <td align="center"><input type="text" value="1" style="width: 20px; text-align: right" /> </td>
                                <td align="right">$40 </td>
                                <td align="right">$40 </td>
                                <td align="center"> <a href="#"><img src="images/remove_x.gif" alt="remove" /><br />Remove</a> </td>
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
                        <td colspan="3" align="right" height="40px">Have you modified your basket? Please click here to <a href="shoppingcart.html"><strong>Update</strong></a>&nbsp;&nbsp;</td>
                        <td align="right" style="background:#ccc; font-weight:bold"> Total </td>
                        <td align="right" style="background:#ccc; font-weight:bold">$140 </td>
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
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur semper quam sit amet turpis rhoncus id venenatis tellus sollicitudin. Fusce ullamcorper, dolor non mollis pulvinar, turpis tortor commodo nisl. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
            </div>

            <div class="cleaner h40"></div>
            <center>
                Copyright © 2048 Your Company Name | Designed by <a href="http://www.templatemo.com" rel="nofollow" target="_parent">Free CSS Templates</a>
            </center>
        </div> <!-- END of footer -->

    </div>


    <script type='text/javascript' src='js/logging.js'></script>
</body>

</html>