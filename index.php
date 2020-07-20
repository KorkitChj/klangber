<?php
include_once("./data_process/phone_number_fetch.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Shoes Store from templatemo</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <link href="templatemo_style.css" rel="stylesheet" type="text/css" />

  <link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />

  <link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/ddsmoothmenu.js"></script>
  <!-- /***********************************************
    * Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
    * This notice MUST stay intact for legal use
    * Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
    ***********************************************/ -->

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
  <!-- พื้นหลังของเว็บ -->
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

      <!-- ส่วนเนื้อหา -->
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
          <?php include_once('./data_process/form_phone_number_search.php'); ?>
        </div> <!-- END of templatemo_menubar -->

        <div id="templatemo_main">
          <div id="content" class="float_b">
            <div id="slider-wrapper">
              <div id="slider" class="nivoSlider"><img src="images/slider/50.jpg" alt="" />
                <a href="#"><img src="images/slider/51.jpg" alt="" /></a>
                <img src="images/slider/52.jpg" alt="" />
                <img src="images/slider/53.jpg" alt="" />
                <img src="images/slider/54.jpg" alt="" />
                <img src="images/slider/55.jpg" alt="" />

              </div>
              <div id="htmlcaption" class="nivo-html-caption">
                <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
              </div>
            </div>
            <script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
            <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
            <script type="text/javascript">
              $(window).load(function() {
                $('#slider').nivoSlider();
              });
            </script>
            <div id="gridContainer"></div>
            
            <!-- ขึ้นบรรทัดใหม่ -->
            <div class="cleaner"></div>

            <h1>เบอร์ทั้งหมด<img src="images/pencil.png" width="53" height="66" /></h1>

            <?php while ($row = $result->fetch_assoc()) { ?>
              <div class="product_box">
                <h3>&nbsp;</h3>
                <h2><a href="productdetail/<?php echo $row['network'] ?>/<?php echo $row['tel'] ?>/<?php echo $row['price'] ?>"><?php echo $row['tel'] ?></a></h2>
                <p><a href="productdetail/<?php echo $row['network'] ?>/<?php echo $row['tel'] ?>/<?php echo $row['price'] ?>"><img src="<?php echo "images/product/" . ($row['network'] == 'TRUE' ? 'true.png' : ($row['network'] == 'AIS' ? 'ais.png' : 'dtac.png')) ?>" hspace="20" /></a>ผลรวม <?php echo $row['sum'] ?></p>
                <p class="product_price"><?php echo $row['price'] ?> บาท</p>
                <a href="productdetail/<?php echo $row['network'] ?>/<?php echo $row['tel'] ?>/<?php echo $row['price'] ?>" class="addtocart"></a>
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
          <p><a href="home">หน้าแรก</a> | <a href="products">หมวดหมู่เบอร์</a> | <a href="about">วิธีสั่งซื้อ</a> | <a href="faqs">ติดต่อเรา</a> | <a href="loginx">Admin</a>
          </p>
          Copyright © 2072 <a href="#">berchewit.com</a> <!-- Credit: www.templatemo.com -->
        </div> <!-- END of templatemo_footer -->
      </div>
      <script typt="text/javascript" src="js/phone_number_search.js"></script>
  </div> <!-- END of templatemo_body_wrapper -->
</body>

</html>