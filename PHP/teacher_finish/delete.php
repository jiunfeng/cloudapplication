<?php
include_once "conn.php";

$userId = $_GET["userId"];
$sql = "DELETE FROM member WHERE userId = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $userId);
$stmt->execute();

$stmt->close();
$conn->close();
?>