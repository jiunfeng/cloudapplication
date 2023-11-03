<?php
/*
include "conn.php";

include_once "conn.php"; //只會引用一次不管多少CODE引用
require "conn.php";
require_once "conn.php";
//4擇1
*/
/* $server = "localhost";
$userName = "root";
$pwd = "";
$db = "php_mysql";
$conn = new mysqli($server, $userName, $pwd, $db); */
$userId = $_POST["userId"];
$sql = "SELECT * FROM member WHERE userId = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $userId);
$stmt->execute();
$result = $stmt->get_result();
echo ($result->num_rows);
