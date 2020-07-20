<?php
header('Access-Control-Allow-Origin: *');
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include_once("../database/db.php");
$db = new Database();
$con = $db->connect();

$params = $columns = $totalRecords = $data = array();
$params = $_REQUEST;
$columns = array(
    0 => 'tel',
    1 => 'sum',
    2 => 'detail',
    3 => 'network',
    4 => 'type'
);
$where_condition = $sqlTot = $sqlRec = "";
if (!empty($params['search']['value'])) {
    $where_condition .=    " WHERE ";
    $where_condition .= ' (tel LIKE "%' . $_POST["search"]["value"] . '%" ';
    $where_condition .= 'OR sum LIKE "%' . $_POST["search"]["value"] . '%" ';
    $where_condition .= 'OR detail LIKE "%' . $_POST["search"]["value"] . '%" ';
    $where_condition .= 'OR network LIKE "%' . $_POST["search"]["value"] . '%" ';
    $where_condition .= 'OR type LIKE "%' . $_POST["search"]["value"] . '%") ';
}
if (isset($_POST["category"]) && isset($_POST['tt'])) {
    $where_condition .=    " WHERE ";
    $category = $_POST['category'];
    $type = $_POST['tt'];
    switch($type){
        case "nf":
            $where_condition .= 'network ="' . $category . '" ';
        break;
        case "tf":
            $where_condition .= 'type ="' . $category . '" ';
        break;
    }
}
$sql_query = " SELECT pnid,tel,sum,price,detail,b.type,d.network,e.discount
FROM phone_number AS a 
INNER JOIN type AS b ON a.tid = b.tid
INNER JOIN network AS d ON a.nid = d.nid
INNER JOIN discount AS e ON a.did = e.did ";
$sqlTot .= $sql_query;
$sqlRec .= $sql_query;
if (isset($where_condition) && $where_condition != '') {
    $sqlTot .= $where_condition;
    $sqlRec .= $where_condition;
}
$sqlRec .=  " ORDER BY " . $columns[$params['order'][0]['column']] . "   " . $params['order'][0]['dir'] . "  LIMIT " . $params['start'] . " ," . $params['length'] . " ";
$statement = $con->prepare($sqlTot);
$statement->execute();
$result = $statement->get_result();
$totalRecords = $result->num_rows;
$statement2 = $con->prepare($sqlRec);
$statement2->execute();
$result2 = $statement2->get_result();
//array_sum(str_split($row["tel"]));
$data = array();
while ($row = $result2->fetch_assoc()) {
    $sub_array = array();
    $sub_array[]  = $row["tel"];
    $sub_array[]  = $row["sum"];
    $sub_array[]  = $row["price"];
    $sub_array[]  = $row["detail"];
    $sub_array[]  = $row["network"];
    $sub_array[]  = $row["type"];
    $sub_array[]  = '<button  onclick="location.href=\'http://localhost/klangber/editTel/'.$row['pnid'].'\'">แก้ไข</button>
    <button type="button" onclick="removePhonenumber(' . $row['pnid'].')">ลบ</button>';

    $data[] = $sub_array;
}
$json_data = array(
    "draw"            => intval($params['draw']),
    "recordsTotal"    => intval($totalRecords),
    "recordsFiltered" => intval($totalRecords),
    "data"            => $data
);
echo json_encode($json_data);

// $sub_array[]  = '<button  onclick="location.href=\'https://berchewit.com/editTel/'.$row['pnid'].'\'">แก้ไข</button>
// <button type="button" onclick="removePhonenumber(' . $row['pnid'].')">ลบ</button>';
