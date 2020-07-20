<?php
include_once('../database/db.php');
$db = new Database();
$con = $db->connect();
//error_reporting(0);
if (isset($_REQUEST['data']) == "") {
    $sql = "SELECT * FROM phone_number ORDER BY tel ASC";
    $query = $con->prepare($sql);
    $query->execute();
    $resultSet = $query->get_result();
    $result = $resultSet->fetch_all();
} else {
    $sql = 'SELECT * FROM phone_number AS a INNER JOIN network AS b ON a.nid = b.nid WHERE ';
    $sql .= '(tel LIKE "%' . $_REQUEST["data"] . '%") ';
    $sql .= 'ORDER BY tel ASC';
    
    $query = $con->prepare($sql);
    $query->execute();
    $resultSet = $query->get_result();
    $result = $resultSet->fetch_all(MYSQLI_ASSOC);
}
if (!empty($result)) {
    $output = '';
    foreach ($result as $a => $b) {
        $output .= '<div class="product_box">
        <h3>&nbsp;</h3>
        <h2><a href="productdetail.php?n='.$b['network'].'&t='.$b['tel'].'&p='.$b['price'].'">'.$b['tel'].'</a></h2>
        <p><a href="productdetail.php?n='.$b['network'].'&t='.$b['tel'].'&p='.$b['price'].'"><img src="images/product/'.($b['network'] == 'TRUE' ? 'true.png' : ($b['network'] == 'AIS' ? 'ais.png' : 'dtac.png') ).'" hspace="20" /></a>ผลรวม'.$b['sum'].'</p>
        <p class="product_price">'.$b['price'].'บาท</p>
        <a href="productdetail.php?n='.$b['network'].'&t='.$b['tel'].'&p='.$b['price'].'" class="addtocart"></a>
        </div>';
    }
    echo $output;
} else {
    $output = '
    <div class="product_box">
    <strong>Not found!</strong> ไม่พบรายการสินค้าที่ท่านค้นหา
    </div>';
    echo $output;
}
