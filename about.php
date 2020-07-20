<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Shoes Store - About Us</title>
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
                    <p></p>
                </div>
                <div class="cleaner"></div>
            </div> <!-- END of templatemo_header -->
        </div>

        <div id="templatemo_wrapper">
            <div id="templatemo_menubar">
                <div id="top_nav" class="ddsmoothmenu">
                    <ul>
                        <li><a href="home">หน้าแรก</a></li>
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
                        <li><a href="about" class="selected">วิธีสั่งซื้อ</a></li>
                        <li><a href="faqs">ติดต่อเรา</a></li>
                        <li><a href="loginx">Admin</a></li>
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
                    <h1><img src="images/16.png" width="757" height="125" /></h1>
                    <h2><img src="images/89.png" width="702" height="417" /></h2>
                    <h2>&nbsp;</h2>
                </div>
                <div class="cleaner"></div>
            </div> <!-- END of templatemo_main -->
        </div> <!-- END of templatemo_wrapper -->

        <!-- ส่วนท้าย -->
        <div id="background_footer">
            <div id="templatemo_footer">
                <p><a href="home">หน้าแรก</a> | <a href="products">หมวดหมู่เบอร์</a> | <a href="about">วิธีสั่งซื้อ</a> | <a href="faqs">ติดต่อเรา</a> | <a href="loginx">Admin</a>
                </p>
                Copyright © 2072 <a href="#">berchewit.com</a> <!-- Credit: www.templatemo.com -->
            </div> <!-- END of templatemo_footer -->
        </div>
        <script typt="text/javascript" src="js/phone_number_search.js"></script>
    </div> <!-- END of templatemo_body_wrapper -->

</body>

</html>