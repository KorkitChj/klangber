<?php
$tel = $_GET['t'];
$network = $_GET['n'];
$price = $_GET['p'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <base href="/klangber/">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Shoes Store - Product Detail</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="templatemo_style.css" rel="stylesheet" type="text/css" />

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
            mainmenuid: "top_nav", //menu DIV id
            orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
            classname: 'ddsmoothmenu', //class added to menu's outer DIV
            //customtheme: ["#1c5a80", "#18374a"],
            contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
        })
    </script>

    <script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
    <link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" />
    <script type="text/JavaScript" src="js/slimbox2.js"></script>


</head>

<body>

    <div id="templatemo_body_wrapper">
        <!-- ส่วน header -->
        <div id="background_header">
            <div id="templatemo_header">
                <div id="site_title">
                    <h1><a href="#">KlangBer.com</a>
                    </h1>
                </div>
                <div id="header_right">
                    <p> </p>
                </div>
                <div class="cleaner"></div>
            </div> <!-- END of templatemo_header -->
        </div>

        <div id="templatemo_wrapper">
            <div id="templatemo_menubar">
                <div id="top_nav" class="ddsmoothmenu">
                    <ul>
                        <li><a href="home" class="selected">หน้าแรก</a></li>
                        <li><a href="products">หมวดหมู่เบอร์</a>
                            <ul>
                                <li><a href="products#tel1">เบอร์มงคล</a></li>
                                <li><a href="products#tel2">เบอร์มงคลท้าย</a></li>
                                <li><a href="products#tel3">เบอร์หงส์มังกร</a></li>
                                <li><a href="products#tel4">เบอร์เรียง</a></li>
                                <li><a href="products#tel5">เบอร์ตอง</a></li>
                                <li><a href="products#tel6">เบอร์โฟร์</a></li>
                            </ul>
                        </li>
                        <li><a href="about">วิธีสั่งซื้อ</a></li>
                        <li><a href="faqs">ติดต่อเรา</a></li>
                        <li><a href="loginx">Admin</a></li>
                    </ul>
                    <br style="clear: left" />
                </div> <!-- end of ddsmoothmenu -->
                <div id="templatemo_search">
                    <form action="#" method="get">
                        <input type="text" value=" " name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                        <input type="submit" name="Search" value=" " alt="Search" id="searchbutton" title="Search" class="sub_btn" />
                    </form>
                </div>
            </div> <!-- END of templatemo_menubar -->

            <div id="templatemo_main">

                <div id="content" class="float_center">

                    <h1><img src="images/10.png" width="518" height="187" /></h1>

                    <div class="product_detail_border">
                        <img src="<?php echo "images/product/" . ($network == 'TRUE' ? 'true.png' : ($network == 'AIS' ? 'ais.png' : 'dtac.png')) ?>" width="147" height="79" hspace="20" />
                        <p>&nbsp;</p>
                        <h1><?php echo $tel ?></h1>
                        <div class="product_detail_price">
                            <h4>ราคา <?php echo $price ?> บาท</h4>
                        </div>

                        <p>&nbsp;</p>
                        <p><img src="images/facebook.png" width="51" height="53" /> <img src="images/line.jpg" width="52" height="53" /> <img src="images/icon.png" width="53" height="53" /></p>
                        <p>&nbsp;</p>

                        <p>ติดต่อเรา: 066-1689999,0644566651</p>
                        <p>facebook: KlangBer คลังเบอร์</p>
                        <p>Line: @ber999</p>

                        <div class="cleaner h20"></div>
                    </div>
                    <div class="cleaner h30"></div>
                    <h5>&nbsp;</h5>
                </div>
                <div class="cleaner"></div>
            </div> <!-- END of templatemo_main -->
        </div> <!-- END of templatemo_wrapper -->

        <!-- ส่วนท้าย -->
        <div id="background_footer">
            <div id="templatemo_footer">
                <p><a href="home">Home</a> | <a href="products">Products</a> | <a href="about">About</a> | <a href="faqs">FAQs</a> | <a href="checkout">Checkout</a> | <a href="checkout">Contact Us</a>
                </p>
                Copyright © 2072 <a href="#">Your Company Name</a> <!-- Credit: www.templatemo.com -->
            </div> <!-- END of templatemo_footer -->
        </div>
    </div> <!-- END of templatemo_body_wrapper -->

</body>

</html>