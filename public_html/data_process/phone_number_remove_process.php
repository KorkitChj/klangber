<?php
header('Access-Control-Allow-Origin: *');
include_once("../database/db.php");
$db = new Database();
$con = $db->connect();

$pnid = $_POST['data'];
    $statement = $con->prepare("DELETE FROM phone_number WHERE pnid = ?");
    $statement->bind_param('s', $pnid);
    $statement->execute();
    if ($statement->affected_rows >= 0) {
        echo "ok";
    } else {
        echo "failed";
    }
?>