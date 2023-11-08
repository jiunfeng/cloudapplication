<?php

$userId = $_POST["userId"];
$userName = $_POST["userName"];
$mobile = $_POST["mobile"];

include "conn.php";

$sql = "UPDATE member set userName = ?, mobile = ? WHERE userId = ?";
// 準備sql語法
$stmt = $conn->prepare($sql);
// s:string 文字
// i:integer 數字
// bind_param:綁定參數
$stmt->bind_param("sss", $userName, $mobile, $userId);
// execute:執行sql語法
$stmt->execute();
// stmt->close() : 關閉 prepared stratment
$stmt->close();
// conn->close(): 關閉資料庫連線
$conn->close();

// 轉址
header("Location: samp01.php");
// exit:結束, 後面的程式不再執行
exit;
?>