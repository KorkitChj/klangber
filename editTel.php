<?php
include_once("./database/db.php");
$db = new Database();
$con = $db->connect();

if (!isset($_SESSION["user_login"])) {
    echo "<script>
    alert('link ไม่ถูกต้อง');
    window.location.href='" . DOMAIN . "/login/login.php';
    </script>";
} else {
    $key = $_GET['id'];
    $sql_query = " SELECT pnid,tel,sum,price,detail,b.type,d.network,e.discount
FROM phone_number AS a 
INNER JOIN type AS b ON a.tid = b.tid
INNER JOIN network AS d ON a.nid = d.nid
INNER JOIN discount AS e ON a.did = e.did WHERE pnid = ? ";
$statement = $con->prepare($sql_query);
$statement->bind_param("s",$key);
$statement->execute();
$result = $statement->get_result();
$row = $result->fetch_assoc();

// $sql_query2 = " SELECT network FROM network";
// $statement2 = $con->prepare($sql_query2);
// $statement2->execute();
// $result2 = $statement2->get_result();
// $row2 = $result2->fetch_assoc();

// $sql_query2 = " SELECT network FROM network";
// $statement2 = $con->prepare($sql_query2);
// $statement2->execute();
// $result2 = $statement2->get_result();
// $row2 = $result2->fetch_assoc();
?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Shoes Store - Check Out</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link href="templatemo_style.css" rel="stylesheet" type="text/css" />

        <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" /> -->
        <link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

        <!--<script type="text/javascript">
        ddsmoothmenu.init({
            mainmenuid: "top_nav", //menu DIV id
            orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
            classname: 'ddsmoothmenu', //class added to menu's outer DIV
            //customtheme: ["#1c5a80", "#18374a"],
            contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
        })
    </script>-->
        <!-- จบ -->

        <!-- css admin  -->
        <link rel="stylesheet" type="text/css" href="admin.css" />
        <!-- จบ -->

        <!-- css addTel  -->
        <link rel="stylesheet" type="text/css" href="addTel.css" />
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
                            <!-- <li><a href="index.php">หน้าแรก</a></li>
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
                        <li><a href="faqs.php">ติดต่อเรา</a></li> -->
                            <li><a href="checkout.php" class="selected">Admin</a></li>
                            <li><a href="<?php echo DOMAIN . '/logout.php' ?>">Logout</a></li>

                        </ul>
                        <br style="clear: left" />
                    </div> <!-- end of ddsmoothmenu -->

                </div> <!-- END of templatemo_menubar -->

                <div id="templatemo_main_table">

                    <div id="content_table" class="float_b">
                        <div class="positionText">
                            <h2>แก้ไขรายการเบอร์ <img src="images/pencil.png" width="53" height="66" /></h2>
                        </div>
                        <!-- form เพิ่มข้อมูล -->
                        <div class="form-style-5">
                            <form action="./data_process/phone_number_update.php" method="POST">
                                <fieldset>
                                    <legend><span class="number">1</span> เบอร์โทรศัพท์</legend>
                                    <input type="text" name="tel" value="<?php echo $row['tel'] ?>" required>
                                    <!-- <legend><span class="number">2</span> ผลรวม</legend>
                                    <input type="number" name="sum" value="<?php echo $row['sum'] ?>" required> -->
                                    <legend><span class="number">3</span> ราคา</legend>
                                    <input type="number" name="price" value="<?php echo $row['price'] ?>" required>
                                    <legend><span class="number">4</span> รายละเอียด</legend>
                                    <input type="text" name="detail" value="<?php echo $row['detail'] ?>" required>

                                    <legend><span class="number">5</span> เครื่อข่าย</legend>
                                    <select id="job" name="network">
                                        <optgroup label="โปรดเลือกเครื่อข่าย">
                                            <option <?php if ($row['network'] == "DTAC" ) echo 'selected' ; ?>value="DTAC">Dtac</option>
                                            <option <?php if ($row['network'] == "TRUE" ) echo 'selected' ; ?>value="TRUE">Truemove</option>
                                            <option <?php if ($row['network'] == "AIS" ) echo 'selected' ; ?>value="AIS">Ais</option>
                                        </optgroup>
                                    </select>

                                    <legend><span class="number">6</span> หมวดหมู่เบอร์</legend>
                                    <select id="job" name="type">
                                        <optgroup label="โปรดเลือกหมวดหมู่เบอร์">
                                            <option <?php if ($row['type'] == "เบอร์มงคล" ) echo 'selected' ; ?> value="เบอร์มงคล">เบอร์มงคล</option>
                                            <option <?php if ($row['type'] == "เบอร์มงคลท้าย" ) echo 'selected' ; ?> value="เบอร์มงคลท้าย">เบอร์มงคลท้าย</option>
                                            <option <?php if ($row['type'] == "เบอร์หงส์มังกร" ) echo 'selected' ; ?> value="เบอร์หงส์มังกร">เบอร์หงส์มังกร</option>
                                            <option <?php if ($row['type'] == "เบอร์เรียง" ) echo 'selected' ; ?> value="เบอร์เรียง">เบอร์เรียง</option>
                                            <option <?php if ($row['type'] == "เบอร์ตอง" ) echo 'selected' ; ?> value="เบอร์ตอง">เบอร์ตอง</option>
                                            <option <?php if ($row['type'] == "เบอร์โฟร์" ) echo 'selected' ; ?> value="เบอร์โฟร์">เบอร์โฟร์</option>
                                        </optgroup>
                                    </select>
                                    <input type="hidden" name="key" value="<?php echo $key ?>">
                                </fieldset>
                                <input type="submit" value="ยืนยัน" name="submit"/>
                                <input type="button" onclick="history.back();" value="ยกเลิก" />
                            </form>
                        </div>

                    </div>
                </div>
                <div class="cleaner"></div>
            </div> <!-- END of templatemo_main -->
        </div> <!-- END of templatemo_wrapper -->

        <!-- ส่วนท้าย -->
        <div id="background_footer">
            <div id="templatemo_footer">
                <p><a href="index.php">หน้าแรก</a> | <a href="products.php">หมวดหมู่เบอร์</a> | <a href="about.php">วิธีสั่งซื้อ</a> | <a href="faqs.php">ติดต่อเรา</a> | <a href="Login/login.php">Admin</a>
                </p>
                Copyright © 2072 <a href="#">KlangBer.com</a> <!-- Credit: www.templatemo.com -->
            </div> <!-- END of templatemo_footer -->
        </div>

        </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script type="text/javascript" src="js/ddsmoothmenu.js"></script>
        <!-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script> -->
        <!--phone_number_retrieve.js-->
        <!-- <script type="text/javascript" src="./js/phone_number_retrieve.js"></script> -->
    </body>

    </html>
<?php } ?>