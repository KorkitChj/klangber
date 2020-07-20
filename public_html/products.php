<?php
include_once("./data_process/phone_number_fetch.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Shoes Store - Products</title>
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

</head>

<body>

    <div id="templatemo_body_wrapper">
        <div class="modalx" style="display: none;"></div>
        <!-- ส่วน header -->
        <div id="background_header">
            <div id="templatemo_header">
                <div id="site_title">
                    <h1><a href="#">berchewit.com</a>
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
                        <li><a href="home">หน้าแรก</a></li>
                        <li><a href="products" class="selected">หมวดหมู่เบอร์</a>
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
                        <li><a href="login">Admin</a></li>

                    </ul>
                    <br style="clear: left" />
                </div> <!-- end of ddsmoothmenu -->
                <?php include_once('./data_process/form_phone_number_search.php'); ?>
            </div> <!-- END of templatemo_menubar -->

            <div id="templatemo_main">
                <div id="content" class="float_b">
                    <div id="gridContainer"></div>

                    <!-- ขึ้นบรรทัดใหม่ -->
                    <div class="cleaner"></div>
                    <!-- หมวดเบอร์ 1 -->
                    <a name="tel1">
                        <h1> เบอร์มงคล<img src="images/idea.png" width="65" height="56" /></h1>
                    </a>
                    <?php $result2 = getBertel("เบอร์มงคล"); while ($row2 = $result2->fetch_assoc()) { ?>
                        <div class="product_box">
                            <h3>&nbsp;</h3>
                            <h2><a href="productdetail/<?php echo $row2['network'] ?>/<?php echo $row2['tel'] ?>/<?php echo $row2['price'] ?>"><?php echo $row2['tel'] ?></a></h2>
                            <p><a href="productdetail/<?php echo $row2['network'] ?>/<?php echo $row2['tel'] ?>/<?php echo $row2['price'] ?>"><img src="<?php echo "images/product/" . ($row2['network'] == 'TRUE' ? 'true.png' : ($row2['network'] == 'AIS' ? 'ais.png' : 'dtac.png')) ?>" hspace="20" /></a>ผลรวม <?php echo $row2['sum'] ?></p>
                            <p class="product_price"><?php echo $row2['price'] ?> บาท</p>
                            <a href="productdetail/<?php echo $row2['network'] ?>/<?php echo $row2['tel'] ?>/<?php echo $row2['price'] ?>" class="addtocart"></a>
                        </div>
                    <?php } ?>

                    <!-- ขึ้นบรรทัดใหม่ -->
                    <div class="cleaner"></div>

                    <!-- หมวดเบอร์ 2  -->
                    <a name="tel2">
                        <h1> เบอร์มงคลท้าย<img src="images/idea.png" width="65" height="56" /></h1>
                    </a>
                    <?php $result3 = getBertel("เบอร์มงคลท้าย"); while ($row3 = $result3->fetch_assoc()) { ?>
                        <div class="product_box">
                            <h3>&nbsp;</h3>
                            <h2><a href="productdetail/<?php echo $row3['network'] ?>/<?php echo $row3['tel'] ?>/<?php echo $row3['price'] ?>"><?php echo $row3['tel'] ?></a></h2>
                            <p><a href="productdetail/<?php echo $row3['network'] ?>/<?php echo $row3['tel'] ?>/<?php echo $row3['price'] ?>"><img src="<?php echo "images/product/" . ($row3['network'] == 'TRUE' ? 'true.png' : ($row3['network'] == 'AIS' ? 'ais.png' : 'dtac.png')) ?>" hspace="20" /></a>ผลรวม <?php echo $row3['sum'] ?></p>
                            <p class="product_price"><?php echo $row3['price'] ?> บาท</p>
                            <a href="productdetail/<?php echo $row3['network'] ?>/<?php echo $row3['tel'] ?>/<?php echo $row3['price'] ?>" class="addtocart"></a>
                        </div>
                    <?php } ?>

                    <!-- ขึ้นบรรทัดใหม่ -->
                    <div class="cleaner"></div>

                    <!-- หมวดเบอร์ 3  -->
                    <a name="tel3">
                        <h1> เบอร์หงส์มังกร<img src="images/idea.png" width="65" height="56" /></h1>
                    </a>
                    <?php $result4 = getBertel("เบอร์หงส์มังกร"); while ($row4 = $result4->fetch_assoc()) { ?>
                        <div class="product_box">
                            <h3>&nbsp;</h3>
                            <h2><a href="productdetail/<?php echo $row4['network'] ?>/<?php echo $row4['tel'] ?>/<?php echo $row4['price'] ?>"><?php echo $row4['tel'] ?></a></h2>
                            <p><a href="productdetail/<?php echo $row4['network'] ?>/<?php echo $row4['tel'] ?>/<?php echo $row4['price'] ?>"><img src="<?php echo "images/product/" . ($row4['network'] == 'TRUE' ? 'true.png' : ($row4['network'] == 'AIS' ? 'ais.png' : 'dtac.png')) ?>" hspace="20" /></a>ผลรวม <?php echo $row4['sum'] ?></p>
                            <p class="product_price"><?php echo $row4['price'] ?> บาท</p>
                            <a href="productdetail/<?php echo $row4['network'] ?>/<?php echo $row4['tel'] ?>/<?php echo $row4['price'] ?>" class="addtocart"></a>
                        </div>
                    <?php } ?>

                    <!-- ขึ้นบรรทัดใหม่ -->
                    <div class="cleaner"></div>

                    <!-- หมวดเบอร์ 4  -->
                    <a name="tel4">
                        <h1> เบอร์เรียง<img src="images/idea.png" width="65" height="56" /></h1>
                    </a>
                    <?php $result5 = getBertel("เบอร์เรียง"); while ($row5 = $result5->fetch_assoc()) { ?>
                        <div class="product_box">
                            <h3>&nbsp;</h3>
                            <h2><a href="productdetail/<?php echo $row5['network'] ?>/<?php echo $row5['tel'] ?>/<?php echo $row5['price'] ?>"><?php echo $row5['tel'] ?></a></h2>
                            <p><a href="productdetail/<?php echo $row5['network'] ?>/<?php echo $row5['tel'] ?>/<?php echo $row5['price'] ?>"><img src="<?php echo "images/product/" . ($row5['network'] == 'TRUE' ? 'true.png' : ($row5['network'] == 'AIS' ? 'ais.png' : 'dtac.png')) ?>" hspace="20" /></a>ผลรวม <?php echo $row5['sum'] ?></p>
                            <p class="product_price"><?php echo $row5['price'] ?> บาท</p>
                            <a href="productdetail/<?php echo $row5['network'] ?>/<?php echo $row5['tel'] ?>/<?php echo $row5['price'] ?>" class="addtocart"></a>
                        </div>
                    <?php } ?>

                    <!-- ขึ้นบรรทัดใหม่ -->
                    <div class="cleaner"></div>

                    <!-- หมวดเบอร์ 5  -->
                    <a name="tel5">
                        <h1> เบอร์ตอง<img src="images/idea.png" width="65" height="56" /></h1>
                    </a>
                    <?php $result6 = getBertel("เบอร์ตอง"); while ($row6 = $result6->fetch_assoc()) { ?>
                        <div class="product_box">
                            <h3>&nbsp;</h3>
                            <h2><a href="productdetail/<?php echo $row6['network'] ?>/<?php echo $row6['tel'] ?>/<?php echo $row6['price'] ?>"><?php echo $row6['tel'] ?></a></h2>
                            <p><a href="productdetail/<?php echo $row6['network'] ?>/<?php echo $row6['tel'] ?>/<?php echo $row6['price'] ?>"><img src="<?php echo "images/product/" . ($row6['network'] == 'TRUE' ? 'true.png' : ($row6['network'] == 'AIS' ? 'ais.png' : 'dtac.png')) ?>" hspace="20" /></a>ผลรวม <?php echo $row6['sum'] ?></p>
                            <p class="product_price"><?php echo $row6['price'] ?> บาท</p>
                            <a href="productdetail/<?php echo $row6['network'] ?>/<?php echo $row6['tel'] ?>/<?php echo $row6['price'] ?>" class="addtocart"></a>
                        </div>
                    <?php } ?>

                    <!-- ขึ้นบรรทัดใหม่ -->
                    <div class="cleaner"></div>

                    <!-- หมวดเบอร์ 6  -->
                    <a name="tel6">
                        <h1> เบอร์โฟร์<img src="images/idea.png" width="65" height="56" /></h1>
                    </a>
                    <?php $result7 = getBertel("เบอร์โฟร์"); while ($row7 = $result7->fetch_assoc()) { ?>
                        <div class="product_box">
                            <h3>&nbsp;</h3>
                            <h2><a href="productdetail/<?php echo $row7['network'] ?>/<?php echo $row7['tel'] ?>/<?php echo $row7['price'] ?>"><?php echo $row7['tel'] ?></a></h2>
                            <p><a href="productdetail/<?php echo $row7['network'] ?>/<?php echo $row7['tel'] ?>/<?php echo $row7['price'] ?>"><img src="<?php echo "images/product/" . ($row7['network'] == 'TRUE' ? 'true.png' : ($row7['network'] == 'AIS' ? 'ais.png' : 'dtac.png')) ?>" hspace="20" /></a>ผลรวม <?php echo $row7['sum'] ?></p>
                            <p class="product_price"><?php echo $row7['price'] ?> บาท</p>
                            <a href="productdetail/<?php echo $row7['network'] ?>/<?php echo $row7['tel'] ?>/<?php echo $row7['price'] ?>" class="addtocart"></a>
                        </div>
                    <?php } ?>

                    <!-- ขึ้นบรรทัดใหม่ -->
                    <div class="cleaner"></div>
                </div>
                <div class="cleaner"></div>
            </div> <!-- END of templatemo_main -->
        </div> <!-- END of templatemo_wrapper -->

        <!-- ส่วนท้าย -->
        <div id="background_footer">
            <div id="templatemo_footer">
                <p><a href="home">หน้าแรก</a> | <a href="products">หมวดหมู่เบอร์</a> | <a href="about">วิธีสั่งซื้อ</a> | <a href="faqs">ติดต่อเรา</a> | <a href="login">Admin</a>
                </p>
                Copyright © 2072 <a href="#">berchewit.com</a> <!-- Credit: www.templatemo.com -->
            </div> <!-- END of templatemo_footer -->
        </div>
        <script typt="text/javascript" src="js/phone_number_search.js"></script>
    </div> <!-- END of templatemo_body_wrapper -->

</body>

</html>