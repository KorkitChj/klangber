<?php
include_once("../database/db.php");
$db = new Database();
$con = $db->connect();

if (isset($_POST['submit'])) {
    $tel = $_POST['tel'];
    $sum = $_POST['sum'];
    $price = $_POST['price'];
    $detail = $_POST['detail'];
    $network = $_POST['network'];
    $type = $_POST['type'];

    //$sql_type = "SELECT tid FROM type WHERE type = ?";
    //$sql_network = "SELECT nid FROM network WHERE network = ?";

    function queryId($id, $key2, $table, $value)
    {
        global $con;
        $sql = "SELECT $id FROM $table WHERE $key2 = ?";
        $statement = $con->prepare($sql);
        $statement->bind_param("s", $value);
        $statement->execute();
        $result = $statement->get_result();
        $row = $result->fetch_assoc();
        return $row[$id];
    }
    $typeID = queryId("tid", "type", "type", $type);
    $netID = queryId("nid", "network", "network", $network);
    //$sql2 = "INSERT INTO phone_number (tel,sum,price,detail,tid,nid,did,stid) VALUES (?,?,?,?,?,?,?,?)";
    $statement2 = $con->prepare("INSERT INTO phone_number (tel,sum,price,detail,tid,nid,did,stid) VALUES (?,?,?,?,?,?,?,?)");
    $s = 'ssssssss';
    $a = 1;
    $statement2->bind_param($s, $tel, $sum, $price, $detail, $typeID, $netID, $a, $a);
    if ($statement2->execute()) {
        echo "<script>
        alert('Success');
        window.location.href='" . DOMAIN . "/checkout.php';
    </script>";
    } else {
        echo "<script>
        alert('Failed');
    </script>";
    }
}
