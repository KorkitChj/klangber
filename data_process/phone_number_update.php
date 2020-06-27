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
    $key = $_POST['key'];

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
    $typeID = queryId("tid","type","type",$type);
    $netID = queryId("nid","network","network",$network);
    $sql2 = "UPDATE phone_number SET tel=?,sum=?,price=?,detail=?,tid=?,nid=? WHERE pnid=?";
    $statement2 = $con->prepare($sql2);
    $statement2->bind_param("sssssss",$tel,$sum,$price,$detail,$typeID,$netID,$key);
    if($statement2->execute()){
        echo "<script>
        alert('Success');
        window.location.href='" . DOMAIN . "/checkout.php';
    </script>";
    }else{
        echo "<script>
        alert('Failed');
        window.location.href='" . DOMAIN . "/editTel.php?id=$key';
    </script>";
    }
}
