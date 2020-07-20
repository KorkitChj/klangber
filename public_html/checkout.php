<?php
include_once("./database/constants.php");
function tel()
{ ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Shoes Store - Check Out</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet" type="text/css" /> -->
        <link href="templatemo_style.css" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
        <link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

        <!-- <script type="text/javascript">
            ddsmoothmenu.init({
                mainmenuid: "top_nav", //menu DIV id
                orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
                classname: 'ddsmoothmenu', //class added to menu's outer DIV
                //customtheme: ["#1c5a80", "#18374a"],
                contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
            })
        </script> -->
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
                            <li><a href="checkout" class="selected">Admin</a></li>
                            <li><a href="<?php echo DOMAIN . '/logout' ?>">Logout</a></li>
                        </ul>
                        <br style="clear: left" />
                    </div> <!-- end of ddsmoothmenu -->
                    <!-- <div id="templatemo_search">
                    <form action="#" method="get">
                        <input type="text" value=" " name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                        <input type="submit" name="Search" value=" " alt="Search" id="searchbutton" title="Search" class="sub_btn" />
                    </form>
                </div> -->
                </div> <!-- END of templatemo_menubar -->

                <div id="templatemo_main_table">

                    <div id="content_table" class="float_b">
                        <h2>รายการเบอร์<img src="images/pencil.png" width="53" height="66" /></h2>
                        <div id="position_button">
                            <button class="button" onclick="location.href='addTel'">+</button>
                        </div><br><br><br><br>
                        <div class="datagrid">
                            <table id="phone_number" width="100%">
                                <thead>
                                    <tr>
                                        <th>เบอร์โทรศัพท์</th>
                                        <th>ผลรวม</th>
                                        <th>ราคา</th>
                                        <th>รายละเอียด</th>
                                        <th width="5px">เครือข่าย
                                            <select name="network_filter" id="network_filter" class="form-control form-control-sm">
                                                <option value="">ทั้งหมด</option>
                                                <?php
                                                $value4 = get_network();

                                                while ($network = $value4->fetch_assoc()) {
                                                    echo '<option value="' . $network["network"] . '">' . $network["network"] . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </th>
                                        <th width="5px">ประเภท
                                            <select name="type_filter" id="type_filter" class="form-control form-control-sm">
                                                <option value="">ทั้งหมด</option>
                                                <?php
                                                $value5 = get_type();

                                                while ($type = $value5->fetch_assoc()) {
                                                    echo '<option value="' . $type["type"] . '">' . $type["type"] . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </th>
                                        <th>เครื่องมือ</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
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

        </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script type="text/javascript" src="js/ddsmoothmenu.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <!--phone_number_retrieve.js-->
        <script type="text/javascript" src="./js/phone_number_retrieve.js"></script>
    </body>

    </html>
<?php } ?>
<?php
header('Cache-Control: no cache'); //no cache
//session_cache_limiter('private_no_expire'); // works
//session_cache_limiter('public'); // works too
//session_start();
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

function get_network()
{
    global $con;
    $network = "SELECT network FROM network GROUP BY network ORDER BY network ASC";
    $statement3 = $con->prepare($network);
    $statement3->execute();
    $result3 = $statement3->get_result();
    return $result3;
}

function get_type()
{
    global $con;
    $type = "SELECT type FROM type GROUP BY type ORDER BY type ASC";
    $statement4 = $con->prepare($type);
    $statement4->execute();
    $result4 = $statement4->get_result();
    return $result4;
}
if (!isset($_SESSION["user_login"])) {
    if (isset($_POST["email"])) {
        if (isset($_POST["password"])) {
            $returns = userLogin($_POST["email"], $_POST["password"]);
            if ($returns != "LOGIN_SUCCESS") {
                echo "<script>
                        alert('$returns');
                        window.location.href='" . DOMAIN . "/login';
                    </script>";
            } else {
                $_SESSION["user_login"] = $_SESSION["uid"];
                tel();
            }
        } else {
            echo "<script>
            alert('link ไม่ถูกต้อง');
            window.location.href='" . DOMAIN . "/login';
            </script>";
        }
    } else {
        echo "<script>
        alert('link ไม่ถูกต้อง');
        window.location.href='" . DOMAIN . "/login';
        </script>";
    }
} else {
tel();
} ?>