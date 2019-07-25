<?php
header('Content-Type: application/json');

require_once('db.php');

$query = "SELECT * FROM students ORDER BY id";

$result = mysqli_query($conn,$query);

$data = array();
foreach ($result as $row) {
    $data[] = $row;
}

echo json_encode($data);
?>