<?php
include_once "conn.php";

$userId = $_POST["userId"];
$sql = "SELECT * FROM member WHERE userId = ?";
$stmt = $conn->prepare($sql);
// s:string 文字
// bind_param:綁定參數
$stmt->bind_param("s", $userId);
// execute:執行sql語法
$stmt->execute();
$result = $stmt->get_result();
//$user = $result->fetch_assoc();
// 輸出筆數
echo($result->num_rows);
//echo($user["userName"]);
?>