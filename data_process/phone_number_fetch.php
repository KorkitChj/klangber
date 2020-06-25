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

$statement2 = $con->prepare("SELECT tel,sum,price,d.network,c.type
FROM phone_number AS a 
INNER JOIN network AS d ON a.nid = d.nid
INNER JOIN type AS c ON a.tid = c.tid WHERE type = 'เบอร์มงคล'");
$statement2->execute();
$result2 = $statement2->get_result();

$statement3 = $con->prepare("SELECT tel,sum,price,d.network,c.type
FROM phone_number AS a 
INNER JOIN network AS d ON a.nid = d.nid
INNER JOIN type AS c ON a.tid = c.tid WHERE type = 'เบอร์มงคลท้าย'");
$statement3->execute();
$result3 = $statement3->get_result();

$statement4 = $con->prepare("SELECT tel,sum,price,d.network,c.type
FROM phone_number AS a 
INNER JOIN network AS d ON a.nid = d.nid
INNER JOIN type AS c ON a.tid = c.tid WHERE type = 'เลขหงส์'");
$statement4->execute();
$result4 = $statement4->get_result();

$statement5 = $con->prepare("SELECT tel,sum,price,d.network,c.type
FROM phone_number AS a 
INNER JOIN network AS d ON a.nid = d.nid
INNER JOIN type AS c ON a.tid = c.tid WHERE type = 'เบอร์เรียง'");
$statement5->execute();
$result5 = $statement5->get_result();

$statement6 = $con->prepare("SELECT tel,sum,price,d.network,c.type
FROM phone_number AS a 
INNER JOIN network AS d ON a.nid = d.nid
INNER JOIN type AS c ON a.tid = c.tid WHERE type = 'เบอร์ตอง'");
$statement6->execute();
$result6 = $statement6->get_result();

$statement7 = $con->prepare("SELECT tel,sum,price,d.network,c.type
FROM phone_number AS a 
INNER JOIN network AS d ON a.nid = d.nid
INNER JOIN type AS c ON a.tid = c.tid WHERE type = 'เบอร์โฟร์'");
$statement7->execute();
$result7 = $statement7->get_result();
?>