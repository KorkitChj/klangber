<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Shoes Store - Check Out</title>
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
    <!-- จบ -->

    <!-- css ปุ่ม +  -->
    <style>
        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 24px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            outline: none;
            color: #fff;
            background-color: #4CAF50;
            border: none;
            border-radius: 10px;
            box-shadow: 0 9px #999;
        }

        .button:hover {
            background-color: #3e8e41
        }

        .button:active {
            background-color: #3e8e41;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }
    </style>
    <!-- จบ -->

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
                    <p></p>
                </div>
                <div class="cleaner"></div>
            </div> <!-- END of templatemo_header -->
        </div>

        <div id="templatemo_wrapper">
            <div id="templatemo_menubar">
                <div id="top_nav" class="ddsmoothmenu">
                    <ul>
                        <li><a href="index.php" class="selected">หน้าแรก</a></li>
                        <li><a href="products.php">หมวดหมู่เบอร์</a>
                            <ul>
                                <li><a href="products.php #tel1">เบอร์มงคล</a></li>
                                <li><a href="products.php #tel2">เบอร์มงคลท้าย</a></li>
                                <li><a href="products.php #tel3">เบอร์หงส์มังกร</a></li>
                                <li><a href="products.php #tel4">เบอร์เรียง</a></li>
                                <li><a href="products.php #tel5">เบอร์ตอง</a></li>
                                <li><a href="products.php #tel6">เบอร์โฟร์</a></li>
                            </ul>
                        </li>
                        <li><a href="about.php">วิธีสั่งซื้อ</a></li>
                        <li><a href="faqs.php">ติดต่อเรา</a></li>
                        <li><a href="checkout.php">Admin</a></li>

                    </ul>
                    <br style="clear: left" />
                </div> <!-- end of ddsmoothmenu -->
                <div id="templatemo_search">
                    <form action="#" method="get">
                        <input type="text" value=" " name="keyword" id="keyword" title="keyword"
                            onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                        <input type="submit" name="Search" value=" " alt="Search" id="searchbutton" title="Search"
                            class="sub_btn" />
                    </form>
                </div>
            </div> <!-- END of templatemo_menubar -->

            <div id="templatemo_main_table">

                <div id="content_table" class="float_b">
                    <h2>รายการเบอร์<img src="images/pencil.png" width="53" height="66" /></h2>
                    <div id="position_button">
                        <button class="button">+</button>
                    </div><br><br><br><br>
                    <div class="datagrid">
                        <table>
                            <thead>
                                <tr>
                                    <th>เบอร์โทรศัพท์</th>
                                    <th>ผลรวม</th>
                                    <th>ราคา</th>
                                    <th>เครื่อข่าย</th>
                                    <th>หมวดหมู่เบอร์</th>
                                    <th colspan="2">เครื่องมือ</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <td colspan="7">
                                        <div id="paging">
                                            <ul>
                                                <li><a href="#"><span>Previous</span></a></li>
                                                <li><a href="#" class="active"><span>1</span></a></li>
                                                <li><a href="#"><span>2</span></a></li>
                                                <li><a href="#"><span>3</span></a></li>
                                                <li><a href="#"><span>4</span></a></li>
                                                <li><a href="#"><span>5</span></a></li>
                                                <li><a href="#"><span>Next</span></a></li>
                                            </ul>
                                        </div>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>093-6556550</td>
                                    <td>50</td>
                                    <td>18,000 บาท</td>
                                    <td>dtac</td>
                                    <td>เบอร์ลงท้าย</td>
                                    <td>แก้ไข</td>
                                    <td>ลบทิ้ง</td>
                                </tr>
                                <tr class="alt">
                                    <td>093-6556550</td>
                                    <td>50</td>
                                    <td>18,000 บาท</td>
                                    <td>dtac</td>
                                    <td>เบอร์ลงท้าย</td>
                                    <td>แก้ไข</td>
                                    <td>ลบทิ้ง</td>
                                </tr>
                                <tr>
                                    <td>093-6556550</td>
                                    <td>50</td>
                                    <td>18,000 บาท</td>
                                    <td>dtac</td>
                                    <td>เบอร์ลงท้าย</td>
                                    <td>แก้ไข</td>
                                    <td>ลบทิ้ง</td>
                                </tr>
                                <tr class="alt">
                                    <td>093-6556550</td>
                                    <td>50</td>
                                    <td>18,000 บาท</td>
                                    <td>dtac</td>
                                    <td>เบอร์ลงท้าย</td>
                                    <td>แก้ไข</td>
                                    <td>ลบทิ้ง</td>
                                </tr>
                                <tr>
                                    <td>093-6556550</td>
                                    <td>50</td>
                                    <td>18,000 บาท</td>
                                    <td>dtac</td>
                                    <td>เบอร์ลงท้าย</td>
                                    <td>แก้ไข</td>
                                    <td>ลบทิ้ง</td>
                                </tr>
                                <tr class="alt">
                                    <td>093-6556550</td>
                                    <td>50</td>
                                    <td>18,000 บาท</td>
                                    <td>dtac</td>
                                    <td>เบอร์ลงท้าย</td>
                                    <td>แก้ไข</td>
                                    <td>ลบทิ้ง</td>
                                </tr>
                                <tr>
                                    <td>093-6556550</td>
                                    <td>50</td>
                                    <td>18,000 บาท</td>
                                    <td>dtac</td>
                                    <td>เบอร์ลงท้าย</td>
                                    <td>แก้ไข</td>
                                    <td>ลบทิ้ง</td>
                                </tr>
                                <tr class="alt">
                                    <td>093-6556550</td>
                                    <td>50</td>
                                    <td>18,000 บาท</td>
                                    <td>dtac</td>
                                    <td>เบอร์ลงท้าย</td>
                                    <td>แก้ไข</td>
                                    <td>ลบทิ้ง</td>
                                </tr>
                                <tr>
                                    <td>093-6556550</td>
                                    <td>50</td>
                                    <td>18,000 บาท</td>
                                    <td>dtac</td>
                                    <td>เบอร์ลงท้าย</td>
                                    <td>แก้ไข</td>
                                    <td>ลบทิ้ง</td>
                                </tr>
                                <tr class="alt">
                                    <td>093-6556550</td>
                                    <td>50</td>
                                    <td>18,000 บาท</td>
                                    <td>dtac</td>
                                    <td>เบอร์ลงท้าย</td>
                                    <td>แก้ไข</td>
                                    <td>ลบทิ้ง</td>
                                </tr>
                                <tr>
                                    <td>093-6556550</td>
                                    <td>50</td>
                                    <td>18,000 บาท</td>
                                    <td>dtac</td>
                                    <td>เบอร์ลงท้าย</td>
                                    <td>แก้ไข</td>
                                    <td>ลบทิ้ง</td>
                                </tr>
                                <tr class="alt">
                                    <td>093-6556550</td>
                                    <td>50</td>
                                    <td>18,000 บาท</td>
                                    <td>dtac</td>
                                    <td>เบอร์ลงท้าย</td>
                                    <td>แก้ไข</td>
                                    <td>ลบทิ้ง</td>
                                </tr>
                            </tbody>
                        </table>
                    </div><br>
                </div>
            </div>
            <div class="cleaner"></div>
        </div> <!-- END of templatemo_main -->
    </div> <!-- END of templatemo_wrapper -->

    <!-- ส่วนท้าย -->
    <div id="background_footer">
        <div id="templatemo_footer">
            <p><a href="index.php">หน้าแรก</a> | <a href="products.php">หมวดหมู่เบอร์</a> | <a
                    href="about.php">วิธีสั่งซื้อ</a> | <a href="faqs.php">ติดต่อเรา</a> | <a
                    href="Login/login.php">Admin</a>
            </p>
            Copyright © 2072 <a href="#">KlangBer.com</a> <!-- Credit: www.templatemo.com -->
        </div> <!-- END of templatemo_footer -->
    </div>

    </div> END of templatemo_body_wrapper

</body>

</html>