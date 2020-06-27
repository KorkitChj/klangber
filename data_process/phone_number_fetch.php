<?php
include_once("./database/db.php");
$db = new Database();
$con = $db->connect();

$sql_query = " SELECT tel,sum,price,d.network
FROM phone_number AS a 
INNER JOIN network AS d ON a.nid = d.nid ";

$statement = $con->prepare($sql_query);
$statement->execute();
$result = $statement->get_result();

function getBertel($key)
{
    global $con;
    $statement2 = $con->prepare("SELECT tel,sum,price,d.network,c.type
FROM phone_number AS a 
INNER JOIN network AS d ON a.nid = d.nid
INNER JOIN type AS c ON a.tid = c.tid WHERE type = ? ");
    $statement2->bind_param("s", $key);
    $statement2->execute();
    return $result2 = $statement2->get_result();
}
