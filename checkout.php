<?php
include_once("./database/db.php");
$db = new Database();
$con = $db->connect();
function userLogin($email, $password)
{
    global $con;
    $pre_stmt = $con->prepare("SELECT uid,email,password FROM users WHERE email = ?");
    $pre_stmt->bind_param("s", $email);
    $pre_stmt->execute() or die($con->error);
    $result = $pre_stmt->get_result();

    if ($result->num_rows < 1) {
        return "NOT_REGISTERD";
    } else {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            $_SESSION["uid"] = $row["uid"];
            $_SESSION["email"] = $row["email"];
            return "LOGIN_SUCCESS";
        } else {
            return "PASSWORD_NOT_MATCHED";
        }
    }
}

if (isset($_POST["email"])) {
    if (isset($_POST["password"])) {
        $returns = userLogin($_POST["email"], $_POST["password"]);
        if ($returns != "LOGIN_SUCCESS") {
            echo "<script>
                    alert('$returns');
                    window.location.href='".DOMAIN."/login/login.php';
                </script>";
        } else {
            $_SESSION["user_login"] = $_SESSION["uid"];
        }
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Shoes Store - Check Out</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="templatemo_style.css" rel="stylesheet" type="text/css" />

    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" /> -->
    <link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.7/css/fixedHeader.bootstrap4.min.css" />

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/ddsmoothmenu.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/fixedheader/3.1.7/js/dataTables.fixedHeader.min.js"></script>

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
                        <!-- <li><a href="index.php" class="selected">หน้าแรก</a></li>
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
                        <li><a href="checkout.php">Admin</a></li>

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
            <p><a href="index.php">หน้าแรก</a> | <a href="products.php">หมวดหมู่เบอร์</a> | <a href="about.php">วิธีสั่งซื้อ</a> | <a href="faqs.php">ติดต่อเรา</a> | <a href="Login/login.php">Admin</a>
            </p>
            Copyright © 2072 <a href="#">KlangBer.com</a> <!-- Credit: www.templatemo.com -->
        </div> <!-- END of templatemo_footer -->
    </div>

    </div>

</body>

</html>